<nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="{{ url('/') }}">
        <span>Bengkel Mobil</span>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}"> About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/service') }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/why') }}">Why Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary mr-2 rounded-2" href="{{ url('/') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-success rounded-2" href="{{ url('/') }}">Sign Up</a>
            </li>
        </ul>
        <div class="quote_btn-container">
            <form class="form-inline">
                <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
            <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>Call : +62 8181231224</span>
            </a>
        </div>
    </div>
</nav>
