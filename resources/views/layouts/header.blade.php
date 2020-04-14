<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="http://127.0.0.1:8000/#" class="header__logo">
								<img src="{{ URL::asset('img/logo-pegasus.png') }}" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<li class="header__nav-item">
									<a href="http://127.0.0.1:8000/posts/news" class="header__nav-link">NEW RELEASES</a>
								</li>

								<li class="header__nav-item">
									<a href="http://127.0.0.1:8000/posts/series" class="header__nav-link">SERIES</a>
								</li>

								<li class="header__nav-item">
									<a href="http://127.0.0.1:8000/posts/dorama" class="header__nav-link">DORAMA</a>
								</li>

								<li class="header__nav-item">
									<a href="http://127.0.0.1:8000/posts/cartoons" class="header__nav-link">CARTOONS</a>
								</li>
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href="signin.html" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>sign in</span>
								</a>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>