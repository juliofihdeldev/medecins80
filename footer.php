<?php 
echo'

	<div id="contact">
		<div class="content">
			<table>
				<tr>
					<td>
						<div class="item">
							<img class="logopied" src="images/logo.jpg" />
							<div class="txt">
								Medecins80 est la Some text 
							</div>
							<span class="em"><em></em></span>
							</div>
					</td>
					<td>
						<div class="item">
							<div class="titre">Information sur organisation</div>
							<div class="it">
								<span class="square">▪</span> 
								<a href="aboutus.html"> Apropos de Medcin80</a>
							</div>
							<div class="it">
								<span class="square">▪</span> 
								 Medcin80 
							</div>
							<div class="it">
								<span class="square">▪</span> 
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
			© Copyright <!-- '.date('Y').' --> Mai 2016 -Medcin80 | Design by <a href="www.fihdel.com">FIHDEL</a>
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
	</body>
</html>
';
?>