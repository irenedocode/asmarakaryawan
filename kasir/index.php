<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asmara Group - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <div class="employee-manage">
                        <h1 class="h3 mb-2 text-white 800">Asmara Group</h1>
                    </div>

                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Fredico Liangga</span>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">(Cashier)</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="formbold-main-wrapper">
                    <!-- Author: FormBold Team -->
                    <!-- Learn More: https://formbold.com -->
                    <div class="formbold-form-wrapper">
                      
                      
                  
                      <form name="register" method="POST">
                        
                  
                        <div class="formbold-input-flex">
                          <div>
                            <label for="firstname" class="formbold-form-label">
                              First name
                            </label>
                            <input
                              type="text"
                              name="first"
                              id="firstname"
                              class="formbold-form-input"
                            />
                          </div>
                          <div>
                            <label for="lastname" class="formbold-form-label"> Last name </label>
                            <input
                              type="text"
                              name="last"
                              id="lastname"
                              class="formbold-form-input"
                            />
                          </div>
                        </div>
                  
                        <div class="formbold-input-flex">
                          <div>
                            <label for="email" class="formbold-form-label"> Number Of Identification </label>
                            <input
                              type="number"
                              name="identification"
                              id="email"
                              class="formbold-form-input"
                            />
                          </div>
                          <div>
                            <label for="phone" class="formbold-form-label"> Bank Account </label>
                            <input
                              type="number"
                              name="bank"
                              id="phone"
                              class="formbold-form-input"
                            />
                          </div>
                        </div>
                  
                        <div class="formbold-mb-3">
                          <label for="address" class="formbold-form-label">
                            Street Address
                          </label>
                          <input
                            type="text"
                            name="address"
                            id="address"
                            class="formbold-form-input"
                          />

                        </div>
                  
                        

                        <div class="formbold-mb-3">
                          
                        </div>
                  
                        <div class="formbold-input-flex">
                          <div>
                            
                            <div class="formbold-radio-flex">
                                <div class="formbold-radio-group">
                                  <label class="formbold-radio-label">
                                    <input
                                      class="formbold-input-radio"
                                      type="radio"
                                      name="room"
                                      id="qusOne"
                                      value="Classic"
                                    />
                                    Classic
                                    <span class="formbold-radio-checkmark"></span>
                                  </label>
                                </div>
                      
                                <div class="formbold-radio-group">
                                  <label class="formbold-radio-label">
                                    <input
                                      class="formbold-input-radio"
                                      type="radio"
                                      name="room"
                                      id="qusOne"
                                      value="Bestfriend"
                                    />
                                    Bestfriend
                                    <span class="formbold-radio-checkmark"></span>
                                  </label>
                                </div>
                      
                                <div class="formbold-radio-group">
                                  <label class="formbold-radio-label">
                                    <input
                                      class="formbold-input-radio"
                                      type="radio"
                                      name="room"
                                      id="qusOne"
                                      value="Triple"
                                    />
                                    Triple
                                    <span class="formbold-radio-checkmark"></span>
                                  </label>
                                </div>
                      
                                <div class="formbold-radio-group">
                                  <label class="formbold-radio-label">
                                    <input
                                      class="formbold-input-radio"
                                      type="radio"
                                      name="room"
                                      id="qusOne"
                                      value="Apartment"
                                    />
                                    Apartment
                                    <span class="formbold-radio-checkmark"></span>
                                  </label>
                                </div>

                                <div class="formbold-radio-group">
                                  <label class="formbold-radio-label">
                                    <input
                                      class="formbold-input-radio"
                                      type="radio"
                                      name="room"
                                      id="qusOne"
                                      value="Penthouse"
                                    />
                                    Penthouse
                                    <span class="formbold-radio-checkmark"></span>
                                  </label>
                                </div>
                                <button class="formbold-btn" name="submit" >Submit Data</button>
                              </div>
                            </div>
                          </div>
                        </div>
                  
                        <div class="formbold-input-flex">
                          <div>
                            
                          </div>
                          <div>
                            
                          </div>
                        </div>

                        
                  
                        <div class="formbold-checkbox-wrapper">
                          <label for="supportCheckbox" class="formbold-checkbox-label">
                            <div class="formbold-relative">
                              <input
                                type="checkbox"
                                id="supportCheckbox"
                                class="formbold-input-checkbox"
                              />
                              
                            </div>
                          </label>
                        </div>
                      </form>
                    </div>
                  </div>
                  <style>
                    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
                    * {
                      margin: 0;
                      padding: 0;
                      box-sizing: border-box;
                    }
                    body {
                      font-family: 'Inter', sans-serif;
                    }
                    .formbold-mb-3 {
                      margin-bottom: 15px;
                    }
                    .formbold-relative {
                      position: relative;
                    }
                    .formbold-opacity-0 {
                      opacity: 0;
                    }
                    .formbold-stroke-current {
                      stroke: currentColor;
                    }
                    #supportCheckbox:checked ~ div span {
                      opacity: 1;
                    }
                  
                    .formbold-main-wrapper {
                      display: flex;
                      align-items: center;
                      justify-content: center;
                      padding: 48px;
                    }
                  
                    .formbold-form-wrapper {
                      margin: 0 auto;
                      max-width: 570px;
                      width: 100%;
                      background: white;
                      padding: 40px;
                    }
                  
                    .formbold-img {
                      margin-bottom: 45px;
                    }
                  
                    .formbold-form-title {
                      margin-bottom: 30px;
                    }
                    .formbold-form-title h2 {
                      font-weight: 600;
                      font-size: 28px;
                      line-height: 34px;
                      color: #07074d;
                    }
                    .formbold-form-title p {
                      font-size: 16px;
                      line-height: 24px;
                      color: #536387;
                      margin-top: 12px;
                    }
                  
                    .formbold-input-flex {
                      display: flex;
                      gap: 20px;
                      margin-bottom: 15px;
                    }
                    .formbold-input-flex > div {
                      width: 50%;
                    }
                    .formbold-form-input {
                      text-align: center;
                      width: 100%;
                      padding: 13px 22px;
                      border-radius: 5px;
                      border: 1px solid #dde3ec;
                      background: #ffffff;
                      font-weight: 500;
                      font-size: 16px;
                      color: #536387;
                      outline: none;
                      resize: none;
                    }
                    .formbold-form-input:focus {
                      border-color: #6a64f1;
                      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                    }
                    .formbold-form-label {
                      color: #536387;
                      font-size: 14px;
                      line-height: 24px;
                      display: block;
                      margin-bottom: 10px;
                    }
                  
                    .formbold-checkbox-label {
                      display: flex;
                      cursor: pointer;
                      user-select: none;
                      font-size: 16px;
                      line-height: 24px;
                      color: #536387;
                    }
                    .formbold-checkbox-label a {
                      margin-left: 5px;
                      color: #6a64f1;
                    }
                    .formbold-input-checkbox {
                      position: absolute;
                      width: 1px;
                      height: 1px;
                      padding: 0;
                      margin: -1px;
                      overflow: hidden;
                      clip: rect(0, 0, 0, 0);
                      white-space: nowrap;
                      border-width: 0;
                    }
                    .formbold-checkbox-inner {
                      display: flex;
                      align-items: center;
                      justify-content: center;
                      width: 20px;
                      height: 20px;
                      margin-right: 16px;
                      margin-top: 2px;
                      border: 0.7px solid #dde3ec;
                      border-radius: 3px;
                    }
                  
                    .formbold-btn {
                      font-size: 16px;
                      border-radius: 5px;
                      padding: 14px 25px;
                      border: none;
                      font-weight: 500;
                      background-color: #6a64f1;
                      color: white;
                      cursor: pointer;
                      margin-top: 25px;
                    }
                    .formbold-btn:hover {
                      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
                    }
                  </style>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Asmara Group</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="http://localhost/karyawan/login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

<?php

$koneksi = mysqli_connect("localhost","root","","datapelanggan");

if(isset($_POST['submit'])){
    mysqli_query($koneksi, "insert into data set
        first  = '$_POST[first]',
        last = '$_POST[last]',
        identification = '$_POST[identification]',
        bank = '$_POST[bank]',
        address = '$_POST[address]',
        room = '$_POST[room]'");

        echo "Data Submitted"; 
      }

?>