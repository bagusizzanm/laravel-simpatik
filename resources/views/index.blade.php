<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMPATIK | </title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="js/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="js/apexcharts/apexcharts.css">
    <link rel="stylesheet" href="css/iconly/bold.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="/js/chartjs/Chart.min.css">
    <script src="js/pages/dashboard.js"></script>
    <script src="js/icons/fa-6.0.0-all.min.js"></script>
    <script src="js/icons/feather.min.js"></script>

    <style>
        table.dataTable td{
            padding: 15px 8px;
        }
    </style>

</head>
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper shadow-sm active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="/"><img src="" alt="">SIMPATIK</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title text-dark">Menu</li>
                        
                        <li class="sidebar-item active">
                            <a href="/" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/wisata" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Wisata Tersedia</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/transaksi" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/datapelanggan" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Data Pelanggan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/logtransaksi" class='sidebar-link'>
                                <i class="bi bi-handbag-fill"></i>
                                <span>Log Transaksi</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        {{-- Main / Content --}}
        <div id="main">
            @yield('content')
            
        </div>
    </div>

    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-datatables/jquery.dataTables.min.js"></script>
    <script src="js/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
    <script src="js/pages/ui-chartjs.js"></script>
    <script src="js/chartjs/Chart.min.js"></script>
    {{-- <script src="js/apexcharts/apexcharts.js"></script> --}}
    <script src="js/mazer.js"></script>
    <script src="js/jquery-datatables/jquery.dataTables.bootstrap5.min.js"></script>
    
    <script>
        // Jquery Datatable
        let jquery_datatable = $("#table1").DataTable()
    </script>

</body>
</html>