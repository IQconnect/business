<section class="contact-bar">
  <div class="container contact-bar__row">
    <h2 class="headline contact-bar__title">
      {!! get_option_field('cbtitle') !!}
    </h2>
    <div class="contact-bar__buttons">
      <a href="{{ get_option_field('cbutton')['url'] }}" class="button button--light">
        {{ get_option_field('cbutton')['title'] }}
      </a>
      <a href="#" class="button button--text">
        Czat online
      </a>
    </div>
  </div>
</section>