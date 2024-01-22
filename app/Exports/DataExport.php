<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\Rekapitulasi;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rekapitulasi::join('dpts', 'rekapitulasis.dpt_npm', '=', 'dpts.npm')
            ->join('kandidats', 'rekapitulasis.kandidat_id', '=', 'kandidats.id')
            ->select(
                'kandidats.nomor_urut',
                'dpts.angkatan',
                'dpts.jenjang',
                'dpts.prodi',
                'dpts.nama_lengkap_fakultas',
                'rekapitulasis.created_at'
            )
            ->get()
            ->map(function ($item) {
                $item->created_at = Carbon::parse($item->created_at)->format('D M Y H:i:s');
                return $item;
            });
    }

    public function headings(): array
    {
        return [
            'Nomor Urut',
            'Angkatan',
            'Jenjang',
            'Prodi',
            'Fakultas',
            'Waktu Memilih',
        ];
    }
}
