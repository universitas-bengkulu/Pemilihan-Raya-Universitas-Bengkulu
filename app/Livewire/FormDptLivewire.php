<?php

namespace App\Livewire;

use App\Models\Dpt;
use Livewire\Component;
use App\Http\Controllers\PandaController;

class FormDptLivewire extends Component
{

    public $npm;
    public $nama;
    public $jenjang;
    public $angkatan;
    public $prodi;
    public $fakultas;
    public $dpt;

    protected $rules = [
        'nama' => 'required',
        'npm' => 'required|min:9',
        'jenjang' => 'required',
        'angkatan' => 'required',
        'prodi' => 'required',
        'fakultas' => 'required',
    ];

    public function simpan()
    {
        $this->validate();
        $this->dpt = new Dpt;
        $this->dpt->npm = $this->npm;
        $this->dpt->nama_lengkap = $this->nama;
        $this->dpt->jenjang = $this->jenjang;
        $this->dpt->angkatan = $this->angkatan;
        $this->dpt->prodi = $this->prodi;
        $this->dpt->nama_lengkap_fakultas = $this->fakultas;
        $this->dpt->save();

        session()->flash('data-updated');
        return redirect()->route('dpt');
    }

    public function cariNpm()
    {
        if (!empty($this->npm)) {
            $queryMahasiswa = '
            {mahasiswa(mhsNiu:"' . $this->npm . '") {
                mhsNiu
                mhsNama
                mhsAngkatan
                mhsJenisKelamin
                mhsIpkTranskrip
                mhsTanggalLulus
                mhsSmtaKode
                    prodi {
                        prodiNamaResmi
                        prodiJjarKode
                        fakultas {
                            fakKode
                            fakNamaResmi
                            fakKodeUniv
                        }
                    }
                }
            }
        ';
            $PandaController = new PandaController();
            $mahasiswaData = $PandaController->panda($queryMahasiswa);

            $this->npm  = $mahasiswaData['mahasiswa'][0]['mhsNiu'];
            $this->nama = $mahasiswaData['mahasiswa'][0]['mhsNama'];
            $this->angkatan = $mahasiswaData['mahasiswa'][0]['mhsAngkatan'];
            $this->prodi = $mahasiswaData['mahasiswa'][0]['prodi']['prodiNamaResmi'];
            $this->jenjang = $mahasiswaData['mahasiswa'][0]['prodi']['prodiJjarKode'];
            $this->fakultas = $mahasiswaData['mahasiswa'][0]['prodi']['fakultas']['fakNamaResmi'];

        } else {
            // $this->showdiv = false;
        }
    }


    public function render()
    {
        return view('livewire.form-dpt-livewire');
    }
}
