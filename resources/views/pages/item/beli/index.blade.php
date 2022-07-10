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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{-- Sub Title --}}
                    <div class="d-sm-flex align-items-center justify-content-between pt-2 mt-1 mb-4">
                        <h1 class="h3 pb-2 mb-0 " style="font-weight:700; font-size:32px">
                            <a href="{{ route('item.detail') }}" class="text-gray-400"
                                style="text-decoration: none">Adidas-AM Indeks IDX45</a>
                            <span><i class="fa fa-sm fa-angle-right text-gray-900" aria-hidden="true"></i></span>
                            <span class="text-gray-900">Beli</span>
                        </h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Card -->
                        <div class="col-xl-4">

                            <!-- Sub Card -->
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <div class="card-header">
                                    <div class=" align-items-center justify-content-between">
                                        <h1 class="h4 mb-0 text-gray-800 ">Saldo Saya</h1>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    {{-- <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div> --}}
                                    <div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp320.000</div>
                                        {{-- <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Saldo Akun</div> --}}
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                {{-- <div class="card-footer flex-row align-items-center text-center">
                                    <a href="{{ 'portofolio' }}">Lihat Semua</a>
                                </div> --}}
                            </div>

                            <!-- Sub Card -->
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <div class="card-header">
                                    <div class=" align-items-center justify-content-between">
                                        <h1 class="h4 mb-0 text-gray-800 ">Akun Bank</h1>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    {{-- <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div> --}}
                                    <div class="table-responsive">

                                        <table class="table table-hover table-borderless" id="dataTable" width="100%"
                                            cellspacing="0" style="">
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
                                                        <img class="avatar me-2" src="{{ asset('img/item-b1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <div class="col">
                                                            <div class="row fw-bold">
                                                                Bank of Indonesia
                                                            </div>
                                                            <div class="row text-start fw-lighter text-muted">
                                                                5300 7227 XXXX XX51
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
                                                        <img class="avatar me-2" src="{{ asset('img/item-b2.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <div class="col">
                                                            <div class="row fw-bold">
                                                                Bank International
                                                            </div>
                                                            <div class="row text-start fw-lighter text-muted">
                                                                5300 7227 XXXX XX51
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
                                {{-- <div class="card-footer flex-row align-items-center text-center">
                                    <a href="{{ 'portofolio' }}">Lihat Semua</a>
                                </div> --}}
                            </div>

                            <!-- Sub Card -->
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <div class="card-header">
                                    <div class=" align-items-center justify-content-between">
                                        <h1 class="h4 mb-0 text-gray-800 ">Riwayat Transaksi</h1>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <table class="table table-hover table-borderless" id="dataTable" width="100%"
                                            cellspacing="0" style="">
                                            <tbody>
                                                {{-- @foreach ($data as $item) --}}
                                                <tr>
                                                    <td>
                                                        <img class="avatar me-2" src="{{ asset('img/item-sample1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <div class="col">
                                                            <div class="row fw-bold">
                                                                Adidas-AM Indeks IDX45
                                                            </div>
                                                            <div class="row text-start fw-lighter text-muted">
                                                                <span style="color: #4FBEAB">+Rp 31.000</span>
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
                                                        <img class="avatar me-2" src="{{ asset('img/item-sample1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <div class="col">
                                                            <div class="row fw-bold">
                                                                Adidas-AM Indeks IDX45
                                                            </div>
                                                            <div class="row text-start fw-lighter text-muted">
                                                                <span style="color: #4FBEAB">+Rp 30.000</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="{{ route('item.detail') }}">Detail</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <img class="avatar me-2" src="{{ asset('img/item-sample1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <div class="col">
                                                            <div class="row fw-bold">
                                                                Adidas-AM Indeks IDX45
                                                            </div>
                                                            <div class="row text-start fw-lighter text-muted">
                                                                <span style="color: #4FBEAB">+Rp 30.000</span>
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
                                                            src="{{ asset('img/item-sample1.png') }}" alt="">
                                                    </td>
                                                    <td>
                                                        <div class="col">
                                                            <div class="row fw-bold">
                                                                Adidas-AM Indeks IDX45
                                                            </div>
                                                            <div class="row text-start fw-lighter text-muted">
                                                                <span style="color: #D14343">-Rp500.000</span>
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
                                    <a href="{{ route('transaksi.list') }}">Lihat Semua</a>
                                </div>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="col">
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <div class=" align-items-center justify-content-between">
                                        <h1 class="h4 mb-0 text-gray-800 ">Pembayaran</h1>
                                    </div>
                                </div>

                                <!-- Card Body -->
                                <div class="card-body py-3 ">
                                    <form action="">
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Pilih Metode Bayar</label>
                                            {{-- <input type="text" name="text" id="username" class="form-control"
                                                autofocus required> --}}
                                            <select class="form-control" aria-label="Default select example" autofocus
                                                required>
                                                <option selected value="Saldo">Saldo Saya</option>
                                                {{-- @foreach ($collection as $item) --}}
                                                <option value="Bank of Indonesia">Bank of Indonesia</option>
                                                {{-- @endforeach --}}
                                                <option value=">Bank International">Bank International</option>>
                                            </select>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Pesan</label>
                                            <input type="text" name="username" id="username" class="form-control"
                                                autofocus required>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Total Bayar</label>
                                            <input type="text" name="username" id="username" class="form-control"
                                                autofocus required>
                                        </div>
                                        {{-- <input type="hidden" id="role" name="role" value="0"> --}}
                                        <!-- Submit button -->
                                        <div class="row">
                                            <div class="col">
                                                {{-- <button type="submit" class="btn btn-lg mt-2 px-5 mb-4 text-light"
                                                    style="background-color: #4FBEAB; width:100%">Rutin Tiap Bulan
                                                </button> --}}
                                                <a href="{{ route('item.detail') }}" class="btn btn-lg mt-2 px-5 mb-4"
                                                    style="background-color: #F9FAFC; width:100%">Cancel</a>
                                            </div>
                                            <div class="col">
                                                <a href="#" class="btn btn-lg mt-2 px-5 mb-4 text-light"
                                                    style="background-color: #4FBEAB; width:100%" href="#"
                                                    data-toggle="modal" data-target="#beliModal">Beli</a>

                                            </div>
                                        </div>
                                    </form>
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

    <!-- Logout Modal-->
    @include('Partials.belimodal')

    {{-- Custom DataTables --}}
    {{-- <script>
        $('table').dataTable({
            searching: false,
            paging: false,
            info: false
        });
    </script> --}}
@endsection
