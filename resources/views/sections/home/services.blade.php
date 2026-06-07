
 


<section class="magic-section min-h-screen  relative overflow-hidden">
     <!-- Top Wave -->
    <div class="absolute top-0 left-0 w-full z-0">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1000 100"
            preserveAspectRatio="none"
            class="w-full h-[120px]">

            <path
                fill="#FAF8F5"
                d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z">
            </path>

        </svg>
    </div>

    <!-- Header -->
    <div class="relative z-20  text-center">
        <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-5 py-2 rounded-full mb-5">
            <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
            <span class="text-sm font-medium text-yellow-300 uppercase tracking-wider">
                Cosmic Guidance
            </span>
        </div>

        <h1 class="text-4xl md:text-6xl font-bold text-[#3F3737] mb-5">
            Guided by the Stars
            <span class="bg-gradient-to-r from-yellow-400 via-pink-400 to-purple-400 bg-clip-text text-transparent block">
                Revealed by the Cards
            </span>
        </h1>

        <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto py-8">
            Discover ancient wisdom and cosmic insights through our professional tarot and energy healing services
        </p>

        <div class="flex justify-right">
           <img
           id="silverStone"
    src="{{ asset('assets/images/silverStone.png') }}"
    alt="silverStone"
    class="absolute top-10 right-10 w-28 md:w-40 opacity-60"
/>
        </div>

    </div>
   
    {{-- Animated Stars Background --}}
    <div class="stars"></div>
    
    <!-- {{-- Decorative glowing orbs --}}
    <div class="absolute top-20 left-10 w-64 h-64 bg-purple-600 rounded-full filter blur-3xl opacity-20 animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-80 h-80 bg-pink-600 rounded-full filter blur-3xl opacity-20 animate-pulse delay-1000"></div> -->
    
    <div class="container mx-auto px-4 md:px-6 relative z-10">
        
        {{-- Section Header --}}
        <!-- <div class="text-center mb-16 md:mb-24">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-5 py-2 rounded-full mb-5">
                <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                <span class="text-sm font-medium text-yellow-300 uppercase tracking-wider">Cosmic Guidance</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-5 leading-tight">
                Guided by the Stars
                <span class="bg-gradient-to-r from-yellow-400 via-pink-400 to-purple-400 bg-clip-text text-transparent block md:inline">
                    Revealed by the Cards
                </span>
            </h1>
            <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Discover ancient wisdom and cosmic insights through our professional tarot and energy healing services
            </p>
            <div class="h-1 w-24 bg-gradient-to-r from-yellow-400 to-pink-500 rounded-full mx-auto mt-8"></div>
        </div> -->
        
        {{-- Stacking Cards Container --}}
        <div class="stack-container relative">
            
            {{-- CARD 1  --}}
            <div class="magic-card service-card card-1 z-[10]">
                <div class="card-inner min-h-[60vh]">
                    <div class="grid md:grid-cols-2 gap-6 md:gap-8 p-6 md:p-8">
                        {{-- Left Content --}}
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 flex-wrap">
                                <span class="card-number">01</span>
                                <div class="h-10 w-px bg-white/30"></div>
                                <span class="text-yellow-400 font-semibold tracking-wide">Premium Service</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold text-white leading-tight">Psychic Tarot<br>Readings</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Experience a deep and intuitive tarot reading that offers insight into the most pressing areas of your life.
                            </p>
                            <div class="space-y-3 pt-2">
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>60-Minute Session</span>
                                </div>
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    <span>Compatibility Analysis</span>
                                </div>
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                    </svg>
                                    <span>Yearly Forecast</span>
                                </div>
                            </div>
                            <a href="#" class="inline-flex items-center gap-2 mt-6 px-6 py-3 bg-gradient-to-r from-yellow-500 to-pink-500 text-white font-semibold rounded-full hover:shadow-xl transition-all duration-300 group hover:scale-105">
                                <span>Learn More</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                        
                        {{-- Right Image --}}
                        <div class="card-image relative aspect-square max-w-[280px] md:max-w-[350px] mx-auto">
                            <img 
                                src="{{ asset('assets/images/card1.jpg') }}"
                                alt="Tarot Cards Reading"
                                class="w-full h-full rounded-2xl shadow-2xl"
                            >
                            {{-- Image Overlay Gradient --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-purple-900/30 to-transparent rounded-2xl"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Spacer between cards (stacking space) --}}
           
            
            {{-- CARD 2 --}}
            <div class="magic-card service-card card-2 z-[20]">
                <div class="card-inner min-h-[60vh]">
                    <div class="grid md:grid-cols-2 gap-6 md:gap-8 p-6 md:p-8">
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 flex-wrap">
                                <span class="card-number">02</span>
                                <div class="h-10 w-px bg-white/30"></div>
                                <span class="text-yellow-400 font-semibold tracking-wide">Energy Healing</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold text-white leading-tight">Chakra<br>Balancing</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Your energy body is the foundation of your emotional and physical well-being. Through energy healing and chakra alignment, restore balance.
                            </p>
                            <div class="space-y-3 pt-2">
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    <span>Three-Card Spread Reading</span>
                                </div>
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>7 Chakra Energy Cleansing</span>
                                </div>
                            </div>
                            <a href="#" class="inline-flex items-center gap-2 mt-6 px-6 py-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold rounded-full hover:shadow-xl transition-all duration-300 group hover:scale-105">
                                <span>Purchase Now</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="card-image relative aspect-square max-w-[280px] md:max-w-[350px] mx-auto">
                            <img 
                                src="{{ asset('assets/images/card2.jpg') }}" 
                                alt="Chakra Balancing"
                                class="w-full h-full rounded-2xl shadow-2xl"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-purple-900/30 to-transparent rounded-2xl"></div>
                        </div>
                    </div>
                </div>
            </div>
            
         
            
            {{-- CARD 3 --}}
            <div class="magic-card service-card card-3 z-[30]">
                <div class="card-inner min-h-[60vh]">
                    <div class="grid md:grid-cols-2 gap-6 md:gap-8 p-6 md:p-8">
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 flex-wrap">
                                <span class="card-number">03</span>
                                <div class="h-10 w-px bg-white/30"></div>
                                <span class="text-yellow-400 font-semibold tracking-wide">Spiritual Guidance</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold text-white leading-tight">Astrology<br>Reading</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Discover your cosmic path with personalized astrology readings based on your birth chart and planetary positions.
                            </p>
                            <div class="space-y-3 pt-2">
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                    </svg>
                                    <span>Birth Chart Analysis</span>
                                </div>
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    <span>Planetary Transit Report</span>
                                </div>
                            </div>
                            <a href="#" class="inline-flex items-center gap-2 mt-6 px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-semibold rounded-full hover:shadow-xl transition-all duration-300 group hover:scale-105">
                                <span>Discover Now</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="card-image relative  aspect-square max-w-[280px] md:max-w-[350px] mx-auto">
                            <img 
                                src="{{ asset('assets/images/card3.jpg') }}" 
                                alt="Astrology Reading"
                                class="w-full h-full rounded-2xl shadow-2xl"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-purple-900/30 to-transparent rounded-2xl"></div>
                        </div>
                    </div>
                </div>
            </div>
            
          
            
            {{-- CARD 4 (Sabse upar - Last card) --}}
            <div class="magic-card service-card card-4 z-[40]">
                <div class="card-inner min-h-[60vh]">
                    <div class="grid md:grid-cols-2 gap-6 md:gap-8 p-6 md:p-8">
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 flex-wrap">
                                <span class="card-number">04</span>
                                <div class="h-10 w-px bg-white/30"></div>
                                <span class="text-yellow-400 font-semibold tracking-wide">Divine Connection</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold text-white leading-tight">Oracle Card<br>Reading</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Connect with divine messages and receive guidance through ancient oracle cards for clarity and direction.
                            </p>
                            <div class="space-y-3 pt-2">
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Divine Message Reading</span>
                                </div>
                                <div class="flex items-center gap-3 text-gray-300">
                                    <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    <span>Spiritual Pathway Guidance</span>
                                </div>
                            </div>
                            <a href="#" class="inline-flex items-center gap-2 mt-6 px-6 py-3 bg-gradient-to-r from-pink-500 to-rose-500 text-white font-semibold rounded-full hover:shadow-xl transition-all duration-300 group hover:scale-105">
                                <span>Book Session</span>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="card-image relative aspect-square max-w-[280px] md:max-w-[350px] mx-auto">
                            <img 
                                src="{{ asset('assets/images/card4.jpg') }}" 
                                alt="Oracle Card Reading"
                                class="w-full h-full rounded-2xl shadow-2xl"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-purple-900/30 to-transparent rounded-2xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       
    </div>
</section>
