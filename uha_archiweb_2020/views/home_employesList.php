

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">


        <div class="col-md-12">
            <h4>Bootstrap Snipp for Datatable</h4>
            <div class="table-responsive">

                <table id="mytable" class="table table-bordred table-striped">

                    <thead>
                     <th><input type="checkbox" id="checkall" /></th>
                    <th>EmployeID</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>View</th>
                    </thead>
                    <tbody>
                    <?php
                    while($employe=$param->fetch(PDO::FETCH_OBJ)) {

                    ?>
                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td><?=  $employe->EmployeeID ?></td>
                        <td><?=  $employe->ManagerID?></td>
                        <td><?=  $employe->HireDate ?></td>
                        <td><?=  $employe->Gender?></td>
                        <td><?=  $employe->ContactID ?></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"  href="index.php?c=employee&m=EditEmploye&id=<?=  $employe->EmployeeID ?>"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" href="index.php?c=employee&m=deleteEmployee&id=<?=  $employe->EmployeeID ?>"><span class="glyphicon glyphicon-trash"></span></a></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a class="btn btn-info" data-title="View" data-toggle="modal" data-target="#view" href="index.php?c=employee&m=listOne&id=<?=  $employe->EmployeeID ?>"><span class="glyphicon glyphicon-eye-open"></span></a></p></td>

                    </tr>
<?php  }?>



                    </tbody>

                </table>

                <div class="clearfix"></div>
                <ul class="pagination pull-right">
                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                </ul>

            </div>

        </div>
    </div>
</div>












