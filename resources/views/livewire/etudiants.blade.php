<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Application de gestion des inscription app-gest.com)
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert"> 
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <button wire:click ="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Créer un nouveau etudiant</button>
            @if($isOpen)
                @include('livewire.create')
            @endif
            <table class="table table-bordered w-full">
                <thead>
                    <tr class="border px-4 py-2"><th>Numéro d'ident</th><th>Nom & Prénom</th><th>Date Naissance</th><th>Genre</th><th>Pays</th><th>Email</th><th>Action</th></tr>
                </thead>
                    <tbody>
                        @foreach($etudiants as $etudiant)
                         <tr>
                            <td>{{ $etudiant->cin }}</td>
                             <td>{{ $etudiant->prenomNom }}</td>
                             <td>{{ $etudiant->dteNaissance }}</td>

                             <td>{{ $etudiant->genre }}</td>
                             <td>{{ $etudiant->pays }}</td>
                             <td>{{ $etudiant->email }}</td>

                             <td>
                                <button wire:click="edit({{ $etudiant->cin }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Modifier</button>
                                 <button wire:click="delete({{ $etudiant->cin }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Supprimer</button>
                            </td>
                     </tr>

                    @endforeach
                
                    </tbody>
            </table>
            <div class="d-flex pb-0 pt-2 border justify-content-center">
                {{ $etudiants->links() }}
            </div>

        </div>
    </div>
</div>
