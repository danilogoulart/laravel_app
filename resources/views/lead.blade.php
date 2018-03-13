<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>StoreDevs</title>

	<!-- web-fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<!-- font-awesome -->
	<link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Style CSS -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
	<section class="wraper">
		<header class="header">
			<h1>StoreDevs</h1>
			<h2>Em breve diversos scripts de sistema e templates de sites. Cadastre-se!</h2>
		</header>
		<!-- .header -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif

        @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
        @endif

		<section class="countdown-wrapper">
			<ul id="back-countdiown">
				<li>
					<span class="days">00</span>
					<p>dias</p>
				</li>
				<li>
					<span class="hours">00</span>
					<p>horas</p>
				</li>
				<li>
					<span class="minutes">00</span>
					<p>minutos</p>
				</li>
				<li>
					<span class="seconds">00</span>
					<p>segundos</p>
				</li>
			</ul>
			<!-- #back-countdiown -->
		</section>
		<!-- .countdown-wrapper -->

		<section class="subscribe">
			<form class="subscribe-form" role="form" method="post" action="{{url('/create/lead')}}">
				{{ csrf_field() }}	
				<input type="text" name="name_lead" class="form-control" id="exampleInputEmail1" placeholder="Nome"> </br></br>
				<input type="email" name="email_lead" class="form-control" id="exampleInputEmail2" placeholder="Endereço de e-mail">
				<input type="submit" value="Avise-me" class="form-control">
			</form>
		</section>
		<!-- .subscribe-->

		<footer class="footer">
			<!--
  			<section class="social-links">
  				<ul>
  					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
  					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
  					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
  					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
  					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
  				</ul>
  			</section> /.social-links -->

			<ul class="copyright">
				<li>&copy; StoreDevs</li>
			</ul>

		</footer>
	</section>


	<div class="fullscreen-bg">
		<video loop muted autoplay poster="{{ asset('img/videoframe.jpg') }}" class="fullscreen-bg__video">
			<source src="{{ asset('img/video-bg.mp4') }}" type="video/mp4">
		</video>
	</div>
	<!-- .fullscreen-bg -->

	<!-- Script -->
	<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script src="{{ asset('js/coundown-timer.js') }}"></script>
	<script src="{{ asset('js/scripts.js') }}"></script>

</body>

</html>