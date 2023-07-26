<!-- alert -->
<script src="../Assets/Vendor/Js/alert/dist/sweetalert2.js"></script>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- <script src="../Assets/Vendor/Js/jquery-3.5.1.min.js"></script> -->

<!-- Boxicon -->
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<!-- Father Icon -->
<script src="../Assets/Vendor/Js/feather-icon/feather.min.js"></script>
<script src="../Assets/Vendor/Js/feather-icon/feather-icon.js"></script>

<!-- Bootstrap js-->
<script src="../Assets/Vendor/Js/bootstrap/popper.min.js"></script>
<script src="../Assets/Vendor/Js/bootstrap/bootstrap.min.js"></script>

<!-- Sidebar jquery-->
<script src="../Assets/Vendor/Js/sidebar-menu.js"></script>

<!-- Datatabel -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<!-- <script src="/leaflet/leaflet.js"></script> -->
<!-- <link rel="stylesheet" href="/leaflet/leaflet.css" /> -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Main Js -->
<script src="../Assets/Js/Main.js"></script>



<script>
    $(function() {
        <?php if (session()->has("success")) { ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '<?= session("success") ?>'
            })
        <?php } ?>
    });
</script>

<script>
    $(function() {

        <?php if (session()->has("error")) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '<?= session("error") ?>'
            })
        <?php } ?>
    });
</script>

<script>
    $(function() {

        <?php if (session()->has("warning")) { ?>
            Swal.fire({
                icon: 'warning',
                title: 'Warning!',
                text: '<?= session("warning") ?>'
            })
        <?php } ?>
    });
</script>


<script>
    $(function() {

        <?php if (session()->has("info")) { ?>
            Swal.fire({
                icon: 'info',
                title: 'Hi!',
                text: '<?= session("info") ?>'
            })
        <?php } ?>
    });
</script>
<!-- <script type="text/javascript" src="/leaflet/prov.js"></script> -->
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();

        fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
            .then(response => response.json())
            .then(provinces => {
                $('.bs-province').empty().append('<option disabled selected>Pilih Provinsi</option>');
                for (var i = 0; i < provinces.length; i++) {
                    var content = '';
                    content += '<option data-id="' + provinces[i].id + '" value="' + provinces[i].name + '">' + provinces[i].name + '</option>';
                    $('.bs-province').append(content);
                }
            });
    });

    function changeProvinceBc() {
        var id = $(".bs-province option:selected").attr("data-id");

        // ID Provinsi NUSA TENGGARA BARAT = 52
        fetch('https://www.emsifa.com/api-wilayah-indonesia/api/regencies/' + id + '.json')
            .then(response => response.json())
            .then(regencies => {
                // console.log(regencies);
                $('.bs-kabupaten').empty().append('<option disabled selected>Pilih Kabupaten</option>');
                for (var i = 0; i < regencies.length; i++) {
                    var content = '';
                    content += '<option data-id="' + regencies[i].id + '" value="' + regencies[i].name + '">' + regencies[i].name + '</option>';
                    $('.bs-kabupaten').append(content);
                }
            });
    }
</script>
<!-- <script src="/Assets/Js/shift_maps.js"></script> -->
<!-- end alert -->
<script>
    // UNTUK JUDUL JUMLAH DATA FOOT PRINT TAHUN DI DASHBOARD
    // const selectElement = document.getElementById("tahuntotalfootprint");
    // const textElement = document.getElementById("juduljumlahdigitalfootprint");

    // selectElement.addEventListener("change", () => {
    //     const selectedValue = selectElement.value;
    //     textElement.textContent = `Jumlah Digital Footprint Tahun ${selectedValue}`;
    // });
</script>

<!-- notif -->

<script>
    $(document).ready(function() {
        // var customMessage = "Sedang Memuat Data";

        // var customOptions = {
        //     type: "success",
        //     delay: 5000,
        //     showProgressbar: true,
        //     icon: "fa-check-circle",
        //     allow_duplicates: false
        // };

        // $.notify({
        //     message: customMessage
        // }, customOptions);
    });
</script>
<script>
    function add() {
        $('#modal_form').modal('show');
    }

    // function dataDevice() {
    //     let table = $('#tabel_user').DataTable({
    //         'processing': true,
    //         'serverSide': true,
    //         'order': [],
    //         'ajax': {
    //             'url': '<?= base_url('Home/ajax_list') ?>',
    //             'type': 'POST',
    //             error: function(xhr, ajaxOptions, thrownError) {
    //                 $('#error_message').html(
    //                     `<strong>${xhr.status + ' ' + thrownError}</strong>
    //                 <br>
    //                 <div class="card mt-2">
    //                     <div class="card-body">
    //                         ${xhr.responseText}
    //                     </div>
    //                 </div>`
    //                 );
    //                 $('#error_modal').modal('show');
    //                 $('.view-data').html(
    //                     `<div style="color:black;" class="card bg-light">
    //                     <div class="card-body">
    //                         <a href="#" id="btn_refreshdata"><i class="fas fa-sync"></i> Refresh</a>
    //                         <hr>
    //                         Terjadi Kesalahan (<strong>${xhr.status + ' ' + thrownError}</strong>)
    //                     </div>
    //                 </div>`
    //                 );
    //             },
    //         },
    //         //optional
    //         'columnDefs': [{
    //             'targets': 0,
    //             'orderable': false,
    //         }, ]
    //     })
    // }


    // function table()
    // {
    //     $.ajax({
    //         type: "post",
    //         url: "Home/list",
    //         data: "data",
    //         dataType: "json",
    //         success: function (response) {
    //             // console.log(response);
    //             $('tbody').html(response);
    //         }
    //     });
    // }
    // Ketika document sudah ready
    $(document).ready(function() {
        $('.header-room').click(function(){
            $('.child-room-'+$(this).attr('data-id')).toggleClass('d-block').toggleClass('d-none');
            $(this).find('i').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
            // $(this).parent().find('.child-room').remove();
            // $(this).next().fadeOut(300);
            // console.log($(this).next());
            // alert($('.child-room-'+$(this).attr('data-id')).text());
        })
        // dataDevice();
        // table();
        // $('td').attr('colspan', 7);
    })
</script>