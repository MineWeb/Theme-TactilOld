<section id="error" style="background: url(/theme/Tactil/img/bubble.png) fixed top;">
	<div class="title">
	<?= $Lang->get('ERROR__500_LABEL') ?>
	</div>
	<div class="subtitle">
		<?= (isset($Lang)) ? $Lang->get('ERROR__INTERNAL_ERROR') : 'For know reason of this error, please change <pre>Configure::write(\'debug\', 0);</pre> to <pre>Configure::write(\'debug\', 3);</pre> in file <b>app/Config/core.php</b> line 34.' ?>
	</div>
</section>
