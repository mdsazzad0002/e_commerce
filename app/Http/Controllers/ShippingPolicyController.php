<?php

namespace App\Http\Controllers;

use App\Models\ShippingFee;
use App\Models\ShippingPolicy;
use Illuminate\Http\Request;

class ShippingPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.shipping-policy', ['shippingPolicy' => ShippingPolicy::latest()->first()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ShippingPolicy::newShippingPolicy($request);
        return back()->with('message', 'New Policy Save Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ShippingPolicy $shippingPolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShippingPolicy $shippingPolicy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShippingPolicy $shippingPolicy)
    {
        ShippingPolicy::updateShippingPolicy($request, $shippingPolicy);
        return back()->with('message', 'Policy updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShippingPolicy $shippingPolicy)
    {
        //
    }

    public function shipping_fee(){

        $data=ShippingFee::where('id',1)->first();
        return view('admin.pages.shipping_fee',compact('data'));
    }

    public function shipping_fee_update(Request $request,$id){

       
    $request->validate([
        'inside_dhaka' => 'required|numeric',
        'outside_dhaka' => 'required|numeric',
    ]);

    $shippingFee = ShippingFee::findOrFail($id);

    $shippingFee->inside_dhaka = $request->inside_dhaka;
    $shippingFee->outside_dhaka = $request->outside_dhaka; // Fixing the name to match the database

    $shippingFee->save();

    // Redirect with success message
    return redirect()->back()->with('message', 'Shipping fee updated successfully.');

    }


}
