<?php

namespace App\Http\Livewire;

use App\Models\TodoItem;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public string $todoText = '';

    public function mount()
    {
        $this->selectTodos();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        $todo = new TodoItem();
        $todo->todo = $this->todoText;
        $todo->completed = false;
        $todo->save();

        $this->todoText = '';
        $this->selectTodos();
    }

    public function toggleTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if (!$todo) {
            return;
        }
        $todo->completed = !$todo->completed;
        $todo->save();
        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if (!$todo) {
            return;
        }
        $todo->delete();
        $this->selectTodos();
    }
    private function selectTodos()
    {
        $this->todos = TodoItem::orderBy('created_at', 'desc')->get();
    }
}
