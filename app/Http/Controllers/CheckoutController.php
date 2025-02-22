<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\AddtoCart;
use App\Models\User;

use Cart;
use App\Events\NewOrder;

use Session;

use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    private $customer, $order, $orderDetail, $sslCommerzPayment;

    public function index()
    {
        
        // $this->customer = '';
        // if( Session::get('customer_id')){
        //     $this->customer = Customer::find(Session::get('customer_id'));
        // }
        // dd('heelo');
        
        if ($login_user = session()->get('customer_id')) {
            $user_id= $login_user;
        } else {

            $user_id = session('guest_user_id');

        }
        $Items = AddtoCart::where('user_id', $user_id)->get(); // Count cart items
        $total_price= AddtoCart::where('user_id', $user_id)
        ->with('product') // Ensure product relation is loaded
        ->get()
        ->sum(fn($item) => $item->product->selling_price);

        // $total_price = $Items->sum(function ($item) {
        //     return $item->price * $item->qty;
        // });
            //   dd($total_price);
        return view('website.checkout.index',[
            'Items' => $Items,
            'total_price'=>$total_price,
        ]);
    }


public function placeOrder(Request $request)

{

    
    //   $request->validate([
    //     'name' => 'required',
    //     'email' => 'required',
    //     'mobile' => 'required',
       
    // ]);

    // dd($request->all());
    //  // Check if the user already exists by email
    $user = Customer::where('email', $request->email)->where('mobile', $request->phone)->first();

    // If user doesn't exist, create a new one
    if (!$user) {
        $user = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'password' => bcrypt('12345'), // Encrypt password for security
        ]);
    }

    // Generate a unique tracking ID (Example: radian-654321ABC)
    $trackingId = 'radian-' . strtoupper(substr(md5(uniqid()), 0, 8));
    // Create the order using the existing or new user ID
    $order = Order::create([
        'customer_id' => $user->id,
        'order_total' => $request->total, // Assuming total is coming from the request
        'shipping_total' => $request->delivery_charge, // Delivery charge from request
        'delivery_address' => $request->address,
        'track_id' => $trackingId, // Add tracking ID
        'payment_method'=>$request->payment,
       
    ]);


    // // Check the payment method
    // if ($request->payment == 'ssl') {
    //     $sslCommerzPayment = new SslCommerzPaymentController();
    //     $sslCommerzPayment->index($request, $request->total,$user->id); // Process SSL payment

    //     // Set the payment type to 'ssl'
    //     $order['payment_method'] = 'ssl';
    // } else {
    //     $order['payment_method'] = $request->payment;
    // }


    // Step 3: Insert into the orderdetails table
    foreach ($request->items as $item) {
        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $item['product_id'],
            'product_qty' => $item['qty'],
            'product_price' => $item['price'],
            'pound' => $item['pound'],
            'flavor' => $item['flavor'],
            'img' => $item['img'],
            'product_name' => $item['name'],
        ]);
    }

    $user_id = session()->get('customer_id') ?? session()->get('guest_user_id');

    // Ensure it's a string
    $user_id = (string) $user_id;
    
    AddtoCart::where('user_id', $user_id)->delete();
    

    // if ($login_user = session()->get('customer_id')) {
    //     $user_id= $login_user;
    // } else {

    //     $user_id = session('guest_user_id');

    // }
    // Delete cart items for the user
    
    // AddtoCart::where('user_id', $user_id)->delete();

    // return redirect()->route('checkout')->with('message', 'Cart Item Remove successfully.');

    // Step 4: Return response (maybe redirect to a confirmation page)
    return redirect('/complete-order')->with([
        'message' => 'Congratulations! Your order was successfully placed.',
        'tracking_id' => $trackingId
    ]);

}


    public function newOrder( Request $request){
        $this->customer = Customer::where('email', $request->email)
                                ->orWhere('mobile',$request->mobile)
                                ->first();

        if ( !$this->customer ){


           $this->customer = Customer::newCustomer($request);


        }

        Session::put('customer_id', $this->customer->id);
        Session::put('customer_name', $this->customer->name);

        if ($request->payment_method == 'Online'){
            $this->sslCommerzPayment = new SslCommerzPaymentController();

            $this->sslCommerzPayment->index($request, $this->customer);

        }
        elseif ($request->payment_method == 'Cash'){

            $this->order = Order::newOrder($this->customer, $request);

            OrderDetail::newOrderDetail($this->order);
            // Fire the event when the order is created
        event(new NewOrder($this->order, $this->customer));

            return redirect('/complete-order')->with('message','Congratulation... your Order Submitted successfully. Please check your mail and wait we will contact with you soon.');

        }


    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }


}
