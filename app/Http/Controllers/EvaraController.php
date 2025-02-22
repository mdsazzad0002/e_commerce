<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Brand;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Product;
use App\Models\ProductOffer;
use App\Models\ProductVariant;
use App\Models\Size;
use App\Models\AddtoCart;
use App\Models\Unit;
use App\Models\ShippingFee;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class EvaraController extends Controller
{
    private $product, $productOffer, $discount;


    public function index()
    {
      return view('website.home.index',[
          'products' => Product::where('featured_status',1)
                        ->orderBy('id','asc')
                        ->take(8)
                        ->get(),
          'newProducts' => Product::orderBy('created_at','desc')->limit(8)->get(),
         // 'products' => Product::where('status',1)
           
//          'product_offers' => ProductOffer::all(),
          'product_offers'  => ProductOffer::where('status',1)->orderBy('id','desc')->take(4)->get(),
          'vendor_products' => Product::whereNot('vendor_id', 0)->where('status', 1)->orderBy('id','desc')->take(16)->get(),
          'brands'    =>Brand::all(),
          'categories' => Category::where('mid','mid')->where('status', 1)
          ->with('subcategories') // Eager load subcategories
          
          ->take(6)->get(),

          'cates' => Category::where('bottom','bottom')->where('status', 1)
          ->with('subcategories') // Eager load subcategories
          ->take(6)
          ->get(),
          'features' => Feature::where('status',1) ->orderBy('id','desc')->get(),
          'ad12s' => Ad::where('position',12) ->orderBy('id','desc')->take(1)->get(),
          'ad04s' => Ad::where('position',4) ->orderBy('id','desc')->take(1)->get(),
          'brands' => Brand::latest()->get(),
          


      ]);
    }
    public function products(Request $request)
    {
        // Optional: Get the category if a category filter is applied, otherwise null
        $category = Category::find($request->category_id);
    
        return view('website.category.index1', [
            // Fetch products with pagination
            'products' => Product::orderBy('id', 'desc')
                ->paginate(8, ['id', 'name', 'category_id', 'image', 'regular_price', 'selling_price']),
                
            // Fetch categories with the count of related products
            'categories' => Category::with('products')->get(),
            
            // Pass the category (or null) to the view
            'category' => $category,
        ]);
    }
    

 

    public function free_delivery_product(){
       $products=Product::where('free_delivery','1')->latest()->paginate('10');
       return view('website.pages.free_product',compact('products'));
    }
    public function category($id)
    {
        //        return 'ok';

        return view('website.category.index1', [
            'products' => Product::where('category_id', $id)
                ->orderBy('id', 'desc')
                ->paginate(10, ['id', 'name', 'image', 'regular_price', 'selling_price']),
            'categories' => Category::all(),
            'category' => Category::findOrFail($id), 
            'subcategories' => SubCategory::where('category_id',$id)->latest()->take(15)->get(), 
        ]);
        
    }


    public function subCategory($id)
    {
        return view('website.category.index1',[
            'products' => Product::where('category_id', $id)
            ->orderBy('id', 'desc')
            ->paginate(8, ['id', 'name', 'image', 'regular_price', 'selling_price']),
            'categories' => Category::all(),
            'category' => SubCategory::findOrFail($id),
            'subcategories' => SubCategory::latest()->take(10)->get(),

        ]);
    }

public function sorty_by(Request $request){
       
        
        $categoryId = $request->category_id;

        if($request->sort_by == "low_to_high"){
            $products=Product::where('category_id',$categoryId)->orderBy("selling_price","asc")->get();
        }
        if($request->sort_by == "high_to_low"){
            $products=Product::where('category_id',$categoryId)->orderBy("selling_price","desc")->get();
        }

    return view("website.category.price_filter",compact("products"))->render();
}


    public function filterProducts(Request $request)
{
    $categoryId = $request->category_id;
    $products = Product::where('category_id', $categoryId)->get();

    return view('website.partials.filter_product_list', compact('products'));
}


    public function product($id)
    {
        $this->product = Product::with('variations.size')->findOrFail($id);
    
        $this->productOffer = ProductOffer::where('product_id', $id)->orderBy('id', 'desc')->first();
        $this->discount = $this->productOffer ?: '';
    
        return view('website.product.product_details', [
            'product' => $this->product,
            'images' => ProductImage::where('product_id', $this->product->id)->get(),
            'category_products' => Product::where('category_id', $this->product->category_id)
                ->where('id', '!=', $this->product->id)
                ->orderBy('id', 'desc')
                ->take(4)
                ->get(['id', 'name', 'image', 'selling_price', 'regular_price']),
            'discount' => $this->discount,
            'pounds' => $this->product->variations->pluck('size')->unique(),
            'flavor' => $this->product->variations->pluck('color')->unique(),
            'fee' => ShippingFee::latest()->first(),
            'units' => Unit::latest()->get(),
            'categories'=>Category::take(10)->get(),

        ]);
    }


    
    
}
