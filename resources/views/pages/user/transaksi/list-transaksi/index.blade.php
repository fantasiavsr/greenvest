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
                    <div class="d-sm-flex align-items-center justify-content-between pt-2 mt-4 mb-4">
                        <h1 class="h3 mb-0 text-gray-800 ">List Transaksi</h1>
                    </div>

                    <!-- Content Row -->
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
                                                    <th>Jenis Green</th>
                                                    <th>Total Bayar</th>
                                                    <th>Jenis Transaksi</th>
                                                    <th>Tanggal</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
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
                                                        Rp31.000
                                                    </td>
                                                    <td class="">
                                                        Pemasukan
                                                    </td>
                                                    <td>
                                                        15 Juni, 2022
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">
                                                            Selesai
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="">
                                                            Detail
                                                        </a>
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
                                                        Rp31.000
                                                    </td>
                                                    <td class="">
                                                        Pembelian
                                                    </td>
                                                    <td>
                                                        15 Juni, 2022
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">
                                                            Dibatalkan
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="">
                                                            Detail
                                                        </a>
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
                                                        Rp31.000
                                                    </td>
                                                    <td class="">
                                                        Pembelian
                                                    </td>
                                                    <td>
                                                        15 Juni, 2022
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning">
                                                            Pending
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="">
                                                            Detail
                                                        </a>
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
                                                        Rp31.000
                                                    </td>
                                                    <td class="">
                                                        Pembelian
                                                    </td>
                                                    <td>
                                                        15 Juni, 2022
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-primary">
                                                            Menunggu Pembayaran
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="">
                                                            Detail
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                               {{--  <!-- Card Footer -->
                                <div class="card-footer flex-row align-items-center text-center">
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


    {{-- Custom DataTables --}}
    {{-- <script>
        $('table').dataTable({
            searching: false,
            paging: false,
            info: false
        });
    </script> --}}
@endsection
