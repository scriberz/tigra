<!DOCTYPE html>
<html>
<head>
    <title>Item List</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <item-list></item-list>
    </div>
</body>
</html>
