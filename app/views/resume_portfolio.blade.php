@extends('layouts.master')

@section('content')
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <!-- Fonts from Font Awsome -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
         <!-- Magnific popup -->
        <link rel="stylesheet" href="/css/magnific-popup.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="/css/main.css">
        <!-- Color styles -->
        <link rel="stylesheet" href="/css/colors/blue.css">
        <!-- Feature detection -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

  <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" id="main-menu">
            <li><a href="#page-welcome">Home</a></li>
            <li><a href="#page-profile">Profile</a></li>
            <li><a href="#page-skills">Skills</a></li>
            <li><a href="#page-education">Education</a></li>
            <li><a href="#page-experience">Experience</a></li>
            <li><a href="#page-portfolio">Portfolio</a></li>
            <li><a href="#page-contact">Contact</a></li>
            <li><a href="/posts">Blog</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- welcome begins -->
    <section id="page-welcome" class="page-welcome">
      <div>
          <ul class="slider-controls">
              <li><a id="vegas-next" class="next" href="#"></a></li>
              <li><a id="vegas-prev" class="prev" href="#"></a></li>
          </ul>
        </div>
        <div class="container">
            <div class="row">
                <header class="centered">
                    <h1>Andrew Samaniego</h1>
                    <p>Statement of my Title</p>
                </header>
                <div class="social-icons">
                        <a href="https://www.linkedin.com/in/andrewxsamaniego/" class="btn btn-round btn-clear btn-linkedin"><i class="fa fa-linkedin-square"></i></a>  
                        <a href="https://github.com/Asamanie?tab=repositories" class="btn btn-round btn-clear btn-github"><i class="fa fa-github"></i></a>
                        <a href="https://www.facebook.com/andrew.x.samaniego" class="btn btn-round btn-clear btn-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://dribbble.com/Andrew_Sam" class="btn btn-round btn-clear btn-dribbble"><i class="fa fa-dribbble"></i></a>
                        <a href="https://twitter.com/andrewXsam" class="btn btn-round btn-clear btn-twitter"><i class="fa fa-twitter"></i></a>
                </div>
                <a href="#page-contact" class="btn btn-default hire-me">Hire Me</a>
            </div>
        </div>
    </section><!-- welcome ends -->
    <!-- profile begins -->
    <section id="page-profile" class="page-profile">
      <div class="container">
                <header class="section-header">
                    <h2 class="section-title">Personal Profile</h2>
                    <div class="spacer"></div>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p>
                </header>
            <div class="row">
              <div class="col-md-3">
                 <div class="profile" style="overflow: hidden;"><img src="img/andrew_s.jpg" alt="profile"/></div> 
              </div>
               <div class="col-md-9">
                <p>Andrew is a innovative thinker, that craves a challenge and who is not afraid to work outside his comfort zone. I'm motivated team player who consistently aims to push revenue expectations and exceed goals. I possesses strong communication skills and the acumen to make sound business decisions. I'm somebody who can build easy rapport with clients, identify their exact needs and then present them with a wide range of services and solutions. Pragmatic and results orientated, with focus on the bottom line. I have a proven track record of achieving and exceeding the standards of performance set out for for me.</p>
                <!-- <p>Lorem ipsum dolor sit amet, vel no saepe invenire, magna similique vis no. Eam tollit gloriatur ad, quaeque euismod tractatos usu eu. Apeirian detraxit consequat vis ne, natum brute quidam nec no. Sit in accusamus aliquando, an his aeque iusto delicata.</p>
                <p>Facer libris qui ea, mel ludus persius suscipiantur te. Eos soleat inimicus liberavisse at. Ex sit mazim soluta lobortis, ut nec bonorum splendide, mel tation erroribus principes eu. Cum ne vero albucius disputando. Et vidit movet sea. Falli appetere ut vix, eu offendit sapientem est. Postulant delicatissimi ex mea, ne modo nostrud salutandi usu, cu ignota dissentiunt his.</p>
                <p>No wisi hendrerit per, ius ei stet oportere scribentur. Nam ex quando petentium, ei sea sonet timeam. Ex erat docendi urbanitas vix, equidem appetere vix an, mei legere offendit ponderum te. In per vidit dicta democritum, ut fuisset voluptua repudiandae eum. Cum at eius reformidans. In vocent dolores eos, ea vel idque soluta similique.</p>
                 <p>No wisi hendrerit per, ius ei stet oportere scribentur. Nam ex quando petentium, ei sea sonet timeam. Ex erat docendi urbanitas vix, equidem appetere vix an, mei legere offendit ponderum te. In per vidit dicta democritum, ut fuisset voluptua repudiandae eum.</p> -->
              </div>
            </div>
      </div> 
    </section><!-- profile ends -->
    <!-- skills begins -->
     <section id="page-skills" class="page-skills">
       <div class="container">
           
                 <header class="section-header">
                    <h2 class="section-title"><span>Skills</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p>
                 </header>
            <div class="row">
              <div class="col-md-2">
               <span class="chart" data-percent="75">
                      <span class="percent"></span>
                      <h3>PHP</h3>
               </span>
            </div>
               <div class="col-md-2 ">
               <span class="chart" data-percent="95">
                      <span class="percent"></span>
                      <h3>HTML</h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="85">
                      <span class="percent"></span>
                       <h3>CSS</h3>
               </span>
            </div>
               <div class="col-md-2">
               <span class="chart" data-percent="70">
                      <span class="percent"></span>
                      <h3>JS</h3>
               </span>
            </div>
               <!-- <div class="col-md-2">
               <span class="chart" data-percent="65">
                      <span class="percent"></span>
                      <h3>jQuery</h3>
               </span>
            </div> -->
               <div class="col-md-2">
               <span class="chart" data-percent="95">
                      <span class="percent"></span>
                       <h3>Management</h3>
               </span>
            </div>
              <div class="col-md-2">
              <span class="chart" data-percent="95">
                    <span class="percent"></span>
                      <h3>Operations</h3>
                </span>  
          </div>
        </div>
    </section><!-- skills ends -->
    <!-- education begins -->
     <section id="page-education" class="page-education">
       <div class="container">
                <header class="section-header">
                    <h2 class="section-title"><span>Education</span></h2>
                     <div class="spacer"></div>
                <p class="section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p>
                </header>
                <div class="row">
                 <div class="col-md-6">
                  <article class="education">
                    <header>
                      <h3>Texas Tech University</h3>
                      <p>Bachelor of Arts, Communications - <strong>Graduated:</strong> 2005</p>
                    </header>
                      <p>I'm a grad and so on.......................</p>
                  </article>
                </div>
                <div class="col-md-6">
                <article class="education">
                  <header>
                    <h3>Codeup</h3>
                    <p>Baddie of Codeup BC  - <strong>Graduated:</strong> 2014</p>
                  </header>
                    <p>Codeup is an immersive programming bootcamp that teaches non-technical people the skills to become a web developer. We teach the fundamentals of programming and web development through HTML, CSS, PHP, MySQL, JavaScript, and several frameworks, such as Laravel and jQuery, all in 12 weeks</p>
                </article>
                </div>
            </div>
       </div>
    </section><!-- education ends -->
    <!-- experience begins -->
     <section id="page-experience" class="page-experience">
       <div class="container">
                <header class="section-header">
                    <h2 class="section-title"><span>Experience</span></h2>
                     <div class="spacer"></div>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p>
                </header>
                <div class="row">
                 <div class="col-md-4">
                  <article class="experience">
                    <header>
                      <h3>Codeup</h3>
                      <p>Baddie / San Antonio, TX / 2014 - Current</p>
                    </header>
                      <p>Write a little paragraph of what I've learned and experienced at codeup for future career oppertunities.</p>
                  </article>
                </div>
                  <div class="col-md-4">
                  <article class="experience">
                    <header>
                      <h3>Mobile Docotrs USA</h3>
                       <p>Branch Manager / San Antonio, TX / 2012 - 2013</p>
                    </header>
                      <p>Directed the launch, business development, staff recruiting and hiring, purchasing and build out of a new medical practice. Managed a team of 18 personnel including, Doctors, Nurse Practitioners, Podiatrists and office support staff to serve the clinical needs of homebound patients in San Antonio and surrounding areas. This included staff training and coaching, team building and personnel performance evaluations. </p>
                  </article>
                </div>
                <div class="col-md-4">
                <article class="experience">
                  <header>
                    <h3>Enterprise Rent-A-Car</h3>
                     <p>Branch Manager / San Antonio, TX / 2005 - 2012</p>
                  </header>
                    <p>Managed the daily operation and ..................</p>
                </article>
                </div>
            </div>
        </div>
    </section><!-- experience ends -->
    <!-- portfolio begins -->
     <section id="page-portfolio" class="page-portfolio">
          <div class="container">
            <div class="row">
                <header class="section-header">
                    <h2 class="section-title"><span>Portfolio</span></h2>
                      <div class="spacer"></div>
                    <p class="section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p> 
                </header>
           
                <div id="grid-controls-wrapper">
                <ul class="nav nav-pills center-pills grid-controls">
                  <li class="active filter"><a href="javascript:void(0)" data-filter="*">All</a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".branding">Whack a mole</a></li>   
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".design">More stuff</a></li>            
                  <li class="filter"><a href="javascript:void(0)"  data-filter=".photography">Project</a></li>
                  <li class="filter" ><a href="javascript:void(0)" data-filter=".web">Websites</a></li>
                </ul>
              </div>
            
                <div>
                  <ul id="grid" class="grid-wrapper">
                      <li class="mix web" >
                       <a href="img/portfolio/large/01.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/01.png"  alt="" >
                      </a> </li>
                      <li class="mix design">
                        <a href="img/portfolio/large/02.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/02.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/03.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/03.png" alt="" ></a></li>
                      <li class="mix web">
                        <a href="img/portfolio/large/04.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/04.png" alt="" ></a></li>
                      <li class="mix branding">
                        <a href="img/portfolio/large/05.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/05.png" alt="" ></a></li>
                      <!-- <li class="mix design">
                        <a href="img/portfolio/large/06.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/06.png" alt="" ></a></li>
                      <li class="mix photography">
                        <a href="img/portfolio/large/07.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/07.png" alt="" ></a></li>
                      <li class="mix photography">
                        <a href="img/portfolio/large/08.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/08.png" alt="" ></a></li>
                      <li class="mix photography">
                        <a href="img/portfolio/large/09.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/09.png" alt="" ></a></li>
                      <li class="mix web">
                        <a href="img/portfolio/large/10.jpg"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/10.jpg" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/11.jpg"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/11.jpg" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/12.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/12.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/13.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/13.png" alt="" ></a></li>
                      <li class="mix design">
                        <a href="img/portfolio/large/14.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/14.png" alt="" ></a></li>
                         <li class="mix branding">
                        <a href="img/portfolio/large/15.png"><div class="overlay"><i class="fa fa-search"></i></div><img src="img/portfolio/small/15.png" alt="" ></a></li> -->
                  </ul>
                </div>
            </div>
        </div>
    </section><!-- portfolio ends -->
    <!-- contact begins -->
     <section id="page-contact" class="page-contact">
          <div class="container">
              <header class="section-header">
                  <h2 class="section-title"><span>Contact</span></h2>
                    <div class="spacer"></div>
                       <!-- <p class="section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p> -->
              </header>
        <div class="row">
          <div class="col-sm-5 contact-info">
            <h3>Contact Info</h3>
            <p><i class="fa fa-map-marker"></i> 12506 Paloma Trail, San Antonio, TX  78249 </p>
            <p><i class="fa fa-phone"></i> (210) 213-5511(C) | (210) 509-2255 (H)</p>
            <p><i class="fa fa-envelope-o"></i> andrew.x.samaniego@gmail.com</p>
          </div>
          
          <div class="col-sm-7">
          <h3>Get in Touch</h3>
              <form  class="form-horizontal" id="contact-form">
        <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
                <input type="text" name="name" id="name" placeholder="Your name" class="form-control input-lg ">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Email Address</label>
            <div class="controls">
                <input type="text" name="email" id="email" placeholder="Your email address" class="form-control input-lg">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="message">Message</label>
            <div class="controls">
                <textarea name="message" id="message" rows="8" class="form-control input-lg"></textarea>
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-default btn-lg btn-block">Submit Message</button>
        </div>
    </form><!-- End contact-form -->
          </div>
        </div><!-- End row -->

        </div>
    </section> <!-- contact ends -->

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.easypiechart.min.js"></script>
<script src="js/jquery.vegas.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/main.js"></script>


@stop

