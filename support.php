<?php
  $title = "Support || Bulk-Email Provider";
  require_once $_SERVER["DOCUMENT_ROOT"]."/bulk_mail/header.php";
?>
  <!--body starts-->
  <div class="cointainer-fluid">

  <div class="row" style="background-color: #29b6f6">
    <form class="col m6" method="post" action="submit.php">
      <h5 class="white-text" align="center" id="support">CONTACT US FOR BUSINESS</h5>
      <hr/>
        <div class="input-field col m8">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate white" name="f_name" value="" required style="border-radius: 10px;">
          <label for="icon_prefix"><b>&nbsp;First Name</b></label>
        </div>
        <div class="input-field col m8">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate white" name="l_name" value="" required style="border-radius: 10px;"  >
          <label for="icon_prefix"><b>&nbsp;Last Name</b></label>
        </div>
        <div class="input-field col m8" >
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="text" class="validate white" name="phone" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required style="border-radius: 10px;">
          <label for="icon_telephone"><b>&nbsp;Telephone</b></label>
        </div>
        <div class="input-field col m8">
          <i class="material-icons prefix">email</i>
          <input id="icon_email" type="email" class="validate white" name="mail" value="" required style="border-radius: 10px;">
          <label for="icon_email"><b>&nbsp;E-Mail</b></label>
        </div>
        <div class="input-field col m8" align="center">
        <input class="btn-large" style="border-radius: 20px; background-color: #182a3c" type="submit" name="action" value="Submit">
      </div>
    </form>
      
      <div class="row">
        <div class="section">
          <div class="col m6" style="margin-top: 2%">
            <img src="img/support.png" class="responsive-img" alt="" />
          </div>
        </div>
      </div>
  </div>
        
  </div>      

  <!--body ends-->

<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/bulk_mail/footer.php";
?>