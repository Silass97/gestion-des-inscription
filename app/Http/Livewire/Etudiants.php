<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Etudiant;
use Livewire\WithPagination;

class Etudiants extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $cin, $prenomNom,$dteNaissance,$genre,$pays,$email, $Etudiant_id;
    public $isOpen = 0;


    public function render()
    {   
        $this->etudiants = Etudiant::all();
        return view('livewire.Etudiants', [
            'etudiants' => Etudiant::paginate(6),
        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->cin = '';
        $this->prenomNom = '';
        $this->dteNaissance = '';
        $this->genre = '';
        $this->pays = '';
        $this->email = '';
        $this->Etudiant_id = '';
    }

    public function store()
    {
        $this->validate([
            'cin' => 'required',
            'prenomNom' => 'required',
            'dteNaissance' => 'required',
            'genre' => 'required',
            'pays' => 'required',
            'email' => 'required',
        ]);
        Etudiant::updateOrCreate(
            ['cin' => $this->Etudiant_id],

            [
                'cin' => $this->cin,
                'prenomNom' => $this->prenomNom,
                'dteNaissance' => $this->dteNaissance,
                'genre' => $this->genre,
                'pays' => $this->pays,
                'email' => $this->email,

            ]
            );
        session()->flash('message',
            $this->Etudiant_id ?
             'Etudiant mis à jour avec succès.'
              : 'Etudiant créé avec succès.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $Etudiant = Etudiant::findOrFail($id);
        $this->Etudiant_id = $id;
        $this->cin = $Etudiant->cin;
        $this->prenomNom = $Etudiant->prenomNom;
        $this->dteNaissance = $Etudiant->dteNaissance;
        $this->genre = $Etudiant->genre;
        $this->pays = $Etudiant->pays;
        $this->email = $Etudiant->email;
        $this->openModal();
        
    }

    public function delete($id)
    {
        Etudiant::find($id)->delete();
        session()->flash('message',
        'Etudiant supprimé avec succès.');
    }
}
