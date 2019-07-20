<body class="hold-transition skin-green sidebar-collapse sidebar-mini fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>M</b>TQ</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>E-Maqra</b>MTQ</span>
            </a>
            <!-- <a href="#" class="logo"><b>E-Maqra </b>MTQ</a> -->
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <!-- <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> -->
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url('asset/adminlte/dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image" />
                                <span class="hidden-xs"><?php echo $this->session->userdata('email'); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url('asset/adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $this->session->userdata('email'); ?>
                                        <small><?php echo $this->session->userdata('access'); ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="col-xs-2 text-center">
                                        <a href="<?php echo base_url('index.php/User/Ganti') ?>" class="btn btn-default btn-flat">Ganti Password</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('index.php/User/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>