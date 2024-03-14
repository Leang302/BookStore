<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

</head>

<body>
    <div class="container mx-auto flex justify-between md:container sm:w-[100%]">
        <p>Logo</p>
        <ul class="flex gap-4 md:hidden sm:hidden xs:hidden">
            <li class="hover:bg-black p-4 {{ request()->is('/') ? 'active' : '' }} md:text-md md:p-1"><a
                    href="/">Home</a></li>
            <li class="hover:bg-black p-4 {{ request()->is('/') ? 'active' : '' }} md:text-md md:p-1"><a
                    href="/">Home</a></li>
            <li class="hover:bg-black p-4 {{ request()->is('/') ? 'active' : '' }} md:text-md md:p-1"><a
                    href="/">Home</a></li>
            <li class="hover:bg-black p-4 {{ request()->is('/') ? 'active' : '' }} md:text-md md:p-1"><a
                    href="/">Home</a></li>
        </ul>
    </div>

</body>

</html>
