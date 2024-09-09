<?php

namespace App\Livewire;

use App\Models\Employee as ModelsEmployee;
use Livewire\Component;

class Employee extends Component
{
    public function delete($id)
    {
        ModelsEmployee::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.employee', [
            'employees' => ModelsEmployee::all()
        ]);
    }
}
