<?php include 'nav.php';?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Alumni Control</title>

    <!-- jQuery dataTable cdns -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./DataTables/datatables.js"></script>
    <script src="./DataTables/Select-1.3.4/js/select.dataTables.min.js"></script>
    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <link rel="stylesheet" href="./DataTables/DataTables-1.11.5/css/dataTables.dataTables.min.css">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="./css/alumnicss.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <!-- <i class="fas fa-fw fa-wrench"></i> -->
                    <span>Alumni</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item active" href="alumnicontrol.php"><i class="fas fa-fw fa-wrench"></i>Details</a>
                        <!-- <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a> -->
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Co-Admin</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="caregister.php">Register</a>

                        <!-- <a class="collapse-item" href="login.html">Login</a> -->
                        <!-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a> -->
                        <!-- <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a> -->
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->



                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

            </div>

            <!-- Start of Main Content -->
            <?php

            require "../connect.php";

            $sl = $_GET["slno"];
            $result = "SELECT * FROM alumini WHERE slno = '$sl'";
            $query = mysqli_query($con, $result);
            $row = mysqli_fetch_array($query);

            ?>

            <div class="container container-fluid alumni-details-container">

                <!-- Grid Container -->
                <div class="alumni-grid">

                    <div class="serial grid-0">
                        <div class="fields">
                            <label for="slno">Serial No.</label>
                            <p><?php echo $row['slno']; ?></p>

                        </div>
                        <div class="button-container">
                            
                            <li><a class="back control-btn" href="./alumnicontrol.php"></a></li>
                            <li><button class="delete deletebtn control-btn" value="<?php echo $row["slno"];?>"></button></li>
                            <li><button class="edit editbtn control-btn"></button></li>                            
                            <li><a class="print control-btn" href="" onclick="window.print()"></a></li>
                        </div>

                    </div>

                    <div class="first-info grid-1">
                        <span class="heading-para">Primary Informations</span>
                        <div class="fields">
                            <img src="<?php echo '../' . $row["photo"]; ?>" alt="image" style="width:150px;">
                        </div>
                        <div class="primary-field">
                            <div class="fields">
                                <label for="name">Name</label>
                                <p><?php echo $row['name']; ?></p>
                            </div>
                            <div class="fields">
                                <label for="gender">Gender</label>
                                <p><?php echo $row['gender']; ?></p>
                            </div>
                            <div class="fields">
                                <label for="email">E-mail</label>
                                <p><?php echo $row['email']; ?></p>
                            </div>
                            <div class="fields">
                                <label for="phone">Phone</label>
                                <p><?php echo $row['phone']; ?></p>
                            </div>
                        </div>
                    </div>


                    <div class="p-info grid-2">

                        <div class="nested-grid">

                            <div class="sub-grid-0">
                                <span class="heading-para">Additional Informations</span>
                            </div>
                            <div class="sub-grid-1">
                                <div class="fields">
                                    <label for="college">College</label>
                                    <p><?php echo $row['college']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="dob">Date of Birth</label>
                                    <p><?php echo $row['dob']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="occupation">Present Occupation / Position / Designation</label>
                                    <p><?php echo $row['occupation']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="organization">Company Name / Organization Name</label>
                                    <p><?php echo $row['organization']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="o_address">Office / Present Address</label>
                                    <p title="<?php echo $row['o_address']; ?>"><?php echo $row['o_address']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="state">State</label>
                                    <p><?php echo $row['state']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="pin">Pincode</label>
                                    <p><?php echo $row['pin']; ?></p>
                                </div>
                            </div>
                            <div class="sub-grid-2">
                                <div class="fields">
                                    <label for="country">Country</label>
                                    <p><?php echo $row['country']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="p_address">Permanent Address</label>
                                    <p title="<?php echo $row['p_address']; ?>"><?php echo $row['p_address']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="p_state">State</label>
                                    <p><?php echo $row['p_state']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="p_pin">Pincode</label>
                                    <p><?php echo $row['p_pin']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="p_country">Country</label>
                                    <p><?php echo $row['p_country']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="nationality">Nationality</label>
                                    <p><?php echo $row['nationality']; ?></p>
                                </div>
                                <div class="fields">
                                    <label for="blood_group">Blood Group</label>
                                    <p><?php echo $row['blood_group']; ?></p>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="grad-info grid-3">
                        <span class="heading-para">Graduation</span>
                        <div class="fields">
                            <label for="graduation">Graduation</label>
                            <p><?php echo $row['graduation']; ?></p>
                        </div>
                        <div class="fields">
                            <label for="year_of_adm">Year of Admission</label>
                            <p><?php echo $row['year_of_adm']; ?></p>
                        </div>
                        <div class="fields">
                            <label for="year_of_pass">Year of Degree Awarded</label>
                            <p><?php echo $row['year_of_pass']; ?></p>
                        </div>

                    </div>



                    <div class="mst-info grid-4">
                        <span class="heading-para">Post-Graduation</span>
                        <div class="fields">
                            <label for="masters">Masters</label>
                            <p><?php echo $row['masters']; ?></p>
                        </div>
                        <div class="fields">
                            <label for="year_of_m_adm">Year of Admission</label>
                            <p><?php echo $row['year_of_m_adm']; ?></p>
                        </div>
                        <div class="fields">
                            <label for="year_of_m_pass">Year of Degree Awarded</label>
                            <p><?php echo $row['year_of_m_pass']; ?></p>
                        </div>
                        <div class="fields">
                            <label for="m_discipline">Master's Discipline</label>
                            <p><?php echo $row['m_discipline']; ?></p>
                        </div>

                    </div>

                    <div class="doc-info grid-5">
                        <span class="heading-para">Doctorate Degree</span>
                        <div class="fields">
                            <label for="doctoral">Doctoral</label>
                            <p><?php echo $row['doctoral']; ?></p>
                        </div>
                        <div class="fields">
                            <label for="year_of_d_adm">Year of Admission</label>
                            <p><?php echo $row['year_of_d_adm']; ?></p>
                        </div>
                        <div class="fields">
                            <label for="year_of_d_pass">Year of Degree Awarded</label>
                            <p><?php echo $row['year_of_d_pass']; ?></p>
                        </div>
                        <div class="fields">
                            <label for="doc_discipline">Doctoral's Discipline</label>
                            <p><?php echo $row['doc_discipline']; ?></p>
                        </div>

                    </div>
                </div>
                <!-- End of grid container -->

            </div>

            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="DeleteModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="code.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Record</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="delete_id" class="delete_user_id">

                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="deleteUserButton" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="#">

                    <input type="hidden" name="edit_id" class="edit_user_id">

                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        //Delete modal function
        $(document).ready(function() {
            $('.deletebtn').click(function(e) {
                e.preventDefault();
                var user_id = $(this).val();
                $('.delete_user_id').val(user_id);
                $('#DeleteModal').modal('show');
            });
        });

        //Edit modal function
        $(document).ready(function() {
            $('.editbtn').click(function(e) {
                e.preventDefault();
                var user_id = $(this).val();
                $('.edit_user_id').val(user_id);
                $('#editModal').modal('show');
            });
        });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>