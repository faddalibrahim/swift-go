<?php session_start(); ?>
<?php include 'templates/header.template.php';  ?>
<style>
    body{
        display: grid;
        place-items: center;
    }

    form{
        width: 90vw;
    }

    form small{
        color: red;
    }

    input{
        accent-color: #923D41;
    }

    button{
        background-color: #923D41 !important;
    }

     a{
        color: #923D41;
    }

    @media screen and (min-width: 560px) {
        form{
            width: 30vw;
        }
    }
</style>

<?php
    if(isset($_POST['register'])){
        require __DIR__ . "/functions/student_register.function.php";

        $exists = "";
        
        $errors = array("firstname"=>"", "lastname"=>"", "email"=>"", "password" => "", "repeat_password"=>"");
        
        validateUserRegisteration($errors);
        
        //if errors is empty, call the register controller
        if(!array_filter($errors)){
            require __DIR__ . "/controller/student_controller.php";
            $exists = register($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password']);
            if(!$exists){
                header("location: login.php");
            }
        }
        
        // put all post data in 
       

    }

?>
    <form action="register.php" method="POST">
        <p style="color: red"><?php echo $exists ?? "" ?></p>
        <h1>Swift Go</h1>
        <br/>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-3">

    <div class="col">
      <div class="form-outline">
        <input type="text" id="firstname" class="form-control" name="firstname" value="<?php echo $_POST['firstname'] ?? ""?>"/>
        <label class="form-label" for="firstname">First name</label>
      </div>
      <small class="firstname-feedback"><?php echo $errors['firstname'] ?? "" ?></small>
    </div>
    
    <div class="col">
        <div class="form-outline">
            <input type="text" id="lastname" class="form-control" name="lastname" value="<?php echo $_POST['lastname'] ?? ""?>"/>
            <label class="form-label" for="lastname">Last name</label>
        </div>
        <small class="lastname-feedback"><?php echo $errors['lastname'] ?? "" ?></small>
    </div>

  </div>

  <!-- Email input -->
  <div class="mb-3">
      <div class="form-outline">
        <input type="text" id="email" class="form-control" name="email" value="<?php echo $_POST['email'] ?? ""?>"/>
        <label class="form-label" for="email">Email address</label>
      </div>
    <small><?php echo $errors['email'] ?? "" ?></small>
  </div>

  <!-- Password input -->
  <div class="mb-3">
    <div class="form-outline">
        <input type="password" id="password" class="form-control" name="password"/>
        <label class="form-label" for="password">Password</label>
    </div>
    <small><?php echo $errors['password'] ?? "" ?></small>
  </div>
  

  <!-- Password input -->
  <div class="mb-3">
      <div class="form-outline">
        <input type="password" id="repeat-password" class="form-control" name="repeat_password"/>
        <label class="form-label" for="repeat-password">Repeat Password</label>
      </div>
      <small><?php echo $errors['repeat_password'] ?? "" ?></small>
  </div>

  <!-- Submit button -->
  <button type="submit" name="register" class="btn btn-primary btn-block mb-4">register</button>

  <div>already have an account? <a href="login.php">Login</a> </div>


    </form>
    <?php include __DIR__ . '/templates/bottom.template.php'?>

    <script>

    </script>
</body>
</html>