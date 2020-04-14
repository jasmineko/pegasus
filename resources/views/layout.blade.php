<!DOCTYPE html>
<html lang="en">

<head>
	@include('layouts.head');
</head>
<body class="body">
	
	<!-- header -->
    @include('layouts.header');
	<!-- end header -->

	<!-- content  -->
    @yield('content');
    <!-- content ends -->

	<!-- footer -->
	@include('layouts.footer');
	<!-- end footer -->

	@yield('footer');
</body>

</html>