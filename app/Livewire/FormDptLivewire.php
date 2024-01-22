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
    public $singkatan_fakultas;
    public $fakultas;
    public $success;
    public $error;
    public $dpt;

    protected $rules = [
        'nama' => 'required',
        'npm' => 'required|min:9',
        'jenjang' => 'required',
        'angkatan' => 'required',
        'prodi' => 'required',
        'fakultas' => 'required',
        'singkatan_fakultas' => 'required',
    ];

    public function simpan()
    {
        $this->validate();
        try {
            $dpt = new Dpt;
            $dpt->npm = $this->npm;
            $dpt->nama_lengkap = $this->nama;
            $dpt->jenjang = $this->jenjang;
            $dpt->angkatan = $this->angkatan;
            $dpt->prodi = $this->prodi;
            $dpt->nama_lengkap_fakultas = $this->fakultas;
            $dpt->nama_singkat_fakultas = $this->singkatan_fakultas;
            $dpt->save();
            $this->success = 'Submit data berhasil';

            session()->flash('success', [
                'text' => 'Submit data berhasil',
                'url' => route('dpt'),
            ]);
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
        }
    }

    public function cariNpm()
    {
         $this->success = false;
         $this->error = false;
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

            if(!empty($mahasiswaData['mahasiswa'])){
                $this->npm  = $mahasiswaData['mahasiswa'][0]['mhsNiu'];
                $this->nama = $mahasiswaData['mahasiswa'][0]['mhsNama'];
                $this->angkatan = $mahasiswaData['mahasiswa'][0]['mhsAngkatan'];
                $this->prodi = $mahasiswaData['mahasiswa'][0]['prodi']['prodiNamaResmi'];
                $this->jenjang = $mahasiswaData['mahasiswa'][0]['prodi']['prodiJjarKode'];
                $this->fakultas = $mahasiswaData['mahasiswa'][0]['prodi']['fakultas']['fakNamaResmi'];
            }else{
                $this->nama = '';
                $this->angkatan = '';
                $this->prodi = '';
                $this->jenjang = '';
                $this->fakultas = '';
            }

        } else {
            // $this->showdiv = false;
        }
    }


    public function render()
    {
        $PandaController = new PandaController();
        $queryFaklutas = '{fakultas {
                                fakKode
                                fakKodeUniv
                                fakNamaResmi
                            }}';
        $faklutas = $PandaController->panda($queryFaklutas);
        return view('livewire.form-dpt-livewire');
    }
}
