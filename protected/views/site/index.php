<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

	
	
?>


<style>
	.post{
	float:left;
	padding:20px;
	display:block;
	width:400px;

	}
	
	iframe{
	padding:0px;
	-webkit-box-shadow: 0px 0px 4px 0px rgba(50, 50, 50, 1);
	-moz-box-shadow:    0px 0px 4px 0px rgba(50, 50, 50, 1);
	box-shadow:         0px 0px 4px 0px rgba(50, 50, 50, 1);
	}
</style>

<?php

$result = publishedvideos::model()->findAll('id > :numsz', array(':numsz'=>0));
	foreach ($result as $dduf){
    $d = $dduf->id;
       if($d < $dduf->id){
		   $d = $duff->id;
	   }	
	//if($dduf->moderation == 'yes'){
     //echo '<div class="post"><iframe width="400" height="300" src='.$dduf->videolink.' frameborder="0" allowfullscreen></iframe></div>';
	//}
	}
	$resultsec = publishedvideos::model()->findAll('id > :numsz', array(':numsz'=>0));
	foreach ($resultsec as $ddufa){
   for ($d; $d >= 0; $d--) {
   $standit = publishedvideos::model()->findAll('id=:d', array(':d'=>$d));
   foreach($standit as $one){
	   echo '<div class="post"><iframe width="400" height="300" src='.$one->videolink.' frameborder="0" allowfullscreen></iframe></div>';
   }
   }
	   }	
	
	
	
	
	
	
	
?>


<?php
	$vid = new videos;
	if($_POST['name'] != ''){
	$vid->username=$_POST['name'];
	$vid->videolink=$_POST['vlink'];
	$vid->comment=$_POST['comment'];
	$vid->moderation='no';
	$vid->save(false);
	}
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	