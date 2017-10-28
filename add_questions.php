<?php
/*
if(isset($_POST['desc'])){
	if(!isset($_POST['iscorrect']) || $_POST['iscorrect'] ==""){
		echo "Important data is missing. So please try again";
		exit();
	}
	
	if(!isset($_POST['type']) || $_POST['type'] ==""){
		echo "Sorry there was an eror.So please try again";
		exit();
	}
}

	require_once("connect_db.php");
	$question = $_POST["desc"];
	$answer1 = $_POST["answer1"];
	$answer2 = $_POST["answer2"];
	$answer3 = $_POST["answer3"];
	$answer4 = $_POST["answer4"];
	$type = $_POST["type"];
	$type = preg_replace('/[^a-z]/', "", $type);
	$iscorrect = preg_replace('/[^0-9a-z]/', "", $_POST['iscorrect']);
	$answer1 = strip_tags($answer1);
	$answer1 = mysql_real_escape_string($answer1);
	$answer2 = strip_tags($answer2);
	$answer2 = mysql_real_escape_string($answer2);
	$answer3 = strip_tags($answer3);
	$answer3 = mysql_real_escape_string($answer3);
	$answer4 = strip_tags($answer4);
	$answer4 = mysql_real_escape_string($answer4);
	$question = strip_tags($question);
	$question = mysql_real_escape_string($question);
	
	if($type == "tf"){
		if((!$question) || (!$answer1) || (!$answer2) || (!$iscorrect)){
			echo "Sorry all fields must be filled up";
			exit();
		}
	}
	
	if($type == "mc"){
		if((!$question) || (!$answer1) || (!$answer2) || (!$answer3)|| (!$answer4) || (!$iscorrect)){
			echo "Sorry all fields must be filled up";
			exit();
		}
	}
	
	$sql = mysql_query("insert into questions (question, type) values ('$question', '$type')") or die (mysql_error());
	$lastid= mysql_insert_id();
	mysql_query("update questions set questio_id='lastid' where id='lastid' limit 1") or die (mysql_error());
	
	if($type == 'tf'){
		if($iscorrect == 'answer1'){
			$sql2 = mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer1', '1')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer2', '0')") or die (mysql_error());
			 $msg = 'Your question has been added';
			 header ("Location:add_questions.php?msg='.$msg.'");
			 exit();
		}
	
		if($iscorrect == 'answer2'){
			$sql2 = mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer2', '1')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer1', '0')") or die (mysql_error());
			 $msg = 'Your question has been added';
			 header ("Location:add_questions.php?msg='.$msg.'");
			 exit();
		}
	}
	
	if($type == 'mc'){
		if($iscorrect == 'answer1'){
			$sql2 = mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer1', '1')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer2', '0')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer3', '0')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer4', '0')") or die (mysql_error());
			 $msg = 'Your question has been added';
			 header ("Location:add_questions.php?msg='.$msg.'");
			 exit();
		}
		
		if($iscorrect == 'answer2'){
			$sql2 = mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer2', '1')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer1', '0')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer3', '0')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer4', '0')") or die (mysql_error());
			 $msg = 'Your question has been added';
			 header ("Location:add_questions.php?msg='.$msg.'");
			 exit();
		}
		
		if($iscorrect == 'answer3'){
			$sql2 = mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer3', '1')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer1', '0')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer2', '0')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer4', '0')") or die (mysql_error());
			 $msg = 'Your question has been added';
			 header ("Location:add_questions.php?msg='.$msg.'");
			 exit();
		}
		
		if($iscorrect == 'answer4'){
			$sql2 = mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer4', '1')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer1', '0')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer2', '0')") or die (mysql_error());
			 mysql_query("insert into answers (question_id, answer, correct) values ('$lastid', '$answer3', '0')") or die (mysql_error());
			 $msg = 'Your question has been added';
			 header ("Location:add_questions.php?msg='.$msg.'");
			 exit();
		}
		
		
		
	}
	
	*/
?>

<?php
$msg = '';
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
}
?>

<script type="text/javascript">
	function showQuestion() {
		document.getElementById('tf').style.display = "block";
		document.getElementById('mc').style.display = "none";
	}
	
	function showMC() {
		document.getElementById('tf').style.display = "none";
		document.getElementById('mc').style.display = "block";
	}
	
</script>





<title>Create a queation</title>
<body>
	<div style="width:700px;text-align:center;">
		<p style="color:green;"><?php echo $msg; ?></p>
		<h2>What type of question would you like to create?</h2>
		<button onclick="showQuestion()" >True/False</button>&nbsp;&nbsp;
		<button onclick="showMC()" >Multiple Choice</button>&nbsp;&nbsp;
		<span id="resetBtn()"><button onclick="resetQuiz()">Reset quiz</button></span>
	</div>
	
	<div class="content" id="tf" style="display: none;">
		<h3>True or False</h3>
		<form action="qstnsubmit.php" name="addtfquestions" method="post">
			<h4>Type your question here</h4>
			</br>
				<textarea id="tfdesc" name="desc" style="width:400px;height:95px;"></textarea>
			</br>
			<h4>Select whether true or false is the correct answer</h4>
				<input type="text" id="answer1" name="option1" value="True" readonly>&nbsp;
				<label style="cursor:pointer; color:#06F;">
			</br>
			</br>
				<input type="text" id="answer2" name="option2" value="False" readonly>&nbsp;
				<label style="cursor:pointer; color:#06F;">
			</br>
			</br>
				<select name="answer">
					<option value="0">-Select an Answer-</option>
					<option value="True">True</option>
					<option value="False">False</option>
				</select>
				<label style="cursor:pointer; color:#06F;">
			</br>
			</br>
				<input type="hidden" name="type" value="tf">
				<input type="submit" value="Add to quiz" name="tfquiz">
			
		</form>
	</div>
	
	<div class="content" id="mc" style="display: none;">
		<h3>Multiple Choice</h3>
		<form action="qstnsubmit.php" name="addmcquestions" method="post">
			<h4>Type your question here</h4>
			</br>
				<textarea id="mcdesc" name="desc" style="width:400px;height:95px;"></textarea>
			</br>
			<h4>Create the fist answer of the question</h4>
				<input type="text" id="answer1" name="answer1">&nbsp;
				<label style="cursor:pointer; color:#06F;">
				<input type="radio" name="iscorrect" value="answer1">Correct Answer?</label>
			</br>
			</br>
			<h4>Create the second answer of the question</h4>
				<input type="text" id="answer2" name="answer2">&nbsp;
				<label style="cursor:pointer; color:#06F;">
				<input type="radio" name="iscorrect" value="answer2">Correct Answer?</label>
			</br>
			</br>
			<h4>Create the third answer of the question</h4>
				<input type="text" id="answer3" name="answer3">&nbsp;
				<label style="cursor:pointer; color:#06F;">
				<input type="radio" name="iscorrect" value="answer3">Correct Answer?</label>
			</br>
			</br>
			<h4>Create the fourth answer of the question</h4>
				<input type="text" id="answer4" name="answer4">&nbsp;
				<label style="cursor:pointer; color:#06F;">
				<input type="radio" name="iscorrect" value="answer4">Correct Answer?</label>
			</br>
			</br>
				<input type="hidden" name="type" value="mc">
				<input type="submit" value="Add to quiz" name="quiz">
			
		</form>
	</div>


</body>