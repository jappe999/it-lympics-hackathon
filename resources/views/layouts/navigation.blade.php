<ul class="navbar-nav text-uppercase d-flex flex-{{ $direction }}">
    <li class="nav-item {{ $direction === 'row' ? 'mx-1' : 'my-2' }}">
        <a href="/" class="nav-link {{ $direction === 'row' ? 'px-2' : 'px-5' }}">Home</a>
    </li>
    <li class="nav-item {{ $direction === 'row' ? 'mx-1' : 'my-2' }}">
        <a href="/about" class="nav-link {{ $direction === 'row' ? 'px-2' : 'px-5' }}">About</a>
    </li>
    {{-- <li class="nav-item {{ $direction === 'row' ? 'mx-1' : 'my-2' }}">
        <a href="/twitter" class="nav-link {{ $direction === 'row' ? 'px-2' : 'px-5' }}">Twitter feed</a>
    </li>
    <li class="nav-item {{ $direction === 'row' ? 'mx-1' : 'my-2' }}">
        <a href="/instagram" class="nav-link {{ $direction === 'row' ? 'px-2' : 'px-5' }}">Instagram feed</a>
    </li> --}}
</ul>
