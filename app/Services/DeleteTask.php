<?php
namespace App\Services;

use App\Services\BaseService;
use App\Models\Task;

class DeleteTask extends BaseService 
{
    public function rules()
    {
        return [
          'id' => 'required'
        ];
    }
    public function execute($data) : bool
    {   //dd($data);
        $this->validate($data);
        //dd($data);
        Task::destroy($data);
        return true;
    }   
    
}