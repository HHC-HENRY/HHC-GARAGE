								<!-- Admin -->
							<?php

							$isAdmin = false;

							if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin')
							{
								$isAdmin = true;
							}

							?>