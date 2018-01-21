<header class="banner">
 <section class="cover-1 text-left">
      <nav class="navbar navbar-toggleable-md navbar-expand-lg navbar-dark navbar-custom">
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
							<div class="col-lg-12 mt-12 mb-12 text-center">
								