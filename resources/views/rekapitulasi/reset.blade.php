@extends('layouts.app')
@section('halaman', 'Data Rekapitulasi')
@section('sub-halaman')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Data Rekapitulasi</li>
@endsection
@section('content')
<div class="   ">
    <div class="col-md-12" id="sync">
        @if ($rekapitulasis !=0)
        <div class="alert alert-warning">
            <!-- Loading Spinner Wrapper-->
            <div class="loader text-center">
                <div class="loader-inner">

                    <i class="fa fa-warning   " style="font-size: 90px;margin-bottom: 10px;"></i>


                    <h4 class="font-weight-bold" style="font-size: 24px;">Peringatan </h4>
                    <p class="font-italic text-white">Hapus data Rekapitulasi suara, akan mangakibatkan semua data suara yang telah memilih akan di reset!</p>
                </div>

                <form action="{{ route('rekapitulasi.destroy') }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm"><i class="fa fa-trash"></i>&nbsp; Reset Rekapitulasi Suara</button>
                </form>
            </div>

        </div>
        @else

        <div class="alert alert-info">
            <!-- Loading Spinner Wrapper-->
            <div class="loader text-center">
                <div class="loader-inner">

                    <i class="fa fa-exclamation-circle   " style="font-size: 90px;margin-bottom: 10px;"></i>


                    <h4 class="font-weight-bold" style="font-size: 24px;">Perhatian </h4>
                    <p class="font-italic text-white">Tidak dapat reset,  Masih tidak ada data suara masuk</p>
                </div>

            </div>

        </div>

        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Apakah Anda Yakin?`,
                text: "Harap untuk pastikan kembali sebelum menghapus Rekapitulasi Suara.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>
@endpush
