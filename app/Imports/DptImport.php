<?php

namespace App\Imports;

use App\Models\Dpt;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DptImport implements ToModel, WithHeadingRow
{
    protected $startRow = 2;
    protected $jumlahData;

    public function model(array $row)
    {
        return new Dpt([
            'npm' => $row['npm'],
            'nama_lengkap' => $row['nama_lengkap'],
            'jenjang' => $row['jenjang'],
            'angkatan' => $row['angkatan'],
            'prodi' => $row['prodi'],
            'nama_singkat_fakultas' => $row['nama_singkat_fakultas'],
            'nama_lengkap_fakultas' => $row['nama_lengkap_fakultas'],
        ]);
    }

    public function map($row): array
    {
        return [
            'npm' => $row['npm'],
            'nama_lengkap' => $row['nama_lengkap'],
            'jenjang' => $row['jenjang'],
            'angkatan' => $row['angkatan'],
            'prodi' => $row['prodi'],
            'nama_singkat_fakultas' => $row['nama_singkat_fakultas'],
            'nama_lengkap_fakultas' => $row['nama_lengkap_fakultas'],
        ];
    }

    public function uniqueBy()
    {
        return 'npm';
    }

    public function registerEvents(): array
    {
        return [
            AfterImport::class => function (AfterImport $event) {
                $this->jumlahData = $event->getConcernable()->getRowCount();
            },
        ];
    }

    public function getJumlahData()
    {
        return $this->jumlahData;
    }


}
