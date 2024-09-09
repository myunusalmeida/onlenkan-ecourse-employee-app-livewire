<?php

namespace App\Livewire;

use App\Models\Employee as ModelsEmployee;
use App\Models\Position as ModelsPosition;
use Livewire\Component;

class EditEmployee extends Component
{
    public $nip = '';
    public $name = '';
    public $birth_date = '';
    public $birth_place = '';
    public $phone = '';
    public $position_id = 0;
    public $join_date = '';
    public $employee_id = 0;

    public function mount($id)
    {
        $employee = ModelsEmployee::find($id);

        $this->employee_id = $employee->id;
        $this->nip = $employee->nip;
        $this->name = $employee->name;
        $this->birth_date = $employee->birth_date;
        $this->birth_place = $employee->birth_place;
        $this->phone = $employee->phone;
        $this->join_date = $employee->join_date;
        $this->position_id = $employee->position_id;
    }

    public function save($id)
    {
        ModelsEmployee::find($id)->update([
            'nip' => $this->nip,
            'name' => $this->name,
            'birth_date' => $this->birth_date,
            'birth_place' => $this->birth_place,
            'phone' => $this->phone,
            'position_id' => $this->position_id,
            'join_date' => $this->join_date,
        ]);

        $this->redirectRoute('karyawan', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-employee', ['positions' => ModelsPosition::all()]);
    }
}
