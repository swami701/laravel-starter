<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-around">
        <a class="p-2 text-muted active" href="/home">Home</a>
        <a class="p-2 text-muted" href="#">New Features</a>
        <a class="p-2 text-muted" href="#">Press</a>
        <a class="p-2 text-muted" href="#">New Hires</a>
        <a class="p-2 text-muted" href="/about">About</a>
        @if (Auth::check())
            <strong class="p-2">
                <a href="#">Welcome {{Auth::user()->name}}!</a>
            </strong>
            <a class="p-2" href="/logout">Logout</a>
        @else
            <a class="p-2" href="/login">Sign In</a>
        @endif
    </nav>
</div>
