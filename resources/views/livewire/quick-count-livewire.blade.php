<div wire:poll >
    @section('quick-count','active-menu')

    <div class="  relative     overflow-hidden pt-32    grid   min-h-screen  ">
        <div class=" container flex flex-col items-center px-4   mx-auto section-heading py-32  ">
            <h2 data-aos="fade-down" class="mb-6 text-center font-sans text-4xl lg:text-5xl font-bold text-[#E73530]   " style="text-shadow:5px 5px 5px #38383863;">
                Quick Count Suara Masuk</h2>
            <p data-aos="fade-down" class="  mt-2   text-sm text-gray-700 dark:text-gray-300   text-justify leading-8">
                Quick Count menampilkan dan menghitung suara pemilih yang telah digunakan pada kandidat yang di pilih secara realtime.
            </p>
        </div>

        <div x-data wire:poll class=" lg:flex w-full text-gray-800 mx-4 md:mx-auto place-self-center pb-20 px-10 justify-center
                    lg:flex-row md:grid md:grid-cols-2 flex-col gap-6">
            @foreach ($kandidats as $kandidat)
            <div>
                <div class="rounded-md  max-w-[240px] mx-auto   my-2 w-full bg-gray-100       shadow-black duration-300 transform content-div
                                      group shadow-lg hover:shadow-xl overflow-hidden hover:scale-110">
                    <div class="py-2   bg-black   w-full text-center font-bold text-white text-xl  "><b class="text-yellow-500 text-xs mr-3">Kandidat Nomor Urut</b>{{ $kandidat->nomor_urut }}
                    </div>
                    <img class=" relative flex items-end overflow-hidden   duration-300 transform  h-48 object-cover mx-auto   " src="{{ Storage::url('public/') }}{{ $kandidat->banner }}" alt="Img" />
                    <div class="   duration-200 transform   ">
                        <div class="  flex items-end justify-between border-t-gray-800 border-t-2 px-2">
                            <div class="text-gray-900 py-2 text-xs md:text-sm w-full text-center  ">
                                <p class="line-clamp-1 font-bold">{{$kandidat->nama_calon_ketua}}</p>
                                <p class="text-yellow-600">({{$kandidat->npm_calon_ketua}})</p>
                                <p class="  font-bold">&</p>
                                <p class="line-clamp-1 font-bold">{{ $kandidat->npm_calon_wakil_ketua }}</p>
                                <p class="text-yellow-600">({{$kandidat->npm_calon_wakil_ketua}})</p>
                            </div>
                        </div>
                    </div>
                    <div class="   duration-200 transform  bg-black ">
                        <div class="mt-3     border-t-gray-800 border-t-2 ">
                            <p class="text-white py-2 text-xs px-2  md:text-sm  text-center">
                                <b class="text-yellow-500">{{ $kandidat->rekapitulasis_count  }}</b> Suara
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div x-data="app()" wire:poll x-cloak class="px-4   pb-20">
            <div class=" max-w-5xl mx-auto py-10">
                <div class="  p-6 rounded-lg relative bg-white bg-opacity-90 shadow-inner shadow-black">
                    <div class="md:flex md:justify-between md:items-center">
                        <div>
                            <h2 class="text-xl text-gray-800 font-bold leading-tight">Quick Count</h2>
                            <p class="mb-2 text-gray-600 text-sm">Pemilihan Calon Presiden Mahasiswa</p>
                        </div>

                        <!-- Legends -->
                        <div class="mb-4">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-orange-600 mr-2 rounded-full"></div>
                                <div class="text-sm text-gray-700">Suara Masuk</div>
                            </div>
                        </div>
                    </div>


                    <div class="line my-8   mx-auto max-w-5xl w-full ">
                        <!-- Tooltip -->
                        <!-- <template x-if="tooltipOpen == true">
                        <div x-ref="tooltipContainer" class="  z-10 shadow-lg rounded-lg absolute h-auto block " :style="`  right:20px; top:60px`">
                            <div class="shadow-xs rounded-lg bg-orange-500 p-2">
                                <div class="flex items-center justify-between text-sm">
                                    <div>Suara Masuk:</div>
                                    <div class="font-bold ml-2">
                                        <span x-html="tooltipContent"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template> -->

                        <!-- Bar Chart -->
                        <div class="flex -mx-2 items-end   mt-20" wire:poll>
                            <template x-for="data in chartData">

                                <div class="px-3 w-1/{{count($kandidats)}}">

                                    <div :style="`height: ${data*10}px`" class="transition ease-in duration-200 bg-orange-600 hover:bg-orange-400
                                              relative" data-tooltip-target="tooltip" @mouseenter="showTooltip($event); tooltipOpen = true" @mouseleave="hideTooltip($event)">
                                        <div class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm">
                                            <p><b x-text="data"></b> Suara</p>
                                        </div>
                                    </div>
                                </div>

                            </template>
                        </div>

                        <!-- Labels -->
                        <div class="  mx-auto border-t border-gray-400 " :style="`height: 1px;  "></div>
                        <div class="flex -mx-2 items-end mb-20">
                            <template x-for="data in labels">
                                <div class="px-2 w-1/{{count($kandidats)}}">
                                    <div class="bg-red-600 relative">
                                        <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                                        <div x-html="data" class="text-center absolute top-0 left-0 right-0 mt-3   text-gray-700 text-sm">
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer class="absolute bottom-0      z-50 bg-[#E73530]   w-full   ">
            <div class="px-12 mx-auto py-3   flex flex-wrap flex-col sm:flex-row    ">
                <p class="text-white mx-auto  text-xs md:text-sm text-center sm:text-left">Copyright&copy; 2023 |
                    <a href="#" class="text-yellow-500 font-bold">KPU UNIVERSITAS BENGKULU</a>. All rights reserved. {{ json_encode($chartData) }}
                </p>
            </div>
        </footer>

    </div>
    <script>
        function app() {
            return {
                chartData: @json($chartData),
                labels: @json($labels),

                tooltipContent: '',
                tooltipOpen: false,
                tooltipX: 0,
                tooltipY: 0,
                showTooltip(e) {
                    console.log(e);
                    this.tooltipContent = e.target.textContent
                    this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
                    this.tooltipY = e.target.clientHeight + e.target.clientWidth;
                },
                hideTooltip(e) {
                    this.tooltipContent = '';
                    this.tooltipOpen = false;
                    this.tooltipX = 0;
                    this.tooltipY = 0;
                },
                startAutoRefresh() {
                    setInterval(() => {
                        Livewire.emit('updateChartData'); // Emit a Livewire event to update data
                    }, 5000); // Set the interval duration in milliseconds (e.g., 5000 for 5 seconds)
                }
            }
        }

        document.addEventListener('livewire:load', function() {
            app().startAutoRefresh(); // Start auto-refresh when the Livewire component is loaded
        });
    </script>
</div>
