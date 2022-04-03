<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')
</head>

<body dir="rtl">
    @include('admin.layouts.header')
    <section class="body-container">
        @include('admin.layouts.sidebar')
        @yield('content')
    </section>
    @include('admin.layouts.scripts')
    @yield('scripts')
</body>

</html>
