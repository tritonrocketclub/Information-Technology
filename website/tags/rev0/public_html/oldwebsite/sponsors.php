<?php
    // This includes the <HTML> tags and all the necessary meta
    include 'header.php';
?>

    <!--		Title, edit on every page			-->
    <title>Sponsors</title>

<?php
    // This includes the </HTML> tag and opening body
    // tags, as well as nav elements
    include 'nav.php';
?>

<!--		Unique Page Info Starts HERE		-->

<div class="main-container">

   <header class="banner" id="sponsor-banner">
   </header>

   <div class="main wrapper clearfix">
       
		<h1>Sponsors</h1>
			<h2>Want to sponsor the Triton Rocket Club?</h2>
				<p>You can sponsor the Triton Rocket Club by donating a
                    monetary sum and/or discounting your goods. To find
                    out more about how you can sponsor us, contact our
                    Corporate Relations Officer
				<a href="contact.php">here</a>.</p>

        <div class="donate">
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="FE5DFQLP58PFE">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
             border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
          </form>
          
        </div>
        <img class="donate" alt="Club Picture" src="img/sponsor.jpg">


<?php
    include 'footer.php';
?>
</div>
