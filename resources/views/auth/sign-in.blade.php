<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign In</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-50">
    <div class="flex min-h-screen items-center justify-center px-4">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                <a href="#" class="inline-flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm1 15h-2v-2h2Zm0-4h-2V7h2Z" />
                    </svg>
                    <span class="text-2xl font-bold text-gray-900">YourApp</span>
                </a>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-100">
                <h1 class="text-xl font-semibold text-gray-900">Welcome back</h1>
                <p class="mt-1 mb-2 text-sm text-gray-500">Sign in to your account</p>

            @error('login')
                <div class="mb-4 p-3 rounded bg-red-100 border border-red-400 text-red-700 text-sm">
                    {{ $message }}
                </div>
            @enderror

            <form class="mt-6 space-y-4" action="{{ route('user.login') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" required
                        class="mt-1 w-full rounded-xl border border-gray-200 bg-white px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-100"
                        placeholder="you@example.com" />
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <a href="#"
                            class="text-sm font-medium text-emerald-700 hover:text-emerald-800">Forgot?</a>
                    </div>
                    <input id="password" name="password" type="password" required
                        class="mt-1 w-full rounded-xl border border-gray-200 bg-white px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-emerald-500 focus:outline-none focus:ring-2 focus:ring-emerald-100"
                        placeholder="••••••••" />
                </div>

                <div class="flex items-center gap-2">
                    <input id="remember" name="remember" type="checkbox"
                        class="h-4 w-4 rounded border-gray-300 text-emerald-600 focus:ring-emerald-500" />
                    <label for="remember" class="text-sm text-gray-700">Remember me</label>
                </div>

                <button type="submit" onclick="location.href={{ route('dashboard') }}"
                    class="w-full rounded-xl bg-emerald-600 px-4 py-2.5 text-white font-semibold shadow-sm hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-200">
                    Sign In
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-gray-600">
                Don’t have an account?
                <a href="#" class="font-medium text-emerald-700 hover:text-emerald-800">Create one</a>
            </p>
        </div>

        <p class="mt-6 text-center text-xs text-gray-500">
            © <span id="year"></span> YourApp. All rights reserved.
        </p>
    </div>
</div>

<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
</body>

</html>
