<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>URL shorterer</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{--        Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1>Url shorter form</h1>
    <form action="{{ route('create-url') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Original link (required)</label>
            <input class="form-control" name="original_link"/>
            @error('original_link')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group pt-2">
            <label>Short link (optional)</label>
            <input class="form-control" name="short_link"/>
            <div class="form-text">Enter your link without domain, e.g. <i>myuserslist</i></div>
            @error('short_link')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group pt-2">
            <input class="form-check-input" type="checkbox" name="generate_by_service" id="generate_by_service">
            <label class="form-check-label" for="generate_by_service">
                Generate the short link by service
            </label>
        </div>
        <div class="form-group pt-2">
            <input type="submit" value="Save" class="btn btn-primary"/>
        </div>
    </form>
</div>
</body>
</html>
