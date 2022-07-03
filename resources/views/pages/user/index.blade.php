@extends('layouts.main2')

@section('content')
    @include('Partials.navbar3')

    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container pt-4">

            <div class="row">
                <div class="col">
                    <h3 class="" style="font-weight: 400">Portofolio Info</h3>
                </div>
            </div>

            <br>

            <div class="row">

                <div class="col">

                    <div class="card shadow-sm bg-white rounded-3">
                        <div class="card-body">

                            <table class="table table-hover table-borderless">
                                {{-- <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Desc</th>
                                        <th scope="col">Is_Active</th>
                                    </tr>
                                </thead> --}}
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
                                            <img class="avatar me-2" src="{{ asset('img/item-sample2.png') }}"
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
                                            <img class="avatar me-2" src="{{ asset('img/item-sample3.png') }}"
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

                </div>

                <div class="col">

                    <div class="card shadow-sm text-light rounded-3">
                        <div class="card-body">
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <button class="btn text-light px-4" style="background-color: #4FBEAB; width: 100%">
                                    Total
                                </button>
                                <button class="btn btn-light px-4" style=" width: 100%">
                                    Balance
                                </button>
                                <button class="btn btn-light px-4" style=" width: 100%">
                                    Outcome
                                </button>
                                <button class="btn btn-light px-4" style=" width: 100%">
                                    Income
                                </button>
                            </div>
                            <div class="d-grid gap-0 d-sm-flex justify-content-sm-center py-4">
                                <div class="col">
                                    <img class="img-fluid" src="{{ asset('img/visual/circle-chart.png') }}"
                                        alt="">
                                </div>
                                <div class="col-md-9">
                                    <img class="img-fluid" src="{{ asset('img/visual/data-chart.png') }}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col">
                    <h3 class="" style="font-weight: 400">List Transaksi</h3>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card shadow-sm text-light rounded-3">
                        <div class="card-body">
                            <table class="table table-hover table-borderless">
                                {{-- <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Desc</th>
                                        <th scope="col">Is_Active</th>
                                    </tr>
                                </thead> --}}
                                <tbody>
                                    {{-- @foreach ($data as $item) --}}
                                    <tr>
                                        <td>
                                            <img class="avatar me-2" src="{{ asset('img/item-sample2.png') }}"
                                                alt="">
                                        </td>
                                        <td>
                                            Adidas-AM Indeks IDX45
                                        </td>
                                        <td>
                                            <p style="color: #9d9d9d">
                                                Transaksi <span style="color: #000000">
                                                    Green Taxonomy
                                                </span>
                                            </p>
                                        </td>
                                        <td>
                                            <p style="color: #9d9d9d">
                                                Jenis Produk <span style="color: #000000">
                                                    Saham
                                                </span>
                                            </p>
                                        </td>
                                        <td>
                                            Rp30.000
                                        </td>
                                        <td style="color:#4FBEAB">
                                            INCOME
                                        </td>
                                        <td class="text-muted">
                                            15 Juni, 2022
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}
                                    <tr>
                                        <td>
                                            <img class="avatar me-2" src="{{ asset('img/item-sample3.png') }}"
                                                alt="">
                                        </td>
                                        <td>
                                            Adidas-AM Indeks IDX45
                                        </td>
                                        <td>
                                            <p style="color: #9d9d9d">
                                                Transaksi <span style="color: #000000">
                                                    Green Taxonomy
                                                </span>
                                            </p>
                                        </td>
                                        <td>
                                            <p style="color: #9d9d9d">
                                                Jenis Produk <span style="color: #000000">
                                                    Saham
                                                </span>
                                            </p>
                                        </td>
                                        <td>
                                            Rp30.000
                                        </td>
                                        <td style="color:#4FBEAB">
                                            INCOME
                                        </td>
                                        <td class="text-muted">
                                            15 Juni, 2022
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="avatar me-2" src="{{ asset('img/item-sample1.png') }}"
                                                alt="">
                                        </td>
                                        <td>
                                            Adidas-AM Indeks IDX45
                                        </td>
                                        <td>
                                            <p style="color: #9d9d9d">
                                                Transaksi <span style="color: #000000">
                                                    Green Taxonomy
                                                </span>
                                            </p>
                                        </td>
                                        <td>
                                            <p style="color: #9d9d9d">
                                                Jenis Produk <span style="color: #000000">
                                                    Saham
                                                </span>
                                            </p>
                                        </td>
                                        <td>
                                            Rp30.000
                                        </td>
                                        <td style="color:#4FBEAB">
                                            INCOME
                                        </td>
                                        <td class="text-muted">
                                            15 Juni, 2022
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img class="avatar me-2" src="{{ asset('img/item-sample1.png') }}"
                                                alt="">
                                        </td>
                                        <td>
                                            Adidas-AM Indeks IDX45
                                        </td>
                                        <td>
                                            <p style="color: #9d9d9d">
                                                Transaksi <span style="color: #000000">
                                                    Green Taxonomy
                                                </span>
                                            </p>
                                        </td>
                                        <td>
                                            <p style="color: #9d9d9d">
                                                Jenis Produk <span style="color: #000000">
                                                    Saham
                                                </span>
                                            </p>
                                        </td>
                                        <td>
                                            Rp30.000
                                        </td>
                                        <td style="color:#cf4343">
                                            OUTCOME
                                        </td>
                                        <td class="text-muted">
                                            15 Juni, 2022
                                        </td>
                                    </tr>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <script src="{{ asset('admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    {{-- <!-- slimscroll js -->
    <script src="{{ asset('admin/vendor/slimscroll/jquery.slimscroll.js') }}"></script> --}}
    <!-- main js -->
    <script src="{{ asset('admin/libs/js/main-js.js') }}"></script>
@endsection
