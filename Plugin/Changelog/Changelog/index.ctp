<section id="plugins">
    <div class="shop-up" style="background: url(/theme/Tactil/img/slider.png) no-repeat ;">
            <div class="container">
                <div class="row">
                    <div class="box-center">
                        <div class="title">
                        <?= $Lang->get("Changelogs"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
      <div class="row">

        <table class="table table-striped">
          <thead>
            <tr>
              <th><?= $Lang->get("TABLE_HEAD_LEVEL"); ?></th>
              <th><?= $Lang->get("TABLE_HEAD_DATE"); ?></th>
              <th><?= $Lang->get("TABLE_HEAD_AUTHOR"); ?></th>
              <th><?= $Lang->get("TABLE_HEAD_COMMENT"); ?></th>
            </tr>
          </thead>

          <tbody>
            <?php foreach($changelogs as $changlog){ ?>
            <tr>
              <td style="font-size:18px;">

              <?php
              $level = $changlog['Changelogs']['level'];
              if($level == 1){
                echo '<span class="badge badge-info" style="padding:8px;"><i class="fa fa-info-circle"></i> INFORMATION</span>';
              }else if($level == 2){
                echo '<span class="badge badge-warning" style="padding:8px;"><i class=" fa fa-warning"></i> ATTENTION</span>';
              }else if($level == 3){
                echo '<span class="badge badge-danger" style="padding:8px;"><i class="fa fa-warning"></i> IMPORTANT</span>';
              }else{
                echo '<span class="badge badge-success" style="padding:8px;"><i class="fa fa-retweet"></i> MISE À JOUR</span>';
              }
              ?>

              </td>
              <td ><?= date("d-m-Y H:i:s", strtotime($changlog['Changelogs']['created'])); ?></td>
              <td><?= $changlog['Changelogs']['author']; ?></td>
              <td><?= $changlog['Changelogs']['description']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>

        </div>
    </div>
</section>
