<section class="py-24 md:py-32 bg-white">
        <div class="px-5 md:px-8 mx-auto max-w-7xl">
            
            <!-- Section Header -->
            <div class="text-center mb-12 md:mb-16">
                <!-- Decorative badge -->
                <div class="inline-flex items-center gap-2 bg-purple-50 border border-purple-100 rounded-full px-4 py-1.5 mb-5">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-60"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-purple-500"></span>
                    </span>
                    <span class="text-xs font-semibold tracking-wider text-purple-700 uppercase">Get in Touch</span>
                </div>
                
                <h2 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 tracking-tight">
                    Let's Connect<span class="text-purple-600">.</span>
                </h2>
                <div class="flex justify-center my-6">
                    <div class="w-16 h-0.5 bg-purple-200 rounded-full"></div>
                    <div class="mx-3 text-purple-300 text-xl">✦</div>
                    <div class="w-16 h-0.5 bg-purple-200 rounded-full"></div>
                </div>
                <p class="max-w-2xl mx-auto text-gray-600 text-base md:text-lg font-light">
                    Have questions about our mystical services? Need guidance? We're here to help you on your spiritual journey.
                </p>
            </div>
            
            <!-- Contact Grid: Form + Info Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12">
                
                <!-- LEFT SIDE: Contact Form -->
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 md:p-8">
                    <h3 class="font-serif text-2xl font-bold text-gray-800 mb-2">Send Us a Message</h3>
                    <p class="text-gray-500 text-sm mb-6">We'll respond within 24 hours</p>
                    
                    <form id="contactForm" class="space-y-5">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-purple-400 input-focus transition-all duration-200 bg-gray-50/50"
                                placeholder="Enter your full name">
                        </div>
                        
                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-purple-400 input-focus transition-all duration-200 bg-gray-50/50"
                                placeholder="you@example.com">
                        </div>
                        
                        <!-- Phone Field (Optional) -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number <span class="text-gray-400 text-xs">(Optional)</span></label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-purple-400 input-focus transition-all duration-200 bg-gray-50/50"
                                placeholder="+1 234 567 890">
                        </div>
                        
                        <!-- Service Interest Dropdown -->
                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Interested In <span class="text-red-500">*</span></label>
                            <select id="service" name="service" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-purple-400 input-focus transition-all duration-200 bg-gray-50/50">
                                <option value="">Select a service</option>
                                <option value="tarot">Tarot Card Reading</option>
                                <option value="mediumship">Mediumship</option>
                                <option value="numerology">Numerology</option>
                                <option value="astrology">Astrology</option>
                                <option value="rune">Rune Reading</option>
                                <option value="other">Other / General Inquiry</option>
                            </select>
                        </div>
                        
                        <!-- Message Field -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your Message <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:border-purple-400 input-focus transition-all duration-200 bg-gray-50/50 resize-none"
                                placeholder="Tell us how we can assist you..."></textarea>
                        </div>
                        
                        <!-- Submit Button with loading state -->
                        <button type="submit" id="submitBtn"
                            class="submit-btn w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3.5 px-6 rounded-xl transition-all duration-300 flex items-center justify-center gap-2 shadow-md">
                            <span id="btnText">Send Message</span>
                            <svg id="btnIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </button>
                        
                        <!-- Success/Error Message -->
                        <div id="formMessage" class="hidden mt-4 p-3 rounded-lg text-sm"></div>
                    </form>
                </div>
                
                <!-- RIGHT SIDE: Contact Info Cards & Map -->
                <div class="space-y-6">
                    <!-- Contact Info Cards Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <!-- Card 1: Email -->
                        <div class="contact-card bg-gradient-to-br from-purple-50 to-white rounded-xl p-5 border border-purple-100 shadow-sm">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-envelope text-purple-600 text-xl"></i>
                            </div>
                            <h4 class="font-semibold text-gray-800 mb-1">Email Us</h4>
                            <p class="text-gray-500 text-sm mb-2">We'll reply within 24h</p>
                            <a href="mailto:hello@mysticalguidance.com" class="text-purple-600 text-sm hover:underline">hello@mysticalguidance.com</a>
                        </div>
                        
                        <!-- Card 2: Phone -->
                        <div class="contact-card bg-gradient-to-br from-purple-50 to-white rounded-xl p-5 border border-purple-100 shadow-sm">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-phone-alt text-purple-600 text-xl"></i>
                            </div>
                            <h4 class="font-semibold text-gray-800 mb-1">Call Us</h4>
                            <p class="text-gray-500 text-sm mb-2">Mon-Fri 9am-6pm</p>
                            <a href="tel:+15551234567" class="text-purple-600 text-sm hover:underline">+1 (555) 123-4567</a>
                        </div>
                        
                        <!-- Card 3: Location -->
                        <div class="contact-card bg-gradient-to-br from-purple-50 to-white rounded-xl p-5 border border-purple-100 shadow-sm">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-map-marker-alt text-purple-600 text-xl"></i>
                            </div>
                            <h4 class="font-semibold text-gray-800 mb-1">Visit Us</h4>
                            <p class="text-gray-500 text-sm">123 Mystic Avenue<br>Sedona, AZ 86336</p>
                        </div>
                        
                        <!-- Card 4: Hours -->
                        <div class="contact-card bg-gradient-to-br from-purple-50 to-white rounded-xl p-5 border border-purple-100 shadow-sm">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-clock text-purple-600 text-xl"></i>
                            </div>
                            <h4 class="font-semibold text-gray-800 mb-1">Hours</h4>
                            <p class="text-gray-500 text-sm">Mon-Fri: 9am - 8pm<br>Sat-Sun: 10am - 5pm</p>
                        </div>
                    </div>
                    
                    <!-- Social Media Links -->
                    <div class="bg-white rounded-xl border border-gray-100 p-6 shadow-sm">
                        <h4 class="font-serif text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                            <i class="fas fa-share-alt text-purple-500"></i>
                            Connect With Us
                        </h4>
                        <div class="flex gap-4">
                            <a href="#" class="social-icon w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-purple-100 transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-purple-100 transition-all">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-icon w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-purple-100 transition-all">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-purple-100 transition-all">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="social-icon w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-purple-100 transition-all">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                        <p class="text-xs text-gray-400 mt-4">Follow us for daily mystical insights and special offers</p>
                    </div>
                    
                    <!-- Mini Map / Location Preview -->
                    <div class="rounded-xl overflow-hidden border border-gray-100 shadow-sm h-48">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d209522.39479759583!2d-111.88587461521084!3d34.86254000747544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872da132f942b00d%3A0x5548c523fa6c8efd!2sSedona%2C%20AZ%2086336!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
            
            <!-- FAQ / Additional Support Section -->
            <div class="mt-20 pt-8 border-t border-gray-100">
                <div class="text-center mb-10">
                    <h3 class="font-serif text-2xl md:text-3xl font-bold text-gray-800">Frequently Asked Questions</h3>
                    <div class="flex justify-center my-4">
                        <div class="w-12 h-0.5 bg-purple-200 rounded-full"></div>
                    </div>
                    <p class="text-gray-500">Quick answers to common questions</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                    <div class="p-4 rounded-xl hover:bg-purple-50/30 transition">
                        <h4 class="font-semibold text-gray-800 mb-2 flex items-center gap-2">
                            <i class="fas fa-crown text-purple-500 text-sm"></i>
                            What services do you offer?
                        </h4>
                        <p class="text-gray-500 text-sm">Tarot, Mediumship, Numerology, Astrology, Rune Reading, and personalized spiritual guidance sessions.</p>
                    </div>
                    <div class="p-4 rounded-xl hover:bg-purple-50/30 transition">
                        <h4 class="font-semibold text-gray-800 mb-2 flex items-center gap-2">
                            <i class="fas fa-clock text-purple-500 text-sm"></i>
                            How soon can I expect a response?
                        </h4>
                        <p class="text-gray-500 text-sm">We typically respond within 24 hours during business days. For urgent matters, please call us.</p>
                    </div>
                    <div class="p-4 rounded-xl hover:bg-purple-50/30 transition">
                        <h4 class="font-semibold text-gray-800 mb-2 flex items-center gap-2">
                            <i class="fas fa-video text-purple-500 text-sm"></i>
                            Do you offer online sessions?
                        </h4>
                        <p class="text-gray-500 text-sm">Yes! All our services are available via Zoom, Skype, or phone call for your convenience.</p>
                    </div>
                    <div class="p-4 rounded-xl hover:bg-purple-50/30 transition">
                        <h4 class="font-semibold text-gray-800 mb-2 flex items-center gap-2">
                            <i class="fas fa-lock text-purple-500 text-sm"></i>
                            Is my information confidential?
                        </h4>
                        <p class="text-gray-500 text-sm">Absolutely. We maintain strict confidentiality and never share your personal data with third parties.</p>
                    </div>
                </div>
            </div>
            
            <!-- Newsletter Signup CTA -->
            <div class="mt-16 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-2xl p-8 md:p-10 text-center border border-purple-100">
                <div class="max-w-2xl mx-auto">
                    <i class="fas fa-star-of-life text-purple-500 text-3xl mb-3"></i>
                    <h3 class="font-serif text-2xl md:text-3xl font-bold text-gray-800 mb-2">Stay Connected</h3>
                    <p class="text-gray-600 mb-5">Subscribe to receive mystical insights, special offers, and spiritual guidance directly in your inbox.</p>
                    <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                        <input type="email" placeholder="Your email address" 
                            class="flex-1 px-4 py-3 border border-gray-200 rounded-xl focus:border-purple-400 input-focus bg-white">
                        <button class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-xl transition-all">
                            Subscribe
                        </button>
                    </div>
                    <p class="text-xs text-gray-400 mt-3">✨ No spam, unsubscribe anytime ✨</p>
                </div>
            </div>
        </div>
    </section>
