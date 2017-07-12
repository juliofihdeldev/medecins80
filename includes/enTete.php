<?php
	echo '
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
					<strong>Call Us:</strong> +509 37036770 | Email : <a class="mailto" href="mailto:contact@gra-haiti.com">contact@gra-haiti.com</a>
				</div>
			</div>
		</div>
	</div>
	<div id="menu">
		<div class="content">
			<div class="link">';
				if(isset($_GET['name']) && !empty($_GET['name']))
				{
					if($_GET['name'] == "106a6c241b8797f52e1e77317b96a201")
					{
						echo '
						<a href="index.php?name='.md5("home").'">
							<div class="item active">
								Home
							</div>
						</a>';
					}
					else 
					{
						echo '
						<a href="index.php?name='.md5("home").'">
							<div class="item">
								Home
							</div>
						</a>';
					}
					if($_GET['name'] == "d2fc17cc2feffa1de5217a3fd29e91e8")
					{
						echo '
						<a href="men.php?name='.md5("men").'">
							<div class="item active">
								Service
							</div>
						</a>';
					}
					else
					{
						echo '
						<a href="men.php?name='.md5("men").'">
							<div class="item">
								Service
							</div>
						</a>';
					}
					
			
					if($_GET['name'] == "034fdb87d18f2a24b725809af719819b")
					{
						echo '
						<a href="aboutus.php?name='.md5("aboutus").'">
							<div class="item active">
								About Us
							</div>
						</a>';
					}
					else
					{
						echo '
						<a href="aboutus.php?name='.md5("aboutus").'">
							<div class="item">
								About Us
							</div>
						</a>';
					}
					if($_GET['name'] == "2f8a6bf31f3bd67bd2d9720c58b19c9a")
					{
						echo '
						<a href="contact.php?name='.md5("contact").'">
							<div class="item active">
								Contact
							</div>
						</a>';
					}
					else
					{
						echo '
						<a href="contact.php?name='.md5("contact").'">
							<div class="item">
								Contact
							</div>
						</a>';
					}
				}
				else
				{
					echo '
					<a href="index.php?name='.md5("home").'">
						<div class="item active">
							Home
						</div>
					</a>
					<a href="men.php?name='.md5("men").'">
						<div class="item">
							Services
						</div>
					</a>
				

					<a href="aboutus.php?name='.md5("aboutus").'">
						<div class="item">
							About Us
						</div>
					</a>
					<a href="contact.php?name='.md5("contact").'">
						<div class="item">
							Contact
						</div>
					</a>';
				}
				echo '
				
				<div class="search">
					<img src="images/loupe.png" />
				</div>
			</div>
			<div class="logo">
				<a href="index.php"><img src="images/gralogo.jpg" /></a>
			</div>
		</div>
	</div>
	<div id="searchDiv">
		<div class="content">
			<img class="close" src="images/token_x.png" />
			<input type="text" name="search" placeholder="Type To Search" />
		</div>
	</div>';
?>