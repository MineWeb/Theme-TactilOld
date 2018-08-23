<section id="error" style="background: url(/theme/Tactil/img/bubble.png) fixed top;">
	<div class="title">
	<?= $Lang->get('ERROR__404_LABEL') ?>
	</div>
	<div class="subtitle">
		<?php
			$msg = $Lang->get('ERROR__404_CONTENT');
			$msg = str_replace('{URL}', $url, $msg);
			echo $msg;
		?>
	</div>
</section>