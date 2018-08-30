<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />

<section class="content">
	<form action="<?= $this->Html->url(array('controller' => 'staff', 'action' => 'edit', 'admin' => true, 'plugin' => 'staff')) ?>" method="post" data-ajax="true" data-url-redirect="<?= $this->Html->url(array('controller' => 'staff', 'action' => 'index', 'admin' => true)) ?>">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><?= $Lang->get('STAFF__EDIT_STAFF'); ?></h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label><?= $Lang->get('GLOBAL__NAME') ?></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fas fa-font" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['username']; ?>" placeholder="PHPierre" name="username" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label><?= $Lang->get('STAFF__ORDER') ?></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fas fa-sort-numeric-asc" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['order']; ?>" name="order" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label><?= $Lang->get('STAFF__RANK') ?></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fas fa-font" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['rank']; ?>" placeholder="<?= $Lang->get('STAFF__DEVELOPER') ?>" name="rank" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label><?= $Lang->get('STAFF__COLOR') ?></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fas fa-palette" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['color']; ?>" name="color" placeholder="#A57A57 (couleur hexadécimal)" class="form-control" type="text" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-body">
						<div class="form-group">
							<label>Facebook</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fab fa-facebook-f" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['facebook_url']; ?>" name="facebook_url" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label>Reddit</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fab fa-reddit" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['reddit_url']; ?>" name="reddit_url" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label>Twitter</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fab fa-twitter" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['twitter_url']; ?>" name="twitter_url" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label>Google Plus</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fab fa-google-plus-g" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['googleplus_url']; ?>" name="googleplus_url" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label>Youtube</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fab fa-youtube" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['youtube_url']; ?>" name="youtube_url" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label>Weibo</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fab fa-weibo" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['weibo_url']; ?>" name="weibo_url" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label>Github</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fab fa-github" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['github_url']; ?>" name="github_url" class="form-control" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label>Instagram</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fab fa-instagram" aria-hidden="true"></i>
								</div>
								<input value="<?= $staff['Staff']['instagram_url']; ?>" name="instagram_url" class="form-control" type="text" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-body">
						<input type="submit" value="<?= $Lang->get('GLOBAL__EDIT'); ?>" class="btn btn-large btn-block btn-success" />
					</div>
				</div>
			</div>
		</div>
	</form>
</section>