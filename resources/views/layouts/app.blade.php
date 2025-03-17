<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- ✅ Bootstrap via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   

<link href="{{ asset('css/custom.css') }}" rel="stylesheet">


    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


</head>
<body>
    
    <div class="container-fluid vh-100">
 
        @yield('content')
    </div>
    <script src="{{ asset('js/exam.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    @yield('scripts')
</body>
</html>
