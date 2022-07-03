<header class="bg-light">

    <nav class="sidebar card py-2 pb-4" style="background-color: #FFFFFF">
        <div class="container mt-5 mb-3">
            {{-- <h2 class="text-dark text-center" style="font-weight: 100">Admin<span class=""
                    style="font-weight: 500">Page</span></h2> --}}
            <img class="img-fluid px-3" src="{{ asset('img/gv-text-dark.png') }}" alt="">
        </div>
        <br>
        <ul class="nav-mine flex-column text-dark px-3" id="nav_accordion" style="list-style-type: none;">
            <li class="nav-item" style="">
                <a class="nav-link py-2 ripple text-dark {{ $title === 'Admin' ? 'active' : '' }}" href="/admin">
                    Dashboard </a>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link py-2 ripple text-dark {{ $submenu === 'Yes' ? 'active' : '' }}" href="#">
                    Edit Courses </a>
                <ul class="submenu collapse {{ $title === 'Course List' || $title === 'Courses Modules' ? 'in show' : '' }}"
                    style="list-style-type: none;">
                    <li><a class="nav-link py-2 ripple text-dark {{ $title === 'Course List' ? 'active' : '' }}"
                            href="/admin-course">Course List</a></li>
                    <li><a class="nav-link py-2 ripple text-dark {{ $title === 'Courses Modules' ? 'active' : '' }}"
                            href="/admin-module">Courses Modules</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link py-2 ripple text-dark {{ $title === 'Edit User' ? 'active' : '' }}"
                    href="/admin-user">Edit User</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn nav-link py-2 ripple text-dark">Log Out</button>
                </form>
            </li>
        </ul>
    </nav>

</header>
