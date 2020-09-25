<section class="section">
  <div class="container">
    <div class="content-page">
      <span class="prefix">
        {{ $data['prefix'] }}
      </span>
      <h2 class="headline">
        {!! $data['title'] !!}
      </h2>
      <div class="page-services">
        @foreach($data['services'] as $item)
          <div class="page-services__item">
            <div class="page-services__image">
              <img src="{{ $item['image']['url'] }}" alt="{{ $item['title'] }}">
            </div>
            <div class="page-services__content">
              <h3 class="title title--small">
                {!! $item['title'] !!}
              </h3>
              <p class="text text--small page-services__desc">
                {{ $item['desc'] }}
              </p>
              @if($item['link'])
                <a href="{{ $item['link']['url'] }}" class="button button--simple">
                  Czytaj więcej
                </a>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>