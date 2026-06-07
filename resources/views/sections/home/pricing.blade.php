 <section class="relative py-24 md:py-32 px-5 md:px-8 overflow-hidden bg-[#FAF8F5] text-white font-sans antialiased star-bg">
    
    <!-- Mystical cosmic orbs & ambient glow -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
      <div class="absolute top-20 -left-32 w-96 h-96 bg-purple-700/20 rounded-full blur-3xl"></div>
      <div class="absolute bottom-10 right-0 w-80 h-80 bg-indigo-600/20 rounded-full blur-3xl"></div>
      <div class="absolute top-1/3 right-1/4 w-60 h-60 bg-fuchsia-800/10 rounded-full blur-2xl"></div>
      <div class="absolute -bottom-20 left-1/3 w-[500px] h-[300px] bg-violet-900/15 rounded-full blur-[100px]"></div>
    </div>
    
    <!-- Center container -->
    <div class="max-w-7xl mx-auto relative z-10">
      
       <!-- <div class="flex justify-end ">
    <img
        src="{{ asset('assets/images/moonimg.png') }}"
        alt="moon image"
        class="w-16 md:w-20 animate-pulse"
    >
</div> -->
      <!-- HEADER: Mystical title + subtitle with elegant touch -->
      <div class=" relative text-center mb-16 md:mb-24">

      <!-- image -->

         <div class="flex justify-end ">
    <img
        src="{{ asset('assets/images/moonimg.png') }}"
        alt="moon image"
        class="w-16 md:w-20 animate-pulse absolute right-1"
    >
</div>
        <!-- Sparkling badge -->
        <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-sm border border-purple-500/30 rounded-full px-4 py-1.5 mb-6 shadow-lg">
          <span class="relative flex h-2 w-2">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-purple-500"></span>
          </span>
          <span class="text-xs font-medium tracking-wider text-black uppercase">Arcane Guidance</span>
        </div>
        
        <!-- main heading with animated glow -->
        <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl font-bold bg-clip-text text-black  drop-shadow-2xl animate-glow-pulse">
          Unlock the Secrets<br>
          <span class="text-4xl md:text-5xl bg-gradient-to-r from-purple-300 to-indigo-200 bg-clip-text">of Your Future</span>
        </h1>
        
        <!-- elegant divider with cosmic symbol -->
        <div class="flex justify-center my-8">
          <div class="w-24 h-[2px] bg-gradient-to-r from-transparent via-purple-400 to-transparent"></div>
          <div class="mx-3 text-purple-300 text-xl">✦</div>
          <div class="w-24 h-[2px] bg-gradient-to-r from-transparent via-purple-400 to-transparent"></div>
        </div>
        
        <!-- description paragraph -->
        <p class="max-w-2xl mx-auto text-black text-lg md:text-xl leading-relaxed font-light">
          Dive into the mystical realm with our diverse range of services designed to offer guidance and clarity. 
          Our experienced fortune teller provides insightful Tarot Card Readings to uncover hidden truths and future possibilities.
        </p>
      </div>
      
      <!-- SERVICES GRID: 5 mystical services in elegant cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-7 md:gap-8">
        
        <!-- Card 1: Mediumship -->
        <div class="service-cards group relative bg-white/5 backdrop-blur-md rounded-2xl border border-white/10 p-6 text-center text-black transition-all duration-300 hover:border-purple-400/40 hover:bg-purple-900/10 shadow-xl">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-purple-600/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
          <!-- floating icon wrapper with animation -->
          <div class="relative w-20 h-20 mx-auto mb-5 flex items-center justify-center bg-gradient-to-br from-purple-800/60 to-indigo-900/60 rounded-2xl shadow-inner group-hover:scale-105 transition duration-300">
            <svg class="w-10 h-10 text-purple-200 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24" stroke="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z" fill="currentColor" opacity="0.9"/>
              <circle cx="12" cy="16.5" r="1.5" fill="#f3e8ff"/>
            </svg>
          </div>
          <h3 class="font-serif text-2xl font-semibold text-black mb-2 tracking-wide">Mediumship</h3>
          <p class="text-black text-sm leading-relaxed">
            Experience the healing and comfort of connecting with departed loved ones. Bridge the spiritual realm.
          </p>
          <div class="mt-5 inline-flex items-center gap-1 text-xs text-black group-hover:text-black transition">
            <span>Discover messages</span>
            <svg class="w-3 h-3 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </div>
        </div>
        
        <!-- Card 2: Numerology (with mystical number motif) -->
        <div class="service-cards group relative bg-white/5 backdrop-blur-md rounded-2xl border border-white/10 p-6 text-center transition-all duration-300 hover:border-purple-400/40 hover:bg-purple-900/10 shadow-xl">
          <div class="w-20 h-20 mx-auto mb-5 flex items-center justify-center bg-gradient-to-br from-fuchsia-800/60 to-indigo-900/60 rounded-2xl shadow-inner group-hover:scale-105 transition">
            <svg class="w-10 h-10 text-fuchsia-200" fill="currentColor" viewBox="0 0 24 24">
              <path d="M4 6h16v2H4zm2-4h12v2H6zm14 8H4v8c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-8zm-8 4h-4v-2h4v2zm6 0h-4v-2h4v2z" fill="currentColor" opacity="0.9"/>
              <text x="12" y="16" font-size="10" text-anchor="middle" fill="#f3e8ff" font-weight="bold">123</text>
            </svg>
          </div>
          <h3 class="font-serif text-2xl font-semibold text-black mb-2">Numerology</h3>
          <p class="text-black text-sm leading-relaxed">
            Delve into the mystical world of Numerology and discover the secrets encoded within your name and birth path.
          </p>
          <div class="mt-5 inline-flex items-center gap-1 text-xs text-black group-hover:text-black transition">
            <span>Calculate destiny</span>
            <svg class="w-3 h-3 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </div>
        </div>
        
        <!-- Card 3: Astrology -->
        <div class="service-cards group relative bg-white/5 backdrop-blur-md rounded-2xl border border-white/10 p-6 text-center transition-all duration-300 hover:border-purple-400/40 hover:bg-purple-900/10 shadow-xl">
          <div class="w-20 h-20 mx-auto mb-5 flex items-center justify-center bg-gradient-to-br from-purple-800/60 to-sky-800/60 rounded-2xl shadow-inner group-hover:scale-105 transition">
            <svg class="w-10 h-10 text-purple-200" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 4c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zm0 13c-2.33 0-4.31-1.46-5.11-3.5h10.22c-.8 2.04-2.78 3.5-5.11 3.5z" fill="currentColor"/>
              <circle cx="12" cy="8" r="1" fill="#fff9db"/>
            </svg>
          </div>
          <h3 class="font-serif text-2xl font-semibold text-black mb-2">Astrology</h3>
          <p class="text-black text-sm leading-relaxed">
            Explore the stars and discover the influence of celestial bodies on your life’s journey. Cosmic wisdom awaits.
          </p>
          <div class="mt-5 inline-flex items-center gap-1 text-xs text-black group-hover:text-black transition">
            <span>Read your chart</span>
            <svg class="w-3 h-3 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </div>
        </div>
        
        <!-- Card 4: Rune Reading -->
        <div class="service-cards group relative bg-white/5 backdrop-blur-md rounded-2xl border border-white/10 p-6 text-center transition-all duration-300 hover:border-purple-400/40 hover:bg-purple-900/10 shadow-xl">
          <div class="w-20 h-20 mx-auto mb-5 flex items-center justify-center bg-gradient-to-br from-amber-800/60 to-purple-900/60 rounded-2xl shadow-inner group-hover:scale-105 transition">
            <svg class="w-10 h-10 text-amber-200" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="1.2" fill="none"/>
              <path d="M7 9.5L12 12l5-2.5" stroke="currentColor" stroke-width="1.2" fill="none"/>
              <circle cx="12" cy="12" r="1.5" fill="#f5e6b0"/>
            </svg>
          </div>
          <h3 class="font-serif text-2xl font-semibold text-black mb-2">Rune Reading</h3>
          <p class="text-black text-sm leading-relaxed">
            Unlock ancient wisdom and find the powerful symbols of the runes. Guidance from elder traditions.
          </p>
          <div class="mt-5 inline-flex items-center gap-1 text-xs text-black group-hover:text-black transition">
            <span>Cast the runes</span>
            <svg class="w-3 h-3 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </div>
        </div>
        
        <!-- Card 5: Tarot Card Reading (Hero service) -->
        <div class="service-cards group relative  bg-white/5 backdrop-blur-md rounded-2xl border border-white/10 p-6 text-center transition-all duration-300 hover:border-purple-400/40 hover:bg-purple-900/10 shadow-xl">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-tr from-purple-600/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
          <!-- glowing icon -->
          <div class="relative w-20 h-20 mx-auto mb-5 flex items-center justify-center bg-gradient-to-br from-[#a855f7] to-[#6b21a5] rounded-2xl shadow-lg shadow-purple-500/30 group-hover:shadow-purple-400/50 transition duration-300">
            <svg class="w-10 h-10 text-white drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
            </svg>
          </div>
          <h3 class="font-serif text-2xl font-semibold text-black mb-2">Tarot Reading</h3>
          <p class="text-black text-sm leading-relaxed font-medium">
            Insightful Tarot Card Readings to uncover hidden truths, future possibilities, and spiritual alignment.
          </p>
          <div class="mt-5 inline-flex items-center gap-1 text-xs font-semibold text-black group-hover:text-black transition">
            <span>Draw your cards</span>
            <svg class="w-3 h-3 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </div>
          <div class="absolute -top-px left-5 right-5 h-px bg-gradient-to-r from-transparent via-purple-400 to-transparent opacity-0 group-hover:opacity-100 transition"></div>
        </div>
        
      </div> <!-- end grid -->
      
      <!-- decorative cosmic border + CTA (optional but adds professionalism) -->
      <div class="mt-20  justify-center gap-5 items-center">
        <div class="border-t border-white/10 w-full max-w-md mx-auto"></div>
        <div class="flex flex-wrap gap-6 justify-center">
          <a href="#" class="group relative inline-flex items-center gap-2 px-8 py-3 bg-gradient-to-r from-purple-700 to-indigo-800 rounded-full text-sm font-medium tracking-wide shadow-lg shadow-purple-900/40 hover:shadow-purple-600/50 transition-all duration-300 hover:scale-[1.02]">
            <span>Book a private session</span>
            <svg class="w-4 h-4 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
          </a>
          <a href="#" class="px-6 py-3 border text-black border-purple-400/40 rounded-full text-sm font-medium hover:bg-white/5 transition backdrop-blur-sm">
            Explore all services
          </a>
        </div>
        <!-- ancient symbol aesthetic -->
        <div class="flex justify-center mt-6 opacity-60 text-xs tracking-widest text-black">✧ 𓃥  mystical guidance  𓋴 ✧</div>
      </div>
      
    </div>
  </section>