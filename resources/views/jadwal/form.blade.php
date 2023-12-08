<form action="{{ route('jadwal.update',[$jadwal->id]) }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf @method('PATCH')
    <div class="row">
        <div class="form-group col-md-12">
            <label for="">Masukan Tanggal Pemilihan</label>
            <input type="date" value="{{ $jadwal->tanggal }}" name="tanggal" class="form-control">
        </div>

        <div class="form-group col-md-12">
            <label for="">Masukan Waktu Mulai</label>
            <input type="time" value="{{ $jadwal->waktu_mulai }}" name="waktu_mulai" class="form-control">
        </div>

        <div class="form-group col-md-12">
            <label for="">Masukan Waktu Selesai</label>
            <input type="time" value="{{ $jadwal->waktu_selesai }}" name="waktu_selesai" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
        </div>
    </div>
</form>
@push('scripts')
    @include('kandidat._js')
@endpush