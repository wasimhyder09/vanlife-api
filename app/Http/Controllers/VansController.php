<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVanRequest;
use App\Http\Resources\VansResource;
use Illuminate\Http\Request;
use App\Models\Van;

class VansController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return VansResource::collection(Van::all());
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreVanRequest $request) {
    $request->validated();

    $van = Van::create([
      'name' => $request->name,
      'rate' => $request->rate,
      'category' => $request->category,
      'description' => $request->description,
      'owner' => $request->owner,
      'image' => $request->image,
    ]);

    return new VansResource($van);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Van $van) {
    return new VansResource($van);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(StoreVanRequest $request, Van $van) {
    $request->validated();

    $van->update($request->only([
      'name', 'rate', 'category', 'description', 'owner', 'image'
    ]));

    return new VansResource($van);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Van $van) {
    $van->delete();
    return response()->json([
      'success' => true,
      'message' => 'Van has been deleted'
    ]);
  }
}
