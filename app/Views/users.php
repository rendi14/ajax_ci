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
                        <table class="table m-b-10" id="tabel_user">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Kode Negara</th>
                                    <th>Nama</th>
                                    <th>Nik</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
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

<?= $this->section('pushScript') ?>
<script>
$(document).ready(function() {
    const table = $('#tabel_user').DataTable({
        "processing": true,
        "serverSide": true,
        "language": {
            'loadingRecords': '&nbsp;',
            'processing': '<div class="dtspinner"></div>'
        },     
        "ajax": {
            "type": 'GET',
            "url": '/'
        },
        "order": [],
        "columns": [
            {'data': 'nomor', orderable: false},
            {'data': 'grouped', orderable: false},
            {'data': 'nama', orderable: false},
            {'data': 'nik', orderable: false},
            {'data': 'alamat', orderable: false},
            {'data': 'status', orderable: false},
            {'data': 'action', orderable: false},
        ],
        "columnDefs": [
            { "visible": false, "targets": 1 },
        ],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            let api = this.api();
            let rows = api.rows( {page:'current'} ).nodes();
            let last=null;
          
            api.column(1, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    const target = group.split(' ');
                    const button = `<span class="collapse-up-down"><i class='fa fa-angle-down'></i></span>`
                    
                    const actived = i == 0 ? 'panel-actived' : 'panel-disactived';
                    $(rows).eq( i ).before(
                        '<tr data-target="'+target[0]+'" class="group cursor-pointer '+ actived +'"><td colspan="7" class="bg-light">'+group+' '+ button +'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        },
        "createdRow": function (row, data, index) {
            $( row ).addClass(data.code_negara)
        }
    });

    table.on('page.dt', function () { 
        const info = table.page.info();
        
        if(info.pages > 1) {
            table.on('draw.dt', function() {
                redrawTable()
            })
        }
    })

    redrawTable = () => {
        setTimeout(() => { hidePanel() }, 1000);
    }

    redrawTable();
    
    const hidePanel = () => {
        $('.panel-disactived').each(function() {
            const disactived = $(this).data('target');
            $(`.${disactived}`).hide()
        })
        
    }

    groupColumn = 1;
    $('#tabel_user tbody').on('click', 'tr.group', function () {
        const isDisActived = $(this).hasClass('panel-disactived')
        if(isDisActived) {
            $(this)
                .addClass('panel-actived')
                .removeClass('panel-disactived');

            const target = $(this).data('target');
            $(`.${target}`).show()

        }else{
            $(this)
                .addClass('panel-disactived')
                .removeClass('panel-actived');

            const target = $(this).data('target');
            $(`.${target}`).hide()
        }
    });
});
</script>
<?= $this->endSection() ?>