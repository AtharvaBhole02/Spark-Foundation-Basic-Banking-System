<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- external css bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <link href="C:\xampp\htdocs\Spark-Internship\style.css" rel="text/stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V.M Bank</title>
</head>

<body>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>



  <!-- middle container start-->
  <section id="services" class="services">
    <div class="container my-5">
      <h1 class="text-dark text-center my-5">Services</h1>

      <div class="container">
        <div class="row">
          <div class="col ">
            <h3
            style=" margin-top: 55px;font-size: 30px;font-weight: 500;padding: 10px;
background-color: black;
color:white;
border-radius: 5px;
text-align:center; width:100%">
              <b>Payee & Transfer</b></h3>
            <div class="d-flex" style="gap:20px;">
              <div class="card" style="width: 18rem;">
              <img src="customer.svg" class="card-img-top" alt="..." style="width: 100px; height: 100px;">
              <div class="card-body d-flex">
                <!-- <h5 class="card-title">Customers</h5> -->
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="customer.php" class="btn btn-primary">Customers</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="transaction.svg" class="card-img-top" alt="..." style="width: 100px; height: 100px;">
              <div class="card-body d-flex">
                <!-- <h5 class="card-title">Transactions</h5> -->
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="transaction.php" class="btn btn-primary">Transactions</a>
              </div>
            </div>
            </div>



          </div>
  </section>

  <section id="about" class="about">
    <div class="container">



      <div class="footer" style="margin-top: 25px;">
        <div class="container" id="Foodie">

          <h1
          style=" margin-top: 55px;font-size: 30px;font-weight: 500;padding: 10px;
background-color: black;
color:white;
border-radius: 5px;
text-align:center;">            
          <b>About Us</b></h1>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p style="color: rgb(0, 0,0);font-size: 17px;margin-top: 30px;">Welcome to V.M Bank, where your security
                and convenience are our top priorities.<br>
                Our dedicated team is here to support you with all your banking needs, ensuring that you feel secure and
                valued every step of the way<br>
                Our commitment to excellence ensures that your property is protected and your transactions are
                seamless<br>
                Join V.M Bank today and experience the peace of mind that comes with banking at a place where your
                financial well-being is our foremost concern<br>


              </p>
            </div>
            <div class="col-sm-6">
              <h3 style="color: white;color: black;">Registered Office</h3>
              <p style="color: rgb(0, 0, 0);font-size: 17px;">
                Vision Building,Saudhagar,Pune,Maharashtra<br>
                411027
              </p>
              <p style="color: rgb(0, 0, 0);font-size: 17px;">Email:customer-vm02004@gmail.com</p>
              



            </div>

          </div>


        </div>

      </div>

    </div>
  </section>

  </div>
  </div>
  <!-- middle container end -->

  <!-- footer  -->
  <?php require_once './include/footer.php' ?>
</body>

<!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>