<form action="{{ route('contact.update',[$contact->id]) }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf @method('PATCH')
    <div class="row">
        <div class="form-group col-md-6">
            <label for="">Jadwal/Periode Pemilihan</label>
            <select name="jadwal_id" class="form-control" id="">
                <option disabled selected>-- pilih Jadwal/Periode Pemilihan --</option>
                @foreach ($jadwals as $jadwal )
                <option value="{{ $jadwal->id }}" {{ $jadwal->id==$contact->jadwal_id? 'selected' : '' }}>{{ $jadwal->tanggal }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="">Email</label>
            <input type="text" name="email" value="{{ $contact->email }}" class="form-control">
        </div>


        <div class="form-group col-md-12">
            <label for="">Nomor Whatsapp</label>
            <textarea name="no_tlp" class="form-control" id="" cols="30" rows="1">{{$contact->no_tlp}}</textarea>
            <small class="text-danger">Catatan: apabila nomor lebih dari 1, pisahkan dengan mengunakan tanda titik-koma (;) </small><br>
            <small class="text-danger"> nomor telpon tidak menggunakan tanda +, contoh nomor 62812xxxxxxx </small>
        </div>

        <div class="form-group col-md-12">
            <label for="">Running Text</label>
            <textarea name="marquee" class="form-control" id="" cols="30" rows="3">{{$contact->marquee}}</textarea>
            <small class="text-danger">Catatan: text bergerak yang ditampilkan pada halaman utama </small>
        </div>


    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning">
                <strong>Link Sosial Media</strong>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="">Facebook</label>
            <input type="text" name="facebook" value="{{ $contact->facebook }}" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label for="">Instagram</label>
            <input type="text" name="instagram" value="{{ $contact->instagram }}" class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label for="">Twitter</label>
            <input type="text" name="twitter" value="{{ $contact->twitter }}" class="form-control">
        </div>



    </div>
    <div class="row">
        <div class="col-md-12" style="text-align: center">
            <a href="{{ route('contact') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
        </div>
    </div>
</form>
