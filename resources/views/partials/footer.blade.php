@if(get_field('show_form'))
  @include("components.contact")
@endif
@include("components.contact-bar")
<footer class="footer">
  <div class="container footer__row">
    <div class="text footer__copyright">
      {{ get_option_field("copyright") }}
    </div>
    <a href="http://iqconnect.pl/">
      <img class="footer__logo" src="{{ get_option_field('iqlogo')['url'] }}" alt="{{ get_option_field('iqlogo')['alt'] }}">
    </a>
  </div>
</footer>
<script>
  $(function() {
      $('.form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          type: 'post',
          url: 'http://businessconsultancy.pl/mail.php',
          data: $(this).serialize(),
          success: function () {
            alert('Wiadomość została wysłana!');
          }
        });
      });
  });
</script>