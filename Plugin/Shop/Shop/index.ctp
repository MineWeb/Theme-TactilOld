<section id="boutique">
<?= $this->Html->script('jquery.filterizr.min.js') ?>
<script >
$(document).ready(function() {
  

  var filterizd = $('.filtr-container').filterizr();
});
</script>
	<div class="shop-up" style="background: url(/theme/Tactil/img/slider.png) no-repeat ;">
		<div class="container">
			<div class="row">
				<div class="box-center">
					<div class="title">
					Boutique
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3 shop-profil">
				<div class="card">
					<div class="panel-categories">
						<div class="text-center"><h3 class="card-header">Catégories</h3></div>
						<div class="card-body">
							<?php
							$i = 0;
							foreach ($search_categories as $k => $v) {
								$i++;
								?>
								<button class="btn btn-block btn-secondary" data-filter="<?= before_display($v['Category']['id']) ?>"><?= before_display($v['Category']['name']) ?></button>
							<?php } ?>
						</div>
					</div>
					<div class="card-footer">
						<div class="panel-heading text-center"><h3>Compte</h3></div><hr>
							<?php if($isConnected) { ?>
							<button style="opacity: 1;" class="btn btn-block categories disabled">Vous
								avez <?= ($isConnected) ? $money.' '.$Configuration->getMoneyName() : $Lang->get('SHOP__TITLE');
								?>
							</button>
							<?php if($Permissions->can('CREDIT_ACCOUNT')) { ?>
							<a href="#" data-toggle="modal" data-target="#addmoney"
							   class="btn btn-secondary btn-block"><?= $Lang->get('SHOP__ADD_MONEY') ?></a>
							<?php } ?>
							<a href="#" data-toggle="modal" data-target="#cart-modal"
							   class="btn  btn-danger btn-block"><?= $Lang->get('SHOP__BUY_CART') ?></a>
							<?php if (!empty($vagoal)) {?>
								<hr>
								<div class="panel-heading text-center"><h3><b><?= $Lang->get('SHOP__CONFIG_GOAL_TITLE') ?></b></h3></div>
								<div class="progress">
									<div class="progress-bar-danger bg-info text-center" role="progressbar" style="<?= $vawidth ?>%">
										<b><?= $vawidth ?>%</b>
									</div>
								</div>
								<hr>
							<?php } ?>
							<?php } else { ?>
							<button style="opacity: 1;" class="btn btn-block categories disabled">Vous êtes déconnecté.</button>
							<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-12"><?= $vouchers->get_vouchers() // Les promotions en cours ?>
					</div>
				</div>

				<div class="row filtr-container">	
				<?php 
				  $col = 4;
				  $i = 0;
				  foreach ($search_items as $k => $v) {
					  $i++;
				  ?>
				<div class="col-sm-<?= $col ?> col-lg-<?= $col ?> col-md-<?= $col ?> filtr-item" data-category="<?= $v['Item']['category'] ?>">
					<div class="thumbnail" style="height:200px;width:200px;">
						<div class="caption">
							<h4 style="color: black; text-align: center; font-family: 'Francois One', sans-serif;"><i
									class="fa fa-angle-down"></i> <?= before_display($v['Item']['name']) ?> <i
									class="fa fa-angle-down"></i></h4>
						</div>
						<?php if(isset($v['Item']['img_url'])) { ?><img width="200px;" height="200px" src="<?php if(!empty($v['Item']['img_url'])) echo $v['Item']['img_url']; else 'http://via.placeholder.com/200x200'; ?>"><?php } ?>
						<?php if(('CAN_BUY')) { ?>
						<button style="border-radius: 0px;" class="btn items btn-block pull-right display-item"
								data-item-id="<?= $v['Item']['id'] ?>"><?= $Lang->get('SHOP__BUY') ?>
							- <?= $v['Item']['price'] ?><?php if($v['Item']['price'] == 1) { echo  ' '.$singular_money; } else { echo  ' '.$plural_money; } ?></button>
						<?php } ?>
					</div>
				</div>
				
				


				<?php } ?>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
    var LOADING_MSG = '<?= $Lang->get('GLOBAL__LOADING') ?>';
    var ADDED_TO_CART_MSG = '<?= $Lang->get('SHOP__BUY_ADDED_TO_CART') ?> <i class="fa fa-check"></i>';
    var CART_EMPTY_MSG = '<?= $Lang->get('SHOP__BUY_CART_EMPTY') ?>';
    var ITEM_GET_URL = '<?= $this->Html->url(array('controller' => 'shop/ajax_get', 'plugin' => 'shop')); ?>/';
    var VOUCHER_CHECK_URL = '<?= $this->Html->url(array('action' => 'checkVoucher')) ?>/';
    var BUY_URL = '<?= $this->Html->url(array('action' => 'buy_ajax')) ?>';

    var CART_ITEM_NAME_MSG = '<?= $Lang->get('SHOP__ITEM_NAME') ?>';
    var CART_ITEM_PRICE_MSG = '<?= $Lang->get('SHOP__ITEM_PRICE') ?>';
    var CART_ITEM_QUANTITY_MSG = '<?= $Lang->get('SHOP__ITEM_QUANTITY') ?>';
    var CART_ACTIONS_MSG = '<?= $Lang->get('GLOBAL__ACTIONS') ?>';

    var CSRF_TOKEN = '<?= $csrfToken ?>';
</script>
<?= $this->Html->script('Shop.jquery.cookie') ?>
<?= $this->Html->script('Shop.shop') ?>
<?= $this->Html->script('Shop.jquery.bootstrap-touchspin.js') ?>
<div class="modal fade" id="buy-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" id="boutique">
    <div class="modal-content">
      <div class="card-header">
        <button type="button" class="close" data-dismiss="modal"><i style="color:white" class="fa fa-window-minimize "></i><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><?= $Lang->get('SHOP__BUY_CONFIRM') ?></h4>
      </div>

      <div class="modal-body">
	  </div>
    </div>
  </div>
</div>
<div class="modal fade" id="cart-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" id="boutique">
		<div class="modal-content">
			<div class="card-header">
				<button type="button" class="close" data-dismiss="modal"><i style="color:white" class="fa fa-window-minimize "></i><span
						class="sr-only">Close</span></button>
				<h4 class="modal-title"><?= $Lang->get('SHOP__BUY_CART') ?></h4>
			</div>
			<div class="modal-body">
			</div>
			<div class="card-footer">
				<div class="pull-left">
					<input name="cart-voucher" type="text" class="form-control" autocomplete="off" id="cart-voucher"
						   style="width:245px;" placeholder="<?= $Lang->get('SHOP__BUY_VOUCHER_ASK') ?>">
				</div>
				<button class="btn disabled"><?= $Lang->get('SHOP__ITEM_TOTAL') ?> : <span
						id="cart-total-price">0</span>  <?= $Configuration->getMoneyName() ?>
				</button>
				<button type="button" class="btn btn-success" id="buy-cart"><?= $Lang->get('SHOP__BUY') ?></button>
			</div>
		</div>
	</div>
</div>
<?= $this->element('payments_modal') ?>
