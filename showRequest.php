<?php
 ob_start();
 session_start();

 include_once "headerAfter.php";
?>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">

<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">Users</h3>
				<div class="checkout-right">
					<h4>All Users Are :
						
					</h4>
					<table class="timetable_sub">
						<thead>
							<tr>
							    <th>id</th>
								<th>Name</th>
								<th>Email</th>
								<th>Pasword</th>
								<th>Phone </th>
								<th>type</th>
								<th>control</th>
								
							</tr>
						</thead>
						<tbody>
						<?php                             
							include_once "user.php";
																
																
																$dept=new user();
																$rs=$dept->GetAll();
															
																while($row=mysqli_fetch_assoc($rs))
																{$x=1;
																	
?>
																			<tr class="rem1">
																				<td class="invert"><?php echo( $x) ?></td>
																				<td class="invert-image">
																				
																					<?php echo($row["name"]);?>	
																				</td>

																				<td class="invert">
																				<?php echo($row["email"]);?>
																				</td>

																				<td class="invert">
																				<?php echo($row["password"]);?>
																				</td>

																				<td class="invert">
																				<?php echo($row["phone"]);?>
																				</td>

																				<td class="invert">
																				<?php echo($row["type"]);?>
																				</td>

																				<td class="invert ">
																				<a  class="btn btn-primary"  href="UpdateProfile.php?id=<?php echo($row["id"]);?>">edit</a>

																				<input type="submit" style="width:200px" class="btn btn-danger" value="delete" name="btnyes">





																				 

						<?php

						
					 if(isset($_POST["btnyes"]))
					 {
				 
						 include_once "user.php";
						 $cust=new user();
						 $msg=$cust->Delete( );
						 
									
					 }
				        ?>
																				
																				</td>







																			</tr>

															<?php  $x++; 
														
														
																}
													
														?>


			
														

						</tbody>
					</table>
				</div>
				
					

			</div>

		</div>
	</section>

<?php 
	include_once "footer.php";

?>