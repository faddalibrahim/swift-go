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
	

</style>
    <form>
        <h1>Swift Go</h1><br/>
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form1Example1" class="form-control" />
          <label class="form-label" for="form1Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form1Example2" class="form-control" />
          <label class="form-label" for="form1Example2">Password</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
    </form>
    <!-- MDB -->
<?php include __DIR__ . '/templates/bottom.template.php'?>
</body>
</html>