<section class="relative h-screen overflow-hidden">

    <!-- Background Image -->
    <img
        src="{{ asset('assets/images/hero.jpg') }}"
        alt="Hero"
        class="absolute inset-0 object-cover w-full h-full">

    <!-- Dark Gradient Overlay -->
    <div
        class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent">
    </div>

    <!-- Content -->
    <div class="absolute z-20 flex items-center min-h-screen">

        <div class="w-full pl-20 lg:pl-32 xl:pl-40">

            <div class="max-w-3xl">

                <!-- Small Text -->
                <p
                    class="mb-6 italic tracking-wide text-[#D9B27A]">

                    Tarot Reading

                </p>

                <!-- Heading -->
                <h1
                    class="font-serif text-6xl leading-none text-white md:text-7xl lg:text-8xl">

                    Where

                    <img
                        id="redStone"
                        src="{{ asset('assets/images/red stone.png') }}"
                        alt=""
                        class="inline-block w-24 mx-3 -mt-4 md:w-32">

                    Destiny

                    <br>

                    Finds Path

                </h1>

                <!-- Second Line -->
                <h2
                    class="mt-6 font-serif text-4xl text-white md:text-5xl">

                    and Balance

                    <img
                        id="blackStone"
                        src="{{ asset('assets/images/black stone.png') }}"
                        alt=""
                        class="inline-block w-20 ml-3">

                </h2>

                <!-- Description -->
                <p
                    class="max-w-xl mt-8 text-lg leading-8 text-gray-200">

                    Let our experienced fortune teller guide you
                    through the cards, revealing insights and wisdom
                    tailored just for you.

                </p>

                <!-- Buttons -->
                <div
                    class="flex flex-wrap gap-5 mt-10">

                    <button
                        class="px-8 py-4 bg-white border border-[#D9B27A]
                               hover:bg-[#D9B27A]
                               hover:text-white
                               transition">

                        🌙 Discover More

                    </button>

                    <button
                        class="px-8 py-4 bg-white border border-[#D9B27A]
                               hover:bg-[#D9B27A]
                               hover:text-white
                               transition">

                        ✦ Join Us Today

                    </button>

                </div>

            </div>

        </div>

    </div>

    <!-- Planet -->
    <img
        id="jupiter"
        src="{{ asset('assets/images/jupiter.png') }}"
        alt="Planet"
        class="absolute z-30 w-32 md:w-40 bottom-20 right-10 md:right-20">

    <!-- Purchase Button -->
    

    
   <!-- Premium Curved Bottom -->
<div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">

<svg viewBox="0 0 1000 100" preserveAspectRatio="none">
	<path fill="#FAF8F5" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
</svg>

</div>

</section>