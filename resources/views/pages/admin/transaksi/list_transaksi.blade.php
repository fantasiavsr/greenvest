@extends('layouts.core')

@section('content')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Partials.sidebardev')
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
                                                    <th>Nama User</th>
                                                    <th>Produk</th>
                                                    <th>Total Bayar</th>
                                                    <th>Jenis Transaksi</th>
                                                    <th>Waktu</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list_transaksi as $item)
                                                    <tr class="">
                                                        <td>
                                                            <img class="avatar rounded-circle me-2"
                                                                src="{{ asset('img/produk/' .$image->where('produk_green_id', $item->produk_green->id)->pluck('image')->first()) }}"
                                                                alt="">
                                                        </td>
                                                        <td>
                                                            {{ $item->user->nama_lengkap }}
                                                        </td>
                                                        <td>
                                                            {{ $item->produk_green->nama }}
                                                        </td>
                                                        <td>
                                                            Rp{{ number_format($item->total_bayar, 0, ',', '.') }}
                                                        </td>
                                                        <td class="">
                                                            {{ $item->jenis_transaksi }}
                                                        </td>
                                                        <td>
                                                            {{ $item->created_at->format('d F, Y, H:i:s') }}
                                                        </td>
                                                        <td>
                                                            @if ($item->status == 'Selesai')
                                                                <span class="badge badge-success">
                                                                    {{ $item->status }}
                                                                </span>
                                                            @elseif ($item->status == 'Dibatalkan')
                                                                <span class="badge badge-danger">
                                                                    {{ $item->status }}
                                                                </span>
                                                            @elseif ($item->status == 'Pending')
                                                                <span class="badge badge-warning">
                                                                    {{ $item->status }}
                                                                </span>
                                                            @elseif ($item->status == 'Menunggu Pembayaran')
                                                                <span class="badge badge-primary">
                                                                    {{ $item->status }}
                                                                </span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.edit.transaksi', ['id' => $item->id]) }}" class="">
                                                                Detail
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{-- <!-- Card Footer -->
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
