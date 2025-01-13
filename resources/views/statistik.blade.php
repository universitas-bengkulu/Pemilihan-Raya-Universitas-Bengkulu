@extends('layouts.app')

@section('halaman','Dashboard')
@push('styles')
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>
@endpush
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Statistik Hasil Rekapitulasi</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <form action="{{ route('statistik.cari') }}" method="GET">
                {{ csrf_field() }} {{ method_field('GET') }}
                <div class="form-group col-md-4">
                    <label for="prodi">Pilih Prodi</label>
                    <select name="prodi" id="prodi" class="form-control">
                        <option value="" selected >Pilih Prodi</option>
                        @foreach ($prodis as $prodi)
                            <option value="{{ $prodi }}" @if (isset($selectedProdi) && $selectedProdi == $prodi) selected @endif>{{ $prodi }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="jenjang">Jenjang</label>
                    <select name="jenjang" id="jenjang" class="form-control">
                        <option value="" selected >Pilih Jenjang</option>
                        @foreach ($jenjangs as $jenjang)
                            <option value="{{ $jenjang }}" @if (isset($selectedJenjang) && $selectedJenjang == $jenjang) selected @endif>{{ $jenjang }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="angkatan">Angkatan</label>
                    <select name="angkatan" id="angkatan" class="form-control">
                        <option value="" selected >Pilih Angkatan</option>
                        @foreach ($angkatans as $angkatan)
                            <option value="{{ $angkatan }}" @if (isset($selectedAngkatan) && $selectedAngkatan == $angkatan) selected @endif>{{ $angkatan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12" style="margin-bottom:5px !important">
                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-search"></i>&nbsp; Cari Data</button>
                </div>
            </form>
            <div class="row">
                <div class="col-md-12">
                    @section('data')
                    series.data.setAll([
                        @foreach ($data as $data)
                        {
                            category: "{{ $data->nama_calon_ketua.' - '.$data->nama_calon_wakil_ketua }}",
                            value: {{ $data->jumlah }}
                        },
                    @endforeach
                    ]);

                    @endsection
                    <div id="chartdiv"></div>

                    <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-bordered" id="table" style="width:100%;">
                        <thead>
                            <tr>
                                <th>Paselon</th>
                                <th>Jumlah suara</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($data2->isNotEmpty())
                            @foreach ($data2 as $item)
                            <tr>
                                <td>{{ $item->nama_calon_ketua }} - {{ $item->nama_calon_wakil_ketua }}</td>
                                <td>{{ $item->jumlah }}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="2">Tidak ada data tersedia.</td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Chart code -->
    <script>
    am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");


    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);


    // Create chart
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
    var chart = root.container.children.push(am5percent.PieChart.new(root, {
      layout: root.verticalLayout
    }));


    // Create series
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
    var series = chart.series.push(am5percent.PieSeries.new(root, {
      valueField: "value",
      categoryField: "category"
    }));


    // Set data
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
@yield('data')


    // Play initial series animation
    // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
    series.appear(1000, 100);

    }); // end am5.ready()
    </script>

@endpush
