<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
	<div id="wrapper">
		@include('includes.nav')

		@yield('content')
	</div>
	@include('includes.footer')
</body>

</html>
