<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vendor Information</title>
</head>
<body>
	<?php include('PHP/navbar.php') ?>
    
    <div class="container mainContainer">
        <h3 class="vendorinfo">Vendor Information</h3>
        <div class="row">
            <form action="/action_page.php myform.cgi">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group col-md-4">
                            <label for="inputCompany4">Company Name</label><label for="important" style="color: red">**</label>
                            <input type="text" class="form-control" id="inputCompany4" placeholder="Company">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputname4">Name</label>
                            <input type="text" class="form-control" id="inputname4" placeholder="Name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputVendorID">Vendor#</label><label for="important" style="color: red">**</label>
                            <input type="text" class="form-control" id="inputVendorID" disabled="disabled">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4-1">Email1</label><label for="important" style="color: red">**</label>
                            <input type="email" class="form-control" id="inputEmail4-1" placeholder="Email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPhone4">Phone Number</label><label for="important" style="color: red">**</label>
                            <input type="text" class="form-control" id="inputPhone4" placeholder="number">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputcontact4">Contact Person</label>
                            <input type="text" class="form-control" id="inputcontact4" placeholder="Contact">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4-2">Email2</label>
                            <input type="email" class="form-control" id="inputEmail4-2" placeholder="Support Email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputwebsite4">Website</label>
                            <input type="text" class="form-control" id="inputwebsite4" placeholder="Website">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAccount">Bank Account no.</label><label for="important" style="color: red">**</label>
                            <input type="text" class="form-control" id="inputaccount4" placeholder="Appears in the memo of all payments">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-4" ">
                            <label for="inputaddress ">Address</label><label for="important" style="color: red">**</label>
                            <textarea class="form-control " id="inputadress " rows="3 " placeholder="Apartment, studio, or floor "></textarea>
                        </div>
                    </div>  
                </div>
            </form>
        </div>
       
        <a href="#">
            <button type="button" class="btn btn-danger">Cancel</button>
        </a>
        <a href="#">
            <button type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>Save</button>
        </a>

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