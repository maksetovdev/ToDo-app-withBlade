<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Services\AddTask;
use App\Services\DeleteTask;
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
            return redirect(route('index'));
        }
        catch(ValidationException $error)
            {
                return response([
                    'errors' => $error->validator->errors()->all() 
                ], 422);
            }
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        return 'Tez arada';
    }

    
    public function destroy(string $id)
    {
        try
        {
            app(DeleteTask::class)->execute(['id' => $id]);
            return redirect(route('index'));
        }
        catch(ValidationException $error)
            {
                return response([
                    'errors' => $error->validator->errors()->all() 
                ], 422);
            }
    }
}
