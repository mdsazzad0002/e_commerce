<?php

namespace App\Http\Controllers;

use App\Models\CustomFlower;
use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\FlowerColor;
use App\Models\FlowerAttribute;

class CustomFlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flower = Flower::latest()->get();
        $color = FlowerColor::latest()->get();
        // $customeflower=CustomFlower::latest()->with('flower')->get();
        return view('admin.pages.custom_flower', [
            'flower' => $flower,
            'color' => $color,
            // 'customeflower'=>$customeflower,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function flower_store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Handle the file upload
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('admin/images'), $imageName);
            $imagePath = 'admin/images/' . $imageName; // Save relative path
        } else {
            $imagePath = null;
        }

        Flower::create([
            'name' => $request->name,
            'img' => $imagePath, // Store the path
        ]);

        return redirect()->back()->with('message', 'Flower created successfully!');
    }

    public function flower_delete($id)
    {

        $flower = Flower::findOrFail($id);
        $flower->delete();
        return redirect()->back()->with('message', 'Flower deleted successfully!');
    }

    public function flower_color_store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        FlowerColor::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('message', 'Flower created successfully!');
    }


    public function flower_color_delete($id)
    {

        $flower = FlowerColor::findOrFail($id);
        $flower->delete();
        return redirect()->back()->with('message', 'Color successfully!');
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
    {


    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'colors' => 'required|array', // Ensure at least one color is selected
        'prices' => 'required|array', // Ensure prices are provided
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
    ]);

    $imagePath = null;
    // Handle the file upload
    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('admin/images'), $imageName);
        $imagePath = 'admin/images/' . $imageName; // Save relative path
    } else {
        $imagePath = null;
    }


    // Create the CustomFlower record
    $flower_id = Flower::create([
        'name' => $request->name,
        'img' => $imagePath, // Store the

    ]);


    // Loop through selected colors and prices
    foreach ($request->colors as $colorId) {
        // Ensure the price for this color exists
        if (isset($request->prices[$colorId])) {
            // Create the attribute record
            FlowerAttribute::create([
                'flower_id' =>   $flower_id->id,
                'color_id' => $colorId,
                'price' => $request->prices[$colorId],
            ]);
        }
    }

    return redirect()->back()->with('message', 'Custom flower created successfully!');
}

    // public function store(Request $request)
    // {

    //     // dd($request->all());
    //     $request->validate([
    //         'flower' => 'required|string|max:255',
    //         'color' => 'required',
    //         'price' => 'required',
    //     ]);

    //     CustomFlower::create([
    //         'flower_id' => $request->flower,
    //         'color_id' => $request->color,
    //         'price'=>$request->price,
    //     ]);

    //     return redirect()->back()->with('message', 'Custome flower created successfully!');

    // }

    /**
     * Display the specified resource.
     */
    public function show( $flower)
    {
        $flower = Flower::with('attribute_price')->findOrFail($flower);
        return $flower;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $data= CustomFlower::findOrFail($id);

       $data->delete();
       return redirect()->back()->with('message', 'Custome flower deleted successfully!');
    }
}
