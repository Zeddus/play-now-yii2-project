

<center><h1>Вход для администрации</h1></center>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

  	<div id="formz" style="float:left; padding-left:250px; width:400px">
	<form action="http://play-now.ua/index.php/site/login" method="post">
   <p>
 Логин:<br></label>
    <input id="loginz" name="login" type="text" style="width:100%" size="15" maxlength="16">
    </p>
<p>
 Пароль:<br></label>
    <input id="passwordz" name="password" style="width:100%" type="password" size="15" maxlength="16">
    </p>
<p>
    <input type="submit" style="width:100%" name="submit" value="Войти">
</p></form>
</div>


	<?php
 $answer;	 
	$mist = $_POST['login'];
    $bip = Users::model()->exists('login = :mist', array(':mist' => $mist));	
	if($bip){
		$answer = 1;
	}else{
		$answer = 0;
	}
	
	$miszt = $_POST['password'];
	$woopsword;
	$bips = Users::model()->exists('password = :miszt', array(':miszt' => $miszt));	
	if($bips){
		$woopsword = 1;
	}else{
	$woopsword = 0;
	}						
						
 /*$ent = new users;
	if($_POST['login'] != ''){
	$ent->login=$_POST['login'];
	$ent->password=$_POST['password'];
	$ent->save(false);
	}*/

 
	?>
	
	
	
<span id="portant" style="visibility:hidden;"><?php echo $answer; echo $woopsword;?></span>

		
	<script>
	window.onload = function () {
    var detector = document.getElementById('portant').innerHTML;
	if(detector == '11'){
		document.cookie='isloginonplaynow=true';
		  window.location.href = "http://play-now.ua/index.php/site/admin"
		}else{
			document.cookie='isloginonplaynow=false';
		}
   };

	</script>

<?php $this->endWidget(); ?>
</div><!-- form -->
