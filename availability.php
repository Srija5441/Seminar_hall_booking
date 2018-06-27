
<html>
<style>
p{
	color:green;
	font-size:200%;
}
</style>
<?php
include'starting.php';
if(!empty($_POST['date1'])){
	$date=$_POST['date1'];
	$today = date("Y-m-d");
	if($date>$today){
$query=mysqli_connect('localhost','root','');
$db=mysqli_select_db($query,'firstdata');
$select="SELECT * FROM `users`WHERE `date`='$date'";
if($qqq=mysqli_query($query,$select)){
	if(mysqli_num_rows($qqq)==NULL){
		for($i=1;$i<=6;$i++)
			{
			$avail[$i]="yes";
			}
			
				echo"<br><br><br><br>
	<p ALIGN=CENTER><table style='width:40%'>
	<tr>
	<td><strong>HALL</strong></td>
	<td><strong>AVAILABILITY</strong>
	</tr>
	
	<tr>
	<td>    </td>
	<td>    </td>
	</tr>
	<tr>
	<td>    </td>
	<td>    </td>
	</tr>
	<tr>
	<td>    </td>
	<td>    </td>
	</tr>
	
	<tr>
	<td>seminar hall 1</td>
    <td>$avail[1]</td>
	</tr>
	<tr>
	<td>    </td>
	<td>    </td>
	</tr>
	
	
	<tr>
	<td>seminar hall 2</td>
	<td>$avail[2]</td>
	</tr><tr>
	<td>    </td>
	<td>    </td>
	</tr>
	
	<tr>
	<td>seminar hall 3</td>
	<td>$avail[3]</td>
	</tr>
	<tr>
	<td>    </td>
	<td>    </td>
	</tr>
	
	<tr>
	<td>seminar hall 4</td>
	<td>$avail[4]</td>
	</tr>
	<tr>
	<td>    </td>
	<td>    </td>
	</tr>
	
	<tr>
	<td>conference hall 1</td>
	<td>$avail[5]</td>
	</tr>
	<tr>
	<td>    </td>
	<td>    </td>
	</tr>
	
	<tr>
	<td>conference hall 2</td>
	<td>$avail[6]</td>
	</tr>
	<tr>
	<td>    </td>
	<td>    </td>
	</tr>
	
	</table></p>";
	}
	else{
while($row=mysqli_fetch_assoc($qqq)){
	$avail=$row['seminar hall 1'];
	$avail2=$row['seminar hall 2'];
	$avail3=$row['seminar hal 3'];
	$avail4=$row['seminar hall 4'];
	$avail5=$row['conference hall 1'];
	$avail6=$row['conference hall 2'];
	
	echo"<br><br><br><br>
	<p ALIGN=CENTER><table style='width:40%'>
	<tr>
	<td><strong>HALL</strong></td>
	<td><strong>AVAILABILITY</strong>
	</tr>
	<tr>
	<td>     </td>
	<td>     </td>
	</tr>
	<tr>
	<td>     </td>
	<td>     </td>
	</tr>
	
	<tr>
	<td>seminar hall 1</td>
    <td>$avail</td>
	</tr>
	<tr>
	<td>     </td>
	<td>     </td>
	</tr>
	
	<tr>
	<td>seminar hall 2</td>
	<td>$avail2</td>
	</tr>
	<tr>
	<td>     </td>
	<td>     </td>
	</tr>
	
	<tr>
	<td>seminar hall 3</td>
	<td>$avail3</td>
	</tr>
	<tr>
	<td>     </td>
	<td>     </td>
	</tr>
	
	<tr>
	<td>seminar hall 4</td>
	<td>$avail4</td>
	</tr>
	<tr>
	<td>     </td>
	<td>     </td>
	</tr>
	
	<tr>
	<td>conference hall 1</td>
	<td>$avail5</td>
	</tr>
	<tr>
	<td>     </td>
	<td>     </td>
	</tr>
	
	<tr>
	<td>conference hall 2</td>
	<td>$avail6</td>
	</tr>
	<tr>
	<td>     </td>
	<td>     </td>
	</tr>
	
	</table></p>";
}
}
}
}
else{
	echo'<br><br><br>enter a date greater than todays';
}
}
?>

<form action='availability.php' method='POST'>
<br><br><br><br>
<p ALIGN=CENTER>Select The Date To Check Availability<br><br><br>
<input type="date" id="datepicker" name='date1' size='9' value="" >
<input type='submit' name='btn' value='submit'></p>
</form>
</html>