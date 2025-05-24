<!DOCTYPE html>
<html lang="en" class="bg-gray-950">

<head>
    <meta charset="UTF-8">
    <title>DevHub</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-transparent text-white font-sans">
    <header class=" shadow-md py-4 px-6">
        <h1 class="px-2 ext-4xl tracking-tighter text-balance max-lg:font-medium max-sm:px-4 sm:text-5xl lg:text-6xl xl:text-8xl">DevHub</h1>
    </header>

    <main class="p-6">
        @yield('content')
    </main>
</body>

</html>
