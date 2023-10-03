<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index()
    {

        $user_id = auth()->user()->id;
        $data = User::find($user_id);
        $user_cars = Car::where('id_owner', $user_id)->get();
        // $car_data = Car::all();

        $rented_car = Car::join('rents', 'cars.id', '=', 'rents.id_car')
            ->select('rents.id', '*', \DB::raw("
            case
            when rents.return_date is not null then (rents.return_date - rents.rental_start)
            else (rents.rental_deadline - rents.rental_start)
            end as duration
            "))
            ->get();

        return view('pages.profile')
            ->with('data', $data)
            ->with('user_cars', $user_cars)
            ->with('rented_car', $rented_car);
    }
}