<!-- <?php 
									if (!isset($_SESSION['idPseudo'])) {
										?>
								<div style="margin-left: 2rem; display: flex;" class="search_button1"><a href="#"><i style="color: #181818;" class="fa fa-user" aria-hidden="true"></i>
									<ul class="nav navbar-nav">
							            <li><a style="color: #181818;" href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> --><!-- <span class="fa fa-user"></span> --><!--  Sign Up  --><<!-- span class="caret"></span> </a>
							            <ul class="dropdown-menu" style="padding-left: 1rem">
							              <li> <a style="color: #000;" href="espaceMembres/connexion.php">membre</a></li>
							              <li> <a style="color: #000;" href="#">tuteur</a></li>
							              <li> <a style="color: #000;" href="espaceAdmin/adminConnexion.php">Admin</a></li>
							            </ul>
							            </li>
							        </ul></a>
								</div> -->
										<?php
									}else {
										?>
								<!-- profil of members -->
								<!-- <div style="margin-left: 2rem" class="search_button"><a href="espaceMembres/profil.php?id=<?= $_SESSION['idPseudo']; ?>"><img style="width: 35px; height: 35px;
								border-radius: 50%" src="espaceMembres/membres/avatars/<?php echo $userinfo['avatar']; ?>"></a></div> -->
										<?php
									}
								?>





<?php
								// if (isset($_SESSION['idAmin'])) {
										?>
								<!-- profil of Admins -->
								<!-- <div style="margin-left: 2rem" class="search_button"><a href="espaceAdmin/adminProfil.php?id=<?= $_SESSION['idAdmin']; ?>"><img style="width: 35px; height: 35px; border-radius: 50%" src="espaceAdmin/admins/avatars/<?php echo $userinfo['avatarAdmin']; ?>"></a></div> -->
									
								<!-- <div style="margin-left: 2rem; display: flex;" class="search_button1"><a href="#"><i style="color: #181818;" class="fa fa-user" aria-hidden="true"></i>
									<ul class="nav navbar-nav">
							            <li><a style="color: #181818;" href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> --><!-- <span class="fa fa-user"></span> --><!--  Sign Up  --><!-- <span class="caret"></span> </a>
							            <ul class="dropdown-menu" style="padding-left: 1rem">
							              <li> <a style="color: #000;" href="espaceMembres/connexion.php">membre</a></li>
							              <li> <a style="color: #000;" href="#">tuteur</a></li>
							              <li> <a style="color: #000;" href="espaceAdmin/adminConnexion.php">Admin</a></li>
							            </ul>
							            </li>
							        </ul></a>
								</div> -->
										<?php
									}
								?>