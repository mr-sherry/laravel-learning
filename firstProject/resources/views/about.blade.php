<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Laravel App</h1>
        
            <div class="space-x-4">
                <a href="/" class="hover:text-blue-200">Home</a>
                <a href="/about" class="hover:text-blue-200 text-black">About</a>
                <a href="/services" class="hover:text-blue-200">Services</a>
                <a href="/blog" class="hover:text-blue-200">Blog</a>
                <a href="/contact" class="hover:text-blue-200">Contact</a>
                <a href="/dashboard" class="hover:text-blue-200">Dashboard</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">About Us</h1>
            <p class="text-xl text-gray-600 mb-8">Learn more about our company and mission.</p>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Story</h2>
                    <p class="text-gray-600 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                    <p class="text-gray-600">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Team</h2>
                    <ul class="space-y-2">
                        <li class="bg-gray-100 p-3 rounded">John Doe - CEO</li>
                        <li class="bg-gray-100 p-3 rounded">Jane Smith - CTO</li>
                        <li class="bg-gray-100 p-3 rounded">Mike Johnson - Lead Developer</li>
                        <li class="bg-gray-100 p-3 rounded">Sarah Wilson - Designer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
