<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="">
    <form method="POST" action="{{ route('login') }}">    
        @csrf
        <style>
            .container {
                max-width: 300px;
                margin: 0 auto;
                margin-top: 100px;
            }
        </style>
         <div class="container">
        <h1 class="text-2xl font-bold mb-4">Sign In or Create an Account</h1>
        <form>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email address</label>
                <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" required class="w-full p-2 border border-gray-300 rounded-md" />
            </div>
            <button type="submit" class="w-full bg-blue-800 text-white p-2 rounded-md hover:bg-blue-700">Sign In</button>
        </form>
        <div class="or mt-4 text-center">Or</div>
        <div class="social-login mt-4 text-center">
            <button class="bg-gray-200 p-2 rounded-full mr-2"><i class="fab fa-google"></i></button>
            <button class="bg-gray-200 p-2 rounded-full mr-2"><i class="fab fa-facebook"></i></button>
            <button class="bg-gray-200 p-2 rounded-full mr-2"><i class="fab fa-github"></i></button>
        </div>
        <div class="mt-4 text-center">
            <p>New user? <a href="#" class="text-blue-700">Create an account</a></p>
        </div>
    </div>
    </form>
    </div>
</x-guest-layout>
