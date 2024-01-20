<div>
    <form wire:submit.prevent="simpan" method="POST" class="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">

            <div class="form-group col-md-6">
                <label for="">NPM</label>
                <input type="text" wire:model.lazy="npm" wire:keyup="cariNpm" id="npm" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">Nama Lengkap</label>
                <input type="text" wire:model="nama" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">Jenjang</label>
                <input type="text" wire:model="jenjang" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">Angkatan</label>
                <input type="text" wire:model="angkatan" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="">Program Studi</label>
                <input type="text" wire:model="prodi" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">Fakultas</label>
                <input type="text" wire:model="fakultas" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="">Singkatan Fakultas</label>
                <input type="text" wire:model="fakultas" class="form-control">
            </div>





        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <a href="{{ route('kandidat') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
            </div>
        </div>
    </form>

</div>
