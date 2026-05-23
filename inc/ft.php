<section class="actions">
  <a href="board.php"><img src="im/th1.png"><br>BOARD MEMBERS</a>
  <a href="contact-us.html"><img src="im/th2.png"><br>CONTACT US</a>
  <a href="links.php"><img src="im/th3.png"><br>IRISH SOCIETY LINKS</a>
</section>

<footer>
<table width="100%">
<tr>
<td>
  <p>THE HOUSTON IRISH SOCIETY</p>
  <p>P.O. Box 980334, Houston, Texas 77098 | <a href="mailto:houstonirishsociety@gmail.com">houstonirishsociety@gmail.com</a></p>
</td>
<td width="80">
<!-- stripe_inline_donate_app  -->
<div id="app-static-f030bb4cda708b2" class="paypal-donate-holder"></div>
<div id="app_settings" style="display:none;">
 <label class='app_text_label'>Email </label>
 <input class='app_field_input' type="text" name="donate_email"><br>
 
 <label class='app_text_label'>Buisness Name </label>
 <input class='app_field_input' type="text" name="item_name"><br>

<label class='app_text_label'>Currency</label>
<input class='app_field_input' type="text" list="donate-currency" name="donate_currency" onmousedown="value = ''"><br>

 <label class='app_text_label' style="width:100px">Donation Amount</label>
 <input class='app_field_input' type="text" name="donate_amount"><br>
 <label class='app_text_label info'>Leave blank for any amount</label> 

 <label class='app_text_label' style="width:100px">Show credit card images</label>
 <input class='app_field_input' type="checkbox" name="include_credit_cards_img"><br>

<datalist id='donate-currency'>
	<option value="USD" title="$" selected="">USD</option>
	<option value="AUD" title="$">AUD</option>
	<option value="BRL" title="R$">BRL</option>
	<option value="GBP" title="£">GBP</option>
	<option value="CAD" title="$">CAD</option>
	<option value="CZK" title="">CZK</option>
	<option value="DKK" title="">DKK</option>
	<option value="EUR" title="€">EUR</option>
	<option value="HKD" title="$">HKD</option>
	<option value="HUF" title="">HUF</option>
	<option value="ILS" title="₪">ILS</option>
	<option value="JPY" title="¥">JPY</option>
	<option value="MXN" title="$">MXN</option>
	<option value="TWD" title="NT$">TWD</option>
	<option value="NZD" title="$">NZD</option>
	<option value="NOK" title="">NOK</option>
	<option value="PHP" title="P">PHP</option>
	<option value="PLN" title="">PLN</option>
	<option value="RUB" title="">RUB</option>
	<option value="SGD" title="$">SGD</option>
	<option value="SEK" title="">SEK</option>
	<option value="CHF" title="">CHF</option>
	<option value="THB" title="฿">THB</option>
</datalist>
</div>

<script>
var paypalID = "app-static-f030bb4cda708b2"
var /*<{*/donate_email/*}*/ = /*{*/"HoustonIrishSociety@gmail.com"/*}>*/;
var /*<{*/item_name/*}*/ = /*{*/"The Irish Society of Houston"/*}>*/;
var /*<{*/donate_currency/*}*/ = /*{*/"USD"/*}>*/;
var /*<{*/include_credit_cards_img/*}*/ = /*{*/false/*}>*/;
var /*<{*/donate_amount/*}*/ = /*{*/""/*}>*/; 
var paypalDonateImg = "https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif";
if (include_credit_cards_img){
	paypalDonateImg = "https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
}
var srcCode = '<form id="app-static-f030bb4cda708b2" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">'
srcCode += '<input type="hidden" name="cmd" value="_donations">'
srcCode += '<input type="hidden" name="business" value="' + donate_email + '">'
srcCode += '<input type="hidden" name="lc" value="US">'
srcCode += '<input type="hidden" name="item_name" value="' + item_name + '">'
srcCode += '<input type="hidden" name="no_note" value="0">'
if (donate_amount){
	srcCode += '<input type="hidden" name="amount" value="' + donate_amount + '">'
}
srcCode += '<input type="hidden" name="currency_code" value="' + donate_currency + '">'
srcCode += '<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">'
srcCode += '<input type="image" src="' + paypalDonateImg + '" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="margin:0; padding:0; width:auto; background:none;">'
srcCode += '<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">'
srcCode += '</form>'
$("#" + paypalID + ".paypal-donate-holder").html(srcCode);
</script>
</td>
</tr>
</table>
</footer>

	<noscript id="deferred-styles">
		<link rel="stylesheet" type="text/css" href="//editor.turbify.com/css/effects.css?v=1.5.8c" />
		<link rel="stylesheet" type="text/css" href="//editor.turbify.com/css/lightbox.css?v=1.5.8c">
	</noscript>
	<script>
		var loadDeferredStyles = function() {
			var addStylesNode = document.getElementById("deferred-styles");
			var replacement = document.createElement("div");
			replacement.innerHTML = addStylesNode.textContent;
			document.body.appendChild(replacement)
			addStylesNode.parentElement.removeChild(addStylesNode);
		};
		var raf = requestAnimationFrame || mozRequestAnimationFrame ||
			webkitRequestAnimationFrame || msRequestAnimationFrame;
		if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
		else window.addEventListener('load', loadDeferredStyles);
	</script>
	<script src="//editor.turbify.com/js/lightbox.js?v=1.5.8c"  type="text/javascript"></script>
	<script src="//editor.turbify.com/js/spimeengine.js?v=1.5.8c"  type="text/javascript"></script>

</body>
</html>