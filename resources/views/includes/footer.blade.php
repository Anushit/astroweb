<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <img class="ftrlogo" src="{{ asset('public/'.$general_settings[7]['field_value']) }}">
        </div>
        <div class="row">
          <nav class="navbar navbar-expand-lg ftrnavbar ">
            <div id="navbarNav">
              <ul class="navbar-nav">           
                <li><a class="nav-link scrollto {{ (request()->is('index')) ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
                <li><a class="nav-link scrollto {{ (request()->is('about')) ? 'active' : '' }}" href="{{ route('about') }}">About US</a></li>
                <li><a class="nav-link scrollto {{ (request()->is('astrologer')) ? 'active' : '' }}" href="{{ route('astrologer') }}">Astrologers</a></li>
               <li><a class="nav-link scrollto {{ (request()->is('services')) ? 'active' : '' }}" href="{{ route('services') }}">Services</a></li>
                <li><a class="nav-link scrollto {{ (request()->is('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a></li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="row sclink">
          <p style="text-align:center;font-size:24px;">Social Media</p>
           <p class="scmli"><a href="{{ $social_settings[0]['field_value']}}" target="target_blank">
           <i class="fa fa-facebook socialicon"></i>
          </a>
          <a href="{{ $social_settings[4]['field_value']}}" target="_blank"><i class="fa fa-instagram socialicon"></i></a>
          <a href="{{ $social_settings[3]['field_value']}}" target="_blank"><i class="fa fa-linkedin socialicon"></i></a>
          <a href="{{ $social_settings[1]['field_value']}}" target="_blank"><i class="fa fa-twitter socialicon"></i></a>
         </p>
        </div>
        <div class="row ">
        <div class="col-md-6">
        <a href="https://play.google.com/store/" target="_blank">
          <img src="{{ asset('public/assets/img/Android .png') }}" class="ftrplaystore">
          </a>
          </div>
          <div class="col-md-6">
          <a href="https://apps.apple.com/" target="_blank">
          <img src="{{ asset('public/assets/img/iphone.png') }}" class="ftrplaystore1">
          </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container d-md-flex py-4 ">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          <p>{{ $general_settings[6]['field_value']}}</p>
        </div>
      </div>
    </div>
</footer>

