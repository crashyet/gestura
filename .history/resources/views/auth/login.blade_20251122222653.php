<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth - Gestura</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .tab-active {
            @apply border-b-2 border-blue-500 text-blue-500;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">

<div class="flex items-center justify-center min-h-screen px-4">

    <div class="bg-gray-800 p-8 rounded-xl w-full max-w-md shadow-xl">

        <!-- NAV TAB -->
        <div class="flex justify-center mb-6 border-b border-gray-600">
            <button id="tab-login" class="py-2 px-6 tab-active">Login</button>
            <button id="tab-register" class="py-2 px-6">Register</button>
        </div>

        <!-- LOGIN FORM -->
        <div id="login-form">
            <h1 class="text-xl font-bold mb-4 text-center">Login</h1>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label>Email / Username</label>
                    <input type="text" name="login"
                           class="w-full p-2 rounded bg-gray-700 border border-gray-600">
                </div>

                <div class="mb-4">
                    <label>Password</label>
                    <input type="password" name="password"
                           class="w-full p-2 rounded bg-gray-700 border border-gray-600">
                </div>

                <button class="w-full bg-blue-600 hover:bg-blue-700 py-2 rounded-lg">
                    Login
                </button>
            </form>
        </div>

        <!-- REGISTER FORM -->
        <div id="register-form" class="hidden">
            <h1 class="text-xl font-bold mb-4 text-center">Register</h1>

            {{-- <form action="{{ route('register.post') }}" method="POST"> --}}
                @csrf

                <div class="mb-4">
                    <label>Nama</label>
                    <input type="text" name="name"
                           class="w-full p-2 rounded bg-gray-700 border border-gray-600">
                </div>

                <div class="mb-4">
                    <label>Username</label>
                    <input type="text" name="username"
                           class="w-full p-2 rounded bg-gray-700 border border-gray-600">
                </div>

                <div class="mb-4">
                    <label>Email</label>
                    <input type="email" name="email"
                           class="w-full p-2 rounded bg-gray-700 border border-gray-600">
                </div>

                <div class="mb-4">
                    <label>Password</label>
                    <input type="password" name="password"
                           class="w-full p-2 rounded bg-gray-700 border border-gray-600">
                </div>

                <div class="mb-4">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirmation"
                           class="w-full p-2 rounded bg-gray-700 border border-gray-600">
                </div>

                <button class="w-full bg-blue-600 hover:bg-blue-700 py-2 rounded-lg">
                    Register
                </button>
            </form>
        </div>

    </div>

</div>

<script>
    const loginBtn = document.getElementById('tab-login');
    const registerBtn = document.getElementById('tab-register');

    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');

    loginBtn.addEventListener('click', () => {
        loginBtn.classList.add('tab-active');
        registerBtn.classList.remove('tab-active');

        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
    });

    registerBtn.addEventListener('click', () => {
        registerBtn.classList.add('tab-active');
        loginBtn.classList.remove('tab-active');

        registerForm.classList.remove('hidden');
        loginForm.classList.add('hidden');
    });
</script>

</body>
</html>
