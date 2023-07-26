<?= $this->extend('/layout/template');  ?>

<?= $this->section('content'); ?>
<style>
    .header-room{
        cursor: pointer;
    }
</style>
<div class="page-body">
    <div class="container-fluid dashboard-default-sec">
        <div class="subjudul m-b-20">
            <h3>Master User</h3>
        </div>

        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <button type="button" onclick='add()' class="btn btn-primary btn-sm">
                            <i class="bx bx-file"></i>Import
                        </button>

                        <a type="button" onclick='add()' class="btn btn-primary btn-sm">
                            <i class="bx bx-plus"></i>Add
                        </a>
                        <br>
                        <br>
                        <table class="table m-b-10 text-center" id="tabel_user">
                            <thead class="">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nik</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $key) { ?>
                                    <?php 
                                          $db      = \Config\Database::connect();
                                          $cols =  $db->table('master_user')->where('kewarganegaraan =', $key->id_kewarganegaraan);
                                          $querys = $cols->get()->getResult();
                                    ?>
                                    <tr>
                                       <td colspan="7" class="header-room" data-id="<?= $key->id_kewarganegaraan ?>" style="text-align:left; background-color:#80808036">
                                       <div class="d-flex justify-content-between"><?= $key->code_negara ?> <?=  $key->nama_negara ?> <i style="font-size:20px" class="fa fa-angle-down" aria-hidden="true"></i></div>
                                       </td> 
                                        <?php $no=1; foreach($querys as $item) {?>
                                            <!-- <div > -->
                                            <tr class="child-room-<?= $key->id_kewarganegaraan ?>">
                                                <td>
                                                    <?= $no++ ?>
                                                </td>
                                                <td>
                                                    <?= $item->nama ?>
                                                </td>
                                                <td>
                                                    <?= $item->nik ?>
                                                </td>
                                                <td>
                                                    <?= $item->alamat ?>
                                                </td>
                                                <td>
                                                    <?php if($item->status == 1):?>
                                                        <span class="text-success">Active</span>
                                                    <?php else:?>
                                                        <span class="text-danger">In Active</span>
                                                    <?php endif?>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary">Edit</button>
                                                </td>
                                            </tr>
                                            <!-- </div> -->
                                        <?php }?>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal_form" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-custom-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-footer no-margin-top">

                    <button class="btn btn-sm" data-dismiss="modal" id="tutup-modal">
                        <i class="ace-icon fa fa-times"></i>
                        Cancel
                    </button>

                    <button class="btn btn-sm btn-primary" id="btnSave">
                        <i class="ace-icon fa fa-check"></i>
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>