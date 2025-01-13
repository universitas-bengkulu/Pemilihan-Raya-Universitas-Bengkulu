@extends('layouts.app')
@section('halaman', 'Setting DPT')
@section('sub-halaman')
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Setting DPT</li>
@endsection
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Setting DPT</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        @if(session('success-dpt'))
        <div class="alert alert-success">
            {{ session('success-dpt') }}
        </div>
        @endif
        @if(session('delate-dpt'))
        <div class="alert alert-warning">
            {{ session('delate-dpt') }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 10px !important;position: relative;">
                <a href="{{ route('dpt.create') }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i>&nbsp; Tambah Data</a>
                <button onclick="importDPT()" type="submit" class="btn btn-success  btn-sm btn-flat">Import Data (Excel) </button>
                <div  type="submit" class="btn btn-success disabled  btn-sm btn-flat">{{$jumlah}} DPT</div>
                @if($jumlah!=0)
                <form action="{{ route('delete-all-dpts' ) }}" method="POST" style="float: right;right: 10px ;  ">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm"><i class="fa fa-trash"></i>&nbsp; Hapus Semua Data DPT</button>
                </form>
                @else
                <div style="float: right;right: 10px ;  " class="btn btn-danger btn-sm btn-flat  disabled " disabled><i class="fa fa-trash"></i>&nbsp; Hapus Semua Data DPT</div>
                @endif
            </div>
        </div>
        @include('dpt.data')

        <div class="modal fade" id="importDPT">
            <form action="{{ route('dpt.import') }}" method="post" enctype="multipart/form-data" class="form">
                {{ csrf_field() }}
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-check-circle"></i>&nbsp;Import Data DPT (Excel)</h5>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-12 " style="margin-bottom: 10px;">
                                Template Excel <a href="{{asset('assets/template-dpt.csv')}}">download</a>
                            </div>
                            <div class="col-md-12 ">
                                <input type="file" name="excel_file" required>

                            </div>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close</button>
            <button type="submit" id="btn_submit" class="btn btn-primary btn-sm btn-flat btn_save"><i class="fa fa-check-circle"></i>&nbsp;Import Data</button>
        </div>
    </div>
    </form>
</div>

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
                text: "Harap untuk memeriksa kembali sebelum menghapus data.",
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


@push('scripts')
<script>
    function importDPT(id) {
        $('#importDPT').modal('show');
    }
</script>

@endpush
