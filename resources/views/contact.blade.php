<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Us - {{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen flex flex-col">
        <header class="w-full max-w-4xl mx-auto px-6 lg:px-8 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">
                {{ config('app.name', 'Laravel') }}
            </a>
            <nav class="flex gap-4 text-sm">
                <a href="{{ route('home') }}" class="hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">
                    Home
                </a>
            </nav>
        </header>

        <main class="flex-1 w-full max-w-4xl mx-auto px-6 lg:px-8 py-12">
            <div class="mb-8">
                <h1 class="text-3xl font-bold mb-2">Contact Us</h1>
                <p class="text-[#706f6c] dark:text-[#A1A09A] leading-relaxed">
                    Have a question or want to work together? Fill out the form below and we'll get back to you as soon as possible.
                </p>
            </div>

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg">
                    <p class="text-green-800 dark:text-green-200 text-sm">
                        {{ session('success') }}
                    </p>
                </div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2">
                            Name
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            class="w-full px-4 py-2.5 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:ring-2 focus:ring-[#f53003] dark:focus:ring-[#FF4433] focus:border-transparent transition-colors"
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium mb-2">
                            Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            class="w-full px-4 py-2.5 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:ring-2 focus:ring-[#f53003] dark:focus:ring-[#FF4433] focus:border-transparent transition-colors"
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="subject" class="block text-sm font-medium mb-2">
                        Subject
                    </label>
                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        value="{{ old('subject') }}"
                        required
                        class="w-full px-4 py-2.5 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:ring-2 focus:ring-[#f53003] dark:focus:ring-[#FF4433] focus:border-transparent transition-colors"
                    >
                    @error('subject')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium mb-2">
                        Message
                    </label>
                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        required
                        class="w-full px-4 py-2.5 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg bg-[#FDFDFC] dark:bg-[#161615] text-[#1b1b18] dark:text-[#EDEDEC] focus:outline-none focus:ring-2 focus:ring-[#f53003] dark:focus:ring-[#FF4433] focus:border-transparent transition-colors resize-y"
                    >{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-2">
                    <button
                        type="submit"
                        class="inline-flex items-center px-6 py-2.5 bg-[#1b1b18] dark:bg-[#EDEDEC] border border-black dark:border-[#3E3E3A] rounded-lg text-white dark:text-[#1b1b18] font-medium hover:bg-black dark:hover:bg-white focus:outline-none focus:ring-2 focus:ring-[#f53003] dark:focus:ring-[#FF4433] transition-colors"
                    >
                        Send Message
                    </button>
                </div>
            </form>
        </main>

        <footer class="w-full max-w-4xl mx-auto px-6 lg:px-8 py-6 text-center text-sm text-[#706f6c] dark:text-[#A1A09A]">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
        </footer>
    </body>
</html>
