<footer class="relative min-h-[500px] overflow-hidden text-white flex flex-col">

    <!-- Video Background -->
    <div class="absolute inset-0 -z-20 overflow-hidden">

        <iframe
            class="absolute top-1/2 left-1/2
                   w-[177.77vh] h-[56.25vw]
                   min-w-full min-h-full
                   -translate-x-1/2 -translate-y-1/2
                   pointer-events-none"
            src="https://www.youtube.com/embed/qYxpH90Rj0U?autoplay=1&mute=1&loop=1&playlist=qYxpH90Rj0U&controls=0&rel=0"
            allow="autoplay"
            frameborder="0">
        </iframe>

    </div>

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/85 -z-10"></div>

    <!-- Footer Content -->
    <div class="relative z-10 flex-1 px-6 py-20 mx-auto max-w-7xl w-full">

        <!-- Address | Logo | Info -->
        <div class="grid gap-12 md:grid-cols-3">

            <!-- Left -->
            <div>
                <h3 class="mb-8 text-4xl font-serif">
                    Address :
                </h3>

                <div class="space-y-5 text-gray-300">
                    <p>Address : 1080 Brickell Ave</p>
                    <p>City : Miami ( Florida )</p>
                    <p>Country : United States</p>
                </div>
            </div>

            <!-- Center -->
            <div class="text-center">

                <img
                    src="{{ asset('assets/images/logo-white.png') }}"
                    alt="Logo"
                    class="h-11 mx-auto">

                <p class="max-w-xl mt-6 mx-auto  text-center text-[16px] leading-8 text-gray-300">

                    Unlock the secrets of the cosmos and transform your life today! Connect with me for personalized consultations that reveal your unique strengths and help you navigate challenges with confidence.

                </p>

            </div>

            <!-- Right -->
            <div class="md:text-right">

                <h3 class="mb-8 text-4xl font-serif">
                    Info :
                </h3>

                <div class="space-y-5 text-gray-300">
                    <p>Support : info@astrology.com</p>
                    <p>Email : info@tarotcards.com</p>
                    <p>Phone : +1 385 386 309</p>
                </div>

            </div>

        </div>

    </div>

    <!-- Bottom Copyright Bar -->
<div class="relative z-10 bg-black/90">

    <div class="px-6 py-5 mx-auto text-center max-w-7xl">

        <p class="font-semibold tracking-wide text-white">

            © 2026 Astrology Theme. All Rights Reserved.

        </p>

    </div>

</div>

</footer>