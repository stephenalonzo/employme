<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employme | Job Search</title>
    <link rel="stylesheet" href="{{asset('dist/output.css')}}">
</head>

<body>
    <main>
        <header class="p-4 border-b border-gray-200">
            <nav class="flex flex-row items-center justify-between w-full">
                <div class="flex flex-row items-center space-x-6">
                    <a href="/" class="font-semibold text-xl">Employme</a>
                    <ul class="flex flex-row items-center justify-start space-x-4">
                        <li>
                            <a href="/" class="text-sm">Home</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-row items-center space-x-4">
                    <ul class="flex flex-row items-center justify-start">
                        <li>
                            <a href="./signin.html" class="text-sm space-x-2">
                                Sign In
                            </a>
                        </li>
                    </ul>
                    <span>&VerticalLine;</span>
                    <ul class="flex flex-row items-center justify-start space-x-4">
                        <li>
                            <a href="/jobs/create" class="text-sm space-x-2">
                                Post a Job
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="px-4 py-6">
            <div class="container mx-auto w-2/3">
                {{$slot}}
            </div>
        </section>
        <x-flash-message />
    </main>
</body>
</html>