<div class="row">
    <form action="{{ route('rekapitulasi.cari') }}" method="GET">
        {{ csrf_field() }} {{ method_field('GET') }}
        <div class="form-group col-md-12">
            <label for="">Masukan Nama DPT</label>
            <input type="text" name="nama_lengkap" @if (isset($nama_lengkap))
                value="{{ $nama_lengkap }}"
            @endif class="form-control">
        </div>

        <div class="col-md-12" style="margin-bottom:5px !important">
            <button type="submit" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-search"></i>&nbsp; Cari Data</button>
        </div>
    </form>

    <div class="col-md-12 table-responsive">
        <table class="table table-striped table-bordered" id="table" style="width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemilih</th>
                    <th>Prodi</th>
                    <th>Fakultas</th>
                    <th>Angkatan</th>
                    <th>Waktu Memilih</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rekapitulasis as $index => $rekapitulasi)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $rekapitulasi->dpt->nama_lengkap }}</td>
                        <td>{{ $rekapitulasi->dpt->prodi }}</td>
                        <td>{{ $rekapitulasi->dpt->nama_lengkap_fakultas }}</td>
                        <td>{{ $rekapitulasi->dpt->angkatan }}</td>
                        <td>{{ $rekapitulasi->created_at->format('H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $rekapitulasis->appends(['nama_lengkap' => isset($nama_lengkap) ? $nama_lengkap : ''])->links("pagination::bootstrap-4") }}
    </div>
</div>

@push('scripts')
    @include('user._js')
    <script>
        function updatePassword(id) {
            $('#updatePassword').modal('show');
            $('#id_password').val(id);
        }
    </script>
@endpush
