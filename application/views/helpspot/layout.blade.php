<!doctype html>
<head>
	<meta charset="utf-8">
	@if (isset($title))
	<title>{{$title}} :: {{Config::get('kudos.site_name')}}</title>
	@else
	<title>{{Config::get('kudos.site_name')}}</title>
	@endif

	<meta name="keywords" content="{{ isset($keywords) ? $keywords : '' }}">
	<meta name="keywords" content="{{ isset($description) ? $description : '' }}">

	<!-- Fonts -->
	<script type="text/javascript" src="http://use.typekit.com/ufy5khz.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- Kudos stylesheets -->
	<link rel="stylesheet" href="{{URL::to_asset(Config::get('kudos.theme').'/css/html5reset.css')}}">
	<link rel="stylesheet" href="{{URL::to_asset(Config::get('kudos.theme').'/css/kudos.css')}}">

	<!-- RSS -->
	<link rel="alternate" type="application/rss+xml" title="RSS" href="{{URL::to('/rss')}}">
</head>

<body>
	<header>
		<a href="{{URL::to()}}">{{Config::get('kudos.site_name')}}</a>
	</header>
	@yield('content')

	@yield('else')
	<footer>
		<p>
			<small>&copy; Copyright {{date('Y')}}. All Rights Reserved.</small>
			<small>Powered by <a href="https://github.com/ianlandsman/Kudos">Kudos</a></small>
		</p>
	</footer>

<!-- jQuery just in case -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

@if (Config::get('kudos.google_analytics_id'))
	<script>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '{{Config::get('kudos.google_analytics_id')}}']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
@endif

</body>
</html>