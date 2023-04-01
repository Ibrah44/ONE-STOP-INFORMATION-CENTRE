<?php
session_start();
if(isset($_SESSION['login_user']))
{
include ('connection.php');
echo '<table border="0" align="center" cellpadding="2" cellspacing="0" width="80%" height = "35"> 
                       	  
		   <tr>     <td COLSPAN = "3" align="center"><b><font size="4">WAKISO DISTRICT LOCAL GOVERNMENT</font></b><hr /></td> <tr>       
		  
     </table>';






echo '<table border="1" align="center" cellpadding="2" cellspacing="0" width="70%">';
	
echo	'<tr>
          <td><b>Asset ID</b></td>
         <td><b>Asset Name</b></td>
         <td><b>Quantity</b></td>
		 <td><b>Purpose</b></td>
         <td><b>Purchase Date</b></td>
		 <td><b>Amount Spent</b></td>';
	
	
echo	'</tr>';
	$getasset=mysql_query("select * from asset where purchasedBy='Head Of Community Development Department' order by assetId desc",$conn);
	
	
	while($shwasset = mysql_fetch_array($getasset))
	   {
		
	echo ' 
	  <td>'.$shwasset["assetId"].'</td>
	  <td>'.$shwasset["assetName"].'</td>
	  <td>'.$shwasset["quantity"].'</td>
	  <td>'.$shwasset["purpose"].'</td>
	  <td>'.$shwasset["purchaseDate"].'</td>
	  <td>'.$shwasset["Amount"].'</td>
	  
	  </tr>';
	  }

	echo '</table>';
       
	   
	   echo '<center><br/><br/<br/<br/<br>';
 echo '<a href="viewdepartmentasset.php "><input type="button" value="Back" class="btn btn-primary "></a>&nbsp;&nbsp;&nbsp;';	   
echo '<a href="#" onClick="window.print();" return false; ><input type="button" value="Print" class="btn btn-primary "></a>';
		echo '</center>';
		}
else
{
Header('location: ../index.php');
}

?>