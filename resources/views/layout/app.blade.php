<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management System')</title>
    @vite('resources/css/app.css')
   

    <script>
        function toggleSidebar() {
            document.getElementById("sidebar").classList.toggle("-translate-x-full");
        }
    </script>
</head>
<body class="bg-gray-100">

  
    <header class="bg-blue-600 text-white shadow-md p-4 flex justify-between items-center fixed w-full top-0 z-10">
 
        <button class="md:hidden text-white text-2xl" onclick="toggleSidebar()">☰</button>

   
        <h1 class="text-xl font-semibold flex-1 text-center">Student Management System</h1>
    </header>

    <div class="flex pt-16">

        <aside id="sidebar" class="w-64 bg-blue-500 text-white fixed md:relative h-screen transition-transform transform -translate-x-full md:translate-x-0 flex flex-col p-5 shadow-lg">
            <h2 class="text-2xl font-bold mb-6">📘 Student System</h2>
            <nav>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('students.index') }}" class="block py-3 px-4 rounded-lg hover:bg-blue-600 transition">
                            📚 Students
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('courses.index') }}" class="block py-3 px-4 rounded-lg hover:bg-blue-600 transition">
                            🎓 Courses
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block py-3 px-4 rounded-lg hover:bg-blue-600 transition">
                            ⚙️ Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

   
        <div class="flex-1 flex flex-col transition-all duration-300 p-6 bg-white shadow rounded-lg overflow-y-auto">
            @yield('content')
        </div>

    </div>

</body>
</html>
