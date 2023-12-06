<?php
namespace App\Services;

use App\Services\BaseService;
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
    {   //dd($data);
        //Validator::make($data, $this->rules())->validate();
        $this->validate($data);
        dd($data);
        Task::create([
          'title' => $data['title'],
          'description' => $data['description']
        ]);
        return true;
    }   
    
}