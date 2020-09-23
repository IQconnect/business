@if(get_field('show_form'))
  @include("components.contact")
@endif
@include("components.contact-bar")
<footer class="footer">
  <div class="container footer__row">
    <div class="text footer__copyright">
      {{ get_option_field("copyright") }}
    </div>
    <img class="footer__logo" src="{{ get_option_field('iqlogo')['url'] }}" alt="{{ get_option_field('iqlogo')['alt'] }}">
  </div>
</footer>