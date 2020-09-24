<section class="section">
  <div class="container">
    <div class="contact">
      <div>
        <span class="prefix">
          {{ get_option_field('cprefix') }}
        </span>
        <h2 class="headline">
          {!! get_option_field('ctitle') !!}
        </h2>
        <p class="text section__desc contact__desc">
          {!! get_option_field('cdesc') !!}
        </p>
      </div>
      <div class="contact__form">
        <h2 class="title title--medium">
          Formularz kontaktowy
        </h2>
        <div class="contact__form">
          @include("components.form")
        </div>
      </div>
    </div>
  </div>
</section>