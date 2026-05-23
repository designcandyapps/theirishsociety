<?php include("inc/hd2.php");?>
<section class="hero7" style="background:url(https://theirishsociety.org/im/members.jpg) no-repeat;"><h1 style="font-size:38.5rem; color:#fff;">Become a Member</h1></section>
<section class="sub">
<form method="post" action="https://www.paypal.com/cgi-bin/webscr"target="paypal" >
<input type="hidden" name="cmd" value="_s-xclick"><input type="hidden" name="hosted_button_id" value="447SGZ5TY3D7Y">
<input type="hidden" name="on0" value="Membership Options">
Membership Options:<br>
<select name="os0">
  <option value="Single Membership">Single Membership - $35.00 USD</option>
  <option value="Family Membership">Family Membership - $50.00 USD</option>
  <option value="Life-Time Membership over 62">Life-Time Membership (Over 62) - $250.00 USD</option>
  <option value="Life-Time Membership Under 61">Life-Time Membership (Under 61) - $500.00 USD</option>
</select><br>
<br><br>
<input type="hidden" name="on1" value="Membership Type">
Membership Type:<br>
<select name="os1">
  <option value="New Member">New Member</option>
  <option value="Renewal">Renewal</option>
  <option value="Update Information">Update Information</option>
</select><br>
<br><br>
<input type="hidden" name="currency_code" value="USD">
<input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" style="margin:0; padding:0; width:auto; background:none;">
</form>
</section>
<?php include("inc/ft.php");?>