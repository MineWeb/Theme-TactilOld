<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <a class="btn btn-large btn-block btn-success" href="<?= $this->Html->url(array('controller' => 'staff', 'action' => 'add', 'admin' => true, 'plugin' => 'staff')) ?>"><?= $Lang->get('STAFF__ADD_STAFF'); ?></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('STAFF__LIST'); ?></h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered dataTable">
                        <thead>
                        <tr>
                            <th><?= $Lang->get('GLOBAL__NAME') ?></th>
                            <th><?= $Lang->get('STAFF__ORDER'); ?></th>
                            <th class="right"><?= $Lang->get('GLOBAL__ACTIONS') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($staffs as $staff): ?>
                                <tr>
                                    <td><?= $staff['Staff']['username'] ?></td>
                                    <td><?= $staff['Staff']['order']; ?></td>
                                    <td class="right">
                                        <a href="<?= $this->Html->url(array('controller' => 'staff', 'action' => 'edit/'.$staff['Staff']['id'], 'admin' => true, 'plugin' => 'staff')) ?>" class="btn btn-info"><?= $Lang->get('GLOBAL__EDIT') ?></a>
                                        <a onClick="confirmDel('<?= $this->Html->url(array('controller' => 'staff', 'action' => 'delete/'.$staff['Staff']['id'], 'admin' => true, 'plugin' => 'staff')) ?>')" class="btn btn-danger"><?= $Lang->get('GLOBAL__DELETE') ?></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>