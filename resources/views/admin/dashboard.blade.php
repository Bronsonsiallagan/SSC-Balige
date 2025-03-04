<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tambahkan Tailwind dengan konfigurasi langsung -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
 
<div class="flex">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 h-screen text-white">
        <div class="p-4 text-center text-xl font-bold border-b border-gray-700">Admin Panel</div>
        <ul class="mt-4">
            <li class="p-4 hover:bg-gray-700">
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="p-4 hover:bg-gray-700">
                <a href="#">Users</a>
            </li>
            <li class="p-4 hover:bg-gray-700">
                <a href="#">Settings</a>
            </li>
            <li class="p-4 hover:bg-gray-700">
                <a href="#">Logout</a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-2xl font-bold">Welcome to Admin Dashboard</h2>
            <p class="text-gray-600 mt-2">Manage your website efficiently.</p>
        </div>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-3 gap-6 mt-6">
            <div class="bg-blue-500 text-white p-4 rounded shadow">
                <h3 class="text-xl">Total Users</h3>
                <p class="text-3xl font-bold">120</p>
            </div>
            <div class="bg-green-500 text-white p-4 rounded shadow">
                <h3 class="text-xl">Total Orders</h3>
                <p class="text-3xl font-bold">45</p>
            </div>
            <div class="bg-red-500 text-white p-4 rounded shadow">
                <h3 class="text-xl">Pending Requests</h3>
                <p class="text-3xl font-bold">7</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
