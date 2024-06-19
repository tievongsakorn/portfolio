@extends('weblayouts.default')
@section('projects-active','active')
@section('content')
<main>
    <div class="container mt-2">
        <div class="row">
            <h2 class="mb-2"><u> My Projects</u></h2>
            <div class="col-12 mt-4 main_card_box mb-5">
                <ul>
                    <li>
                      <h4>Mono Cyber</h4>
                      <ul>
                        <li>Developed the Murico shirt register website using PHP.</li>
                        <li>
                          PT x Maxmu APIs project: Developed an API to provide information about astrology in PHP language.
                          <ul>
                            <li>Created a back-office for the team to input data.</li>
                            <li>Stored and retrieved data from the WordPress database on the Mthai Horoscope website.</li>
                          </ul>
                        </li>
                        <li>Updated some ads on Mono29, Mthai, Horoscope, Campus Star, and Gossipstar.</li>
                        <li>
                          Mono29.com new theme project: Created a mock-up version of the new dark theme for Mono29.com using HTML, CSS, and JS.
                        </li>
                        <li>
                          Project New Mthai application: Created an API to feed data into the new Mthai application, similar to the PT x Maxmu APIs project.
                        </li>
                      </ul>
                    </li>
                  
                    <li>
                      <h4>ATMTH</h4>
                      <ul>
                        <li>Created landing pages for the websites using basic HTML, JS (Jquery), and CSS (SCSS).</li>
                        <li>
                          Project Lxe7s.com: Developed an online gaming website with a user management system and integrated with game provider APIs using the Laravel PHP Framework.
                          <ul>
                            <li>Designed the landing page.</li>
                            <li>Created a user management system and user credits management.</li>
                            <li>Designed database relationships.</li>
                            <li>Integrated APIs with game providers for adding or reducing user credits, creating tokens for users to play games, and more.</li>
                            <li>Prepared the server environment to support the website using LAMP.</li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  
                    <li>
                      <h4>Mono Infosystem (Trainee)</h4>
                      <ul>
                        <li>Created a Mock-up Oke front-end webpage.</li>
                      </ul>
                    </li>
                  
                    <li>
                      <h4>University Project</h4>
                      <ul>
                        <li>Developed a web application that recommends travel routes in the theme of 5 Maharaj Tak.</li>
                      </ul>
                    </li>
                  </ul>
            </div>
            <div class="col-12">
                <h1>Projects example</h1>
                <hr>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <h3>
                    Science Week
                </h3>
                <p>
                </p>
                <a href="{{ url('projects/sciweek') }}" target="_blank">
                    Sci Week link
                </a>
            </div>
            <div class="col-12 col-md-6 mb-4"><img src="{{ asset('images\projects\sciweek.png') }}"class="w-100"></div>
            <div class="col-12 col-md-6 mb-4">
                <h3>
                    Hands on
                </h3>
                <p>
                </p>
                <a href="{{ url('projects/hand-on') }}" target="_blank">
                    Hands on link
                </a>
            </div>
            <div class="col-12 col-md-6 mb-4"><img src="{{ asset('images\projects\hands-on.png') }}"class="w-100"></div>
        </div>
        {{-- <iframe src="{{ asset('/projects/hand-on/') }}" frameborder="0" width="100%" class="w-100 h-100"></iframe> --}}
    </div>
</main>
@endsection