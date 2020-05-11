<?php
	include_once("header.php");
	include_once("config.php");
	$id=$_GET['id'];
	@session_start();
  	if(!isset($_SESSION['admin']))
	{
		header("location:login.php");
	}
	else
	{
		$qry1="select * from quiz_ques where id=".$id;
		$r1=mysqli_query($conn,$qry1);
		if($q=mysqli_fetch_assoc($r1))
		{
?>
<section id="login">
	<div class="container">
		<h1><span class="highlight">EDIT </span>QUIZ</h1><br><br>
			<form action="editquz.php" method="POST">
				<select name="sub" required="">
					<option>Choose Subject</option>
					<optgroup label="Aptitude">
						<option value="1">Arithmetic</option>
						<option value="2">Data Interpretation</option>
					</optgroup>
					<optgroup label="Reasoning">
						<option value="3">Logical Reasoing</option>
					</optgroup>
					<optgroup label="English">
						<option value="4">Synonyms</option>
						<option value="5">Antonyms</option>
						<option value="6">Sentence Correction</option>
						<option value="7">Spellings</option>
					</optgroup>
					<optgroup label="General Knowledge">
						<option value="15">Current Affairs</option>
						<option value="16">Basic GK </option>
					</optgroup>
					<optgroup label="Technical">
						<option value="8">C Language</option>
						<option value="9">Data Structure</option>
						<option value="10">C++</option>
						<option value="11">Java</option>
						<option value="12">Python</option>
						<option value="13">Networking</option>
						<option value="14">Database Management System</option>
					</optgroup>
				</select><br><br>
				<select name="level" required="">
					<option value="1">Easy</option>
					<option value="2">Medium</option>
					<option value="3">Hard</option>
				</select><br><br>
			<input type="textarea" name="desc" placeholder="Type Question Description" value="<?php echo $q['compr'];?>"><br><br>
			<input type="text" name="que" placeholder="Question" value="<?php echo $q['ques']?>" required=""><br><br>
			<input type="text" name="op1" placeholder="Option 1" value="<?php echo $q['op1']?>" required=""><br><br>
			<input type="text" name="op2" placeholder="Option 2" value="<?php echo $q['op2']?>" required=""><br><br>
			<input type="text" name="op3" placeholder="Option 3" value="<?php echo $q['op3']?>"required=""><br><br>
			<input type="text" name="op4" placeholder="Option 4" value="<?php echo $q['op4']?>" required=""><br><br>	
			<input type="text" name="ans" placeholder="Correct Answer" value="<?php echo $q['solution']?>" required=""><br><br>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<?php
					}
				else
				{
				   	echo "<script>alert('Cant Load Result')</script>";
				}
			}
			?>
		<button type="submit" class="button1" name="submit">Update</button>	</form>
	</div>
</section>
</body>
</html>
<?php
	include_once("footer.php");
?>