<?
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Incognito Solutions Admin Panel</title>
<script type="text/javascript" src="../include/jquery-1.11.1.js"></script>
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="../include/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../include/bootstrap-theme.min.css"/>
<style type="text/css">
body{ background-image:url(../images/Board.png);
}
h1,h2,h3,h4,h5,h6,p{color:#FFF;
}
.fonttype1{ font-family: 'Cinzel Decorative', cursive;}
.fonttype2{ font-family:'Shadows Into Light Two', cursive; }
.board{  font-family:'Shadows Into Light Two', cursive; font-weight:400; border: solid 15px #FCFEFD;
padding:60px 20px;
}



</style>

</head>

<body>
<div class="container">
<h2>God's White Board.</h2>
<p align="right"> 
<a class="btn btn-info" href="../index.php"> View Your Page</a>

<a href="../include/logout.php" class="btn btn-sm btn-danger" >Log out</a> 

</p>
<hr />

<?
if(isset($_POST['admin'])){
	if($_POST['user']==='Govin' && $_POST['pass']==='Rotra!1Sor' ){
		$_SESSION['whatami']=1;
	}else{
		echo'<div class="error">Usename Or Password do not match, Try Again';
	}
}
if($_SESSION['whatami']===1){

if(isset($_POST['note1'])){
	$note1 = $_POST['note1'];
	include("../include/server.php");
			mysqli_select_db ($con, $DataBaseName);
			$sql="INSERT INTO $wightboard (
			`note1`)
			
			VALUES (
			'" . $note1 . "')";
			
			if (!mysqli_query($con, $sql) ) {
				echo mysqli_error($con);
				//	exit;
				$allset = $allset.' <p class="error">Error writing to Database <br>'.mysqli_error($con);
			} else {	
			 echo '<p><i>Saved Sucessful .</i></p>';
			 
		}
}
?>

<form  method="post" name="theForm" id="theForm"  action="<? $_SERVER['PHP_SELF'];?>">
 
 <p>Write Your Note</p><br />

 <textarea class="form-control"  required="required" name="note1" id="note1" >
 
 </textarea>
  
  <br />
<input  class="btn" type="submit" name="submit" value="Submit" />
</form>
<?
}else{
	
	?>
     <div class="col-md-4">
	<form  method="post" name="adminForm" id="adminForm"  action="<? $_SERVER['PHP_SELF'];?>">

 <p>Login</p><br />

<input type="text" name="user" required="required" placeholder="Username" class="form-control" />
<input type="password" class="form-control" required="required" name="pass" id="pass" placeholder="Password" />
  
  <br />
<input  type="submit" class="btn" name="admin" value="Login" />
</form>
</div>
<?
}
?>
</div>

</body>
</html>