<?php
require_once "dbconnection.php";

if (!empty($_POST)){
    $data = $_POST['search_data'];
//    echo $data;
    $query ="SELECT * FROM users WHERE
             name LIKE '%$data%' ||
             email LIKE '%$data%' ||
             address LIKE '%$data%' ||
             phone LIKE '%$data%' ";

    $result = mysqli_query($connection, $query);
    foreach ($result as $key=>$value){
//        echo $value['name'];
        $output='';
        $output.= '<tr> <td>'.++$key.'</td>
                        <td>'.$value['name'].'</td>
                        <td>'.$value['email'].'</td>
                        <td>'.$value['address'].'</td>
                        <td>'.$value['phone'].'</td>
                        <td>
                           <a href="" class="btn btn-primary btn-sm">Edit </a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a> 
                        </td>
                   </tr>';
    }
    echo $output;

}