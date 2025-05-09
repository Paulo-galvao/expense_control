<x-layout>
    


    <x-container-sm>
        
        <div>

            <x-title>Atualizar Produto {{$product->name}}</x-title>
            
            <form action="/products/edit/{{$product->id}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="flex flex-col items-center ">
            
                    <x-label for="name">Produto:</x-label>
                    <x-input 
                        type="text" 
                        name="name" 
                        placeholder="nome do produto" 
                        value="{{$product->name}}"
                    />
                    <x-error-name/>
                    <x-label for="name">Preço: </x-label>
                    <x-input 
                        type="text" 
                        name="price" 
                        placeholder="preço do produto" 
                        value="{{$product->price}}"
                    />
                    <x-error-price/>
                    <input type="text" name="listing_id" value="{{$product->listing->id}}" hidden/>
                    <div>
                        <x-button type="submit">Atualizar</x-button>
                        <x-button-cancel href="/listing/{{$product->listing->id}}"></x-button-cancel>
                    </div>
            
                </div>
            </form>

        </div>

    </x-container-sm>

</x-layout>