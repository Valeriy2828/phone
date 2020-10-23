<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, maximum-scale=1">
     <title>Contacts</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
	 <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/comment-reply.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.quicksand.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.tipsy.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.cycle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.anythingslider.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.eislideshow.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.easing.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.aw-showcase.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/layerslider.kreaturamedia.jquery-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/shortcodes.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.colorbox-min.js') }}"></script> <!-- nav -->
	<script type="text/javascript" src="{{ asset('js/jquery.tweetable.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/myscripts.js') }}"></script>
</head>
<body>
<div class="col-12">
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	@if(session('status'))
		<div class="alert alert-succes">
			{{ session('status') }}
		</div>
	@endif
</div>

  @yield('content')

<script type="text/javascript" src="{{ asset('js/jquery.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/contact.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mobilemenu.js') }}"></script>

</body>
</html>


