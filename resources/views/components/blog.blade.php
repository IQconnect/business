<section class="section">
  <div class="container">
    <span class="prefix">
      {{ $data['prefix'] }}
    </span>
    <h2 class="headline">
      {!! $data['title'] !!}
    </h2>
    <div class="blog">
      <a href="#" class="blog__item">
        <div class="blog__image">
          <img src="@asset("images/img2.jpg")" alt="cover">
          <div class="blog__cover">
            <div>
              <i class="fas fa-eye blog__icon"></i>
              <span class="text text--medium is-light">
                Czytaj więcej
              </span>
            </div>
          </div>
        </div>
        <div class="blog__content">
          <span class="text blog__tags">
            #branding #marketing
          </span>
          <h3 class="title title--medium blog__title">
            Przykładowy wpis 1
          </h3>
          <p class="text text--small">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis augue et hendrerit luctus. Duis eget leo ipsum. Ut a nibh ligula. Aenean commodo tellus vitae elit.
          </p>
        </div>
      </a>
      <a href="#" class="blog__item">
        <div class="blog__image">
          <img src="@asset("images/img6.jpg")" alt="cover">
          <div class="blog__cover">
            <div>
              <i class="fas fa-eye blog__icon"></i>
              <span class="text text--medium is-light">
                Czytaj więcej
              </span>
            </div>
          </div>
        </div>
        <div class="blog__content">
          <span class="text blog__tags">
            #zarządzanie  #marketing
          </span>
          <h3 class="title title--medium blog__title">
            Przykładowy wpis 2
          </h3>
          <p class="text text--small">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis augue et hendrerit luctus. Duis eget leo ipsum. Ut a nibh ligula. Aenean commodo tellus vitae elit.
          </p>
        </div>
      </a>
    </div>
  </div>
</section>