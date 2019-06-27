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
                <p><?php echo $this->session->userdata('email'); ?></p>

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


            <li class="treeview">
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-laptop"></i>
                    <span>Daerah</span>
                    <span class="pull-right-container">

            </span>
                </a>

            </li>
            <li class="treeview">
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-edit"></i> <span>Peserta</span>
                    <span class="pull-right-container">

            </span>
                </a>

            </li>
            <li class="treeview">
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-edit"></i> <span>Kategori Lomba</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>application/views/hifzil.php"><i
                                    class="fa fa-circle-o"></i> Hifzil Qur'an</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/advanced.html"><i
                                    class="fa fa-circle-o"></i> Fahmil Qur'an</a></li>
                    <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/forms/editors.html"><i
                                    class="fa fa-circle-o"></i> Tilawatil Qur'an</a></li>
                </ul>
            </li>


            <li class="treeview">
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
            <li class="treeview">
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

            <li class="treeview">
                <a href="<?php echo base_url(); ?>asset/adminlte/#">
                    <i class="fa fa-edit"></i> <span>Admin</span>
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

            <!-- <li>
                    <a href="<?php echo base_url(); ?>asset/adminlte/pages/calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>asset/adminlte/pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url(); ?>asset/adminlte/#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/examples/invoice.html"><i
                                        class="fa fa-circle-o"></i> Invoice</a></li>
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/examples/profile.html"><i
                                        class="fa fa-circle-o"></i> Profile</a></li>
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/examples/login.html"><i
                                        class="fa fa-circle-o"></i> Login</a></li>
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/examples/register.html"><i
                                        class="fa fa-circle-o"></i> Register</a></li>
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/examples/lockscreen.html"><i
                                        class="fa fa-circle-o"></i> Lockscreen</a></li>
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/examples/404.html"><i
                                        class="fa fa-circle-o"></i> 404 Error</a></li>
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/examples/500.html"><i
                                        class="fa fa-circle-o"></i> 500 Error</a></li>
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/examples/blank.html"><i
                                        class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/pages/examples/pace.html"><i
                                        class="fa fa-circle-o"></i> Pace Page</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="<?php echo base_url(); ?>asset/adminlte/#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/#"><i class="fa fa-circle-o"></i> Level One</a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url(); ?>asset/adminlte/#"><i class="fa fa-circle-o"></i> Level One
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>asset/adminlte/#"><i class="fa fa-circle-o"></i>
                                        Level Two</a></li>
                                <li class="treeview">
                                    <a href="<?php echo base_url(); ?>asset/adminlte/#"><i class="fa fa-circle-o"></i>
                                        Level Two
                                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo base_url(); ?>asset/adminlte/#"><i
                                                        class="fa fa-circle-o"></i> Level Three</a></li>
                                        <li><a href="<?php echo base_url(); ?>asset/adminlte/#"><i
                                                        class="fa fa-circle-o"></i> Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>asset/adminlte/#"><i class="fa fa-circle-o"></i> Level One</a>
                        </li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>asset/adminlte/https://adminlte.io/docs"><i
                                class="fa fa-book"></i> <span>Documentation</span></a></li>
                <li class="header">LABELS</li>
                <li><a href="<?php echo base_url(); ?>asset/adminlte/#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a>
                </li>
                <li><a href="<?php echo base_url(); ?>asset/adminlte/#"><i class="fa fa-circle-o text-yellow"></i>
                        <span>Warning</span></a></li>
                <li><a href="<?php echo base_url(); ?>asset/adminlte/#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a>
                </li> -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">