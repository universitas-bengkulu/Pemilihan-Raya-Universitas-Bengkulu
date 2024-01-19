<form action="{{ route('kandidat.update',[$kandidat->id]) }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf @method('PATCH')
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <strong>1. LENGKAPI DATA KANDIDAT</strong>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="">Masukan Nomor Urut</label>
            <input type="text" name="nomor_urut" value="{{ $kandidat->nomor_urut }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan Banner Surat Suara</label>
            <input type="file" name="banner" value="{{ $kandidat->banner }}" class="form-control">
            <small class="text-danger">File Lama : {{ $kandidat->banner }}</small>
        </div>

        <div class="form-group col-md-12">
            <label for="">Masukan Visi Kandidat</label>
            <textarea name="visi" class="form-control" id="" cols="30" rows="3">{{ $kandidat->visi }}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <strong>2. LENGKAPI DATA CALON GUBERNUR</strong>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="">Masukan Nama Calon Gubernur</label>
            <input type="text" name="nama_calon_ketua" value="{{ $kandidat->nama_calon_ketua }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan NPM Calon Gubernur</label>
            <input type="text" name="npm_calon_ketua" value="{{ $kandidat->npm_calon_ketua }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan Jenis Kelamin Calon Gubernur</label>
            <select name="jenis_kelamin_calon_ketua" class="form-control" id="">
                <option disabled selected>-- pilih jenis kelamin --</option>
                <option value="L" {{ $kandidat->jenis_kelamin_calon_ketua == 'L' ? 'selected' : ''}}>Laki-Laki</option>
                <option value="P" {{ $kandidat->jenis_kelamin_calon_ketua == 'P' ? 'selected' : ''}}>Perempuan</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan Prodi Calon Gubernur</label>
            <input type="text" name="prodi_calon_ketua" value="{{ $kandidat->prodi_calon_ketua }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan Jenjang Prodi Calon Gubernur</label>
            <select name="jenjang_prodi_calon_ketua" class="form-control" id="">
                <option disabled selected>-- pilih jenjang prodi --</option>
                <option {{ $kandidat->jenjang_prodi_calon_ketua == "DI" ? 'selected' : ''}} value="DI">DI</option>
                <option {{ $kandidat->jenjang_prodi_calon_ketua == "DII" ? 'selected' : ''}} value="DII">DII</option>
                <option {{ $kandidat->jenjang_prodi_calon_ketua == "DIII" ? 'selected' : ''}} value="DIII">DIII</option>
                <option {{ $kandidat->jenjang_prodi_calon_ketua == "DIV" ? 'selected' : ''}} value="DIV">DIV</option>
                <option {{ $kandidat->jenjang_prodi_calon_ketua == "S1" ? 'selected' : ''}} value="S1">S1</option>
                <option {{ $kandidat->jenjang_prodi_calon_ketua == "S2" ? 'selected' : ''}} value="S2">S2</option>
                <option {{ $kandidat->jenjang_prodi_calon_ketua == "S3" ? 'selected' : ''}} value="S3">S3</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan Nomor HP Calon Gubernur</label>
            <input type="text" name="nomor_hp_calon_ketua" value="{{ $kandidat->nomor_hp_calon_ketua }}" class="form-control">
        </div>
        <div class="form-group col-md-12">
            <label for="">Masukan Foto Calon Gubernur</label>
            <input type="file" name="foto_ketua" class="form-control">
            <small class="text-danger">File Lama : {{ $kandidat->foto_ketua }}</small>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <strong>3. LENGKAPI DATA CALON WAKIL GUBERNUR</strong>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="">Masukan Nama Calon Wakil Gubernur</label>
            <input type="text" name="nama_calon_wakil_ketua" value="{{ $kandidat->nama_calon_wakil_ketua }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan NPM Calon Wakil Gubernur</label>
            <input type="text" name="npm_calon_wakil_ketua" value="{{ $kandidat->npm_calon_wakil_ketua }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan Jenis Kelamin Calon Wakil Gubernur</label>
            <select name="jenis_kelamin_calon_wakil_ketua" value="{{ $kandidat->jenis_kelamin_calon_wakil_ketua }}" class="form-control" id="">
                <option disabled selected>-- pilih jenis kelamin --</option>
                <option value="L" {{ $kandidat->jenis_kelamin_calon_wakil_ketua == 'L' ? 'selected' : ''}}>Laki-Laki</option>
                <option value="P" {{ $kandidat->jenis_kelamin_calon_wakil_ketua == 'P' ? 'selected' : ''}}>Perempuan</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan Prodi Calon Wakil Gubernur</label>
            <input type="text" name="prodi_calon_wakil_ketua" value="{{ $kandidat->prodi_calon_wakil_ketua }}" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan Jenjang Prodi Calon Wakil Gubernur</label>
            <select name="jenjang_prodi_calon_wakil_ketua" value="{{ $kandidat->jenjang_prodi_calon_wakil_ketua }}" class="form-control" id="">
                <option disabled selected>-- pilih jenjang prodi --</option>
                <option {{ $kandidat->jenjang_prodi_calon_wakil_ketua == "DI" ? 'selected' : ''}} value="DI">DI</option>
                <option {{ $kandidat->jenjang_prodi_calon_wakil_ketua == "DII" ? 'selected' : ''}} value="DII">DII</option>
                <option {{ $kandidat->jenjang_prodi_calon_wakil_ketua == "DIII" ? 'selected' : ''}} value="DIII">DIII</option>
                <option {{ $kandidat->jenjang_prodi_calon_wakil_ketua == "DIV" ? 'selected' : ''}} value="DIV">DIV</option>
                <option {{ $kandidat->jenjang_prodi_calon_wakil_ketua == "S1" ? 'selected' : ''}} value="S1">S1</option>
                <option {{ $kandidat->jenjang_prodi_calon_wakil_ketua == "S2" ? 'selected' : ''}} value="S2">S2</option>
                <option {{ $kandidat->jenjang_prodi_calon_wakil_ketua == "S3" ? 'selected' : ''}} value="S3">S3</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="">Masukan Nomor HP Calon Wakil Gubernur</label>
            <input type="text" name="nomor_hp_calon_wakil_ketua" value="{{ $kandidat->nomor_hp_calon_wakil_ketua }}" class="form-control">
        </div>

        <div class="form-group col-md-12">
            <label for="">Masukan Foto Calon Wakil Gubernur</label>
            <input type="file" name="foto_wakil_ketua" class="form-control">
            <small class="text-danger">File Lama : {{ $kandidat->foto_wakil_ketua }}</small>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12" style="text-align: center">
            <a href="{{ route('kandidat') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
        </div>
    </div>
</form>
