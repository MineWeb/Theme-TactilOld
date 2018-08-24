<section id="slider" style="background: url(<?php if(empty($theme_config['logo'])) echo'/theme/Tactil/img/banniere.png'; else echo $theme_config['logo']; ?>) no-repeat fixed top;">
	<div class="container">
		<div class="row" style="margin-right: 0px;margin-left: 0px;">
			<div class="box-center">
				<div class="title">
					<?= $theme_config['accueil']->slider->titre ?>
				</div>
				<div class="subtitle">
					<?= $theme_config['accueil']->slider->desc ?>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="button">
						Ip : <?= $theme_config['accueil']->ip ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="button-2">
						Joueur<?php if($server_infos['GET_PLAYER_COUNT'] >= 2) echo 's';?>: <?= $server_infos['GET_PLAYER_COUNT'] ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="stats" style="background: url(/theme/Tactil/img/stats.png) no-repeat fixed top;">
	<div class="stats-up">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<div class="stats">
						<i class="fa fa-users"></i><br>
						<div class="stats-title">
							<?= $count_visits = ClassRegistry::init('Visit')->getVisitsCount(); ?>
						</div>
						<div class="stats-subtitle">
							Visites
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="stats">
						<i class="fa fa-user-plus"></i><br>
						<div class="stats-title">
							<?= ClassRegistry::init('Users')->find('count') ?>
						</div>
						<div class="stats-subtitle">
							Inscrits
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="stats">
						<i class="fa fa-clock-o"></i><br>
						<div class="stats-title">
							<?php $userLast = ClassRegistry::init('Users')->find('first', array('order' =>'created DESC')); echo $userLast['Users']['pseudo'] ?>
						</div>
						<div class="stats-subtitle">
							Dernier inscrit
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="stats">
						<i class="fa fa-user"></i><br>
						<div class="stats-title">
							<?= $server_infos['GET_PLAYER_COUNT'] ?>
						</div>
						<div class="stats-subtitle">
							Connectés
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="desc">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 image">
					<img src="<?= $theme_config['accueil']->section->img ?>" class="reponsive" width="100%">
				</div>
				<div class="col-lg-6">
					<div class="desc-box">
						<div class="title-desc">
						<?= $theme_config['accueil']->section->titre ?>
						</div>
						<div class="subtitle-desc">
						<?= $theme_config['accueil']->section->desc ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="news">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="title">
					<b>NEWS</b>
					<a href="/blog" class="btn btn-danger">Voir plus</a>
					<hr>
				</div>
			</div>
			<div class="col-sm-12">
				<?php
				if(!empty($search_news)) {
					$i = 0;
					foreach ($search_news as $k => $v) {
						$i++;
						if($i > 2) {
							break;
						}
						if ($i == 1) {
				?>
				<div class="box-news box-news-blue" wfd-id="63">
                    <p class="title-news"><b><?= $v['News']['title'] ?></b></p>
						<?php
						$msg = $v['News']['content'];
						$nmsg = substr($msg, 0, 400);
						echo $nmsg;?>
					</br></br><a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $v['News']['slug'])) ?>" style="float:right" class="btn btn-success">Lire la suite</a>
                </div>
				<?php } if ($i == 2) { ?>
				<div class="box-news box-news-green" wfd-id="62">
                    <p class="title-news"><b><?= $v['News']['title'] ?></b></p>
						<?php
						$msg = $v['News']['content'];
						$nmsg = substr($msg, 0, 300);
						echo $nmsg; ?>
					</br></br><a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $v['News']['slug'])) ?>" style="float:right" class="btn btn-info">Lire la suite</a>
                </div>
				
			<?php }}} else { ?>
				<div class="col-lg-12"><h4 style="font-family: 'Assistant', sans-serif;margin-top:40px"><?= $Lang->get('NEWS__NONE_PUBLISHED') ?></h4></div>
			<?php } ?>
			</div>
		</div>
	</div>
</section>
