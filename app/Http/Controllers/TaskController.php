<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AddTask;
use Illuminate\Validation\ValidationException;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {      
        // TRY CATCH islew kk!
        try{
            app(AddTask::class)->execute($request->all());
            return "Successfully added";
        }
        catch(ValidationException $error)
           {
               return response([
                   'errors' => $error->validator->errors()->all() 
               ], 422);
           }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
        //
    }
}
