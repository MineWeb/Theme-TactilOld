<section id="pages">
	<div class="pages-up" style="background: url(/theme/Tactil/img/slider.png) no-repeat ;">
		<div class="container">
			<div class="row">
				<div class="box-center">
					<div class="title">
					<?= before_display($page['title']) ?>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="button">
							<?= $Lang->get('GLOBAL__UPDATED') ?> : <?= $Lang->date($page['updated']) ?>
							</div>
						</div>
						<div class="col-md-4">
							<div class="button-2">
							<?= $Lang->get('GLOBAL__AUTHOR') ?> : <?= $page['author'] ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<?= $page['content'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
