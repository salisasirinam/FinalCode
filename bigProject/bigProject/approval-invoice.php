<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Approval Invoice</title>
</head>

<body>
    <?php include('PHP/navbar.php') ?>
    
    <div class="container">
        <h1 class="customize">Approval Invoice</h1>
        <div class="row">
            <form action="/action_page.php myform.cgi">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputAccount">Date</label>
                        <input type="date" name="bday" min="2000-01-02" class="form-control" id="inputopening4" disabled="disabled">
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-wrapper-2">
                            <!--Table-->
                            <table class="table table-responsive">
                                <thead class="mdb-color lighten-4">
                                    <tr>
                                        <th class="th-lg">
                                            <center>Vendor</center></th>
                                        <th class="th-lg">
                                            <center>Company Name</center></th>
                                        <th class="th-lg">
                                            <center>Invoice</center></th>
                                        <th class="th-lg">
                                            <center>Purchase Order</center></th>
                                        <th class="th-lg">
                                            <center>Receiving Report</center></th>
                                        <th class="th-lg">
                                            <center>Total Amont</center></th>
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
                                        <td align="center" width="15%">
                                            <input type="text" class="form-control">
                                        </td>
                                        <td align="center" width="15%">
                                            <select class="form-control ">
                                                <option>Search</option>
                                                <option></option>
                                            </select>
                                        </td>
                                        <td align="center" width="15%">
                                            <div>
                                                <center><a href="po.php">
                                                    <button type="button" class="btn btn-Button">xxxx</button>
                                                </a>
                                            </div>    
                                        </td>
                                        <td align="center" width="15%">
                                            <div>
                                               <center><a href="receive-report.php">
                                                    <button type="button" class="btn btn-Button">xxxx</button>
                                                </a>
                                            </div>
                                        </td>
                                        <td align="center" width="15%">
                                            <input type="text" class="form-control" disabled="disabled">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" width="15%">
                                            <select class="form-control ">
                                                <option>Search</option>
                                                <option></option>
                                            </select>
                                        </td>
                                        <td align="center" width="15%">
                                            <input type="text" class="form-control">
                                        </td>
                                        <td align="center" width="15%">
                                            <select class="form-control ">
                                                <option>Search</option>
                                                <option></option>
                                            </select>
                                        </td>
                                        <td align="center" width="15%">
                                             <div>
                                                <center><a href="po.php">
                                                    <button type="button" class="btn btn-Button">xxxx</button>
                                                </a>
                                            </div>    
                                        </td>
                                        <td align="center" width="15%">
                                            <div>
                                                <center><a href="receive-report.php">
                                                    <button type="button" class="btn btn-Button">xxxx</button>
                                                </a>
                                            </div>
                                        </td>
                                        <td align="center" width="15%">
                                            <input type="text" class="form-control" disabled="disabled">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" width="15%">
                                            <select class="form-control ">
                                                <option>Search</option>
                                                <option></option>
                                            </select>
                                        </td>
                                        <td align="center" width="15%">
                                            <input type="text" class="form-control">
                                        </td>
                                        <td align="center" width="15%">
                                            <select class="form-control ">
                                                <option>Search</option>
                                                <option></option>
                                            </select>
                                        </td>
                                        <td align="center" width="15%">
                                            <div>
                                                <center><a href="po.php">
                                                    <button type="button" class="btn btn-Button">xxxx</button>
                                                </a>
                                            </div>    
                                        </td>
                                        <td align="center" width="15%">
                                            <div>
                                                <center><a href="receive-report.php">
                                                    <button type="button" class="btn btn-Button">xxxx</button>
                                                </a>
                                            </div>
                                        </td>
                                        <td align="center" width="15%">
                                            <input type="text" class="form-control" disabled="disabled">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" width="15%">
                                            <select class="form-control ">
                                                <option>Search</option>
                                                <option></option>
                                            </select>
                                        </td>
                                        <td align="center" width="15%">
                                            <input type="text" class="form-control">
                                        </td>
                                        <td align="center" width="15%">
                                            <select class="form-control ">
                                                <option>Search</option>
                                                <option></option>
                                            </select>
                                        </td>
                                        <td align="center" width="15%">
                                            <div>
                                                <center><a href="po.php">
                                                    <button type="button" class="btn btn-Button">xxxx</button>
                                                </a>
                                            </div>    
                                        </td>
                                        <td align="center" width="15%">
                                            <div>
                                                <center><a href="receive-report.php">
                                                    <button type="button" class="btn btn-Button">xxxx</button>
                                                </a>
                                            </div>
                                        </td>
                                        <td align="center" width="15%">
                                            <input type="text" class="form-control" disabled="disabled">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--Table-->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr>
    <br>
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
    
    <script src="js/owner.js" type="text/Javascript"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/inventory.css">
</body>

</html>