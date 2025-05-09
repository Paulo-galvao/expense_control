<x-layout>
    
    <x-container-lg>

        <div>

            <x-title>Suas Listas</x-title>
    
            <div class="text-center">
                <a href="/listings/create">
                    <x-button>Criar Nova</x-button>
                </a>
            </div>
    
            <div class="">
                <div class="mt-10 w-md grid grid-cols-3 mx-auto gap-10 ">
                    @foreach($listings as $list)
                        <div style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;" 
                            class="p-4 rounded-lg  w-35">
                            <a href="/listing/{{$list->id}}">
                                <div class="">
                                    <p class="truncate border-b-4 border-indigo-500 pb-2 font-semibold">{{ $list->name }} </p>
                                    <p class="py-2 text-sm">Valor total: R${{ $list->total_price }} </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            
        </div>


    </x-container-lg>
    


</x-layout>