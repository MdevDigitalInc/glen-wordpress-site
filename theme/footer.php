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
					<img class="glen-footer-icon" src="<?php bloginfo('template_url'); ?>/img/icons/icon-location.svg" alt="Image of a map pin" />
					<span class="glen-footer-address">1017 Adelaide Street North, London, ON, N5Y 2M8</span>
					<span class="glen-footer-phone">519.439.3701</span>
				</div>
				<div class="glen-footer-copyright">
					<span class="glen-footer-copyline">Copyright Arbour Glen Day Nursery 2018</span>
				</div>
			</div>
    </footer>
  <?php if ( is_page(array ('contact')) || is_home() ) { ?>
  </div>
  <?php }?>
	</body>
</html>
