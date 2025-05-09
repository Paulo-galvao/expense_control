<x-layout>

    <div class="flex justify-center mt-10">

        <form action="/listing/delete/{{$listing->id}}" method="POST">
            @csrf
            @method("DELETE")
            <p>Tem certeza que deseja excluir a lista {{$listing->name}}?</p>
            
            <div class="flex justify-center mt-5">

                <x-button type="submit">Sim</x-button>
                <x-button-cancel href="/listing/{{$listing->id}}">
                    
                </x-button-cancel>

            </div>
        </form>

    </div>

</x-layout>