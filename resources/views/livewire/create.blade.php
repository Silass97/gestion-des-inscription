<div class="fixed z-10 inset-0 ease-out duration-400 "> 
    <div class="justify-center c pt-4 px-4 pb-20 text-center sm:block sm:p-0"> 
        <div class="fixed inset-0 transition-opacity"> 
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div> 
        </div> 
        <!-- Cet élément consiste à inciter le navigateur à centrer le contenu modal. --> 
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span> 
        <div class="inline-block align-middle bg-white rounded-lg 
        text-left overflow-hidden shadow-xl transform transition-all 
        sm:my-8 sm:align-middle max-w-screen-md sm:w-full" 
        role="dialog" aria-modal="true" aria-labelledby="modal-headline"> 
            <form> 
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"> 
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3"> 
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Numéro d'Identification:</label> 
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                            id="cin" placeholder="Saisir du numéro" wire:model="cin"> 
                            @error('cin') <span class="text-red-500">{{ $message }}</span>@enderror 
                        </div> 
            
                        <div class="col-span-6 sm:col-span-3"> 
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Nom & Prenom:</label> 
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                            id="prenomNom" placeholder="Saisir le nom et le prénom" wire:model="prenomNom"> 
                            @error('prenomNom') <span class="text-red-500">{{ $message }}</span>@enderror 
                        </div> 
                    </div>
                    <div>
                        <div class="grid grid-cols-6 gap-6">   
                            <div class="col-span-6 sm:col-span-3"> 
                                <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Date Naissance:</label> 
                                <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="dteNaissance" placeholder="Date naissance" wire:model="dteNaissance"> 
                                @error('dteNaissance') <span class="text-red-500">{{ $message }}</span>@enderror 
                            </div> 
                            <div class="col-span-6 sm:col-span-3"> 
                                <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Genre:</label> 
                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="genre" wire:model="genre">
                                <option>Homme</option>
                                <option>Femme</option>
                              </select>
                                @error('genre') <span class="text-red-500">{{ $message }}</span>@enderror 
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-6">   
                            <div class="col-span-6 sm:col-span-3"> 
                                <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Pays:</label> 
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="pays" placeholder="Nom du pays" wire:model="pays"> 
                                @error('pays') <span class="text-red-500">{{ $message }}</span>@enderror 
                            </div> 
                            <div class="col-span-6 sm:col-span-3"> 
                                <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Email:</label> 
                                <input type="email"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                id="email" wire:model="email" placeholder="Entrer votre email"> 
                                @error('email') <span class="text-red-500">{{ $message }}</span>@enderror 
                            </div>
                        </div>    
                        

                    </div> 
                </div> 
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse"> 
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto"> 
                        <button wire:click.prevent="store()" type="button" 
                        class="inline-flex justify-center w-full rounded-md border border-transparent 
                        px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm 
                        hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition 
                        ease-in-out duration-150 sm:text-sm sm:leading-5"> 
                        Enregistrer
                        </button> 
                    </span> 
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-3 sm:w-auto"> 
                        <button wire:click="closeModal()" type="button" 
                        class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 
                        py-2 bg-red-400 text-base leading-6 font-medium text-red-700 shadow-sm 
                        hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue 
                        transition ease-in-out duration-150 sm:text-sm sm:leading-5"> 
                            Annuler 
                        </button> 
                    </span> 
                </div> 
            </form> 
        </div> 
    </div> 
</div>
<!--https://shuffle.dev/tailwind/classes-->