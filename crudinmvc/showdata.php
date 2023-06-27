<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<table class="table table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>Email </th>
              <th>Phone </th>
              <th>Action</th>
              
            </tr>
          </thead>
          <tbody>
         <?php
        foreach($seletdata as $row)
         {
?>
<tr>
        <td><?php echo $row["id"]; ?> </td>
         <td><?php echo $row["name"]; ?> </td>
         <td><?php echo $row["email"]; ?> </td>
         <td><?php echo $row["phone"]; ?> </td>
         

         <td><a href="?delete=<?php echo $row ["id"]; ?>" class="btn btn-sm btn-danger"><span class="bi bi-trash"></span></a> | <a href="update?edit=<?php echo $row["id"];?>" class="btn btn-sm btn-info"><span class="bi bi-pencil"></span></a></td>
         </tr>
         <?php     
         }
              ?>
          </tbody>
        </table>
</body>
</html>