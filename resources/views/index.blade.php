<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZooShop</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
<div id="app">
    <div class="wrapper">
        <!-- SIDEBAR -->
        <v-sidebar></v-sidebar>
        <div class="main-content">
            <!-- NAVBAR -->
            <v-header></v-header>
            <!-- CONTENT -->
            <v-content></v-content>
        </div>
    </div>
    {{-- <example-component></example-component> --}}
</div>
</body>
</html>
