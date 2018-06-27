<?php
include'starting.php';

if((isset($_POST['name'])&&!empty($_POST['name']))&&(isset($_POST['person'])&&!empty($_POST['person']))&&(isset($_POST['otel'])&&!empty($_POST['otel']))
	&&(isset($_POST['rtel'])&&!empty($_POST['rtel']))&&(isset($_POST['nature'])&&!empty($_POST['nature']))
&&(isset($_POST['sem'])&&!empty($_POST['sem']))&&(isset($_POST['date'])&&!empty($_POST['date']))&&(isset($_POST['account'])&&!empty($_POST['account'])))
{
	$name=$_POST['name'];
	$person=$_POST['person'];
	$otel=$_POST['otel'];
	$rtel=$_POST['rtel'];
	$nature=$_POST['nature'];
	$sem=$_POST['sem'];
	$date=$_POST['date'];
	$account=$_POST['account'];
	$today = date("Y-m-d");
	if($sem=="seminar hall 1")
	{
		$n=1;
		$colum="seminar hall 1";
	}
	else if($sem=="seminar hall 2")
	{
		$n=2;
		$colum="seminar hall 2";
	}
	else if($sem=="seminar hall 3")
	{
		$n=3;
		$colum="seminar hall 3";
	}
	else if($sem=="seminar hall 4")
	{
		$n=4;
		$colum="seminar hall 4";
	}
	else if($sem=="conference hall 1 ")
	{
		$n=5;
		$colum="conference hall 1";
	}
	else if($sem="conference hall 2")
	{
		$n=6;
		$colum="conference hall 2";
	}
	if($date>$today)
	{
		
		$con=mysqli_connect('localhost','root','');
		$db=mysqli_select_db($con,'firstdata');
		$tab="SELECT * FROM `users` WHERE `date` = '$date'";
		$query=mysqli_query($con,$tab);
		if(mysqli_num_rows($query)==NULL)
		{
			
			for($i=1;$i<=6;$i++)
			{
			$avail[$i]="yes";
			}
			$ins="INSERT INTO `users` (`date`, `seminar hall 1`, `seminar hall 2`, `seminar hal 3`, `seminar hall 4`, `conference hall 1`, `conference hall 2`) 
			VALUES ('$date', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes')";
			mysqli_query($con,$ins);
			$upps="UPDATE `users` SET `$colum` = 'no' WHERE `users`.`date` = '$date'";
			mysqli_query($con,$upps);
		}
		else
		{
			$upp="UPDATE `users` SET `$colum` = 'no' WHERE `users`.`date` = '2016-05-09'";
			mysqli_query($con,$upp);
			
			while($row=mysqli_fetch_assoc($query))
			{
			$avail[1]=$row['seminar hall 1'];
			$avail[2]=$row['seminar hall 2'];
			$avail[3]=$row['seminar hal 3'];
			$avail[4]=$row['seminar hall 4'];
			$avail[5]=$row['conference hall 1'];
			$avail[6]=$row['conference hall 2'];
			
			}
		}
		if($avail[$n]=="yes")
		{
			
			$db1=mysqli_select_db($con,'seminar');
			$tab1="INSERT INTO `booking` (`id`, `indcom`, `person`, `telo`, `telr`, `nature`, `hall`, `date`,`account`) 
			VALUES (NULL, '$name', '$person', '$otel', '$rtel', '$nature', '$sem', '$date','$account')";
			$insert=mysqli_query($con,$tab1);
			echo '<br><br>your hall has been succesfully booked';
		}
		else{
			echo'<br><br>The requested hall is not available on that date';
		}
	
	}
	
	else
	{
		echo'enter a date greater than todays';
	}
}	

?>
<html>
<head>
<style>
p{

	color:red;
}
</style>
<form action='testbook.php' method='POST'>
<p ALIGN=CeNTER style="color:black">**Note:&nbsp;&nbsp;&nbsp;Please check the availability before booking &nbsp;:)</p>
<p ALIGN=CENTER>
<br>
<br><br>Company/Indivudual Name:&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='name'><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Contact Person:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='person'><br><br><br>
Contact Details:
&nbsp;&nbsp;TEL (O) :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='otel'><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TEL(R) :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='rtel'><br><br><br>
Nature Of Event: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='text' name='nature'><br><br><br>
Seminar hall:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="sem">
  <option value="seminar hall 1">seminar hall 1</option>
  <option value="seminar hall 2">seminar hall 2</option>
  <option value="seminar hall 3">seminar hall 3</option>
  <option value="seminar hall 4">seminar hall 4</option>
  <option value="conference hall 1">conference hall 1</option>
  <option value="conference hall 2">conference hall 2</option>
</select>
Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" id="datepicker" name='date' size='9' value="" ><br><br><br>
Account number:&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='account'>&nbsp;&nbsp;&nbsp;&nbsp;<p ALIGN=CENTER style="color:black">**note:Only SBI is acceptable</p>
<br><br>
<p align=center><input type='submit' name='book' value='Book the hall'><br></p>
</p>
</form>
</head>
</html>