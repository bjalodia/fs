<div>
    <input 
        type="text" 
        class="form-input border-b border-gray-200 rounded-md"
        placeholder="Search Hotel .."
        wire:model="query"
        wire:keydown.enter="selectHotel"
        wire:keydown.escape="reset"
        wire:keydown.tab="reset"
        wire:keydown.enter="selectContact"
        />
        <div wire:loading class="absolute z-10 bg-white rounded-t-none shadow-lg list-group">
        <div class="list-item">Searching...</div>
        </div>

        @if(!empty($query))
        
        <div class="absolute z-10 bg-white rounded-t-none shadow-lg list-group">
            @if(!empty($hotels))
                @foreach($hotels as $i => $hotel)
                    <a
                        href="{{ 'kpis/'. $hotel['id'] }}"
                        class="list-item"
                    >{{ $hotel['name'] }}</a>
                @endforeach
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @endif

</div>
