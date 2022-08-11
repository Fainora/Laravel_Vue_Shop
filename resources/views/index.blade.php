<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZooShop</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/script.js'])
</head>

<body>
    <div id="app">
        <!-- NAVBAR -->
        <v-navbar></v-navbar>
        <!-- Content -->
        <router-view></router-view>
        <!-- Footer -->
        <v-footer></v-footer>
    </div>
</body>
</html>
