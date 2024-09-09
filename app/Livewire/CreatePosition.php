<?php

namespace App\Livewire;

use App\Models\Position as ModelsPosition;
use Livewire\Component;

class CreatePosition extends Component
{
    public $position_name = '';
    public $salary = '';
    public $jobdesc = '';

    public function save()
    {
        ModelsPosition::create([
            'position_name' => $this->position_name,
            'salary' => $this->salary,
            'jobdesc' => $this->jobdesc,
        ]);

        $this->redirectRoute('posisi-pekerjaan', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-position');
    }
}
