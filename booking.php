<?php include 'templates/header.template.php';  ?>
<style>
    body{
        display: grid;
        place-items: center;
    }

    form{
        width: 85vw;
    }

    input{
        accent-color: #923D41;
    }

    button{
        /* background-color: #923D41 !important; */
    }

    form{
        margin-bottom:3rem;
    }

  

    .i-am-moving{
        position: absolute;
        bottom: 0;
        left: 0;
        /* padding: 1rem; */
        /* box-shadow: 0 4px 10px rgb(0 0 0 / 8%); */
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.16),
    0px 2px 5px rgba(51, 51, 51, 0.12);
        width: 100%;
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

      @media screen and (min-width: 560px) {
        form{
            width: 30vw;
        }

        .i-am-moving{
            top: 0;
            height: 100%;
             border-top-right-radius: 0;
            border-top-left-radius: 0;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.16),
    0px 2px 5px rgba(51, 51, 51, 0.12);
        z-index: 1;
        width: 20%;
        }
    }
	

</style>
    <form>
        <h1>Secure a seat</h1>
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="text" id="from" class="form-control" list="pickup-points" />
          <label class="form-label" for="from">Pick me at</label>
          <datalist id="pickup-points">
            <option value="Kwabenya">
            <option value="Berekusu">
            <option value="Mall">
          </datalist>
        </div>

         <div class="form-outline mb-4">
          <input type="text" id="from" class="form-control" list="payment-method" />
          <label class="form-label" for="from">I will pay via</label>
          <datalist id="payment-method">
            <option value="Mobile Money">
            <option value="Cash">
          </datalist>
        </div>

        <h5>Total Cost : GHC 21.50</h5>
        </br/>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">book</button>

        <div class="i-am-moving">
            <h4>I am moving</h4>
            <br/>
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    name="moving"
                    id="from-campus"
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
                />
                <label class="form-check-label" for="to-campus"> To Campus </label>
            </div>

        </div>
    </form>
    <!-- MDB -->
<?php include __DIR__ . '/templates/bottom.template.php'?>
</body>
</html>