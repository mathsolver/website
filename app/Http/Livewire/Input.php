<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{
    public string $expression = '';

    public string $solve = '';

    public $substitutions = [
        ['search' => '', 'replace' => ''],
    ];

    protected $queryString = [
        'expression' => ['except' => ''],
        'substitutions' => ['except' => ['search' => '', 'replace' => '']],
        'solve' => ['except' => ''],
    ];

    public function render()
    {
        return view('input')->layoutData(['title' => 'Math Solver']);
    }

    public function newSubstitution()
    {
        $this->substitutions[] = ['search' => '', 'replace' => ''];
    }

    public function removeSubstitution(int $row)
    {
        unset($this->substitutions[$row]);
    }
}
