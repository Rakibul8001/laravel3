<?php
?>
<html>
<head>
    <title>Home page</title>
 @include('partials.styles')

</head>
<body>
<div class="container">
    @include('partials.nav')
</div>
<div class="container">

    @yield('content')

    @include('partials.footer')
</div>




@include('partials.script')
</body>
</html>
