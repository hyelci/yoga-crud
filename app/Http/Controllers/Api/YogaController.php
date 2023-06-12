<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreYogaRequest;
use App\Http\Resources\YogaResource;
use App\Models\Yoga;
use Illuminate\Http\Request;

class YogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yogas = Yoga::all();
        return YogaResource::collection($yogas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $yogas = Yoga::create($request->all());
        
        return new YogaResource($yogas);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Yoga  $yoga
     * @return \Illuminate\Http\Response
     */
    public function show(Yoga $yoga)
    {
        return new YogaResource($yoga);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Yoga  $yoga
     * @return \Illuminate\Http\Response
     */
    public function edit(Yoga $yoga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Yoga  $yoga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yoga $yoga)
    {
        $yoga->update($request->all());
        
        return new YogaResource($yoga);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Yoga  $yoga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yoga $yoga)
    {
        $yoga->delete();

        return response(null, 204);
    }
}
