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

                    <!-- Content Row - Hero Green -->
                    <div class="row">

                        <!-- Card -->
                        <div class="col d-flex">
                            <div class="card shadow-custom-green mb-4" style="width:100%" {{-- style="background-color: #4FBEAB" --}}>
                                <!-- Card Body -->
                                <div class="card-body text-light" style="background-color: #4FBEAB">
                                    {{-- <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col">
                                            Transaksi
                                        </div>
                                    </div>
                                    <div class="row d-flex">
                                        <div class="col-xl-3 col-lg-5">
                                            <h2 class="fw-bolder" style="font-weight: 800">
                                                Green Bond
                                            </h2>
                                        </div>
                                        <div class="col-xl-9 col-lg-7">
                                            <h5 style="font-weight: 600">
                                                ‘Berikut adalah Green Bond berupa obligasi untuk mendanai proyek atau green
                                                company.’
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="row mt-4 text-right">
                                        <div class="col">
                                            <a href="#" class="text-light">
                                                <i class="fas fa-fw fa-question"></i>
                                                <span>Info Lebih Lanjut</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Sub Title - Green Company -->
                    <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Green Company</h1>
                    </div>

                    <!-- Content Row - Green Company -->
                    <div class="row">

                        <div class="col">
                            <div class="card shadow-custom mb-4" style="width:100%">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Nama</th>
                                                    <th>1 Year Return</th>
                                                    <th>Total AUM</th>
                                                    <th>Jenis Produk</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            <tbody>
                                                @foreach ($produk_green as $item)
                                                    <tr class="">
                                                        <td>
                                                            <img class="avatar rounded-circle me-2"
                                                                src="{{ asset('img/produk/' .$image->where('produk_green_id', $item->id)->pluck('image')->first()) }}"
                                                                alt="">
                                                        </td>
                                                        <td>{{ $item->nama }}</td>
                                                        <td>{{ $item->year_return }}</td>
                                                        <td>{{ $item->total_aum }}</td>
                                                        <td>{{ $item->jenis_produk }}</td>
                                                        <td>
                                                            <a class="link-info"
                                                                href="{{ route('item.detail', ['id' => $item->id]) }}">Detail</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Card Footer -->
                                {{-- <div class="card-footer flex-row align-items-center text-center">
                                    <a href="#">Lihat Semua</a>
                                </div> --}}
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
@endsection
