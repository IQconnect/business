<section class="section">
  <div class="container">
    <article class="text content-page" @php post_class() @endphp>
      <h2 class="title">
        {{ get_the_title() }}
      </h2>
      <div class="content-page__main">
        {!! the_content() !!}
      </div>
    </article>
  </div>
</section>