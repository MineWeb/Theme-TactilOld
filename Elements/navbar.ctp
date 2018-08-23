<section id="nav">
	<section id="navbar-up">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<?php
						if(!empty($facebook_link))
						echo '<a class="s-icons" href="'.$facebook_link.'"><i class="icon-social-facebook"></i></a>';

						if(!empty($twitter_link))
						echo '<a class="s-icons" href="'.$twitter_link.'"><i class="icon-social-twitter"></i></a>';

						if(!empty($youtube_link))
						echo '<a class="s-icons" href="'.$youtube_link.'"><i class="icon-social-youtube"></i></a>';

						if(!empty($skype_link))
						echo '<a class="s-icons" href="'.$skype_link.'"><i class="icon-social-skype"></i></a>';
					?>
				</div>
				<div class="col-4">
				
				</div>
				<div class="col-4">
					<a class="s-icons pull-right" href="mailto:<?php  $config = ClassRegistry::init('Configuration')->find('all'); echo $config["0"]["Configuration"]["email"]; ?>"><i class="icon-chat"> Contacter nous</i></a>
				</div>
			</div>
		</div>
	</section>
	<section id="navbar">
		<div class="row">
			<div class="col-2 website">
				<?= $website_name ?>
			</div>
			<div class="col-6">
				<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
					<button class="navbar-toggler navbar-toggler-right icon-nav" type="button" data-toggle="collapse"
							data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
							aria-label="Toggle navigation">
						<i class="fa fa-bars icon"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbarResponsive" aria-expanded="true">
						<ul class="navbar-nav nav-main">

							<?php if(!empty($nav)): ?>
							<?php $i = 0; ?>
							<?php foreach ($nav as $key => $value): ?>
							<?php if(empty($value['Navbar']['submenu'])): ?>
							<li class="nav-item">
								<a class="nav-link js-scroll-trigger" href="<?= $value['Navbar']['url'] ?>">
									<?php if(!empty($value['Navbar']['icon'])): ?>
									<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
									<?php endif; ?>
									<?= $value['Navbar']['name'] ?>
								</a>
							</li>
							<?php else: ?>
							<li class="dropdown">
								<a href="#" class="nav-link js-scroll-trigger" data-toggle="dropdown" role="button"
								   aria-expanded="false">
									<?php if(!empty($value['Navbar']['icon'])): ?>
									<i class="fa fa-<?= $value['Navbar']['icon'] ?>"></i>
									<?php endif; ?>
									<?= $value['Navbar']['name'] ?>
									<i class="fa fa-angle-down">
									</i>
								</a>
								<ul class="dropdown-menu" role="menu">
									<?php
									$submenu = json_decode($value['Navbar']['submenu']);
									 foreach ($submenu as $k => $v) {
									?>
									<div class="dropd-menu">
										<a class="title-drop"
										   href="<?= rawurldecode(rawurldecode($v)) ?>"<?= ($value['Navbar']['open_new_tab']) ?'target="_blank"':''?>><i class="fa fa-circle-o"></i>
										   <?= rawurldecode(str_replace('+', ' ', $k)) ?>
										</a>
									</div>

									<?php } ?>
								</ul>
							</li>
							<?php endif; ?>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
					</div>
				</nav>
			</div>
			<div class="col-4">
				<?php if(!$isConnected): ?>
					<a href="#register" data-toggle="modal" class="register-box">INSCRIPTION</a>
					<a  href="#login" data-toggle="modal" class="login-box">CONNECTION</a>
				<?php else: ?>
				<div class="row">
					<div class="col-xs-12">
						<a class="<?php if($Permissions->can('ACCESS_DASHBOARD')) echo'liens'; else echo 'liens-no'; ?>" href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => null)) ?>"> Mon profil <i aria-hidden="true" class="fa fa-user"></i>
						</a><br>
						<a class="<?php if($Permissions->can('ACCESS_DASHBOARD')) echo'liens '; else echo 'liens-no '; ?>" href="#notifications_modal" onclick="notification.markAllAsSeen(2)" data-toggle="modal"> Mes notifications  <i aria-hidden="true" class="fa fa-flag"></i>
						<span class="notification-indicator" style="position: absolute;top: 25px; color:red"></span>
						</a><br>
						<?php if($Permissions->can('ACCESS_DASHBOARD')): ?>
							<a class="liens" href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'plugin' => 'admin')) ?>"> Admin <i aria-hidden="true" class="fa fa-cogs"></i>
							</a>
						<?php endif; ?>
					</div>
					<div class="col-xs-12 deco-border">
						<a href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => null)) ?>" class="deco-box">DECONNECTION</a>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
</section>