<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    private $columns = ['title','description'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    { $cars= Car::get();
       return  view ('cars',compact ('cars'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Car::create($request-> only($this -> columns));
        return redirect('cars');


        $cars= new  Car;
        $cars->title= $request->title;
        $cars->description= $request-> descrption;
        if(isset($request->published)){
            $cars->published = true;
        }else{
            $cars->published = false;
        }
        $cars->save();

        return "done!";
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
        //return "car id is ".$id;
        $car = Car::findOrFail($id);
        return view('updateCar', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        Car::where('id', $id)->update($request->only($this->columns));
        return redirect('Updated');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
