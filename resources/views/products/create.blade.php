<x-layout>
    
    <x-container-sm>

        <div>

            <x-title>Adicionar novo produto</x-title>

                <form action="/products/create" method="post">
                @csrf
                    <div class="flex flex-col items-center ">

                        <x-input 
                            type="text" 
                            name="name" 
                            placeholder="nome do produto" 
                        />
                        <x-error-name/>
                        <x-input 
                            type="text" 
                            name="price" 
                            placeholder="preço do produto" 
                        />
                        <x-error-price/>
                        <input type="text" name="listing_id" placeholder="id da lista" value="{{$listing->id}} " hidden>
                        
                        <div>
                            <x-button type="submit">Enviar</x-button>
                            <x-button-cancel href="/listing/{{$listing->id}}"></x-button-cancel>
                        </div>

                    </div>
                </form>

        </div>
        


    </x-container-sm>

</x-layout>