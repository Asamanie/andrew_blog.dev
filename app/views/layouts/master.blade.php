<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<title>Did they drop the ball???</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">	
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-24e6f8f4-521e-b4c8-ead-bcf48feb311a", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body>
<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/posts">Andrew X. Samaniego Blog</a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <ul class="nav navbar-nav">
      <li class=""><a href="/resume_portfolio">Resume & Portfolio</a></li>
    </ul>
    <form class="navbar-form navbar-right">
		{{ Form::open(array('action' =>  'PostsController@index', 'class' => 'form-inline', 'method' => 'GET')) }}

			{{ Form::text('search', null, array('placeholder' => 'Search Post', 'class' => 'form-control col-lg-4')) }}
			{{ Form::submit('Search', array('class' => 'btn btn-primary')) }}

		{{ Form::close() }}
    </form>
    @if (Auth::check())
    <form class="navbar-form navbar-center">

		{{ Form::open(array('action' =>  'PostsController@index', 'class' => 'form-inline', 'method' => 'GET')) }}

				{{link_to_action('PostsController@create', 'Create New Post', null, array('class' => 'btn btn-daner pull-right')) }}

		{{ Form::close() }}
    </form>
    <form>
 			<div class="navbar-form navabr">
				{{ link_to_action('HomeController@doLogout', 'Logout', null, array('class'=> 'btn btn-danger btn-xs pull-right')) }}
 			</div>	
		
	</form>
	@endif
  </div>
</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-md-9" >
				<section class="main-content">
					<h1>The basics of customer service</h1>
						<p>by Andrew Samaniego</a></p>
							@yield('content')
						</p>
					</h1>	
				</section>
					@if (Session::has('successMessage'))
					   	<div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
					@endif
					@if (Session::has('errorMessage'))
					   	<div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
					@endif			
				</section>
			</div>
			<div class="col-md-3">
				<div class "about-me-content">
					<img src="/img/sad_face.jpeg" width="273" height="275" class="mypic">
						<p class="about_blog_mybio">
							<h4>whats this blog all about?</h4>
								<p>
									cus·tom·er serv·ice<br>
									noun<br>
									the assistance and advice provided by a company to those people who buy or use its products or services.<br>
									<br>
									It happenes to each and everyone of us, bad customer service!  Now a days companies are spending hundreds of thousands of dollars to gain customers attention just to blow it all with horable customer service.
									Here is an some typical industry standard cost of customer acquisition values, the amount of money each company spends on average on marketing and advertising to acquire just one new customer:<br>
									<br>
									Priceline.com: $7<br>
									Sprint PCS: $315<br>
									Barnesandnoble.com: $10<br>
									TD Waterhouse: $175<br>
									<br>
									Several studies have been done to prove that it cost somewhere between 4 and 10 times more to gain a new customer than it does to keep and existing one.<br>  
									I have a 
								</p>	
									<h4>about me</h4>
								<p>
							Born and raised Texan who has has been a professional in 
						</p>
					</p>				
				</div>
			</div>
		</div>	
	</div>
</div>	
<div>
</div><span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_pinterest_large' displayText='Pinterest'></span>
<span class='st_email_large' displayText='Email'></span>
<div id="footer">
  <div class="container-fluid navbar navbar-inverse">
    <p class="text-muted" align="center">&copy; A. Samaniego Blog 2014. All rights reserved & don't forgot to tip your bar tenders!</p>
  </div>
</div>
</body>
</html>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-24e6f8f4-521e-b4c8-ead-bcf48feb311a", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
