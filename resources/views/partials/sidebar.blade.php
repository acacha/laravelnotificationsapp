<!-- #section:basics/sidebar -->
<div id="sidebar" class="sidebar                  responsive">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <!-- #section:basics/sidebar.layout.shortcuts -->
            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>

            <!-- /section:basics/sidebar.layout.shortcuts -->
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">

        <li class="">
            <a href="home">
                <i class="menu-icon fa fa-home"></i>
                <span class="menu-text"> Home </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="/plans/choose">
                <i class="menu-icon fa fa-home"></i>
                <span class="menu-text"> Plans </span>
            </a>

            <b class="arrow"></b>
        </li>

       
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text"> More Pages </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="subpage1">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Example subpage 1
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="subpage2">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Example subpage 2
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="subpage3">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Example subpage 3
                    </a>

                    <b class="arrow"></b>
                </li>

            </ul>
        </li>

        <li class="active open">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-file-o"></i>

							<span class="menu-text">
								Other Pages

								<!-- #section:basics/sidebar.layout.badge -->
								<span class="badge badge-primary">5</span>

								<!-- /section:basics/sidebar.layout.badge -->
							</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">

                <li class="">
                    <a href="error-404.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Error 404
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="error-500.html">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Error 500
                    </a>

                    <b class="arrow"></b>
                </li>


            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <!-- #section:basics/sidebar.layout.minimize -->
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>

    <!-- /section:basics/sidebar.layout.minimize -->
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>

<!-- /section:basics/sidebar -->