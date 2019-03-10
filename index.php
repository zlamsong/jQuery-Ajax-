<?php
require_once 'dbconnection.php';
$qu = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($connection, $qu);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">

<!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap-grid.css">-->

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ajax</h1>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                Add
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add User</h4>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form form-group form-group-sm">
                                    <input type="text" id="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="form form-group form-group-sm">
                                    <input type="email" id="email" placeholder="Email" class="form-control">
                                </div>
                                <div class="form form-group form-group-sm">
                                    <input type="text" id="address" placeholder="Address" class="form-control">
                                </div>
                                <div class="form form-group form-group-sm">
                                    <input type="text" id="phone" placeholder="Phone" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                            <button type="button" id="datainsertID" class="btn btn-primary"  data-dismiss="modal">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <!--data search bar-->
            <div>
                <form method="post">
                   <input type="text" id="searchData" class="form-control" placeholder="Search" >
                </form>
            </div>
            <br>
            <!--/data search bar-->


            <br>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $key=>$value):?>
                <tr>
                    <td><?=++$key ?></td>
                    <td><?=$value['name'] ?></td>
                    <td><?=$value['email'] ?></td>
                    <td><?=$value['address'] ?></td>
                    <td><?=$value['phone'] ?></td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Edit </a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="jQuery.js"></script>
<script src="bootstrap/dist/js/bootstrap.js"></script>
<script src="bootstrap/dist/js/sweetalert.js"></script>
<script src="bootstrap/dist/js/custom.js"></script>
</body>
</html>