@extends('layouts.app')

@section('content')

        <!-- Authenticated User Dashboard -->
        <div class="animate-fade-in">


        <!-- Unauthenticated User Landing Page -->
        <!-- Hero Section -->
        <section class="text-center py-10 sm:py-16 bg-gradient-to-r from-indigo-50 to-blue-50 animate-fade-in">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-800 mb-4">Welcome to TopLearner</h1>
                <p class="text-base sm:text-lg text-gray-600 mb-6 sm:mb-8 max-w-xl mx-auto">A Communication Learning Platform to empower you with world-class courses and resources.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4">
                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700 hover:scale-105 transition-transform">Get Started</a>
                    <a href="#" class="inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base font-medium text-indigo-600 bg-white border border-indigo-600 rounded-md hover:bg-indigo-50 hover:scale-105 transition-transform">Explore Courses</a>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section class="py-10 sm:py-16">
            <div class="max-w-5xl mx-auto px-4 text-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">About TopLearner</h2>
                <p class="text-sm sm:text-base text-gray-600 mb-8 sm:mb-12 max-w-3xl mx-auto">TopLearner is dedicated to transforming lives through effective communication skills. Our platform offers curated courses designed by experts to help you excel in personal and professional interactions.</p>
            </div>
            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
                    <i class="ph-graduation-cap text-3xl sm:text-4xl text-indigo-600 mb-4"></i>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Expert-Led Courses</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">Learn from industry leaders with years of experience.</p>
                </div>
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
                    <i class="ph-globe text-3xl sm:text-4xl text-indigo-600 mb-4"></i>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Global Community</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">Join learners from around the world.</p>
                </div>
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm text-center hover:shadow-md transition-shadow">
                    <i class="ph-certificate text-3xl sm:text-4xl text-indigo-600 mb-4"></i>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Certified Learning</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">Earn certificates to showcase your skills.</p>
                </div>
            </div>
        </section>

        <!-- Course Modules Section -->
        <section class="py-10 sm:py-16 bg-gray-50">
            <div class="max-w-5xl mx-auto px-4 text-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">Course Modules</h2>
                <p class="text-sm sm:text-base text-gray-600 mb-8 sm:mb-12 max-w-3xl mx-auto">Discover a wide range of courses designed to enhance your communication skills.</p>
            </div>
            <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-32 sm:h-40 bg-gray-200 rounded-md mb-4"></div> <!-- Placeholder for course image -->
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Public Speaking</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">Master the art of delivering impactful speeches.</p>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block text-sm sm:text-base">Learn More</a>
                </div>
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-32 sm:h-40 bg-gray-200 rounded-md mb-4"></div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Business Communication</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">Enhance your professional communication skills.</p>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block text-sm sm:text-base">Learn More</a>
                </div>
                <div class="bg-white p-4 sm:p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="h-32 sm:h-40 bg-gray-200 rounded-md mb-4"></div>
                    <h3 class="text-lg sm:text-xl font-semibold text-gray-800">Interpersonal Skills</h3>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">Build stronger relationships through effective communication.</p>
                    <a href="#" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block text-sm sm:text-base">Learn More</a>
                </div>
            </div>
        </section>

        <!-- Contact Us Section -->
        <section class="py-10 sm:py-16">
            <div class="max-w-5xl mx-auto px-4 text-center">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">Contact Us</h2>
                <p class="text-sm sm:text-base text-gray-600 mb-8 sm:mb-12 max-w-3xl mx-auto">Have questions? Reach out to our team for support.</p>
            </div>
            <div class="max-w-md mx-auto px-4">
                <form action="#" method="POST" class="bg-white p-4 sm:p-6 rounded-lg shadow-sm">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md p-2 sm:p-3 focus:ring-indigo-600 focus:border-indigo-600 text-sm sm:text-base" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2 sm:p-3 focus:ring-indigo-600 focus:border-indigo-600 text-sm sm:text-base" required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md p-2 sm:p-3 focus:ring-indigo-600 focus:border-indigo-600 text-sm sm:text-base" required></textarea>
                        @error('message')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-2 sm:py-3 rounded-md hover:bg-indigo-700 hover:scale-105 transition-transform text-sm sm:text-base">Send Message</button>
                </form>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="py-10 sm:py-16 bg-indigo-600 text-white text-center">
            <div class="max-w-4xl mx-auto px-4">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">Start Your Learning Journey Today</h2>
                <p class="text-base sm:text-lg mb-6 sm:mb-8 max-w-xl mx-auto">Join TopLearner and unlock a world of knowledge with our communication-focused courses.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4">
                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base font-medium text-indigo-600 bg-white rounded-md hover:bg-gray-100 hover:scale-105 transition-transform">Join Now</a>
                    <a href="#" class="inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 text-sm sm:text-base font-medium text-white border border-white rounded-md hover:bg-indigo-700 hover:scale-105 transition-transform">Contact Us</a>
                </div>
            </div>
        </section>

@endsection

<style>
    .animate-fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
