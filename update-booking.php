<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header("location: login.php");
    }

    // // if user books
    // if(isset($_POST['book'])){
    //     require_once __DIR__ . "/controller/student_controller.php";
    //     book($_POST['fullname'],$_POST['email'],$_POST['pickup'],$_POST['payment'],$_POST['moving']);
    // }
    
    //fetching user data to check if he is booked : returns a boolean
    require __DIR__ . "/controller/student_controller.php";
    $user_booking = checkUserBooking($_SESSION['email']);

     if(isset($_POST['update'])){
        // require __DIR__ . "/controller/student_controller.php";
        $results = updateBooking($_POST['fullname'],$_POST['email'],$_POST['pickup'],$_POST['payment'],$_POST['moving']);
        print_r($results);
        header("location: booking.php");
    }

?>

<?php include 'templates/header.template.php';  ?>
<style>
    html{
        height: -webkit-fill-available;
    }

    body{
        height: -webkit-fill-available;
        width: 100vw;
        display: flex;
        flex-flow: column;
    }

    nav{
        width: 100%;
         box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.16), 0px 2px 5px rgba(51, 51, 51, 0.12);
        padding: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: space-between;
    }

    nav a, nav span{
        color: #923D41;
        font-weight: 450;
    }

    form{
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-flow: column;
        justify-content: space-between;
        align-items: center;
    }

    .cancel-booking-container{
        flex-grow: 1;
        display: flex;
        flex-flow: column;
        align-items: center;
        justify-content: center;
    }

    .cancel-booking-container button{
        margin: 1rem 0 !important;
    }

  

    .i-am-moving{
        /* position: absolute;
        bottom: 0;
        left: 0; */
        
        /* padding: 1rem; */
        /* box-shadow: 0 4px 10px rgb(0 0 0 / 8%); */
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.16),
    0px 2px 5px rgba(51, 51, 51, 0.12);
        width: 100vw;
        padding: 1rem 2rem;
        border-top-right-radius: 1.5rem;
        border-top-left-radius: 1.5rem;
    }

    .form-check{
        margin-left: 1.5rem;
    }

    .form-check-input:checked{
        color: green !important;
    }


  
	

</style>
    <form action="" method="POST">
       <nav>
            <div>Welcome, <span><?php echo $_SESSION['user'] ?? "Faddal Ibrahim" ?></span></div>
            <div>
                <a href="logout.php">Logout</a>

            </div>
       </nav>
       <?php if($user_booking): ?>
            <div class="form-container">
                <h1>Update Booking</h1><br/>
                <div class="form-outline mb-4">
                    <input type="text" id="from" class="form-control" list="pickup-points" name="pickup" required value="<?php echo $user_booking['pickup'] ?>"/>
                    <label class="form-label" for="from">Pick me at</label>
                    <datalist id="pickup-points">
                        <option value="Kwabenya">
                        <option value="Berekusu">
                        <option value="Mall">
                    </datalist>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="from" class="form-control" list="payment-method" name="payment" required value="<?php echo $user_booking['payment'] ?>"/>
                    <label class="form-label" for="from">I will pay via</label>
                    <datalist id="payment-method">
                        <option value="Mobile Money">
                        <option value="Cash">
                    </datalist>
                </div>
                    <input type="hidden" id="fullname" class="form-control" name="fullname" value="<?php echo $_SESSION['user'] ?? ""?>"/>
                    <input type="hidden" id="email" class="form-control" name="email" value="<?php echo $_SESSION['email'] ?? ""?>"/>
                
            </div>

            <div class="i-am-moving">
                <h4>I am moving</h4>
                <br/>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="moving"
                        id="from-campus"
                        value="from campus"
                        required
                        <?php echo($user_booking['moving'] === "from campus" ? "checked" : "") ?>
                    />
                    <label class="form-check-label" for="from-campus"> From Campus </label>
                </div>
                <br/>
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="radio"
                        name="moving"
                        id="to-campus"
                        value="to campus"
                        required
                        <?php echo($user_booking['moving'] === "to campus" ? "checked" : "") ?>
                    />
                    <label class="form-check-label" for="to-campus"> To Campus </label>
                </div>
                <br/>
                <!-- Submit button -->
                <button type="submit" name="update" class="btn btn-primary btn-block">update booking</button>
            </div>
        <?php else:?>
            <div>...</div>
        <?php endif;?>
    </form>
    <!-- MDB -->
<?php include __DIR__ . '/templates/bottom.template.php'?>
</body>
</html>