		<?php wp_footer(); ?>
		<footer class="glen-footer">
			<div class="glen-rainbow-bar">
				<div class="glen-rainbow-bar-segment --yellow"></div>
				<div class="glen-rainbow-bar-segment --green"></div>
				<div class="glen-rainbow-bar-segment --blue"></div>
				<div class="glen-rainbow-bar-segment --purple"></div>
				<div class="glen-rainbow-bar-segment --red"></div>
				<div class="glen-rainbow-bar-segment --orange"></div>
				<div class="glen-rainbow-bar-segment --yellow"></div>
				<div class="glen-rainbow-bar-segment --green"></div>
				<div class="glen-rainbow-bar-segment --blue"></div>
				<div class="glen-rainbow-bar-segment --purple"></div>
				<div class="glen-rainbow-bar-segment --red"></div>
				<div class="glen-rainbow-bar-segment --orange"></div>
			</div>
			<div class="glen-footer-content">
				<div class="glen-footer-info">
          <div class="glen-footer-info-compound">
            <img class="glen-footer-icon" src="<?php bloginfo('template_url'); ?>/img/icons/icon-location.svg" alt="Image of a map pin" />
            <span class="glen-footer-address">1017 Adelaide Street North, London, ON, N5Y 2M8</span>
          </div>
					<a class="glen-footer-phone" href="tel:+15194393701" title="Call us!">519.439.3701</a>
				</div>
				<div class="glen-footer-copyright">
        <span class="glen-footer-copyline">Copyright &copy; Arbour Glen Day Nursery <?php echo date("Y"); ?></span>
				</div>
			</div>
    </footer>
  <?php if ( is_page(array ('contact')) || is_home() ) { ?>
  </div>
  <?php }?>
	</body>
</html>
