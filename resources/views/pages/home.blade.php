@extends('weblayouts.default')
@section('home-active','active')
@section('content')

{{-- <div class="container">
    <div class="row mt-5">
        <div class="col-6">
            <h1>สวัสดี</h1>
        </div>
        <div class="col-6"></div>
    </div>
</div> --}}
<main>
    <div class="container">
        <span class="home" id="home"></span>
        <div class="row ">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center px-2">
                <div class="profile-pic-container">
                    <img src="{{ asset('/images/main-profile-pic.jpg') }}" alt="Nicol Rider" class="profile-pic">
                </div>
            </div>
            <div class="col-12 col-md-6 px-0">
              <h1 class="honk_color_font-4">Hello</h1>
              <h5 class="main_subtitle mb-3">My name is Vongsakorn Ketsuriyong</h5>
                <div class="intro  main_card_box">
                    <p>	
                        &nbsp; "I'm a normal programmer who likes to try out 
                        new things, whether it be tools, techniques, or 
                        new technologies to continue to develop myself. I am also capable of self-learning. <br>
                        &nbsp; I'm looking for a suitable place to have the 
                        opportunity to explore new technologies and 
                        utilize my knowledge and experience to benefit 
                        the organization."
                        </p>
                </div>
            </div>
            {{-- <div class="col-12 mt-4">
            </div> --}}
            <div class="col-12 mt-4 main_card_box">
              <h2 class="nabla_color_font">TECHNICAL SKILL</h2>
              <hr>
              <div class="row">
                <div class="col-12 col-md-4 skill_icon_box">
                  <h5 class="honk_color_font">
                    PROGRAMMING LANGUAGE
                  </h5>
                  <p>
                    <ul class=" d-flex flex-column">
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-html5"></i> HTML 
                        </div>
                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-php"></i> PHP 
                        </div>
                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-solid fa-database"></i> SQL 
                        </div>
                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-js"></i> Javascript, Jquery
                        </div>
                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-css3"></i> CSS 
                        </div>
                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-sass"></i> SASS 
                        </div>
                      </li>
                      
                    </ul>
                  </p>
                  
                  
                </div>
                
                <div class="col-12 col-md-4 skill_icon_box">
                  <h5 class="honk_color_font">
                    FRAMEWORK
                  </h5>
                  <p>
                    <ul>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-laravel"></i> laravel

                        </div>
                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-vuejs"></i> vue.sj
                          
                        </div>

                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-bootstrap"></i> Bootstrap
                          
                        </div>

                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-wordpress"></i> Wordpress
                          
                        </div>

                      </li>
                    </ul>
                  </p>
                </div>
                <div class="col-12 col-md-4 skill_icon_box">
                  <h5 class="honk_color_font">
                    OTHER
                  </h5>
                  <p>
                    <ul>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-solid fa-comment-dollar"></i></i> 
                          <a href="https://www.xendit.co/en-th/" target="_blank">
                            Xendit API
                            <i class="fa-solid fa-up-right-from-square"></i>
                          </a>
                        </div>

                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-regular fa-credit-card"></i> 
                          <a href="https://www.gbprimepay.com/" target="_blank">
                            Global Primepay API <i class="fa-solid fa-up-right-from-square"></i>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-connectdevelop"></i> RESTful API
                        </div>

                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-line"></i> 
                          <a href="https://developers.line.biz/en/docs/messaging-api/overview/" target="_blank">
                            Line message API <i class="fa-solid fa-up-right-from-square"></i>
                          </a>
                        </div>

    
                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-solid fa-gamepad"></i> Jockergame API

                        </div>

                      </li>
                      <li>
                        <div class="skill_icon_card me-2">
                          <i class="fa-brands fa-google"></i>
                          <a href="https://www.google.com/script/start/" target="_blank">
                            Google App Script Api <i class="fa-solid fa-up-right-from-square"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                    
                  </p>

                </div>
              </div>

            </div>
            {{-- <div class="col-12 mt-4">
            </div> --}}
            <span id="work-exp"></span>
            <div class="col-12 mt-4 main_card_box work_exp_box">
              <h2  class="nabla_color_font">Work Experience</h2>
              <hr>
              <ul>
                    <li>
                      <div class="w-100 d-flex justify-content-between align-items-center">
                          <h4 class="honk_color_font my-2">
                            Easy Hub | Mar 2024 - May 2024
                          </h4>
                          <strong>Development Programmer</strong>
                      </div>  
                        <ul>
                          <li>- Developed and updated existing E-commerce websites Commerzy.com.</li>
                          <li>- Added new payment methods using third-party APIs, e.g. Global prime pay, Xendit.</li>
                          <li>- Added a Promptpay QR code generator that has a dynamic amount value based on the invoice price (using the "php-promptpay-qr" PHP library).</li>
                        </ul>
                      </li>
                    <li>
                      <div class="w-100 d-flex justify-content-between align-items-center">
                        <h4 class="honk_color_font my-2">
                          Mono Cyber | May 2022 - Jan 2024
                        </h4>
                        <strong>Programmer Developer</strong>
                      </div>
                      <ul>
                        <li>- Developed and updated existing websites such as Mthai.com, Mono29.com, and horoscope.mthai.com.</li>
                        <li>- Created, developed, maintained, and enhanced websites based on assigned projects using PHP.</li>
                        <li>- Developed RESTful APIs based on project requirements.</li>
                        <li>- Developed small apps connecting to the database from WordPress - Project.</li>
                        <li>- Developed the Murico shirt register website using PHP.</li>
                        <li>- Developed PT x Maxmu APIs.</li>
                        <li>- Updated ads on Mono29, Mthai, Horoscope, Campus Star, and Gossipstar.</li>
                        <li>- Implemented the Mono29.com new dark theme project.</li>
                        <li>- Developed APIs for the New Mthai application project.</li>
                      </ul>
                    </li>
                  
                    <li>
                      <div class="w-100 d-flex justify-content-between align-items-center">
                        <h4 class="honk_color_font my-2">
                          ATMTH | April 2021 - April 2022
                        </h4>
                        <strong>Web Developer</strong>
                      </div>
                      <ul>
                        <li>- Developed a website to play online games using the Laravel framework and PHP.</li>
                        <li>- Designed both the front-end and back-end of the website.</li>
                        <li>- Connected the website to a game API.</li>
                      </ul>
                    </li>
                  
                    <li>
                      <div class="w-100 d-flex justify-content-between align-items-center">
                        <h4 class="honk_color_font my-2">
                          Mono Infosystem | Nov. 2020 - Mar. 2021
                        </h4>
                        <strong>Web Developer (Trainee)</strong>
                      </div>
                      <ul>
                        <li>- Learned and developed websites using the Laravel framework.</li>
                        <li>- Developed a web application recommending travel routes in the theme of 5 Maharaj Tak.</li>
                      </ul>
                    </li>
                  </ul>
              </div>
                <div id="my-projects" class="col-12 mt-4 main_card_box mb-5">
                  <h2 class="mb-2 nabla_color_font">My Projects</h2>
                  <hr>

                    <ul>
                        <li class="mb-2">
                          <h4 class="honk_color_font">Mono Cyber</h4>
                          <ul>
                            <li>- Developed the Murico shirt register website using PHP.</li>
                            <li>
                              - PT x Maxmu APIs project: Developed an API to provide information about astrology in PHP language.
                                <li>- Created a back-office for the team to input data.</li>
                                <li>- Stored and retrieved data from the WordPress database on the Mthai Horoscope website.</li>
                            </li>
                            <li>- Updated some ads on Mono29, Mthai, Horoscope, Campus Star, and Gossipstar.</li>
                            <li>
                              - Mono29.com new theme project: Created a mock-up version of the new dark theme for Mono29.com using HTML, CSS, and JS.
                            </li>
                            <li>
                              - Project New Mthai application: Created an API to feed data into the new Mthai application, similar to the PT x Maxmu APIs project.
                            </li>
                          </ul>
                        </li>
                      
                        <li class="mb-2">
                          <h4 class="honk_color_font">ATMTH</h4>
                          <ul>
                            <li>- Created landing pages for the websites using basic HTML, JS (Jquery), and CSS (SCSS).</li>
                            <li>
                              - Project Lxe7s.com: Developed an online gaming website with a user management system and integrated with game provider APIs using the Laravel PHP Framework.
                                <li>- Designed the landing page.</li>
                                <li>- Created a user management system and user credits management.</li>
                                <li>- Designed database relationships.</li>
                                <li>- Integrated APIs with game providers for adding or reducing user credits, creating tokens for users to play games, and more.</li>
                                <li>- Prepared the server environment to support the website using LAMP.</li>
                            </li>
                          </ul>
                        </li>
                      
                        <li class="mb-2">
                          <h4 class="honk_color_font">Mono Infosystem (Trainee)</h4>
                          <ul>
                            <li>- Created a Mock-up Oke front-end webpage.</li>
                          </ul>
                        </li>
                      
                        <li>
                        <li class="mb-2">
                          <h4 class="honk_color_font">University Project</h4>
                          <ul>
                            <li>- Developed a web application that recommends travel routes in the theme of 5 Maharaj Tak.</li>
                          </ul>
                        </li>
                      </ul>
                </div>
                <div class="col-12 ">
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
              <div class="row main_card_box mt-4" id="contact">
                <h2 class="mb-2 nabla_color_font">Contact</h2>
                <hr>
                
                  <div class="col-12 mt-1 row">
                    <div class="row">
                      <div class="col-12 col-md-6">
                          <h5 class="mb-0 honk_color_font"><strong>Vcard</strong></h5>
                          <small class="pb-3">(Scan to get my contact immediately on your phone.)</small>
                          <img class="vcard_img mt-3" src="{{ asset('portfolio_file/Vongsakorn_vcard.png') }}" width="200px" class="shadow mt-5">
                            <h5 class="mb-0 mt-3 honk_color_font"><strong>Line</strong></h5>
                            <a href="https://line.me/ti/p/lGB_TeFWET" class="text-decoration-none text-light fs-6"><u>vongsakorn4128</u></a><br>
                            <img src="{{ asset('images/projects/line-qr.jpg') }}" width="200px" class="shadow mt-3">
                      </div>
                      <div class="col-12 col-md-6 row align-content-start">
                        <div class="col-12  mb-3">
                          <h5 class="mb-0 honk_color_font"><strong>E-mail</strong></h5>
                          <a href="mailto:vongsakorntie@gmail.com" class="text-decoration-none text-light fs-6"><u>vongsakorntie@gmail.com</u></a>
                        </div>
                        <div class="col-12  mb-3">
                          <h5 class="mb-0 honk_color_font"><strong>Phone</strong></h5>
                          <a href="tel:+66885758986" class="text-decoration-none text-light fs-6"><u>+66885758986</u></a>    
                        </div>
                        <div class="col-12  mb-3">
                          <h5 class="mb-0 honk_color_font"><strong>GITHUB</strong></h5>
                          <a href="https://github.com/tievongsakorn" class="text-decoration-none text-light fs-6"><u>github.com/tievongsakorn</u></a><br>
                        </div>
                        <div class="col-12 ">
                          <h5 class="mb-0 honk_color_font"><strong>Buy me a coffee</strong></h5>
                          <a href="https://buymeacoffee.com/vongsakorntie" class="text-decoration-none text-light fs-6"><u>buymeacoffee.com/vongsakorntie</u></a><br>
                        </div>
                      </div>
                      
                    </div>
                   
                  </div>
                  <div class="col-12 mt-1">
                      
                  </div>
              </div>
              {{-- <iframe src="{{ asset('/projects/hand-on/') }}" frameborder="0" width="100%" class="w-100 h-100"></iframe> --}}
            {{-- <div class="col-12">
                <div class="buttons">
                    <a href="#" class="button resume">Resume</a>
                    <a href="#" class="button projects">Projects</a>
                    <a href="#" class="button contact">Contact</a>
                </div>
            </div> --}}
    </div>
</main>
@endsection