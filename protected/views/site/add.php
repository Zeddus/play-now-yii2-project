<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<center><h1>Add new video</h1></center>

<div class="form">
	
<div style="padding-left:180px; width:500px;">
	<form action="http://play-now.ua/index.php/site/index" method="post">
 <p>
    <label>Your Name:<br></label>
    <input id="name" name="name" type="text"  style="width: 100%;" size="15" maxlength="15">
    </p>
    <p>
    <label>Video link:<br></label>
    <input id="vlink" name="vlink" type="text" style="width: 100%;" size="15" maxlength="50">
    </p> <p>
    <label>Comment:<br></label>
   <textarea name="comment" style="width: 100%; height: 100px;"></textarea>
    </p>
    <p>
    <input type="submit" name="submit" onclick="alert('Thank you!');" value="Add">
    </p></form>
	
</div>
</div><!-- form -->
