<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Web Scraper</title>
</head>

<body>
    <div class="container">
        <div class="row">
            @foreach ($data as $item => $value)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $item }}</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-text">{{ $value }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            {{-- @foreach ($dataLocal as $item => $value)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $item }}</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-text">{{ $value }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach --}}
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
