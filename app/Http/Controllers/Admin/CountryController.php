<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Country\StoreRequest;
use App\Http\Requests\Admin\Country\UpdateRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = country::orderby('created_at','DESC')->get();
        return view('admin.country.index',[
            'countries' => $country
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.country.create')->with('success','Create country successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $country = new Country();

        $country->name = $request->name;

        $country->save();

        return redirect()->route('admin.country.index')->with('success','Create country successfully');
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
    public function edit(int $id)
    {
        $country = Country::find($id);
        return view('admin.country.edit',[
            'id' => $id,
            'country' => $country,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $country = Country::find($id);
        if($country == null) {
            abort(404);
        }
        $country->name =$request->name;
        $country->save();

        return redirect()->route('admin.country.index')->with('success','Update country successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $country = Country::find($id);
        if($country == null) {
            abort(404);
        }

        $country->delete();

        return redirect()->route('admin.country.index')->with('success','Delete country successfully');
    }
}
