<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    private static $order;

    public static function newOrder($customer,$request)
    {
        self::$order = new Order();
        self::$order->customer_id            = $customer->id;
//        self::$order->customer_id            = $customer->id;
        self::$order->order_total            = $request->order_total;
        self::$order->tax_total              = $request->tax_total;
        self::$order->shipping_total         = $request->shipping_total;
        self::$order->order_date             = date('Y-m-d');
        self::$order->order_timestamp        = strtotime(date('Y-m-d')) ;
        self::$order->delivery_address       = $request->delivery_address;
        self::$order->payment_method         = $request->payment_method;
        self::$order->save();

        return self::$order;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public static function updateOrder($request , $id)
    {
       
        self::$order = Order::find($id);
        foreach(self::$order->orderDetails as $data){
            $product_id = $data;
        }
        $productQty = ProductVariant::where('color_id',$product_id->product_color)->where('size_id',$product_id->product_size)->first();
        
        // dd($productQty->variant_stock_amount-$product_id->product_qty);
//         self::$order->product_id;
//         $proInfo=Product::where('id',self::$order->product_id)->get();
//         $proInfo->vendor_id;



        if ($request->order_status == 'Pending'){
            self::$order->order_status = $request->order_status ;

            self::$order->delivery_status = $request->order_status ;
            self::$order->payment_status = $request->order_status ;




        }
        elseif ($request->order_status == 'Processing'){

            self::$order->order_status = $request->order_status ;
            self::$order->delivery_address = $request->delivery_address ;
            self::$order->delivery_status = $request->order_status ;
            self::$order->payment_status = $request->order_status ;
            self::$order->courier_id = $request->courier_id ;
            $productQty->variant_stock_amount = $productQty->variant_stock_amount-$product_id->product_qty;
            $productQty->save();

        }
        elseif ($request->order_status == 'Complete'){
            self::$order->order_status = $request->order_status ;

            self::$order->delivery_status = $request->order_status ;
            self::$order->payment_status = $request->order_status ;
            self::$order->payment_date = date('Y-m-d');
            self::$order->payment_timestamp = strtotime(date('Y-m-d'));
            self::$order->payment_amount = self::$order->order_total ;


        }
        elseif ($request->order_status == 'Cancel'){
            self::$order->order_status = $request->order_status ;

            self::$order->delivery_status = $request->order_status ;
            self::$order->payment_status = $request->order_status ;

        }

        self::$order->save();
    }

    public static function deleteOrder($id)
    {
        self::$order = Order::find($id);
        self::$order->delete();
    }


}
