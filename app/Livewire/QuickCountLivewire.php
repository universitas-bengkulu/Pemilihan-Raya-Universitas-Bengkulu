<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\Kandidat;

class QuickCountLivewire extends Component
{
    public $kandidats;
    public $chartData;
    public $labels;
    public function mount()
    {
        $this->updateChartData(); // Initial data fetch
    }

    public function updateChartData()
    {
        $this->chartData = Kandidat::withCount('rekapitulasis')->pluck('rekapitulasis_count')->toArray();
        $this->labels = Kandidat::all()->map(fn ($kandidat) => 'Kandidat  No ' . $kandidat->nomor_urut . ' ')->toArray();
    }


    public function render()
    {
        $npm = Session::get('npm');
        $kandidat = Kandidat::withCount('rekapitulasis')->get();
        $this->kandidats = $kandidat;

        return view('livewire.quick-count-livewire')->layout('layouts.quick-count');;
    }
}
