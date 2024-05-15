<?php

namespace App\Livewire\Project;

use App\Livewire\Forms\ProjectForm;
use Livewire\Component;

class Create extends Component
{

    public ProjectForm $form;

    public function save()
    {

        $this->form->store();
        session()->flash('message', 'Proyecto añadido correctamente.');
        return to_route('projects.index');
    }

    public function render()
    {
        return view('livewire.project.create');
    }
}
