<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.users-table', ['users' => User::paginate(10)])->layout('layouts.guest');
    }
}
