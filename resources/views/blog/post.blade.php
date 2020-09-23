<section class="section">
  <div class="container">
    <article @php post_class() @endphp>
      <h2 class="title">
        {{ get_the_title() }}
      </h2>
      <div class="content text">
        {!! the_content() !!}
      </div>
    </article>
  </div>
</section>