<?php
namespace App\Services\AddTask;

use App\Services\BaseService;
use Illuminate\Support\Facades\Validator;
use App\Models\Task;

class AddTask extends BaseService 
{
    public function rules()
    {
        return [
          'title'=>'required|255',
          'description' => 'required'
        ];
    }
    public function execute($data) : bool
    {
        Validator::make($data, $this->rules())->validate();
        
        Task::create([
          'title' => $data['title'],
          'description' => $data['description']
        ]);
        return true;
    }   
    
}