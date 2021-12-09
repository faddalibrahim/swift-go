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
        background-color: #923D41 !important;
    }

    @media screen and (min-width: 560px) {
        form{
            width: 30vw;
        }
    }
</style>
    <form>
        <h1>Swift Go</h1>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="firstname" class="form-control" />
        <label class="form-label" for="firstname">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="lastname" class="form-control" />
        <label class="form-label" for="lastname">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" class="form-control" />
    <label class="form-label" for="email">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="password" class="form-control" />
    <label class="form-label" for="password">Password</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="repeat-password" class="form-control" />
    <label class="form-label" for="repeat-password">Repeat Password</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">register</button>


    </form>
    <?php include __DIR__ . '/templates/bottom.template.php'?>
</body>
</html>