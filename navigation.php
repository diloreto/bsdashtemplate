<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">HamMar Admin</a>
            </div>

			<?php require("messages.php"); ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if($page == "dashboard") echo "class='active'"; ?>>
                        <a href="index.php?a=dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li <?php if($page == "invoice") echo "class='active'"; ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#invoiceDD"><i class="fa fa-fw fa-table"></i> Invoices <i class="fa fa-fw fa-caret-right"></i></a>
                        <ul id="invoiceDD" class="collapse">
                            <li>
                                <a href="?a=invoice&t=add"><i class="fa fa-fw fa-plus"></i> Add New</a>
                            </li>
                            <li>
                                <a href="?a=invoice&t=view"><i class="fa fa-fw fa-list-ol"></i> View All</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php if($page == "task") echo "class='active'"; ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#tasksDD"><i class="fa fa-fw fa-tags"></i> Tasks <i class="fa fa-fw fa-caret-right"></i></a>
                        <ul id="tasksDD" class="collapse">
                            <li>
                                <a href="?a=task&t=add"><i class="fa fa-fw fa-plus"></i> Add New</a>
                            </li>
                            <li>
                                <a href="?a=task&t=view"><i class="fa fa-fw fa-list-ol"></i> View All</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php if($page == "customers") echo "class='active'"; ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#customersDD"><i class="fa fa-fw fa-users"></i> Customers <i class="fa fa-fw fa-caret-right"></i></a>
                        <ul id="customersDD" class="collapse">
                            <li>
                                <a href="?a=customer&t=add"><i class="fa fa-fw fa-plus"></i> Add New</a>
                            </li>
                            <li>
                                <a href="?a=customer&t=view"><i class="fa fa-fw fa-list-ol"></i> View All</a>
                            </li>
                        </ul>
                    </li>
                    <!--
                    <li>
                        <a href="?a=charts"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    -->
                    <!--
                    <li>
                        <a href="?a=tables"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="?a=forms"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="?a=bootstrap-elements"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="?a=bootstrap-grid"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="?a=blank-page"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="?a=index-rtl"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                    -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>