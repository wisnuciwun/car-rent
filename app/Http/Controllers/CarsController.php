<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Car::join('users', 'cars.id_owner', '=', 'users.id')
            ->select('users.name as owner', 'cars.*')
            ->get();

        return view('welcome', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    protected function validator(array $data)
    {
        return \Validator::make($data, [
            'brand' => 'required',
            'name' => 'required',
            'model' => 'required',
            'description' => 'required',
            'police_num' => 'required',
            'fee' => 'required',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'brand' => 'required',
            'name' => 'required',
            'model' => 'required',
            'description' => 'required',
            'police_num' => 'required',
            'fee' => 'required',
        ]);

        $car = new Car;
        $car->brand = $request->input('brand');
        $car->name = $request->input('name');
        $car->model = $request->input('model');
        $car->description = $request->input('description');
        $car->police_num = $request->input('police_num');
        $car->image = $request->input('image');
        $car->fee = $request->input('fee');
        $car->id_owner = auth()->user()->id;
        $car->availability = true;
        $car->save();

        Alert::success('Yeay!', 'Anda berhasil menambahkan mobil');

        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $exploded = explode('-', $slug);
        $car_detail = Car::find($exploded[count($exploded) - 1]);
        return view('car.detail')->with('car_detail', $car_detail);
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
        $data = Car::find($id);

        if (\Auth::user()->id !== $data->id_owner) {
            // return redirect('/profi')->with('error', 'Unauthorized Page');
        } else {
            $data->delete();

            Alert::success('Yeay!', 'Anda berhasil menghapus data mobil');

            return redirect('/profile');
        }
    }
}