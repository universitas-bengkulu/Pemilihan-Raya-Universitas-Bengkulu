<div class="row">
    <div class="col-md-12 table-responsive">
        <table class="table table-striped table-bordered" id="table" style="width:100%;">
            <thead>
                <tr>
                    <th>No</th>
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
                        <td>{{ $rekapitulasi->prodi_pemilih }}</td>
                        <td>{{ $rekapitulasi->fakultas_pemilih }}</td>
                        <td>{{ $rekapitulasi->angkatan_pemilih }}</td>
                        <td>{{ $rekapitulasi->created_at->format('H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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