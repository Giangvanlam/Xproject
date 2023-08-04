<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Employee Home</title>

</head>
<body>
    <div class="container">
    <h1 >List of Employee</h1>
    <a href="index.php?employee=create" class = "btn btn-success" style="width: 165px; float: right; " >Add New</a>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">NAme</th>
            <th scope="col">Address</th>
            <th scope="col">Salary</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
  <tbody>
  <?php 
  $count = 0;
     foreach ($employees as $employee) {
      $count ++;
     ?>  
    <tr>
      
      <td><?= $employee->getName() ?></td>
      <td><?= $employee->getAddress()?></td>
      <td><?= $employee->getSalary() ?></td>

      <a href="index.php?employee=edit&id=<?=$employee->getNAme()?>" class="btn btn-primary">Edit</a>
      <a href="index.php?employee=delete&id=<?=$employee->getNAme()?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php
    
    }
    ?>
  </tbody>
</table>
</div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>