<form action="{{ route('kandidat.storeMisi',[$kandidat->id]) }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf @method('POST')
    <div class="row">
        <div class="form-group col-md-12">
            <label for="">Masukan Misi Kandidat</label>
            <textarea name="misi" class="form-control" id="" cols="30" rows="3"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="text-align: center">
            <a href="{{ route('kandidat.detailMisi',[$kandidat->id]) }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
        </div>
    </div>
</form>
