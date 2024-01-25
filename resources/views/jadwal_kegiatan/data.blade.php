<div class="row">
    <div class="col-md-12 table-responsive">
        <table class="table table-striped table-bordered" id="table" style="width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Periode Pemilihan</th>
                    <th>Judul Kegiatan</th>
                    <th>Deskripsi Kegiatan</th>
                    <th>Tanggal</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($jadwal_kegiatans as $index => $jadwal_kegiatan)

                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $jadwal_kegiatan->jadwal->tanggal }}</td>
                    <td>{{ $jadwal_kegiatan->judul	 }}</td>
                    <td>{{ $jadwal_kegiatan->deskripsi	 }}</td>
                    <td>{{ $jadwal_kegiatan->tgl }}</td>

                    <td class="text-center">
                        <table>
                            <tr>
                                <td>
                                    <a href="{{ route('jadwal_kegiatan.edit', $jadwal_kegiatan->id) }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('jadwal_kegiatan.destroy', $jadwal_kegiatan->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
