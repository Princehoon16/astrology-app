<section class="relative overflow-hidden bg-[#FAF8F5] py-16 md:py-24">
    <div class="container mx-auto px-4 md:px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16">
            
        {{-- GoldStone Image - Top Left Corner --}}
                    <div class="absolute  md:top-10 md:left-10 z-20">
                        <div class="goldstone-container">
                            <img 
                                id="goldStone"
                                src="{{ asset('assets/images/goldStone.png') }}" 
                                alt="Gold Stone" 
                                class="w-50 h-auto"
                                
                            >
                        </div>
                    </div>
            {{-- Left Column: Rotating Image (No Background, No Shadow) --}}
            <div class="relative flex-shrink-0 lg:w-1/2 flex justify-center">
                {{-- Floating orbs for mystical effect --}}
                <div class="absolute -top-10 -left-10 w-32 h-32 bg-purple-200 rounded-full opacity-60 blur-2xl"></div>
                <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-pink-200 rounded-full opacity-60 blur-2xl"></div>
                
                {{-- Rotating Image Container - No Background, No Shadow --}}
                <div class="rotating-image">
                    <img 
                        src="{{ asset('assets/images/astrologymap.png') }}" 
                        alt="Astrological Map - Mystical Star Guide" 
                        class="w-[300px] md:w-[450px] lg:w-[500px] object-contain"
                        style="filter: drop-shadow(0 0 10px rgba(99, 102, 241, 0.3));"
                        loading="lazy"
                    >
                </div>

                 
                
                {{-- Decorative star --}}
                <div class="absolute -top-5 -right-5 md:-top-8 md:-right-8">
                    <svg class="w-10 h-10 md:w-14 md:h-14 text-yellow-400 opacity-70" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0L12.2451 6.90983H19.5106L13.6327 11.1803L15.8779 18.0902L10 13.8197L4.12215 18.0902L6.36729 11.1803L0.489435 6.90983H7.75486L10 0Z" />
                    </svg>
                </div>
            </div>
            
            {{-- Right Column: Content + Second Image --}}
            <div class="flex-1 lg:w-1/2 space-y-8">
                {{-- Title Section --}}
                <div class="space-y-4">
                    <div class="inline-flex items-center gap-2 bg-indigo-100/80 backdrop-blur-sm px-4 py-2 rounded-full">
                        <span class="w-2 h-2 bg-indigo-600 rounded-full animate-pulse"></span>
                        <span class="text-sm font-medium text-indigo-700 uppercase tracking-wide">Ancient Wisdom</span>
                    </div>
                    
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                        <span class="bg-gradient-to-r from-indigo-900 via-purple-800 to-pink-700 bg-clip-text text-transparent">
                            Mysteries of Life
                        </span>
                        <br>
                        <span class="text-gray-800">with a Star Guide & the Cosmos Horoscope</span>
                    </h1>
                    
                    <p class="text-lg md:text-xl text-gray-600 leading-relaxed">
                        Whether you seek guidance on love, career, or personal growth, each card drawn will bring clarity and wisdom.
                    </p>
                    
                    <div class="h-1 w-20 bg-gradient-to-r from-indigo-500 to-pink-500 rounded-full"></div>
                </div>
                
                {{-- Call to Action --}}
                <div class="flex flex-wrap gap-4">
                    <a href="#" class="group relative inline-flex items-center gap-2 px-8 py-3 bg-indigo-600 text-white font-semibold rounded-full overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                        <span class="relative z-10">Connect with Tarot</span>
                        <svg class="relative z-10 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity rounded-full"></div>
                    </a>
                    
                    <a href="#" class="inline-flex items-center gap-2 px-8 py-3 bg-white/80 backdrop-blur-sm text-gray-700 font-semibold rounded-full shadow-md hover:shadow-lg transition-all duration-300 hover:bg-white border border-gray-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>Learn More</span>
                    </a>
                </div>
                
                {{-- Stats/Features Row --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 pt-4 border-t border-gray-200/50">
                    <div class="space-y-1">
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-bold text-indigo-600">+15</span>
                            <span class="text-gray-500 text-sm">Years</span>
                        </div>
                        <p class="text-sm text-gray-500">Reading the Future with Tarot</p>
                    </div>
                    
                    <div class="space-y-1">
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-bold text-indigo-600">271</span>
                            <span class="text-gray-500 text-sm">Guides</span>
                        </div>
                        <p class="text-sm text-gray-500">Spiritual experts to turn to</p>
                    </div>
                    
                    <div class="space-y-1 col-span-2 md:col-span-1">
                        <div class="flex items-center gap-1">
                            <span class="text-3xl font-bold text-indigo-600">∞</span>
                            <span class="text-gray-500 text-sm">Wisdom</span>
                        </div>
                        <p class="text-sm text-gray-500">Present the day with clarity</p>
                    </div>
                </div>
                
                {{-- Spiritual Benefits Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="flex items-start gap-3 p-3 rounded-xl bg-white/40 backdrop-blur-sm border border-white/50">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-700">Tarot cards offer a sanctuary for spiritual practices & reading</p>
                    </div>
                    
                    <div class="flex items-start gap-3 p-3 rounded-xl bg-white/40 backdrop-blur-sm border border-white/50">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-700">Enhancing mystical experiences & spiritual connection</p>
                    </div>
                    
                    <div class="flex items-start gap-3 p-3 rounded-xl bg-white/40 backdrop-blur-sm border border-white/50 sm:col-span-2">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <p class="text-sm text-gray-700">Bringing people together, connecting souls through ancient wisdom</p>
                    </div>
                </div>
                
               
            </div>
        </div>
    </div>
    
    {{-- Background Decorative Elements --}}
    <div class="absolute top-1/2 left-0 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
</section>