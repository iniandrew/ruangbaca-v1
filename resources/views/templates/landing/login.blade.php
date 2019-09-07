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

							<h2 class="major">RUANG BACA - LOGIN</h2>

							<form method="post" action="proses-login.php">
								<div class="field">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">Password</label>
									<input type="password" name="password" id="password">
								</div>
								<ul class="actions">
                  <li><input type="submit" value="Login" class="special" /></li>
                  <li>
                    <h3><i>Belum punya akun? Daftar </i>
                      <a href="register.php">Disini</a>
                    </h3>
                    </li>
								</ul>
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
