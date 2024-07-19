<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section class="bg-center bg-no-repeat bg-[url('{{ asset('images/orkos.jpg') }}')] bg-gray-500 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">@yield('title')</h1>
    </div>
</section>
    @yield('content')
</body>
</html>
