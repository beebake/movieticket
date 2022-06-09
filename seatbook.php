<?php
include_once 'dbfun.php';
$rows = ['A', 'B', 'C', 'D', 'E', 'F'];
extract($_POST);
$booked = [];
foreach (findall("booking", "mid='$mid' and bdate='$bdate'") as $r) {
    foreach (preg_split("[,]", $r["seatnums"]) as $s) {
        $booked[] = $s;
    }
}
$mname=single("movie","mid='$mid'")["mname"];
$tname=single("theatre","tid='$tid'")["tname"];
$s=single("shows","id='$sid'");
$sname=$s["showname"]." - ".$s["showtime"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <link href="css/movie.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/css/style-starter.css">
        <title>Movie Seat Booking</title>
        <style>
            body {
                background-color: #242333;
                color: #fff;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                font-family: 'Lato', sans-serif;
                margin: 0;
            }
            input,select{
                box-sizing: border-box;
                padding:8px;
                width:300px;
            }
            label{
                padding:8px;
                display: block;
            }
            input[type='submit']{
                width:120px;
                margin-top:10px;
            }
        </style>
        
    </head>

        <header id="site-header" class="w3l-header fixed-top" style="margin-bottom: 20px;">
            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
                <div class="container">
                    <h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
                                                                        aria-hidden="true"></span>
                            Book My Show </a></h1>
                    <!-- if logo is image enable this   
                                    <a class="navbar-brand" href="#index.html">
                                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                    </a> -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                        <span class="fa icon-expand fa-bars"></span>
                        <span class="fa icon-close fa-times"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="movielist.php">All Movies</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                            <?php if (isset($_SESSION["userid"])) { ?> 
                                <li class="nav-item">
                                    <a class="nav-link" href="bhistory.php">My Bookings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Welcome ! <?= $_SESSION["uname"] ?></a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>                                              
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="registration.php">Register</a>                             
                                </li>
                            <?php } ?>
                        </ul>


                    </div>


                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
                </div>
            </nav>
            <!--//nav-->
        </header>
    <body>
        <div class="container seatsCon" style="width:90%; margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">Movie : <?= $mname ?></h4>
                </div>

                <div class="col-md-12"></div>

                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ul class="showcase" style="margin-bottom: 20px;margin-top:5px;">
                        <li>
                            <div class="seat"></div>
                            <small>Available</small>
                        </li>
                        <li>
                            <div class="seat selected"></div>
                            <small>Selected</small>
                        </li>
                        <li>
                            <div class="seat occupied"></div>
                            <small>Occupied</small>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3"></div>

                <div class="col-md-2"></div>
                <div class="col-md-8 screen"></div>
                <div class="col-md-2"></div>

                <div class="col-md-3"></div>
                <div class="col-md-6 row">
                    <?php for ($i = 1; $i <= 8; $i++) { ?>
                        <div class="nums"><?= $i == 0 ? "" : $i ?></div>    
                    <?php } ?>
                </div>
                <div class="col-md-3"></div>

                <?php
                    for ($i = 0; $i < 6; $i++) {
                ?>
                    <div class="col-md-3"></div>
                    <div class="col-md-6 row">
                        <span style="padding:4px;margin-top:5px;"><?= $rows[$i] ?></span>
                        <?php for ($j = 1; $j <= 8; $j++) { ?>
                            <div id="<?= "{$rows[$i]}$j" ?>" class="seat <?= array_search("$rows[$i]$j", $booked) === false ? "" : "occupied" ?>"></div>
                        <?php } ?>
                    </div>
                    <div class="col-md-3"></div>

                <?php } ?>  

                <div class="clearfix visible-md-block"></div>

                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form name="ff" method="post" action="seatnFood.php">
                        <input type="hidden" readonly class="form-control" name="mid" value="<?= $mid ?>">
                        <input type="hidden" readonly class="form-control" name="bdate" value="<?= $bdate ?>">
                        <input type="hidden" name="tid" value="<?= $tid ?>">
                        <input type="hidden" readonly="readonly" class="form-control" value="<?= $tname ?>">
                        <input type="hidden" name="sid" value="<?= $sid ?>">
                        <input type="hidden" readonly="readonly" class="form-control" value="<?= $sname ?>">                           
                        <input type="number" readonly="readonly" id="count" required class="form-control" name="seats" style="display: none">
                        <input type="hidden" readonly="readonly" id="seatnums" required class="form-control" name="seatnums">
                        <button id="btnconfirm" style="float:left;">Confirm Now</button>
                    </form>
                </div>
                <div class="col-md-3"></div>

            </div>            
        </div>

        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>
