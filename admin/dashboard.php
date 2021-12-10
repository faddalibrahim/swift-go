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

.sidebar{
    background-color: #923D41 !important;
    padding: 1rem;
    height: 100vh;
    width: 20vw;
    color: white;
}

.content{
    background-color: #f1f1f1;
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
        <center>
            <h1>Admin</h1>
        </center>
    </div>
    <div class="content">
    <div class="analytics row">
        <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Total Bookings</h5>
                <h1 class="card-text">
                100
                </h1>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>

         <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Moving From Campus</h5>
                <h1 class="card-text">
                   45
                </h1>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>

         <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Moving To Campus</h5>
                <h1 class="card-text">
                 50
                </h1>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>

         <div class="card col-md-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                </p>
            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        </div>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="flexCheckDefault"
          />
        </div>
      </th>
      <th scope="col">Lorem</th>
      <th scope="col">Ipsum</th>
      <th scope="col">Dolor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="flexCheckDefault"
          />
        </div>
      </th>
      <td>Sit</td>
      <td>Amet</td>
      <td>Consectetur</td>
    </tr>
    <tr>
      <th scope="row">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="flexCheckDefault"
          />
        </div>
      </th>
      <td>Adipisicing</td>
      <td>Elit</td>
      <td>Sint</td>
    </tr>
    <tr>
      <th scope="row">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="flexCheckDefault"
          />
        </div>
      </th>
      <td>Hic</td>
      <td>Fugiat</td>
      <td>Temporibus</td>
    </tr>
  </tbody>
</table>


    </div>
</body>
</html>