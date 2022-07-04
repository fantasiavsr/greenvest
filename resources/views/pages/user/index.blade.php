@extends('layouts.core')

@section('content')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

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
                                                Total Income
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
                                                Current Balance</div>
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

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2 Years</div>
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                Since Joined </div>
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
                <div class="container-fluid">

                    {{-- Sub Title --}}
                    <div class="d-sm-flex align-items-center justify-content-between pt-2 mt-4 mb-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Portofolio Info</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card -->
                        <div class="col d-flex">
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <!-- Card Header + Dropdown -->
                                {{-- <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold">Earnings Overview</h6>

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
                                    </div>
                                </div> --}}
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
                                                        <a class="link-info" href="">Detail</a>
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
                                                        <a class="link-info" href="">Detail</a>
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
                                                        <a class="link-info" href="">Detail</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer flex-row align-items-center text-center">
                                    <a href="#">Lihat Semua</a>
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
                                        Balance
                                    </button>
                                    <button class="btn btn-light " style=" width: 100%">
                                        Outcome
                                    </button>
                                    <button class="btn btn-light " style=" width: 100%">
                                        Income
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
                                        <div class="col ">
                                            <div>
                                                <h4 class="small font-weight-bold">Balance<span
                                                        class="float-right">15%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 15%; background-color:#4FBEAB"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>

                                                <h4 class="small font-weight-bold">Outcome<span
                                                        class="float-right">35%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: 35%; background-color:#FFB020"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>

                                                <h4 class="small font-weight-bold">Income<span
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

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col">
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
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
                                                        1 Year Return 20.36%
                                                    </td>
                                                    <td>
                                                        Expense Ratio 2.36%
                                                    </td>
                                                    <td>
                                                        Total AUM 1.27T
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="">Detail</a>
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
                                                        Adidas-AM Indeks IDX45
                                                    </td>
                                                    <td>
                                                        1 Year Return 20.36%
                                                    </td>
                                                    <td>
                                                        Expense Ratio 2.36%
                                                    </td>
                                                    <td>
                                                        Total AUM 1.27T
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="">Detail</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="avatar me-2"
                                                            src="{{ asset('img/item-sample2.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        Adidas-AM Indeks IDX45
                                                    </td>
                                                    <td>
                                                        1 Year Return 20.36%
                                                    </td>
                                                    <td>
                                                        Expense Ratio 2.36%
                                                    </td>
                                                    <td>
                                                        Total AUM 1.27T
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="">Detail</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="avatar me-2"
                                                            src="{{ asset('img/item-sample3.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        Adidas-AM Indeks IDX45
                                                    </td>
                                                    <td>
                                                        1 Year Return 20.36%
                                                    </td>
                                                    <td>
                                                        Expense Ratio 2.36%
                                                    </td>
                                                    <td>
                                                        Total AUM 1.27T
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="">Detail</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                <div class="card-footer flex-row align-items-center text-center">
                                    <a href="#">Lihat Semua</a>
                                </div>
                            </div>
                        </div>
                        <!-- Content Column -->
                        {{-- <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}

                        {{-- <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="{{ asset('demo/img/undraw_posting_photo.svg') }}" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations
                                        on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with
                                        the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div> --}}
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
