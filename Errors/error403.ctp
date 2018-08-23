<section id="error" style="background: url(/theme/Tactil/img/bubble.png) fixed top;">
	<div class="title">
	<?= $Lang->get('ERROR__403_LABEL') ?>
	</div>
	<div class="subtitle">
		<?php
			$msg = $Lang->get('ERROR__403_CONTENT');
			$msg = str_replace('{URL}', $url, $msg);
			echo $msg;
		?>
	</div>
</section>

