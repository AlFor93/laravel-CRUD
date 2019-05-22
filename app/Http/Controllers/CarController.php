<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('pages.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create-car');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
          "brand" => "required",
          "model" => "required",
          "price_in_euro" => "required|alpha-num",
          "power" => "required|alpha-num",
          "hp" => "required|alpha-num"
        ]);

        $car = Car::create($validateData);
        return redirect('cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $car = Car::findOrFail($id);
      return view('pages.edit-car' , compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validateData = $request->validate([
        "brand" => "required",
        "model" => "required",
        "price_in_euro" => "required|alpha-num",
        "power" => "required|alpha-num",
        "hp" => "required|alpha-num"
      ]);

      Car::whereId($id)->update($validateData);
      return redirect('cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $car = Car::findOrFail($id);
      $car->delete();
      return redirect('cars');
      
    }
}
