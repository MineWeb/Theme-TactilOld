
<section id="plugins">
    <div class="shop-up" style="background: url(/theme/Tactil/img/slider.png) no-repeat ;">
        <div class="container">
            <div class="row">
                <div class="box-center">
                    <div class="title">
                    <?= $Lang->get("PARTENAIRE"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
      <div class="container">
            <!-- Partie Youtube -->
            <?php if ($ytb): ?>
                <div class="row">
                    <h2>Nos partenaires Youtube</h2>
                </div>
                <hr />

                <div class="row">
                    <?php foreach ($partenaire as $p): ?>
                        <?php if ($p['Partenaire']['type'] == 'Y') { ?>
                            <div class="card" style="opacity: 1;">
                                <div class="text-center"><h3 class="card-header"><?= $p['Partenaire']['pseudo']; ?></h3></div>
                                
                                <div class='card-body'>
                                    <div class="g-ytsubscribe" data-channel="<?= $p['Partenaire']['channel']; ?>" data-channelid="<?= $p['Partenaire']['channel']; ?>" data-layout="full" data-count="default"></div>
                                </div>
                                <div class='card-footer'>
                                    <p><?= $p['Partenaire']['desc']; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Partie Twitter -->
            <?php if ($twt): ?>
            <hr />
                <div class="row">
                    <h2>Nos partenaires Twitter</h2>
                </div>
                <hr/>

                <div class="row">
                    <?php foreach ($partenaire as $p): ?>
                        <?php if ($p['Partenaire']['type'] == 'T') { ?>
                            <div class="card" style="opacity: 1;">
                                <div class="text-center"><h3 class="card-header"><?= $p['Partenaire']['pseudo']; ?></h3></div>
                                <div class='card-body'>
                                    <a class="twitter-follow-button" href="https://twitter.com/<?= $p['Partenaire']['channel']; ?>" data-size="large"></a>
                                </div>
                                <div class='card-footer'>
                                    <p><?= $p['Partenaire']['desc']; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Partie Facebook -->
            <?php if ($fb): ?>
                <hr />
                <div class="row">
                    <h2>Nos partenaires Facebook</h2>
                </div>
                <hr />

                <div class="row">
                    <?php foreach ($partenaire as $p): ?>
                        <?php if ($p['Partenaire']['type'] == 'F') { ?>
                            <div class="card" style="opacity: 1;">
                                <div class="text-center"><h3 class="card-header"><?= $p['Partenaire']['pseudo']; ?></h3></div>
                                <div class='card-body'>
                                    <div class="fb-follow" data-href="https://www.facebook.com/<?= $p['Partenaire']['channel']; ?>" data-layout="standard" data-size="small" data-show-faces="true">
                                    </div>
                                </div>
                                <div class='card-footer'>
                                    <p><?= $p['Partenaire']['desc']; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Partie Autre -->
            <?php if ($atr): ?>
                <hr />
                <div class="row">
                    <h2>Nos autres partenaires</h2>
                </div>
                <hr />
                <div class="row">
                    <?php foreach ($partenaire as $p): ?>
                        <?php if ($p['Partenaire']['type'] == 'A') { ?>
                            <div class="card" style="opacity: 1;">
                                <div class="text-center"><h3 class="card-header"><?= $p['Partenaire']['pseudo']; ?></h3></div>
                                <div class='card-body'>
                                    <a href="<?= $p['Partenaire']['channel']; ?>" class="btn btn-danger">Voir le lien</a>
                                </div>
                                <div class='card-footer'>
                                    <p><?= $p['Partenaire']['desc']; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
           <?php endif; ?>
        </div>
    </div>
</section>

<!-- Google api -->
<script src="https://apis.google.com/js/platform.js"></script>

<!-- FaceBook api -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

<!-- Twitter api -->
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
