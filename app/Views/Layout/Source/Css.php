       <!-- Loader starts-->
       <div class="loader-wrapper">
           <div class="theme-loader">
               <div class="loader-p"></div>
           </div>
       </div>
       <!-- Loader ends -->

       <!-- Google font-->
       <link rel="preconnect" href="https://fonts.gstatic.com" />
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

       <!-- Bootstrap css-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
       <!--<link rel="stylesheet" type="text/css" href="../Assets/Vendor/Css/bootstrap.css" />-->

       <!-- font awasome -->
       <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

       <!-- alert -->
       <link href="../Assets/Vendor/Js/alert/dist/sweetalert2.css" rel="stylesheet">

       <!-- Boxicon -->
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

       <!-- Father Icon -->
       <link href="../Assets/Vendor/Css/feather-icon.css" rel="stylesheet">

       <!-- Data Table -->
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

       <!-- App css -->
       <link rel="stylesheet" href="<?= base_url('Assets/Css/Style.css') ?>" />

       <!-- Responsive App css -->
       <link rel="stylesheet" href="<?= base_url('Assets/Css/responsive.css') ?>" />

       <!-- Chart -->
       <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
       <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
       <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

       <!-- jquery -->
       <script src="../Assets/vendor/js/jquery.min.js"></script>

       <style>
           #maps {
               /* Set rules to fill background */
               height: 500px;
               width: inherit !important;
               z-index: 10;
               /* Set up positioning */
           }

           .card-view-detail {
               position: absolute !important;
               /* bottom: 100% !important; */
               width: 300px;
               bottom: 10px;
               left: 8%;
               display: none;
               z-index: 99 !important;
               background-color: white !important;
           }

           .in-detail {
               text-align: left !important;
               font-size: 12px !important;
               text-transform: uppercase !important;
               border-bottom: 1px solid gray !important;
               border-top: 1px solid gray !important;
               margin-bottom: 5px !important;
               padding-top: 5px !important;
               display: flex !important;
               padding-bottom: 5px !important;
           }

           .accordion-body {
               text-align: left;
           }

           .detail-maps {
               max-height: 350px !important;
               overflow: auto;
           }

           .title-province {
               font-size: 14px !important;
           }

           .option-maps {
               position: absolute;
               top: 10%;
               right: 5%;
               width: 100px;
               height: 100px;
               z-index: 88;
           }

           .count-applicant {
               color: black !important;
               text-align: left !important;
           }

           .loading-maps {
               width: 100% !important;
               background-color: white !important;
               height: 100% !important;
               z-index: 70 !important;
               position: absolute !important;
               top: 0 !important;
           }

           .loading-text-maps {
               position: absolute;
               top: 40%;
               left: 40%;
               width: 100%;
           }

           .main-nav {
               z-index: 999 !important;
           }
       </style>