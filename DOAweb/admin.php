<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractive Admin Dashboard</title>
    <link rel="stylesheet" href="styles/admin.css">
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
        <nav class="col-md-3 sidebar">
            <h2 class="mb-4">Admin Dashboard</h2>
            <ul class="list-unstyled">
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="admin.php">Users</a></li>
                <li><a href="admin.php">Total Views</a></li>
                <li><a href="admin.php">Total Users</a></li>
                <li><a href="admin.php">Impression</a></li>
                <li><a href="admin.php">Settings</a></li>
                <li><a href="admin.php">About</a></li>
                <button class="btn btn-primary"><a href="logout.php">Logout  <i class="fa-solid fa-right-from-bracket fa-fade" style="color: #ff2c11;"></i></a></button>
            </ul>
        </nav>
        <!-- Main Content -->
        <div class="col-md-9 dashboard-content">
            <h1 class="mb-4">Welcome, Admin</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text">1,250</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Total Views</h5>
                            <p class="card-text">2,500</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Impression</h5>
                            <p class="card-text">1100</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <h2 class="mb-4"></h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <?php
                    include('connection.php');
                    $sqlSelect = "SELECT * FROM farmers";
                    $result = mysqli_query($conn,$sqlSelect);
                    while($data = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['frist_name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><span class="badge badge-success">Farmer</span></td>
                            <td><button class="btn btn-primary"><a href="delete.php">Delete </a></button></td>

                        </tr>
                        <?php
                    }
                    ?>
                    <tbody>

                    <!-- User List -->
                    <div class="user-list mt-5">
                        <h2>Registered Users</h2>
                        <ul id="user-list">
                        </ul>
                    </div>

                    </tbody>
                </table>
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
                                <th>Mobile</th>
                                <th>Query</th>
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
