<?php include 'templates/header.template.php';  ?>
<style>
    body{
        display: grid;
        place-items: center;
    }

    form{
        width: 90vw;
    }

    input{
        accent-color: #923D41;
    }

    button{
        /* background-color: #923D41 !important; */
    }

    @media screen and (min-width: 560px) {
        form{
            width: 30vw;
        }
    }

    a{
        color: #923D41;
    }
	

</style>
<?php
session_start();
if($_SESSION){
    header("location: booking.php");
}

    if(isset($_POST['login'])){
        require __DIR__ . "/controller/student_controller.php";
        $invalid_details = login($_POST['email'],$_POST['password']);
        // login($_POST['email'],$_POST['password']);
    }

?>
    <form action="login.php" method="POST">
        <!-- Email input -->
        <p style="color: red"><?php echo $invalid_details ?? "" ?></p>
        <h1>Swift Go</h1><br/>
        <div class="form-outline mb-4">
          <input type="email" id="email" class="form-control" name="email" required/>
          <label class="form-label" for="email">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="password" class="form-control" name="password" required/>
          <label class="form-label" for="password">Password</label>
        </div>

        <!-- Submit button -->
        <button type="submit" name="login" class="btn btn-primary btn-block">login</button><br/>

        <div>don't have an account? <a href="register.php">Register</a> </div>
    </form>
    <!-- MDB -->
<?php include __DIR__ . '/templates/bottom.template.php'?>
</body>
</html>