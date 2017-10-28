<?php
	$counter = 1;
	$con = mysqli_connect("localhost", "root", "","stugeek");
	if(!$con){
		echo "Can't connect Database";
	}
	$sql = "SELECT * FROM question";
	$res = mysqli_query($con,$sql);
	while ($result = mysqli_fetch_assoc($res)) { ?>
	<form action="check.php" method="post">
		<?php global $counter;echo $counter.". ".$result['ques'];$counter++; ?>
		<select name="">
			<option value="0">Select an answer</option>
			<option value="True">True</option>
			<option value="False">False</option>
		</select><br><br>
	<?php } ?><br>
	<input type="submit" value="Submit">
	</form>