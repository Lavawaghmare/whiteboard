<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gods White Board :: Evergreen, CO</title>
<script type="text/javascript" src="include/jquery-1.11.1.js"></script>
<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="include/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="include/bootstrap-theme.min.css"/>

/* codes
<style type="text/css">
body{ background-image:url(images/Board.png);
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="page-header">
    <div class="container">
        <div class="col-lg-12">
        <h1 class="fonttype1">God's White Board</h1>
        </div>
    </div>
</div>
<div class="container">
		<div class="col-lg-12">
        <div class="board" align="center">
        
       
            <?php // add code to display latest text 
			include("include/server.php");
			mysqli_select_db ($con, $DataBaseName);
			$sql = "SELECT * FROM $wightboard WHERE status = '1' ORDER BY date DESC LIMIT 1";
             $check  = mysqli_query($con, $sql )or die(mysqli_error($con));
			  while($info1 = mysqli_fetch_array( $check )) {
			   echo '<h2 class="fonttype2">' . $info1['note1'] . '</h2>';			
			  }
			?>
            
        </div>
        <div align="right" style="padding:20px;">
 <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
 </div>
</div>
</div>

</body>
</html>