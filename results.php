<?php
require './database/db_connect.php';

//Get data
$sql = "SELECT * from user";

$result = mysqli_query($conn, $sql);

// var_dump($result);

// mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Data</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="p-5">
  <div class="card mt-5">
    <div class="card-header">
      <a href="./" class="btn btn-sm bg-dark text-white" ><-- Go back</a>
      User Factory
    </div>
    <div class="card-body">
      <h5>These are the data available on my store.</h5>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th width="150">Gender</th>
            <th width="150">Options</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
              if ($row['gender'] === 'MALE') {
                $gender = '<span class="badge badge-primary">Male</span>';
              }
              else if($row['gender'] === 'FEMALE'){
                $gender = '<span class="badge badge-success">Female</span>';
              }
              else if($row['gender'] === 'OTHERS'){
                $gender = '<span class="badge badge-warning">Others</span>';
              }
              else{
                $gender = '<span class="badge badge-danger">Alien</span>';
              }
              echo '<tr>
                    <td scope="row">'.$row["name"].'</td>
                    <td>'.$row["age"].'</td>
                    <td>'.$gender.'</td>
                    <td>
                    <button class="btn btn-sm btn-primary">Edit</button>
                    <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                    </tr>';
            }
          } else {
            echo "0 results";
          }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</body>

</html>