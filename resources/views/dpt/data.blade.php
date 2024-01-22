<div class="row">
    <form action="{{ route('dpt.cari') }}" method="GET">
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
        {{ $dpts->appends(['nama_lengkap' => isset($nama_lengkap) ? $nama_lengkap : ''])->links("pagination::bootstrap-4") }}
    </div>
</div>
