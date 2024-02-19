@extends('layouts.app')
@section('halaman', 'Data Misi Kandidat')
@section('sub-halaman')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Data Misi Kandidat</li>
@endsection
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Data Misi Kandidat</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <form action="{{ route('kandidat.storeEditMisi',[$data->kandidat_id,$data->id]) }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf @method('POST')
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Masukan Misi Kandidat</label>
                    <textarea name="misi" class="form-control" id="" cols="30" rows="3">{{$data->misi}}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="text-align: center">
                    <a href="{{ route('kandidat.detailMisi',[$data->kandidat_id]) }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
@push('scripts')
@include('kandidat._js')
@endpush
