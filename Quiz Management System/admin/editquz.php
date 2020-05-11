<?php
	include_once ('config.php');
	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$sub_id=$_POST['sub'];
		$desc=$_POST['desc'];
		$level=$_POST['level'];
		$que=$_POST['que'];
		$op1=$_POST['op1'];
		$op2=$_POST['op2'];
		$op3=$_POST['op3'];
		$op4=$_POST['op4'];
		$ans=$_POST['ans'];
		$qry="update quiz_ques set sub_id=$sub_id,level=$level,compr='$desc',ques='$que',op1='$op1',op2='$op2',op3='$op3',op4='$op4',solution='$ans' where id =".$id;
		echo $qry;
		if(mysqli_query($conn,$qry))
		{
			echo "<script> alert('Your Quiz is Updated')</script>";
			header("location:courses.php");
		}	
		else
		{
			echo "<script>alert('Error : Your Quiz is not Updated')</script>";
		}
	}
?>