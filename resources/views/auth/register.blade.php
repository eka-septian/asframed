<x-guest-layout>
        <form method="POST" action="{{ route('register') }}">
        @csrf
        <style>
            .container {
                max-width: 300px;
                margin: 0 auto;
                margin-top: 100px;
            }
        </style>
        <div class="container">
            <h1 class="text-2xl font-bold mb-4">Create an Account</h1>
            <form>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="name" id="name" name="name" required class="w-full p-2 border border-gray-300 rounded-md" />
                </div>    
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email address</label>
                    <input type="email" id="email" name="email" required class="w-full p-2 border border-gray-300 rounded-md" />
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" required class="w-full p-2 border border-gray-300 rounded-md" />
                </div>
                <div class="mb-4">
                    <label for="confirm password" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                    <input type="confirm password" id="confirm password" name="confirm password" required class="w-full p-2 border border-gray-300 rounded-md"/>
                </div>    
                <button type="submit" class="w-full bg-blue-800 text-white p-2 rounded-md hover:bg-blue-700">Register</button>
            </form>
            <div class="or mt-4 text-center">Or</div>
            <div class="social-login mt-4 text-center">
                <button class="bg-gray-200 p-2 rounded-full mr-2"><i class="fab fa-google"></i></button>
                <button class="bg-gray-200 p-2 rounded-full mr-2"><i class="fab fa-facebook"></i></button>
                <button class="bg-gray-200 p-2 rounded-full mr-2"><i class="fab fa-github"></i></button>
            </div>
            
        </div>
         </form>
</x-guest-layout>
