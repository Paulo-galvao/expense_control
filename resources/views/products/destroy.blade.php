
<x-layout>
    
    <x-container-sm>
        
        <div>


            
            <form action="/products/delete/{{$product->id}}" method="POST">
                @csrf
                @method("DELETE")
                <div class="flex flex-col items-center">

                    <x-title>Tem certeza que deseja excluir {{$product->name}}?</x-title>
                    
                    <div>
                        <x-button type="submit">Sim</x-button>
                        <x-button-cancel href="/listing/{{$product->listing->id}}"></x-button-cancel>
                    </div>
                
                </div>

            </form>
            

        </div>

    </x-container-sm>

</x-layout>