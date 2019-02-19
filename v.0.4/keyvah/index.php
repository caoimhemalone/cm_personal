<?php get_header(); ?>

<header>
		    <!--  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		        <ol class="carousel-indicators">
		          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		        </ol>
		        <div class="carousel-inner" role="listbox">
		          <div class="carousel-item active" style="background-image: url('images/example3.jpg')">
		            <div class="carousel-caption d-none d-md-block">
		              <h3>First Slide</h3>
		              <p>This is a description for the first slide.</p>
		            </div>
		          </div>
		          <div class="carousel-item" style="background-image: url('images/example2.jpg')">
		            <div class="carousel-caption d-none d-md-block">
		              <h3>Second Slide</h3>
		              <p>This is a description for the second slide.</p>
		            </div>
		          </div>
		          <div class="carousel-item" style="background-image: url('images/example4.jpg')">
		            <div class="carousel-caption d-none d-md-block">
		              <h3>Third Slide</h3>
		              <p>This is a description for the third slide.</p>
		            </div>
		          </div>
		        </div>
		        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		          <span class="sr-only">Previous</span>
		        </a>
		        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		          <span class="carousel-control-next-icon" aria-hidden="true"></span>
		          <span class="sr-only">Next</span>
		        </a>
		      </div>-->

		    <!--  <div class="scrollToTop">
		      	<a href="#top"><button> ^ </button></a>
		      </div>-->


				<!-- <div id="memberships"></div> -->
				<div class="memberships " >

					<div class="container construction-section">
						<h1 >This site is currently under construction</h1>
						<!--<img src="images/arrow_down_black.gif">-->
						<h3 class="slowReveal ">Some Things I Do</h3>
						<div class="row thing-section">
							<div class="col-md-12">
								<div class="row">
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<a href="https://www.gambling.com/corporate" target="_blank">
											<div class="membership-option  slowReveal">
												<h2>Web Development</h2>
												<p>I currently work for a web development company called Kax Media which is a sub company of Gambling.com Group. I also make Web Sites as a side hustle. </a>For enquiries email me at 
													<a class="email"href="mailto:caoimhegmalone@gmail.com">caoimhegmalone@gmail.com </a>
												</p>

											</div>
										</a>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<a href="https://www.instagram.com/caoimhemalone" target="_blank">
											<div class="membership-option  slowReveal">
												<h2>Photography</h2>
												<p>Taking photos has been a hobby of mine for the past few years. I post on Instagram and hope to showcase my portfolio on this site </p>

											</div>
										</a>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
										<a href="https://www.youtube.com/keyvah" target="_blank">
											<div class="membership-option  slowReveal">
												<h2>Video</h2>
												<p> A few years ago I bought a GoPro and decided to start a YouTube channel to hold the memories of my travels. I vlog, make travel videos and the odd tech video.   </p>

											</div>
										</a>
									</div>
								</div>
								<div class="row ">
									<div class="col-md-12">
										<div class="row">
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<a href="https://www.twitter.com/caoimhemalone95" target="_blank">
													<div class="membership-option  slowReveal">
														<h2>Twitter</h2>
														<p>Where I share my random thoughts </p>

													</div>
												</a>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<a href="https://www.strava.com/activities/2005215769" target="_blank">
													<div class="membership-option  slowReveal">
														<h2>Cycling</h2>
														<p>Working in Dublin City Centre can be a nightmare when it comes to commuting. On public transport it takes me over 1 1/2 hours to get to work. I love cycling to work it only takes me ~40 minutes and I get my workout done before 8:30am</p>

													</div>
												</a>
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
												<a href="https://medium.com/@caoimhegmalone" target="_blank">
													<div class="membership-option  slowReveal">
														<h2>Blog</h2>
														<p>I've always loved writing. English was my favourite class in school. I've decided to write my thoughts and ideas down in blog posts on Medium.</p>

													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

			
<!--			<div class="container">

				<div id="team"></div>
				<div class="team">
					<h3 class="reveal">Our Team</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<div class="team-member reveal">
										<div class="team-overlay"></div>
										<div class="rounded-circle reveal" style="background-image: url('images/team1.jpeg')"></div>
										<p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>				
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<div class="team-member reveal">
										<div class="team-overlay"></div>
										<div class="rounded-circle reveal" style="background-image: url('images/team3.jpg')"></div>
										<p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>				
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									<div class="team-member reveal">
										<div class="team-overlay"></div>
										<div class="rounded-circle reveal" style="background-image: url('images/team2.jpg')"></div>
										<p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>				
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div> 

				
				<div id="timetable"></div>
				<div class="timetable fixed-image">
					<div class="container">
					<h3 class="reveal">Timetable</h3>

						<div class="row">
							<div class="col-md-12">
								<iframe class="schedule schedule-mobile" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTeW3ug1IdkDoVDRjmVv1zGmHnr2wJwwdCVADj5Tjg4RqeUskYdppJepQ7pODDz51Rc9wv8e2KglGKn/pubhtml?widget=true&amp;"></iframe>
							</div>
							<div class="col-md-12">
								<iframe class="schedule schedule-desktop" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRtv_R4QCX7V5oHMvob3YYvRLQ996xrhof0gynTVGiMuaZWE3mI-y1M0KNEcT8c1S34q2CG1ljhybP6/pubhtml?widget=true&amp;headers=false"></iframe>
							</div>
						</div>
					</div>

				</div>
				

				<div class=" white edge--top">
					<div id="about"></div>
					<div class="about">
						<div class="container">
							<h3 class="reveal">About Us</h3>
							<div class="about-info">
							
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div class="contact-info">
								<h5 class="reveal">Contact Information</h5>
								<div class="row">
									<div class="col-md-5 contact-listing">
										<h6> Open Hours </h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<h6> Address </h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										<h6> Email </h6>
										<p>Lorem ipsum dolor sit amet, consectetur </p>
										<h6> Phone Number </h6>
										<p>018888888</p>

									</div>
									<div class="col-md-7 contact-form">
										<!-- <form action="/action_page.php">
											  Your email:<br>
											  <input type="text" name="email" hint="email">
											  <br>
											  Subject:<br>
											  <input type="text" name="subject" hint="Subject">
											  <br>
											  Message:<br>
											  <input type="text" name="message" hint="Message">
											  <br><br>
											  <input class="submit" type="submit" hint="Submit">
										</form>  --><!--
											<h5 class="reveal contact-title">Contact Us</h5>
											<form id="contactForm" action="contact2.php" method="post"> 
												<div>
													<span class="input input--madoka">
														<input class="input__field inputEmail input__field--madoka" type="text" id="input-31" type="text" name="email" />
														<label class="input__label input__label--madoka" for="input-31">
															<svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
																<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
															</svg>
															<span class="input__label-content input__label-content--madoka">Email</span>
														</label>
													</span>
												</div>
												<div>
													<span class="input input--madoka">
														<input class="input__field inputSubject input__field--madoka" type="text" id="input-32" type="text" name="subject"/>
														<label class="input__label input__label--madoka" for="input-32">
															<svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
																<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
															</svg>
															<span class="input__label-content input__label-content--madoka">Subject</span>
														</label>
													</span>
												</div>
												<div>
													<span class="input input--madoka">
														<input class="input__field inputMessage input__field--madoka" type="text" id="input-33" type="text" name="message"/>
														<label class="input__label input__label--madoka" for="input-33">
															<svg class="graphic graphic--madoka" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
																<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
															</svg>
															<span class="input__label-content input__label-content--madoka">Message</span>
														</label>
													</span>
												</div>
												<div><input id="submitBtn" type="submit" value="Send"></div>
										</form>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>

				<div id="blog"></div>
				<div class="blog fixed-image" >
					<div class="container">

					<h3 class="reveal">Blog</h3>
					<div class="row ">
						<div class="col-md-4">
							<a  href="https://medium.com/@bodynamicsgym/example-8b0f2fed97aa" target="_blank">

								<div class="blog-image">
									<img src="images/black-gym.png">
								</div>
								<div class="blog-heading">
									<blockquote class="embedly-card">
										<h5>Example 1 </h5>
								</div>
								<div class="blog-preview">
									<p> "Example" is published by Bodynamics Gym</p>
									</blockquote>

								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a  href="https://medium.com/@bodynamicsgym/example-8b0f2fed97aa" target="_blank">

								<div class="blog-image">
									<img src="images/black-gym.png">
								</div>
								<div class="blog-heading">
									<blockquote class="embedly-card">
										<h5>Example 1 </h5>
								</div>
								<div class="blog-preview">
									<p> "Example" is published by Bodynamics Gym</p>
									</blockquote>

								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a  href="https://medium.com/@bodynamicsgym/example-8b0f2fed97aa" target="_blank">

								<div class="blog-image">
									<img src="images/black-gym.png">
								</div>
								<div class="blog-heading">
									<blockquote class="embedly-card">
										<h5>Example 1 </h5>
								</div>
								<div class="blog-preview">
									<p> "Example" is published by Bodynamics Gym</p>
									</blockquote>

								</div>
							</a>
						</div>
					</div>
				

					<div class="row">
						<div class="col-md-4">
							<a  href="https://medium.com/@bodynamicsgym/example-8b0f2fed97aa" target="_blank">

								<div class="blog-image">
									<img src="images/black-gym.png">
								</div>
								<div class="blog-heading">
									<blockquote class="embedly-card">
										<h5>Example 1 </h5>
								</div>
								<div class="blog-preview">
									<p> "Example" is published by Bodynamics Gym</p>
									</blockquote>

								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a  href="https://medium.com/@bodynamicsgym/example-8b0f2fed97aa" target="_blank">

								<div class="blog-image">
									<img src="images/black-gym.png">
								</div>
								<div class="blog-heading">
									<blockquote class="embedly-card">
										<h5>Example 1 </h5>
								</div>
								<div class="blog-preview">
									<p> "Example" is published by Bodynamics Gym</p>
									</blockquote>

								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a  href="https://medium.com/@bodynamicsgym/example-8b0f2fed97aa" target="_blank">

								<div class="blog-image">
									<img src="images/black-gym.png">
								</div>
								<div class="blog-heading">
									<blockquote class="embedly-card">
										<h5>Example 1 </h5>
								</div>
								<div class="blog-preview">
									<p> "Example" is published by Bodynamics Gym</p>
									</blockquote>

								</div>
							</a>
						</div>
					</div>
				</div>
			</div>-->
		</header>

<?php get_footer(); ?>
