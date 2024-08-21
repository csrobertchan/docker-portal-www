<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List of your Salary Payslip</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php 
                    $query2 = "SELECT id, show_stat FROM opis WHERE emp_id = '$id1' ORDER BY id DESC"; 
                    $result = mysqli_query($conn, $query2);
                    ?>
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th>Data Row no.</th>
                                <th>Payslip Period</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($opis = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td align="center"><?php echo $opis['id']; ?></td>
                                <td align="center"><?php echo $opis['show_stat']; ?></td>
                                <td align="center"><a href="includes/payslip1.php?id=<?php echo $opis['id']?>" class="btn btn-success bg-success-gradient mt-3 mb-3 mb-md-0" onclick="window.open(this.href).print(); return false"><i class="glyphicon glyphicon-print">&nbsp;</i>Print Payslip</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Data Row no.</th>
                                <th>Payslip Period</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>                                    
        </div>
    </div>
</div>

