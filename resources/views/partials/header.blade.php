<header class="header" header>
  <div class="container">
    <div class="header__row">
      <a class="header__brand" href="{{ home_url('/') }}">
        <img src="{{  get_option_field("logo")['url'] }}" alt="{{  get_option_field("logo")['alt'] }}">
      </a>
      <div class="header__buttons">
        <a class="button button--icon header__social" href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="button header__contact" href="#">
          Kontakt
        </a>
        <div class="burger burger-slip header__burger">
          <div class="burger-lines"></div>
        </div>
      </div>
    </div>
  </div>
  <nav class="nav col-auto" data-nav>
    @if (has_nav_menu('primary_navigation'))
     {!! wp_nav_menu(
       [
         'theme_location' => 'primary_navigation',
         'menu_class' => 'nav__menu',
       ]) !!}
    @endif
  </nav>
</header>
<div class="sections">
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
</div>