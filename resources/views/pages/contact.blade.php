@extends('weblayouts.default')
@section('projects-active','active')
@section('content')
<main>
    <div class="container mt-2">
      <h2 class="mb-2"><u>Contact</u></h2>
        <div class="row main_card_box mt-4">
            <div class="col-12 col-md-6 mt-1 row">
              <div class="col-12 mb-3">
                <h5 class="mb-0"><strong>E-mail</strong></h5>
                <a href="mailto:vongsakorntie@gmail.com" class="text-decoration-none text-dark fs-6"><u>vongsakorntie@gmail.com</u></a>
              </div>
              <div class="col-12 mb-3">
                <h5 class="mb-0"><strong>Phone</strong></h5>
                <a href="tel:+66885758986" class="text-decoration-none text-dark fs-6"><u>+66885758986</u></a>    
              </div>
              <div class="col-12">
                <h5 class="mb-0"><strong>Line</strong></h5>
                <a href="https://line.me/ti/p/lGB_TeFWET" class="text-decoration-none text-dark fs-6"><u>vongsakorn4128</u></a><br>
                <img src="{{ asset('images/projects/line-qr.jpg') }}" width="200px" class="shadow mt-3">
              </div>
            </div>
            <div class="col-12 col-md-6 mt-1">
                
            </div>
        </div>
    </div>
</main>
@endsection