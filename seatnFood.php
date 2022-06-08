<?php include_once 'header.php'; ?>
<?php
extract($_POST);
// print_r($_POST);exit;
$mname=single("movie","mid='$mid'")["mname"];
$tname=single("theatre","tid='$tid'")["tname"];
$s=single("shows","id='$sid'");
$sname=$s["showname"]." - ".$s["showtime"];
?>
<div class="jumbotron bg-dark text-white rounded-0" style="margin-top: 70px;">
    <h2 class="heading">Confirm Order</h2>
</div>
    <div class="container" style="margin-top: 25px;">
        <div class="row" style="margin-top: 10px;">
        <div class="card-deck">
            <div class="card " >
                <img  src="images/burger" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Burger</h5>
                    <p  class="card-text">£5</p>
                    <p><label class="col-sm-6 col-form-label">Quantity</label></p>
                    <p><input class="form-control" type="number" min="0" max="10" step="1" value="0"></p><br/>
                    <a href="#" class="btn btn-success">Add to basket</a>
                </div>
            </div>
            <div class="card " >
                <img  src="images/nachos" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nachos</h5>
                    <p  class="card-text">£6</p>
                    <p><label class="col-sm-6 col-form-label">Quantity</label></p>
                    <p><input class="form-control" type="number" min="0" max="10" step="1" value="0"></p><br/>
                    <a href="#" class="btn btn-success">Add to basket</a>
                </div>
            </div>
            <div class="card " >
                <img  src="images/popcorn" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Popcorn</h5>
                    <p  class="card-text">£3</p>
                    <p><label class="col-sm-6 col-form-label">Quantity</label></p>
                    <p><input class="form-control" type="number" min="0" max="10" step="1" value="0"></p><br/>
                    <a href="#" class="btn btn-success">Add to basket</a>
                </div>
            </div>            
            <div class="card " >
                <img  src="images/fishnchips" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Fish n Chips</h5>
                    <p  class="card-text">£7</p>
                    <p><label class="col-sm-6 col-form-label">Quantity</label></p>
                    <p><input class="form-control" type="number" min="0" max="10" step="1" value="0"></p><br/>
                    <a href="#" class="btn btn-success">Add to basket</a>
                </div>
            </div>

        </div>
        <div class="col-md-12"></div>
        <div class="col-md-12" style="margin-top:10px;border:0.5px solid #DFDFDF;border-radius:2px;margin-bottom:10px;">
            <div class="form" style="margin-top:10px; margin-left:25%;margin-bottom:10px;">
                <form name="ff" method="post" action="book.php">
                    <input type="hidden" name="mid" value="<?= $mid ?>">
                    <?php if ($_SESSION['role'] == 'admin') { ?>
                    <div class="form-group form-row">
                        <label class="col-sm-4 col-form-label">Customers Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="cname">                           
                        </div>
                    </div>
                    <?php } ?>
                    <div class="form-group form-row">
                        <label class="col-sm-4 col-form-label">Booking Date</label>
                        <div class="col-sm-8">
                            <input type="text" readonly class="form-control" name="bdate" value="<?= $bdate ?>">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-sm-4 col-form-label">Theatre Name</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="tid" value="<?= $tid ?>">
                            <input type="text" readonly="readonly" class="form-control" value="<?= $tname ?>">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-sm-4 col-form-label">Show Time</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="sid" value="<?= $sid ?>">
                            <input type="text" readonly="readonly" class="form-control" value="<?= $sname ?>">                           
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-sm-4 col-form-label">Number of Seats</label>
                        <div class="col-sm-8">
                            <input type="number" readonly="readonly" id='count' required class="form-control" name="seats" value="<?= $seats - 1 ?>">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-sm-4 col-form-label">Seat Numbers</label>
                        <div class="col-sm-8">
                            <input type="text" readonly="readonly" id="seatnums" required class="form-control" name="seatnums" value="<?= $seatnums ?>">
                        </div>
                    </div>

                    <input type="submit" value="Book Now" class="btn btn-primary">
                </form>
            </div>
        </div>
        

        </div>


    </div>

<?php   include_once 'footer.php';?>
