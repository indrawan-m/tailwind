<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/alpinejs" defer></script>
  
</head>
    <body>
        <!-- Header Start -->  
         <header class=" absolute top-0 left-0 w-full flex items-center z-10 navbar-fixed">
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="px-4">
                        <a href="#home" class="font-bold text-lg text-primary block py-6">Jenna</a>
                    </div>
                    <div class="flex items-center px-4" x-data="{ open: false }">
                        <button 
                                x-on:click="open = !open"
                                
                                class="flex items-center justify-center w-10 h-10 focus:outline-none lg:hidden"> 
                            <div class="w-6 flex items-center justify-center relative">
                                <span x-bind:class="open ? 'translate-y-0 rotate-45' : '-translate-y-2'"
                                    class="hamburger-line"></span>
                            
                                <span x-bind:class="open ? 'opacity-0 translate-x-3' : 'opacity-100'"
                                    class="hamburger-line"></span>
                            
                                <span x-bind:class="open ? 'translate-y-0 -rotate-45' : 'translate-y-2'"
                                    class="hamburger-line"></span>
                            </div>
                        </button>

                        <nav :class="{'flex': open, 'hidden': !open}" class="absolute py-5 bg-white shadow-lg rounded max-w-[250px] w-full right-4 top-full lg:block lg:static lg:max-w-full lg:bg-transparent lg:shadow-none lg:rounded-none">
                            <ul class="block lg:flex">
                                <li class="group">
                                    <a href="#home" class="text-base text-dark py-2 mx-8 group-hover:text-primary flex" >Beranda</a>
                                </li>
                                <li class="group">
                                    <a href="#home" class="text-base text-dark py-2 mx-8 group-hover:text-primary flex" >Tentang Saya</a>
                                </li>
                                <li class="group">
                                    <a href="#home" class="text-base text-dark py-2 mx-8 group-hover:text-primary flex" >Portfolio</a>
                                </li>
                                <li class="group">
                                    <a href="#home" class="text-base text-dark py-2 mx-8 group-hover:text-primary flex" >Client</a>
                                </li>
                                <li class="group">
                                    <a href="#home" class="text-base text-dark py-2 mx-8 group-hover:text-primary flex" >Blog</a>
                                </li>
                                <li class="group">
                                    <a href="#home" class="text-base text-dark py-2 mx-8 group-hover:text-primary flex" >Contact</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
         </header>
        <!-- Header End -->

        <!-- Hero Section Start -->
            <section id="home" class="pt-36">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="w-full self-center px-4 lg:w-1/2">
                            <h1 class="text-base font-bold text-primary md:text-xl">Salam, nama saya
                                <span class="block font-bold text-dark text-4xl">Jenna</span>
                            </h1>
                            <h2 class="font-medium text-slate-500 text-lg mb-5">Lorem ipsum dolor <span class="text-dark">Photographer</span> </h2>
                            <p class="font-medium text-secondary mb-10 leading-relaxed text-justify">Lorem ipsum dolor sit amet consectetur, cupiditate obcaecati iusto rem sint reiciendis explicabo mollitia ut? Dolorum unde corrupti nihil.</p>
                            <a href="" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi saya</a>
                        </div>
                        <div class="w-full self-end px-4 lg:w-1/2">
                            <div class="relative mt-10 lg:mt-9 lg:right-0">
                                <img src="/storage/images/pexels.png" alt="" class="max-w-full mx-auto">
                                <span class="absolute bottom-2 -z-10 left-1/2 transform -translate-x-1/2">
                                <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#14b8a6" d="M56.6,-61.8C72.9,-53.8,85.2,-35.5,89.5,-15.2C93.7,5.1,89.8,27.3,78.7,44.4C67.6,61.4,49.3,73.2,29.8,79C10.4,84.8,-10.2,84.6,-26.1,76.7C-42,68.7,-53.2,53,-63.8,36.1C-74.4,19.3,-84.4,1.3,-83.5,-16.6C-82.6,-34.6,-70.9,-52.6,-55.2,-60.6C-39.5,-68.6,-19.8,-66.7,0.2,-66.9C20.2,-67.2,40.4,-69.7,56.6,-61.8Z" transform="translate(100 100)" /></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Hero Section End -->

        <!-- About Section Start -->
            <section id="about" class=" pt-36 pb-32">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="w-full px-4 mb-10 lg:w-1/2">
                            <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
                            <h2 class="font-bold text-dark text-3xl mb-3 max-w-md lg:text-4xl" >Lorem ipsum dolor sit.</h2>
                            <p class="font-medium text-base text-secondary text-justify lg:text-lg">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet. adipisicing elit. Maxime praesentium quasi et, voluptatum ipsa natus.</p>
                        </div>
                        <div class="w-full px-4 lg:w-1/2 ">
                            <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Lorem, ipsum dolor.</h3>
                            <p class="font-medium text-base text-secondary mb-6 text-justify lg:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. Voluptatum quam temporibus rem quas, et architecto?</p>
                            <div class="flex items-center">
                                <!-- youtube -->
                                 <a href="http://youtube.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-s-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                                 <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                 </a>
                                 <!-- instagram -->
                                 <a href="http://instagram.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-s-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                                 </a>
                                  <!-- x -->
                                  <a href="http://x.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-s-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                                 </a>
                                 <!-- github -->
                                 <a href="http://github.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-s-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                                 <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                 </a>
                                 <!-- linkedin -->
                                 <a href="http://github.com" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-s-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                                 <svg role="img" width="20"class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- About Section End -->

        <!-- Portfolio Section Start -->
         <section class="pt-36 pb-16 bg-slate-100">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
                        <h4 class="font-bold text-dark text-3xl mb-4">Project Terbaru</h4>
                        <p class="font-medium text-md text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet iure provident in numquam veniam cum nemo quia accusamus sequi asperiores.</p>
                    </div>
                </div>

                <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="/storage/images/pexels1.jpg" alt="">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5">Serangga, Bunga</h3>
                        <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam soluta temporibus possimus!</p>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="/storage/images/pexels1.jpg" alt="">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5">Serangga, Bunga</h3>
                        <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam soluta temporibus possimus!</p>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="/storage/images/mihai-lungu.jpg" alt="">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5">Mihai Lungu</h3>
                        <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam soluta temporibus possimus!</p>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2">
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="/storage/images/Skyler-Ewing.jpg" alt="">
                        </div>
                        <h3 class="font-semibold text-xl text-dark mt-5">Skyler Ewing</h3>
                        <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam soluta temporibus possimus!</p>
                    </div>
                </div>
            </div>

         </section>
        <!-- Portfolio Section End -->

        <!-- Client Section Start -->
         <section id="client" class="pt-36 pb-32 bg-dark">
            <div class="container">
                <div class="w-full px-4">
                <div class=" mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
                        <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Bekerjasama</h2>
                        <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet iure provident in numquam veniam cum nemo quia accusamus sequi asperiores.</p>
                    </div>
                </div>
            </div>
         </section>
        <!-- Client Section End -->

       
    </body>
</html>
