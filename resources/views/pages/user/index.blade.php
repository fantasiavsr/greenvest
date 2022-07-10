@extends('layouts.core')

@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" >

            <!-- Main Content -->
            <div id="content" >

                <!-- Topbar -->
                @include('Partials.topbar')
                <!-- End of Topbar -->

                <!-- Add Ons -->
                <div class="container-fluid pt-2 pb-1" style="background-color: #EDEFF5">
                    <div class="d-sm-flex align-items-center justify-content-between">

                        <!-- Card Example -->
                        <div class="col mb-4">
                            <div class="card shadow-custom-sm h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp2.487.600</div>
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Total Penghasilan
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img class="img" src="{{ asset('img/gv-logo.png') }}" alt=""
                                                style="height: 100%;width:100%;object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Example -->
                        <div class="col mb-4">
                            <div class="card shadow-custom-sm h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp320.000</div>
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Saldo Saya</div>
                                        </div>
                                        <div class="col-auto">
                                            <img class="img" src="{{ asset('img/wallet.png') }}" alt=""
                                                style="height: 100%;width:100%;object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Example -->
                        <div class="col mb-4">
                            <div class="card shadow-custom-sm h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2 TAHUN</div>
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                               Semenjak Bergabung</div>
                                        </div>
                                        <div class="col-auto">
                                            <img class="img" src="{{ asset('img/peoples.png') }}"
                                                alt="" style="height: 100%;width:100%;object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid" >

                    {{-- Sub Title --}}
                    <div class="d-sm-flex align-items-center justify-content-between pt-2 mt-4 mb-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Portofolio Info</h1>
                    </div>

                    <!-- Content Row - Portofolio Info -->
                    <div class="row">

                        <!-- Card -->
                        <div class="col d-flex">
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <!-- Card Body -->
                                <div class="card-body">
                                    {{-- <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div> --}}
                                    <div class="table-responsive">

                                        <table class="table table-hover table-borderless" id="dataTable"
                                            width="100%" cellspacing="0" style="">
                                            {{-- <thead>
                                                <tr>
                                                    <th>Data</th>
                                                    <th>Data</th>
                                                    <th>Data</th>
                                                </tr>
                                            </thead> --}}
                                            <tbody>
                                                {{-- @foreach ($data as $item) --}}
                                                <tr>
                                                    <td>
                                                        <img class="avatar me-2"
                                                            src="{{ asset('img/item-sample1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <div class="col">
                                                            <div class="row fw-bold">
                                                                Adidas-AM Indeks IDX45
                                                            </div>
                                                            <div class="row text-start fw-lighter text-muted">
                                                                1 Year Return 20.36% | Total AUM 1.27T
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="{{ route('item.detail') }}">Detail</a>
                                                    </td>
                                                </tr>
                                                {{-- @endforeach --}}
                                                <tr>
                                                    <td>
                                                        <img class="avatar me-2"
                                                            src="{{ asset('img/item-sample2.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <div class="col">
                                                            <div class="row fw-bold">
                                                                Adidas-AM Indeks IDX45
                                                            </div>
                                                            <div class="row text-start fw-lighter text-muted">
                                                                1 Year Return 20.36% | Total AUM 1.27T
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="{{ route('item.detail') }}">Detail</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="avatar me-2"
                                                            src="{{ asset('img/item-sample3.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <div class="col">
                                                            <div class="row fw-bold">
                                                                Adidas-AM Indeks IDX45
                                                            </div>
                                                            <div class="row text-start fw-lighter text-muted">
                                                                1 Year Return 20.36% | Total AUM 1.27T
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="{{ route('item.detail') }}">Detail</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer flex-row align-items-center text-center">
                                    <a href="{{ 'portofolio' }}">Lihat Semua</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="col d-flex">
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    {{-- <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button"
                                            id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> --}}
                                    <button class="btn text-light " style="background-color: #4FBEAB; width: 100%">
                                        Total
                                    </button>
                                    <button class="btn btn-light " style=" width: 100%">
                                        Saldo
                                    </button>
                                    <button class="btn btn-light " style=" width: 100%">
                                        Pengeluaran
                                    </button>
                                    <button class="btn btn-light " style=" width: 100%">
                                        Penghasilan
                                    </button>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body py-3 ">
                                    <div class="row pt-3">
                                        <div class="col-md-3">
                                            <div class="pt-4 pb-2">
                                                <canvas id="myPieChart"></canvas>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <h4 class="small font-weight-bold">Saldo<span
                                                        class="float-right">15%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 15%; background-color:#4FBEAB"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>

                                                <h4 class="small font-weight-bold">Pengeluaran<span
                                                        class="float-right">35%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 35%; background-color:#FFB020"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>

                                                <h4 class="small font-weight-bold">Penghasilan<span
                                                        class="float-right">50%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 50%; background-color:#378AEC"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sub Title -->
                    <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                        <h1 class="h3 mb-0 text-gray-800 ">List Transaksi</h1>
                    </div>

                    <!-- Content Row - List Transaksi -->
                    <div class="row">

                        <div class="col">
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Nama</th>
                                                    <th>Jenis Transaksi</th>
                                                    <th>Jenis Produk</th>
                                                    <th>Total</th>
                                                    <th>Pemasukan/Pengeluaram</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @foreach ($data as $item) --}}
                                                <tr class="">
                                                    <td>
                                                        <img class="avatar me-2"
                                                            src="{{ asset('img/item-sample1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        Adidas-AM Indeks IDX45
                                                    </td>
                                                    <td>
                                                        Green Taxonomy
                                                    </td>
                                                    <td>
                                                        Saham
                                                    </td>
                                                    <td>
                                                        Rp31.000
                                                    </td>
                                                    <td class="text-success">
                                                        INCOME
                                                    </td>
                                                    <td>
                                                        15 Juni, 2022
                                                    </td>
                                                </tr>
                                                {{-- @endforeach --}}
                                                <tr class="">
                                                    <td>
                                                        <img class="avatar me-2"
                                                            src="{{ asset('img/item-sample1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        Adidas-AM Indeks IDX45
                                                    </td>
                                                    <td>
                                                        Green Taxonomy
                                                    </td>
                                                    <td>
                                                        Saham
                                                    </td>
                                                    <td>
                                                        Rp30.000
                                                    </td>
                                                    <td class="text-success">
                                                        INCOME
                                                    </td>
                                                    <td>
                                                        28 Mei, 2022
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <img class="avatar me-2"
                                                            src="{{ asset('img/item-sample1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        Adidas-AM Indeks IDX45
                                                    </td>
                                                    <td>
                                                        Green Taxonomy
                                                    </td>
                                                    <td>
                                                        Saham
                                                    </td>
                                                    <td>
                                                        Rp30.000
                                                    </td>
                                                    <td class="text-success">
                                                        INCOME
                                                    </td>
                                                    <td>
                                                        29 April, 2022
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>
                                                        <img class="avatar me-2"
                                                            src="{{ asset('img/item-sample1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        Adidas-AM Indeks IDX45
                                                    </td>
                                                    <td>
                                                        Green Taxonomy
                                                    </td>
                                                    <td>
                                                        Saham
                                                    </td>
                                                    <td>
                                                        Rp150.000
                                                    </td>
                                                    <td class="text-danger">
                                                        OUTCOME
                                                    </td>
                                                    <td>
                                                        26 April, 2022
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer flex-row align-items-center text-center">
                                    <a href="{{ route('transaksi.list') }}">Lihat Semua</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('Partials.corefooter')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('Partials.scrolltotop')

    <!-- Logout Modal-->
    @include('Partials.logoutmodal')

    {{-- Custom DataTables --}}
    <script>
        $('table').dataTable({
            searching: false,
            paging: false,
            info: false
        });
    </script>

@endsection
