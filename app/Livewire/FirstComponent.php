<?php

namespace App\Livewire;
use App\Models\Todo;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;


class FirstComponent extends Component
{

    use WithPagination;
    public $todo_item;
    public function createNewTodo(){
        $this -> Validate([
            'todo_item'=> 'required|min:5|max:20'

        ]);
        Todo::create([
            "todo_item" => $this->todo_item

        ]);
        request()->session()->flash('success','Todo Added Successfully');
        $this->reset(['todo_item']);
    }

    public function render()
    {
        $alltodos = Todo::latest()->paginate(3);
        return view('livewire.first-component',compact( 'alltodos'));
    }
}
