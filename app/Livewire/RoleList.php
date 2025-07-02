<?php

namespace App\Livewire;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class RoleList extends Component
{
    use WithPagination;

    public $name;
    public $description;

    protected $rules = [
        'name' => 'required|string|max:255|unique:roles',
        'description' => 'nullable|string',
    ];

    public function create()
    {
        $this->validate();

        Role::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->reset(['name', 'description']);
        session()->flash('success', 'Role created successfully');
    }

    public function render()
    {
        return view('livewire.role-list', [
            'roles' => Role::paginate(10),
        ]);
    }
}
