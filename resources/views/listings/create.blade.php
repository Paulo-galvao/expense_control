<x-layout>

    <x-container-sm>

        <div>
    
            <x-title>Criar nova lista</x-title>
            
            <form action="/listings/create" method="POST">
            @csrf
                <div class="flex flex-col items-center ">
        
                
                    <x-input
                        type="text" 
                        name="name" 
                        placeholder="Lista de Compras" 
                    >

                    </x-input>
                    
                    <x-error-name/>
        
                    <div>
        
                        <x-button type="submit">Enviar</x-button>
                        <x-button-cancel href="/listings"></x-button-cancel>
        
                    </div>
        
                </div>
            </form>
    
        </div>
        
    </x-container-sm>



</x-layout>
