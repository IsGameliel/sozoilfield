<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="assets/img/logo.png" style="width: 100%;" alt="">
      {{-- <h1>Sozoilfield<span>.</span></h1> --}}
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{url('/')}}" class="active">Home</a></li>
        <li><a href="{{url('/about')}}">About</a></li>
        <li><a href="{{ url('/verify')}}">Verify Certificate</a></li>
        <li class="dropdown"><a href="#"><span>Material</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="{{url('user/course')}}">Tutorial</a></li>
            <!-- <li><a href="{{url('/services/supply')}}">Supply of safety kits and equipment</a></li>
            <li><a href="{{url('/services/hse/consultancy')}}">HSE Consultancy</a></li>
            <li><a href="{{url('/services/general/contract')}}">General contract</a></li>
            <li><a href="{{url('/services/inspection/services')}}">Inspection services</a></li> -->
          </ul>
        </li>
        <li><a href="{{ url('contact') }}">Contact</a></li>
        @guest
            @if (Route::has('login'))
                <li><a href="{{ route('login') }}">Login</a></li>
            @endif
            @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        @else
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </li>
        @endguest

      </ul>
    </nav><!-- .navbar -->

  </div>
</header>
