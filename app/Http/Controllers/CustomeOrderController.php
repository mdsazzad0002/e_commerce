<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\CustomFlower;
use App\Models\FlowerAttribute;
use App\Models\Reaper;
use App\Models\FlowerColor;
use PhpParser\Node\Expr\FuncCall;
use App\Models\CustomFlowerOrder;
use App\Models\CustomFlowerOrderDetail;
use App\Models\AddtoCart;
use App\Models\User;
use App\Models\Customer;

class CustomeOrderController extends Controller
{


    public function custome_order(){
       $flower=Flower::latest()->get();
       $color=FlowerColor::latest()->get();
       $reaper=Reaper::orderBy('flower_qty', 'ASC')->get();

        return view('website.pages.custome_order',[
            'flower'=>$flower,
            // 'color'=>$color,
            'reaper'=>$reaper,
        ]);
    }


    public function getColors(Request $request)
{
    $flowerId = $request->input('flower_id');

    // Fetch colors associated with the selected flower
// Fetch FlowerAttribute records for the given flower_id
$attributes = FlowerAttribute::where('flower_id', $flowerId)->get();

// Extract color IDs from the attributes
$colorIds = $attributes->pluck('color_id');

// Fetch FlowerColor records based on the extracted color IDs
$colors = FlowerColor::whereIn('id', $colorIds)->get();

    // dd($colors);

    return response()->json([
        'colors' => $colors
    ]);
}

    public function getFlowerColors(Request $request) {
        // Get color IDs assigned to the selected flower from CustomFlower table
        $colorIds = CustomFlower::where('flower_id', $request->flower_id)->pluck('color_id');

        // Fetch colors from FlowerColor table
        $colors = FlowerColor::whereIn('id', $colorIds)->get();

        return response()->json($colors);
    }






    public function getFlowerPrice(Request $request)
{
    $customFlower = FlowerAttribute::where('flower_id', $request->flower_id)
        ->where('color_id', $request->color_id)
        ->first();



    return response()->json([
        'price' => $customFlower ? $customFlower->price : 0
    ]);
}



public function flowerStore(Request $request){
    $order_id = time();
    $request->validate([
        'flower_array' => 'required|array',
        'color_array' => 'required|array',
        'quantity_array' => 'required|array',
    ]);


    $user = Customer::where('email', $request->email)->where('mobile', $request->phone)->first();
    // If user doesn't exist, create a new one
    if (!$user) {
        $user = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'password' => bcrypt('12345'), // Encrypt password for security
            'address' => $request->location, // Encrypt password for security
        ]);
    }

    $total_quantity = 0;
    foreach ($request->quantity_array as $quantity) {
        $total_quantity += $quantity;
    }

    $order_flower = new CustomFlowerOrder();
    $order_flower->order_id = $order_id;
    $order_flower->customer_id = $user->id;
    $order_flower->ip_address = $request->ip();
    $order_flower->total_price = $request->grand_total;
    $order_flower->total_quantity = $total_quantity;
    $order_flower->repper_id = $request->id_current;
    $order_flower->status = 'pending';
    $order_flower->save();




  foreach ($request->total_array as $key => $value) {
      CustomFlower::create([
          'order_id'=>   $order_flower->id,
          'flower_id'=>$request->flower_array[$key],
          'color_id'=>$request->color_array[$key],
          'quantity'=>$request->quantity_array[$key],
          'price'=>$request->total_array[$key],
      ]);
  }



    return response()->json(['status' => 'success']);
}


// public function index()
// {
//     // Fetch all flowers with their associated colors and prices
//     $flowers = Flower::all(); // Get all flowers
//     $colors = FlowerColor::all(); // Get all colors
//     $flowerColorPrices = CustomFlower::all(); // Get all flower-color-price associations

//     // Pass the data to the view
//     return view('website.pages.custome_order', compact('flowers', 'colors', 'flowerColorPrices'));
// }



// public function getColors($flowerId)
// {
// $colors = Flower::find($flowerId)->flowercolors;
// return response()->json($colors);
// }

}
