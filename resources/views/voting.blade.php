@extends('layouts.users')

@section('voting','text-yellow-500')
@section('content')
<div class=" h-screen  absolute w-full     overflow-y-auto -mt-10 py-20
                from-[#E73530] bg-gradient-to-t from-50%   grid
                ">
    @if($sudah)
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <div class="grid -mt-48 ">
        <div class="place-self-center">
            <lottie-player src="{{ asset('assets/frontend/save.json') }} " background="transparent" speed="1" class="w-full max-w-md mx-auto  " loop autoplay></lottie-player>
            <h2 class="text-center text-base md:text-lg capitalize text-white font-bold mx-4 relative -mt-10 lg:-mt-20">pilihan anda telah disimpan, terimakasih sudah menggunakan hak suara anda!</h2>

        </div>
    </div>
    @else

    <div x-data class=" lg:flex w-full text-gray-800 mx-4 md:mx-auto place-self-center pb-20 px-10 justify-center
                    lg:flex-row md:grid md:grid-cols-2 flex-col gap-6">
        @foreach ($kandidats as $kandidat)
        <div>
            <div onclick="confirmAction({{ $kandidat->nomor_urut }}, {{ $kandidat->id }})">
                <div class="rounded-md max-w-[240px] mx-auto mb-8  my-2 w-full cursor-pointer bg-gray-100 hover:bg-opacity-80 :hoverbg-black  shadow-black duration-300 transform content-div
                                      group shadow-lg hover:shadow-xl overflow-hidden hover:scale-110 relative">
                    <img src="{{ asset('assets/frontend/download-removebg-preview.png') }}" alt="img" class="absolute z-50 w-28 translate-x-full transform ml-32 group-hover:-ml-10
                                          group-hover:mt-10 group-active:-ml-10 group-active:mt-10
                                            duration-300">
                    <div class="py-2 mb-3 bg-black   w-full text-center font-bold text-white text-xl  "><b class="text-yellow-500 text-xs mr-3">Kandidat Nomor Urut</b>{{ $kandidat->nomor_urut }}
                    </div>
                    <img class=" relative flex items-end overflow-hidden rounded-full      duration-300 transform  h-36 mx-auto   " src="{{ asset('assets/frontend/logo.webp') }}" alt="Img" />
                    <div class="   duration-200 transform mt-3 px-2 ">
                        <div class="mt-3 flex items-end justify-between border-t-gray-800 border-t-2 ">
                            <p class="text-gray-900 py-2 text-xs md:text-sm  text-center">
                                {{ $kandidat->nama_calon_ketua.' ('.$kandidat->npm_calon_ketua.')' }} <br><b>&</b> <br> {{ $kandidat->npm_calon_wakil_ketua.' ('.$kandidat->npm_calon_wakil_ketua.')' }}
                            </p>
                        </div>
                    </div>


                </div>
            </div>

        </div>



        @endforeach



    </div>
    @endif
</div>
<script>
    function confirmAction(nomor, id) {
        Swal.fire({
            title: 'Apa Anda Yakin?',
            html: "Memilih Kandidat nomor urut <b class='text-2xl font-bold text-orange-500'>" + nomor + "</b>",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'BATAL',
            confirmButtonText: 'YAKIN'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('mahasiswa.pilih', ':id') }}".replace(':id', id);
            }
        });
    }
</script>
@endsection
