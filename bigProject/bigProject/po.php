<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Purchase Order</title>
</head>

<body>
    <?php include('PHP/navbar.php') ?>

    <!-- Purchase Order Page -->
    <div class="container">
        <h1 class="customize">Purchase Order</h1>
        <form action="/action_page.php myform.cgi">
            <div class="form-group col-md-3">
                <label for="inputcustomer4">Vendor#</label>
                <select class="form-control ">
                    <option>Search</option>
                    <option></option>
                </select>
            </div>
            <div class="form-group col-md-3" style="float: right;">
                <label for="inputShipto4">Date</label>
                <input type="date" name="bday" min="2000-01-02" class="form-control">
            </div>
            <br>
            <br>
                <br>
                <br>
                <br>
                <div class="form-group col-md-3">
                    <label for="inputShipto4">The Cake Shop Address:</label>
                    <td align="center" width="30%">
                        <textarea class="form-control" id="inputNote" rows="4"></textarea>
                    </td>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="form-group col-md-3">
                    <label for="inputShipto4">Purchase Order</label>
                    <input type="text" class="form-control" id="input4" placeholder="">
                </div>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th><center>Inventory</center></th>
                            <th><center>Items</center></th>
                            <th><center>Check Inventory</center></th>
                            <th><center>Unit</center></th>
                            <th><center>Cost/Unit</center></th>
                            <th>\<center>Total Cost</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center" width="15%">
                                <select class="form-control ">
                                    <option>Search</option>
                                    <option></option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <tr>
                                <td align="center" width="15%">
                                    <select class="form-control ">
                                        <option>Search</option>
                                        <option></option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td align="center" width="15%">
                                    <select class="form-control ">
                                        <option>Search</option>
                                        <option></option>
                                    </select>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <tr>
                                    <td align="center" width="15%">
                                        <select class="form-control ">
                                            <option>Search</option>
                                            <option></option>
                                        </select>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <tr>
                                        <td align="center" width="15%">
                                            <select class="form-control ">
                                                <option>Search</option>
                                                <option></option>
                                            </select>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"><center>Total Amount</center></td>
                                        <td></td>
                                
                                    </tr>
                                </tr>
                            </tr>
                        </tr>
                    </tbody>
                </table>

                <a href="#" style="float: right">
                    <button type="button" class="btn btn-danger">Cancle</button>
                    <button type="button" class="btn  btn-success"><i class="fa fa-check" aria-hidden="true"></i>Save</button>
                    <hr>
                </a>

                </form>
    </div>

                <hr>
                <footer>
                    <center>9PM3BtoGS &copy; Cake Shop</center>
                </footer>

                <!-- Javascript -->
                <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
                <script src="https://use.fontawesome.com/87d2feb52a.js"></script>
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
                <!-- Optional theme -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <script src="js/po.js" type="text/Javascript"></script>

                <!-- CSS -->
                <link rel="stylesheet" href="css/inventory.css">
</body>

</html>