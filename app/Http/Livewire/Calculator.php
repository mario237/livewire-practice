<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Calculator extends Component
{
    public int $firstNumber = 0;
    public int $secondNumber = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    function render(): Factory|View|Application
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        $firstNumber = (float)$this->firstNumber;
        $secondNumber = (float)$this->secondNumber;


        $this->result = match ($this->action) {
            '+' => $firstNumber + $secondNumber,
            '-' => $firstNumber - $secondNumber,
            '*' => $firstNumber * $secondNumber,
            '/' => $firstNumber / $secondNumber,
            '%' => $firstNumber / 100 * $secondNumber,

        };
    }

    public function updated($property)
    {
        $this->disabled = $this->firstNumber == '' || $this->secondNumber == '';
    }
}
