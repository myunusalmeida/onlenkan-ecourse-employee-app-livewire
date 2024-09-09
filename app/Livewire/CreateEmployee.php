<?php

namespace App\Livewire;

use App\Models\Employee as ModelsEmployee;
use App\Models\Position;
use Livewire\Component;

class CreateEmployee extends Component
{
    public $nip = '';
    public $name = '';
    public $birth_date = '';
    public $birth_place = '';
    public $phone = '';
    public $position_id = 0;
    public $join_date = '';

    public function save()
    {
        ModelsEmployee::create([
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
        return view('livewire.create-employee', ['positions' => Position::all()]);
    }
}
