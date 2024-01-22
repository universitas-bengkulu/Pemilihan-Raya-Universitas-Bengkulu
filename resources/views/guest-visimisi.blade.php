@extends('layouts.guest')

@section('quick-count','active-menu')
@section('menu','/')
@section('content')
<section class="  mt-44  relative     overflow-hidden    grid   min-h-screen ">
    <div class="grid grid-cols-1 lg:grid-cols-3 container mx-auto gap-6 px-2   md:px-4 ">
        <div class="col-span-1  overflow-hidden rounded-md">
            <div x-data class=" flex w-full text-gray-800  mx-auto place-self-center    justify-center
                    flex-row   gap-2">
                <a href="{{ route('mahasiswa.quick-count') }}" class="py-2 mb-3  duration-300 transform hover:scale-[99%] bg-gray-900 focus:scale-95   rounded-md  w-full px-3  text-center  text-white text-sm    flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 mt-1" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    <p class="py-1">Kembali</p>

                </a>
                @foreach ($allkandidats as $nomorkandidat)
                <a href="{{ route('visimisi',[$nomorkandidat->id]) }}" class="py-2 mb-3  duration-300 transform hover:scale-[99%] {{$kandidat->id==$nomorkandidat->id?'bg-red-500':'bg-red-300' }} focus:scale-95 focus:bg-red-500 rounded-sm w-full    text-center font-bold text-white text-xl  ">{{ $nomorkandidat->nomor_urut }}

                </a>

                @endforeach
            </div>
            <div class="place-self-center h-full  w-full grid bg-[#E73530] rounded-md shadow-lg py-8 shadow-gray-400">
                <div class="place-self-center flex h-full -mt-7 mb-7 align-middle items-center  ">
                    <img src="{{ asset('assets/frontend/kotak.png') }}" alt="kotak-suara" style="filter: drop-shadow(2px 2px 5px #333);" class="h-40     ">
                    <p class="text-white text-center text-7xl font-extrabold justify-center content-center  ">{{ $kandidat->nomor_urut }}
                    </p>
                </div>


            </div>

        </div>
        <div class="col-span-1 ">
            <img src="{{ Storage::url('public/') }}{{ $kandidat->foto_ketua }}" alt="img" class=" w-60 h-[310px] object-fill bg-gray-200   p-2 shadow-lg shadow-gray-400 mx-auto">
            <div class="w-full bg-gray-200   rounded-lg px-3 shadow-lg shadow-gray-400 mx-auto  ">
                <table class="table-biodata">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $kandidat->nama_calon_ketua }}</td>
                        </tr>
                        <tr>
                            <td>NPM</td>
                            <td>{{ $kandidat->npm_calon_ketua }}</td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>{{ $kandidat->prodi_calon_ketua }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-span-1">
            <img src="{{ Storage::url('public/') }}{{ $kandidat->foto_wakil_ketua }}" alt="img" class=" w-60 h-[310px] object-fill bg-gray-200   p-2 shadow-lg
                        shadow-gray-400 mx-auto">
            <div class="w-full bg-gray-200   rounded-lg px-3 shadow-lg shadow-gray-400 mx-auto  ">
                <table class="table-biodata">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>{{ $kandidat->nama_calon_wakil_ketua }}</td>
                        </tr>
                        <tr>
                            <td>NPM</td>
                            <td>{{ $kandidat->npm_calon_wakil_ketua }}</td>
                        </tr>
                        <tr>
                            <td>Program Studi</td>
                            <td>{{ $kandidat->prodi_calon_wakil_ketua }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 container mx-auto gap-6 mt-8 px-2   md:px-4 mb-20 ">
        <div class="col-span-1">
            <div class="bg-white shadow-md rounded-md p-5">
                <h1 class="text-4xl font-bold text-[#E73530]">VISI</h1>

                <p class="text-sm 2xl:text-base 2xl:leading-8 leading-7 mt-4"> {!! !empty($kandidat->visi)? $kandidat->visi : '<i class="text-red-500">Tidak Ada Data</i>' !!} </p>

            </div>
        </div>
        <div class="col-span-1">
            <div class="bg-white shadow-md rounded-md p-5">
                <h1 class="text-4xl font-bold text-[#E73530]">MISI</h1>

                <p class=" mt-4">
                    @if (count($kandidat->misis) > 0)
                <ul class="list-decimal ml-5">
                    @foreach ($kandidat->misis as $misi)
                    <li class="pl-2 text-sm 2xl:text-base 2xl:leading-8 leading-7">
                        {{ $misi->misi }}
                    </li>


                    @endforeach
                </ul>

                @else
                <i class="text-red-500">Tidak Ada Data</i>
                @endif
                </p>

            </div>
        </div>

    </div>
    <footer class="absolute bottom-0      z-50 bg-[#E73530]   w-full   ">
        <div class="px-12 mx-auto py-3   flex flex-wrap flex-col sm:flex-row    ">
            <p class="text-white mx-auto  text-xs md:text-sm text-center sm:text-left">Copyright&copy; 2023 |
                <a href="#" class="text-yellow-500 font-bold">KPU UNIVERSITAS BENGKULU</a>. All rights reserved.
            </p>
        </div>
    </footer>
</section>

@endsection
