

<center><h1>Administrator account</h1></center>

  	<div id="formz" style="float:left; padding-left:250px; width:400px">
	
</div>


	<?php
 
 /*$ent = new users;
	if($_POST['login'] != ''){
	$ent->login=$_POST['login'];
	$ent->password=$_POST['password'];
	$ent->save(false);
	}*/

 
	?>
<span id="portant" style="visibility:hidden;"><?php echo $answer; echo $woopsword;?></span>

		
	<script>

		function getCookie(name) {
	var cookie = " " + document.cookie;
	var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0) {
		offset = cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = cookie.indexOf(";", offset)
			if (end == -1) {
				end = cookie.length;
			}
			setStr = unescape(cookie.substring(offset, end));
		}
	}
	return(setStr);
}
	
	window.onload = function () {
	var admaacess = getCookie('isloginonplaynow');
	
if(admaacess != 'true'){
	window.location.href = "http://play-now.ua/index.php/site/index"
}else{
	
}

  /*var detector = document.getElementById('portant').innerHTML;
	if(detector == '11'){
		document.getElementById('formz').style.display = 'none';
	    
	var adminpanel = "<div><?php echo '= admin panel =<br/>'; 

	$result = videos::model()->findAll('id > :numsz', array(':numsz'=>0));
	foreach ($result as $buf){
	if($buf->moderation == 'no'){
	$disre = '<button> publish</button> <button >reject</button> <br/>';
	echo $buf->username.' >> '.$buf->videolink.' >> '.$buf->comment.$disre;}
}

	$videoz = new videos;?></div>";	
		
		document.write(adminpanel);
	}*/
   };

   </script>	
   


   <?php
   
    echo '<h3><b>= New video =</b></h3><br/>'; 

	$result = videos::model()->findAll('id > :numsz', array(':numsz'=>0));
	foreach ($result as $buf){
	if($buf->moderation == 'no'){
		 //adding from all 'no' videos
	
	if($_POST['ac'.$buf->id] != ''){
    $vid = new publishedvideos;
	$vid->username=$buf->username;
	$vid->videolink=$buf->videolink;
	$vid->comment=$buf->comment;
	$vid->save();
	$post=videos::model()->findByPk($buf->id);
	$post->moderation='yes';
	//$post->id=$b+1;
	$post->save(); 
	
	
	
	header("Refresh:0");
	}
	//delete if bad
	if($_POST['ca'.$buf->id] != ''){
	$post=videos::model()->findByPk($buf->id); 
    $post->delete(); 
	header("Refresh:0");
	}
	
	$disre = '<br/><form action="http://play-now.ua/index.php/site/admin" method="post">  <input style="visibility:hidden;width:10px;" name="ac'.$buf->id.'" type="text" size="15" maxlength="16" value="yes"><input type="submit" onclick="fade_out_yes()" name="control" value="publish"></form><br/><form action="http://play-now.ua/index.php/site/admin" method="post"><input style="width:10px;visibility:hidden;" name="ca'.$buf->id.'" type="text" size="15" maxlength="16" value="nope"><input type="submit" onclick="fade_out_yes()" name="control" value="reject"></form> <br/>';
	echo '<div style="padding:20px;border-bottom:2px solid black;"><i>From: </i>'.$buf->username.'<br/><iframe width="400" height="300" src="'.$buf->videolink.'" frameborder="0" allowfullscreen></iframe><br/> 	'.$buf->comment.'<br/>'.$disre.'</div><br/>';}}
   
	/*$enta = new videos;
	if($_POST['ac'] != ''){
	$enta->moderation=$_POST['ac'];
	$enta->save(false);}*/

	echo '<h3><b>= Edit video =</b></h3><br/>'; 

    $numsz = 0;
	$a = 0;
	$arr = array();
	$resulta = publishedvideos::model()->findAll('id > :numsz', array(':numsz'=>0));
	foreach ($resulta as $dduf){
     echo '
	 <br/><form action="http://play-now.ua/index.php/site/admin" method="post">
	 <input style="" name="a'.$dduf->id.'" type="text" size="15" maxlength="16" value="'.$dduf->username.'">
	 <input style="" name="aa'.$dduf->id.'" type="text" size="15" maxlength="125" value="'.$dduf->videolink.'">
	 <input style="" name="aaa'.$dduf->id.'" type="text" size="15" maxlength="255" value="'.$dduf->comment.'">
	 <input type="submit" name="controlz" onclick="fade_out_yes()" value="edit"></form>
	 <form action="http://play-now.ua/index.php/site/admin" method="post">
	<form action="http://play-now.ua/index.php/site/admin" method="post">
	<input style="width:10px;visibility:hidden;" name="qa'.$dduf->id.'" type="text" size="15" maxlength="16" value="nope">
	<input type="submit" name="control" onclick="fade_out_yes()" value="delete"></form>
	 <iframe width="400" height="300" src='.$dduf->videolink.' frameborder="0" allowfullscreen></iframe>';
	if($_POST['a'.$dduf->id] != ''){
    $postz=publishedvideos::model()->findByPk($dduf->id);
	$postz->username=$_POST['a'.$dduf->id];
	$postz->videolink=$_POST['aa'.$dduf->id];
	$postz->comment=$_POST['aaa'.$dduf->id];
	$postz->save(); 
	header("Refresh:0");
	}
	//delete if bad
	if($_POST['qa'.$dduf->id] != ''){
	$post=publishedvideos::model()->findByPk($dduf->id); 
    $post->delete(); 
	header("Refresh:0");
	}
	
	
	}
	
	
	
	
   ?>
   
   
   <script>
   //for design and eyes
   function fade_out_yes(){
	   alert('Done!');
   }
   
   </script>
