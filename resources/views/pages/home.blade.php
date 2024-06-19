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
        <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="profile-pic-container">
                    <img src="{{ asset('/images/main-profile-pic.jpg') }}" alt="Nicol Rider" class="profile-pic">
                </div>
            </div>
            <div class="col-6">
                <div class="intro">
                    <h1 class="honk_color_font-4">Hello</h1>
                    <h6 class="main_subtitle border-bottom pb-1">My name is Vongsakorn Ketsuriyong</h6>
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
            <div class="col-12 mt-4 main_card_box">
                <h2 class="mb-2"><u>Work Experience</u></h2>
                <ul>
                    <li>
                        <h4>Easy Hub | Mar 2024 - May 2024</h4>
                        <ul>
                          <li><strong>Development Programmer</strong></li>
                          <li>Developed and updated existing E-commerce websites Commerzy.com.</li>
                          <li>Added new payment methods using third-party APIs, e.g. Global prime pay, Xendit.</li>
                          <li>Added a Promptpay QR code generator that has a dynamic amount value based on the invoice price (using the "php-promptpay-qr" PHP library).</li>
                        </ul>
                      </li>
                    <li>
                      <h4>Mono Cyber | May 2022 - Jan 2024</h4>
                      <ul>
                        <li class="worl_epx_position"><strong>Programmer Developer</strong></li>
                        <li>Developed and updated existing websites such as Mthai.com, Mono29.com, and horoscope.mthai.com.</li>
                        <li>Created, developed, maintained, and enhanced websites based on assigned projects using PHP.</li>
                        <li>Developed RESTful APIs based on project requirements.</li>
                        <li>Developed small apps connecting to the database from WordPress - Project.</li>
                        <li>Developed the Murico shirt register website using PHP.</li>
                        <li>Developed PT x Maxmu APIs.</li>
                        <li>Updated ads on Mono29, Mthai, Horoscope, Campus Star, and Gossipstar.</li>
                        <li>Implemented the Mono29.com new dark theme project.</li>
                        <li>Developed APIs for the New Mthai application project.</li>
                      </ul>
                    </li>
                  
                    <li>
                      <h4>ATMTH | April 2021 - April 2022</h4>
                      <ul>
                        <li><strong>Web Developer</strong></li>
                        <li>Developed a website to play online games using the Laravel framework and PHP.</li>
                        <li>Designed both the front-end and back-end of the website.</li>
                        <li>Connected the website to a game API.</li>
                      </ul>
                    </li>
                  
                    <li>
                      <h4>Mono Infosystem | Nov. 2020 - Mar. 2021</h4>
                      <ul>
                        <li><strong>Web Developer (Trainee)</strong></li>
                        <li>Learned and developed websites using the Laravel framework.</li>
                        <li>Developed a web application recommending travel routes in the theme of 5 Maharaj Tak.</li>
                      </ul>
                    </li>
                  </ul>
            </div>
            
            {{-- <div class="col-12">
                <div class="buttons">
                    <a href="#" class="button resume">Resume</a>
                    <a href="#" class="button projects">Projects</a>
                    <a href="#" class="button contact">Contact</a>
                </div>
            </div> --}}
        </div>
    </div>
</main>
@endsection