<header>
  <nav class="navbar navbar-expand-lg text-light fixed-top py-3">
      <div class="container-fluid ">
        <div class="logo me-3 d-none d-md-block"></div>
        <div class="name-title d-flex align-items-end">
          <h1 class="me-3 fs-6 fs-md-3">Vongsakorn  Ketsuriyong</h1>
          <p class="d-none d-md-block">Web Developer</p>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav" id="nav-items">
            <li class="nav-item mx-3" id="home-nav">
              <a class="nav-link text-light fs-6 pb-0" href="#home">Home</a>
            </li>
            <li class="nav-item mx-3" id="work-exp-nav">
              <a class="nav-link text-light fs-6 pb-0" href="#work-exp">Work Experience</a>
            </li>
            <li class="nav-item mx-3" id="my-projects-nav">
              <a class="nav-link text-light fs-6 pb-0" href="#my-projects">My Projects</a>
            </li>
            <li class="nav-item mx-3" id="contact-nav">
              <a class="nav-link text-light fs-6 pb-0" href="#contact">Contact</a>
            </li>
            <li class="nav-item mx-3 text-light dropdown dropstart ">
              <a class="nav-link text-light dropdown-toggle resume-dropdown " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Resume
              </a>
              <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="{{ asset('/portfolio_file/Vongsakorn_Resume.pdf') }}">dowload as pdf</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ asset('/portfolio_file/Vongsakorn_Resume.png') }}" download="Vongsakorn_Resume.png">dowload as png</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

</header>

<script>
const navItems = document.getElementById('nav-items');
const homeNav = document.getElementById('home-nav');
const workExpNav = document.getElementById('work-exp-nav');
const myProjectsNav = document.getElementById('my-projects-nav');
const contactNav = document.getElementById('contact-nav');

window.addEventListener('scroll', () => {
  const homeSection = document.getElementById('home');
  const workExpSection = document.getElementById('work-exp');
  const myProjectsSection = document.getElementById('my-projects');
  const contactSection = document.getElementById('contact');

  // Check if the user is scrolling past the sections
  if (window.scrollY >= homeSection.offsetTop && window.scrollY < workExpSection.offsetTop) {
    homeNav.classList.add('active');
    workExpNav.classList.remove('active');
    myProjectsNav.classList.remove('active');
    contactNav.classList.remove('active');
  } else if (window.scrollY >= workExpSection.offsetTop && window.scrollY < myProjectsSection.offsetTop) {
    homeNav.classList.remove('active');
    workExpNav.classList.add('active');
    myProjectsNav.classList.remove('active');
    contactNav.classList.remove('active');
  } else if (window.scrollY >= myProjectsSection.offsetTop && window.scrollY < contactSection.offsetTop) {
    homeNav.classList.remove('active');
    workExpNav.classList.remove('active');
    myProjectsNav.classList.add('active');
    contactNav.classList.remove('active');
  } else if (window.scrollY >= contactSection.offsetTop) {
    homeNav.classList.remove('active');
    workExpNav.classList.remove('active');
    myProjectsNav.classList.remove('active');
    contactNav.classList.add('active');
  }
});
</script>
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