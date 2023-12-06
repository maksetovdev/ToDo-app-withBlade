<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Services\AddTask;
use App\Services\DeleteTask;
use App\Services\UpdateTask;
use Illuminate\Validation\ValidationException;
use Monolog\Handler\RotatingFileHandler;

class TaskController extends Controller
{
    public function index()
    {
        $res = Task::all();
        return view('welcome',['tasks' => $res]);
    }
    public function store(Request $request)
    {      
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
    public function update(Request $request, string $id)
    {   
        try
            {
            //dd($request);
            app(UpdateTask::class)->execute([
                'id' => $id,
                'title' => $request->title,
                'description' => $request->description
            ]);
            return redirect(route('index'));
            //dd($request);
            }
        catch(ValidationException $error)
            {
                return response([
                    'errors' => $error->validator->errors()->all() 
                ], 422);
            }
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
