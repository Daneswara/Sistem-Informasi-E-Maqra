<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('asset/adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('nama'); ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu User</li>
            <li class="#">
                <a href="<?php echo base_url() ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('dashboard1') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="<?php echo site_url('dashboard2') ?>"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/User') ?>">
                    <i class="fa fa-files-o"></i>
                    <span>Identitas</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/Peserta') ?>">
                    <i class="fa fa-pie-chart"></i>
                    <span>Peserta</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/NomerUrut') ?>">
                    <i class="fa fa-laptop"></i>
                    <span>Ambil Nomor Urut</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/NomerUrut') ?>">
                    <i class="fa fa-laptop"></i> <span>Ambil Maqra</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-laptop"></i> <span>Ambil Tema</span>
                </a>
            </li>
        </ul>

    </section>

    <!-- /.sidebar -->
</aside>
<!-- <style>
    .sidebar-mini {
        background-color: black;
    }
</style> -->
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <script>
        $('.sidebar').particleground({
            dotColor: '#fff',
            lineColor: '#555555',
            particleRadius: 6,
            curveLines: true,
            density: 10000,
            proximity: 110
        });;
        $(".home-slides").vegas({
            transition: 'fade',
            transitionDuration: 2500,
            delay: 5000,
            slides: [{
                    src: "<?php echo base_url(); ?>surat/themes10.jpg"
                },
                {
                    src: "<?php echo base_url(); ?>surat/imagges.jpeg"
                },
                {
                    src: "<?php echo base_url(); ?>surat/LogoARP.png"
                }
            ]
        });
    </script>
    <style type="text/css">
        .sidebar {
            background: #f9fafc;
            overflow: hidden;

        }

        .sidebar .pg-canvas {
            position: absolute;
            top: 0;
            left: 0;
            height: 100% !important;
            width: 100% !important;
            opacity: .52;
        }

        .sidebar .shadow-overlay {
            background: #d2d6de;
            display: none;
        }

       
    </style>