<?php

function curl_get_file_contents($URL)
{
    $c = curl_init();
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_URL, $URL);
    $contents = curl_exec($c);
    curl_close($c);

    if ($contents) {
        return $contents;
    } else {
        return false;
    }

}

function getVisIpAddr()
{

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip = getVisIpAddr();

$ipdat = json_decode(curl_get_file_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

$cc = $ipdat->geoplugin_countryCode;
$country = $ipdat->geoplugin_countryName;

if ($cc == "RU" || $cc == "PK" || $cc == "CN") {
    http_response_code(403);
    echo "<h1>Access Denied</h1>";
    echo "<p>This website is not available in your country.</p>";
    die();
}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Yash Gohel</title>
	<meta name="description" content="Yash Gohel - Founder PlanckStudio" />
	<meta name="keywords"
		content="ygohel18,yash gohel,resume,portfolio,design,coding,planck studio, behance,ui,ux,android,programmer,coder,php,kotlin,js,brand identity design,jamjodhpur,rajkot,ahmedabad,gujarat,jetpur,avpti,om engineering,gtu,computer engineer,planckstudio,founder,crafty app,bot app,scrapper,neonphunk,x64bit,glitchedart,wow design,planckgames,dns tools,pilotprime,coursecenter academy,automation,nft artist" />
	<meta name="author" content="Yash Gohel" />

	<!--Favicon-->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">

	<!--Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Hind:400,500,300,600'
		rel='stylesheet' type='text/css'>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" defer></script>
    <script>
      window.OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "7fc05182-2c54-4544-88be-50429bfeca36",
          safari_web_id: "web.onesignal.auto.41aef4b6-51a4-4778-92bc-f3aa3e26acde",
          notifyButton: {
            enable: true,
          },
        });
      });
    </script>
    <script data-host="https://analytics.crushcode.in" data-dnt="false" src="https://analytics.crushcode.in/js/script.js" id="ZwSg9rf6GA" async defer></script>
</head>

<body id="body" data-ng-app="contactApp">

	<!--Fixed Bg Image-->
	<div class="fixed-bg"></div>
	<div class="fixed-bg-overlay"></div>
	<!--/Fixed Bg Image-->

	<!--Preloader-->
	<div id="pre_load" class="preloader-it">
		<div id="la_anim" class="la-anim-1"></div>
	</div>
	<!--/Preloader-->

	<!--Container-->
	<div class="container-fluid">
		<div class="row">
			<div id="vertical_nav_wrap" class="col-lg-4 col-xs-12 pad-zero vertical-nav-wrap">
				<!--Navigation-->
				<nav class="navbar navbar-default vertical-nav" role="navigation">
					<div class="navbar-header">
						<button type="button" class="btn btn-default navbar-toggle" data-toggle="collapse"
							data-target="#navbar_collapse">
							<span class="mask"></span>
							<span class="btn-label">
								<span class="pe-7s-menu"></span>
							</span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="navbar_collapse">
						<ul class="nav navbar-nav">
							<li><a data-scroll href="#body"></a><span>about</span></li>
							<li><a data-scroll href="#services_sec"></a><span>services</span></li>
							<li><a data-scroll href="#skill_sec"></a><span>skills</span></li>
							<li><a data-scroll href="#work_sec"></a><span>work</span></li>
							<li><a data-scroll href="#edu_sec"></a><span>education</span></li>
							<li><a data-scroll href="#exp_sec"></a><span>experience</span></li>
							<li><a data-scroll href="#cer_sec"></a><span>Licenses & certifications</span></li>
							<li><a data-scroll href="#games_sec"></a><span>Games</span></li>
							<li><a data-scroll href="#client_sec"></a><span>clients</span></li>
							<!-- <li><a data-scroll href="#achivement_sec"></a><span>achivements</span></li> -->
							<li><a data-scroll href="#contact_sec"></a><span>contact</span></li>
						</ul>
					</div>
				</nav>
				<!--/Navigation-->

			</div>
			<div class="col-lg-8 col-xs-12 pad-zero">

				<!--Header-->
				<header>
					<div class="header-wrap col-lg-10 center-div">
						<div class="float-left name">
							<a data-scroll href="#body">
								<span>
									<i style="color: #85d6d0">Y</i>ASH GO<i style="color: #85d6d0">H</i>EL <b style="color: #85d6d0">:)</b>
								</span>
							</a>
						</div>
						<div class="float-right social-download-wrap">
							<a href="https://yashgohel.com/resume_yash_a_gohel.pdf" target="_blanck" class="btn btn-default float-left" download>
								<span class="mask"></span>
								<span class="btn-label">
									<b>download resume</b>
									<span class="icon pe-7s-download"></span>
								</span>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</header>
				<!--/Header-->

				<!--Main Content-->
				<div id="main_content" class="glass content-block margin-top-150 margin-top-sm-70 margin-top-xs-50">

					<!--Introduction Sec-->
					<section id="intro_content_sec"
						class="col-lg-10 col-md-11 col-sm-11 center-div intro-content-wrap sec-pad">
						<div class="person-img margin-bottom-xs"></div>
						<h1>
							Hey!<span id="typed"></span>
						</h1>
						<h6>
							about
						</h6>
						<p class="pad-bottom-35 wow fadeInUp" data-wow-duration=".6s">
							Full-stack developer and having some skills in Graphics Design.
						</p>
						<p class="wow fadeInUp" data-wow-duration=".4s">
							I am a complete social animal. Find my work on <a class="goto-social" href="https://instagram.com/ygohel18/"
								target="_blank">Instagram</a> & <a href="https://github.com/ygohel18/" class="goto-social"
								target="_blank">Github</a>. Experience my design skills on <a href="https://dribbble.com/ygohel18/"
								class="goto-social" target="_blank">Dribbble</a> & <a class="goto-social" href="https://behance.com/ygohel18/"
								target="_blank">Behance</a>.
						</p>
						<!-- <div class="per-signature margin-top-sm wow fadeInUp" data-wow-duration=".4s">
							<img class="img-responsive" src="img/signature.png" alt="signature" />
						</div> -->
					</section>
					<!--/Introduction Sec-->

					<hr class="separater-hr" />

					<!--WhatWeDo Sec-->
					<section id="services_sec"
						class="col-lg-10 col-md-11 col-sm-11 center-div services-icon-wrap  sec-pad-top sec-pad-bottom-xs">
						<h6>what i do</h6>
						<div class="row">
							<div class="col-sm-3 col-xs-6 margin-bottom-sm icon-wrap wow fadeInLeft"
								data-wow-duration=".4s" data-wow-delay="0s">
								<span class="icon pe-7s-graph3"></span>
								<span class="key-fact">
									ANALYSIS
								</span>
							</div>
							<div class="col-sm-3 col-xs-6 margin-bottom-sm icon-wrap wow fadeInLeft"
								data-wow-duration=".4s" data-wow-delay=".1s">
								<span class="icon pe-7s-browser"></span>
								<span class="key-fact">
									PROGRAMMING
								</span>
							</div>
							<div class="col-sm-3 col-xs-6 margin-bottom-sm icon-wrap wow fadeInLeft"
								data-wow-duration=".4s" data-wow-delay=".2s">
								<span class=" icon pe-7s-tools"></span>
								<span class="key-fact">
									TESTING
								</span>
							</div>
							<div class="col-sm-3 col-xs-6 margin-bottom-sm icon-wrap wow fadeInLeft"
								data-wow-duration=".4s" data-wow-delay=".3s">
								<span class="icon pe-7s-note2"></span>
								<span class="key-fact">
									DOCUMENTATION
								</span>
							</div>
						</div>
					</section>
					<!--/WhatWeDo Sec-->

					<hr class="separater-hr" />

					<!--Skills Sec-->-
					<section id="skill_sec"
						class="col-lg-10 col-md-11 col-sm-11 center-div skills-wrap  sec-pad-top sec-pad-bottom-xs">
						<h6>technical skills</h6>
						<p class="wow fadeInUp" data-wow-duration=".4s">As a reluctant developer & designer, I fled from a
							traditional path and explored my creativity, trough trying my hands on various techniques
							and software. Software is more than just a tool, and I try to dig deep into it. Today, I
							knack for critical thinking, empathy and creativity to create viable and impactful solutions
							using these technologies.</p>
						<div class="row margin-top-40">
							<div class="col-sm-5 margin-bottom-sm">
								<span class="progress-cat">ANDROID</span>
								<div class="progress-bar-graph">
									<div class="progress-bar-wrap">
										<div class="bar-wrap">
											<span data-width="90">
												<strong><i>90</i>%</strong>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-offset-1 col-sm-5 margin-bottom-sm">
								<span class="progress-cat">UI/UX Design</span>
								<div class="progress-bar-graph">
									<div class="progress-bar-wrap">
										<div class="bar-wrap">
											<span data-width="80">
												<strong><i>80</i>%</strong>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-5 margin-bottom-sm">
								<span class="progress-cat">NFT</span>
								<div class="progress-bar-graph">
									<div class="progress-bar-wrap">
										<div class="bar-wrap">
											<span data-width="40">
												<strong><i>40</i>%</strong>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-offset-1 col-sm-5 margin-bottom-sm">
								<span class="progress-cat">Backend Development</span>
								<div class="progress-bar-graph">
									<div class="progress-bar-wrap">
										<div class="bar-wrap">
											<span data-width="80">
												<strong><i>80</i>%</strong>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-5 margin-bottom-sm">
								<span class="progress-cat">Brand Identity Design</span>
								<div class="progress-bar-graph">
									<div class="progress-bar-wrap">
										<div class="bar-wrap">
											<span data-width="99">
												<strong><i>99</i>%</strong>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-offset-1 col-sm-5 margin-bottom-sm">
								<span class="progress-cat">Content Management</span>
								<div class="progress-bar-graph">
									<div class="progress-bar-wrap">
										<div class="bar-wrap">
											<div class="bar-wrap">
												<span data-width="70">
													<strong><i>70</i>%</strong>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</section>
					<!--/Skills Sec-->

					<hr class="separater-hr" />

					<!--Work Sec-->
					<section id="work_sec" class="col-lg-10 col-md-11 col-sm-11 center-div work-wrap  sec-pad">
						<h6>work</h6>
						<div class="portfolio-wrap project-gallery padding-sec-lg">
							<ul id="portfolio" class="portf auto-construct  project-gallery" data-col="2">
							    <li class="item" data-html="img/mock6.jpg"
									data-sub-html="<h6>PlanckStudio</h6><p></p>">
									<a href="">
										<img class="img-responsive" src="img/mock6.jpg" alt="Image description" />
										<span class="hover-cap">PlanckStudio</span>
									</a>
								</li>
								<li class="item" data-src="img/mock1.jpg"
									data-sub-html="<h6>DNS Tools</h6><p></p>">
									<a href="">
										<img class="img-responsive" src="img/mock1.jpg" alt="Image description" />
										<span class="hover-cap">DNS Tools</span>
									</a>
								</li>
								<li class="item" data-src="img/mock2.jpg"
									data-sub-html="<h6>CourseCenter Academy</h6><p>Online learning plateform</p>">
									<a href="">
										<img class="img-responsive" src="img/mock2.jpg" alt="Image description" />
										<span class="hover-cap">CourseCenter Academy</span>
									</a>
								</li>
								<li class="item" data-src="img/mock4.jpg"
									data-sub-html="<h6>Crafty</h6><p>Festival post creator</p>">
									<a href="">
										<img class="img-responsive" src="img/mock4.jpg" alt="Image description" />
										<span class="hover-cap">Crafty</span>
									</a>
								</li>
								<li class="item" data-src="img/mock3.jpg"
									data-sub-html="<h6>PlanckGames</h6><p>Collection of HTML5 games</p>">
									<a href="">
										<img class="img-responsive" src="img/mock3.jpg" alt="Image description" />
										<span class="hover-cap">PlanckGames</span>
									</a>
								</li>
								<li class="item" data-src="img/mock5.jpg"
									data-sub-html="<h6>PilotPrime</h6><p>Online learning plateform</p>">
									<a href="">
										<img class="img-responsive" src="img/mock5.jpg" alt="Image description" />
										<span class="hover-cap">PilotPrime</span>
									</a>
								</li>
							</ul>
							<!-- Hidden video div -->
							<div style="display:none;" id="video1">
								<video class="lg-video-object lg-html5 video-js vjs-default-skin" controls
									preload="none">
									<source src="videos/video1.mp4" type="video/webm">
									<source src="videos/video1.webm" type="video/webm">
									Your browser does not support HTML5 video.
								</video>
							</div>
						</div>
					</section>
					<!--/Work Sec-->

					<hr class="separater-hr" />

					<!--Qualfication Sec-->
					<section id="edu_sec" class="col-lg-10 col-md-11 col-sm-11 center-div education-wrap  sec-pad">
						<h6>education</h6>
						<p class="wow fadeInUp" data-wow-duration=".4s">
							I spent 3 years learning Web Design & Development, got my Diploma in Computer. I think one should never stop learning
							and go through a process of acquiring knowledge.
						</p>
						<div class="qualfication-wrap">
							<div class="qualfication first-row wow fadeInUp" data-wow-duration=".4s">
								<div class="col-sm-2">
									<span class="row-count"><span>1</span></span>
								</div>
								<div class="col-sm-2">
									<span class="yr-pers vertical-align-pad">2021-2024</span>
								</div>
								<div class="col-sm-5">
									<span class="insti vertical-align-pad">OM Engineering Collage, Chokli Junagadh</span>
								</div>
								<div class="col-sm-3">
									<span class="design vertical-align-pad">
										Bachelor Of Engineering (computer Science)
									</span>
								</div>
							</div>
							<div class="qualfication wow fadeInUp" data-wow-duration=".4s">
								<div class="col-sm-2">
									<span class="row-count"><span>2</span></span>
								</div>
								<div class="col-sm-2">
									<span class="yr-pers vertical-align-pad">2016-2019</span>
								</div>
								<div class="col-sm-5">
									<span class="insti vertical-align-pad">A.V. Parekh Technical Institute, Rajkot</span>
								</div>
								<div class="col-sm-3">
									<span class="design vertical-align-pad">
										Diploma In Computer Science
									</span>
								</div>
							</div>
							<div class="qualfication wow fadeInUp" data-wow-duration=".4s">
								<div class="col-sm-2">
									<span class="row-count"><span>3</span></span>
								</div>
								<div class="col-sm-2">
									<span class="yr-pers vertical-align-pad">2015-2016</span>
								</div>
								<div class="col-sm-5">
									<span class="insti vertical-align-pad">Shree Sardar Vallbhai Patel High School, Jamjodhpur</span>
								</div>
								<div class="col-sm-3">
									<span class="design vertical-align-pad">
										SSC
									</span>
								</div>
							</div>
						</div>
					</section>
					<!--/Qualfication Sec-->

					<hr class="separater-hr" />

					<!--Experience Sec-->
					<section id="exp_sec" class="col-lg-10 col-md-11 col-sm-11 center-div experience-wrap  sec-pad">
						<h6>experience</h6>
						<div class="exp-timeline-wrap">
							<div class="row exp-timeline timeline-active">
								<div class="col-xs-2">
									<div class="timeline-st"></div>
								</div>
								<div class="col-xs-10 exp-content-wrap">
									<div class="row">
										<div class="wow fadeInRight" data-wow-duration=".4s" data-wow-delay="0s">
											<div class="col-sm-3 duration"><span>Dec 2021 - Jan 2023</span></div>
											<div class="col-sm-9">
												<span class="job-desn">Internship</span>
												<span class="job-loc">HostingSpell, Rajkot
												</span>
												<p class="job-summary p-small">In this emerging company in the field of the web hosting 
												i learned a lots of about server management, working with cPanel and website development with using PHP and MySql
			
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row exp-timeline">
								<div class="col-xs-2">
									<div class="timeline-st"></div>
								</div>
								<div class="col-xs-10 exp-content-wrap">
									<div class="row">
										<div class="wow fadeInRight" data-wow-duration=".4s" data-wow-delay="0.2s">
											<div class="col-sm-3 duration"><span>Feb 2021 - Present</span></div>
											<div class="col-sm-9">
												<span class="job-desn">Founder</span>
												<span class="job-loc">Crafty
												</span>
												<p class="job-summary p-small">Crafty is a android app that has predesigned set of 
												graphics design for festival post and the other social media marketing post with combining all the branding for the small business.</p>
											</div>
										</div>
									</div>
								</div>
							</div>

	
						</div>
					</section>
					<!--/Experience Sec-->

					<hr class="separater-hr" />
					
					<!--Certificate Sec-->
					<section id="cer_sec" class="col-lg-10 col-md-11 col-sm-11 center-div experience-wrap  sec-pad">
						<h6>Licenses & certifications</h6>
						<div class="exp-timeline-wrap">
							<div class="row exp-timeline">
								<div class="col-xs-2">
									<div class="timeline-st"></div>
								</div>
								<div class="col-xs-10 exp-content-wrap">
									<div class="row">
										<div class="wow fadeInRight" data-wow-duration=".4s" data-wow-delay="0s">
											<div class="col-sm-3 duration"><span>Aug 2023 - Aug 2024</span></div>
											<div class="col-sm-9">
												<span class="job-desn"><span style="text-transform: lowercase;">c</span>Panel</span>
												<span class="job-loc"><a href="https://university.cpanel.net/certificate/b92b-ee2a-f7d8-8fbf" style="color: white;"  target="_blanck"><span style="text-transform:lowercase;">c</span>Panel Professional Certification Exam (CPP)</a>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row exp-timeline">
								<div class="col-xs-2">
									<div class="timeline-st"></div>
								</div>
								<div class="col-xs-10 exp-content-wrap">
									<div class="row">
										<div class="wow fadeInRight" data-wow-duration=".4s" data-wow-delay="0s">
											<div class="col-sm-3 duration"><span>Jun 2022</span></div>
											<div class="col-sm-9">
												<span class="job-desn">HackerRank</span>
												<span class="job-loc"><a href="https://www.hackerrank.com/certificates/4d5393c5b1db" style="color: white;" target="_blanck">Java (Basic) Certificate</a>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--/Certificate Sec-->
					
					<hr class="separater-hr" />

                    <!--Gaming Sec-->
					<section id="games_sec" class="col-lg-10 col-md-11 col-sm-11 center-div experience-wrap  sec-pad">
						<h6>Games</h6>
						<div class="">
							<div class="row">
								<div class="col-xs-10 exp-content-wrap">
									<div class="row">
										<div class="wow fadeInRight" data-wow-duration=".4s" data-wow-delay="0s">
											<div class="col-sm-3 duration"><span>Angrybirds</span></div>
											<div class="col-sm-9">
												<span class="job-desn">Games</span>
												<span class="job-loc">All Time Favourite :)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-xs-10 exp-content-wrap">
									<div class="row">
										<div class="wow fadeInRight" data-wow-duration=".4s" data-wow-delay="0s">
											<div class="col-sm-3 duration"><span>5142366034</span></div>
											<div class="col-sm-9">
												<span class="job-desn">BGMI</span>
												<span class="job-loc">Khopri Tor Saale Ka</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</section>
					<!--/Gaming Sec-->
					
					<hr class="separater-hr" />


					<!--Client Sec-->
					<section id="client_sec"
						class="col-lg-10 col-md-11 col-sm-11 center-div client-wrap  sec-pad wow bounceIn"
						data-wow-duration=".4s">
						<h6>clients</h6>
						<div class="client-carousel">
							<img src="img/client1.png" alt="client">
							<img src="img/client2.png" alt="client">
							<img src="img/client3.png" alt="client">
						</div>
					</section>
					<!--/Client Sec-->

					<hr class="separater-hr" />

					<hr class="separater-hr" />

					<!--Contact Sec-->
					<section id="contact_sec" class="col-lg-10 col-md-11 col-sm-11 center-div contact-wrap sec-pad">
						<h6>contact</h6>
						<div data-ng-controller="ContactController" class="align-center wow fadeInUp"
							data-wow-duration=".4s">
							<h3>Hello <span data-ng-bind="formData.inputName||'friend'"></span>, I'd love to hear from
								you.</h3>
							<div>
								<form data-ng-submit="submit(contactform, $event)" name="contactform" method="post"
									class="row form-horizontal" role="form">
									<div class="form-group input--hoshi col-sm-6"
										data-ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
										<div class="input-wrap">
											<input autocomplete="off" data-ng-model="formData.inputName" type="text"
												class="form-control input__field input input__field--hoshi"
												id="inputName" name="inputName" placeholder="Name" required>
											<label
												class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1"></label>
										</div>
									</div>
									<div class="form-group  input--hoshi col-sm-6"
										data-ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
										<div class="input-wrap">
											<input autocomplete="off" data-ng-model="formData.inputEmail" type="email"
												class="form-control input input__field input__field--hoshi"
												placeholder="Email" id="inputEmail" name="inputEmail" required>
											<label
												class="input__label input__label--hoshi input__label--hoshi-color-1"></label>
										</div>
									</div>
									<div class="form-group  input--hoshi col-sm-12"
										data-ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
										<div class="input-wrap">
											<textarea data-ng-model="formData.inputMessage"
												class="form-control input input__field input__field--hoshi" rows="4"
												id="inputMessage" name="inputMessage" placeholder="message"
												required></textarea>
											<label
												class="input__label input__label--hoshi input__label--hoshi-color-1"></label>
										</div>
									</div>
									<div class="form-group col-sm-12">
										<div class="align-center">
											<button type="submit" class="btn btn-default"
												data-ng-disabled="submitButtonDisabled">
												<span class="mask"></span>
												<span>send message</span>
											</button>
										</div>
									</div>
								</form>
								<p data-ng-class="result">{{ resultMessage }}</p>
							</div>
						</div>
						<div class="email-direct">
							<p class="wow fadeInRight" data-wow-duration=".4s">Or simply email me at <a
									href="mailto:me@yashgohel.com">me@yashgohel.com</a></p>
						</div>
					</section>
					<!--Contact Sec-->

					<hr class="separater-hr" />

					<!--Footer-->
					<footer class="col-lg-10 col-md-11 col-sm-11 center-div contact-wrap  sec-pad">
						<div class="row">
							<div class="col-sm-6 available-wrap">
								<span class="available-pointer"></span>
								<span class="available-tag">Available for Freelance Projects.</span>
							</div>
							<div class="col-sm-6">
								<div class="social-icons-wrap float-right">

									<!--Social Icons-->
									<ul class="social-icons float-right">
										<li>
											<a href="https://facebook.com/ygohel18/" target="_blanck" class="social-icon">
												<span class="fa" data-hover="&#xf09a;">&#xf09a;</span>
											</a>
										</li>
										<li>
											<a href="https://twitter.com/ygohel18/" target="_blanck" class="social-icon">
												<span class="fa" data-hover="&#xf099;">&#xf099;</span>
											</a>
										</li>
										<li>
											<a href="https://linkedin.com/ygohel18/" target="_blanck" class="social-icon">
												<span class="fa" data-hover="&#xf0e1;">&#xf0e1;</span>
											</a>
										</li>
										<li>
											<a href="https://instagram.com/ygohel18/" target="_blanck" class="social-icon">
												<span class="fa" data-hover="&#xf16d;">&#xf16d;</span>
											</a>
										</li>
										<li>
											<a href="https://dribbble.com/ygohel18/" target="_blanck" class="social-icon">
												<span class="fa" data-hover="&#xf17d;">&#xf17d;</span>
											</a>
										</li>
										<li>
											<a href="https://github.com/ygohel18/" target="_blanck" class="social-icon">
												<span class="fa" data-hover="&#xf09b;">&#xf09b;</span>
											</a>
										</li>
									</ul>
									<!--/Social Icons-->

								</div>
								<div class="goto-top text-right float-right">
									<a data-scroll href="#body">
										<span data-hover="top">
											top
										</span>
									</a>
								</div>
								<div class="copywrite-wrap text-right float-right">
									<p class="copywrite">Updated <b>Aug,
											2023.</b></p>
								</div>
							</div>
						</div>
					</footer>
					<!--/Footer-->

				</div>
				<!--/Main Content-->

			</div>
		</div>
	</div>
	<!-- /Container -->

	<!-- Scripts -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controllers.js"></script>
	<script src="js/jquery.placeholder.js"></script>
	<script src="js/smooth-scroll.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/jQuery.appear.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/typed.js"></script>
	<script src="js/lightgallery-all.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/froogaloop2.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/init.js"></script>
	<script>
	    console.log("Hey :) \nFinally you are here 🙃\n💞💞")
	</script>
</body>

</html>