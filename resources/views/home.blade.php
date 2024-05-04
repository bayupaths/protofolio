<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Bayu Purnomo</title>
</head>

<body>

    {{-- Navbar Menu Start --}}
    <header class="bg-transparent absoulte top-0 left-0 w-full flex items-center z-10">
        <div class="container mx-auto px-8">
            <div class="flex item-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">Bayu Purnomo</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger transition duration-300 ease-in-out"></span>
                        <span class="hamburger transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex ">
                            <li class="group">
                                <a href="#home"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary ">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary ">About Me</a>
                            </li>
                            <li class="group">
                                <a href="#protofolio"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary ">Protofolio</a>
                            </li>
                            {{-- <li class="group">
                                <a href="#blog"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary ">Blog</a>
                            </li> --}}
                            <li class="group">
                                <a href="#contact"
                                    class="text-base text-dark py-2 mx-8 flex group-hover:text-primary ">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- Navbar Menu End --}}

    {{-- Hero Section Start --}}
    <section id="home" class="pt-8">
        <div class="container mx-auto px-8">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">Hello, I'm<span
                            class="block font-bold text-dark text-3xl lg:text-4xl">Bayu Purnomo</span>
                    </h1>
                    <h2 class="font-medium text-slate-700 text-lg">
                        Web Developer
                    </h2>
                    <p class="font-medium text-slate-500 leading-relaxed my-4">Figma ipsum component variant main
                        layer. Create selection arrange share polygon arrow reesizing union.
                    </p>
                    <a href="#about"
                        class="inline-flex text-base font-medium text-white bg-primary py-3 px-8 rounded-sm hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                        About Me
                    </a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="/assets/img/bayu_purnomo2.png" alt="Bayu Purnomo" class="max-w-full mx-auto">
                        <img src="/assets/img/blop-bg.svg"
                            class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-150 md:bottom-8"
                            alt="Blob">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- About Section Start --}}
    <section id="about" class="py-32">
        <div class="container mx-auto px-8">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <img src="/assets/img/developer.png" alt="Developer" class="max-w-full mx-auto hidden md:block">
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-lg font-semibold text-primary md:text-xl mb-4">About Me</h1>
                    <p class="font-normal text-md text-secondary my-4">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Iure deserunt illum, voluptatibus
                        fugiat dicta temporibus consectetur similique. Accusamus magnam dignissimos nobis nisi.
                        Explicabo, quam voluptatem nobis, numquam sit doloribus debitis maxime soluta est ad modi
                        corporis unde facilis culpa mollitia asperiores non eum. Veritatis, eveniet ducimus aliquam quas
                        soluta ex!</p>
                    <div class="flex py-5">
                        <a target="_blank" href="https://instagram.com/bayuuu.p/" class="text-gray-500">
                            <img src="/assets/img/icons/instagram.svg" alt="Instagram" class="w-6 h-6 ">
                        </a>
                        <a target="_blank" href="https://wa.me/628812785635" class="text-gray-500 ms-5">
                            <img src="/assets/img/icons/whatsapp.svg" alt="WhatsApp" class="w-6 h-6">
                        </a>
                        <a target="_blank" href="https://github.com/bayupaths" class="text-gray-500 ms-5">
                            <img src="/assets/img/icons/github.svg" alt="GitHub" class="w-6 h-6">
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/in/bayupurnomo1710"
                            class="text-gray-500 ms-5">
                            <img src="/assets/img/icons/linkedin.svg" alt="LinkedIn" class="w-6 h-6">
                        </a>
                    </div>
                    <a href="#"
                        class="inline-block text-base font-medium text-white bg-primary py-3 px-8 rounded-sm border-transparent hover:border hover:border-primary hover:text-primary hover:bg-white hover:opacity-80 transition duration-300 ease-in-out">
                        Download CV
                    </a>
                </div>
            </div>
            {{-- <div class="max-w-xl mx-auto text-center mt-16">
                <h1 class="text-lg font-semibold text-primary md:text-xl mb-4">Tools & Skills</h1>
                
            </div> --}}
        </div>
    </section>
    {{-- About Section End --}}


    {{-- Protofolio Start --}}
    <section id="protofolio" class="pt-32 pb-32 bg-slate-300">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Protofolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4">Project Terbaru</h2>
                    <p class="font-medium text-md text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Nostrum temporibus sapiente, nam sunt odio eaque non optio ratione eius excepturi.</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="/assets/img/project/deva-app-01.png" alt="Project 1" class="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Sistem Informasi Deva Digital Print</h3>
                    <p class="font-normal text-md text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Similique, blanditiis.</p>
                    <div class="flex mt-3">
                        <a href="#" target="_blank"
                            class="text-base font-medium text-white bg-primary py-3 px-8 rounded-sm border-transparent hover:border hover:border-primary hover:text-primary hover:bg-white hover:opacity-80 transition duration-300 ease-in-out">
                            <img src="/assets/img/icons/github.svg" alt="GitHub" class="inline w-4 h-4 filter invert hover:invert-0"> Code
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Protofolio End --}}

    {{-- Contact  Start --}}
    <section id="contact" class="py-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4">Hubungi Saya</h2>
                    <p class="font-medium text-md text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Nostrum temporibus sapiente, nam sunt odio eaque non optio ratione eius excepturi.</p>
                </div>
            </div>
            <form action="">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px mb-8">
                        <label for="name" class="text-base text-primary font-bold">Nama</label>
                        <input type="text" id="name"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px mb-8">
                        <label for="email" class="text-base text-primary font-bold">Email</label>
                        <input type="email" id="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                    </div>
                    <div class="w-full px mb-8">
                        <label for="message" class="text-base text-primary font-bold">Pesan</label>
                        <textarea type="text" id="message"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"></textarea>
                    </div>
                    <div class="w-full">
                        <button
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- Contact  End --}}


    {{-- Footer Start --}}
    {{-- <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">Bayu Purnomo</h2>
                    <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                    <p>bayupur1710@gmail.com</p>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <p>City</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Kategori Blog</h3>
                    <ul class="text-slate-300">
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Programming</a>
                        </li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Teknologi</a>
                        </li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Gaya Hidup</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                    <ul class="text-slate-300">
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
                        </li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Tentang Saya</a>
                        </li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Protofolio</a>
                        </li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                        </li>
                        <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="w-full pt-10 border-t border-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <a href="http://" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"></a>
                </div>
                <p class="text-center text-gray-500">&copy; 2024 <a href="https://www.instagram.com/bayuuu.p" target="_blank" class="hover:text-primary">Bayu Purnomo</a>. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer> --}}


    <footer class="bg-dark py-12">
        <div class="container">
            <div class="mx-auto w-full max-w-screen-xl py-6 lg:py-8">
                <div class="md:flex md:justify-between flex-wrap">
                    <div class="w-full mb-12 text-slate-300 md:mb-0 md:w-1/2">
                        <h1 class="whitespace-nowrap font-bold text-4xl text-white mb-5">Bayu
                            Purnomo</h1>
                        <p class="text-normal text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Deserunt nemo accusamus, optio
                            error numquam debitis consequatur illo earum. Natus, voluptatem?</p>
                    </div>
                    <div class="w-full mb-12 md:w-1/4">
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Link</h2>
                        <ul class="text-gray-500 font-normal">
                            <li>
                                <a href="#home" class="inline-block text-base hover:text-primary mb-3">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="inline-block text-base hover:text-primary mb-3">About Me</a>
                            </li>
                            <li>
                                <a href="#protofolio"
                                    class="inline-block text-base hover:text-primary mb-3">Protofolio</a>
                            </li>
                            {{-- <li><a href="#" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                            </li> --}}
                            <li>
                                <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full mb-12 md:w-1/4">
                        <h2 class="mb-6 text-sm font-semibold uppercase text-white">Contact</h2>
                        <ul class="text-gray-500 font-normal">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center">© {{ date('Y') }} <a
                            href="https://instagram.com/bayuuu.p/" class="text-semibold hover:text-primary">Bayu
                            Purnomo</a>. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a target="_blank" href="https://instagram.com/bayuuu.p/" class="text-gray-500">
                            <img src="/assets/img/icons/instagram.svg" alt="Instagram"
                                class="w-6 h-6 filter invert ">
                        </a>
                        <a target="_blank" href="https://wa.me/628812785635" class="text-gray-500 ms-5">
                            <img src="/assets/img/icons/whatsapp.svg" alt="WhatsApp" class="w-6 h-6 filter invert">
                        </a>
                        <a target="_blank" href="https://github.com/bayupaths" class="text-gray-500 ms-5">
                            <img src="/assets/img/icons/github.svg" alt="GitHub" class="w-6 h-6 filter invert">
                        </a>
                        <a target="_blank" href="https://www.linkedin.com/in/bayupurnomo1710"
                            class="text-gray-500 ms-5">
                            <img src="/assets/img/icons/linkedin.svg" alt="LinkedIn" class="w-6 h-6 filter invert">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    {{-- Footer End --}}
</body>

</html>
