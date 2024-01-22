<form action="{{ route('jadwal_kegiatan.store') }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf @method('POST')
    <div class="row">
        <div class="form-group col-md-6">
            <label for="">Jadwal/Periode Pemilihan</label>
            <select name="jadwal_id" class="form-control" id="">
                <option disabled selected>-- pilih Jadwal/Periode Pemilihan --</option>
                @foreach ($jadwals as $jadwal )
                <option value="{{ $jadwal->id }}">{{ $jadwal->tanggal }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="">Tanggal Pelaksanaan</label>
            <input type="text" name="tgl" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label for="">Judul Kegiatan</label>
            <textarea name="judul" class="form-control" id="" cols="30" rows="1"></textarea>
        </div>
        <div class="form-group col-md-12">
            <label for="">Deskripsi Kegiatan</label>
            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="3"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="text-align: center">
            <a href="{{ route('jadwal_kegiatan') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
        </div>
    </div>
</form>
