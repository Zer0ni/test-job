<!doctype html>
<html lang="en">
<head>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="page-content-wrapper">
    @if($errors->has('*'))
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    @yield('page_content')

    <div class="container" style="margin-top: 20px">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</div>



<script src="/js/app.js"></script>
</body>
</html>
