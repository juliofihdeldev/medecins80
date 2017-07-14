<?php
/**
 * Stripe - Payment Gateway integration example (Stripe Checkout)
 * ==============================================================================
 * 
 * @version v1.0: stripe_pay_checkout_demo.php 2016/10/05
 * @copyright Copyright (c) 2016, http://www.ilovephp.net
 * @author Sagar Deshmukh <sagarsdeshmukh91@gmail.com>
 * You are free to use, distribute, and modify this software
 * ==============================================================================
 *
 */
// Stripe library
require 'stripe/stripe/Stripe.php';
$params = array(
	"testmode"   => "on",
	"private_live_key" => "sk_live_xxxxxxxxxxxxxxxxxxxxx",
	"public_live_key"  => "pk_live_xxxxxxxxxxxxxxxxxxxxx",
	"private_test_key" => "sk_test_UljnM2wrIJlK93ObXguBR7L5",
	"public_test_key"  => "pk_test_JFAYO47MdU2oeuTQrjdwDpT4"
);
if ($params['testmode'] == "on") {
	Stripe::setApiKey($params['private_test_key']);
	$pubkey = $params['public_test_key'];
} else {
	Stripe::setApiKey($params['private_live_key']);
	$pubkey = $params['public_live_key'];
}
if(isset($_POST['stripeToken']))
{
	$amount_cents = str_replace(".","","32.52");  // Chargeble amount
	$invoiceid = "14526321";                      // Invoice ID
	$description = "Invoice #" . $invoiceid . " - " . $invoiceid;
	try {
		$charge = Stripe_Charge::create(array(		 
			  "amount" => $amount_cents,
			  "currency" => "usd",
			  "source" => $_POST['stripeToken'],
			  "description" => $description)			  
		);
		if ($charge->card->address_zip_check == "fail") {
			throw new Exception("zip_check_invalid");
		} else if ($charge->card->address_line1_check == "fail") {
			throw new Exception("address_check_invalid");
		} else if ($charge->card->cvc_check == "fail") {
			throw new Exception("cvc_check_invalid");
		}
		// Payment has succeeded, no exceptions were thrown or otherwise caught				
		$result = "success";
	} catch(Stripe_CardError $e) {			
	$error = $e->getMessage();
		$result = "declined";
	} catch (Stripe_InvalidRequestError $e) {
		$result = "declined";		  
	} catch (Stripe_AuthenticationError $e) {
		$result = "declined";
	} catch (Stripe_ApiConnectionError $e) {
		$result = "declined";
	} catch (Stripe_Error $e) {
		$result = "declined";
	} catch (Exception $e) {
		if ($e->getMessage() == "zip_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "address_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "cvc_check_invalid") {
			$result = "declined";
		} else {
			$result = "declined";
		}		  
	}
	
	echo "<BR>Stripe Payment Status : ".$result;
	
	echo "<BR>Stripe Response : ";
	
	print_r($charge); exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
       <head>
        <meta charset="utf-8" />
		<title>Accueil | Medecins80</title>
		<link rel="icon" type="image/ico" href="images/logo.jpg" />
		<link rel="stylesheet" href="css/design.css" />
		<script src="js/jquery.js"></script>
		<script src="js/carousel.js"></script>
	</head>
		<body>
		<div id="enTete">
			<div class="content">
				<div class="media">
					<div class="item">
						<img style="width:45%;margin-top:13px;opacity:0.7;" src="images/i_g.png" />
					</div>
					<div class="item">
						<img style="width:90%;margin-top:3px;opacity:0.7;" src="images/t_g.png" />
					</div>
					<div class="item">
						<img style="width:55%;margin-top:10px;" src="images/f_g.png" />
					</div>
					<div class="cont">
						<strong>Call Us:</strong> +509 48188107 | Email : <a class="mailto" href="mailto:contact@gmedicins80.com">contact@medicins80.com</a>
					</div>
				</div>
			</div>
		</div>
		<div id="menu">
			<div class="content">
				<div class="link">
						<a href="index.html">
							<div class="item">
								Accueil
							</div>
						</a>
						<a href="index.html">
							<div class="item">
								Actualites
							</div>
						</a>
						 
						<a href="aboutus.html">
							<div class="item">
							A Propos <!-- Mission -> Vision -> Objectifs --> 
							</div>
						</a>

						<a href="service.html">
							<div class="item">
								Programmes
							</div>
						</a>
						
						<a href="comment_devenir_membres.html">
							<div class="item">
									Devenir membre 
							</div>
						</a>
					
						<a href="contact.html">
							<div class="item">
								Contact
							</div>
						</a>
						<a href="contact.html">
							<div class="item active">
								Faire un don
							</div>
						</a>
					
					<div class="search">
						<img src="images/loupe.png" />
					</div>
				</div>
				<div class="logo">
					<a href="index.php"> <img src="images/logo.jpg" /> </a>
				</div>
			</div>
		</div>
		<div id="searchDiv">
			<div class="content">
				<img class="close" src="images/token_x.png" />
				<input type="text" name="search" placeholder="Type To Search" />
			</div>
		</div>

		<div id="communication">
			<div class="content">
				<div class="body">
					<div class="form">
						<div class="titleOne">
							Faites un don a l'organisation
						</div>
						<div class="titleTwo">
						    <input type="Number" placeholder="1000 $ us" name="montant" class="montant" hidden /> 
                        </div>
                        <!--
						<form id="sendMessage" method="POST" action="">
							<input type="text" value="sendMessage" name="w" hidden/>
							<input class="input" type="text" name="Votre nom" placeholder="* Votre nom:" required/>
							<input class="input" type="email" name="email" placeholder="* Email:" required/>
							<input class="input" type="number" name="email" placeholder="* Le montant: $10 USD " min="10" required/>
							
							<input class="input" type="text" name="carte" placeholder=" Card number : **** **** **** ****:" required/><br />
							<input class="input" type="month" name="expiration" placeholder="* Dae d'expiration:" required/>
			
							<textarea class="textarea" name="yourMessage" placeholder="* Your Message:" required></textarea>
                            <input class="submit" type="submit" value="Send" />
                            
                        </form>
                        -->
                          <form action="" method="POST">
                                <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="<?php echo $params['public_test_key']; ?>"
               						data-amount="9999"
                                    data-name="Medecins80.COM"
                                    data-description="Donation"
                                    data-image="http://medecins80.com/dev/images/logo.jpg"
                                    data-locale="auto"
                                    data-zip-code="true">
                                </script>
                            </form>
						<div class="btnInfoResult">
							
								<div class="infoResult">
									<div class="infoResultText">
										
									</div>
									<a href="index.html">
										<div class="confirm">
											Fermer
										</div>
									</a>
								</div>
						</div>
					</div>
					<div class="infos">
						<div class="logo">
							<img src="images/logo.jpg" />
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div id="social">
			<div class="content">
				<div class="title">
					<span class="bar">
						<span class="gras">Rester en contact avec nous via </span> <span class="italic">les r?aux sociaux</span>
					</span>
					<div class="bBar">
						.
					</div>
					<div class="min">
						Contactez nous   en cliquant sur un de ses liens
					</div>
				</div>
				<div class="item">
					<div class="pixOne">
						<img src="images/facebook.png" />
					</div>
					<div class="txt">
						Facebook
					</div>
				</div>
				<div class="item">
					<div class="pixTwo">
						<img src="images/twitter.png" />
					</div>
					<div class="txt">
						Twitter
					</div>
				</div>
				<div class="item">
					<div class="pixThree">
						<img src="images/instagram.png" />
					</div>
					<div class="txt">
						Instagram
					</div>
				</div>
			</div>
		</div>
<!-- 		<?php include("includes/piedPage.php");?> -->
	
	<div id="contact">
		<div class="content">
			<table>
				<tr>
					<td>
						<div class="item">
							<img class="logopied" src="images/logo.jpg" />
							<div class="txt">
								Medecins80 est la meilleur Some text
							</div>
							<span class="em"><em>Enjoy your design!</em></span>
							</div>
					</td>
					<td>
						<div class="item">
							<div class="titre">Information sur organisation</div>
							<div class="it">
								<span class="square">?</span> 
								<a href="aboutus.html"> Apropos de Medcin80</a>
							</div>
							<div class="it">
								<span class="square">?</span> 
								 Medcin80 
							</div>
							<div class="it">
								<span class="square">?</span> 
								Privacy Policy
							</div>
						</div>
					</td>
					<td>
						<div class="item">
							<div class="titre">Newsletter</div>
							<form id="addNewsletter" method="post" action="newsletters.php">
								<input type="text" value="newsletters" name="w" hidden/>
								<label for="mail">Email adress</label><br />
								<input class="input" type="email" name="email" placeholder="Your email address"  />
								<input class="submit" type="submit" value="Sign up" />
							</form>
							<div class="btnInfoResult">
							
								<div class="infoResult">
									<div class="infoResultText">
										
									</div>
									<a href="index.html">
										<div class="confirm">
											Fermer
										</div>
									</a>
								</div>
							</div>
						</div>
					</td>
					<td>
						<div class="item">
							<div class="titre">Tags</div>
					
						<ul>
							<li>Fait un Don </li>
							
						</ul>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="copyright">
			?Copyright <!-- '.date('Y').' --> Mai 2016 -Medcin80 | Design by <a href="www.fihdel.com">FIHDEL</a>
		</div>
	</div>
	<div id="modal">
		<div class="loading">
			<img src="images/loading.gif" /><br />
			Loading
		</div>
		<div class="alert">
			
		</div>
		<div class="shop">
			
		</div>
	</div>
        <script src="js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- TO DO : Place below JS code in js file and include that JS file -->
<script type="text/javascript">
	Stripe.setPublishableKey('<?php echo $params['public_test_key']; ?>');
  
	$(function() {
	  var $form = $('#payment-form');
	  $form.submit(function(event) {
		// Disable the submit button to prevent repeated clicks:
		$form.find('.submit').prop('disabled', true);
	
		// Request a token from Stripe:
		Stripe.card.createToken($form, stripeResponseHandler);
	
		// Prevent the form from being submitted:
		return false;
	  });
	});

	function stripeResponseHandler(status, response) {
	  // Grab the form:
	  var $form = $('#payment-form');
	
	  if (response.error) { // Problem!
	
		// Show the errors on the form:
		$form.find('.payment-errors').text(response.error.message);
		$form.find('.submit').prop('disabled', false); // Re-enable submission
	
	  } else { // Token was created!
	
		// Get the token ID:
		var token = response.id;

		// Insert the token ID into the form so it gets submitted to the server:
		$form.append($('<input type="hidden" name="stripeToken">').val(token));
	
		// Submit the form:
		$form.get(0).submit();
	  }
	};
</script>
</body>
</html>