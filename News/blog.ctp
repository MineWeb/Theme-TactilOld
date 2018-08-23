<section id="blog">
	<div class="blog-up" style="background: url(/theme/Tactil/img/slider.png) no-repeat ;">
		<div class="container">
			<div class="row">
				<div class="box-center">
					<div class="title">
						News
					</div>
					<div class="subtitle">
					Liste des news
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php if(!empty($search_news)) { foreach ($search_news as $news) { ?>
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<h4 class="card-header"><?= $news['News']['title'] ?></h4>
						
						<div class="card-body" style="overflow:hidden;">
							<p class="card-text">
								<?php
									$msg = $news['News']['content'];
									$nmsg = substr($msg, 0, 400);
									echo $nmsg;?></p>
						</div>
						<div class="card-footer">
							<a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])) ?>"
							   class="btn btn-secondary">Lire plus</a>
							<span><?= $news['News']['count_comments'] ?> <i class="fa fa-comments"
																		 style="color: #fff"></i></span>
							<span style="margin-left:15px"><?= $news['News']['count_likes'] ?>
								<i class="fa fa-thumbs-up" style="color: #fff"></i></span>
						</div>
					</div>
				</div>
			<?php } } else { ?>
				<div class="col-lg-12"><h4 style="font-family: 'Assistant', sans-serif;margin-top:40px"><?= $Lang->get('NEWS__NONE_PUBLISHED') ?></h4></div>
			<?php } ?>
		</div>
	</div>
</section>
