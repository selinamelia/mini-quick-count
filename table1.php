<!doctype html>
<?php
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM score ORDER BY id DESC");
?>
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

    <!--  Dynamic page bismillah     -->
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>

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
                    <a class="navbar-brand" href="#">Suara Caleg</a>
                </div>
                <div class="collapse navbar-collapse">
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div cass="card">
                            <div class="header">
                                <h4 class="title">Isi Database</h4>
                                <p class="category"><a href="add1.php">Tambah Data Baru</a></p>
                                <form>
                                    <div class="form-group">
                                    <label>Pilih Kelurahan</label>
                                    <select id="haldynamic">
                                        <option>Mencirim</option>
                                        <option>Dataran Tinggi</option>
                                        <option>SM Rejo</option>
                                        <option>SM Karya</option>
                                        <option>Tanah Tinggi</option>
                                        <option>Timbang Langkat</option>
                                        <option>Tunggurono</option>
                                    </select>
                                </div>
                                </form>
                                
                                <br>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">TPS</th>
                                            <th colspan="7" align="centre">Jumlah Suara</th>
                                        </tr>
                                        <tr>
                                            <th> Caleg 1</th>
                                            <th> Caleg 2</th>
                                            <th> Caleg 3</th>
                                            <th style="background-color: yellow;"> Hj Tini</th>
                                            <th> Caleg 5</th>
                                            <th> Caleg 6</th>
                                            <th> Caleg 7</th>
                                        </tr>
                                    </thead>
        
                                    <tbody id='isidb'>
                                    </tbody>
                                    <tfoot>
                                        <th colspan="2"> Total suara</th>
                                        <th><?php
                                                $SumA= mysqli_query($mysqli, "SELECT * from caleg");
                                                $suma=0;
                                                while ($rowa = mysqli_fetch_array($SumA)){
                                                    $suma+=$rowa['score1'];

                                                }
                                                echo $suma;
                                            ?></th>
                                        <th> <?php
                                                $SumA= mysqli_query($mysqli, "SELECT * from caleg");
                                                $suma=0;
                                                while ($rowa = mysqli_fetch_array($SumA)){
                                                    $suma+=$rowa['score2'];

                                                }
                                                echo $suma;
                                            ?></th>
                                        <th><?php
                                                $SumC= mysqli_query($mysqli, "SELECT * from caleg");
                                                $sumc=0;
                                                while ($rowc = mysqli_fetch_array($SumC)){
                                                    $sumc+=$rowc['score3'];
                                                }
                                                echo $sumc;
                                            ?></th>
                                        <th style="background-color: yellow;">
                                         <?php
                                                $SumA= mysqli_query($mysqli, "SELECT * FROM caleg ");
                                                $suma=0;
                                                while ($rowa = mysqli_fetch_array($SumA)){
                                                    $suma+=$rowa['scorehj'];

                                                }
                                                echo $suma;
                                            ?></th>
                                        <th> <?php
                                                $SumA= mysqli_query($mysqli, "SELECT * from caleg");
                                                $suma=0;
                                                while ($rowa = mysqli_fetch_array($SumA)){
                                                    $suma+=$rowa['score5'];

                                                }
                                                echo $suma;
                                            ?> </th>
                                        <th> <?php
                                                $SumA= mysqli_query($mysqli, "SELECT * from caleg");
                                                $suma=0;
                                                while ($rowa = mysqli_fetch_array($SumA)){
                                                    $suma+=$rowa['score6'];

                                                }
                                                echo $suma;
                                            ?></th>
                                        <th> <?php
                                                $SumC= mysqli_query($mysqli, "SELECT * from caleg");
                                                $sumc=0;
                                                while ($rowc = mysqli_fetch_array($SumC)){
                                                    $sumc+=$rowc['score7'];
                                                }
                                                echo $sumc;
                                            ?></th>
                                            
                                    </tfoot>
                                </table>

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
    <script type="text/javascript">
        $('#haldynamic').change(function () {
            $.ajax({
                url:"ambildata1.php",
                data:"kel="+$(this).val(),
                method:"post",
                success:function (data) {
                    $('#isidb').html(data);
                    // body...
                }
            })
            // body...
        })
        $.ajax({
                url:"ambildata1.php",
                data:"kel="+$('#haldynamic').val(),
                method:"post",
                success:function (data) {
                    $('#isidb').html(data);
                    // body...
                }
            })
    </script>

</html>