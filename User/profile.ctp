<section id ="profil" style="background: url(/theme/Tactil/img/bubble.png) fixed top;">
	<div class="container">
		<div class="title-profil">
		<b><?= $Lang->get('USER__PROFILE') ?></b>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="card h-100">
					<div class="card-header title"><h3>Informations personnelles</h3>
					</div>
					<div class="card-body">
						<div class="section">
							<p><b><?= $Lang->get('USER__USERNAME') ?> :</b> <?= $user['pseudo'] ?></p>
						</div>
						<div class="section">
							<p><b><?= $Lang->get('USER__EMAIL') ?> :</b> <span id="email"><?= $user['email'] ?></span>
							</p>
						</div>
						<div class="section">
							<p>
								<b><?= $Lang->get('USER__RANK') ?> :</b>
								<?php foreach ($available_ranks as $key => $value) {
									if($user['rank'] == $key) {
										echo $value;
									}
								} ?>
							</p>
						</div>
						<?php if($EyPlugin->isInstalled('eywek.shop')) { ?>
						<div class="section">
							<p><b><?= $Lang->get('USER__MONEY') ?> :</b> <span
									class="money"><?= $user['money'] ?></span></p>
						</div>
						<?php } ?>

						<div class="section">
							<p><b><?= $Lang->get('IP') ?> :</b> <?= $user['ip'] ?></p>
						</div>

						<div class="section">
							<p><b><?= $Lang->get('GLOBAL__CREATED') ?> :</b> <?= $Lang->date($user['created']) ?></p>
						</div>
						<?= $Module->loadModules('user_profile') ?>
						<?= $Module->loadModules('user_profile_messages') ?>
					</div>
					<div class="card-footer">
					
					</div>
				</div>
			</div>

			<hr>
			<div class="col-lg-6 ">
				<div class="card h-100">
					<div class="card-header title"><h3>Modifications</h3>
					</div>
					<div class="card-body">
						<h3><?= $Lang->get('USER__UPDATE_PASSWORD') ?></h3>

						<form method="post" class="form-inline" data-ajax="true"
							  action="<?= $this->Html->url(array('plugin' => null, 'controller' => 'user', 'action' => 'change_pw')) ?>">
							<div class="form-group">
								<input type="password" class="form-control" name="password"
									   placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM') ?>">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password_confirmation"
									   placeholder="<?= $Lang->get('USER__PASSWORD') ?>">
							</div>

							<div class="form-group">
								<button style="border-radius:0px;border:none;background-color:#337ab7"
										class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
								</button>
							</div>
						</form>

						<?php if($Permissions->can('EDIT_HIS_EMAIL')) { ?>
						<hr>

						<h3><?= $Lang->get('USER__UPDATE_EMAIL') ?></h3>

						<form method="post" class="form-inline" data-ajax="true"
							  action="<?= $this->Html->url(array('plugin' => null, 'controller' => 'user', 'action' => 'change_email')) ?>">
							<div class="form-group">
								<input type="email" class="form-control" name="email"
									   placeholder="<?= $Lang->get('USER__EMAIL_CONFIRM_LABEL') ?>">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email_confirmation"
									   placeholder="<?= $Lang->get('USER__EMAIL') ?>">
							</div>

							<div class="form-group">
								<button style="border-radius:0px;border:none;background-color:#337ab7"
										class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
								</button>
							</div>
						</form>
						<?php } ?>

						<?php if($shop_active) { ?>

						<hr>

						<h3><?= $Lang->get('SHOP__USER_POINTS_TRANSFER') ?></h3>

						<form method="post" class="form-inline" data-ajax="true"
							  action="<?= $this->Html->url(array('plugin' => 'shop', 'controller' => 'payment', 'action' => 'transfer_points')) ?>">
							<div class="form-group">
								<input type="text" class="form-control" name="to"
									   placeholder="<?= $Lang->get('SHOP__USER_POINTS_TRANSFER_WHO') ?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="how"
									   placeholder="<?= $Lang->get('SHOP__USER_POINTS_TRANSFER_HOW_MANY') ?>">
							</div>

							<div class="form-group">
								<button style="border-radius:0px;border:none;background-color:#337ab7"
										class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
								</button>
							</div>
						</form>

						<?php } ?>


						<?php if($can_skin) { ?>
						<hr>

						<h3><?= $Lang->get('API__SKIN_LABEL') ?></h3>

						<form class="form-inline" method="post" id="skin" method="post" data-ajax="true"
							  data-upload-image="true"
							  action="<?= $this->Html->url(array('action' => 'uploadSkin')) ?>">
							<div class="form-group">
								<label><?= $Lang->get('FORM__BROWSE') ?></label>
								<input name="image" type="file">
							</div>
							<input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
							<button style="border-radius:0px;border:none;background-color:#337ab7" type="submit"
									class="btn btn-default"><?= $Lang->get('GLOBAL__SUBMIT') ?>
							</button>
							<div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;</div>
							<div class="form-group">
								<u><?= $Lang->get('USER__PROFILE_FORM_IMG') ?> :</u><br>

								- <?= $Lang->get('USER__IMG_UPLOAD_TYPE_PNG') ?><br>
								- <?= str_replace('{PIXELS}', $skin_width_max, $Lang->get('USER__IMG_UPLOAD_WIDTH_MAX'))
								?><br>
								- <?= str_replace('{PIXELS}', $skin_height_max, $Lang->
								get('USER__IMG_UPLOAD_HEIGHT_MAX')) ?><br>
							</div>
						</form>
						<?php } ?>

						<?php if($can_cape) { ?>
						<hr>

						<h3><?= $Lang->get('API__CAPE_LABEL') ?></h3>

						<form class="form-inline" method="post" id="cape" method="post" data-ajax="true"
							  data-upload-image="true"
							  action="<?= $this->Html->url(array('action' => 'uploadCape')) ?>">
							<div class="form-group">
								<label><?= $Lang->get('FORM__BROWSE') ?></label>
								<input name="image" type="file">
							</div>
							<input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
							<button style="border-radius:0px;border:none;background-color:#337ab7" type="submit"
									class="btn btn-default"><?= $Lang->get('GLOBAL__SUBMIT') ?>
							</button>
							<div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;</div>
							<div class="form-group">
								<u><?= $Lang->get('USER__PROFILE_FORM_IMG') ?> :</u><br>

								- <?= $Lang->get('USER__IMG_UPLOAD_TYPE_PNG') ?><br>
								- <?= str_replace('{PIXELS}', $cape_width_max, $Lang->get('USER__IMG_UPLOAD_WIDTH_MAX'))
								?><br>
								- <?= str_replace('{PIXELS}', $cape_height_max, $Lang->
								get('USER__IMG_UPLOAD_HEIGHT_MAX')) ?><br>
							</div>
						</form>
						<?php } ?>
					</div>
					<div class="card-footer">
					</div>
				</div>
			</div>
			<?php if($EyPlugin->isInstalled('kenshimdev.xenbridge')) { ?>
			<div class="col-lg-12">
				<div class="card h-100">
					<div class="card-header title"><h3><?= $Lang->get('XENBRIDGE_STATS_FORUM') ?></h3>
					</div>
					<div class="card-body">
					<?= $Module->loadModules('user_profile_forum') ?>
					</div>
					<div class="card-footer">
					
					</div>
				</div>
			</div>
			<?php } ?>

			<?php if($EyPlugin->isInstalled('eywek.shop')) { ?>
			<div class="col-lg-12">
				<div class="card h-100">
					<div class="card-header title"><h3><?= $Lang->get('SHOP__HISTORY_PURCHASES') ?></h3>
					</div>
					<div style="margin-bottom: -1rem;">
						<table class="table table-bordered" id="users">
							<thead>
							<tr>
								<th><?= $Lang->get('DASHBOARD__PURCHASES') ?> ID</th>
								<th><?= $Lang->get('GLOBAL__CREATED') ?></th>
								<th><?= $Lang->get('SHOP__ITEM_PRICE') ?></th>
								<th class="right"><?= $Lang->get('SHOP__ITEMS') ?></th>
							</tr>
							</thead>
							<tbody>
							<?php
						foreach ($histories as $value) { ?>
							<tr>
								<td><?= $value["ItemsBuyHistory"]["id"] ?></td>
								<td><?= $value["ItemsBuyHistory"]["created"] ?></td>
								<td><?= $value["Item"]["price"] ?></td>
								<td><?= $value["Item"]["name"] ?></td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php } ?>
			
		</div>
</section>
