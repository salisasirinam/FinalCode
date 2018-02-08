<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>&forall; Cake Shop</title>
</head>

<body data-spy="scroll" data-target="#ca_sidenav">
	<?php include('PHP/navbar.php') ?>
	
	<!-- contant -->

	<div class="col-md-12">
		<div class="container mainContainer">
			<center>
				<img src="images/logo.jpg" class="img-circle logosize" width="350" height="350" />
		    	<!-- <h1>SUMMARY</h1> -->
		    </center>
		    <center><img src="images/line.gif" style="margin-bottom: 15%;"></center>
		</div>
	</div>

    <!-- NAVBAR TOGGLE -->
    <!-- navber left side -->
    <div id="ca_navToggle" onclick="slideNavbar();">
        <img style="height:30px; width:40px;" src="images/menu-up.png" alt="Cathair Apocalypse">
    </div>
    <!-- NAVBAR -->
    <div id="ca_sidenav" class="container-fluid clearfix scrollspy">
        <ul id="ca_nav" class="nav2 nav" data-spy="affix">
            <li>
                <a href="#ca_section0" >
                    <img class="nav_img" src="images/icon0-off.png">
                  	<div class="nav_txt">
                  		<span><B2>Total</B2></span>
                  	</div>
                </a>
            </li>
            <li>
                <a id="ca_nav1" class="txt" href="#ca_section1" >
					<img src="images/icon1-off.png">
                    <div class="nav_txt">
                    	<span><B2>Recent</B2></span>
                    </div>
                </a>
            </li>
            <li>
                <a id="ca_nav1" class="txt" href="#ca_section2" >
					<img src="images/icon3-off.png">
                    <div class="nav_txt">
                    	<span><B2>Invoice</B2></span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="container-fluid" id="ca_page-wrapper">
        <div id="ca_section0" class="container-fluid">
        	<!-- Total -->
        	<h2 class="h2recent">DASHBOARD</h2>
        	<div class="price-table">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-6 col-md-6">
		                    <div class="pricing text-center">
		                        <div class="pricing-top">
		                        <p><sup>&#x0E3F;</sup><em>0.00</em></p>
		                        <span>Revenue</span>
		                        </div>
		                            <p>total revenue</p>
		                        <div class="btn btn2">DETAIL</div>
		                    </div>
		                </div>
		                
		                <div class="col-sm-6 col-md-6">
		                    <div class="pricing text-center">
		                        <div class="pricing-top">
		                        <p><sup>&#x0E3F;</sup><em>7580.00</em></p>
		                        <span>Expense</span>
		                        </div>
		                        	<p>total expense</p>
		                        <div class="btn btn2">DETAIL</div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
        </div>
        <BR>
        <BR>
        <BR>
        <BR>
        <div id="ca_section1" class="container-fluid">
        	<!-- Recent -->
        	<h2 class="h2recent"> RECENT ORDERS</h2>
			
		        	<div class="container jumbotron tablerecent">
						<div class="row">

							<!-- table for recent orders -->
				            <table class="table table-striped table-condensed">
				              <thead>
				                  <tr>
				                      <th>Order #</th>
				                      <th>Date</th>
				                      <th>Ship To</th>
				                      <th>Order Total</th>
				                      <th>Status</th> 
				                  </tr>
				              </thead>   
				              <tbody>
				                <tr>
				                    <td>0005</td>
				                    <td>2012/05/06</td>
				                    <td>Donna R. Folse</td>
				                    <td>&#x0E3F;<span id="orderPrice">1000</span></td>
				                    <td><span class="label label-success">Active</span>
				                    </td>                   
				                </tr>
				                <tr>
				                    <td>0006</td>
				                    <td>2011/12/01</td>
				                    <td>Emily F. Burns</td>
				                    <td>&#x0E3F;<span id="orderPrice">1000</span></td>
				                    <td><span class="label label-important">Banned</span></td>                  
				                </tr>
				                <tr>
				                    <td>0007</td>
				                    <td>2010/08/21</td>
				                    <td>Andrew A. Stout</td>
				                    <td>&#x0E3F;<span id="orderPrice">1000</span></td>
				                    <td><span class="label">Inactive</span></td>
				                </tr>
				                <tr>
				                    <td>0008</td>
				                    <td>2009/04/11</td>
				                    <td>Mary M. Bryan</td>
				                    <td>&#x0E3F;<span id="orderPrice">1000</span></td>
				                    <td><span class="label label-warning">Pending</span></td>   
				                </tr>
				                <tr>
				                    <td>0009</td>
				                    <td>2007/02/01</td>
				                    <td>Mary A. Lewis</td>
				                    <td>&#x0E3F;<span id="orderPrice">1000</span></td>
				                    <td><span class="label label-success">Active</span></td>                           
				                </tr>                                   
				              </tbody>
				            </table>
						</div>
					</div>
			
        </div>
        <BR>
        <BR>
        <BR>
        <BR>
        <div id="ca_section2" class="container-fluid">
        	<!-- Invoice -->
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-5">
	        			<h2 class="h2recent">upcoming invoice</h2>

	        			<!-- table for upcoming invoice -->
	        			<table class="table tableinvoice table-striped">
						     <thead>
						        <tr class="row-name">
						           <th>Invoice #</th>
						           <th>Vendor</th>
						           <th>Due Date</th>
						           <th>Balance Due</th>
						        </tr>
						     </thead>   
						     <tbody>
						        <tr class="row-content">
						           <td>FA101</td>
						           <td>Akshay</td>
						           <td>Jan 21, 2018</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA102</td>
						           <td>Yusuf</td>
						           <td>Jan 21, 2018</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA103</td>
						           <td>Ajay</td>
						           <td>Jan 21, 2018</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA104</td>
						           <td>Kajol</td>
						           <td>Jan 21, 2018</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA105</td>
						           <td>Amitabh</td>
						           <td>Jan 21, 2018</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA106</td>
						           <td>Twinkle</td>
						           <td>Jan 21, 2018</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						     </tbody>
						  </table>
	        		</div>
	        		<div class="col-md-5">

	        			<h2 class="h2recent">invoices past due</h2>

	        			<!-- table for invoices past due -->
	        			<table class="table tableinvoice table-striped">
						     <thead>
						        <tr class="row-name2">
						           <th>Invoice #</th>
						           <th>Vendor</th>
						           <th>Due Date</th>
						           <th>Balance Due</th>
						        </tr>
						     </thead>   
						     <tbody>
						        <tr class="row-content">
						           <td>FA101</td>
						           <td>Akshay</td>
						           <td>Aug 21, 2014</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA102</td>
						           <td>Yusuf</td>
						           <td>Aug 21, 2014</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA103</td>
						           <td>Ajay</td>
						           <td>Aug 21, 2014</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA104</td>
						           <td>Kajol</td>
						           <td>Aug 21, 2014</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA105</td>
						           <td>Amitabh</td>
						           <td>Aug 21, 2014</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						        <tr class="row-content">
						           <td>FA106</td>
						           <td>Twinkle</td>
						           <td>Aug 21, 2014</td>
						           <td>&#x0E3F;<span id="invoiceUpcoming">1000</span></td>
						        </tr>
						     </tbody>
						  </table>
	        		</div>
	        	</div>
        	</div>
        </div>
    </div>
	

	<center>
        <img src="http://dl2.glitter-graphics.net/pub/252/252682in41fsxg03.gif" />
    </center>

    <footer> <center>9PM3BtoGS &copy; Cake Shop</center></footer>
    <!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>

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

	<link rel="stylesheet" href="css/nav-left.css">
</body>

</html>