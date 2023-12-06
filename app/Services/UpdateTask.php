<?php
namespace App\Services;

use App\Services\BaseService;
use App\Models\Task;

class UpdateTask extends BaseService 
{
    public function rules()
    {
        return [
          'title' => 'required',
          'description' => 'required',
        ];
    }
    public function execute($data) : bool
    { 
        $this->validate($data);
        $task = Task::find($data['id']);
        $task -> title = $data['title'];
        $task -> description = $data['description'];
        $task -> save();
        return true;
    }   
    
}