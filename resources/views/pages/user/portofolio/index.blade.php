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
                        <h1 class="h3 mb-0 text-gray-800 ">Portofolio</h1>
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
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>CAGR 1Y</th>
                                                    <th>Drawdown 1Y</th>
                                                    <th>Expense Ratio</th>
                                                    <th>Total AUM</th>
                                                    <th>Jenis Produk</th>
                                                    <th>Total Return 1Y</th>
                                                    <th>Detail</th>
                                                    <th>Jual</th>
                                                </tr>
                                            <tbody>
                                                {{-- @foreach ($data as $item) --}}
                                                <tr class="">
                                                    <td>
                                                        <img class="avatar me-2" src="{{ asset('img/item-sample1.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        Adidas-AM Indeks IDX45
                                                    </td>
                                                    <td>
                                                        +20.26%
                                                    </td>
                                                    <td>
                                                        -10.05%
                                                    </td>
                                                    <td>
                                                        1.05%
                                                    </td>
                                                    <td>
                                                        1.27T
                                                    </td>
                                                    <td>
                                                        Saham
                                                    </td>
                                                    <td>
                                                        +20.20%
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="{{ route('item.detailtest') }}">Detail</a>
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="{{ route('item.detailtest') }}">Jual</a>
                                                    </td>
                                                </tr>
                                                {{-- @endforeach --}}
                                                <tr>
                                                    <td>
                                                        <img class="avatar me-2" src="{{ asset('img/item-sample3.png') }}"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        BNI-AM Dana Lancar Syariah
                                                    </td>
                                                    <td>
                                                        -9.05%
                                                    </td>
                                                    <td>
                                                        1.05%
                                                    </td>
                                                    <td>
                                                        1.05%
                                                    </td>
                                                    <td>
                                                        1.28T
                                                    </td>
                                                    <td>
                                                        Saham
                                                    </td>
                                                    <td>
                                                        +19.00%
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="{{ route('item.detailtest') }}">Detail</a>
                                                    </td>
                                                    <td>
                                                        <a class="link-info" href="{{ route('item.detailtest') }}">Jual</a>
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
