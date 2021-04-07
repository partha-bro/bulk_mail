<?php
  $title = "Thank you || Bulk-Email Provider";
  require_once "header.php";
   $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $phone = $_POST['phone'];
  $mail = $_POST['mail'];

  if($f_name == null && $l_name == null && $phone == null && $mail == null){
	  header('Location: support.php');
  }else{  
	  echo "<script> alert('send mail feature is comming soon...'); </script>";
  }
?>
  <!--body starts-->
  <div class="container">
  		<div class="row">
    		<h4>Dear <?php echo $f_name; ?>, thanks for reaching out!</h4>

				<p>We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed below to talk to one of our staff members. Otherwise, we will reply by email as soon as possible.</p>

			<p>Talk to you soon,</p>
			<p>ValueonBuy</p>
    	</div>
	</div>
  <!--body ends-->
<?php
  require_once "footer.php";
?>