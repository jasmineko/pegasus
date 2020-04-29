<header class="header">
		<div class="preloader">
			<div class="cssload-loader">PEGASUS</div>
		</div>
		<div class="modal" id="myModal" role="dialog" aria-labelledby="myModal" aria-hidden="true">
			<div class="modal-dialog " role = 'document' id ="signInModal">
				<!-- Modal content-->
				<div class="modal-content" id = 'signInContent'>
					<div class="modal-header flex">
						<div class="title_modal">
							<p>Войти</p>
						</div>
						<span class = 'close_modal' data-dismiss="modal" aria-label="Close"></span>
					</div>
					<div class="modal-body smallModal">
						<p>Пожалуйста, введите свои данные, чтобы зарегистрироваться.</p>
						<form action="">
							<label for="modal-email">E-mail:</label>
							<input class = 'bigInputType' type="text" id = 'modal-email' name = 'modal-email'>
							<span class = "error_word">Error</span>
							<label for="password">Пароль:</label>
							<input class = 'bigInputType' type="password" id = 'password' name = 'password'>
							<span class = "error_word">Error</span>
							<div class="link-on-sign-in-modal flex">
								<a href="#" data-dismiss = 'modal' id = "passwordLink" data-toggle="modal" data-target="#passwordModal" data-backdrop="false">Забыли пароль? </a>
								<a href="#" data-dismiss = 'modal' id = 'linkSignUp' data-toggle="modal" data-target="#signUpModal" data-backdrop="false">Зарегистрироваться</a>
							</div>
							<div class="flex justify-center">
								<button class = 'btn_btnEnterModal flex'>Войти</button>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
		<div class="modal" id="passwordModal" role="dialog" aria-labelledby="passwordModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role = 'document' id ="passwordDiolagModal">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header flex">
						<div class="title_modal">
							<p>Забыли пароль?<p>
						</div>
						<span class = 'close_modal' data-dismiss="modal" aria-label="Close"></span>
						
					</div>
					<div class="modal-body smallModalPassword">
						<p>Пожалуйста, введите свои данные, чтобы зарегистрироваться.</p>
						<form action="">
							<label for="modal-email-password">E-mail:</label>
							<input class = 'bigInputType' type="text" id = 'modal-email-password' name = 'modal-email-password'>
							<span class = "error_word">Error</span>
							<div class="flex justify-center">
								<button class = 'btn btn_btnEnterModal flex'>Отправить</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal" id="signUpModal" role="dialog" aria-labelledby="signUpModal" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role = 'document' id="diologSignUp">
				<div class="modal-content" id = 'bigModalContent'>
					<div class="modal-header flex">
						<div class="title_modal">
							<p>Регистрация</p>
						</div>
						<span class = 'close_modal' data-dismiss="modal" aria-label="Close"></span>
						
					</div>
					<div class="modal-body bigModal">
						<p>Пожалуйста, введите свои данные, чтобы зарегистрироваться.</p>
						<form action="">
							<div class="flex inputs_signUp justify-content-between">
								<div class = 'flexed_first'>
									<label for="name_signUp">Имя:</label>
									<input class = "smallInput" type="text" id = 'name_signUp' name = 'name_signUp'>
									<span class = "error_word">Error</span>
								</div>
								<div class = 'flexed_first'>
									<label for="email_signUp">E-mail:</label>
									<input class = "smallInput" type="text" id = 'email_signUp' name = 'email_signUp'>
									<span class = "error_word">Error</span>
								</div>
							</div>
							<div class="flex inputs_signUp justify-content-between">
								<div class = 'flexed_first'>
									<label for="sname_signUp">Фамилия:</label>
									<input class = "smallInput" type="text" id = 'sname_signUp' name = 'sname_signUp'>
									<span class = "error_word">Error</span>
								</div>
								<div class = 'flexed_first'>
									<label for="phone_signUp">Телефон:</label>
									<input class = "smallInput" type="text" id = 'phone_signUp' name = 'phone_signUp'>
									<span class = "error_word">Error</span>
								</div>
							</div>
							<div class="flex inputs_signUp justify-content-between">
								<div class = 'flexed_first'>
									<label for="fname_signUp">Отчество:</label>
									<input class = "smallInput" type="text" id = 'fname_signUp' name = 'fname_signUp'>
									<span class = "error_word">Error</span>
								</div>
								<div class = 'flexed_first'>
									<label for="password_signUp">Пароль:</label>
									<input class = "smallInput" type="password" id = 'password_signUp' name = 'password_signUp'>
									<span class = "error_word">Error</span>
								</div>
							</div>
						</form>
						<div class="flex justify-center">
							<button class = 'btn_btnEnterModal flex' style="margin-top: 10px;">Зарегистрироваться </button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="/#" class="header__logo">
								<img src="{{ URL::asset('img/logo-pegasus.png') }}" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<li class="header__nav-item">
									<a href="/categories/news" class="header__nav-link">NEW RELEASES</a>
								</li>

								<li class="header__nav-item">
									<a href="/categories/series" class="header__nav-link">SERIES</a>
								</li>

								<li class="header__nav-item">
									<a href="/categories/dorama" class="header__nav-link">DORAMA</a>
								</li>

								<li class="header__nav-item">
									<a href="/categories/cartoons" class="header__nav-link">CARTOONS</a>
								</li>
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href="signin.html" class="header__sign-in" data-toggle="modal" data-target="#myModal" data-backdrop="false">
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