<header>
    <nav class="navbar navbar-expand-lg text-light fixed-top pb=2">
        <div class="container-fluid ">
          <div class="logo me-3"></div>
          <div class="name-title d-flex align-items-end">
            <h1 class="me-3 h3">Vongsakorn  Ketsuriyong</h1>
            <p class="">Web Developer</p>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item mx-3 @yield('home-active')">
                <a class="nav-link text-light fs-5 pb-0" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item mx-3 @yield('work-active')">
                <a class="nav-link text-light fs-5 pb-0" href="#work-exp">Work Experience</a>
              </li>
              <li class="nav-item mx-3 @yield('projects-active')">
                <a class="nav-link text-light fs-5 pb-0" href="#my-projects">My Projects</a>
              </li>
              <li class="nav-item mx-3 @yield('contact-active')">
                <a class="nav-link text-light fs-5 pb-0" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

</header>
  {{-- <header>
    <div class="d-flex align-items-center">
      <div class="logo me-3"></div>
      <div class="name-title d-flex align-items-center">
          <h1 class="me-3 h3">Vongsakorn  Ketsuriyong</h1>
          <p class="mt-auto">Web Developer</p>
      </div>
    </div>
    <nav>
        <ul>
            <li><a href="#home">Resume</a></li>
            <li><a href="#work">Work Experience</a></li>
            <li><a href="#project">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header> --}}