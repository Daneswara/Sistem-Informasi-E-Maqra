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
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-dashboard"></i> <span>Acara</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/general.html"><i
                                    class="fa fa-circle-o"></i> Hifzil Qur'an</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/advanced.html"><i
                                    class="fa fa-circle-o"></i> Tilawah</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/editors.html"><i
                                    class="fa fa-circle-o"></i> Fahmil</a></li>
                </ul>
            </li>


            <li>
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-laptop"></i>
                    <span>Daerah</span>
                    <span class="pull-right-container"/>
                </a>

            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/Peserta">
                    <i class="fa fa-edit"></i> <span>Peserta</span>
                    <span class="pull-right-container"/>
                </a>

            </li>
            <li>
                <a href="<?php echo base_url('index.php/Kategori'); ?>">
                    <i class="fa fa-edit"></i> <span>Kategori Lomba</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-table"></i> <span>Nomor Urut Tampil</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/tables/simple.html"><i
                                    class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/tables/data.html"><i
                                    class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-edit"></i> <span>Maqra'</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/general.html"><i
                                    class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/advanced.html"><i
                                    class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/editors.html"><i
                                    class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-edit"></i> <span>Tema</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/general.html"><i
                                    class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/advanced.html"><i
                                    class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/editors.html"><i
                                    class="fa fa-circle-o"></i> Editors</a></li>
                </ul>
            </li>

            <li>
                <a href="<?php echo base_url(); ?>index.php/User/getAllAdmin">
                    <i class="fa fa-edit"></i> <span>Admin</span>
                </a>
            </li>

            <li class="treeview">
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-table"></i> <span>Jadwal</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/tables/simple.html"><i
                                    class="fa fa-circle-o"></i> Pengaturan Jadwal</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/tables/data.html"><i
                                    class="fa fa-circle-o"></i> Jadwal Semifinal</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/tables/data.html"><i
                                    class="fa fa-circle-o"></i> Jadwal Final</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">