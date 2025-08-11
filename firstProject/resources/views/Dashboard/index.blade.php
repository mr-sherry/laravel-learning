<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Laravel App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Laravel App</h1>
            <div class="space-x-4">
                <a href="/" class="hover:text-blue-200">Home</a>
                <a href="/about" class="hover:text-blue-200">About</a>
                <a href="/services" class="hover:text-blue-200">Services</a>
                <a href="/blog" class="hover:text-blue-200">Blog</a>
                <a href="/contact" class="hover:text-blue-200">Contact</a>
                <a href="/dashboard" class="hover:text-blue-200 text-blue-200">Dashboard</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Dashboard</h1>
            <p class="text-xl text-gray-600">Overview of your application statistics.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-medium mb-2">Total Users</h3>
                <p class="text-3xl font-bold">1,250</p>
                <p class="text-blue-100 text-sm">↗ +12% from last month</p>
            </div>
            <div class="bg-gradient-to-r from-green-500 to-green-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-medium mb-2">Orders</h3>
                <p class="text-3xl font-bold">340</p>
                <p class="text-green-100 text-sm">↗ +8% from last month</p>
            </div>
            <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-medium mb-2">Revenue</h3>
                <p class="text-3xl font-bold">$45,230</p>
                <p class="text-purple-100 text-sm">↗ +15% from last month</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Recent Activity</h2>
            <div class="space-y-4">
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                    <div class="flex-1">
                        <p class="text-gray-800">New user registered</p>
                        <p class="text-gray-500 text-sm">2 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                    <div class="flex-1">
                        <p class="text-gray-800">Order #1234 completed</p>
                        <p class="text-gray-500 text-sm">15 minutes ago</p>
                    </div>
                </div>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <div class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></div>
                    <div class="flex-1">
                        <p class="text-gray-800">Payment received</p>
                        <p class="text-gray-500 text-sm">1 hour ago</p>
                    </div>
                </div>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                    <div class="w-2 h-2 bg-purple-500 rounded-full mr-3"></div>
                    <div class="flex-1">
                        <p class="text-gray-800">System backup completed</p>
                        <p class="text-gray-500 text-sm">3 hours ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>