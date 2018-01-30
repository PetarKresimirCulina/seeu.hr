<!doctype html>
<html lang="<?php echo pll_current_language(); ?>">
	<?php get_header(); ?>

  	<body data-spy="scroll" data-target=".navbar" data-offset="52">

    <nav class="navbar navbar-expand-md navbar-light bg-navbar fixed-top" style="<?php if ( is_admin_bar_showing() ) echo 'margin-top:32px;' ?>">
		
      <a class="navbar-brand" href="#"><img class="logo-img" src="<?php echo get_bloginfo("template_url") . '/img/Logo_final 1.png'; ?>"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#onama"><?php echo pll__( 'about' ); ?> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#djelatnosti"><?php echo pll__( 'what-we-do' ); ?></a>
          </li>
		 <li class="nav-item">
            <a class="nav-link page-scroll" href="#kontakt"><?php echo pll__( 'contact' ); ?></a>
		</li>
        </ul>

			<?php pll_the_languages( array(  'show_flags' => 1 , 'hide_current' => 1) ); ?>
			 

		  
      </div>
    </nav>

    <main role="main">
		<div id="flexWrapper">
		<div id="landing" class="container-fluid section1 d-flex align-items-center">
			<div class="row mx-auto landingRowIE">
				<div class="col-12 text-center">
					<h1 class>
						<?php
							$page = get_page_by_path( 'landing-' . pll_current_language());
							$content = apply_filters('the_content', $page->post_content); 
							echo $content;
						?>
					</h1>
				</div>
			</div>
		</div>
		</div>
		
		<div id="onama" class="container-fluid section2">
			
			<div class="row">
				<div class="col-12 text-center">
					<h2>
						<?php
							$page = get_page_by_path( 'kakvi-smo-' . pll_current_language());
							echo get_the_title( $page ); 
						?>
					</h2>
					<p>
						<?php
							$content = apply_filters('the_content', $page->post_content); 
							echo $content;
						?>

					</p>
					
					<hr>
					
					<h2>
						<?php
							$page = get_page_by_path( 'sto-znamo-' . pll_current_language());
							echo get_the_title( $page ); ?>
					</h2>
					<p>
						<?php
							$content = apply_filters('the_content', $page->post_content); 
							echo $content;
						?>
					</p>
				</div>
			</div>
			
		</div>
		
		<div class="container-fluid section3">
			
		</div>
		
		<div id="djelatnosti" class="container-fluid section4">
			<div class="row">
				<div class="col-12 text-center">
					<h1><?php echo pll__( 'what-we-do' ); ?></h1>
				</div>
			</div>
			
			<div class="divider"></div>
			
			<div class="row">
				
					<div class="col-md-4">
						
						<div class="card">
							<div class="text-center">
								<h1><i class="fas fa-car"></i></h1>
							</div>
							<div class="card-body">
								<h5 class="card-title text-center">
									<?php
										$page = get_page_by_path( 'djelatnost-1-' . pll_current_language());
										echo get_the_title( $page );
									?>
								</h5>
								<p class="card-text text-justify">
									<?php
										$content = apply_filters('the_content', $page->post_content); 
										echo $content;
									?>
								</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="card">
							<div class="text-center">
								<h1><i class="fas fa-calendar"></i></h1>
							</div>
							<div class="card-body">
								<h5 class="card-title text-center">
									<?php
										$page = get_page_by_path( 'djelatnost-2-' . pll_current_language());
										echo get_the_title( $page );
									?>
								</h5>
								<p class="card-text text-justify">
									<?php
										$content = apply_filters('the_content', $page->post_content); 
										echo $content;
									?>
								</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="card">
							<div class="text-center">
								<h1><i class="fas fa-pen-square"></i></h1>
							</div>
							<div class="card-body">
								<h5 class="card-title text-center">
									<?php
										
										$page = get_page_by_path('djelatnost-3-' . pll_current_language());
										
										
										echo get_the_title( $page );
									?>
								</h5>
								<p class="card-text text-justify">
									<?php
										$content = apply_filters('the_content', $page->post_content); 
										echo $content;
									?>
								</p>
							</div>
						</div>
					</div>
				</div>
		</div>
		
		<div class="container-fluid section-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.4499958369497!2d15.949785215002661!3d45.80224551884495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6c1dfdc4435%3A0xbe6ad7db76061a9f!2sKlenovni%C4%8Dka+ul.+23%2C+10000%2C+Zagreb!5e0!3m2!1sen!2shr!4v1516024316199" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		
		<div id="kontakt" class="container-fluid section5">
			<div class="row">
				<div class="col-12 text-center">
					<h2>
						<?php
							$page = get_page_by_path( 'kontakt-' . pll_current_language());
							echo get_the_title( $page );
						?>
					</h2>
				</div>
			</div>
			
			<div class="divider"></div>
			
			<div class="row">
				<div class="col-md-8 offset-md-2 col-xs-12">
					<?php
						$content = apply_filters('the_content', $page->post_content); 
						echo $content;
					?>
				</div>
			</div>
			
			<div class="divider"></div>
			
			<div class="row-fluid">
				<div class="col-md-6 offset-md-3">
					<div class="row">
					
						<div class="col-md-4 text-center text-md-left">
							<h5><strong><?php echo pll__( 'office' ); ?></strong></h5>
							<p>
								<i class="fas fa-mobile-alt"></i><a href="tel:+38512028142"> +385 1 202 8142</a></br>

							</p>
						</div>
					
						<div class="col-md-4 text-center text-md-left">
							<h5><strong>Maja Sobota</strong></h5>
							<p>
								<i class="fas fa-envelope"></i><a href="mailto:maja.sobota@seeu.hr">  maja.sobota@seeu.hr</a></br>
								<i class="fas fa-mobile-alt"></i><a href="tel:+385989829160"> +385 98 982 9160</a></br>
								<i class="fab fa-skype"></i><a href="callto:maja.sobota"> maja.sobota</a>

							</p>
						</div>
						
						<div class="col-md-4 text-center text-md-left">
							<h5><strong>Hrvoje Kosar</strong></h5>
							<p>
								<i class="fas fa-envelope"></i><a href="mailto:hrvoje.kosar@seeu.hr">  hrvoje.kosar@seeu.hr</a></br>
								<i class="fas fa-mobile-alt"></i><a href="tel:+38598405062"> +385 98 405 062</a></br>
								<i class="fab fa-skype"></i><a href="callto:hrvoje.kosar"> hrvoje.kosar</a>

							</p>
						</div>
					</div>
				</div>
			</div>
			
			<hr class="footer-divider">
			
		</div>

    </main><!-- /.container -->
	
	
	
	<?php get_footer(); ?>
  </body>
</html>
