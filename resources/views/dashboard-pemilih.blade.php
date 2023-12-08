@extends('layouts.users')
@section('user-login')
        {{ Session::get('nama') }}
@endsection
@section('user-login2')
        {{ Session::get('nama') }}
@endsection
@section('logout')
    <a href="{{ route('panda.logout') }}" class="btn btn-default btn-flat btn-danger" style="color: black">Logout</a>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if ($sudah)
                <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="fa fa-success-circle"></i><strong>Selamat :</strong> pilihan anda berhasil disimpan, terimakasih sudah menggunakan hak suara anda !!
                </div>
                @else
            @endif
            @if ($jadwal <1)
                <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="fa fa-success-circle"></i><strong>Mohon Maaf :</strong> Jadwal pemilihan raya belum ditambahkan, silahkan lakukan pemilihan hanya di jadwal pemilihan !!
                </div>
                @else
            @endif
        </div>
        @foreach ($kandidats as $kandidat)

            <div class="col-md-4">
                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <label for="">Kandidat Nomor Urut  {{ $kandidat->nomor_urut }}</label>
                        

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item text-center" style="cursor: pointer">
                                <img class="profile-user-img img-responsive" style="width: 100%" src="{{ asset('storage/'.$kandidat->banner) }}" alt="User profile picture">
                        <h3 class="profile-username text-center" style="text-transform: uppercase">{{ $kandidat->nama_calon_ketua.' ('.$kandidat->npm_calon_ketua.' )' }} <br> & <br> {{ $kandidat->npm_calon_wakil_ketua.' ('.$kandidat->npm_calon_wakil_ketua.' )' }}</h3>

                            </li>
                        </ul>
                        @if ($sudah)
                            <button disabled class="btn btn-primary btn-block"><i class="fa fa-check-circle"></i>&nbsp; Pilih</button>
                            @else
                                @if ($jadwal <1)
                                    <button disabled class="btn btn-primary btn-block"><i class="fa fa-check-circle"></i>&nbsp; Pilih</button>
                                @else
                                    <form action="{{ route('mahasiswa.pilih',[$kandidat->id]) }}" method="POST">
                                        {{ csrf_field() }} {{ method_field('POST') }}
                                        <button type="submit" name="submit" class="btn btn-primary btn-block"><i class="fa fa-check-circle"></i>&nbsp; Pilih</button>
                                    </form>
                                @endif
                        @endif
                    </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>    
        @endforeach
    </div>
@endsection