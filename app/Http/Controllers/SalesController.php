<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;

class SalesController extends Controller
{
  public function create(Request $request)
  {
    $request->validate([
      'manager'  =>  'required|string',
      'january'  =>  'required|string',
      'february'  =>  'required|string',
      'march'  =>  'required|string',
      'april'  =>  'required|string',
      'may'  =>  'required|string',
      'june'  =>  'required|string',
    ]);

    try {

      $data = Sales::create($request->all());
      return response()->json(['success' => true, 'data' => $data, "message" => "created successfully."], 201);

    } catch (Exception $e) {

      return response()->json(['success' => false, "message" => "failed to create"], 401);
      
    }
  }

  public function fetch(Request $request)
  {
    try {
      $data = Sales::get();
      return response()->json(['status' => 'success', 'message' => 'All sales fetched successfully!.', 'data' => $data], 200);
    } catch (\Exception $e) {
      return response()->json(['error' => 'something went wrong.please try again!.'], 400);
    }
  }

  public function delete($id)
  {
    if (Sales::where('id', $id)->exists()) {
      $salesData = Sales::find($id);
      $salesData->delete();
      return response()->json(['success' => true, "message" => "data deleted"], 200);
    } else {
      return response()->json(['success' => false, "message" => "data not found"], 400);
    }
  }


  public function update(Request $request)
  {
    $id = $request->id;
    $request->validate([
      'manager'  =>  'required|string',
      'january'  =>  'required|string',
      'february'  =>  'required|string',
      'march'  =>  'required|string',
      'april'  =>  'required|string',
      'may'  =>  'required|string',
      'june'  =>  'required|string',
    ]);

    if (Sales::where('id', $id)->exists()) {
      $Sales = Sales::find($id);

      $Sales->manager    = is_null($request->manager) ? $Sales->manager : $request->manager;
      $Sales->january    = is_null($request->january) ? $Sales->january : $request->january;
      $Sales->february   = is_null($request->february) ? $Sales->february : $request->february;
      $Sales->march      = is_null($request->march) ? $Sales->march : $request->march;
      $Sales->april      = is_null($request->april) ? $Sales->april : $request->april;
      $Sales->may        = is_null($request->may) ? $Sales->may : $request->may;
      $Sales->june       = is_null($request->june) ? $Sales->june : $request->june;

      $Sales->save();
      return response()->json(['success' => true, 'data' => $Sales, "message" => "Sales data updated successfully!."], 200);
    } else {
      return response()->json(['success' => false, "message" => "unable to update!."], 400);
    }
  }
}
