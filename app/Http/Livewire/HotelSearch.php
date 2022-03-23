<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hotel;

class HotelSearch extends Component
{
    public $query;
    public $hotels;

    public function mount()
    {
        $this->query = '';
        $this->hotels = [];
    }

    public function selectHotel()
    {
        $hotel = $this->hotels[$this->highlightIndex] ?? null;
        if ($hotel) {
            $this->redirect(route('kpi.show', $hotel['id']));
        }
    }

    public function updatedQuery()
    {
        $this->hotels = Hotel::where('name', 'like', '%' . $this->query . '%')
        ->get()
        ->toArray();
    }
    public function render()
    {
        return view('livewire.hotel-search');
    }
}
