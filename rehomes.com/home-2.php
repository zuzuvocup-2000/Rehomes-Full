<!DOCTYPE html>
<html>
<head>
<?php require_once 'common/head.php'; ?>
</head>
	<body>
		<?php require_once 'common/header.php'; ?>
		
		<section class="featured-panel">
            <div class="uk-container uk-container-center">
                <div class="featured-head">

                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div class="featured-title">
    
                            <div class="blog-title">
                                FROM OUR BLOG.
                            </div>
                            <div class="blog-heading m0">
                                Featured projects
                            </div>
                        </div>
                        <div class="featured-number">
    
                            <div class="number-featured num" data-count="49"></div>
                                
                            <div class="pj-text">
                                Completed Projects
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="uk-grid uk-grid-medium uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-clearfix">
                    <?php 
                        $plan = array(
                            0 => array(
                                
                                'src' => 'resources/img/upload/our_plan_1.jpg',
                                
                                'title' => 'ReHomes Riverside',
                                'content' => 'New york, USA',
                            ),
                            1 => array(
                                'src' => 'resources/img/upload/our_plan_2.jpg',
                                
                                'title' => 'Resort & Villas',
                                'content' => 'New york, USA',
                            ),
                            2 => array(
                                'src' => 'resources/img/upload/our_plan_3.jpg',
                                
                                'title' => 'ReHomes Golden River',
                                'content' => 'New york, USA',
                            ),
                            3 => array(
                                'src' => 'resources/img/upload/our_plan_4.jpg',
                                
                                'title' => 'ReHomes Shophouse',
                                'content' => 'New york, USA',
                            ),
                            
                        )
                    ?>

                        <?php $h=0; for($i=0;$i<=3;$i++){ ?>
                        <div class="featured-plan">
                            <div class="featured-img">

                                <a href="" class="img-cover ">
                                    <img src="<?php echo $plan[$h]['src']?>" alt="">
                                </a>
                            </div>
                            
                            <div class="featured-content">
                                <div class="info-testimonials">
                                    <a href="" class="name-testimonials"><?php echo $plan[$h]['title']?></a>
                                    <a href="" class="address-testtimonials"><?php echo $plan[$h]['content']?></a>
                                </div>
                            </div>
                        </div>
                        <?php $h++;} ?>
                    </div>
                </div>
                <button class="btn btn-see-all">
                    
                    VIEW ALL PROJECTS
                    <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                </button>
            </div>
        </section>
        <section class="wcu-panel" style="background-image: url(resources/img/upload/bg_slide_2.jpg);">
            <div class="uk-container uk-container-center">
                <div class="blog-title">
                    WHY CHOOSE US.
				</div>
                <div class="blog-heading">
                    Where happiness lives
                </div>
                <?php
                    $wcubox = array(
                        0 => array(
                            
                            'icon' => '<i class="fa fa-pagelines" aria-hidden="true"></i>',
                            
                            'title' => 'High quality products',
                            'content' => 'The luxurious and exquisite design harmonious with the surrounding architecture provide the best living.',
                        ),
                        1 => array(
                            'icon' => '<i class="fa fa-camera-retro" aria-hidden="true"></i>',
                            
                            'title' => 'Comprehensive amenities',
                            'content' => 'The landscape infrastructures of streets are arranged in harmony with the common amenities for residents.',
                        ),
                        2 => array(
                            'icon' => '<i class="fa fa-cubes" aria-hidden="true"></i>',
                            
                            'title' => 'Professional services',
                            'content' => 'The customer service center is ready to serve 24/7, support the residents to provide information.',
                        ),
                        3 => array(
                            'icon' => '<i class="fa fa-user-md" aria-hidden="true"></i>',
                            
                            'title' => 'Absolute security',
                            'content' => 'Advanced security system with modern equipments, professional 24/7 security staff.',
                        ),
                        4 => array(
                            'icon' => '<i class="fa fa-hospital-o" aria-hidden="true"></i>',
                            
                            'title' => 'Green and clean Environment',
                            'content' => 'Each urban area of Rehomes is built on the basis of "A place that living is in harmony"',
                        ),
                        5 => array(
                            'icon' => '<i class="fa fa-gg-circle" aria-hidden="true"></i>',
                            
                            'title' => 'Humanitarian community',
                            'content' => 'Family members, as well as building the sense of affection for the neighbors.',
                        ),
                        
                    )
                ?>
                <div class="uk-grid uk-grid-medium uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3 uk-clearfix">
                    <?php $k=0; for($i=0;$i<=5;$i++){ ?>
                        
                        <div class="wcu-box-panel">
                            <div class="wcu-box">
                                <div class="wcu-icon-box">
                                    <?php echo $wcubox[$k]['icon']?>
                                </div>
                                <div class="wcu-box-title">
                                    <?php echo $wcubox[$k]['title']?>

                                </div>
                                <div class="wcu-box-content">
                                    <?php echo $wcubox[$k]['content']?>

                                </div>
                            </div>
                        </div>
                    <?php $k++;} ?>
                </div>
            </div>
        </section>

        <section class="what-we-do">
            <div class="uk-container uk-container-center">
                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                    <div class="title-wwd">
                        <div class="blog-title text-left">
                            WHY CHOOSE US.
                        </div>
                        <div class="blog-heading text-left">
                            Where happiness lives
                        </div>
                    </div>
                    <ul class="tabs">
                        <li class="tab-link current" data-tab="tab-1">RESIDENTIAL DEVELOPMENTS</li>
                        <li class="tab-link" data-tab="tab-2">COMMERCIAL DEVELOPMENTS</li>
                        <li class="tab-link" data-tab="tab-3">INVESTOR</li>
                    </ul>
                </div>

            </div>
            <div id="tab-1" class="tab-content current">
                <div class="our-mission" style="background-image: url(resources/img/upload/bg-our-mission.jpg);">
                    <div class="uk-grid uk-grid-small uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-clearfix">
                        <div class="banner-our-mission">
                            <a href="" title="" class="img-cover">
                                <img src="resources/img/upload/featured-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="our-mission-content">
                            <h2 class="our-mission-title">
                                
                                Residential Developments
                            </h2>
                            <p>The Group successfully ventured into Real Estate by creating a series of residential spaces at strategic locations in Kolkata, Siliguri and Durgapur under the aegis of Dream Homes.</p>
                            <p>Our mission is to engage in issues that are of concern to individuals, families and communities through an uncompromising commitment to create outstanding living, work and leisure environments.</p>
                            <button class="btn btn-more-us">
                                EXPLORE MORE
                                <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-content">
                <div class="our-mission" style="background-image: url(resources/img/upload/bg-our-mission.jpg);">
                    <div class="uk-grid uk-grid-small uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-clearfix">
                        <div class="banner-our-mission">
                            <a href="" title="" class="img-cover">
                                <img src="resources/img/upload/featured-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="our-mission-content">
                            <h2 class="our-mission-title">
                                
                                
                                Commercial Developments
                            </h2>
                            <p>Our mission is to engage in issues that are of concern to individuals, families and communities through an uncompromising commitment to create outstanding living, work and leisure environments.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                            <button class="btn btn-more-us">
                                EXPLORE MORE
                                <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-content">
                <div class="our-mission" style="background-image: url(resources/img/upload/bg-our-mission.jpg);">
                    <div class="uk-grid uk-grid-small uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-clearfix">
                        <div class="banner-our-mission">
                            <a href="" title="" class="img-cover">
                                <img src="resources/img/upload/featured-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="our-mission-content">
                            <h2 class="our-mission-title">
                                
                                Investor
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <button class="btn btn-more-us">
                                EXPLORE MORE
                                <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="number-panel" style="background-image: url(resources/img/upload/bg-cup.jpg);">
            <div class="uk-container uk-container-center">
                <div class="blog-title ">
                    AWARDS & RECOGNITION.
                </div>
                <div class="blog-heading white">
                     Merits we have earned
                </div>

                <div class="uk-grid uk-grid-medium uk-grid-width-small-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-6 uk-clearfix">
                    <div class="project-content">
                        <div class="number-pj num" data-count="49"></div>
                        <div class="pj-text">
                            Completed Projects
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="number-wn num" data-count="25"></div>
                        <div class="pj-text">
                            Green building under construction
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="number-wn num" data-count="19"></div>
                        <div class="pj-text">
                            Projects underway

                        </div>
                    </div>
                    <div class="project-content">
                        <div class="number-wn num" data-count="28"></div>
                        <div class="pj-text">
                        Cities
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="number-wn num" data-count="115"></div>
                        <div class="pj-text">
                        Joint ventures completed
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="number-wn num" data-count="13"></div>
                        <div class="pj-text">
                        Decades of experience   
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog-panel pt30 pb30">
			<div class="uk-container uk-container-center">

				<div class="blog-title">
					FROM OUR BLOG.
				</div>
				<div class="blog-heading">
					News & Events
				</div>

				<div class="uk-grid uk-grid-medium uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3 uk-clearfix">

					<div class="wrap-blog">
						<div class="blog-body">

							<div class="imh-blog">
								<a href="#" class="img-cover">
									<img src="resources/img/upload/blog-1.jpg" alt="">
								</a>
							</div>
							<div class="blog-content">
								<div class="blog-help">
									<div class="blog-tip">
										TIPS & TRICKS
									</div>
									<div class="blog-tip">
										UNCATEGORIZED
									</div>
	
								</div>
								<div class="blog-name">
									Motivational Sayings Ten Great Ones
								</div>
								<div class="blog-time">
									By
									<span class="name">
										Admin
									</span>
									<span class="time">
										October 18, 2019
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="wrap-blog">
						<div class="blog-body">

							<div class="imh-blog">
								<a href="#" class="img-cover">
									<img src="resources/img/upload/blog-2.jpg" alt="">
								</a>
							</div>
							<div class="blog-content">
								<div class="blog-help">
									
									<div class="blog-tip">
										UNCATEGORIZED
									</div>
	
								</div>
								<div class="blog-name">
									Do You Think Motivational Thoughts
								</div>
								<div class="blog-time">
									By
									<span class="name">
										Admin
									</span>
									<span class="time">
										October 18, 2019
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="wrap-blog">
						<div class="blog-body">

							<div class="imh-blog">
								<a href="#" class="img-cover">
									<img src="resources/img/upload/blog-3.jpg" alt="">
								</a>
							</div>
							<div class="blog-content">
								<div class="blog-help">
									<div class="blog-tip">
										TIPS & TRICKS
									</div>
									<div class="blog-tip">
										UNCATEGORIZED
									</div>
	
								</div>
								<div class="blog-name">
									Architecture is not based on concrete and steel
								</div>
								<div class="blog-time">
									By
									<span class="name">
										Admin
									</span>
									<span class="time">
										October 18, 2019
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section>  
        
        <section class="who-we-are">
			<div class="uk-container uk-container-center">
				<div class="who-we-are-title">
                    TESTIMONIALS.

				</div>
				<div class="uk-grid uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-clearfix">
					<div class="we-born">
						
						<div class="we-born-text">
							<h2>
                                Our biggest award is develop
                                thriving communities
							</h2>
						</div>
					</div>
					
				</div>
			</div>
        </section>
        <section class="what-we-do">
    
            <div class="tab-content current">
                <div class="our-mission" style="background-image: url(resources/img/upload/bg-our-mission.jpg);">
                    <div class="uk-grid uk-grid-small uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-clearfix">
                        <div class="banner-our-mission">
                            <a href="" title="" class="img-cover">
                                <img src="resources/img/upload/testimonials.jpg" alt="">
                            </a>
                        </div>
                        <div class="slide-cmt-panel">
                            <div class="slide-cmt">

                                <?php  
                                    $owlInit = array(
                                        'items' => 1,
                                        'margin' => 20,
                                        'loop' => true,
                                        'dots' => true,
                                        'nav' => false,
                                        'autoplay' => true,
                                        'autoplayTimeout' => 3000,
                                        'responsiveClass' =>true,
                                        
                                            
                                        
                                        
                                            
                                        
                                    );
                                ?>
                                <div class="owl-carousel owl-theme" data-disabled="0" data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
                                    <div class="cmt-text">
                                        <p> “The Group was very helpful and flexible towards my needs and schedule. They have coordinated and cooperated with me whenever I required their assistance especially to get the housing loan. Without their active help, I would not have been able to process my home loan smoothly. ”</p>
                                        <div class="info-testimonials">
                                            <div class="name-testimonials">Mark Leon</div>
                                            <div class="address-testtimonials black">New York, USA</div>
                                        </div>
                                    </div>
                                    <div class="cmt-text">
                                        <p> “The Group was very helpful and flexible towards my needs and schedule. They have coordinated and cooperated with me whenever I required their assistance especially to get the housing loan. Without their active help, I would not have been able to process my home loan smoothly. ”</p>
                                        <div class="info-testimonials">
                                            <div class="name-testimonials">Mark Leon</div>
                                            <div class="address-testtimonials black">New York, USA</div>
                                        </div>
                                    </div>
                                    <div class="cmt-text">
                                        <p> “The Group was very helpful and flexible towards my needs and schedule. They have coordinated and cooperated with me whenever I required their assistance especially to get the housing loan. Without their active help, I would not have been able to process my home loan smoothly. ”</p>
                                        <div class="info-testimonials">
                                            <div class="name-testimonials black">Mark Leon</div>
                                            <div class="address-testtimonials">New York, USA</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            </div>
            
        </section>

        <section class="logo-icon">
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-medium uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-6 uk-clearfix">
                    <div class="panel-logo">
                        <div class="wrap-logo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 190 90" enable-background="new 0 0 190 90" xml:space="preserve"> <g> <g> <path fill="#333333" d="M43.1,67.5c0-1.1,0.1-2.1,0.4-3c0.3-1,0.7-1.8,1.2-2.5c0.5-0.7,1.1-1.3,1.8-1.8c0.7-0.4,1.5-0.7,2.3-0.7
                                c0.3,0,0.6,0,0.8,0.1c0.2,0,0.4,0.1,0.5,0.3c0.1,0.1,0.2,0.4,0.3,0.6c0.1,0.3,0.1,0.6,0.1,1.1c-0.5-0.6-0.9-1-1.5-1.1
                                c-0.5-0.1-1-0.1-1.5,0c-0.5,0.2-0.9,0.5-1.4,1c-0.4,0.5-0.8,1-1.1,1.6c-0.3,0.6-0.5,1.3-0.7,2c-0.2,0.7-0.2,1.4-0.1,2.1
                                c0,0.6,0.1,1.2,0.3,1.7c0.2,0.5,0.4,0.9,0.7,1.2c0.3,0.3,0.7,0.6,1.1,0.7c0.4,0.2,0.9,0.2,1.3,0.2c0.6-0.1,1.1-0.2,1.6-0.4
                                c0.4-0.2,0.9-0.4,1.2-0.7c0.4-0.3,0.7-0.6,1.1-0.9c0.3-0.3,0.7-0.6,1.1-0.9c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0.1
                                c0.1,0,0.1,0.1,0.2,0.1c0,0.1,0.1,0.2,0.1,0.3c-0.4,0.5-0.8,0.9-1.3,1.4c-0.5,0.5-1,0.9-1.5,1.2c-0.5,0.4-1.1,0.6-1.6,0.8
                                c-0.6,0.2-1.1,0.3-1.7,0.3c-0.5,0-1-0.1-1.5-0.3c-0.5-0.2-0.9-0.6-1.3-1c-0.4-0.4-0.7-0.9-0.9-1.5C43.2,68.9,43.1,68.2,43.1,67.5z
                                "></path> <path fill="#333333" d="M55.2,66.6c0-0.9,0.1-1.7,0.4-2.4c0.2-0.7,0.6-1.4,1-1.9c0.4-0.5,0.9-0.9,1.5-1.2c0.6-0.3,1.2-0.4,1.8-0.4
                                c0.6,0,1.2,0.1,1.8,0.3c0.6,0.2,1.1,0.5,1.6,0.9c0.5,0.4,0.8,1,1.1,1.6c0.3,0.7,0.4,1.4,0.4,2.3c0,2.1-0.4,3.7-1.2,4.7
                                c-0.8,1-2,1.5-3.6,1.5c-0.7,0-1.3-0.1-1.9-0.3c-0.6-0.2-1.1-0.5-1.5-1c-0.4-0.4-0.8-1-1-1.7C55.3,68.4,55.2,67.6,55.2,66.6z
                                M56.4,66.3c0,1.5,0.3,2.7,0.9,3.4c0.6,0.7,1.5,1.1,2.7,1.1c0.6,0,1.1-0.1,1.6-0.4c0.5-0.2,0.9-0.6,1.2-1c0.3-0.4,0.6-0.9,0.8-1.5
                                c0.2-0.6,0.3-1.2,0.3-2c0-0.7-0.1-1.3-0.4-1.8c-0.2-0.5-0.6-0.9-0.9-1.2c-0.4-0.3-0.8-0.6-1.3-0.7c-0.5-0.1-1-0.2-1.5-0.2
                                c-0.4,0-0.9,0.1-1.3,0.3c-0.4,0.2-0.8,0.5-1.1,0.9c-0.3,0.4-0.6,0.8-0.8,1.4C56.5,65.1,56.4,65.7,56.4,66.3z"></path> <path fill="#333333" d="M67.2,71.9c0.1-0.4,0.2-1,0.2-1.7c0-0.7,0.1-1.5,0.1-2.3c0-0.8,0-1.7,0-2.6c0-0.9,0-1.7,0-2.5
                                c0-0.8,0-1.5,0-2.1c0-0.6,0-1.1,0-1.4l1.2,0l-0.1,11.3l7.9,0.3c0.2,0.1,0.2,0.2,0.2,0.3c0,0.2-0.1,0.3-0.2,0.5
                                c-0.1,0.2-0.3,0.3-0.5,0.4c-0.2,0.1-0.5,0.1-0.7,0.1L67.2,71.9z"></path> <path fill="#333333" d="M79.1,71.9c0.1-0.4,0.2-1,0.2-1.7c0-0.7,0.1-1.5,0.1-2.3c0-0.8,0-1.7,0-2.6c0-0.9,0-1.7,0-2.5
                                c0-0.8,0-1.5,0-2.1c0-0.6,0-1.1,0-1.4l1.2,0l-0.1,11.3l7.9,0.3c0.2,0.1,0.2,0.2,0.2,0.3c0,0.2-0.1,0.3-0.2,0.5
                                c-0.1,0.2-0.3,0.3-0.5,0.4c-0.2,0.1-0.5,0.1-0.7,0.1L79.1,71.9z"></path> <path fill="#333333" d="M90.6,60.1c0.2,0.1,0.5,0.1,0.9,0.1c0.4,0,0.8,0,1.2,0c0.4,0,0.9,0,1.4,0c0.5,0,0.9,0,1.4,0
                                c0.4,0,0.8,0,1.2,0.1c0.4,0,0.6,0.1,0.8,0.2v1c-0.3,0.1-0.6,0.1-1.1,0.1c-0.5,0-1,0-1.5,0c-0.5,0-1.1,0-1.6,0.1
                                c-0.5,0-1,0.1-1.4,0.2c-0.1,0.4-0.1,0.8-0.2,1.1c0,0.3-0.1,0.5-0.1,0.7c0,0.2,0,0.4,0,0.6s0,0.4,0,0.6c0,0.2,0,0.5,0,0.7
                                c0,0.3,0,0.6,0,1c0.5,0,1,0,1.5-0.1c0.5-0.1,1-0.1,1.4-0.2c0.5-0.1,1-0.2,1.4-0.2c0.5-0.1,1-0.1,1.5-0.1v1l-5.7,0.9l0.1,3.2
                                c0.8,0,1.4,0,2-0.1c0.6-0.1,1.2-0.1,1.7-0.2c0.5-0.1,1.1-0.1,1.6-0.2c0.5-0.1,1.1-0.1,1.7-0.1c0,0.1,0,0.2-0.1,0.4
                                c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.1-0.3,0c-0.6,0.1-1.2,0.2-1.8,0.2c-0.7,0.1-1.3,0.2-2,0.2
                                c-0.7,0.1-1.3,0.1-2,0.2c-0.6,0.1-1.2,0.1-1.7,0.2L90.6,60.1z"></path> <path fill="#333333" d="M100.7,67.5c0-1.1,0.1-2.1,0.4-3c0.3-1,0.7-1.8,1.2-2.5c0.5-0.7,1.1-1.3,1.8-1.8c0.7-0.4,1.5-0.7,2.3-0.7
                                c0.3,0,0.6,0,0.8,0.1c0.2,0,0.4,0.1,0.5,0.3c0.1,0.1,0.2,0.4,0.3,0.6c0.1,0.3,0.1,0.6,0.1,1.1c-0.5-0.6-0.9-1-1.5-1.1
                                c-0.5-0.1-1-0.1-1.5,0c-0.5,0.2-0.9,0.5-1.4,1c-0.4,0.5-0.8,1-1.1,1.6c-0.3,0.6-0.5,1.3-0.7,2c-0.2,0.7-0.2,1.4-0.1,2.1
                                c0,0.6,0.1,1.2,0.3,1.7c0.2,0.5,0.4,0.9,0.7,1.2c0.3,0.3,0.7,0.6,1.1,0.7c0.4,0.2,0.9,0.2,1.3,0.2c0.6-0.1,1.1-0.2,1.6-0.4
                                c0.4-0.2,0.9-0.4,1.2-0.7c0.4-0.3,0.7-0.6,1.1-0.9c0.3-0.3,0.7-0.6,1.1-0.9c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0.1
                                c0.1,0,0.1,0.1,0.2,0.1s0.1,0.2,0.1,0.3c-0.4,0.5-0.8,0.9-1.3,1.4c-0.5,0.5-1,0.9-1.5,1.2c-0.5,0.4-1.1,0.6-1.6,0.8
                                c-0.6,0.2-1.1,0.3-1.7,0.3c-0.5,0-1-0.1-1.5-0.3c-0.5-0.2-0.9-0.6-1.3-1c-0.4-0.4-0.7-0.9-0.9-1.5
                                C100.8,68.9,100.7,68.2,100.7,67.5z"></path> <path fill="#333333" d="M116,62.8l-3.2-0.2c0,0-0.1,0-0.1-0.1c0,0-0.1-0.1-0.1-0.2c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2
                                c0-0.2,0-0.3,0.1-0.5c0.1-0.2,0.2-0.3,0.3-0.3c0.7,0,1.5,0.1,2.2,0.2c0.7,0.1,1.5,0.1,2.2,0.2c0.7,0,1.5,0,2.2,0
                                c0.7,0,1.5-0.1,2.2-0.3c0.1,0,0.1,0.1,0.1,0.2c0,0.1,0.1,0.2,0.1,0.4c0,0.1,0,0.3,0.1,0.4c0,0.1,0,0.2,0,0.3
                                c-0.5,0.2-0.9,0.3-1.3,0.3c-0.4,0-0.7,0-1.1,0c-0.4,0-0.7,0-1.1,0c-0.4,0-0.8,0-1.3,0.1c0,0.3,0,0.7-0.1,1.2c0,0.5-0.1,1-0.1,1.5
                                c0,0.5-0.1,1.1-0.1,1.7c0,0.6-0.1,1.2-0.1,1.7c0,0.6,0,1.1,0,1.6c0,0.5,0,1,0,1.4l-1.4,0.1L116,62.8z"></path> <path fill="#333333" d="M123.9,72c-0.1-0.2-0.1-0.4-0.1-0.8c0-0.4,0-0.8-0.1-1.4c0-0.5,0-1.1,0-1.7c0-0.6,0-1.2,0-1.9
                                c0-0.6,0-1.2,0-1.8c0-0.6,0-1.1,0.1-1.5c0-0.4,0-0.8,0-1.1c0-0.3,0-0.4,0-0.4c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.2-0.1,0.3-0.1
                                c0.1,0,0.1,0,0.2,0.1c0.1,0,0.1,0.1,0.1,0.3V72c0,0.1,0,0.2-0.1,0.3c-0.1,0-0.2,0.1-0.2,0.1c-0.1,0-0.2,0-0.3-0.1
                                C124.1,72.2,124,72.1,123.9,72z"></path> <path fill="#333333" d="M127.2,66.6c0-0.9,0.1-1.7,0.4-2.4c0.2-0.7,0.6-1.4,1-1.9c0.4-0.5,0.9-0.9,1.5-1.2
                                c0.6-0.3,1.2-0.4,1.8-0.4c0.6,0,1.2,0.1,1.8,0.3c0.6,0.2,1.1,0.5,1.6,0.9c0.5,0.4,0.8,1,1.1,1.6c0.3,0.7,0.4,1.4,0.4,2.3
                                c0,2.1-0.4,3.7-1.2,4.7c-0.8,1-2,1.5-3.6,1.5c-0.7,0-1.3-0.1-1.9-0.3c-0.6-0.2-1.1-0.5-1.5-1c-0.4-0.4-0.8-1-1-1.7
                                C127.3,68.4,127.2,67.6,127.2,66.6z M128.4,66.3c0,1.5,0.3,2.7,0.9,3.4c0.6,0.7,1.5,1.1,2.7,1.1c0.6,0,1.1-0.1,1.6-0.4
                                c0.5-0.2,0.9-0.6,1.2-1c0.3-0.4,0.6-0.9,0.8-1.5c0.2-0.6,0.3-1.2,0.3-2c0-0.7-0.1-1.3-0.4-1.8c-0.2-0.5-0.6-0.9-0.9-1.2
                                c-0.4-0.3-0.8-0.6-1.3-0.7c-0.5-0.1-1-0.2-1.5-0.2c-0.4,0-0.9,0.1-1.3,0.3c-0.4,0.2-0.8,0.5-1.1,0.9c-0.3,0.4-0.6,0.8-0.8,1.4
                                C128.5,65.1,128.4,65.7,128.4,66.3z"></path> <path fill="#333333" d="M146,72.3c-0.4-0.8-0.8-1.7-1.3-2.5c-0.5-0.9-1-1.7-1.5-2.6c-0.5-0.9-1-1.7-1.5-2.6
                                c-0.5-0.9-1-1.7-1.4-2.6c-0.1,0.4-0.1,0.9-0.2,1.4c0,0.5-0.1,1.1-0.1,1.7c0,0.6,0,1.2,0,1.9c0,0.6,0,1.3,0,1.9c0,0.6,0,1.2,0,1.8
                                c0,0.6,0,1.1,0,1.5c-0.1,0.2-0.3,0.3-0.4,0.3c-0.1,0-0.2,0.1-0.4,0.1c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1-0.1-0.3-0.1-0.6
                                c0-0.5,0.1-1.1,0.1-1.8c0-0.7,0.1-1.4,0.1-2.2c0-0.8,0-1.5,0.1-2.3c0-0.8,0-1.6,0-2.3c0-0.8,0-1.5,0-2.2c0-0.7,0-1.3,0-1.8
                                c0.2-0.2,0.3-0.4,0.4-0.5c0.1-0.1,0.2-0.2,0.3-0.2s0.2,0.1,0.3,0.2c0.1,0.1,0.3,0.4,0.5,0.7c0.2,0.3,0.4,0.7,0.7,1.2
                                s0.6,1.1,1,1.9c0.4,0.8,0.9,1.6,1.5,2.7c0.6,1,1.3,2.2,2.1,3.5l0.3-9.6c0.1-0.3,0.2-0.4,0.3-0.5c0.1-0.1,0.3-0.1,0.4-0.1
                                c0.2,0,0.3,0.1,0.4,0.2c0.1,0.2,0.1,0.3,0.1,0.6c0,0.2,0,0.4,0,0.6c0,0.2,0,0.4,0,0.5c0,0.4,0,0.9,0,1.6c0,0.7,0,1.4,0,2.2
                                c0,0.8,0,1.6,0,2.5c0,0.8,0,1.6,0,2.4c0,0.7-0.1,1.4-0.1,2c0,0.6-0.1,1-0.2,1.2L146,72.3z"></path> </g> <g> <path fill="#333333" d="M25.4,17.5l1.1,0.8h0.4c4.7,0,8.6,1.2,11.7,3.7c1.2,0.5,2.7,1.9,4.6,4.2c0.6,1,1,2.1,1.2,3.4l-0.1,0.1v0.1
                                l0.2,1.7v0.1c-0.3,0.3-0.6,1.1-1,2.4c-0.7,1.3-1.7,2.3-3.2,3.1c-1.1,0.9-1.9,1.5-2.5,1.6l-0.1,0.1v0.1c2.8,1.5,5.5,3.4,8.1,5.8
                                c1.2,1,1.8,1.8,1.8,2.3l0.5,0.5v0.2L47.7,48v0.2c0.2,0,0.4,0.2,0.6,0.5V49h-0.2c0-0.2-0.2-0.4-0.5-0.6v0.7h-0.1L46,48v0.1l0.8,1
                                v0.1L46.4,49c-0.1,0-0.2,0.1-0.2,0.4l-0.1,0.1h-0.2L45,48.6h-0.1v0.1l0.2,0.4v0.2H45l-0.6-0.5c-0.3,0-0.5,0.2-0.5,0.4
                                c-2-1.7-3.8-3.1-5.4-4l-4.7-2.9c0-0.2-0.4-0.4-1.3-0.7v-0.1l-0.1,0.1h-0.1l-0.5-0.1l-0.1,0.1v0.5c0,2.7,0.2,4.2,0.5,4.6l-0.1,0.1
                                V47c-0.6,0-1-0.2-1-0.5h-0.2l-0.4,0.6v0.6h-0.4v-0.6l0.1-0.6h-0.4V47l-0.6-0.1c0,0.2-0.2,0.4-0.6,0.4l0.1,0.1v0.1l-0.1,0.4h-0.4
                                v-0.1l0.1-0.5l-0.1-0.4H28v0.2l0.2,0.4c0,0.2-0.2,0.4-0.7,0.5c-0.2-0.2-0.4-0.8-0.6-1.8h-0.2v0.2h-0.2v-0.6
                                c-0.2,0-0.2,0.2-0.2,0.6l-0.1,0.1H26c-0.3,0-0.5-0.6-0.7-1.9l-1.1-7.7h0.1l-0.1-0.1l0.1-0.6V33l-0.4-6.8v-1.3h-0.2L22.5,25
                                l-0.1-0.1c0,0.2-0.2,0.3-0.6,0.4V25h-0.6l-0.5,0.4L20,25.3l-0.1,0.1h-0.1c-0.2-0.5-0.8-1-1.6-1.7l-0.6-1v-0.1l0.1-0.1l-0.2-0.5
                                l0.2-0.8l-0.2-0.7c0-0.2,0.2-0.2,0.5-0.2l-0.2-0.5l1-0.5h0.6l5.1-0.7V18l0.2-0.2L25,18h0.1v-0.1L25,17.8v-0.1l0.1-0.1H25.4z
                                M29,46l-0.1,0.6h0.2l0.2-0.5V46H29z M29.2,47.3l0.2,0.2v0.1l-0.2,0.2L29,47.7v-0.1L29.2,47.3z M29.8,25v-0.1
                                c-0.3,0.1-0.5,0.2-0.5,0.4c0,0.4,0.5,1,1.4,1.9v0.2h-0.1c-0.3-0.2-0.6-0.4-0.8-0.4h-0.1l1.2,4.4c2.8-0.6,4.2-1.1,4.2-1.4
                                c1.3-1,1.9-2,1.9-3.1c-0.2-1-0.8-1.6-1.8-1.6l-3-0.7L29.8,25z M43.9,48.6v0.2H44v-0.2H43.9z M47.2,47.9v0.4h0.1v-0.4H47.2z"></path> <path fill="#333333" d="M48.5,17.7c2,0.5,3.7,0.8,4.8,0.8l0.4-0.5l2.1,0.6l2.2-0.1h4.7l0.5,0.1l0.4-0.1l0.8,0.3l1-0.1l0.1,0.1h0.1
                                l0.1-0.1l0.9,0.1h2.1l2.5,0.1c3.5-0.4,6.3-0.7,8.5-1.2l0.3,0.4L79.4,19l0.1,0.1v0.1c-0.1,0.3-0.3,0.4-0.8,0.4v0.3l0.6-0.1h0.1v0.6
                                h0.1c0.4-0.3,0.6-0.5,0.6-0.8l0.3,0.3c-0.7,1.9-1.3,2.9-1.6,2.9c-1.1,0-1.9,0.3-2.5,0.8c0-0.4-0.1-0.7-0.2-0.7h-0.1
                                c0,0.4-0.2,0.6-0.5,0.8h-0.1v-0.3h0.3v-0.3l-0.9,0.3l0.6,0.6c-1,0.8-2.7,1.3-5.1,1.6c-0.4,0.2-1.6,0.5-3.8,0.7v-0.1
                                c-0.4,0.2-1.9,0.5-4.6,0.8v-0.1c-0.6,0.1-0.9,0.3-0.9,0.5v1.4c2.1,0.1,3.1,0.3,3.1,0.5l-0.1,0.1h1.3l2.5,0.3h0.5
                                c0.2,0.3,0.5,0.4,0.9,0.4v0.2c-0.7,0.2-1,0.4-1,0.7v0.1l0.1,0.1v0.1l0.1-0.1h0.3l0.6,0.1c-0.1,0.2-1.3,0.8-3.6,1.8l-0.4,0.4
                                l-0.4-0.3l-0.4,0.4l0.1,0.1v0.4c-1.1,0.4-2.7,0.7-4.8,1c-0.4,0-0.6,0.3-0.6,0.8l-0.5,0.4c-0.2,0-0.3-0.2-0.4-0.5L57,38.8l0.1,0.4
                                l8.6-1.8l5.1-0.8v0.1l0.1-0.1H71l0.8,0.1l0.8-0.3l0.5,1l-0.3,0.4V38c0.3,0,0.4,0.1,0.4,0.3l0.1-0.1h0.2v0.1l-0.9,1.8l-0.4,1.3
                                c0,0.4-0.1,0.6-0.3,0.6h-0.3v-0.3h-0.4v0.1c0.3,0,0.4,0.1,0.4,0.3c-0.3,0-0.6,0.3-0.9,0.8l0.3,0.4v0.2l-3.3,2.5l-1,0.4
                                c-0.6,0-1,0.2-1.3,0.7L65.1,47c0,0.4-0.4,0.6-1.3,0.6c-0.4,0.4-0.9,0.6-1.6,0.6c0,0.3-0.4,0.4-1.3,0.5c0,0.2-0.8,0.4-2.5,0.5
                                L58,49.2l-0.6,0.1v-0.1l-0.8,0.3h-0.9l-0.5-0.1L55,49.5L52.5,49l0.3-0.5h-0.5l-0.4,0.3h-0.1c-1.1-0.7-1.7-1.7-1.7-3.1
                                c-1.3-3.2-2-5.7-2-7.6v-4.2c0-1.4,1-4.1,3-8.1l0.4-1.2c-3.4-2.8-5.3-4.8-5.6-6.1L48.5,17.7z M67.4,31.1v0.2h0.1l0.4-0.1v-0.1
                                l-0.2-0.3L67.4,31.1z M71,42v0.1h0.3v-0.4L71,42z M72.5,24.1v0.1h0.4v-0.1H72.5z M80,19.5h0.1v0.1l-0.2,0.3h-0.1v-0.1L80,19.5z"></path> <path fill="#333333" d="M107.9,17.7c0.8,0,1.6,0.4,2.4,1.1v0.1l-0.3,0.2l0.3,1.3l-0.1,0.1H110l0.3,0.8v0.1
                                c-1.2,1.6-2.6,2.6-4.2,3.2c0,0.3-0.9,0.6-2.8,1v-0.1l-3.6,0.6c0,0.1-0.3,0.2-1,0.3l-0.5,1.5l0.1,0.1l-0.5,3.5v1.6l-0.2,1.4v1.9
                                L97.4,37l0.3,0.8c-0.8,3.5-1.3,5.7-1.3,6.4L96,45.4v1.1c0,0.5-0.3,1.3-0.9,2.3c0,0.4-0.1,0.6-0.2,0.6l-0.1-0.1
                                c-0.1,0-0.2-0.2-0.2-0.6c-0.2,0-0.5-0.2-0.8-0.6h-0.3L93.4,48l-0.1,0.1l-0.4,1c-2.7-1.7-4-5-4-10l0.1-0.5l-0.1-0.1l0.1-0.9v-4.8
                                l0.1-0.5L89,32.2l0.1-0.6v-2.2l0.4-2l-0.3-0.2l-0.1,0.1l-1.5-0.1h-0.4L87.1,27l-0.1,0.1h-0.1c-2.5-0.8-4.1-1.8-4.9-3
                                c-0.7,0-1.1-0.5-1.3-1.6l-0.8-0.9v-0.4c0-0.1,1.1-0.4,3.4-0.6h1.5l0.1,0.1l0.1-0.1c0.8,0.2,1.9,0.2,3.3,0.2
                                c3.5-0.3,5.2-0.5,5.2-0.6l0.5,0.1l0.6-0.2v0.1l0.1-0.1H95l0.4,0.1l0.6-0.1h0.8c0.9,0,3.1-0.5,6.4-1.5L107.9,17.7z"></path> <path fill="#333333" d="M117.1,17.5l1.1,0.8h0.4c4.7,0,8.6,1.2,11.7,3.7c1.2,0.5,2.7,1.9,4.6,4.2c0.6,1,1,2.1,1.2,3.4l-0.1,0.1
                                v0.1l0.2,1.7v0.1c-0.3,0.3-0.6,1.1-1,2.4c-0.7,1.3-1.7,2.3-3.2,3.1c-1.1,0.9-1.9,1.5-2.5,1.6l-0.1,0.1v0.1
                                c2.8,1.5,5.5,3.4,8.1,5.8c1.2,1,1.8,1.8,1.8,2.3l0.5,0.5v0.2l-0.2,0.4v0.2c0.2,0,0.4,0.2,0.6,0.5V49h-0.2c0-0.2-0.2-0.4-0.5-0.6
                                v0.7h-0.1l-1.6-1.1v0.1l0.8,1v0.1l-0.4-0.2c-0.1,0-0.2,0.1-0.2,0.4l-0.1,0.1h-0.2l-0.8-0.8h-0.1v0.1l0.2,0.4v0.2h-0.1l-0.6-0.5
                                c-0.3,0-0.5,0.2-0.5,0.4c-2-1.7-3.8-3.1-5.4-4l-4.7-2.9c0-0.2-0.4-0.4-1.3-0.7v-0.1l-0.1,0.1H124l-0.5-0.1l-0.1,0.1v0.5
                                c0,2.7,0.2,4.2,0.5,4.6l-0.1,0.1V47c-0.6,0-1-0.2-1-0.5h-0.2l-0.4,0.6v0.6h-0.4v-0.6l0.1-0.6h-0.4V47l-0.6-0.1
                                c0,0.2-0.2,0.4-0.6,0.4l0.1,0.1v0.1l-0.1,0.4h-0.4v-0.1l0.1-0.5l-0.1-0.4h-0.4v0.2l0.2,0.4c0,0.2-0.2,0.4-0.7,0.5
                                c-0.2-0.2-0.4-0.8-0.6-1.8h-0.2v0.2h-0.2v-0.6c-0.2,0-0.2,0.2-0.2,0.6l-0.1,0.1h-0.1c-0.3,0-0.5-0.6-0.7-1.9l-1.1-7.7h0.1
                                l-0.1-0.1l0.1-0.6V33l-0.4-6.8v-1.3h-0.2l-1.2,0.2l-0.1-0.1c0,0.2-0.2,0.3-0.6,0.4V25h-0.6l-0.5,0.4l-0.7-0.1l-0.1,0.1h-0.1
                                c-0.2-0.5-0.8-1-1.6-1.7l-0.6-1v-0.1l0.1-0.1l-0.2-0.5l0.2-0.8l-0.2-0.7c0-0.2,0.2-0.2,0.5-0.2l-0.2-0.5l1-0.5h0.6l5.1-0.7V18
                                l0.2-0.2l0.4,0.2h0.1v-0.1l-0.1-0.1v-0.1l0.1-0.1H117.1z M120.7,46l-0.1,0.6h0.2l0.2-0.5V46H120.7z M120.9,47.3l0.2,0.2v0.1
                                l-0.2,0.2l-0.2-0.2v-0.1L120.9,47.3z M121.5,25v-0.1c-0.3,0.1-0.5,0.2-0.5,0.4c0,0.4,0.5,1,1.4,1.9v0.2h-0.1
                                c-0.3-0.2-0.6-0.4-0.8-0.4h-0.1l1.2,4.4c2.8-0.6,4.2-1.1,4.2-1.4c1.3-1,1.9-2,1.9-3.1c-0.2-1-0.8-1.6-1.8-1.6l-3-0.7L121.5,25z
                                M135.6,48.6v0.2h0.1v-0.2H135.6z M138.9,47.9v0.4h0.1v-0.4H138.9z"></path> <path fill="#333333" d="M162.4,17.6c1.2,0,2.5,1.2,3.9,3.5c1.6,2.1,3,4.1,4.1,6.1l1.9,3.8l0.3,3.2c-0.4,2.2-0.8,3.3-1.2,3.3
                                c-0.5,2.9-1.4,5-2.7,6.2l-2.7,2.3l-4.2,1.1c-1.7,1.3-4.2,1.9-7.6,1.9c0,0.2-0.2,0.3-0.7,0.3h-0.1l-3.4,0.1l-0.7-0.1l-0.1,0.1h-0.1
                                l-4.4-1.1c-0.5-0.7-1.4-1.1-2.7-1.5l-1.4-1.8c-1-2.5-1.9-6.3-2.6-11.4l0.1-0.7v-1.8l0.1-0.1l-0.1-0.1c0-2.7,0.9-5,2.6-6.9
                                c4.7-4.2,8.7-6.2,11.9-6.2h1.2c0.3,0,0.7,0.2,1.1,0.6c1.4-0.5,3.1-0.7,5.2-0.7h1.8L162.4,17.6z M149.5,27.9l-4.8,4.5
                                c-0.7,1.5-1.1,2.7-1.1,3.6l1,5c1.2,0.5,2.1,0.7,2.7,0.7l4.4-0.5c1.8-0.9,3.7-1.5,5.8-1.9c2.9-3.4,4.4-5.2,4.4-5.4l1.6-4.1v-0.3
                                l-1.4-0.3l-1.1,0.1l-0.1-0.1l-1,0.1h-2.6l-0.4-0.3c-2.9,0-4.7-0.3-5.4-1h-1.6L149.5,27.9z"></path> </g> </g> 
                            </svg>
                        </div>
                    </div>
                    <div class="panel-logo">
                        <div class="wrap-logo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 190 90" enable-background="new 0 0 190 90" xml:space="preserve"> <g> <g> <path d="M43.1,72.5c0,0,0.1,0.1,0.1,0.1c0.3,0.4,0.5,1,0.5,1.8c0,0.8-0.2,1.4-0.5,1.8c-0.4,0.4-0.9,0.7-1.7,0.7H41h-1.1v-1.1v-7.7
                            h1.7c0.8,0,1.3,0.2,1.7,0.7c0.3,0.4,0.5,1,0.5,1.8c0,0.8-0.2,1.4-0.5,1.8C43.2,72.4,43.2,72.4,43.1,72.5z M41,71.9h0.6
                            c0.3,0,0.4,0,0.6-0.1c0.1-0.1,0.2-0.1,0.2-0.2c0.2-0.2,0.3-0.6,0.3-1.1c0-0.3,0-0.6-0.1-0.7c-0.1-0.2-0.1-0.3-0.2-0.4
                            c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1,0-0.3,0-0.4,0H41V71.9z M41.6,75.8c0.1,0,0.3,0,0.4,0c0.1,0,0.2-0.1,0.3-0.2
                            c0.1-0.1,0.2-0.2,0.2-0.4c0.1-0.2,0.1-0.4,0.1-0.7c0-0.3,0-0.6-0.1-0.8c-0.1-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.2-0.1-0.3-0.2
                            c-0.1,0-0.3,0-0.4,0H41v2.7H41.6z"></path> <path d="M55.3,76.9c-0.4,0-0.8-0.1-1-0.2c-0.3-0.2-0.4-0.3-0.6-0.5c-0.3-0.4-0.5-1-0.5-1.8v-3.8c0-0.8,0.2-1.4,0.5-1.8
                            c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.3-0.1,0.5-0.2c0.2,0,0.4-0.1,0.6-0.1c0.4,0,0.8,0.1,1,0.2
                            c0.3,0.2,0.4,0.3,0.6,0.5c0.3,0.4,0.5,1,0.5,1.8v3.8c0,0.8-0.2,1.4-0.5,1.8c-0.1,0.2-0.3,0.3-0.6,0.5
                            C56.1,76.8,55.8,76.9,55.3,76.9z M55.3,69.2c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.2-0.3,0.4
                            c-0.1,0.2-0.1,0.5-0.1,0.8v3.8c0,0.4,0,0.6,0.1,0.8c0.1,0.2,0.2,0.3,0.3,0.4c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0,0.2,0,0.3,0
                            c0.1,0,0.2,0,0.3,0c0.1,0,0.2-0.1,0.3-0.2s0.2-0.2,0.3-0.4c0.1-0.2,0.1-0.5,0.1-0.8v-3.8c0-0.3,0-0.6-0.1-0.8
                            c-0.1-0.2-0.2-0.3-0.3-0.4c-0.1-0.1-0.2-0.1-0.3-0.2C55.5,69.2,55.4,69.2,55.3,69.2z"></path> <path d="M69,76.9c-0.4,0-0.8-0.1-1-0.2c-0.3-0.2-0.4-0.3-0.6-0.5c-0.3-0.4-0.5-1-0.5-1.8v-3.8c0-0.8,0.2-1.4,0.5-1.8
                            c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.3-0.1,0.5-0.2c0.2,0,0.4-0.1,0.6-0.1c0.4,0,0.8,0.1,1,0.2
                            c0.3,0.2,0.4,0.3,0.6,0.5c0.3,0.4,0.5,1,0.5,1.8v3.8c0,0.8-0.2,1.4-0.5,1.8c-0.1,0.2-0.3,0.3-0.6,0.5C69.8,76.8,69.5,76.9,69,76.9
                            z M69,69.2c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.2-0.3,0.4c-0.1,0.2-0.1,0.5-0.1,0.8v3.8
                            c0,0.4,0,0.6,0.1,0.8c0.1,0.2,0.2,0.3,0.3,0.4c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0
                            c0.1,0,0.2-0.1,0.3-0.2s0.2-0.2,0.3-0.4C70,75,70,74.7,70,74.4v-3.8c0-0.3,0-0.6-0.1-0.8c-0.1-0.2-0.2-0.3-0.3-0.4
                            c-0.1-0.1-0.2-0.1-0.3-0.2C69.2,69.2,69.1,69.2,69,69.2z"></path> <path d="M84.3,76.9l-2-3.6L81.8,74v2.9h-1.1v-3.2h0l0,0v-5.6h1.1v3.9l2.5-3.9h1.4L83,72.2l2.6,4.7H84.3z"></path> <path d="M97,76.9c-0.7,0-1.2-0.2-1.6-0.7c-0.3-0.4-0.5-1-0.5-1.8v-0.6H96v0.6c0,0.5,0.1,0.9,0.3,1.1c0,0.1,0.1,0.1,0.2,0.2
                            c0.1,0.1,0.3,0.1,0.5,0.1c0.2,0,0.4,0,0.5-0.1c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.1-0.3,0.1-0.4c0-0.2,0-0.3,0-0.4
                            c0-0.2,0-0.4-0.1-0.5c-0.1-0.1-0.1-0.3-0.3-0.4c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.3-0.1-0.4-0.2L96.7,73
                            c-0.1-0.1-0.3-0.1-0.5-0.2c-0.2-0.1-0.4-0.2-0.6-0.4c-0.5-0.5-0.7-1.1-0.7-1.8c0-0.4,0-0.7,0.2-1c0.1-0.3,0.2-0.6,0.4-0.8
                            c0.2-0.2,0.4-0.4,0.7-0.5c0.3-0.1,0.5-0.2,0.9-0.2c0.4,0,0.8,0.1,1,0.2c0.3,0.2,0.4,0.3,0.6,0.5c0.3,0.4,0.5,1.1,0.5,1.8v0.6H98
                            v-0.6c0-0.3,0-0.6-0.1-0.8c-0.1-0.2-0.2-0.3-0.3-0.4c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1,0-0.2,0-0.3,0c-0.2,0-0.4,0.1-0.5,0.2
                            s-0.2,0.2-0.3,0.4c-0.1,0.2-0.1,0.3-0.1,0.5c0,0.2,0,0.3,0,0.4c0,0.2,0,0.4,0.1,0.5c0.1,0.1,0.1,0.3,0.3,0.4
                            c0.1,0.1,0.2,0.2,0.4,0.3c0.1,0.1,0.3,0.1,0.4,0.2l0.2,0.1c0.1,0,0.3,0.1,0.5,0.2c0.2,0.1,0.4,0.2,0.6,0.4c0.5,0.5,0.7,1,0.7,1.8
                            c0,0.7-0.2,1.2-0.5,1.7C98.2,76.7,97.7,76.9,97,76.9z"></path> <path d="M113.5,69.2h-1.9v7.7h-1.1v-7.7h-1.9v-1.1h5V69.2z"></path> <path d="M125,76.9c-0.4,0-0.8-0.1-1-0.2c-0.3-0.2-0.4-0.3-0.6-0.5c-0.3-0.4-0.5-1-0.5-1.8v-3.8c0-0.8,0.2-1.4,0.5-1.8
                            c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.2-0.2,0.3-0.2c0.1-0.1,0.3-0.1,0.5-0.2c0.2,0,0.4-0.1,0.6-0.1c0.4,0,0.8,0.1,1,0.2
                            c0.3,0.2,0.4,0.3,0.6,0.5c0.3,0.4,0.5,1,0.5,1.8v3.8c0,0.8-0.2,1.4-0.5,1.8c-0.1,0.2-0.3,0.3-0.6,0.5
                            C125.8,76.8,125.4,76.9,125,76.9z M125,69.2c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0.1-0.3,0.2c-0.1,0.1-0.2,0.2-0.3,0.4
                            c-0.1,0.2-0.1,0.5-0.1,0.8v3.8c0,0.4,0,0.6,0.1,0.8c0.1,0.2,0.2,0.3,0.3,0.4c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0,0.2,0,0.3,0
                            c0.1,0,0.2,0,0.3,0c0.1,0,0.2-0.1,0.3-0.2s0.2-0.2,0.3-0.4c0.1-0.2,0.1-0.5,0.1-0.8v-3.8c0-0.3,0-0.6-0.1-0.8
                            c-0.1-0.2-0.2-0.3-0.3-0.4c-0.1-0.1-0.2-0.1-0.3-0.2C125.2,69.2,125.1,69.2,125,69.2z"></path> <path d="M140.1,72.6c0.2,0.2,0.4,0.5,0.5,0.7c0.1,0.3,0.2,0.6,0.2,1v2.6h-1.1v-2.6c0-0.8-0.4-1.2-1.1-1.2h-0.6h-0.1v3.8h-1.1v-8.8
                            h1.8c0.8,0,1.3,0.2,1.7,0.7c0.4,0.4,0.5,1,0.5,1.8c0,0.8-0.2,1.4-0.5,1.9C140.2,72.5,140.1,72.5,140.1,72.6
                            C140.1,72.5,140.1,72.5,140.1,72.6z M138.5,72c0.3,0,0.5,0,0.6-0.1c0.1-0.1,0.2-0.1,0.2-0.2c0.2-0.2,0.3-0.6,0.3-1.1
                            c0-0.3,0-0.5-0.1-0.7c0-0.2-0.1-0.3-0.2-0.4c-0.1-0.1-0.2-0.2-0.3-0.2c-0.1,0-0.3,0-0.5,0h-0.7V72h0.1H138.5z"></path> <path d="M151.6,69.2v2.7h2.5v1.1h-2.5v2.7h2.5v1.1h-3.7v-8.8h3.7v1.1H151.6z"></path> </g> <g> <path d="M102.3,16.9l-7.6,16.2h-3.2l-7.6-16.2h-2.2v-3h9.4v3h-3.3l5.4,11.7l5.4-11.7h-3.3v-3h9.4v3H102.3z"></path> <path d="M111.5,30h2.4v3h-8.1v-3h2.4V16.9h-2.4v-3h8.1v3h-2.4V30z"></path> <path d="M135.7,16.9V33h-2.6l-10.8-12.8V30h2.4v3h-8.1v-3h2.4V16.9h-2.4v-3h4.7l11.2,13.3V16.9H130v-3h8.1v3H135.7z"></path> <path d="M99.7,44.3h-3V41h-4.1v13h3.2v3H86v-3h3.2V41h-4.1v3.3h-3v-6.4h17.6V44.3z"></path> <path d="M121.7,57h-8.5v-3h2.8l-1.3-2.8h-8.4L105,54h2.5v3h-8v-3h1.9l6.1-13.1h-2.8v-3h7.3l7.4,16.1h2.2V57z M110.5,41.9l-2.9,6.4
                            h5.8L110.5,41.9z"></path> <path d="M141.9,57h-2.6l-0.1-2.9c-1.6,2-3.9,3.3-7,3.3c-5.7,0-9.9-4.4-9.9-9.9c0-5.7,4.6-9.9,10-9.9c2.7,0,4.9,0.9,6.4,2.5v-2.1
                            h3.1v7.1h-3.2c-0.7-2.6-3.2-4.3-6.2-4.3c-3.8,0-6.7,2.7-6.7,6.7c0,3.7,2.7,6.7,6.5,6.7c3.1,0,5.5-2,6.2-4.7h-6.4v-2.9h9.8V57z"></path> <path d="M161.3,44.3h-3V41h-7.4v5h6.4v3.1h-6.4v4.7h7.4v-3.3h3V57h-16.2v-3h2.4V40.9h-2.4v-3h16.2V44.3z"></path> </g> <path d="M53.7,13.1h-25v25v20h45v-45H53.7z M48.7,53.1h-15v-5h15V53.1z M48.7,43.1h-15v-5h15V43.1z M41.6,33.1c0,0-7-3.1-7-8.6
                            c0-2.2,1.7-3.9,3.9-3.9c1.3,0,2.4,0.6,3.1,1.6c0.7-1,1.8-1.6,3.1-1.6c2.2,0,3.9,1.7,3.9,3.9C48.7,30,41.6,33.1,41.6,33.1z
                            M58.7,53.1h-5v-15v-2.5V18.1h5V53.1z M68.7,53.1h-5v-35h5V53.1z"></path> </g> 
                            </svg>
                        </div>
                    </div>
                    <div class="panel-logo">
                        <div class="wrap-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 190 90" xml:space="preserve"> <g> <g> <path fill="#333333" d="M55.7,74.6c-0.1,0-0.1,0-0.2,0h-1.1v1.4h-0.8v-4.6h1.9c1.2,0,1.8,0.6,1.8,1.6c0,0.7-0.3,1.2-0.9,1.5l1,1.5    h-0.9L55.7,74.6z M55.4,73.9c0.7,0,1.1-0.3,1.1-0.9c0-0.6-0.4-0.9-1.1-0.9h-1.1v1.8H55.4z"></path> <path fill="#333333" d="M63,72.1v1.2h2.2V74H63v1.3h2.6v0.7h-3.3v-4.6h3.3v0.7H63z"></path> <path fill="#333333" d="M73.5,71.8l-0.3,0.7c-0.5-0.3-1-0.4-1.3-0.4c-0.4,0-0.7,0.2-0.7,0.5c0,1,2.5,0.5,2.5,2.1    c0,0.8-0.7,1.3-1.7,1.3c-0.7,0-1.4-0.3-1.9-0.7l0.3-0.7c0.5,0.4,1.1,0.7,1.5,0.7c0.5,0,0.9-0.2,0.9-0.6c0-1-2.5-0.4-2.5-2.1    c0-0.8,0.7-1.3,1.7-1.3C72.5,71.3,73.1,71.5,73.5,71.8z"></path> <path fill="#333333" d="M80.1,72.1v3.9h-0.8v-3.9h-1.4v-0.7h3.7v0.7H80.1z"></path> <path fill="#333333" d="M86.3,74.9l-0.4,1H85l2-4.6h0.8l2,4.6H89l-0.4-1H86.3z M87.4,72.2l-0.9,2h1.7L87.4,72.2z"></path> <path fill="#333333" d="M98.1,74.1c0,1.2-0.8,1.9-2,1.9c-1.2,0-2-0.7-2-1.9v-2.7h0.8v2.7c0,0.8,0.5,1.2,1.2,1.2    c0.7,0,1.2-0.5,1.2-1.2v-2.7h0.8V74.1z"></path> <path fill="#333333" d="M105.2,74.6c-0.1,0-0.1,0-0.2,0h-1.1v1.4h-0.8v-4.6h1.9c1.2,0,1.8,0.6,1.8,1.6c0,0.7-0.3,1.2-0.9,1.5    l1,1.5H106L105.2,74.6z M105,73.9c0.7,0,1.1-0.3,1.1-0.9c0-0.6-0.4-0.9-1.1-0.9h-1.1v1.8H105z"></path> <path fill="#333333" d="M112.4,74.9l-0.4,1h-0.8l2-4.6h0.8l2,4.6h-0.8l-0.4-1H112.4z M113.5,72.2l-0.9,2h1.7L113.5,72.2z"></path> <path fill="#333333" d="M123.7,75.9l-2.4-3.3v3.3h-0.8v-4.6h0.8l2.4,3.3v-3.3h0.8v4.6H123.7z"></path> <path fill="#333333" d="M131.2,72.1v3.9h-0.8v-3.9H129v-0.7h3.7v0.7H131.2z"></path> </g> <g> <g> <path fill="#333333" d="M160.7,57.8c0.1,0,0.2,0,0.3,0.1C160.7,57.9,160.6,57.9,160.7,57.8z"></path> </g> <g> <path fill="#333333" d="M164.2,58.3c-0.9-0.1-2.3-0.2-3.2-0.4C161.8,57.9,164,57.8,164.2,58.3z"></path> </g> <g> <path fill="#333333" d="M160.6,57.1l1.1,0.2C161.1,57.4,161.2,57.2,160.6,57.1z"></path> </g> <g> <polygon fill="#333333" points="161,57.5 160.9,57.7 160.3,57.5    "></polygon> </g> <g> <path fill="#333333" d="M103.5,59.3c0.1,0.1,0.2,0.1,0.1,0.2L103.5,59.3z"></path> </g> <g> <path fill="#333333" d="M100.9,58.7c-0.2,0-0.4,0-0.5,0C100.5,58.7,100.6,58.7,100.9,58.7z"></path> </g> <g> <path fill="#333333" d="M105.9,59l-0.5,0C105.6,59,105.7,59,105.9,59z"></path> </g> <g> <path fill="#333333" d="M134.7,57.5c0.4,0.1,0.8,0.2,1.1,0.3C135,57.9,135,57.6,134.7,57.5z"></path> </g> <g> <path fill="#333333" d="M88.7,57.3l-0.1,0.1C88.5,57.4,88.4,57.3,88.7,57.3z"></path> </g> <g> <path fill="#333333" d="M100.1,56.6c0,0.1,0,0.1,0,0.2l-0.1,0L100.1,56.6z"></path> </g> <g> <path fill="#333333" d="M107.7,58.7L107.7,58.7l0.4,0C107.9,58.7,107.8,58.7,107.7,58.7z"></path> </g> <g> <path fill="#333333" d="M85.1,57.5c-0.2-0.1-0.3-0.1-0.5-0.2C84.9,57.2,85.1,57.3,85.1,57.5z"></path> </g> <g> <path fill="#333333" d="M100.3,58.7C100.3,58.7,100.3,58.7,100.3,58.7C100.3,58.7,100.3,58.7,100.3,58.7     C100.3,58.7,100.3,58.7,100.3,58.7z"></path> </g> <g> <path fill="#333333" d="M103.9,56.5c-0.2,0-0.4,0-0.6,0C103.5,56.4,103.7,56.4,103.9,56.5z"></path> </g> <g> <path fill="#333333" d="M134.7,57.5c-0.1,0-0.2-0.1-0.4-0.1C134.5,57.4,134.7,57.4,134.7,57.5z"></path> </g> <g> <path fill="#333333" d="M157.7,57.9c-0.4,0-0.4-0.1-0.5-0.2C157.4,57.7,157.5,57.8,157.7,57.9z"></path> </g> <g> <path fill="#333333" d="M26.6,67l-0.1,0C26.5,67,26.5,67,26.6,67z"></path> </g> <g> <path fill="#333333" d="M40.5,65.6c0.1,0,0.1,0,0.2,0.1C40.6,65.7,40.5,65.7,40.5,65.6z"></path> </g> <g> <path fill="#333333" d="M52.8,60.9C52,61.2,51,61,50.2,61l0.3,0.1l-0.8,0l0,0.2c-1.3,0.1-2.9,0.5-3.5,0.2l0.2,0.3L45,61.8     l0.8,0.2c-1.6,0.3-4,0.3-4.3,0.3l0.2,0.1c-0.2,0.1-0.5,0-0.7,0l0.2,0.2c-2.4,0.2-3,0.8-5.6,0.9c-0.7,0.1,0.4,0,0.4,0.1     c-0.4,0.2-1.3,0.2-1.5,0.1c0.2,0.3,1.3,0.1,0.5,0.4c-0.6-0.1,0.4,0.2-0.6,0.3L34,64.1c-0.6,0.1-0.1,0.3-1,0.4     c-1.1,0,1.2-0.6-0.5-0.5c-0.8,0.1-1.7,1.2-3.4,1.2c-1.4,0.4,0.8,0.5-1.2,0.7l1.3,0.1c-0.3,0.2-0.1,0.3-0.9,0.4     C28,66.2,27.5,66,27,66.1c1.9,0.1-1.6,0.7,0.2,0.9L26.6,67c0.1,0,0.1,0,0.1,0.1l-0.8,0.1c0.5,0,1.8-0.1,1.2,0.3l-1.2,0.2     c0.4,0.2-0.1,0.3,0,0.5l3.7,0c-0.2-0.1-0.7-0.1-0.5-0.3c1-0.2,0.8,0.1,1.7-0.2l-0.4-0.1c0.1,0.1,0.2,0.1,0,0.1     c-0.3,0.2-0.5,0-0.5-0.1c0.3-0.3,1.2-0.2,1.5-0.1c1.2-0.2,0.2-0.4,0.4-0.5c0.7,0.3,2-0.3,2.7-0.2L34,66.7     c0.9-0.4,1.7-0.3,2.2-0.2L36,66.2c1.3-0.1,1.8-0.9,2.8-0.3l-0.1-0.1c0.5-0.1,1.3-0.4,1.8-0.2c0-0.1,0.1-0.2,0.3-0.3     c0.3,0.2,0.8,0,1.6-0.2c-0.5,0-0.4-0.4-0.9-0.4c1.1-0.5,1.1,0.3,2.1,0.1c0.6-0.3-0.6-0.1-0.7-0.3c1.5,0,3-1.2,4-0.6l-0.6,0.3     c0.6,0.1,0.9,0,0.9,0c-0.2,0-0.3,0-0.3-0.1c1.8-0.6,2.9,0.2,4.7-0.2C51.3,64,51,64,51,63.8c0.8-0.2,0.9,0.6,2.2,0.2l-0.3-0.1     c0.4-0.1,0.8,0,0.8,0.1c0-0.6,2.9-0.3,3.7-1.2c0.7,0.3,2.6,0.3,3.2,0c0.8-0.5-0.8-0.3-0.5-0.7c0.7-0.1,1,0.2,2,0     c0.1,0.3-1.9,0.9,0,0.9l0.2-0.2c-0.2,0-0.4,0.1-0.7,0.1c-0.6-0.1,0.3-0.3,0.4-0.4l2-0.1c0.2,0.4-1,0.4-1.1,0.5     c1.6-0.3,3.4-1,4.9-0.9l-0.2-0.1c1.9,0.1,1-0.8,2.5-0.4c0.8-0.2-0.3-0.4,0.9-0.5c0.3,0,0.2,0.1,0.1,0.2c1.5,0,0.6-0.4,2-0.2     l-0.3-0.4c1.6,0.1,3.4,0.6,4.7,0.3c-0.1-0.3-1-0.2-1.3-0.4c1.9,0.3,4.5-0.4,6.2-0.3c-0.5,0.3,0.9,0.5-0.2,0.8     c-0.3-0.4-0.8-0.1-1.4,0c1,0.8,4-0.8,4.3-0.1l0.2-0.3c0.3,0,1,0.2,0.5,0.3l1.9-0.4c-0.7-0.2-2.1-0.6-2.6-0.2     c-0.6-0.3,0.8-0.3,0.2-0.6c1.3,0.4,0.8-0.3,2.1-0.3c-0.6,0.5,1.4,0.5,1.3,0.7c0.4-0.1,1.4,0,1.8,0.1c0.8,0,2.5-0.5,3.7-0.5     c-0.5-0.1-1.2-0.2-1.2-0.5c0.6,0.1,1.3,0,1.4-0.3c-2.2-0.4-0.6,0.8-2.6,0.6c-0.5-0.3-1-0.4-2-0.4c0.4-0.2,0.2-0.3,0.4-0.6     c1.3,0.7,3.2-0.2,4.8,0.1c0.7,0.2,0.2,0.7,1.7,0.7l-1.3,0.3c1.4-0.3,0.4,0.2,1.5,0.2l-0.5-0.2c0.7-0.1,1-0.1,1.4,0.1l-0.6-0.3     c0.4-0.1,1.1-0.2,1.1,0.1c0.1-0.1,0.1-0.2,0.1-0.2c0.1,0.1,0.3,0.1,0.7,0c-0.3,0-0.5,0-0.5-0.1c1.8,0,0.4-0.4,1.5-0.5     c-0.2-0.1,0.1-0.2,0.5-0.3c0,0.6,2.2,0.5,2.8,0.8l0,0l1.5,0.1c-0.3,0,0-0.2,0.4-0.3l-0.1,0c0.5-0.1-0.6-0.6,0.8-0.5l0.7,0.1     c-0.1,0,0-0.1,0.1-0.2l0.8,0.1c1.1-0.6,2.2,0.2,3.5-0.2c-0.4,0.1-1,0.1-0.7-0.1c0.3-0.1,0.7,0,0.9,0l-0.1-0.1l2.6,0.2     c-0.2-0.2-1.7-0.1-1-0.4c0.4-0.3,1.1,0,1.6,0c-0.1,0.2-0.9,0.3,0,0.4c0.1-0.1,0.9-0.3,0.5-0.4c0.9,0.1,2.2,0.2,3,0.4     c0.2-0.1-0.1-0.1-0.3-0.1l-0.1,0c-0.5-0.1-0.1-0.4-1.1-0.2c-0.1-0.5,1.5-0.2,2.4-0.3l-1.5-0.3c2.4-0.8,5.8-0.2,8.2-0.2     c-0.7,0.2-1.3,0-1.2,0.4c1.5,0.2,1.3,0.1,2.8,0.1l-0.1,0c0.8-0.2,1.9,0.2,2.4-0.2c-0.3-0.2-1.1,0.2-1.1-0.2l1.9,0     c-0.6-0.3-1.9,0-2.6,0c-0.5,0,1.1,0,0.8,0.3c-1.8,0-2.2-0.3-3.1-0.7c-0.5-0.3,0.8-0.3,1.1-0.4c1.1,0.5,2.8,0.6,4.6,0.4l1-0.3     c0.9,0.3,0.5,0.9,2.1,0.9l-0.5-0.3c0.3-0.1,0.6-0.1,0.7-0.1c-0.7-0.2-1.4-0.4-2-0.6c0.9-0.5,2.6,0.3,3.9,0.4     c-0.1-0.1-0.5-0.1-0.7-0.2c2-0.1,4,0.5,5.6,0.6c0.6-0.2-1.3-0.2-0.9-0.5c0.8,0.2,1.7-0.1,1.9,0.2c-0.3-0.5,1.8,0,0.3-0.5     c1.4-0.1,3,0,4.5,0.2c1.5,0.1,3,0.4,4.5,0.6c-0.1-0.1-0.1-0.3,0-0.3c-1,0-2.4-0.2-3-0.6c0.7-0.2,1.5,0.4,1.7,0.3     c-0.3-0.1-1-0.2-1-0.4c0.9-0.2,1.3,0.2,1.9,0.2l-0.3,0.1c1.8,0.4,1,0.9,3,0.8c0.7-0.2,0-0.2,0-0.6c0.5,0.2,2-0.1,2.4,0.3l-1.2,0     c0.8,0.1,1.6,0.2,2.2,0.4c-0.1-0.1-0.1-0.2-0.3-0.2c0.7,0.2,1.5,0.2,1.8,0.5l0.2-0.4c-0.4,0.1-1.6,0.1-1.8-0.2     c0.1-0.3,1.3,0,1.8,0c-2.3-0.3-2.3-0.9-4.3-0.7l0.3,0.1c-1.2,0.2-2.5-0.3-3.5-0.3c0.3-0.1,0.4-0.2,0.2-0.3c-1.2,0.1-2.4,0-3.6,0     c-1.2,0-2.5-0.1-3.8,0l-0.8-0.4l-0.1,0.3c-1.3,0.1-0.3-0.4-1.1-0.4c0.3,0,0.3,0.1,0.3,0.1c-1.5-0.4-0.9,0.2-1.7,0.1     c0.4,0.3,1.7,0.1,1.3,0.5c-1.5-0.4-3.9-0.2-4.1-0.9c-2.8,0.3-6.4-0.2-8.8-0.2c-0.3,0.1,0.2,0.1,0.1,0.2c-1-0.4-3.2,0.3-3.2,0     c-0.5,0.1-0.6,0.4-0.8,0.5c-0.6-0.2-1.3-0.2-2.1-0.3l0.6,0.1l-0.1,0l-0.8-0.1l0,0c-1.9-0.1-4.1,0.1-5.9-0.2     c1,0.2-0.2,0.4,0.2,0.5c-0.9-0.5-3-0.5-4.7-0.3c0,0.1-0.1,0.2,0.1,0.3l-1-0.2l0.1,0.1c-1.8,0.2-3.8-0.3-4.9,0     c0.7,0,0.7,0.1,0.8,0.3c-1.3,0.1-2.5,0.1-4,0.1c0.1,0,0.1,0.1,0.1,0.1c-0.4,0.1-0.9,0-1.3-0.1l0,0.3c-0.8-0.1-1.7,0.1-2.7,0     c-0.3,0.3-2.2-0.1-3.3,0.1c-0.4,0,0.9,0.3-0.2,0.3c-0.2-0.6-1.5,0.1-1.6-0.5l-1,0.3l-0.2-0.3c-0.8,0.7-1.3-0.2-2.5,0.1     c0.1,0.1,0.2,0.1,0.1,0.1c-0.4,0-1.3,0-0.6-0.2c-0.7,0.1-2.9,0.1-1.9,0.4c-0.1-0.2,0.8-0.1,1.3-0.1c0,0.3-1,0.3-1.3,0.6     c0,0-0.2-0.1-0.3-0.1l-0.1,0.2c-1.3-0.2-2.5,0.1-3.4-0.2c0,0.1-0.3,0.2-0.7,0.2l-0.1-0.3L83,57.4l0.7,0.4     c-1.4,0.2-2.5-0.2-3.7-0.2c-0.2,0.6-2.3,0-3.3,0.6l0.9,0.1c-2,0.1-2.3,0.5-4.1,0.5c1.5-0.4,1.6-0.2,3.8-0.9     c-2.3,0.5-4,0.1-6.1,0.6c0.2,0.1,0.7,0.2,0.2,0.3c-0.4-0.3-2,0.2-1.7-0.2c-0.6,0.2-0.7,0.5-1.1,0.6l-2.2-0.2l0.1,0.1     c-3.6,1.2-7,0.2-10.7,1l0.1,0.2l-1-0.2c0.8,0.1-0.3,0.3-0.3,0.4l-2.4-0.1C52.1,60.7,52.3,61.1,52.8,60.9z M84.3,57.7l0.6,0     c0.1,0,0.2,0,0.4,0l-0.4,0C84.6,57.7,84.4,57.9,84.3,57.7z M136.7,55.7c0.3,0.2-0.4,0-0.6,0.1l0.9,0     C137.2,55.7,136.9,55.7,136.7,55.7z M84.5,59.9l-0.3,0.3L83.8,60L84.5,59.9z M76.5,60.7l0.8,0.1l-0.1,0.1L76.5,60.7L76.5,60.7z      M67.4,59.8c0.1,0,0.1,0,0.2,0C67.5,59.8,67.5,59.8,67.4,59.8c-0.6-0.1-0.8,0.3-1.4,0C66.6,59.4,67.1,59.7,67.4,59.8z M81.5,58.4     c0.3,0,0.4,0,0.6,0c-0.2-0.1-0.7-0.3-0.3-0.4c0.3,0.1,1.2,0.1,1.2,0.3C82.2,58.1,81.7,58.8,81.5,58.4z M100.5,56.9l-0.2,0     l0.8,0.1L100.5,56.9z M103.9,56.9c0.4,0.3,1.5,0.1,2.2,0.2c0.2-0.3-0.6-0.5-1.4-0.4C103.7,56.5,104.3,57.1,103.9,56.9z      M75.4,59.4l0.2,0.2l-0.2,0l0.8,0.1c-1,0.4-1.8-0.1-2.4-0.1C74.4,59.6,75.7,59.9,75.4,59.4z M111.3,56.6c0.7,0.1,2.1,0.3,2,0.5     c0-0.4-1-0.5-1.4-0.5C111.7,56.7,111.5,56.6,111.3,56.6z M111.3,57.4c-1.1-0.1-1.2-0.3-2-0.6c1-0.2,1.4,0.3,1.2,0.5     c0.7,0.1,0.6-0.1,1-0.2L111.3,57.4z M110.1,56.3l-0.4,0.1c-0.5,0.2-0.6,0.6-1.3,0.2l1.3-0.2C109.8,56.4,109.9,56.3,110.1,56.3z      M119.1,55.9l-0.4-0.1C119.1,55.8,119.1,55.9,119.1,55.9l0.4,0.1C118.5,56.2,119,56.1,119.1,55.9z M112.2,56.3l-1.3,0     C111.1,56.5,111.8,56.4,112.2,56.3z M118.8,56.3c-0.5,0-1.9,0.2-1.7,0.1C117.2,56.2,118.5,56.2,118.8,56.3z M146.6,56.7l-0.8,0     l0.4-0.3L146.6,56.7z M137.3,56.7l0.2-0.1l0.5,0L137.3,56.7z M128.7,56.8c0-0.1,0-0.1-0.1-0.2c-0.1,0-0.2-0.1-0.3-0.1     c0.1,0,0.2,0,0.3,0.1c0.3,0.1,0.9,0,1.1-0.1c-0.1-0.1-0.7-0.1-0.9-0.2c0.8-0.3,2.6,0.6,2-0.3c0.3,0.1,1.5,0.4,1.1,0.5     C131.1,56.5,129.4,56.6,128.7,56.8c0,0.1-0.1,0.1-0.3,0.1C128.5,56.9,128.6,56.8,128.7,56.8z M117.2,57.3c-0.3,0-0.5,0-0.5-0.1     c-0.3-0.1-0.5-0.2-0.4-0.3c0.7,0.1,0.3,0.2,0.4,0.3C116.8,57.3,117,57.3,117.2,57.3z M115.1,57.5l1.1,0.1l-0.5-0.2l1.6,0.3     C116.4,58,115.3,57.7,115.1,57.5z M114.8,57.7l-0.2-0.2l0.3,0.2L114.8,57.7L114.8,57.7l-1.7,0L114.8,57.7z M96.5,58.3     c-0.6,0.8,1.6,0.4,2,0.8c0.1-0.3,0.7-0.7-1-0.6c1.5-0.4,1,0.4,1.8-0.3c-0.7,0.1-1.6,0-1.7-0.1l0.8-0.1     C97.9,57.7,97.1,58.5,96.5,58.3z M87.4,59.2l-1.1,0.1L87.4,59.2L87.4,59.2z M59.9,62.3c0.1,0.2-1.3,0.7-1.7,0.4     C58.9,62.5,59.7,62.5,59.9,62.3z M48.1,63.7l1.3,0c-0.2,0.4-1.1,0.1-1.7,0.3C47.4,63.7,47.9,63.8,48.1,63.7z M40,64.7l-0.4,0     L40,65L40,64.7z M40.6,65.1c-0.2,0.2,0.6,0.2,0.8,0.1L40.6,65.1z M33.3,66.4l0.5-0.1L33.3,66L33.3,66.4z M34.1,65.9     c0.2,0.2,0.1,0.6,1.3,0.3c0-0.3-0.3-0.2,0.1-0.6c-0.4,0-0.7,0.1-0.9,0.2c0.3,0,0.6-0.1,0.7,0C34.8,65.9,34.4,65.9,34.1,65.9     c-0.1-0.1-0.1-0.2-0.3-0.2C33.8,65.8,33.9,65.8,34.1,65.9z M38.4,65c0.2-0.1,0.3-0.1,0.3-0.2l0.1,0.1     C38.7,65.1,38.5,65.1,38.4,65c-0.2,0.1-0.4,0.1-0.6,0.2c-0.1,0.2,0.7,0.3,1,0.4c-0.4,0-0.8-0.2-1.3,0c0.1,0.1,0,0.1,0.3,0.1     l-0.7,0.1c-0.9-0.2-0.1-0.4,0.7-0.6c0-0.1,0.1-0.1,0.2-0.2C38.1,65,38.3,65,38.4,65z M32.6,65.2l0.4,0c0.2,0.1,0.1,0.2,0.2,0.2     C32.7,65.5,32.1,65.4,32.6,65.2z M56.1,62.3c-0.3,0.1,0.4,0.3,1,0.2l-0.3,0.4c0-0.2-1.2-0.1-1.3-0.1     C55.2,62.5,55.7,62.5,56.1,62.3z M83.5,59.3c0.3,0.4,1.7,0,2.1,0.1C84.8,59.6,83,59.9,83.5,59.3z M86.1,58.9     c0.4,0,0.5-0.1,0.5,0.1c0.2,0.1,0.5-0.1,0.7,0C86.5,59.3,86.5,59,86.1,58.9c-0.1,0-0.2,0-0.4,0C85.8,58.9,86,58.9,86.1,58.9z      M70,60.5l-0.6-0.3l-0.8,0.1L70,60.5z M60.8,60.9c0.1,0.2-0.9,0.3-1.1,0.2c0.1,0.2,0.7,0.1,1.3,0.1c0.1,0,0.2,0,0.3,0     c-0.1,0-0.2,0-0.3,0C60.8,61.2,60.9,61.1,60.8,60.9l0.3,0l-0.7,0L60.8,60.9z M44.7,62.6c-0.6,0.3-0.6,0.2-1,0.2     C43.8,62.7,44.3,62.6,44.7,62.6z M65.6,60.2c-1,0.2,0.5,0.3-0.1,0.5l0.5-0.1c-0.8,0.3-0.6-0.2-1.2-0.1l0.4-0.1     c0.3-0.3-0.6-0.1-0.7-0.3C65,60,66,60.1,65.6,60.2z M43.8,62.6c-0.9,0.4-0.8-0.1-1.4-0.1C43.1,62.1,43,62.6,43.8,62.6z      M59.4,60.2L59.4,60.2l-0.8-0.1l-0.1,0.1L59.4,60.2z"></path> </g> <g> <path fill="#333333" d="M42.8,65.1c-0.2,0.1-0.4,0.1-0.5,0.1C42.5,65.2,42.7,65.1,42.8,65.1z"></path> </g> <g> <path fill="#333333" d="M88.6,60.3c0-0.1,0.1-0.1,0.2-0.1C88.8,60.2,88.7,60.3,88.6,60.3z"></path> </g> <g> <path fill="#333333" d="M90.5,60.3C90.5,60.3,90.6,60.3,90.5,60.3c0.1,0,0.1,0,0.1,0L90.5,60.3z"></path> </g> <g> <path fill="#333333" d="M157.1,58.1c0.4,0.3-0.4,0-0.7,0C156.7,58.2,156.8,58,157.1,58.1z"></path> </g> <g> <path fill="#333333" d="M154.5,57.5c0.2,0.1,0.5,0.2,0.8,0.2C155.1,57.7,154.9,57.7,154.5,57.5z"></path> </g> <g> <path fill="#333333" d="M156.6,57.7c-0.5,0-0.9,0-1.3,0C155.7,57.7,156,57.6,156.6,57.7z"></path> </g> <g> <path fill="#333333" d="M147.5,57.2c0.4,0.2,1.2,0.1,1.2,0.1c-1.7,0.1,0.3,0.4,0.5,0.5C148.1,57.8,148.1,57.5,147.5,57.2z"></path> </g> <g> <path fill="#333333" d="M145.3,57.1c0.2,0,0.3,0,0.5,0C145.6,57.1,145.4,57.1,145.3,57.1z"></path> </g> <g> <path fill="#333333" d="M144.6,57.2c-0.6-0.1-0.8-0.3-1.1-0.4c0.7-0.1,1.2,0.2,1.7,0.3C144.9,57.1,144.4,57,144.6,57.2z"></path> </g> <g> <path fill="#333333" d="M126.4,58.2c0.1,0,0.5,0,0.5,0.1l-1,0C125.5,58.3,126.2,58.2,126.4,58.2z"></path> </g> <g> <path fill="#333333" d="M122.8,57.7c-0.8,0-0.4,0.3-0.8,0.2l0-0.4L122.8,57.7z"></path> </g> <g> <path fill="#333333" d="M123.1,55.7l0.2,0C123.3,55.7,123.2,55.7,123.1,55.7L123.1,55.7z"></path> </g> <g> <path fill="#333333" d="M119,58.2l0.6,0.4C118.9,58.6,118.8,58.2,119,58.2z"></path> </g> <g> <polygon fill="#333333" points="116,58.7 116.4,58.8 115,58.7    "></polygon> </g> <g> <polygon fill="#333333" points="112.3,58.6 112.2,58.7 111.2,58.7    "></polygon> </g> <g> <path fill="#333333" d="M72.8,61.5c-0.2-0.4,1.4-0.4,1.9-0.5C74.4,61.4,73.4,60.9,72.8,61.5z"></path> </g> <g> <path fill="#333333" d="M44.2,64.8l1.5-0.1C44.6,65,45.4,64.7,44.2,64.8z"></path> </g> </g> <g> <path fill="#333333" d="M44,56.9c-1.1,0.1-3.1-0.6-3.3-1.1c0-0.6,0-1.1,0-1.7c0-4.3,0.6-9.1,2.1-14.7c0.1-0.5,0.4-1.5,0.5-2.4    c-2.8,2.4-9.5,13.8-10.1,20.7c-1.9-0.4-2.5-0.9-2.5-1.7c0-1.4,1.8-5.4,4.5-10.5c3.1-5.9,6-10.6,8.7-12.3c1.1-0.1,4.1,1,4.2,1.6    c-1.1,2.2-3.2,9.5-4,15.3c2.7-6.6,8.3-15.5,10.9-17.6c1.1-0.1,4.1,1,4.2,1.6c-2.5,4.6-3.8,13.8-3.8,19.3c0,0.9,0,1.9,0.1,2.9    c-1.1,0.1-3.3-0.4-3.7-1c0-0.6,0-1.1,0-1.7c0-4.3,0.6-9.1,2.1-14.7c0.1-0.6,0.4-1.6,0.6-2.6c-3.3,1.8-9.6,13.8-10.1,20.8    C44.3,56.9,44.2,56.9,44,56.9z"></path> <path fill="#333333" d="M67.2,32.3c0.8,0,2.9,0.9,3.2,1.6c-3.4,3.3-7,17-7,21.3c0,0.4,0,0.5,0.1,0.6c-1.7,0-1.4-1-2.1-1.3    c-0.5-0.2-0.8-1.9-0.8-2.6C60.6,47.7,64.9,34.8,67.2,32.3z"></path> <path fill="#333333" d="M68.7,53.2c0-3.6,5.3-17.1,7.9-20.9l-0.2-1.2c1.1-0.1,4.4,1,4.6,1.5c-0.2,0.9-0.3,3-0.3,5.2    c0,4.3,0.2,8.3,1.4,12.4c1.9-9.5,4.8-19.4,6.3-19.6c0.9,0.1,2.1,1,2.6,1.8c-3.7,1.8-7.5,17.3-7.6,22c0,0,0,0.1,0,0.1    c-0.1,0-0.3,0-0.4,0.1c-1.8,0.1-3.3-0.3-3.8-1.1C77.6,47,77,41.5,76.8,34.7c-2.2,3.7-5.3,14.5-5.3,19.2c0,0.8,0,1.1,0.1,1.3    C69.3,54.7,68.7,54.3,68.7,53.2z"></path> <path fill="#333333" d="M96.5,30.5c0.8,0,2.9,0.9,3.2,1.6c-3.4,3.3-7,17-7,21.3c0,0.4,0,0.5,0.1,0.6c-1.7,0-1.4-1-2.1-1.3    c-0.5-0.2-0.8-1.9-0.8-2.6C89.9,45.9,94.2,32.9,96.5,30.5z"></path> <path fill="#333333" d="M110,52.8c-1.1,0.1-3.1-0.6-3.3-1.1c0-0.6,0-1.1,0-1.7c0-4.3,0.6-9.1,2.1-14.7c0.1-0.5,0.4-1.5,0.5-2.4    c-2.8,2.4-9.5,13.8-10.1,20.7c-1.9-0.4-2.5-0.9-2.5-1.7c0-1.4,1.8-5.4,4.6-10.5c3.1-5.9,6-10.6,8.7-12.3c1.1-0.1,4.1,1,4.2,1.6    c-1.1,2.2-3.2,9.5-4,15.3c2.7-6.6,8.3-15.5,10.9-17.6c1.1-0.1,4.1,1,4.2,1.6c-2.5,4.6-3.8,13.8-3.8,19.3c0,0.9,0,1.9,0.1,2.9    c-1.1,0.1-3.3-0.4-3.7-1c0-0.6,0-1.1,0-1.7c0-4.3,0.6-9.1,2.1-14.7c0.1-0.6,0.4-1.6,0.6-2.6c-3.3,1.8-9.6,13.8-10.1,20.8    C110.3,52.8,110.2,52.8,110,52.8z"></path> <path fill="#333333" d="M124.7,50c0-1.3,1.5-4.7,3.9-9.2c-1,0-1.8,0.1-2.3,0.1c0.2-0.6,1.4-1.1,3.2-1.5c3.1-5.3,7-9.8,10.2-11.8    c0-0.3,0.1-0.5,0.1-0.6c1.1-0.1,4.1,1,4.2,1.6c-1.3,2.3-2.6,7.1-3.5,13.4c-0.2,1.6-0.4,3.6-0.4,6c0,0.9,0,1.8,0.1,2.7    c-0.1,0-0.1,0-0.4,0.1c-1.1,0.1-3.1-0.6-3.3-1.1c0-0.5,0-1,0-1.5c0-2.4,0.2-4.9,0.6-7.6c-1.1,0-3.8,0-6.3,0.1    c-0.9,1.8-1.8,3.6-2.4,5.4c-0.6,1.9-1.1,3.9-1.2,5.5C125.3,51.3,124.7,50.9,124.7,50z M139.1,30.7c-2,0.9-4.9,4.2-7.3,8.3    c1.6-0.2,3.5-0.5,5.6-0.6c0.3-1.6,0.7-3.3,1.1-5C138.7,32.8,138.9,31.8,139.1,30.7z"></path> <path fill="#333333" d="M156.4,48.4c0,0.4-0.1,0.6-0.1,0.9c-0.7,0-1.4,0-2.2,0c-1.9,0.1-3.7,0.4-7.5,1.3c-0.9-0.3-1.8-1.2-2.6-2.4    c0.8-1.8,2.4-5.1,4.6-11.6c1.4-4.3,1.9-6.1,2.8-10.5c1.6,0.2,2.6,1,3.7,2.4c-0.6,1-2.1,4.8-3.9,9.6c-1.7,4.7-3.4,8.5-3.4,9.7    c1.2-0.1,1.9-0.3,3.7-0.8c1.6-0.5,2.5-0.7,4.2-0.9C156.1,46.9,156.4,47.7,156.4,48.4z"></path> </g> <g> <polygon fill="#333333" points="74.2,14 75.2,16 77.4,16.4 75.8,17.9 76.2,20.1 74.2,19.1 72.2,20.1 72.6,17.9 71,16.4 73.2,16       "></polygon> </g> <g> <polygon fill="#333333" points="83.1,14 84.1,16 86.4,16.4 84.7,17.9 85.1,20.1 83.1,19.1 81.2,20.1 81.5,17.9 79.9,16.4 82.1,16       "></polygon> </g> <g> <polygon fill="#333333" points="92.1,14 93.1,16 95.3,16.4 93.7,17.9 94.1,20.1 92.1,19.1 90.1,20.1 90.5,17.9 88.9,16.4 91.1,16       "></polygon> </g> <g> <polygon fill="#333333" points="101.1,14 102.1,16 104.3,16.4 102.7,17.9 103.1,20.1 101.1,19.1 99.1,20.1 99.5,17.9 97.9,16.4     100.1,16   "></polygon> </g> <g> <polygon fill="#333333" points="110,14 111,16 113.3,16.4 111.6,17.9 112,20.1 110,19.1 108,20.1 108.4,17.9 106.8,16.4 109,16       "></polygon> </g> </g> </svg>
                        </div>
                    </div>
                    <div class="panel-logo">
                        <div class="wrap-logo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 190 90" enable-background="new 0 0 190 90" xml:space="preserve"> <g> <g> <path fill="#231F20" d="M18.8,45.5h1v-2.6c0-2.1-0.1-3.5-0.4-4.3c-0.2-0.7-0.7-1.1-1.4-1.1c-0.4,0-0.8,0.1-1.1,0.3
                            c-0.3,0.2-0.5,0.5-0.5,0.9c0,0.4,0.1,0.7,0.2,1.1h0.8c0.2,0.5,0.3,1,0.3,1.7c0,0.7-0.3,1.2-0.8,1.7c-0.6,0.5-1.3,0.7-2.1,0.7
                            c-1.9,0-2.9-0.9-2.9-2.8c0-2.7,2.3-4.1,7-4.1c2.7,0,4.5,0.5,5.5,1.4c1,0.9,1.5,2.6,1.5,5v6.8c0,1.2,0.3,1.7,1,1.7
                            c0.8,0,1.2-1.1,1.3-3.4l0.5,0c-0.1,2-0.5,3.3-1.1,4c-0.6,0.7-1.7,1.1-3.2,1.1c-2.7,0-4.2-0.8-4.6-2.5c-0.3,0.8-0.7,1.5-1.3,1.9
                            c-0.6,0.4-1.4,0.6-2.5,0.6c-3.3,0-4.9-1.3-4.9-4c0-1.6,0.6-2.7,1.9-3.3C14.3,45.8,16.2,45.5,18.8,45.5z M17.5,49.6
                            c0,1.2,0.1,1.9,0.2,2.2c0.1,0.3,0.4,0.5,0.7,0.5c0.3,0,0.7-0.3,1-0.9c0.3-0.6,0.5-1.4,0.5-2.4v-3.1h-0.2c-1.4,0-2.1,1-2.1,3V49.6
                            L17.5,49.6z"></path> </g> <g> <path fill="#231F20" d="M26.8,38.1v-0.6h10v0.6h-2.1l4,11.1l3.6-11.1h-2.2v-0.6h4.5v0.6h-1.5l-4.9,15.3h-3.8l-6.2-15.3H26.8z"></path> </g> <g> <path fill="#231F20" d="M51.9,45.5h1v-2.6c0-2.1-0.1-3.5-0.4-4.3c-0.2-0.7-0.7-1.1-1.4-1.1c-0.4,0-0.8,0.1-1.1,0.3
                            c-0.3,0.2-0.5,0.5-0.5,0.9c0,0.4,0.1,0.7,0.2,1.1h0.8c0.2,0.5,0.3,1,0.3,1.7c0,0.7-0.3,1.2-0.8,1.7C49.5,43.8,48.8,44,48,44
                            c-1.9,0-2.9-0.9-2.9-2.8c0-2.7,2.3-4.1,7-4.1c2.7,0,4.5,0.5,5.5,1.4c1,0.9,1.5,2.6,1.5,5v6.8c0,1.2,0.3,1.7,1,1.7
                            c0.8,0,1.2-1.1,1.3-3.4l0.5,0c-0.1,2-0.5,3.3-1.1,4c-0.6,0.7-1.7,1.1-3.2,1.1c-2.7,0-4.2-0.8-4.6-2.5c-0.3,0.8-0.7,1.5-1.3,1.9
                            c-0.6,0.4-1.4,0.6-2.5,0.6c-3.3,0-4.9-1.3-4.9-4c0-1.6,0.6-2.7,1.9-3.3C47.4,45.8,49.3,45.5,51.9,45.5z M50.6,49.6
                            c0,1.2,0.1,1.9,0.2,2.2c0.1,0.3,0.4,0.5,0.7,0.5c0.3,0,0.7-0.3,1-0.9s0.5-1.4,0.5-2.4v-3.1h-0.2c-1.4,0-2.1,1-2.1,3V49.6
                            L50.6,49.6z"></path> </g> <g> <path fill="#231F20" d="M62.3,37.5h8.1v3.1c0.4-1,0.9-1.8,1.6-2.5c0.7-0.6,1.8-0.9,3.3-0.9c3.5,0,5.2,1.9,5.2,5.6v10.1h1.9v0.6
                            h-9.5v-0.6h1.4V41.9c0-1.3-0.1-2.2-0.3-2.6c-0.2-0.4-0.5-0.6-1-0.6c-0.7,0-1.3,0.5-1.9,1.4c-0.5,0.9-0.8,2.1-0.8,3.4v9.2h1.4v0.6
                            h-9.5v-0.6h1.8V38.1h-1.8V37.5z"></path> </g> <g> <path fill="#231F20" d="M84.3,48.6V38.1h-1.8v-0.6h1.8v-4.3l6.2-1.5v5.8h4.3v0.6h-4.3v11.3c0,1,0.1,1.8,0.3,2.3
                            c0.2,0.5,0.7,0.7,1.3,0.7c0.7,0,1.3-0.3,1.8-1c0.5-0.7,0.8-1.6,1-2.7l0.6,0.1c-0.2,1.5-0.7,2.8-1.5,3.7c-0.8,0.9-2.1,1.4-4,1.4
                            c-1.8,0-3.3-0.4-4.2-1.1C84.8,51.9,84.3,50.5,84.3,48.6z"></path> </g> <g> <path fill="#231F20" d="M111.9,37.2c-0.1,1.2-0.1,2.5-0.1,4.4V51c0,3.7-0.7,6-2.3,7.4c-1.6,1.5-3.8,1.9-5.9,1.9
                            c-1.9,0-4.1-0.5-5.4-1.3l0.7-2.2c1.1,0.7,2.7,1.3,4.7,1.3c3,0,5.2-1.6,5.2-5.6v-1.8h-0.1c-0.9,1.5-2.6,2.7-5.1,2.7
                            c-4,0-6.9-3.4-6.9-7.9c0-5.5,3.6-8.6,7.3-8.6c2.8,0,4.3,1.5,5,2.8h0.1l0.1-2.4H111.9z M108.8,43.6c0-0.5,0-0.9-0.2-1.3
                            c-0.5-1.7-2-3.1-4.1-3.1c-2.8,0-4.8,2.4-4.8,6.1c0,3.2,1.6,5.8,4.8,5.8c1.8,0,3.4-1.1,4.1-3c0.2-0.5,0.2-1.1,0.2-1.6V43.6z"></path> <path fill="#231F20" d="M125.6,53.4l-0.2-2h-0.1c-0.9,1.3-2.6,2.4-4.9,2.4c-3.3,0-4.9-2.3-4.9-4.6c0-3.9,3.5-6,9.7-6v-0.3
                            c0-1.3-0.4-3.7-3.7-3.7c-1.5,0-3.1,0.5-4.2,1.2l-0.7-1.9c1.3-0.9,3.3-1.4,5.3-1.4c4.9,0,6.2,3.4,6.2,6.6v6c0,1.4,0.1,2.8,0.3,3.9
                            H125.6z M125.1,45.1c-3.2-0.1-6.9,0.5-6.9,3.6c0,1.9,1.3,2.8,2.8,2.8c2.1,0,3.4-1.3,3.9-2.7c0.1-0.3,0.2-0.6,0.2-0.9V45.1z"></path> </g> <g> <path fill="#231F20" d="M128.5,42.2c0-1.9,0-3.5-0.1-5h2.6l0.1,3.2h0.1c0.7-2.2,2.5-3.5,4.5-3.5c0.3,0,0.6,0,0.8,0.1v2.8
                            c-0.3-0.1-0.6-0.1-1-0.1c-2.1,0-3.5,1.6-3.9,3.8c-0.1,0.4-0.1,0.9-0.1,1.4v8.6h-2.9V42.2z"></path> </g> <g> <path fill="#231F20" d="M154,29.6v19.6c0,1.4,0,3.1,0.1,4.2h-2.6l-0.1-2.8h-0.1c-0.9,1.8-2.9,3.2-5.5,3.2c-3.9,0-6.9-3.3-6.9-8.2
                            c0-5.4,3.3-8.7,7.3-8.7c2.5,0,4.1,1.2,4.9,2.5h0.1v-9.7H154z M151,43.8c0-0.4,0-0.9-0.1-1.2c-0.4-1.9-2-3.4-4.2-3.4
                            c-3,0-4.8,2.7-4.8,6.3c0,3.3,1.6,6,4.8,6c2,0,3.8-1.3,4.3-3.5c0.1-0.4,0.1-0.8,0.1-1.3V43.8z"></path> <path fill="#231F20" d="M160.5,45.8c0.1,4,2.6,5.6,5.5,5.6c2.1,0,3.4-0.4,4.5-0.8l0.5,2.1c-1,0.5-2.8,1-5.4,1c-5,0-8-3.3-8-8.2
                            c0-4.9,2.9-8.7,7.6-8.7c5.3,0,6.7,4.6,6.7,7.6c0,0.6-0.1,1.1-0.1,1.4H160.5z M169.1,43.7c0-1.9-0.8-4.8-4.1-4.8
                            c-3,0-4.3,2.7-4.5,4.8H169.1z"></path> <path fill="#231F20" d="M174.9,51.6c0-1.2,0.8-2.1,2-2.1s2,0.9,2,2.1c0,1.2-0.8,2.1-2,2.1C175.7,53.7,174.9,52.8,174.9,51.6z"></path> </g> </g>
                            </svg>
                        </div>
                    </div>
                    <div class="panel-logo">
                        <div class="wrap-logo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 190 90" enable-background="new 0 0 190 90" xml:space="preserve"> <g> <g> <g> <path fill="#231F20" d="M21.7,34.2h9.4v3.6c0.9-2.7,2.8-4,5.7-4s4.7,1.4,5.3,4.2c0.9-2.8,2.8-4.2,5.7-4.2c3.8,0,5.7,2.2,5.7,6.5
                            v11.8h2.2v0.7H45v-0.7h1.4V39.4c0-2-0.2-3.1-0.5-3.5c-0.2-0.2-0.4-0.2-0.6-0.2c-0.8,0-1.4,0.5-2,1.5c-0.6,1-0.9,2.3-0.9,3.9v11
                            h1.4v0.7h-10v-0.7h1.4V39.4c0-2-0.2-3.1-0.5-3.5c-0.2-0.2-0.4-0.2-0.6-0.2c-0.7,0-1.4,0.6-2,1.7c-0.6,1.1-0.9,2.4-0.9,4v10.8h1.4
                            v0.7H21.7v-0.7h2.1V34.9h-2.1V34.2z"></path> <path fill="#231F20" d="M65.8,43.7h1.1v-3c0-2.5-0.1-4.1-0.4-5c-0.3-0.8-0.8-1.3-1.6-1.3c-0.5,0-0.9,0.1-1.3,0.4
                            c-0.4,0.2-0.6,0.6-0.6,1c0,0.4,0.1,0.9,0.2,1.3h1c0.2,0.5,0.3,1.2,0.3,2c0,0.8-0.3,1.4-1,2c-0.7,0.6-1.5,0.8-2.5,0.8
                            c-2.2,0-3.4-1.1-3.4-3.2c0-3.2,2.7-4.8,8.2-4.8c3.1,0,5.2,0.5,6.4,1.6c1.2,1.1,1.8,3,1.8,5.8v7.9c0,1.4,0.4,2,1.1,2
                            c0.9,0,1.4-1.3,1.6-4l0.6,0c-0.1,2.3-0.5,3.9-1.3,4.7c-0.8,0.9-2,1.3-3.7,1.3c-3.1,0-4.9-1-5.4-2.9c-0.3,1-0.8,1.7-1.5,2.2
                            c-0.7,0.5-1.7,0.7-3,0.7c-3.9,0-5.8-1.6-5.8-4.7c0-1.8,0.7-3.1,2.2-3.8C60.5,44,62.7,43.7,65.8,43.7z M64.2,48.5
                            c0,1.4,0.1,2.2,0.2,2.6c0.1,0.4,0.4,0.6,0.8,0.6c0.4,0,0.8-0.3,1.1-1c0.4-0.7,0.5-1.6,0.5-2.8v-3.6h-0.3c-1.6,0-2.4,1.2-2.4,3.6
                            V48.5L64.2,48.5z"></path> <path fill="#231F20" d="M91.7,37.3c0.7-1.3,0.4-2-0.8-2c-1,0-1.8,0.6-2.5,1.9c-0.7,1.3-1.1,2.7-1.1,4.5v10.5H90v0.7H77.8v-0.7H80
                            V34.9h-2.1v-0.7h9.4V38c0.3-1.3,1-2.4,2-3.1c1-0.7,2.1-1.1,3.3-1.1c1.2,0,2.2,0.3,3,1c0.8,0.7,1.2,1.7,1.2,2.9
                            c0,1.3-0.3,2.2-0.9,2.9c-0.6,0.7-1.5,1-2.6,1c-1.2,0-2.1-0.4-2.6-1.2c-0.6-0.8-0.6-1.9-0.2-3.2H91.7L91.7,37.3z"></path> </g> <g> <path fill="#231F20" d="M99.1,47.2V34.9H97v-0.7h2.1v-5l7.3-1.8v6.8h5.1v0.7h-5.1v13.2c0,1.2,0.1,2.1,0.4,2.7
                            c0.2,0.6,0.8,0.9,1.5,0.9c0.8,0,1.5-0.4,2.1-1.2c0.6-0.8,1-1.8,1.2-3.2l0.7,0.1c-0.2,1.8-0.8,3.2-1.7,4.3
                            c-0.9,1.1-2.5,1.6-4.7,1.6c-2.2,0-3.8-0.4-5-1.3C99.7,51.1,99.1,49.5,99.1,47.2z"></path> </g> <g> <path fill="#231F20" d="M112,34.9v-0.7h11.3v0.7h-2.1l4.3,13l4.5-13h-2.6v-0.7h5.5v0.7h-2L123.6,56c-0.9,2.4-1.8,4.2-2.9,5.1
                            c-1.1,1-2.4,1.5-3.9,1.5c-1.5,0-2.7-0.4-3.6-1.1c-0.9-0.7-1.3-1.6-1.3-2.7s0.3-1.9,0.9-2.5c0.6-0.6,1.3-0.9,2.3-0.9
                            c2.2,0,3.2,0.9,3.2,2.7c0,0.4-0.1,0.9-0.2,1.4h-1.4c-0.2,0.6-0.2,1.1-0.1,1.5c0.2,0.4,0.5,0.6,1.1,0.6c1.1,0,2-0.5,2.9-1.6
                            c0.8-1.1,1.6-2.7,2.4-4.8l0.9-2.4h-3.4l-6.7-17.9H112z"></path> <path fill="#231F20" d="M133.1,34.2h9.4v3.6c0.4-1.2,1.1-2.2,1.9-2.9c0.9-0.7,2.2-1.1,3.9-1.1c4,0,6.1,2.2,6.1,6.5v11.8h2.2v0.7
                            h-11.1v-0.7h1.6V39.4c0-1.6-0.1-2.6-0.3-3c-0.2-0.5-0.6-0.7-1.1-0.7c-0.8,0-1.6,0.5-2.2,1.6c-0.6,1.1-1,2.4-1,4v10.8h1.7v0.7
                            h-11.1v-0.7h2.1V34.9h-2.1V34.2z"></path> </g> </g> <path fill="#231F20" d="M120.1,31.1c0,0,74.5-8.2,38.3,6.1C158.4,37.2,176.3,28.2,120.1,31.1z"></path> </g> 
                            </svg> 
                        </div>
                    </div>
                    <div class="panel-logo">
                    <div class="wrap-logo">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 190 90" enable-background="new 0 0 190 90" xml:space="preserve"> <g> <g> <g> <path fill="#231F20" d="M24.6,29.3c0,4.8,0.3,9.5,0.5,14.3c0,1.6,2.3,1.6,2.5,0c0.4-4.8,0.5-9.9-0.3-14.7
                            C26.9,27.5,24.5,27.9,24.6,29.3z"></path> </g> <g> <path fill="#231F20" d="M32.2,28.9c-0.1,5,0.4,10.2,0.9,15.2c0.1,1.5,2.3,1.6,2.4,0c0.2-5,0.2-10.5-0.8-15.5
                            C34.4,27.1,32.2,27.5,32.2,28.9z"></path> </g> <g> <path fill="#231F20" d="M40,30.1c-0.2,4.2,0,8.5,0.1,12.7c0,1.3,2.1,1.7,2.3,0.3c0.7-4.2,0.8-9.1,0.1-13.4
                            C42.3,28.3,40.1,28.7,40,30.1z"></path> </g> </g> <g> <g> <g> <g> <path fill="#231F20" d="M72.6,61.5L72.6,61.5c0.3,0.1,0.6,0.2,0.9,0.2c0.6,0,0.8-0.5,0.8-1v-5.6H75v5.7c0,0.7-0.4,1.4-1.5,1.4
                            c-0.4,0-0.7-0.1-1.1-0.3L72.6,61.5z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M81.3,59.9h-2.8l-0.8,2.3H77l2.7-7h0.6l2.7,7h-0.7L81.3,59.9z M81.1,59.3l-0.8-2.2L79.9,56l-0.4,1.1
                            l-0.8,2.2H81.1z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M91.6,62.2h-0.7l-0.5-4.4l-0.1-1.5l-0.5,1.5l-1.4,3.5h-0.6l-1.4-3.4l-0.6-1.5l-0.1,1.5l-0.4,4.4h-0.7
                            l0.8-7H86l1.8,4.6l0.3,0.6l0.2-0.6l1.8-4.6h0.7L91.6,62.2z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M98.1,61.6v0.6h-3.8v-7H98v0.6h-3.1v2.5h2.6l-0.1,0.6h-2.6v2.8H98.1z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M100.1,61.7v-0.8h0.1c0.6,0.4,1.3,0.8,2.1,0.8c0.9,0,1.5-0.5,1.5-1.3c0-0.7-0.5-1.1-1.5-1.5
                            c-1-0.4-2.1-0.7-2.1-2c0-1.1,0.8-1.9,2.1-1.9c0.6,0,1.3,0.2,1.8,0.5l-0.2,0.7h0c-0.6-0.4-1.2-0.6-1.7-0.6
                            c-0.9,0-1.3,0.6-1.3,1.2c0,0.7,0.4,0.9,1.5,1.4c1,0.5,2.1,0.9,2.1,2.1c0,1.1-0.9,2-2.3,2C101.3,62.3,100.5,62,100.1,61.7z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M114,61.6v0.6h-3.7v-7h0.7v6.4H114z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M115.9,55.2h0.7v7h-0.7V55.2z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M122.9,59.9h-2.8l-0.8,2.3h-0.7l2.7-7h0.6l2.7,7h-0.7L122.9,59.9z M122.7,59.3l-0.8-2.2l-0.4-1.1
                            l-0.4,1.1l-0.8,2.2H122.7z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M133.2,62.2h-0.7l-0.5-4.4l-0.1-1.5l-0.5,1.5l-1.4,3.5h-0.6l-1.4-3.4l-0.6-1.5l-0.1,1.5l-0.4,4.4h-0.7
                            l0.8-7h0.7l1.8,4.6l0.3,0.6l0.2-0.6l1.8-4.6h0.7L133.2,62.2z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M135.8,59.9v-4.7h0.7v4.6c0,1.4,0.8,1.9,1.7,1.9c0.9,0,1.7-0.5,1.7-1.9v-4.6h0.7v4.7
                            c0,1.5-1,2.5-2.4,2.5C136.7,62.3,135.8,61.5,135.8,59.9z"></path> </g> </g> </g> <g> <g> <g> <path fill="#231F20" d="M62.2,30c2.9,2.6,3.7,7,1.9,10.5c-2.9,5.6-9.2,4.7-14.4,4.7c0-5.8,0-11.6,0-17.4h4.4
                            C57.1,27.8,59.9,27.9,62.2,30z M56.5,32c-0.8,0-1.6,0-2.4,0c0,3,0,6,0,9c2.8,0,5.9-0.2,6.7-3.4C61.4,34.8,59.3,32.1,56.5,32z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M71.1,45.2h-4.4V28h4.4V45.2z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M87.2,45.2h-4.4l-2.7-6.5h-2.8v6.5h-4.1V28h1.7h2.5h4.1c3,0,5.4,2.4,5.4,5.4c0,1.9-1,3.5-2.4,4.5
                            L87.2,45.2z M81.2,31.5c-0.1,0-1.1,0-4.1,0v3.7h4.1c0.9-0.1,1.6-0.9,1.6-1.9C82.8,32.3,82.1,31.6,81.2,31.5z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M100.4,45.2h-7.3h-4.4V28h4.4h7.1v3.7h-7.1v3h6v3.7h-6v3h7.3V45.2z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M113.8,39.8l3,3c-1.6,1.6-3.8,2.6-6.2,2.6c-4.8,0-8.7-3.9-8.7-8.7c0-4.8,3.9-8.7,8.7-8.7
                            c2.4,0,4.6,1,6.2,2.6l-3,3c-0.8-0.8-2-1.3-3.2-1.3c-2.5,0-4.5,2-4.5,4.5c0,2.5,2,4.5,4.5,4.5C111.8,41.1,113,40.6,113.8,39.8z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M131.2,32.3h-4.4v12.9h-4.4V32.3H118V28h4.4h4.4h4.4V32.3z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M149.9,36.7c0,4.8-3.9,8.7-8.7,8.7c-4.8,0-8.7-3.9-8.7-8.7c0-4.8,3.9-8.7,8.7-8.7
                            C146,28,149.9,31.9,149.9,36.7z M145.7,36.7c0-2.5-2-4.5-4.5-4.5c-2.5,0-4.5,2-4.5,4.5c0,2.5,2,4.5,4.5,4.5
                            C143.7,41.2,145.7,39.2,145.7,36.7z"></path> </g> </g> <g> <g> <path fill="#231F20" d="M165.4,45.2H161l-2.7-6.5h-2.8v6.5h-4.1V28h1.7h2.5h4.1c3,0,5.4,2.4,5.4,5.4c0,1.9-1,3.5-2.4,4.5
                            L165.4,45.2z M159.4,31.5c-0.1,0-1.1,0-4.1,0v3.7h4.1c0.9-0.1,1.6-0.9,1.6-1.9C161.1,32.3,160.3,31.6,159.4,31.5z"></path> </g> </g> </g> </g> </g> </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="quick-equiry-panel">
            <div class="uk-container uk-container-center">
                <div class="uk-flex uk-flex-space-between uk-flex-middle">
                    <div class="quick-title">
    
                        <div class="blog-title left">
                            QUICK ENQUIRY.
                        </div>
                        <div class="blog-heading m0 left">
                            Want more
                            information?
                        </div>
                    </div>
                    <div class="quick-contact">
                        <div class="uk-flex uk-flex-center uk-flex-middle">
                            <div class="input-quick">
                                <input type="text" placeholder="Your Name">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="input-quick">
                                <input type="text" placeholder="Phone number">
                                <input type="text" placeholder="Project">
                            </div>
                            <div class="button-quick">
                                <button>
                                    Get a call back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php require_once 'common/footer.php'; ?>
		<?php require_once 'common/offcanvas.php'; ?>
		<?php require_once 'common/script.php'; ?>
	</body>
</html>