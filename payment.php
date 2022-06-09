<?php include_once 'dbfun.php'; ?>
<?php include_once 'header.php'; ?>
<style>
    th,h4,label{
        color:var(--theme-title);
    }
</style>

<div class="container" style="margin-top: 70px;">
    <div class="creditCardForm">    
        <h2 class="heading"><h2 class="heading">Booking Successful. You can pay now.</h2></h2>
    <div class="payment row">
        <div class="col-sm-6">
        <form action="showticket.php">
            <div class="form-group owner">
                <label for="owner">Name on Card</label>
                <input type="text" required class="form-control" id="owner">
            </div>
            <div class="form-group CVV">
                <label for="cvv">CVV</label>
                <input type="text" required maxlength="3" class="form-control" id="cvv">
            </div>
            <div class="form-group" id="card-number-field">
                <label for="cardNumber">Card Number</label>
                <input type="text" required maxlength="16" class="form-control" id="cardNumber">
            </div>
            <div class="form-group row" id="expiration-date">
                <label class="col-sm-4">Expiration Date</label>
                <div class="col-sm-4">
                <select class="form-control">
                    <option value="01">January</option>
                    <option value="02">February </option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                </div>
                <div class="col-sm-4">
                <select class="form-control">
                    <option value="21"> 2022</option>
                    <option value="21"> 2023</option>
                    <option value="21"> 2024</option>
                    <option value="21"> 2025</option>
                </select>
                </div>
            </div>
            <div class="form-group" id="credit_cards">
                <img src="images/visa.jpg" id="visa">
                <img src="images/mastercard.jpg" id="mastercard">
                <img src="images/amex.jpg" id="amex">
            </div>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <div class="form-group" id="pay-now">
                <button class="btn btn-primary" id="confirm-purchase">Pay Now</button>
                <button class="btn btn-primary" id="home">Pay Later</button>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
<?php include_once 'footer.php'; ?>