<div class="row">
    <div class="col-md-12 table-responsive">
        <table class="table table-striped table-bordered" id="table" style="width:100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Urut</th>
                    <th>Nama Calon Ketua</th>
                    <th>Nama Calon Wakil Ketua</th>
                    <th style="text-align:center">Visi</th>
                    <th style="text-align:center">Misi</th>
                    <th style="text-align:center">Surat Suara</th>
                    <th style="text-align:center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kandidats as $index => $kandidat)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $kandidat->nomor_urut }}</td>
                        <td>{{ $kandidat->nama_calon_ketua }}</td>
                        <td>{{ $kandidat->nama_calon_wakil_ketua }}</td>
                        <td>{{ $kandidat->visi }}</td>
                        <td>
                            @if ($kandidat->misis_count > 0)
                                @foreach ($kandidat->misis as $index2 => $misi)
                                    {{ $index2+1 . '. ' . $misi->misi }} <br>
                                @endforeach
                                <br>
                                <a href="{{ route('kandidat.createMisi', $kandidat->id) }}" class="btn btn-success btn-sm btn-flat">Tambahkan</a>
                            @else
                                <a href="{{ route('kandidat.createMisi', $kandidat->id) }}" class="btn btn-success btn-sm btn-flat">Tambahkan</a>
                            @endif
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $kandidat->banner) }}" style="width: 80px; height:auto" class="user-image rounded" alt="User Image">
                        </td>
                        <td class="text-center">
                            <table>
                                <tr>
                                    <td>
                                        <a href="{{ route('kandidat.edit', $kandidat->id) }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('kandidat.destroy', $kandidat->id) }}" method="POST">
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