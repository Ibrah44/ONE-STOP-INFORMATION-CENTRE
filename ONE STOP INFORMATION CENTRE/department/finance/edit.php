
<?php 

include('connection.php');

//$id = $_GET[‘id’];

$row=mysql_query("select*from task",$conn);
while($shwduty = mysql_fetch_array($row))
	   {
echo '

<form method="post" action="">


	          <div class="form-group input-group">
               <span class="input-group-addon"></span>
             <input type="text" class="form-control" placeholder="TaskId" name="TaskId" value='.$shwduty["taskId"].' />
             </div>
			 
                <div class="form-group input-group">
                   <span class="input-group-addon"></span>
                  <input type="text" class="form-control" placeholder="Task Name" name="TaskName" value='.$shwduty["taskName"].'/>
               </div>
                                     
             <div class="form-group input-group">
               <span class="input-group-addon"></span>
                 <input type="text" class="form-control" placeholder="Department Id" name="status" value='.$shwduty["taskStatus"].'/>
          </div>
      <div class="form-group input-group">
              <input type="date" class="form-control" name="DateOfExecution" value='.$shwduty["dateOfExecution"].'> <!-- date(d/m/y) -->
                 <span class="input-group-addon">Date Of Execution</span>
</div>  
	  
	  
	  

	  
	  
	  </form>';
	  $gt= 'update task set taskId=$shwduty["taskId"], taskNametaskStatus=$shwduty["taskName"], dateOfExecution=$shwduty["dateOfExecution"]  where taskId="$id"';
	  
$qw=mysql_query($gt,$conn);
	  
	  }
	  
	  mysql_close($conn);
?>	  	

</body>
</html>
