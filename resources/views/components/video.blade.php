<section class="section">
  <a href="{{ $data['video']['url'] }}" class="video">
    <img class="video__bg" src="{{ $data['image']['url'] }}" alt="{{ $data['video']['title'] }}" />
    <img class="video__play" src="@asset("images/play.png")" alt="play" />
  </a>
</section>