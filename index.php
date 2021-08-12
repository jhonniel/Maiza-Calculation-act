<!DOCTYPE html>
<!-- code by jRy - devjry.web.app -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Antonio </title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>



        <div class="container">
            <div class="content">
                <form action="" method="post" name="">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Date</span>
                            <input type="date" placeholder="" required="" name="date" autofocus>
                        </div>
                        <div class="input-box">
                            <span class="details">Assets</span>
                            <input type="text" placeholder="&#8369&#8369" required="" name="assets" autofocus>
                        </div>
                        <div class="input-box">
                            <span class="details">Liabilities</span>
                            <input type="text" placeholder="&#8369&#8369" required="" name="liabilities" autofocus>
                        </div>
                        <div class="input-box">
                            <span class="details">Owner's Equity</span>
                            <input type="text" placeholder="&#8369&#8369" required="" name="ownersequity" autofocus>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" name="submit" value="Enter">
						
                    </div>
					<center>
					
	<?php
	if (isset($_POST["submit"])){
	$mai_Date  = $_POST["date"];
	$mai_Assets  = $_POST["assets"];
	$mai_liabilities  = $_POST["liabilities"];
	$mai_Owners  = $_POST["ownersequity"];
	$mai_LiaEqu = $mai_liabilities + $mai_Owners;

?>	
		<div class="lbldate">
					
					<h2>MAI Corp.</h2>
					<h4>Balance sheet of <?php echo $mai_Date; ?><h4>
					</div>
					</center>			
			
  <div class="table1">
 <table>
  <thead>
   <tr>
    <th colspan="2">Liabilities</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td>Accounts Payable: </td>
	<td><?php echo $mai_liabilities; ?> </td>
   </tr>
   <tr>
    <td>Liabilities: </td>
	<td><?php echo $mai_liabilities; ?> </td>
   </tr>
 </table>
 
 
 <table>
  <thead>
   <tr>
    <th colspan="2">Assets</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td>Accounts Receivable: </td>
	<td><?php echo $mai_Assets; ?> </td>
   </tr>
   <tr>
    <td>Total Assets: </td>
	<td><?php echo $mai_Assets; ?> </td>
   </tr>
 </table>
 </div>
 
 <div class="table22">
 <table>
  <thead>
   <tr>
    <th colspan="2">Owner's Equity</th>
   </tr>
  </thead>
  <tbody>
   <tr>
    <td>Retained Earnings:</td>
	<td><?php echo $mai_Owners; ?> </td>
   </tr>
   <tr>
    <td>Equity: </td>
	<td><?php echo $mai_Owners; ?> </td>
   </tr>
     <tr>
    <td>Liabilities and Equity: </td>
	<td><?php echo $mai_LiaEqu; ?> </td>
   </tr>
     <tr>
    <td>Accounting Equation: </td>
	<?php
		if($mai_LiaEqu == $mai_Assets) { ?>
			<td><?php echo "Balance"; ?> </td>

		<?php } elseif ($mai_LiaEqu) {?>
			<td><?php echo "Not Balance"; ?> </td>
			<?php };?>

   </tr>
  </tbody>
 </table>
 </div>
 <?php } ?>
 
                </form>
            </div>
        </div>


</body>

</html>