<div>
    @section('quick-count','active-menu')
    @push('marquee')
    {{ (!empty($contact))? $contact->marquee : 'Selamat Datang pada Sistem informasi Pemira - Universitas Bengkulu'  }}
    @endpush
    @section('menu','/')

    @if ($showData)
    <div class="        overflow-hidden         h-screen   grid grid-cols-5 ">
        <div class="col-span-1 grid relative">

            <div class=" mx-auto text-center items-center  place-self-center">
                <a href="{{ route('mahasiswa.quick-count') }}" class="py-2 mb-3 absolute w-56 inline-flex top-5 left-4 duration-300 transform hover:scale-[99%] bg-white shadow-inner shadow-gray-700 focus:scale-95   rounded-md mx-auto   px-3  text-center  text-black text-sm     "><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 mt-1" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    <p class="py-1">Kembali</p>

                </a>
                <div>
                    <img src="{{ asset('assets/frontend/logo.webp') }}" alt="kotak-suara" style="filter: drop-shadow(2px 2px 5px #333);" class="h-36 rounded-full  md:mt-10 mx-auto animate-[bounce_3s_infinite]   ">

                    <h2 class="  text-white font-bold text-3xl leading-tight">Rekapitulasi </h2>
                    <p class="mb-2 text-gray-200 text-sm">Pemilihan Calon Presiden Mahasiswa</p>
                </div>
            </div>
        </div>
        <div class="  col-span-4 p-6  px-4 w-full ">
            <div class="   p-6 rounded-lg   bg-white      bg-opacity-90 shadow-inner shadow-gray-800">

                <canvas id="myChart" class="mt-5   mx-auto w-full     "></canvas>

            </div>
        </div>
        <!--
        <footer class="absolute bottom-0      z-50 bg-[#621e1c]   w-full   ">
            <div class="px-12 mx-auto py-3   flex flex-wrap flex-col sm:flex-row    ">
                <p class="text-white mx-auto  text-xs md:text-sm text-center sm:text-left">Copyright&copy; 2023 |
                    <a href="#" class="text-yellow-500 font-bold">KPU UNIVERSITAS BENGKULU</a>. All rights reserved.
                </p>
            </div>
        </footer> -->
    </div>

    @push('js')
    <script>
        //refresh setiap 2 menit = 120000ms
        setInterval(() => Livewire.dispatch('updateData'), 5000);
        var chartData = JSON.parse(`<?php echo $chart_quick_count ?>`);
        console.log(chartData);
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.label,
                datasets: [{
                    label: 'Suara masuk',
                    data: chartData.presentase_sudah_pilih,
                    backgroundColor: [
                        'rgba(48,124,231, 0.6)',
                    ],
                    borderColor: [
                        'rgba(48,124,231, 1)',
                    ],
                    borderWidth: 2
                }, {
                    label: 'Belum Memilih',
                    data: chartData.presentase_belum_pilih,
                    backgroundColor: [
                        'rgba(231,53,48, 0.6)',
                    ],
                    borderColor: [
                        'rgba(231,53,48, 1)',
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return value + '%';
                            }
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.dataset.label || '';

                                if (label) {
                                    label += ': ';
                                }

                                label += context.formattedValue + '%';
                                return label;
                            }
                        }
                    }
                },

            }
        });
        Livewire.on('berhasilUpdate', event => {
            var chartData = JSON.parse(event.data);
            console.log(chartData);
            myChart.data.labels = chartData.label;
            myChart.data.datasets[0].data = chartData.presentase_sudah_pilih;
            myChart.data.datasets[1].data = chartData.presentase_belum_pilih;


            myChart.update();
        })
    </script>
    @endpush
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
                    <a href="#" class="text-yellow-500 font-bold">KPU UNIVERSITAS BENGKULU</a>. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
    @endif




</div>
