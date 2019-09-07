<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		@include('templates.landing._head')
	</head>
	<body>

		<!-- Page Wrapper -->
			<!-- <div id="page-wrapper"> -->

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">Ruang Baca</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					@include('templates.landing._menu')

          <!-- <section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-diamond"></span></div>
							<h2>Ruang Baca</h2>
							<p>Ideafest 2018</p>
						</div>
					</section> -->


				<!-- Footer -->
                <section id="wrapper">

					<section id="one" class="wrapper alt style1">
						<div class="inner">

							<h2 class="major">RUANG BACA - REGISTER</h2>

							<form method="POST" action="{{ route('register') }}">
								{{ csrf_field() }}
								
								<div class="row uniform">
									
								<div class="12u$">
									<label for="name">Full Name</label>									
									<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

									@if ($errors->has('name'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>

								<div class="12u$">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

									@if ($errors->has('email'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>

								<div class="12u$">
									<label for="message">Password</label>
									<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

									@if ($errors->has('password'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
                                </div>
                                
                                <div class="12u$">
									<label for="password-confirm">Re-Password</label>									
                                	<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>                            
								</div>

								<div class="12u$">
									<label for="demo-category">Jurusan</label>
										<div class="select-wrapper">
											<select name="jurusan" id="demo-category" required>
												<option value="">-</option>
												<option value="Multimedia">Multimedia (MM)</option>
												<option value="Akuntansi">Akuntansi Dan Keuangan Lembaga (AKL)</option>
												<option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
												<option value="Pemasaran">Bisnis Daring Dan Pemasaran (PBR)</option>
												<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak (RPL)</option>
												<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan (TKJ)</option>
												<option value="Broadcast">Teknik Produksi dan Penyiaran Program Pertelevisisan (BC)</option>
												<option value="Desain Komunikasi Visual">Desain Komunikasi Visual (DKV)</option>
												<option value="Akomodasi Perhotelan">Akomodasi Perhotelan (APH)</option>																							
											</select>
										</div>
								</div>
							

								<ul class="actions">
                                    <li><input type="submit" value="Sign Up" class="special" /></li>
                                    <li><input type="reset" value="Reset" /></li>
                                    <li>
                                        <h3><i>Sudah punya akun? Login </i>
                                            <a href="{{ route('login') }}">Disini</a>
                                        </h3>
                                    </li>
								</ul>
							</div>
							</form>

                <section id="footer">
                    <div class="inner">
                    <ul class="copyright">
                        <li>&copy; Untitled Inc. All rights reserved.</li><li>Ruang Baca 2018</a></li>
                    </ul>
                    </div>
                </section>


						</div>
				</section>
        </section>


			<!-- </div> -->

		<!-- Scripts -->
			@include('templates.landing._script')

	</body>
</html>
