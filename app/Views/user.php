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
                            <?php 
                            foreach ($users as $user) { 
                                
                            ?>
                                <tr>
                                   <td colspan="7" class="header-room" data-id="<?= $user->kewarganegaraan ?>" style="text-align:left; background-color:#80808036">
                                   <div class="d-flex justify-content-between"><?= $user->code_negara ?> <?=  $user->nama_negara ?> <i style="font-size:20px" class="fa fa-angle-down" aria-hidden="true"></i></div>
                                   </td> 
                                        <!-- <div > -->
                                        <tr class="child-room-<?= $user->kewarganegaraan ?>">
                                            <td><?= $no++ ?></td>
                                            <td><?= $user->nama ?></td>
                                            <td><?= $user->nik ?></td>
                                            <td><?= $user->alamat ?></td>
                                            <td>
                                                <?= ($user->status == 1) ? '<span class="text-success">Active</span>' : '<span class="text-danger">In Active</span>' ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary">Edit</button>
                                            </td>
                                        </tr>
                                        <!-- </div> -->
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