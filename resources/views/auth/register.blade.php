<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="min-h-screen flex justify-center items-center">

        <form method="POST" action="/register" class="card bg-base-200 shadow-xl w-96">
            @csrf

            <div class="card-body justify-between h-full">

                <h1 class="card-title text-2xl justify-center mb-4">
                    Register
                </h1>

                <label class="w-full form-control">
                    <span class="label-text mb-1">Name:</span>
                    <input
                        type="text"
                        name="name"
                        class="input input-centered w-full"
                    >
                </label>

                <label class="form-control w-full">
                    <span class="label-text mb-1">Email:</span>
                    <input
                        type="email"
                        name="email"
                        class="input input-centered w-full"
                    >
                </label>

                <label class="form-control w-full">
                    <span class="label-text mb-1">Password:</span>
                    <input
                        type="text"
                        name="password"
                        class="input input-centered w-full"
                    >
                </label>

                <button class="btn btn-primary">
                    Sign Up
                </button>

            </div>
        </form>
    </main>
</body>
</html>
