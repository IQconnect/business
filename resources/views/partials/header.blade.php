<div class="search-modal">
  <form class="search-modal__form" action="{{ get_home_url() }}">
    <input type="text" placeholder="Szukaj..." class="search-modal__input" name="s">
    <button type="submit" class="search-modal__button">
      Szukaj
    </button>
    <a href="#" class="search-modal__close">
      <i class="fas fa-times"></i>
    </a>
  </form>
</div>
<header class="header" header>
  <div class="container">
    <div class="header__row">
      <a class="header__brand" href="{{ home_url('/') }}">
        <img src="{{  get_option_field("logo")['url'] }}" alt="{{  get_option_field("logo")['alt'] }}">
      </a>
      <div class="header__buttons">
        {{-- <a class="button button--icon header__social" href="#">
          <i class="fab fa-facebook-f"></i>
        </a> --}}
        <a href="#" class="header__search">
          <i class="fas fa-search"></i>
        </a>
        <div class="burger burger-slip header__burger">
          <div class="burger-lines"></div>
        </div>
        <a class="button header__contact" href="{{ get_option_field('cbutton')['url'] }}">
          {{ get_option_field('cbutton')['title'] }}
        </a>
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