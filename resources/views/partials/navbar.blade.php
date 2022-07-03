
<nav class="navbar navbar-expand-lg navbar-dark pt-4 pb-3" style="background-color: #30445C">
    <div class="container">

        <a class="navbar-brand" href="/home"><img class="" src="{{ asset('img/gv-light.png') }}" alt="" width="100%"
                height="26"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Get Started' ? 'active' : '' }}" href="/courseList">Get Started</a>
                </li>
                <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'Support' ? 'active' : '' }}" href="#">Support</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="fw-bold nav-link {{ $title === 'About Us' ? 'active' : '' }}" href="#">About Us</a>
                </li> --}}
            </ul>

            {{-- <a href="/register" class="btn rounded-pill me-4 text-dark" role="button" style="background-color: #FFFFFF"><small
                class="fw-normal px-3">Register</small>
            </a> --}}

            <a href="{{ route('login') }}" class="btn rounded-pill me-4 text-dark" role="button" style="background-color: #FFFFFF"><small
                    class="fw-normal px-4">Login</small>
            </a>

        </div>
    </div>
</nav>
