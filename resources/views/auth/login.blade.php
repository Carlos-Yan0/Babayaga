<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="flex justify-center items-center min-h-screen">
        <form method="POST" action="/login" class="card w-96 bg-base-200 shadow-xl">
            @csrf

            <div class="card-body h-85 justify-between">
                <h1 class="card-title text-2xl justify-center mb-4">
                    Login
                </h1>

                <label class="form-control w-full">
                    <span class="label-text mb-1">Email</span>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Example@Email.com"
                        class="input input-bordered w-full"
                    >
                </label>

                <label class="form-control w-full">
                    <span class="label-text mb-1">Password</span>
                    <input
                        type="text"
                        name="password"
                        placeholder="ExamplePassword"
                        class="input input-bordered w-full"
                    >
                </label>

                <button class="btn btn-primary">
                    Entrar
                </button>

            </div>
        </form>
    </main>
</body>
</html>
