<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment</title>
</head>

<body>
    <?php include('PHP/navbar.php') ?>

    <!-- Payment -->
    <div class="container">
        <h1 class="customize">Payment</h1>
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
            <h2>Vendor#
                <select id="some_selector"></select>​</h2>
            </div>
            <div class="col-md-6">
            <h2>Bank account#
                <select id="some_selector"></select>​</h2>
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
        <div class="row">
            <div class="col-md-12"><br>
                <center>
                    <table id="tb1" style="width:70%">
                        <tr>
                            <th class="a">Inv.#</th>
                            <th class="a">Items</th>
                            <th class="a">Unit</th>
                            <th class="a">Cost/unit</th>
                            <th class="a">Total Cost</th>
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
                        <button class="btn btn-info" type="button">Pay & Save</button>
                    </a>
                </center>
            </div>
        </div>
    </div>
    <hr>
    <br>
    <footer>
        <center>9PM3BtoGS &copy; Cake Shop</center>
    </footer>
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/87d2feb52a.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="js/pay.js" type="text/Javascript"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/inventory.css">

    <link rel="stylesheet" href="css/paymentcss.css">

</body>

</html>