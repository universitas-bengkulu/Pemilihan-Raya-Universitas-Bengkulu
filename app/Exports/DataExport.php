<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Rekapitulasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rekapitulasi::select(
            'kandidat_id',
            'jenis_kelamin',
            'angkatan_pemilih',
            'jenjang',
            'prodi_pemilih',
            'fakultas_pemilih',
            'created_at'
        )->get()->map(function ($item) {
            $item->created_at = Carbon::parse($item->created_at)->format('D M Y H:i:s');
            return $item;
        });
    }

    public function headings(): array
    {
        return [
            'Nomor Urut',
            'Jenis Kelamin',
            'Angkatan',
            'Jenjang',
            'Prodi',
            'Fakultas',
            'Waktu Memilih',
        ];
    }
}
