
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <link rel='icon' href="{{ asset('img/icon.png') }}" type='image/x-icon' sizes="16x16" />
    <title>Farmacinha Popular</title>
</head>
<body>
    <div class="container-fluid">  
        <div class="row">
            <div class="col-2 sidebar">
                @include('app.includes.sidebar')
            </div>
            
            <div class="col-10 dashboard">
                <div class="container">
                    <div class="row">
                        @include('app.includes.alert')
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
