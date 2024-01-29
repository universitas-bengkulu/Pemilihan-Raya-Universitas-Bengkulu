@extends('layouts.guest')

@section('guest_kandidat','active-menu')
@section('menu','/')
@section('content')
@if ($kandidats->count() !=0)
<div class="  relative     overflow-hidden    grid   min-h-screen  ">
    <div class="     items-center px-4   mx-auto section-heading  pt-40    ">
        <h2 data-aos="fade-down" class="mb-6 text-center font-sans text-4xl lg:text-5xl font-bold text-[#E73530]   " style="text-shadow:5px 5px 5px #38383863;">
            Kandidat</h2>
        <p data-aos="fade-down" class="  mt-2   text-sm text-gray-700      text-center leading-8">
            Kandidat Pasangan Calon Presiden Mahasiswa dan Calon Wakil Presiden Mahasiswa.
        </p>
        <div class=" lg:flex w-full text-gray-800 mx-4 md:mx-auto mt-6  pb-20 px-10 justify-center
                        lg:flex-row md:grid md:grid-cols-2 flex-col gap-6">
            @foreach ($kandidats as $kandidat)
            <div>
                <div class="rounded-md  max-w-[240px] mx-auto mb-6   my-2 w-full bg-gray-100  hover:bg-opacity-80 hover:bg-black      shadow-black duration-300 transform content-div
                                        group shadow-lg hover:shadow-xl overflow-hidden hover:scale-110">
                    <div class="py-2   bg-black   w-full text-center font-bold text-white text-xl  "><b class="text-yellow-500 text-xs mr-3">Kandidat Nomor Urut</b>{{ $kandidat->nomor_urut }}
                    </div>
                    <img class=" relative flex items-end overflow-hidden group-hover:opacity-25  duration-300 transform  h-48 object-cover mx-auto   " src="{{ Storage::url('public/') }}{{ $kandidat->banner }}" alt="Img" />
                    <div class="   duration-200 transform   ">
                        <div class="  flex items-end justify-between border-t-gray-800 border-t-2 px-2">
                            <div class="text-gray-900 group-hover:text-gray-400 py-2 text-xs md:text-sm w-full text-center  ">
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
                            <a href="{{ route('visimisi',[$kandidat->id]) }}" class="text-center px-4 py-3 mx-auto   md:text-sm
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


    <footer class="absolute bottom-0      z-50 bg-[#E73530]   w-full   ">
        <div class="px-12 mx-auto py-3   flex flex-wrap flex-col sm:flex-row    ">
            <p class="text-white mx-auto  text-xs md:text-sm text-center sm:text-left">Copyright&copy; 2023 |
                <a href="#" class="text-yellow-500 font-bold">BIDANG KEMAHASISWAAN UNIVERSITAS BENGKULU</a>. All rights reserved.
            </p>
        </div>
    </footer>
</div>
@else
<div class="h-screen grid">
    <div class="place-self-center container md:mx-auto mx-4 bg-red-100 bg-opacity-50 shadow-md rounded-md shadow-gray-300 py-20 ">
        <div class="px-10 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-44 w-44 mx-auto text-red-800" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
            </svg>
            <p class="mt-5 font-bold">Belum ada calon kandidat</p>
        </div>
    </div>

    <footer class="absolute bottom-0      z-50 bg-[#E73530]   w-full   ">
        <div class="px-12 mx-auto py-3   flex flex-wrap flex-col sm:flex-row    ">
            <p class="text-white mx-auto  text-xs md:text-sm text-center sm:text-left">Copyright&copy; 2023 |
                <a href="#" class="text-yellow-500 font-bold">BIDANG KEMAHASISWAAN UNIVERSITAS BENGKULU</a>. All rights reserved.
            </p>
        </div>
    </footer>
</div>
@endif
@endsection
