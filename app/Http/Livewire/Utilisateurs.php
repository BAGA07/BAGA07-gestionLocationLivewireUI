<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $isbtnClicked = false;

    public function render()
    {
        return view('livewire.utilisateurs.index', [
            "users" => User::paginate(10)
        ])
            ->extends("layouts.master")
            ->section("contenu");
    }

    public function goToAddUser()
    {
        $this->isbtnClicked = true;
    }
}
