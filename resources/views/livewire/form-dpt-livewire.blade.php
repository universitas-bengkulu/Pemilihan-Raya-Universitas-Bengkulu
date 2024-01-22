<div>



    @if ($success)
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ $success }}
    </div>
    @endif

    @if ($error)
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Error!</h4>
        {{$error}}
    </div>


    @endif


    <form wire:submit.prevent="simpan" method="POST" class="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row" style="position: relative;margin-bottom: 10px;">
            <div class="form-group col-md-6">
                <label for="">NPM</label>
                <input type="text" wire:model.lazy="npm" required wire:keyup="cariNpm" id="npm" class="form-control">

            </div>

            <div class="form-group col-md-6">
                <label for="">Nama Lengkap</label>
                <input type="text" wire:model="nama" required class="form-control">
            </div>
            <div class="text-danger col-md-1" style="position: absolute; bottom: -5px;  margin-top: 10px; ">
                <i class="fa fa-spinner fa-spin spin-panda  " style="margin-right: 5px;" wire:loading wire:target="cariNpm"></i> <span wire:loading wire:target="cariNpm" class="mx-2 text-[14px]">Processing...</span>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="">Jenjang</label>
                <input type="text" wire:model="jenjang" required class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">Angkatan</label>
                <input type="text" wire:model="angkatan" required class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="">Program Studi</label>
                <input type="text" wire:model="prodi" required class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="">Fakultas</label>
                <input type="text" wire:model="fakultas" required class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="">Singkatan Fakultas</label>
                <input type="text" wire:model="singkatan_fakultas" required class="form-control">
            </div>

        </div>

        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <a href="{{ route('dpt') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-circle-left"></i>&nbsp; Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
            </div>
        </div>
    </form>

</div>
