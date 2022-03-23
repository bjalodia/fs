<x-app-layout>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-5 bg-white border-b border-gray-200">
                    <div">
                    Hotel : {{$hotel->name}} <br>

                    {{$hotel->category}}
                    @foreach ($hotel->kpi as $kpi)
                    
                        Amount: {{$kpi->categorie_id}} <br>
                    
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
