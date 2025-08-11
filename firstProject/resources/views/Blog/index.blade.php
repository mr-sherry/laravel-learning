<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Laravel App</title>
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
                <a href="/services" class="hover:text-blue-200">Services</a>
                <a href="/blog" class="hover:text-blue-200 text-blue-200">Blog</a>
                <a href="/contact" class="hover:text-blue-200">Contact</a>
                <a href="/dashboard" class="hover:text-blue-200">Dashboard</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Blog Posts</h1>
            <p class="text-xl text-gray-600">Latest articles and tutorials.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Getting Started with Laravel</h3>
                <p class="text-gray-600 mb-4">Learn the basics of Laravel framework and start building amazing web applications.</p>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-sm">March 15, 2024</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Read More</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">PHP Best Practices</h3>
                <p class="text-gray-600 mb-4">Writing clean, maintainable PHP code that follows industry standards.</p>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-sm">March 10, 2024</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Read More</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Database Design Tips</h3>
                <p class="text-gray-600 mb-4">Optimize your database structure for better performance and scalability.</p>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-sm">March 5, 2024</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Read More</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-3">Tailwind CSS Guide</h3>
                <p class="text-gray-600 mb-4">Master utility-first CSS framework for rapid UI development.</p>
                <div class="flex justify-between items-center">
                    <span class="text-gray-500 text-sm">February 28, 2024</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Read More</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>