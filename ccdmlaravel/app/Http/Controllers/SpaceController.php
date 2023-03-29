<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Space::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $space = new Space();
        $space->fill([
            'user_id' => 1,
            'name' => $request->name,
            'location' => $request->location,
            'phone' => $request->phone,
            'longitude' => '456456456.25',
            'latitude' => '456456456.25',
            'status' => 1
        ]);
        $space->save();

        return $space;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
        //
    }
}
