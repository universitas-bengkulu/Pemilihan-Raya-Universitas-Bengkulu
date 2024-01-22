@extends('layouts.users')

@section('kandidat','text-yellow-500')
@section('content')
<div class="min-h-[33vh]     grid">
    <div class="place-self-center grid">
        <div class="flex space-x-2 mx-auto place-self-center ">
            <img src="{{ asset('assets/frontend/logo.webp') }}" alt="kotak-suara" style="filter: drop-shadow(2px 2px 5px #333);" class="h-40 rounded-full md:h-56 md:mt-10 animate-[bounce_3s_infinite]   ">
        </div>
        <p class="text-gray-800 mb-5   leading-6 md:leading-7 mt-5  max-w-4xl mx-auto text-center md:text-sm 2xl:text-base 2xl:leading-7 text-xs px-6 ">
            E-voting merupakan sebuah sistem yang
            memanfaatkan perangkat
            elektronik dan mengolah informasi
            digital untuk membuat surat suara, memberikan suara, menghitung perolehan suara, menayangkan
            perolehan suara dan memelihara serta menghasilkan jejak audit.
            Pemilihan berbasis online ini dilakukan sebagai alternatif proses pemilihan Universitas Bengkulu
        </p>

    </div>
</div>
<div class="min-h-[67vh]  relative     overflow-hidden pt-5
                from-[#E73530] bg-gradient-to-t from-50%   grid
                ">

    <div x-data class=" flex w-full text-gray-800 mx-4 md:mx-auto place-self-center pb-20 px-10 justify-center
                    md:flex-row flex-col">
        @foreach ($kandidats as $kandidat)
        <div data-aos="fade-up">
            <div class="rounded-md max-w-[240px] mx-auto md:mx-3  w-full bg-gray-100 hover:bg-opacity-80 hover:bg-black  shadow-black duration-300 transform content-div
                                      group shadow-lg hover:shadow-xl overflow-hidden hover:scale-110">
                <div class="py-2  bg-black   w-full text-center font-bold text-white text-xl  "><b class="text-yellow-500 text-xs mr-3">Kandidat Nomor Urut</b>{{ $kandidat->nomor_urut }}
                </div>
                <img class=" relative flex items-end overflow-hidden    group-hover:opacity-25 duration-300 transform h-48 object-cover  mx-auto   " src="{{ Storage::url('public/') }}{{ $kandidat->banner }}" alt="Img" />
                <div class="   duration-200 transform    ">
                    <div class=" flex items-end justify-between border-t-gray-800 group-hover:border-t-gray-300 border-t-2 px-2">
                        <div class="text-gray-900 group-hover:text-gray-200 py-2 text-xs w-full md:text-sm  text-center  ">
                            <p class="line-clamp-1 font-bold">{{$kandidat->nama_calon_ketua}}</p>
                            <p class="text-yellow-600">({{$kandidat->npm_calon_ketua}})</p>
                            <p class="  font-bold">&</p>
                            <p class="line-clamp-1 font-bold">{{ $kandidat->npm_calon_wakil_ketua }}</p>
                            <p class="text-yellow-600">({{$kandidat->npm_calon_wakil_ketua}})</p>
                        </div>
                    </div>
                </div>
                <div class="absolute w-full top-0 left-0  text-center  grid  h-full  opacity-0
                                             group-hover:opacity-100
                                             duration-200 transform">
                    <div class="  text-center   place-self-center  ">
                        <a href="{{ route('mahasiswa.visi-misi',[$kandidat->id]) }}" class="text-center px-4 py-3 mx-auto   md:text-sm
                                                     bg-[#cd514d] rounded-lg hover:bg-[#db6d6a] focus:ring
                                                     focus:ring-gray-300 focus:ring-opacity-80 duration-300 transform inline-block
                                                     text-white font-semibold text-xs ">Visi dan Misi</a>
                    </div>
                </div>

            </div>
        </div>

        @endforeach



    </div>
</div>

@endsection
