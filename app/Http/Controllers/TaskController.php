<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Services\AddTask;
use Illuminate\Validation\ValidationException;


class TaskController extends Controller
{
    
    public function index()
    {
        $res = Task::all();
        return view('welcome',['tasks' => $res]);
    }

    
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
