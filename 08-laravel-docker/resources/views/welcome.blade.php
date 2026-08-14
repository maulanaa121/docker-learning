<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fajar Maulana — Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            background: #050505;
        }

        .grid-bg {
            background-image:
                linear-gradient(rgba(255,255,255,.035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,.035) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        .glow {
            box-shadow:
                0 0 80px rgba(139, 92, 246, .15),
                0 0 160px rgba(59, 130, 246, .08);
        }

        .text-gradient {
            background: linear-gradient(
                90deg,
                #ffffff 0%,
                #a78bfa 45%,
                #60a5fa 100%
            );
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .orb {
            filter: blur(80px);
        }
    </style>
</head>

<body class="text-white antialiased">

    <!-- Background -->
    <div class="fixed inset-0 -z-10 overflow-hidden">

        <div class="grid-bg absolute inset-0"></div>

        <div
            class="orb absolute left-[10%] top-[15%]
                   h-72 w-72 rounded-full
                   bg-violet-600/20">
        </div>

        <div
            class="orb absolute right-[5%] top-[35%]
                   h-80 w-80 rounded-full
                   bg-blue-500/15">
        </div>

        <div
            class="absolute inset-0
                   bg-[radial-gradient(circle_at_center,transparent_0%,#050505_75%)]">
        </div>
    </div>


    <!-- NAVBAR -->
    <header class="fixed left-0 right-0 top-0 z-50">

        <nav
            class="mx-auto flex max-w-6xl items-center
                   justify-between px-6 py-5 lg:px-8">

            <!-- Logo -->
            <a
                href="#home"
                class="text-lg font-bold tracking-tight">
                FM<span class="text-violet-400">.</span>
            </a>

            <!-- Menu -->
            <div
                class="hidden items-center gap-8
                       text-sm text-white/60 md:flex">

                <a
                    href="#home"
                    class="transition hover:text-white">
                    Home
                </a>

                <a
                    href="#about"
                    class="transition hover:text-white">
                    About
                </a>

                <a
                    href="#projects"
                    class="transition hover:text-white">
                    Projects
                </a>
            </div>

            <!-- Contact button -->
            <a
                href="#contact"
                class="rounded-full border border-white/10
                       bg-white/5 px-5 py-2.5
                       text-sm font-medium
                       backdrop-blur-xl
                       transition
                       hover:border-white/20
                       hover:bg-white/10">
                Let's Talk
            </a>

        </nav>

    </header>


    <!-- HERO -->
    <main id="home">

        <section
            class="relative flex min-h-screen
                   items-center justify-center
                   overflow-hidden px-6">

            <div
                class="mx-auto w-full max-w-5xl
                       text-center">

                <!-- Status -->
                <div
                    class="mb-8 inline-flex items-center gap-2
                           rounded-full border border-white/10
                           bg-white/[0.03]
                           px-4 py-2
                           text-xs text-white/60
                           backdrop-blur-xl">

                    <span
                        class="h-2 w-2 animate-pulse
                               rounded-full bg-emerald-400">
                    </span>

                    Available for opportunities
                </div>


                <!-- Small heading -->
                <p
                    class="mb-5 text-sm font-medium
                           uppercase tracking-[0.3em]
                           text-violet-400">
                    Hello, I'm
                </p>


                <!-- NAME -->
                <h1
                    class="text-gradient
                           text-6xl font-black
                           tracking-[-0.06em]
                           sm:text-7xl
                           md:text-8xl
                           lg:text-[110px]">

                    Fajar Maulana

                </h1>


                <!-- Description -->
                <p
                    class="mx-auto mt-8 max-w-2xl
                           text-base leading-7
                           text-white/50
                           sm:text-lg">

                    I build modern digital experiences
                    with clean design, thoughtful interaction,
                    and powerful technology.

                </p>


                <!-- Buttons -->
                <div
                    class="mt-10 flex flex-col
                           items-center justify-center
                           gap-4 sm:flex-row">

                    <a
                        href="#projects"
                        class="group rounded-full
                               bg-white px-7 py-3.5
                               text-sm font-semibold
                               text-black
                               transition
                               hover:scale-105">

                        View My Work

                        <span
                            class="ml-2 inline-block
                                   transition
                                   group-hover:translate-x-1">
                            →
                        </span>

                    </a>


                    <a
                        href="#contact"
                        class="rounded-full
                               border border-white/10
                               bg-white/5 px-7 py-3.5
                               text-sm font-medium
                               text-white/80
                               backdrop-blur-xl
                               transition
                               hover:border-white/20
                               hover:bg-white/10">

                        Get In Touch

                    </a>

                </div>


                <!-- Scroll -->
                <div
                    class="mt-24 flex flex-col
                           items-center gap-3
                           text-xs text-white/30">

                    <span>Scroll to explore</span>

                    <div
                        class="h-10 w-px
                               bg-gradient-to-b
                               from-white/30 to-transparent">
                    </div>

                </div>

            </div>


            <!-- Decorative glow -->
            <div
                class="glow pointer-events-none
                       absolute left-1/2 top-1/2
                       -z-10 h-[500px] w-[500px]
                       -translate-x-1/2
                       -translate-y-1/2
                       rounded-full">
            </div>

        </section>


        <!-- ABOUT -->
        <section
            id="about"
            class="border-t border-white/5
                   px-6 py-32">

            <div
                class="mx-auto grid max-w-6xl
                       gap-16 md:grid-cols-2
                       md:items-center">

                <div>

                    <p
                        class="mb-4 text-sm
                               uppercase tracking-[0.25em]
                               text-violet-400">
                        About Me
                    </p>

                    <h2
                        class="text-4xl font-bold
                               tracking-tight
                               sm:text-5xl">

                        Turning ideas into
                        <span class="text-white/40">
                            digital experiences.
                        </span>

                    </h2>

                </div>


                <div
                    class="text-base leading-8
                           text-white/50">

                    <p>
                        Saya Fajar Maulana. Saya memiliki
                        ketertarikan pada teknologi, desain,
                        dan pengembangan aplikasi modern.
                    </p>

                    <p class="mt-5">
                        Saya senang mempelajari hal baru,
                        membangun sesuatu dari nol,
                        dan mengubah ide menjadi produk
                        digital yang menarik.
                    </p>

                </div>

            </div>

        </section>


    </main>


    <!-- FOOTER -->
    <footer
        class="border-t border-white/5
               px-6 py-8">

        <div
            class="mx-auto flex max-w-6xl
                   flex-col items-center
                   justify-between gap-4
                   text-sm text-white/30
                   sm:flex-row">

            <p>
                © 2026 Fajar Maulana.
            </p>

            <p>
                Built with Laravel & Tailwind CSS.
            </p>

        </div>

    </footer>

</body>
</html>