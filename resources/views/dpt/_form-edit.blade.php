<form action="{{ route('dpt.update',[$dpt->npm]) }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf @method('PATCH')
    <div class="row">
        <div class="form-group col-md-6">
            <label for="">NPM</label>
            <input type="text" name="npm" value="{{$dpt->npm}}" disabled  id="npm" class="form-control ">

        </div>

        <div class="form-group col-md-6">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" value="{{$dpt->nama_lengkap}}" required class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="">Jenjang</label>
            <input type="text" name="jenjang" value="{{$dpt->jenjang}}" required class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="">Angkatan</label>
            <input type="text" name="angkatan" value="{{$dpt->angkatan}}" required class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label for="">Program Studi</label>
            <input type="text" name="prodi" value="{{$dpt->prodi}}" required class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="">Fakultas</label>
            <input type="text" name="fakultas" value="{{$dpt->nama_lengkap_fakultas}}" required class="form-control">
        </div>
        <div class="form-group col-md-2">
            <label for="">Singkatan Fakultas</label>
            <input type="text" name="singkatan_fakultas" value="{{$dpt->nama_singkat_fakultas}}" required class="form-control">
        </div>

    </div>
    <div class="row">
        <div class="col-md-12" style="text-align: center">
            <a href="{{ route('dpt') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
        </div>
    </div>
</form>
