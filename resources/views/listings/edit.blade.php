<x-layout>

    <x-container-sm>
    
        <div>

            <x-title>Atualizar Lista</x-title>
            
            <form action="/listing/edit/{{$listing->id}}" method="POST">
            @csrf
            @method('PATCH')
                <div class="flex flex-col items-center ">
                    
                    <x-input 
                        name="name" 
                        placeholder="nome da lista" 
                        value="{{$listing->name}}"
                    />
                    <x-error-name/>

                    <div>
                        <x-button type="submit">Enviar</x-button>
                        <x-button-cancel href="/listing/{{$listing->id}}"></x-button-cancel>
                    </div>
                </div>
            </form>

        </div>
    
    </x-container-sm>
    
</x-layout>

