<?php

namespace App\Livewire;

use App\Models\Position as ModelsPosition;
use Livewire\Component;

class EditPosition extends Component
{
    public $position_name = '';
    public $salary = '';
    public $jobdesc = '';
    public $position_id;

    public function mount($id)
    {
        $position = ModelsPosition::find($id);

        $this->position_id = $position->id;
        $this->position_name = $position->position_name;
        $this->salary = $position->salary;
        $this->jobdesc = $position->jobdesc;
    }

    public function save($id)
    {
        ModelsPosition::find($id)->update([
            'position_name' => $this->position_name,
            'salary' => $this->salary,
            'jobdesc' => $this->jobdesc,
        ]);

        $this->redirectRoute('posisi-pekerjaan', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-position');
    }
}
