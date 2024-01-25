<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use App\Models\Kandidat;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PandaController;
use App\Models\Dpt;
use App\Models\Rekapitulasi;

class QuickCountLivewire extends Component
{
    public $kandidats;
    public $chart_quick_count;
    public $showData;
    public $contact = "";
    public $dataFakultas ="";
    protected $listeners =  ['updateData' => 'changeData'];


    public function mount(){

            $queryFakultas = '
            { fakultas {
                    fakKode
                    fakKodeUniv
                    fakNamaResmi
                }

            }
        ';
            $PandaController = new PandaController();
            $dataFakultas = $PandaController->panda($queryFakultas);
            $this->dataFakultas = $dataFakultas;
            // dd($dataFakultas);

        $this->contact = Contact::orderBy('id', 'desc')->first();

        foreach ($dataFakultas['fakultas'] as $fakultas) {
            $fakultasCode = $fakultas['fakKodeUniv'];

            $dpts = Dpt::whereRaw("SUBSTRING(npm, 1, 1) = ?", [$fakultasCode])->count();
            $sudah_pilih = Rekapitulasi::whereRaw("SUBSTRING(dpt_npm, 1, 1) = ?", [$fakultasCode])->count();

            if ($dpts !== 0 ) {
                $presentase_belum_pilih = ($dpts - $sudah_pilih) * 100 / $dpts;
                $presentase_sudah_pilih = $sudah_pilih * 100 / $dpts;
            } else {
                $presentase_belum_pilih = 0;
                $presentase_sudah_pilih = 0;
            }

            if ($fakultas['fakKodeUniv'] != 'Z') {
                $namaSingkatFakultas = [
                    'A' => 'FKIP',
                    'B' => 'FH',
                    'C' => 'FEB',
                    'D' => 'FISIP',
                    'E' => 'Pertanian',
                    'F' => 'FMIPA',
                    'G' => 'Teknik',
                    'H' => 'FKIK',
                ];


                $data['label'][] =  $namaSingkatFakultas[$fakultas['fakKodeUniv']];
                $data['presentase_sudah_pilih'][] =
                  $presentase_sudah_pilih;
                $data['presentase_belum_pilih'][] =   $presentase_belum_pilih;
                $this->chart_quick_count = json_encode($data);
                $this->showData = true;
            }



        }


        // $chart_quick_count = Kandidat::withCount('rekapitulasis')->get();
        // if ($chart_quick_count->count()!=0) {
        //     foreach ($chart_quick_count as $kandidat) {
        //         $data['label'][] = 'Kandidat No ' . $kandidat->nomor_urut ;
        //         $data['data'][] = (int) $kandidat->rekapitulasis_count;
        //     }
        //     $this->chart_quick_count = json_encode($data);
        //     $this->showData = true;
        // }else{
        //     $this->showData = false;

        // }
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
         $dataFakultas = $this->dataFakultas;

        foreach ($dataFakultas['fakultas'] as $fakultas) {
            $fakultasCode = $fakultas['fakKodeUniv'];

            $dpts = Dpt::whereRaw("SUBSTRING(npm, 1, 1) = ?", [$fakultasCode])->count();
            $sudah_pilih = Rekapitulasi::whereRaw("SUBSTRING(dpt_npm, 1, 1) = ?", [$fakultasCode])->count();
            if ($dpts !== 0) {
                $presentase_belum_pilih = ($dpts - $sudah_pilih) * 100 / $dpts;
                $presentase_sudah_pilih = $sudah_pilih * 100 / $dpts;
            } else {
                $presentase_belum_pilih = 0;
                $presentase_sudah_pilih = 0;
            }

            if ($fakultas['fakKodeUniv'] != 'Z') {
                $namaSingkatFakultas = [
                    'A' => 'FKIP',
                    'B' => 'FH',
                    'C' => 'FEB',
                    'D' => 'FISIP',
                    'E' => 'Pertanian',
                    'F' => 'FMIPA',
                    'G' => 'Teknik',
                    'H' => 'FKIK',
                ];


                $data['label'][] =  $namaSingkatFakultas[$fakultas['fakKodeUniv']];
                $data['presentase_sudah_pilih'][] =
                    $presentase_sudah_pilih;
                $data['presentase_belum_pilih'][] =   $presentase_belum_pilih;
            }
        }
        $this->chart_quick_count = json_encode($data);

        $this->dispatch('berhasilUpdate', data:  $this->chart_quick_count);
    }

}
