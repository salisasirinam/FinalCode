<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Income Statement</title>
</head>

<body>
    <?php include('PHP/navbar.php') ?>
       
    <div class="container">
        <h1 class="customize">Income Statement</h1>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <table id="tb1" style="width:80%">
                         <tr>
                            <th class="b" colspan="3"><center>The cake shop <br>Income statement<br>
                                <div class="col-md-3" style="float: inherit">
                                     <div class='right-inner-addon date datepicker'>
                                          <i class="glyphicon glyphicon-calendar"></i>
                                          <input type="date" name="bday" min="2000-01-02" class="form-control">
                                     </div>
                                </div>
                             </th>

                        </tr>
                        
                        <tr>
                            <th colspan="2">Revenue:</th>
                        </tr>
                        <tr>
                            <td>Product Sales</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <th colspan="2">Cost of Goods Sold (COGS):</th>
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <th colspan="2">Expenses:</th>
                        </tr>
                        <tr>
                            <td>xxx</td>
                            <td>xxx</td>
                        </tr>
                        <tr>
                            <th>Net Profit</th>
                            <td>xxx</td>
                        </tr>

                         
                    </table>
                </center>
                <br>
                <center>
                    <a href="#">
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </a>
                    <a href="#">
                        <button type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Save</button>
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