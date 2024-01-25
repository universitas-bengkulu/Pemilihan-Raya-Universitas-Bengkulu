@extends('layouts.users')

@section('kandidat','bg-black lg:shadow-inner shadow-gray-600 text-white')
@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 container mx-auto gap-6 px-2   md:px-4 ">
    <div class="col-span-1  overflow-hidden rounded-md">
        <div x-data class=" flex w-full text-gray-800  mx-auto place-self-center    justify-center
                    flex-row   gap-2">
            <a href="{{ route('mahasiswa.dashboard') }}" class="py-2 mb-3  duration-300 transform hover:scale-[99%] bg-gray-900 focus:scale-95   rounded-md  w-full px-3    text-center  text-white text-sm    flex"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 mt-1" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                <p class="py-1">Kembali</p>

            </a>
            @foreach ($allkandidats as $nomorkandidat)
            <a href="{{ route('mahasiswa.visi-misi',[$nomorkandidat->id]) }}" class="py-2 mb-3  duration-300 transform hover:scale-[99%] {{$kandidat->id==$nomorkandidat->id?'bg-red-500':'bg-red-300' }} focus:scale-95 focus:bg-red-500 rounded-sm w-full    text-center font-bold text-white text-xl  ">{{ $nomorkandidat->nomor_urut }}

            </a>

            @endforeach
        </div>
        <div class="place-self-center h-full  w-full grid bg-[#E73530] rounded-md shadow-lg py-8 shadow-gray-400">
            <div class="place-self-center flex h-full -mt-7 mb-7 align-middle items-center  ">
                <svg viewBox="0 0 24 24" class="h-24 mr-8 fill-white " style="filter: drop-shadow(5px 5px  10px #000);" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M21.9445 14.4719L21.9661 14.5336L21.9892 14.6345L21.9981 14.7331V21.25C21.9981 21.6297 21.7159 21.9435 21.3499 21.9932L21.2481 22H2.75C2.3703 22 2.05651 21.7178 2.00685 21.3518L2 21.25V14.7506L2.00184 14.6977L2.01271 14.6122C2.02285 14.5584 2.03841 14.5072 2.05894 14.4587L4.81824 8.44003C4.92517 8.2068 5.14245 8.04682 5.39153 8.01047L5.5 8.0026L8.03982 8.00183L7.25089 9.37206L7.18282 9.50183L5.981 9.502L3.918 13.9998H20.07L18.0428 9.65383L18.9052 8.15653C18.9718 8.20739 19.0301 8.26957 19.0771 8.3411L19.1297 8.43553L21.9445 14.4719ZM13.3652 2.05565L13.4566 2.10062L18.6447 5.10375C18.9729 5.29371 19.1033 5.69521 18.9636 6.03728L18.9187 6.1289L16.112 11.001L17.25 11.0016C17.6642 11.0016 18 11.3374 18 11.7516C18 12.1313 17.7178 12.4451 17.3518 12.4948L17.25 12.5016L15.248 12.501L15.2471 12.504H11.1691L11.166 12.501L6.75 12.5016C6.33579 12.5016 6 12.1658 6 11.7516C6 11.3719 6.28215 11.0581 6.64823 11.0085L6.75 11.0016L8.573 11.001L8.39145 10.8963C8.06327 10.7063 7.93285 10.3048 8.0726 9.96272L8.11747 9.8711L12.4341 2.37536C12.6235 2.04633 13.024 1.91557 13.3652 2.05565ZM13.3559 3.77529L9.78781 9.97119L11.566 11.001H14.383L17.248 6.02818L13.3559 3.77529Z"></path>
                    </g>
                </svg>

                <p style="text-shadow: 5px 5px  10px #000;" class="text-white text-center text-7xl font-extrabold justify-center mt-3 content-center  ">{{ $kandidat->nomor_urut }}
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

@endsection
