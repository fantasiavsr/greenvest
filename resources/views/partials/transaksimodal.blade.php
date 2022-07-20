<div class="modal fade" id="transaksiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $item->nama }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Ya" jika anda sudah yakin</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                    {{-- <form action="{{ '' }}" method="">
                        @csrf --}}
                        <a href="">
                            <button type="submit" class="btn text-light" style="background-color: #4FBEAB">Ya</button>
                        </a>

                    {{-- </form> --}}
                    {{-- <a class="btn btn-primary" href="{{ 'logout' }}">Logout</a> --}}
                </div>
            </div>
        </div>
    </div>
