<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head itemscope itemtype="http://schema.org/WebSite">
{{--<title itemprop="name">{{ $_name }}{{ (isset($_title)) ? ' :: ' . $_title : null }}</title>--}}

{{--@include('includes/meta')--}}
@include('includes/opengraph')
@include('includes/css')
@include('includes/icons')
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</head>
<body onload="{{ $_onload or null }}">

<!--facebook plugin-->
<div id="fb-root"></div>

<!--body-->
<div class="site">
    @yield('content')
</div>

@include('includes/extended_footer')
@include('includes/footer')

<!--extras-->
@include('includes/javascript')
{{--@include('includes/breakpoint')
@include('includes/modals/login')
@include('includes/modals/feedback')
@include('includes/modals/confirm')
@include('includes/modals/delete')
@include('includes/javascript')
@include('includes/structured')
@yield('javascript')--}}

</body>
</html>
