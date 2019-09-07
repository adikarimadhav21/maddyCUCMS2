<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
					</li>
						<?php
							foreach($ActiveParentPageInfo as $ParentPage) {
								$checkDropDown = false;
								if (count($this->Mdl_Pages->getActiveChildPageByParentId($ParentPage->id)) > 0) {
									$checkDropDown = true;
								}

								if ($checkDropDown) {
									?>
									<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="portfolio.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php echo $ParentPage->title; ?>
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php
										foreach ($this->Mdl_Pages->getActiveChildPageByParentId($ParentPage->id) as $childMenu) {
										?>
											<a class="dropdown-item" href="<?php echo base_url(); ?>Pages/<?php echo $childMenu->id; ?>"><?php echo $childMenu->title; ?></a>
											<?php }?>
									</div>
								</li>
									<?php
								} else { ?>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo base_url(); ?>Pages/<?php echo $ParentPage->id; ?>"><?php echo $ParentPage->title; ?></a>
									</li>
									<?php
								}
							}
						?>

						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url(); ?>Contacts">Contacts</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>
