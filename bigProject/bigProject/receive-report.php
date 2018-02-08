<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Receiving Report</title>
</head>
<body>
	<?php include('PHP/navbar.php') ?>
    
    <div class="container">
        <h1 class="customize">Receiving Report</h1>
        <div class="row">
            <h2>Date</h2>
            <div class="col-md-2">
                <div class='right-inner-addon date datepicker' data-date-format="yyyy-mm-dd">
                    <i class="glyphicon glyphicon-calendar"></i>
                    <input name='name' value="" type="text" class="form-control date-picker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h2>PO#
                <select id="some_selector"></select>​</h2>
            </div>
            <div class="col-md-6">
                <h2>Invoice#
                <select id="some_selector"></select>​</h2>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h2>Vendor#
                <select id="some_selector"></select>​</h2>
            </div>
            <div class="col-md-6">
                <h2>Receiving Report#
                <select id="some_selector"></select>​</h2>
            </div>
        </div>
        <div class="row">
            <br>
            <input type="checkbox" name="service" value="Check" /> All products match with purchase order
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <button class="btn btn-info" id="toggleContact" type="button" style="margin-left: 80px">Contact Vendor</button>
                <div style="margin: 10px 0px 0px 100px">
                    <p class="contact">To:
                        <input type="text" placeholder="Enter vendor's email" />
                    </p>
                    <p class="contact">cc:
                        <input type="text"/>
                    </p>
                    <textarea class="contact" cols="40" row="10" placeholder="Write here..."></textarea>
                </div>
                <button class="contact" id="sendemail" type="button" style="margin-left: 100px">Send Email</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <center>
                    <table id="tb1" style="width:70%">
                        <tr>
                            <th class="a">Inv.#</th>
                            <th class="a">Items</th>
                            <th class="a">Unit</th>
                            <th class="a">Cost/unit</th>
                            <th class="a">Total</th>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                            <td>d</td>
                            <td>d</td>
                        </tr>
                        <tr>
                            <td>e</td>
                            <td>f</td>
                            <td>g</td>
                            <td>h</td>
                            <td>h</td>
                        </tr>
                        <tr>
                            <th class="b" colspan="4">Total amount</th>
                            <td>i</td>
                        </tr>
                    </table>
                    <br>
                    <a href="#">
                        <button class="btn btn-danger" type="button">Cancel</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-success" type="button"><i class="fa fa-check" aria-hidden="true"></i>Save</button>
                    </a>
                </center>
            </div>
        </div>
        
    </div>

        <hr>
        <footer>
            <center>9PM3BtoGS &copy; Cake Shop</center>
        </footer>
	<!-- Javascript -->

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script src="js/receivereport.js" type="text/Javascript"></script>

    <script src="https://use.fontawesome.com/87d2feb52a.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/inventory.css">
</body>
</html>