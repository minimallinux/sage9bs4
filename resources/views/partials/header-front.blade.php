<header class="banner">
<section class="cover-1 text-left">	
   <nav class="navbar navbar-toggleable-md navbar-expand-lg navbar-dark navbar-custom" role="navigation">
	<div class="container">
		 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
		 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
		 aria-label="Toggle navigation">
		 <span class="navbar-toggler-icon"></span>
		 </button>
		<a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
		<div class="collapse navbar-collapse pull-xs-left justify-content-end" id="navbarSupportedContent">
		 @if (has_nav_menu('primary_navigation'))
		 {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav nav pull-left']) !!}
		 @endif
		 </div>
	 </div>
 </nav>
  <div class="cover-container">
				<div class="cover-inner container">
						<div class="row justify-center">
							<div class="col-lg-5 mt-5 mb-5 text-center text-lg-left">
								<h1 class="jumbotron-heading">Custom Built Mobile Web Technology</h1>
								<p class="lead">Well designed multiuser mobile applications and web properties for small businesses using the latest high tech solutions and applications.</p>
								<p>
								<a href="#" class="btn btn-secondary btn-lg mb-2 mr-2 ml-2"><i class="fa fa-phone"> Get A Call</i></a>
						<a href="#" class="btn btn-info btn-lg mb-2 ml-2 ml-2"><i class="fa fa-question-circle-o"> Learn More</i></a>
							</p>
						</div>
						<div class="col-lg-5 offset-lg-2 mt-5 mb-5 text-center">
							<img class="img-fluid mt-5 mb-5" src="@asset('images/phone.png')">
						</div>
					</div>
				</div>
			</div>
		</section>
</header>
 
    
