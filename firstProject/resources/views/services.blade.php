<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Laravel App</h1>
            <div class="space-x-4">
                <a href="/" class="hover:text-blue-200">Home</a>
                <a href="/about" class="hover:text-blue-200">About</a>
                <a href="/services" class="hover:text-blue-200 text-blue-200">Services</a>
                <a href="/blog" class="hover:text-blue-200">Blog</a>
                <a href="/contact" class="hover:text-blue-200">Contact</a>
                <a href="/dashboard" class="hover:text-blue-200">Dashboard</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Our Services</h1>
            <p class="text-xl text-gray-600">We offer a variety of web development services.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Web Development</h3>
                <p class="text-gray-600 mb-4">Professional web development solutions tailored to your needs.</p>
                <p class="text-2xl font-bold text-blue-600 mb-4">Starting at $500</p>
                <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Learn More</button>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Mobile Apps</h3>
                <p class="text-gray-600 mb-4">Professional mobile apps solutions tailored to your needs.</p>
                <p class="text-2xl font-bold text-blue-600 mb-4">Starting at $800</p>
                <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Learn More</button>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">SEO Services</h3>
                <p class="text-gray-600 mb-4">Professional seo services solutions tailored to your needs.</p>
                <p class="text-2xl font-bold text-blue-600 mb-4">Starting at $300</p>
                <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Learn More</button>
            </div>
        </div>
    </div>
</body>
</html>
