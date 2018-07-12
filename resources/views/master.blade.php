<!DOCTYPE HTML>
<html>
	<head>
		<title>{{ config('app.title') }}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
        <meta property="og:image" content="/images/logo.png">
        <meta property="og:title" content="{{ config('app.name') }}">
        <meta property="og:description" 
        	content="No state. No boundaries. Achive anything by being in between. No form. No end. Infinite Possibilities.">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:type" content="website">

        <meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		
		@yield('content')

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.dropotron.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>
			
			<script src="{{ mix('/js/manifest.js') }}"></script>
	        <script src="{{ mix('/js/vendor.js') }}"></script>
	        <script src="{{ mix('/js/app.js') }}"></script>

	</body>
</html>