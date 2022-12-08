<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta description="Owencodes | Full Stack Dev">
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" type="icon/png" href="../images/logo.png">
    <title>Owencodes | Full Stack Dev</title>
</head>

<body>
    <!-- ====== Navbar Section Start -->
    <header x-data="{
        navbarOpen: false
    }" class="flex h-40 items-center mx-auto w-full bg-[#191D2B]">
        <div class="mx-auto">
            <div class="relative flex items-center justify-around">
                <div class="w-full px-4">
                    <a href="/" class="flex items-center block w-full py-5">
                        <img src="../images/logo.png" alt="logo"
                            class="w-20 h-16 mr-5" />
                        <p class="text-white font-medium text-xl hover:text-emerald-500">Owencodes | Full Stack Dev </p>
                    </a>
                </div>
                <div class="flex w-full items-center justify-end px-4">
                    <div>
                        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                            id="navbarToggler"
                            class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden">
                            <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                            <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                            <span class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"></span>
                        </button>
                        <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                            class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-[#191D2B] py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                            <ul class="block lg:flex">
                                <li>
                                    <a href="javascript:void(0)"
                                        class="text-white hover:text-primary flex py-2 text-xl font-medium lg:ml-12 lg:inline-flex hover:text-emerald-500">
                                        About 
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        class="text-white hover:text-primary flex py-2 text-xl font-medium lg:ml-12 lg:inline-flex hover:text-emerald-500">
                                        Projects
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"
                                        class="text-white hover:text-primary flex py-2 text-xl font-medium lg:ml-12 lg:inline-flex hover:text-emerald-500">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== Navbar Section End -->
    <h1 class="text-3xl font-bold underline">
        Owencodes Portfolio!
    </h1>
    <div x-data="{ count: 0 }">
        <span x-text="count"></span>
        <button x-on:click="count++">Click me</button>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
