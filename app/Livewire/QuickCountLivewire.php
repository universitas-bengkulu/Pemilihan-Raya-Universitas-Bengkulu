<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use App\Models\Kandidat;
use Illuminate\Support\Facades\Session;

class QuickCountLivewire extends Component
{
    public $kandidats;
    public $chart_quick_count;
    public $showData;
    public $contact = "";

    protected $listeners =  ['updateData' => 'changeData'];


    public function mount(){
        $this->contact = Contact::orderBy('id', 'desc')->first();

        $chart_quick_count = Kandidat::withCount('rekapitulasis')->get();
        if ($chart_quick_count->count()!=0) {
            foreach ($chart_quick_count as $kandidat) {
                $data['label'][] = 'Kandidat No ' . $kandidat->nomor_urut ;
                $data['data'][] = (int) $kandidat->rekapitulasis_count;
            }
            $this->chart_quick_count = json_encode($data);
            $this->showData = true;
        }else{
            $this->showData = false;

        }
        // dd($this->chart_quick_count)
    }

    public function render()
    {
        $this->contact =  Contact::orderBy('id', 'desc')->first();

        $npm = Session::get('npm');
        $kandidat = Kandidat::withCount('rekapitulasis')->get();
        $this->kandidats = $kandidat;

        return view('livewire.quick-count-livewire')->layout('layouts.quick-count');;
    }

    public function changeData()
    {
        $chart_quick_count = Kandidat::withCount('rekapitulasis')->get();
        foreach ($chart_quick_count as $kandidat) {
            $data['label'][] = 'Kandidat No ' . $kandidat->nomor_urut;
            $data['data'][] = (int) $kandidat->rekapitulasis_count;
        }
        $this->chart_quick_count = json_encode($data);
        $this->dispatch('berhasilUpdate', data:  $this->chart_quick_count);
    }

}
