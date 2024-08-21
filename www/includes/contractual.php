<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List of Employee - (Pantawid)</h3>
            </div>
            <div class="card-body">
            <div class="col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">Employee List - (REGION WIDE)</h3>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="grid-margin">
                                            <div class="">
                                                <div class="panel panel-primary">
                                                    <div class="tab-menu-heading border-0 p-0">
                                                        <div class="tabs-menu1">
                                                            <!-- Tabs -->
                                                            <ul class="nav panel-tabs product-sale">
                                                                <li><a href="#tab5" class="active"
                                                                        data-bs-toggle="tab">All products</a></li>
                                                                <li><a href="#tab6" data-bs-toggle="tab"
                                                                        class="text-dark">CONTRACTUAL</a></li>
                                                                <li><a href="#tab7" data-bs-toggle="tab"
                                                                        class="text-dark">CONTRACT OF SERVICE | MOA</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab5">
                                                                <div class="table-responsive">
                                                                        <?php 
                                                                        $query2 = "SELECT users_gw.*, users_info.* FROM users_gw LEFT JOIN users_info ON users_gw.emp_id = users_info.emp_id ORDER BY users_info.province DESC"; 
                                                                        $result = mysqli_query($conn, $query2);
                                                                        ?>
                                                                    <table id="basic-datatable" class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th>Employee ID.</th>
                                                                                <th>Full Name</th>
                                                                                <th>Province</th>
                                                                                <th>Office Assigned</th>
                                                                                <th>Employment Classification</th>
                                                                                <th>Account Status</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php while($all = mysqli_fetch_array($result)) { ?>
                                                                            <tr>
                                                                                <td align="center"><?php echo $all['emp_id']; ?></td>
                                                                                <td align="center"><?php echo $all['first_name']; ?> <?php echo $cont['mid_name']; ?> <?php echo $cont['last_name']; ?></td>
                                                                                <td align="center"><?php echo $all['province']; ?></td>
                                                                                <td align="center"><?php echo $all['office_assigned']; ?></td>
                                                                                <td align="center"><?php echo $all['employment_classification']; ?></td>
                                                                                <td align="center"><?php if($all['user_stat']=='deactivated') { ?><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3"><?php echo $all['user_stat'];?></span><?php } else {?><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3"><?php echo $all['user_stat'];?></span><?php } ?></td>
                                                                                <td align="center"><a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab6">
                                                                <div class="table-responsive">
                                                                    <?php 
                                                                    $query3 = "SELECT users_gw.*, users_info.* FROM users_gw LEFT JOIN users_info ON users_gw.emp_id = users_info.emp_id WHERE users_info.employment_classification = 'CONTRACTUAL' ORDER BY users_info.province DESC"; 
                                                                    $result = mysqli_query($conn, $query3);
                                                                    ?>
                                                                    <table class="table table-bordered text-nowrap mb-0" id="responsive-datatable">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th>Employee ID.</th>
                                                                                <th>Full Name</th>
                                                                                <th>Province</th>
                                                                                <th>Office Assigned</th>
                                                                                <th>Employment Classification</th>
                                                                                <th>Account Status</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php while($cont = mysqli_fetch_array($result)) { ?>
                                                                            <tr>
                                                                                <td align="center"><?php echo $cont['emp_id']; ?></td>
                                                                                <td align="center"><?php echo $cont['first_name']; ?> <?php echo $cont['mid_name']; ?> <?php echo $cont['last_name']; ?></td>
                                                                                <td align="center"><?php echo $cont['province']; ?></td>
                                                                                <td align="center"><?php echo $cont['office_assigned']; ?></td>
                                                                                <td align="center"><?php echo $cont['employment_classification']; ?></td>
                                                                                <td align="center"><?php if($cont['user_stat']=='deactivated') { ?><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3"><?php echo $cont['user_stat'];?></span><?php } else {?><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3"><?php echo $cont['user_stat'];?></span><?php } ?></td>
                                                                                <td align="center"><a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab7">
                                                                <div class="table-responsive">
                                                                    <?php 
                                                                    $query3 = "SELECT users_gw.*, users_info.* FROM users_gw LEFT JOIN users_info ON users_gw.emp_id = users_info.emp_id WHERE users_info.employment_classification = 'CONTRACT OF SERVICE' ORDER BY users_info.province DESC"; 
                                                                    $result = mysqli_query($conn, $query3);
                                                                    ?>
                                                                    <table table id="basic-datatable" class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th>Employee ID.</th>
                                                                                <th>Full Name</th>
                                                                                <th>Province</th>
                                                                                <th>Office Assigned</th>
                                                                                <th>Employment Classification</th>
                                                                                <th>Account Status</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php while($moa = mysqli_fetch_array($result)) { ?>
                                                                            <tr>
                                                                                <td align="center"><?php echo $moa['emp_id']; ?></td>
                                                                                <td align="center"><?php echo $moa['first_name']; ?> <?php echo $cont['mid_name']; ?> <?php echo $cont['last_name']; ?></td>
                                                                                <td align="center"><?php echo $moa['province']; ?></td>
                                                                                <td align="center"><?php echo $moa['office_assigned']; ?></td>
                                                                                <td align="center"><?php echo $moa['employment_classification']; ?></td>
                                                                                <td align="center"><?php if($moa['user_stat']=='deactivated') { ?><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3"><?php echo $moa['user_stat'];?></span><?php } else {?><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3"><?php echo $moa['user_stat'];?></span><?php } ?></td>
                                                                                <td align="center"><a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                        </tbody>
                                                                    </table>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>                                    
        </div>
    </div>
</div>

