<!DOCTYPE html>
<html lang="en">
<?php include '../include.php'?>

</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Users</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Users</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">

        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1 "></i>
              <span class="d-sm-inline d-none" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Logout">

                Medewerker 2

              </span>
            </a>
          </li>


          <li class="nav-item px-2 d-flex align-items-center">

          </li>
          <li class="nav-item dropdown pe-2 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="fa fa-bell cursor-pointer"></i>
            </a>
            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">


              <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                  <div class="d-flex py-1">
                    <div class="my-auto">
                      <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">New message</span> from Laur
                      </h6>
                      <p class="text-xs text-secondary mb-0 ">
                        <i class="fa fa-clock me-1"></i>
                        13 minutes ago
                      </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                  <div class="d-flex py-1">
                    <div class="my-auto">
                      <img src="../assets/img/small-logos/logo-spotify.svg"
                        class="avatar avatar-sm bg-gradient-dark  me-3 ">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">New album</span> by Travis Scott
                      </h6>
                      <p class="text-xs text-secondary mb-0 ">
                        <i class="fa fa-clock me-1"></i>
                        1 day
                      </p>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item border-radius-md" href="javascript:;">
                  <div class="d-flex py-1">
                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                      <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>credit-card</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(453.000000, 454.000000)">
                                <path class="color-background"
                                  d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                  opacity="0.593633743"></path>
                                <path class="color-background"
                                  d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                </path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-sm font-weight-normal mb-1">
                        Payment successfully completed
                      </h6>
                      <p class="text-xs text-secondary mb-0 ">
                        <i class="fa fa-clock me-1"></i>
                        2 days
                      </p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container-fluid py-4">

    <div class="row my-4">

      <div class="d-flex justify-content-center mb-3 ">

        <form action="/app/incl/admin.inc.php" method="POST">
          <button class="btn btn-primary m-3" name="addDay">Nieuwe Pakket</button>

          <form action="/app/incl/admin.inc.php" method="POST">
            <button class="btn btn-info m-3" name="addWeek">Nieuwe Reservering</button>
          </form>

          <form action="/app/incl/admin.inc.php" method="POST">
            <button class="btn btn-success m-3" name="randomize">Nieuwe Gebruiker</button>
          </form>

          <!-- Open modal and send information from modal to controller -->
          <button type="button" class="btn m-3 btn-behance" data-bs-toggle="modal" data-bs-target="#user-modal">Nieuwe
            klant</button>

          <div class="modal fade" id="user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nieuwe Klant</h5>
                  <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                  <form action="/Routes/Medewerker.php" method="POST">
                    <div class="mb-3">
                      <input type="username" name="voornaam" class="form-control" placeholder="voornaam"
                        aria-label="username">
                    </div>
                    <div class="mb-3">
                      <input type="username" name="achternaam" class="form-control" placeholder="achternaam"
                        aria-label="username">
                    </div>
                    <div class="mb-3">
                      <input type="date" name="geboortedatum" class="form-control" placeholder="Geboortedatum"
                        aria-label="email">
                    </div>
                    <div class="mb-3">
                      <input type="pwd" name="adres" class="form-control" placeholder="adres" aria-label="password">
                    </div>
                    <div class="mb-3">
                      <input type="pwd" name="email" class="form-control" placeholder="Email" aria-label="password">
                    </div>
                    <div class="mb-3">
                      <input type="phone" name="telefoonnummer" class="form-control" placeholder="telefoonnummer"
                        aria-label="password">
                    </div>




                </div>
                <div class="modal-footer">


                  <button class="btn btn-primary m-3 alert alert-primary" name="insertKlant" role="alert">Submit</button>



                </div>
              </div>
            </div>
        </form>
      </div>



    </div>

  </div>


  <div class="row my-4 p-4">

    <div class="card">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Klant</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">telefoonnummer</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">datum
                aangemeld
              </th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">actions
                
              </th>

              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              include "../Models/DB.php";
              include "../Models/Medewerker.php";
              include "../Controller/Medewerker.php";
              $admin = new MedewerkerController();
       

              foreach($admin->showKlanten() as $klanten) {

              ?>

            <tr>
              <td>
                <div class="d-flex px-2 py-1">
                  <div>
                    <?php
                        echo $klanten['id'];
                      ?>
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">
                      <?php echo $klanten['voornaam']; echo ' '; echo $klanten['achternaam']; ?>
                    </h6>
                    

                  </div>
                </div>
              </td>

              <td>
                <p class="text-sm font-weight-bold mb-0">
                  <?php echo $klanten['email']; ?>
                </p>
              </td>
              
              <td>
              <p class="text-sm font-weight-bold mb-0">
                  <?php echo $klanten['telefoonnummer']; ?>
                </p>
              </td>

              <td class="align-middle text-center text-sm">
                <span class="badge badge-sm bg-gradient-success">
                  <?php echo $klanten['datumaangemeld']; ?>
                </span>
              </td>
              <td class="align-middle">

         
                <form action="../Routes/Medewerker.php?id=<?php echo $klanten['id']; ?>" method="POST">
                  <button  class="btn bg-gradient-primary" name="deleteKlant">Delete</button>
                </form>
    


              </td>

              <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link bg-gradient-primary ml-4" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  Update
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Gebruiker</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form action="/Routes/Medewerker.php?id=<?php echo $klanten['id']?>" method="POST">
                          <div class="mb-3">
                            <input type="voornaam" name="voornaam" class="form-control" value="<?php echo $klanten['voornaam']?>"
                              aria-label="achternaam" >
                          </div>
                          <div class="mb-3">
                            <input type="achternaam" name="achternaam" class="form-control" placeholder="achternaam"
                               value="<?php echo $klanten['achternaam']?>">
                          </div>

                          <div class="mb-3">
                            <input type="pwd" name="adres" class="form-control" placeholder="adres" aria-label="role" value="<?php echo $klanten['adres']?>" >
                          </div>
                          <div class="mb-3">
                            <input type="pwd" name="email" class="form-control" placeholder="email" aria-label="role" value="<?php echo $klanten['email']?>" >
                          </div>
                          <div class="mb-3">
                            <input type="pwd" name="telefoonnummer" class="form-control" placeholder="telefoonnummer" aria-label="role" value="<?php echo $klanten['telefoonnummer']?>" > 
                          </div>
              
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                      
                      </div>
                    </div>
                  </div>
                </div>
                </form>
              </td>

              <?php }?>


          </tbody>
        </table>
      </div>
    </div>

    <div class="card my-2">
      <div class="table-responsive">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>

              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Functie
              </th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            <?php


              $admin = new MedewerkerController();
              $admin->showUsers();
              foreach($admin->showUsers() as $medewerkers ) {
                
              ?>

            <tr>
              <td>
                <div class="d-flex px-2 py-1">
                  <div>
                    <?php
                        echo $medewerkers['id'];
                      ?>
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">
                      <?php echo $medewerkers['voornaam']; echo ' '; echo $medewerkers['achternaam']; ?>
                    </h6>
                    
                    <p class="mb-0 text-sm">
                      <?php echo $medewerkers['email']; ?>
                    </p>
                  </div>
                </div>
              </td>

              <td class="align-middle text-center text-sm">
                <span class="badge badge-sm bg-gradient-success">
                  <?php echo $medewerkers['functie'] ;?>
                </span>
              </td>
              <td class="align-middle">
                <button type="button" class="btn btn-block bg-gradient-primary mb-3" data-bs-toggle="modal"
                  data-bs-target="#modal-default">Actions</button>
                <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
                  aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-default">User actions</h6>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="d-flex justify-content-center mb-3">
                          <form action="../app/incl/admin.inc.php?id=<?php echo $user['users_uid']?>" method="POST">
                            <select class="form-control" name="actions">
                              <option value="view">View Actions</option>
                              <option value="delete">Delete User</option>
                              <option value="resethwid">Reset HWID</option>
                              <option value="geninv">Generate Invite</option>
                              <option value="gentoken">Give token</option>
                            </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button name="submit" class="btn bg-gradient-primary"
                          onclick="soft.showSwal('warning-message-and-confirmation')">Confirm</button>
                        <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                    </form>

              </td>

              <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-link bg-gradient-primary ml-4" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">
                  Update
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Gebruiker</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form action="/app/incl/admin.inc.php" method="POST">
                          <div class="mb-3">
                            <input type="username" name="uid" class="form-control" placeholder="Gebruikersnaam"
                              aria-label="username">
                          </div>
                          <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                              aria-label="email">
                          </div>
                          <div class="mb-3">
                            <input type="pwd" name="rol" class="form-control" placeholder="Telefoonnummer"
                              aria-label="role">
                          </div>
                          <div class="mb-3">
                            <input type="pwd" name="rol" class="form-control" placeholder="rol" aria-label="role">
                          </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn bg-gradient-primary">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>

              </td>

              <?php }?>


          </tbody>
        </table>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="card col-sm m-2 ">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>

                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Reserveringen
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Datum
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status
                  </th>

                </tr>
              </thead>
              <tbody>


                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">John Snow</h6>
                        <p class="text-xs text-secondary mb-0">

                  </td>
                  <td>
                    <span class="text-secondary text-xs font-weight-bold">12/12/2021</span>

                  </td>

                  <td>
                    <span class="text-secondary text-xs font-weight-bold">Geaccepteerd</span>

                  </td>


              </tbody>
            </table>
          </div>
        </div>
        <div class="col-sm">
          <div class="card col-sm m-2 ">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact Info
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">time
                    </th>

                  </tr>
                </thead>
                <tbody>


                  <tr>
                    <td>


                    </td>
                    <td>


                    </td>

                    <td>

                    </td>


                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card col-sm m-2 ">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>

                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Logs</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">action
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">time
                  </th>

                </tr>
              </thead>
              <tbody>


                <tr>
                  <td>


                  </td>
                  <td>


                  </td>

                  <td>

                  </td>


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



  </div>






  </div>




  </div>


  </div>

</main>

<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/js/plugins/chartjs.min.js"></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
<script src="../assets/js/plugins/sweetalert.min.js"></script>
</body>

</html>