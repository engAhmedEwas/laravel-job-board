<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> Job Board{{ isset($title) ? " - ".$title : '' }} </title>
</head>

<body>
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100 dark:bg-gray-900">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <nav class="bg-gray-800 dark:bg-gray-800/50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company" class="size-8" />
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 dark:bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                                <x-nav-link :active="request()->is('/')" href="/">Home Page</x-nav-link>
                                <x-nav-link :active="request()->is('about')" href="/about">About Page</x-nav-link>
                                <x-nav-link :active="request()->is('contactUs')" href="/contactUs">Contact Us Page</x-nav-link>
                                <x-nav-link :active="request()->is('blog')" href="/blog">blog Page</x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @if (isset($title))
            <header
                class="bg-white shadow-sm dark:bg-gray-800 dark:shadow-none dark:after:pointer-events-none dark:after:absolute dark:after:inset-x-0 dark:after:inset-y-0 dark:after:border-y dark:after:border-white/10">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{$title}}</h1>
                </div>
            </header>
        @endif
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>

</body>

</html>
