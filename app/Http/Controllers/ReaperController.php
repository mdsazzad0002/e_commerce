<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reaper;

class ReaperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reaper=Reaper::latest()->get();
        return view('admin.pages.reaper', [
            'reaper'=>$reaper,
        ]);
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
    // dd($request->all());
        $request->validate([
            'flower_qty' => 'required|string|max:255',
            'reaper' => 'required|string|max:255',
            'price' => 'required|string|max:255',
           
        ]);

      

        Reaper::create([
            'flower_qty' => $request->flower_qty,
            'reaper' => $request->reaper,
            'price' => $request->price,
           
        ]);

        return redirect()->back()->with('message', 'Reaper created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $data= Reaper::findOrFail($id);

        $data->delete();
        return redirect()->back()->with('error', 'Reaper deleted successfully!');
    }
}
