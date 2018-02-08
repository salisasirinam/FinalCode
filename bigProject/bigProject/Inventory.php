<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Inventory File</title>
</head>

<body>
    <?php include('PHP/navbar.php') ?>
    
    <!-- table for inventory -->
    <div class="container mainContainer">
      <h3 class="vendorinfo">Inventory File</h3>
      <!-- Table -->
      <div class="table-responsive table-bordered table-hover">
        <table class="table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Inventory</th>
              <th>Items</th>
              <th>Unit</th>
              <th>Cost/Unit</th>
              <th>Total Cost</th>
              <th>Inventory on hand</th>
              <th>Receiving</th>
              <th>Sales Order</th>
              <th>selling Price</th>
             </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>
          </tbody>
        </table>
      </div> 
      <!-- Table -->
      <!-- panel preview -->
         <div class="col-sm-5">
            <h4>Create inventory :</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Create</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="concept" name="concept">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Item</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Cost/Unit</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="amount" name="amount">
                        </div>
                    </div>
                    <div class="form-group">
                         <label for="condition" class="col-sm-3 control-label">Selling-Price/Unit</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="condition" name="condition">
                        </div>
                    </div>
                    <a href="#" style="float: right">
                        <button type="button" class="btn btn-danger">Cancle</button>
                        <button type="button" class="btn  btn-info">Save</button>
                    </a>
                </div>
            </div>
        </div>
        <!-- / panel preview -->
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
    <script src="js/owner.js" type="text/Javascript"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/inventory.css">
</body>

</html>