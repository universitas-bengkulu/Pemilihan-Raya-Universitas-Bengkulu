<div class="row">
    <div class="col-md-12 table-responsive">
        <table class="table table-striped table-bordered" id="table" style="width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama Lengkap</th>
                    <th>Jenjang</th>
                    <th>Angkatan</th>
                    <th>Prodi</th>
                    <th>Fakultas</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($dpts as $index => $dpt)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $dpt->npm }}</td>
                    <td>{{ $dpt->nama_lengkap }}</td>
                    <td>
                        {{ $dpt->jenjang }}
                    </td>
                    <td>{{ $dpt->angkatan }}</td>
                    <td>{{ $dpt->prodi }}</td>
                    <td>{{ $dpt->nama_lengkap_fakultas }} ({{$dpt->nama_singkat_fakultas}})</td>

                    <td class="text-center">
                        <table>
                            <tr>
                                <td>
                                    <a href="{{ route('dpt.edit', $dpt->npm) }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('dpt.destroy', $dpt->npm) }}" method="POST">
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
