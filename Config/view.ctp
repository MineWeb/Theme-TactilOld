<?php
$form_input = array('title' => 'Envoyer votre image');

if(isset($config['logo']) && $config['logo']) {
$form_input['img'] = $config['logo'];
$form_input['filename'] = 'theme_logo.png';
}

echo $this->Html->script('admin/tinymce/tinymce.min.js');

?>
<style>
	.dropd-menu {
		font-size: 14px;
		text-align: center;
		height: 80px;

	}

	.title-drop {
		color: black;
		text-decoration: none;
		display: block;
		height: 40px;
		padding: 8px;
		border: 1px solid black;
	}

	.title-drop:hover {
		color: white;
	}

	.dropd-menu:hover {
		background-color: #337ab7;
	}
</style>
<section class="content">
	<div class="row">
		<form method="post" enctype="multipart/form-data" data-ajax="false">
			<div class="col-md-12">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#config-accueil" data-toggle="tab">Accueil</a></li>
						<li class="dropdown">
							<a href="#" style="cursor:pointer" class="nav-link js-scroll-trigger" data-toggle="dropdown"
							   role="button"
							   aria-expanded="false">Plugins <i class="fa fa-angle-down"></i></a>
							<ul style="text-align: left;padding: 0px;" class="dropdown-menu" role="menu">
								<a class="title-drop dropd-menu" href="#config-votes" data-toggle="tab">Votes</a></ul>
						</li>
						<li><a href="#config-bug" data-toggle="tab">Bugs ?</a></li>
					</ul>
					<div class="tab-content" style="padding: 15px;">
						<div class="tab-pane active" id="config-accueil">
							<div class="row">
								<div class="box-body" style="">

									<div class="form-group">
										<label>IP du serveur</label>
										<p>Entrez l'ip du serveur.</p>
										<input type="text" value="<?= $config['accueil']->ip ?>"
											   placeholder="Play.mineweb.com" class="form-control"
											   name="accueil[ip]" cols="30" rows="10">
									</div>
									
									<div class="form-group">
										<label>Bannière</label>
										<p>Télécharger votre bannière.</p>
										<?= $this->element('form.input.upload.img', $form_input) ?>
									</div>
									<div class="form-group">
										<label>Favicon du site</label>
										<p>Entrez l'url du Favicon.</p>
										<input type="text" value="<?= $config['accueil']->favicon ?>"
											   placeholder="Favicon url" class="form-control"
											   name="accueil[favicon]" cols="30" rows="10">
									</div>
									<div class="form-group">
										<label>Slider</label>
										<div class="col-md-12">
											<p>Titre</p>
											<input type="text" value="<?= $config['accueil']->slider->titre ?>"
												   placeholder="Titre" class="form-control"
												   name="accueil[slider][titre]" cols="30" rows="10">
											<p>Description</p>
											<input type="text" value="<?= $config['accueil']->slider->desc ?>"
												   placeholder="Description" class="form-control"
												   name="accueil[slider][desc]" cols="30" rows="10">
										</div>
									</div>
									<div class="form-group">
										<label>Section (milieu de la page)</label>
										<div class="col-md-12">
											<p>Image</p>
											<input type="text" value="<?= $config['accueil']->section->img ?>"
												   placeholder="Image" class="form-control"
												   name="accueil[section][img]" cols="30" rows="10">
											<p>Titre</p>
											<input type="text" value="<?= $config['accueil']->section->titre ?>"
												   placeholder="Titre" class="form-control"
												   name="accueil[section][titre]" cols="30" rows="10">
											<p>Description</p>
											<input type="text" value="<?= $config['accueil']->section->desc ?>"
												   placeholder="Description" class="form-control"
												   name="accueil[section][desc]" cols="30" rows="10">
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<hr>
									<input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
									<button class="btn btn-success" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?>
									</button>
									<a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
									   type="button"
									   class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
								</div>

							</div>
						</div>
						<div class="tab-pane" id="config-bug">
							<div class="row">
								<div class="box-body" style="">
									<div class="form-group">
										<label>Vous voulez signaler un bug ou une demande d'ajout sur le thème ?</label>
										<p>Je suis prèsent sur le discord de <a href="https://discordapp.com/invite/3QYdt8r">mineweb</a> avec comme pseudo <a style="color:red">nivcoo#6882</a>.</p>
									</div>
								</div>
							</div>

						</div>
						
						<div class="tab-pane" id="config-votes">
							<div class="row">
								<div class="box-body" style="">
									<div class="form-group">
										<label>Votes</label>
										<p>Editez les récompenses affichées des 3 premiers top voteurs.</p>
										<div class="form-group">
											<label>Récompense 1</label>
											<input type="text" class="form-control" name="votes[un]" placeholder="Titre"
												   value="<?= $config['votes']->un ?>">
										</div>
										<div class="form-group">
											<label>Récompense 2</label>
											<input type="text" class="form-control" name="votes[deux]"
												   placeholder="Titre" value="<?= $config['votes']->deux ?>">
										</div>
										<div class="form-group">
											<label>Récompense 3</label>
											<input type="text" class="form-control" name="votes[trois]"
												   placeholder="Titre" value="<?= $config['votes']->trois ?>">
										</div>
										<div class="col-md-12">
											<hr>
											<input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
											<button class="btn btn-success" type="submit"><?= $Lang->
												get('GLOBAL__SUBMIT') ?>
											</button>
											<a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>"
											   type="button"
											   class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
		</form>
	</div>
</section>
