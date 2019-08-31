<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Basics</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

  <div class="mt-5 m-5">
    <div class="card">
      <div class="card-header bg-dark text-white">
        Name Generation
        <a href="results.php" class="btn btn-sm bg-success text-white float-right" >Display data --></a>
      </div>
      <div class="card-body">
        <form action="processName.php" method="POST">
          <div class="form-group">
            <label for="name">Your Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name"/>
          </div>
          <div class="form-group">
            <label for="age">Your Age <span class="text-danger">*</span></label>
            <input type="number" class="form-control" placeholder="45" name="age"/>
          </div>
          <div class="form-group">
            <label for="sex">Your Sex </label>
            <br>
            <input type="radio" name="sex" value="male"/> Male
            <input type="radio" name="sex" value="female"/> Female
            <input type="radio" name="sex" value="others"/> Others
          </div>                    
          <div class="form-group">
            <button type="submit" class="btn btn-sm btn-primary"> Submit </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>