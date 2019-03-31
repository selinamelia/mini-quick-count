<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Quick Count</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="danger">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    Quick Count
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="table1.php">
                        <i class="ti-bookmark-alt"></i>
                        <p>Suara Caleg</p>
                    </a>
                </li>
                <li>
                    <a href="table.php">
                        <i class="ti-view-list-alt"></i>
                        <p>Suara Partai</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Tambah Data Suara Caleg</a>
                </div>
                <div class="collapse navbar-collapse">
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Tambah Suara</h4>
                                <form method="post" action="add1.php">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Pilih Kelurahan</label>
                                                <select name="kel">
                                                    <option value="men">Mencirim</option>
                                                    <option value="dat">Dataran Tinggi</option>
                                                    <option value="rejo">SM Rejo</option>
                                                    <option value="kar">SM Karya</option>
                                                    <option value="tan">Tanah Tinggi</option>
                                                    <option value="tim">Timbang Langkat</option>
                                                    <option value="tun">Tunggurono</option>
                                                </select>
                                                <label>TPS</label>
                                                <input type="number" name="tps">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p>Jumlah Suara</p>
                                                <label>Caleg 1</label> <input type="text" class="form-control border-input" name="score1" placeholder="Caleg 1">
                                                <label>Caleg 2</label> <input type="text" class="form-control border-input" name="score2" placeholder="Caleg 2">
                                                <label>Caleg 3</label> <input type="text" class="form-control border-input" name="score3" placeholder="Caleg 3">
                                                <label>Caleg Hj Tini </label> <input type="text" class="form-control border-input" name="scorehj" placeholder="Caleg Hj Tini">
                                                <label>Caleg 5</label> <input type="text" class="form-control border-input" name="score5" placeholder="Caleg 5">
                                                <label>Caleg 6</label> <input type="text" class="form-control border-input" name="score6" placeholder="Caleg 6">
                                                <label>Caleg 7</label> <input type="text" class="form-control border-input" name="score7" placeholder="Caleg 7">
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd" name="Submit" value="Add">Tambah</button>
                                    </div>
                            </form>
                            <?php
                                // Check If form submitted, insert form data into users table.
                                if(isset($_POST['Submit'])) {
                                    $kel = $_POST['kel'];
                                    $tps = $_POST['tps'];
                                    $score1 = $_POST['score1'];
                                    $score2 = $_POST['score2'];
                                    $score3= $_POST['score3'];
                                    $scorehj = $_POST['scorehj'];
                                    $score5 = $_POST['score5'];
                                    $score6 = $_POST['score6'];
                                    $score7 = $_POST['score7'];
                                    
                                    // include database connection file
                                    include_once("config.php");

                                    // Insert user data into table
                                    $result = mysqli_query($mysqli, "INSERT INTO [caleg](kel,tps,score1,score2,score3,scorehj,score5,score6,score7) VALUES('$kel','$tps','$score1','$score2','$score3','$scorehj','$score5','$score6','$score7')");

                                    // Show message when user added
                                    echo "Data berhasil ditambahkan. <a href='table1.php'>View Data</a>";
                                }
                                ?>

                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.linkedin.com/in/selinaamelia">
                                Contact Me
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="#">S Amelia S</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin 
    <script src="assets/js/chartist.min.js"></script> -->

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


</html>
