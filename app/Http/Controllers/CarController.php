<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Car;

class CarController extends Controller
{
    /**
	* Display a listing of the resource
	*
	*@return response
	*/
	public function index()
	{
		//
	}
	
	/**
	* Show the form for creating a new resource
	*
	* @return response
	*/
	public function create()
	{
		//
	}
	
	/**
	* Display the specified resource
	*
	* @param int $id
	* @return Response
	*/
	public function show($id)
	{
		$car = Car::find($id);
		return view('cars.show', array('car' => $car));
	}
	
	/**
	* Show the form for editing the specified resource
	*
	* @param int $id
	* @return Response
	*/
	public function edit($id)
	{
		//
	}
	
	/**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
	
	
}
