<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Field Officers Dashboard</title>
    <link rel="stylesheet" href="styles/field.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->

    <!-- Main Content -->
    <div class="col-md-9 dashboard-content">
        <h1 class="mb-4">Agrofarmflow</h1>
      <h2 class="mb-4">Welcome, Feild Officer</h2>
      <div class="table-responsive">
        <h2 class="mb-4"></h2>

      </div>

      <!-- Query Section -->
      <div class="query-section mt-5">
        <h2>Recent Queries</h2>
        <ul id="query-list">
            <div class="table-responsive">
                <h2 class="mb-4"></h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>query</th>
                        <button class="btn btn-primary" ><a href="logout.php">Logout  <i class="fa-solid fa-right-from-bracket fa-fade" style="color: #ff2c11;"></i></a></button>
                    </tr>
                    </thead>
                    <?php
                    include('connection.php');
                    $sqlSelect = "SELECT * FROM queries";
                    $result = mysqli_query($conn,$sqlSelect);
                    while($data = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['mobile']; ?></td>
                            <td><?php echo $data['query']; ?></td>


                        </tr>
                        <?php
                    }
                    ?>
                    <tbody>
        </ul>
      </div>
        </ul>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/51babe4472.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
