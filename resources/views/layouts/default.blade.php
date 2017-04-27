<!DOCTYPE html>
<html lang="en">

@include('admin.includes.header')

<body>

@include('admin.includes.sideBar')


@include('admin.includes.topMenu')


<div class="wraper container-fluid">
    <section class="">
        @yield('content')
    </section>
</div>


@include('admin.includes.footer')

</body>
</html>