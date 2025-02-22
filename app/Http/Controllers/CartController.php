<?php

namespace App\Http\Controllers;

use App\Models\AddtoCart;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{




    public function add_to_cart(Request $request)


{
    // Validate product IDs
    $request->validate([
        'product_ids' => 'required|array',
        'product_ids.*' => 'exists:products,id',  // Ensure all IDs are valid products
    ]);

    if ($login_user = session()->get('customer_id')) {
                $user_id = $login_user;

            } else {
    
                // Check if the 'guest_user_id' session variable exists
                if (!session()->has('guest_user_id')) {
                    // Generate a random guest user ID and store it in the session
                    $guest_user_id = 'guest_' . uniqid(); // Use a unique identifier
                    session(['guest_user_id' => $guest_user_id]);
                }
    
                // Retrieve the session-based guest user ID
                $user_id = session('guest_user_id');
            }

    // Store selected products in the AddToCart model
    foreach ($request->product_ids as $productId) {
        $cart = new AddToCart();
        $cart->product_id = $productId;
        $cart->qty =1;
        $cart->user_id =$user_id;  // Assuming the user is logged in
        $cart->save();
        $cartCount = AddtoCart::where('user_id', $user_id)->count();
    }

    return response()->json([
        'message' => 'Product added to cart successfully!',
        'count' => $cartCount,
    ]);
}


    // public function add_to_cart(Request $request)
    // {

    //     // $request->validate([
    //     //     'pound' => 'required', // No need for 'integer' since it's a radio value (string)
    //     // ], [
    //     //     'pound.required' => 'Please select a pound option.',
    //     // ]);

    //     if ($login_user = session()->get('customer_id')) {
    //         $user_id = $login_user;
    //     } else {

    //         // Check if the 'guest_user_id' session variable exists
    //         if (!session()->has('guest_user_id')) {
    //             // Generate a random guest user ID and store it in the session
    //             $guest_user_id = 'guest_' . uniqid(); // Use a unique identifier
    //             session(['guest_user_id' => $guest_user_id]);
    //         }

    //         // Retrieve the session-based guest user ID
    //         $user_id = session('guest_user_id');
    //     }



    //     $cart = new AddtoCart();
    //     $cart->product_id = $request->product_id;
    //     $cart->user_id = $user_id; // Store the guest user ID
    //     $cart->price = $request->price;
    //     $cart->pound = $request->pound;
    //     $cart->flavor = $request->flavor;
    //     $cart->des = $request->des;
    //     $cart->qty = $request->qty;
    //     $cart->location = $request->location;

    //     if ($request->hasFile('img')) {
    //         $image = $request->file('img');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('uploads/cart_images'), $imageName);
    //         $cart->img = 'uploads/cart_images/' . $imageName;
    //     }

    //     $cart->save();


    //      if ($login_user = session()->get('customer_id')) {
    //         $userId = $login_user;
    //     } else {

    //      $userId = session()->get('guest_user_id');

    //     }

    //     if (!$userId) {
    //         return response()->json(['count' => 0]); // Handle case where session is not set
    //     }
    //     $cartCount = AddtoCart::where('user_id', $userId)->count();

    //     // $message = 'added cart succesfully.';
    //     // return redirect()->back()->with('message', $message);
    //     // return back()->with('message', 'Category info create successfully.');

    //     return response()->json([
    //         'message' => 'Product added to cart!',
    //         'count' => $cartCount,
    //         // 'count' => $count, // Return updated count
    //     ]);
    // }




    public function getCartItems()
    {

        if ($login_user = session()->get('customer_id')) {
            $userId = $login_user;
        } else {

        $userId = session()->get('guest_user_id');

        }

        $cartItems = AddtoCart::where('user_id', $userId)->get();

        // Calculate subtotal
        $subtotal = $cartItems->sum(function ($item) {
            return $item->qty * $item->price;
        });

        $view = view('website.partials.cart_items', compact('cartItems'))->render();

        return response()->json([
            'success' => true,
            'html' => $view,
            'subtotal' => number_format($subtotal, 2),
        ]);
    }


    public function removeCartItem(Request $request)
    {
        if ($login_user = session()->get('customer_id')) {
            $user_id= $login_user;
        } else {

            $user_id = session('guest_user_id');

        }
        
       

        AddtoCart::where('user_id', $user_id)->where('id', $request->id)->delete();

        $cartCount = AddtoCart::where('user_id', $user_id)->count();

        return response()->json([
            'success' => 'Item removed successfully',
            'count' => $cartCount,
        ]);
    }

    public function cart_page_delete_item($id)
    {
        if ($login_user = session()->get('customer_id')) {
            $user_id= $login_user;
        } else {

            $user_id = session('guest_user_id');

        }

        AddtoCart::where('user_id', $user_id)->where('id', $id)->delete();
        return back()->with('error', 'Cart Item Remove successfully.');
    }


    public function cart_page()
    {

        if ($login_user = session()->get('customer_id')) {
            $user_id= $login_user;
        } else {

            $user_id = session('guest_user_id');

        }
        
        $products = AddtoCart::where('user_id', $user_id)->get(); 
        return view('website.pages.cart_page', compact('products'));
    }

    public function updateCart(Request $request)
    {
        $cartItem = AddtoCart::findOrFail($request->cart_id);
        $cartItem->qty = $request->quantity;
        $cartItem->save();

        // Calculate subtotal
        $itemtotal = $cartItem->qty * $cartItem->product->selling_price;


        return response()->json([
            'success' => true,
            'message' => 'Cart updated successfully.',
            'quantity' => $cartItem->qty,
            'itemtotal' => $itemtotal,


        ]);
    }






    // public static $product;
    /**
     * Display a listing of the resource.
     */
    //     public function index()
    //     {

    //         $cartContents = Cart::content();
    // // return $cartContents;
    //         $products = $cartContents->map(function ($item) {
    //             $color = Color::find($item->options->color);
    //             $size = Size::find($item->options->size);

    //             return (object) array_merge((array) $item, [
    //                 'color_name' => $color ? $color->name : 'N/A',
    //                 'size_name' => $size ? $size->name : 'N/A'
    //             ]);
    //         });

    //         return view('website.cart.index', compact('products'));

    //     }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     self::$product = Product::find($request->id);

    //     // Check if the product is already in the cart
    //     $cartItem = Cart::search(function ($cartItem, $rowId) use ($request) {
    //         return $cartItem->id === $request->id &&
    //             $cartItem->options->size === $request->size &&
    //             $cartItem->options->color === $request->color;
    //     })->first();

    //     // If the product is already in the cart
    //     if ($cartItem) {
    //         $message = 'Product is already in the cart.';

    //         if ($request->action_type === 'buy_now') {
    //             return redirect('/checkout')->with('warning', $message);
    //         } else {
    //             return redirect('/cart')->with('warning', $message);
    //         }
    //     }

    //     // If the product is not in the cart, add it
    //     Cart::add([
    //         'id'        => $request->id,
    //         'name'      => self::$product->name,
    //         'qty'       => $request->qty,
    //         'price'     => self::$product->selling_price,
    //         'options'   => [
    //             'image'  => self::$product->image,
    //             'code'   => self::$product->code,
    //             'size'   => $request->size,
    //             'color'  => $request->color,
    //         ]
    //     ]);

    //     // Set success message for adding the product
    //     $message = 'Added to cart successfully.';

    //     // Redirect based on action type
    //     if ($request->action_type === 'buy_now') {
    //         return redirect('/checkout')->with('message', $message);
    //     }

    //     return redirect('/cart')->with('message', $message);
    // }



    //     /**
    //      * Display the specified resource.
    //      */
    public function show(string $id)
    {
        //
    }

    //     /**
    //      * Show the form for editing the specified resource.
    //      */
    //     public function edit(string $id)
    //     {
    //         //
    //     }

    //     /**
    //      * Update the specified resource in storage.
    //      */
    //     public function update(Request $request, string $id)
    //     {
    //         return $request;
    //     }

    //     /**
    //      * Remove the specified resource from storage.
    //      */
    //     public function destroy(string $id)
    //     {
    //         Cart::remove ($id);
    //         return back()->with('error','Cart product remove successfully.');
    //     }


    //     public function delete(string $rowId)
    //     {
    //         Cart::remove ($rowId);
    //         return back()->with('error','Cart product remove successfully.');
    //     }

    //     public function updateProduct(Request $request)
    //     {
    // //        return $request->data;
    //         foreach ($request->data  as $item) {

    //             Cart::update($item['rowId'], $item['qty']);

    //         }

    //         return redirect('/cart')->with('warning','Cart product update successfully');
    //     }





}
