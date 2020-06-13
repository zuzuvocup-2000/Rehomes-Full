<!DOCTYPE html>
<html>
<head>
<?php require_once 'common/head.php'; ?>
</head>
	<body>

        <div class="header-bg" style="background-image : url(resources/img/upload/header-bg.jpg)">
            <?php require_once 'common/header.php'; ?>
            <div class="page-header">
                <h1>About us</h1>
                <ul class="uk-breadcrumb">
                    <li><a href="" class="active">Home page</a></li>
                    <li><a href="">About us</a></li>
                    
                </ul>
            </div>
        </div>
    
        <section class="chart-panel">
            <div class="uk-container uk-container-center">
                <div class="blog-heading left">
                    Your dream our commitment
				</div>
                <div class="uk-grid uk-grid-large uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-clearfix mb30 ">
                    <div class="chart-content">
                        <p>The Group successfully ventured into Real Estate by creating a series of residential spaces at strategic locations in Kolkata, Siliguri and Durgapur under the aegis of Dream Homes.</p>
                        <p>Our mission is to engage in issues that are of concern to individuals, families and communities through an uncompromising commitment to create outstanding living, work and leisure environments.</p>
                    </div>

                    <div class="chart-line">
                        <div class="chart-wrap">
                            <div class="chart-title">
                                Offices
                            </div>
                            <div class="chart">
                                <div class="chart-max" style="width:75%">

                                </div>
                            </div>
                        </div>
                        <div class="chart-wrap">
                            <div class="chart-title">
                                Rentals
                            </div>
                            <div class="chart">
                                <div class="chart-max" style="width:45%">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="chart-wrap">
                            <div class="chart-title">
                                Apartments
                            </div>
                            <div class="chart">
                                <div class="chart-max" style="width:94%">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="uk-grid uk-grid-medium uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3 uk-clearfix">
                    <div class="work-img">
                        <a href="" class="img-cover">
                            <img src="resources/img/upload/us-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="work-img">
                        <a href="" class="img-cover">
                            <img src="resources/img/upload/us-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="work-img">
                        <a href="" class="img-cover">
                            <img src="resources/img/upload/us-3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <section class="achievement-panel" style="background-image: url(resources/img/upload/bg-our-mission.jpg);">
            <div class="uk-container uk-container-center">
                <div class="blog-heading ">
                Over 25 years of experience
                </div>
                <div class="achievement-text">
                ReHomes Realty brings to you the Building Revolution. It all started with realistic appraisal of your living needs.
                </div>
                <div class="achievement-wrap">
                    
                    <div class="uk-grid uk-grid-medium uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-clearfix">
                        <div class="achievement-img">
                            <a href="" class="img-cover">
                                <img src="resources/img/upload/achievement-bg.jpg" alt="">
                            </a>
                        </div>
                        <?php  
                            $owlInit = array(
                                'items' =>  1,
                                'margin' => 20,
                                'loop' => true,
                                'nav' => false,
                                'dots' =>true,
                                'autoplay' => true,
                                'autoplayTimeout' => 5000,
                            );
                        ?>
                        <?php 
                            $wcu = array(
                                0 => array(
                                    'year' => 1983,
                                    'text-1' => 'Duis aute irure dolor in reprehenderitn voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat',
                                    'text-2' => 'cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem',
                                    
                                ),
                                1 => array(
                                    'year' => 1993,
                                    'text-1' => 'cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem',
                                    'text-2' => 'Duis aute irure dolor in reprehenderitn voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat',
                                ),
                                2 => array(
                                    'year' => 2003,
                                    'text-1' => 'cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem',
                                    'text-2' => 'Duis aute irure dolor in reprehenderitn voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat',
                                ),
                                3 => array(
                                    'year' => 2019,
                                    'text-1' => 'cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem',
                                    'text-2' => 'Duis aute irure dolor in reprehenderitn voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat',
                                ),
                                
                            )
                        ?>

                        <div class="achievement-slide">

                            <div class="owl-carousel owl-theme" data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>" data-disabled="0">
                                <?php  $h=0;for($i = 1; $i <= 4 ; $i++){?>
                                    <div class="wrap-achievement-slide">

                                        <div class="achievement-year">
                                            <?php echo $wcu[$h]['year']?>
                                        </div>
                                        <p>
                                            <?php echo $wcu[$h]['text-1']?>
                                        </p>
                                        <p>
                                            <?php echo $wcu[$h]['text-2']?>
                                        </p>
                                    </div>
                                <?php  $h++; } ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="about-us-panel" style="background-image: url(resources/img/upload/bg-about-us.jpg);"> 
            <div class="uk-container uk-container-center">
                <div class="see-more-pj">
                    <div class="uk-grid uk-grid-medium uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-clearfix">
                        <div class="invest-panel">
                            <div class="invest-wrap">
                                <div class="invest-content">

                                    <div class="invest-title">Invest in our project</div>
                                    <p>Investing in our projects can give you satisfying returns and can stregthen our relationship.</p>
                                    <button class="btn btn-more-us">
                                       
                                        EXPLORE MORE
                                        <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="join-venture-panel">
                            <div class="join-venture-wrap">
                                <div class="join-venture-content">
                                    <div class="invest-title">Joint venture</div>
                                    <p>Joining hands with us can take your business concern to greater level of prosperity</p>
                                    <button class="btn btn-more-us">
                                    
                                        EXPLORE MORE
                                        <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                    </button>
                                </div>
                            </div>
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
					News &amp; Events
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
										TIPS &amp; TRICKS
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
										TIPS &amp; TRICKS
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
		<?php require_once 'common/footer.php'; ?>
		<?php require_once 'common/offcanvas.php'; ?>
		<?php require_once 'common/script.php'; ?>
	</body>
</html>