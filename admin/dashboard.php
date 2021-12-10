<?php
session_start();
    if(!isset($_SESSION['admin'])){
        header("location: login.php");
    }
    
    require __DIR__ . "/../controller/admin_controller.php";
    $bookings = getBookings();
    $users_count = getAllUsers();


    $all = $bookings->fetchAll();



    // if($bookings){
    //     print_r($bookings->fetch());
    // }else{
    //     print("nasssss");
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />

    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
      rel="stylesheet"
    />
    <title>Document</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Google+Sans:200,300,400,500,600,700,900");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body{
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-flow: row;
    font-family: "Google Sans";
}

th{
    color: #923D41;
    font-size: 1.3rem;
}

.sidebar{
    background-color: #923D41 !important;
    padding: 1rem;
    height: 100vh;
    width: 20vw;
    color: white;
    display: flex;
    flex-flow: column;
    justify-content: space-between;
}

.sidebar a{
    padding: 1rem;
    background-color: salmon;
    color: white;
    width: 100%;
    display: inline-block;
}

.sidebar a:hover{
    background-color: #823D40;
}

.content{
    background-color: #fdfdfd;
    flex-grow: 1
}

.analytics{
    margin-bottom: 3rem;
    padding: 1rem;
    width: 100%;
}

.analytics .card{
    margin-left: 0.7rem;
}

.card-title{
    color: #923D41;
}

</style>
<body>
    <div class="sidebar">
        <h3><?php echo $_SESSION['user'] ?? "Faddal Ibrahim" ?></h3>

        <a href="logout.php">
            logout
        </a>

    </div>
    <div class="content">
    <div class="analytics row">
         <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <h1 class="card-text">
                <?php echo $users_count ?>
                </h1>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
        <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Total Bookings</h5>
                <h1 class="card-text">
                <?php echo $bookings->rowCount(); ?>
                </h1>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>

         <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">
                   Moving From Campus
                </h5>
                <h1 class="card-text">
                    <?php
                        $num = 0;
                        foreach($all as $row){
                            if($row['moving'] == "from campus"){
                                $num = $num + 1;
                            }
                        }

                        echo $num;
                    ?>
                </h1>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>

         <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Moving To Campus</h5>
                <h1 class="card-text">
                  <?php
                        $num = 0;
                        foreach($all as $row){
                            if($row['moving'] == "to campus"){
                                $num = $num + 1;
                            }
                        }

                        echo $num;
                    ?>
                </h1>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>

        
    </div>

    <h1 style="margin-left: 1rem">Bookings</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">
        Name
      </th>
      <th scope="col">Email</th>
      <th scope="col">Moving</th>
      <th scope="col">Pickup</th>
      <th scope="col">Payment Method</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($all as $row):?>
    <tr>
      <td><?php echo $row['fullname'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['moving'] ?></td>
      <td><?php echo $row['pickup'] ?></td>
      <td><?php echo $row['payment'] ?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>


    </div>
</body>
</html>