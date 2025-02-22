<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class SearchController extends Controller
{
    

      // Fetch search suggestions
      public function suggestions(Request $request)
      {
          $query = $request->input('query');
          $products = Product::where('name', 'LIKE', "%{$query}%")
                             ->limit(5)
                             ->get();
          return response()->json($products);
      }
  
      // Show search results page
      public function results(Request $request)
      {
          $query = $request->input('query');
          $products = Product::where('name', 'LIKE', "%{$query}%")
                             ->get();
          return view('website.pages.search_results', compact('products', 'query'));
      }

      public function TrackingOrder(){
        return view('website.pages.tracking_order',);
      }

      public function trackOrder(Request $request)
    {
        $order = Order::where('track_id', $request->track_id)->first();

        if ($order) {
            return response()->json(['status' => 'success', 'order' => $order]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Order not found']);
        }
    }

}
