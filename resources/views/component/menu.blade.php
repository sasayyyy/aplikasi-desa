<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aplikasi Desa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        @if(!Auth::check())
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('profile')}}">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
      </ul>
    </div>
    <div class="d-flex">

      <a href="{{route('signup')}}" class="btn btn-light mx-2">Signup</a>
      <a href="{{route('signin')}}" class="btn btn-light">Signin</a>
      @else
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('home')}}">data users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('profile')}}">data warga</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">data rt/rw</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}">data surat</a>
      </li>
      <a href="{{route('logout')}}" class="btn btn-light">Logout</a>
      @endif



    </div>
  </div>
</nav>
