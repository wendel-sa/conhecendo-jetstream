<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\professores;

class Professor extends Component
{
    public $professores, $name, $email, $mobile, $professores_id;
    public $isModalOpen = 0;
    public function render()
    {
        $this->professores = professores::all();
        return view('livewire.professores.professores');
    }

    public function create(){
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->mobile = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        professores::updateOrCreate(['id' => $this->professores_id], [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ]);

        session()->flash('message', $this->professores_id ? 'Professores updated.' : 'Professores created.');
        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $professores = professores::findOrFail($id);
        $this->professores_id = $id;
        $this->name = $professores->name;
        $this->email = $professores->email;
        $this->mobile = $professores->mobile;

        $this->openModalPopover();

    }

    public function delete($id)
    {
        $professores = professores::findOrFail($id);
        $professores->delete();
        session()->flash('message', 'Professores deleted.');
    }
}
