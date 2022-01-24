<header class="container my-4">

  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'home' ) ? 'active' : '' }} " aria-current="page" href="{{ route('home') }}">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'series' ) ? 'active' : '' }}" href="{{ route('series') }}">TV SERIES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'reviews' ) ? 'active' : '' }}" href="{{ route('reviews') }}">REVIEWS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'about' ) ? 'active' : '' }}" href="{{ route('about') }}">ABOUT US</a>
    </li>
  </ul>

</header>