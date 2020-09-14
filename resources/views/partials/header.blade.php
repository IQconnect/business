<header class="header" header>
  <div class="container">
    <div class="header__row">
      <a class="header__brand" href="{{ home_url('/') }}">
        <img src="{{  get_option_field("logo")['url'] }}" alt="{{  get_option_field("logo")['alt'] }}">
      </a>
      <div class="header__buttons">
        <a class="button button--icon" href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="button" href="#">
          Kontakt
        </a>
        <div class="burger burger-slip">
          <div class="burger-lines"></div>
        </div>
      </div>
    </div>
  </div>
</header>
@include('components.top')
@include('components.stats')
@include('components.services')
@include('components.video')
@include('components.chart')
@include('components.team')
@include('components.slider')
@include('components.prices')
@include('components.blog')
@include('components.answers')
@include('components.boxes')