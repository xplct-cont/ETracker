<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>ETracker</title>
</head>
<body>
    <div id="finnaf-admin"></div>
    @vite('resources/admin-resources/main.js')
</body>
</html>
