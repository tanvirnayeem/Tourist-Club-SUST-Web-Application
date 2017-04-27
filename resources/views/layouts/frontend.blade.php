<!DOCTYPE html>
<html lang="en">

@include('pages.header')

<body>

@include('pages.topline')      	
@include('pages.navBar')

@yield('content')

@include('pages.footer')
        	
@include('pages.script')

</body>
</html>