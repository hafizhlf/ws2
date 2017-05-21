            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <div class="m-b-30">
                        			    <button type="button" class="btn btn-primary btn-trans btn-rounded w-md waves-effect waves-primary">Add <i class="fa fa-plus"></i></button>
                                    </div>

                                    <table id="datatable" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                                <th>Level</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                                $user = getAllUser($conn);
                                                foreach ($user as $dUser) {
                                            ?>
                                            <tr>
                                                <td><?php echo $dUser[1]; ?></td>
                                                <td><?php echo $dUser[2]; ?></td>
                                                <td><?php echo $dUser[3]; ?></td>
                                                <td><?php echo $dUser[6]; ?></td>
                                                <td>
                                                    <div class="btn-group m-b-0">
                                                        <button class="btn btn-icon btn-sm waves-effect waves-success btn-rounded btn-trans btn-success"><i class="fa fa-pencil info"></i></button>
                                                        <button class="btn btn-icon btn-sm waves-effect waves-danger btn-rounded btn-trans btn-danger"><i class="fa fa-trash-o"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <?php
                    include_once ("view/footer.php");
                ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->