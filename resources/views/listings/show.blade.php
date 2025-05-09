<x-layout>
    
    <x-container-lg>

        <div>
    
            <x-title>Lista de {{ $listing->name}} </x-title>
        
            <div class="text-center mb-4">
                <p class="font-semibold">Valor Total: R${{ $listing->total_price }} </p>
            </div>
        
            <div class="flex justify-center gap-4 mb-10">
                
                <a href="/listing/edit/{{ $listing->id }}">
                    <x-button>Editar</x-button>
                </a>
                <x-button-cancel href="/listings"></x-button-cancel>
                <a href="/listing/delete/{{ $listing->id }}">
                    <button class="cursor-pointer border-1 border-solid py-1 bg-red-600 hover:bg-red-500 transition duration-200 text-white rounded-lg text-sm w-30">Excluir</button>
                </a>
            </div>
        
            <x-title>Produtos</x-title>
            <a class="text-center block" href="/products/create/{{ $listing->id }}">
                    <x-button>Adicionar</x-button>
                </a>
            <div class="w-sm flex flex-col items-start mx-auto max-h-100 overflow-y-auto overflow-x-hidden">
        
                @foreach($listing->products as $prod)
                    <div class="w-96 h-25  ">
                        <p class="font-semibold">{{ $prod->name }}</p>
                        <p class="text-sm">R$ {{ $prod->price }}</p>
                        <div class="border-b-4 border-indigo-500 pb-3">
                            <a href="/products/edit/{{ $prod->id }}">
                            <button class="cursor-pointer border-1 border-solid py-1 bg-green-600 hover:bg-green-500 transition duration-200 text-white rounded-lg text-sm w-10" type="button">
                                    <i class='bx bx-edit-alt'></i>
                                </button>
                            </a>
                            <a href="/products/delete/{{$prod->id}}">
                                <button class="cursor-pointer border-1 border-solid py-1 bg-red-600 hover:bg-red-500 transition duration-200 text-white rounded-lg text-sm w-10" type="button">
                                    <i class='bx bx-trash-alt'></i>
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
        
            </div>
    
        </div>

    </x-container-bg>

    
    
    

</x-layout>