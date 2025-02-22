<?php

namespace App\Http\Controllers;

use App\Models\WishList;
use App\Models\AddToCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WishListController extends Controller
{

    private $customer, $wishListCheck, $wishList;

    public function wishListAdd(Request $request)
    {

        

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


        // $this->wishListCheck = WishList::where('customer_id', $this->customer)
        // ->where('product_id', $id)
        // ->first();

            if (!$this->wishListCheck) {
                $this->wishList = new WishList();
                $this->wishList->customer_id = $user_id;
                $this->wishList->product_id = $request->product_id;
                $this->wishList->date = date('Y-m-d');
                $this->wishList->timestamp = strtotime(date('Y-m-d'));
                $this->wishList->save();

                return redirect()->route('wishlist.index')->with('message', 'Product added to wishlist.');

            } else {
                return back()->with('warning', 'Product already in wishlist.');
            }



//        return $id;
    }

    public function index()
    {
        if ($login_user = session()->get('customer_id')) {
            $user_id= $login_user;
        } else {
            $user_id = session('guest_user_id');
        }
        
        $products = WishList::where('customer_id', $user_id)->get();

        return view('website.customer.wishlist', [
            'wishlists' => $products,
        ]);
    }


    public function wishlist_addToCart(Request $request)
{


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

    // Get form data
    $item = $request->input('item'); // Get the item ID
    $data = WishList::where('id', $item)->first(); // Get the wishlist item by ID

    $qty = $request->input('qty'); // Get the quantity

    $cart = new AddToCart();
    $cart->user_id =$user_id; // Assuming the user is logged in
    $cart->product_id = $data->product_id; // Get product_id from wishlist item
    $cart->qty = $qty;
    $cart->save();
    $cartCount = AddtoCart::where('user_id', $user_id)->count();

    // Respond with success
    return response()->json([
        'message' => 'Product added to cart successfully!',
        'count' => $cartCount,
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WishList $wishList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WishList $wishList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WishList $wishList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
//    public function destroy(WishList $wishList)
//    public function destroy(string $id)
//    {
//        return $wishList;
//       //dd($id);
////        $id->delete();
//        return back()->with('message', 'Product deleted from wishlist successfully.');
//    }

    public function destroy(int $id)
    {
        $wishLists = WishList::find($id);
        //dd($wishLists);
        $wishLists->delete();
        return back()->with('error', 'Product deleted from wishlist successfully.');
    }
}
