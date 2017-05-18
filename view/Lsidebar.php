            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    
                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?php echo $user[3]; ?>" alt="user-img" title="<?php echo $user[0] . ' ' . $user[1]; ?>" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a href="#"><?php echo $user[0] . ' ' . $user[1]; ?></a> </h5>
                        <ul class="list-inline">
                            <li>
                                
                                <a href="#" data-toggle="modal" data-target="#con-close-modal">
                                    <i class="zmdi zmdi-settings" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Change Password"></i>
                                </a>
                            </li>

                            <li>
                                <a href="logout.php" class="text-custom">
                                    <i class="zmdi zmdi-power" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Log Out"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                            <li>
                                <a href="index.php" class="waves-effect <?php echo activePage('',"$page"); ?>"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <?php
                                echo sidebarmenu(" Manage Item" ,"manageItem", $page, "zmdi-layers");
                                echo sidebarmenu(" Manage Location" ,"manageLocation", $page, "zmdi-my-location");
                                echo sidebarmenu(" Manage Users" ,"manageUsers", $page, "zmdi-accounts");
                                echo sidebarmenu(" System Log" ,"systemLog", $page, "zmdi-archive");
                            ?>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->

            <!-- Modal -->
                <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">User setting</h4>
                            </div>
                            <form id="passcForm" method="POST" action="model/cPass.php">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Password</label>
                                                <input name="password" type="text" class="form-control" id="field-3" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Change password</label>
                                                <input name="nPassword" type="text" class="form-control" id="field-1" placeholder="New password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Confirm password</label>
                                                <input name="cPassword" type="text" class="form-control" id="field-2" placeholder="Confirm new password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.modal -->
                <!-- End Modal -->