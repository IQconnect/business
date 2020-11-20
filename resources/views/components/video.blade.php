<section class="section">
  <a href="{{ $data['link']['url'] }}" class="video" data-fancybox="video" target="_blank">
    <img class="video__bg" src="{{ $data['image']['url'] }}" alt="{{ $data['video']['title'] }}" />
    <img class="video__play" src="@asset("images/play.png")" alt="play" />
  </a>
</section>