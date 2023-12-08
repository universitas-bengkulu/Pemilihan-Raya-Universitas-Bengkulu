<form action="{{ route('user.store') }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf @method('POST')
    <div class="row">
        <div class="form-group col-md-12">
            <label for="">Masukan Nomor Urut</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group col-md-12">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        
        <div class="form-group col-md-12">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group col-md-12">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('user') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
        </div>
    </div>
</form>