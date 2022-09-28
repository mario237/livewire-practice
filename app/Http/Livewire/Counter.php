<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public function render(): Factory|View|Application
    {
        return view('livewire.counter');
    }

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count > 0 ? $this->count-- : $this->count = 0;
    }
}
