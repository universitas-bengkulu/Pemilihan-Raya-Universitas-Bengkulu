@extends('layouts.guest')

@section('cek-dpt','active-menu')
@section('menu','/')
@section('content')

<section class="  items-center w-full   duration-300 transform     ">
    <div class="grid grid-cols-1 md:grid-cols-2   ">
        <div class="col-span-1    md:block hidden  ">
            <div class="min-h-screen    justify-center grid">
                <img src="{{ asset('assets/frontend/src/confirm.svg') }}" alt="img" class="w-2/3 h-2/3 place-self-center">
            </div>

        </div>
        <div class="col-span-1 grid min-h-screen  ">
            <div class="place-self-center px-6 max-w-lg   ">
                <h2 data-aos="fade-down" class="md:mb-6 mb-3 mt-40  font-sans text-2xl lg:text-3xl font-bold text-[#E73530]   " style="text-shadow:5px 5px 5px #38383863;">
                    Status Hak Suara</h2>
                <p class="text-xs md:text-[14px] leading-7 text-gray-700">
                    Mahasiswa yang berhak menggunakan hak suaranya adalah mahasiswa aktif pada semester
                    berjalan, Silahkan Masukkan <b>Nomor Pokok Mahasiswa</b> Anda Untuk Mengecek Hak Suara Anda

                </p>
                <form method="POST" action="{{ route('cek_status_dpt') }}">
                    @csrf
                    <div class="my-2  ">
                        <label class=" after:content-['*'] after:text-red-500 font-semibold text-gray-800
                                after:ml-2 text-sm pb-2">Nomor Pokok Mahasiswa</label>
                        <input type="text" id="npm" name="npm" class="   w-full rounded-lg border-2 mt-1 border-gray-700
                                bg-white px-3 py-2.5 text-sm font-normal text-gray-800  transition-all duration-500
                                   focus:border-black
                                 focus:ring-gray-300
                                focus:shadow-[-2px_2px_5px_0px_#444]
                                 " placeholder="Nomor Pokok Mahasiswa" value="{{ isset($_REQUEST['npm']) ? $_REQUEST['npm'] : '' }}" />
                    </div>
                    <div class=" w-full ">
                        <button class=" h-full inline-block text-center rounded-lg border-2 mt-1 w-full bg-[#E73530]
                                hover:scale-[99%] focus:scale-95
                                font-bold tracking-widest  text-white hover:bg-red-800 px-3 py-2
                              text-sm    transition-all duration-500 focus:shadow-[-2px_2px_10px_0px_#eab308]
                                ">Cek Status</button>
                    </div>
                </form>
                <div class="mt-5"></div>
                <!-- <div style="display: none;" id="sedangMencari" class="p-4    text-sm text-red-800 rounded-lg bg-red-50   mb-3" role="alert">
                    <i class="fa fa-refresh fa-spin"></i>&nbsp;<span class="font-medium">Sedang Mencari!</span> Proses Pencarian Sedang Dilakukan
                </div> -->
                @if ($showData)
                @if (!$dataDpt )
                <div id="tidakDitemukan" class="p-4    text-sm text-yellow-800 rounded-lg bg-yellow-50   mb-20" role="alert">
                    <span class="font-medium">Mohon Maaf!</span> Data anda tidak ditemukan dan belum terdaftar sebagai Daftar Pemilih Tetap (DPT), silahkan hubungi KPU Universitas Bengkulu pada kontak narahubung tersedia dapat dilihat <a href="/#contact" class="text-blue-500">disini</a>.
                </div>
                @else
                <div id="ditemukan" class="p-4    text-sm text-green-800 rounded-lg bg-green-50   mb-3" role="alert">
                    <span class="font-medium">Data Ditemukan, !</span> Data anda ditemukan dan sudah terdaftar sebagai Daftar Pemilih Tetap (DPT)
                </div>

                <div class="relative  mb-20 overflow-x-auto shadow-md sm:rounded-lg" id="tableDitemukan">
                    <table class="w-full text-sm text-left text-gray-500   ">
                        <tr class="bg-white border-b  ">
                            <th scope="row" class="px-3 py-4 font-medium text-gray-900   ">
                                Nomor Pokok Mahasiswa (NPM)
                            </th>
                            <td class="px-3 py-4" id="npm_data">
                                {{ $dataDpt->npm }}
                            </td>
                        </tr>
                        <tr class="bg-white border-b  ">
                            <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                Nama Lengkap
                            </th>
                            <td class="px-3 py-4" id="nama_data">
                                {{ $dataDpt->nama_lengkap }}

                            </td>
                        </tr>
                        <tr class="border-b bg-gray-50  ">
                            <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                Program Studi
                            </th>
                            <td class="px-3 py-4" id="prodi_data">
                                {{ $dataDpt->prodi }}

                            </td>
                        </tr>
                        <tr class="border-b bg-gray-50  ">
                            <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                Jenjang Pendidikan
                            </th>
                            <td class="px-3 py-4" id="jenjang_data">
                                {{ $dataDpt->jenjang }}

                            </td>
                        </tr>
                        <tr class="border-b bg-gray-50  ">
                            <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                Angkatan
                            </th>
                            <td class="px-3 py-4" id="angkatan_data">
                                {{ $dataDpt->angkatan }}

                            </td>
                        </tr>
                        <tr class="bg-white border-b  ">
                            <th scope="row" class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap  ">
                                Fakultas
                            </th>
                            <td class="px-3 py-4" id="fakultas_data">
                                {{ $dataDpt->nama_lengkap_fakultas }} ({{ $dataDpt->nama_singkat_fakultas }})

                            </td>
                        </tr>
                    </table>
                </div>

                @endif

                @endif



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





<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script> -->

<!-- <script>
    $(document).ready(function() {
        $(document).on('keyup', '#npm', function() {
            var npm = $(this).val();
            $('#ditemukan').hide();
            $("#ditemukan").hide();
            $("#sedangMencari").show();
            $.ajax({
                type: 'get',
                url: "{{ url('cek_status_dpt') }}",
                data: {
                    'npm': npm
                },
                success: function(data) {
                    if (Object.keys(data).length > 0) {
                        $('#sedangMencari').hide();
                        $('#tidakDitemukan').hide();
                        $("#defaultModal").removeClass("hidden");
                        $("#ditemukan").show();
                        $("#tableDitemukan").show();
                        $('#npm_data').text(data.npm)
                        $('#nama_data').text(data.nama_lengkap)
                        $('#prodi_data').text(data.prodi)
                        $('#jenjang_data').text(data.jenjang)
                        $('#angkatan_data').text(data.angkatan)
                        $('#fakultas_data').text(data.nama_lengkap_fakultas)
                    } else {
                        $('#tidakDitemukan').show();
                        $("#tableDitemukan").hide();
                        $("#sedangMencari").hide();
                    }
                },
                error: function() {}
            });
        })
    });
</script> -->
@endsection
