@extends('layouts.app')
@section('halaman', 'Data Misi Kandidat')
@section('sub-halaman')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Data Misi Kandidat</li>
@endsection
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Data Misi Kandidat</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 10px !important;">
                <a href="{{ route('kandidat') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
                <a href="{{ route('kandidat.createMisi', $data->id) }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>&nbsp; Tambah Data</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4   ">
                <img class="img-responsive" src="{{ asset('storage/' . $data->banner) }}">
                <p class="text-center " style="margin-top: 5px;font-weight: 800;">{{$data->nama_calon_ketua}}<br>&<br>{{$data->nama_calon_wakil_ketua}}</p>
            </div>
            <div class="col-md-8 table-responsive">
                <table class="table table-striped table-bordered" id="table" style="width:100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th style="width: 90%;">Misi</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($misis as $index => $misi)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td style="width: 90%;">{{ $misi->misi }}</td>

                            <td class="text-center">
                                <table>
                                    <tr>
                                        <td>
                                            <a href="{{ route('kandidat.editMisi', $misi->id) }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('kandidat.destroyMisi', $misi->id) }}" method="POST">
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

    </div>
</div>
@endsection

@push('scripts')
<script>
    let table = new DataTable('#table');

    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Apakah Anda Yakin?`,
                text: "Harap untuk memeriksa kembali sebelum menghapus data.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>
@endpush
