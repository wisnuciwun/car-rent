<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rent;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update_car_avail = Car::find($id);

        if ($update_car_avail) {
            $update_car_avail->availability = false;
        }

        $rent_data = new Rent;
        $rent_data->id_car = $request->input('id_car');
        $rent_data->id_tenant = $request->input('id_tenant');
        $rent_data->rental_deadline = $request->input('rental_deadline');
        $rent_data->rental_start = $request->input('rental_start');
        $rent_data->save();
        $update_car_avail->save();

        return redirect('/');
    }

    public function updateRentData(string $id)
    {
        $update_rent = Rent::find($id);
        $update_car_avail = Car::find($update_rent->id_car);

        if ($update_rent) {
            $update_rent->return_date = date('Y-m-d');
            $update_car_avail->availability = true;
            $update_rent->save();
            $update_car_avail->save();

            return redirect('/profile');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}