<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;

class TableTask extends Component
{
    protected $listeners = [
        'TableTask'
    ];

    public function render()
    {
        $task = Task::orderBy('id','desc')->limit(10)->get();
        return view('livewire.table-task',['task'=>$task]);
    }

    public function TableTask($task)
    {

    }
}
