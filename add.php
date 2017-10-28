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
	//$_POST["desc"] = "ssafsf";
	if (!empty($_POST)) {
		$question = $_POST['desc'];
	echo $question;
	$answer1 = $_POST["answer1"];
	$answer2 = $_POST["answer2"];
	$answer3 = $_POST["answer3"];
	$answer4 = $_POST["answer4"];
	$type = $_POST["type"];
		
	}
	
	$type = preg_replace('/[^a-z]/', "", $type);
	$iscorrect = preg_replace('/[^0-9a-z]/', "", $_POST['iscorrect']);
	$answer1 = strip_tags($answer1);
	$answer1 = htmlentities($answer1);
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
		
		
		
	} */
	
	if(!isset($_POST['iscorrect']) || $_POST['iscorrect'] ==""){
			echo "Important data is missing. So please try again";
			exit();
		}
	
		if(!isset($_POST['type']) || $_POST['type'] ==""){
			echo "Sorry there was an eror.So please try again";
			exit();
		}
	
	
	if (isset($_POST['tfquiz'])) {
		
		
				
			$question = $_POST['desc'];
			$answer1 = $_POST['answer1'];
			$answer2 = $_POST['answer2'];
			$type = $_POST["type"];
			$iscorrect = $_POST[];
		//$a = $_POST['isscorrect'];
			echo $question;
			echo $answer1;
			echo $answer2;
			echo $type;
		
		//header("location: add_questions.php");
	}
	if($type == "tf"){
		if((!$question) || (!$answer1) || (!$answer2) || (!$iscorrect)){
			echo "Sorry all fields must be filled up";
			exit();
		}
	}
	
	
	
	/*if (isset($_POST['mcquiz'])) {
			$question = $_POST['desc'];
			$answer1 = $_POST['answer1'];
			$answer2 = $_POST['answer2'];
			$answer3 = $_POST['answer3'];
			$answer4 = $_POST['answer4'];
		//$a = $_POST['isscorrect'];
		
				echo $question;
				echo answer1;
				//header("location: add_questions.php");
	}
	*/
	
	?>