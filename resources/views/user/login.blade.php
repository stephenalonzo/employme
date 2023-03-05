<x-layout class="w-1/3">
    <div class="flex flex-col items-start space-y-4">
        <form action="/user/login" method="POST" class="w-full">
            @csrf
            <div class="flex flex-col items-start space-y-4">
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="email" class="font-semibold">Email address</label>
                    <input type="email" id="email" class="px-4 py-2 rounded-md border border-gray-200 w-full" name="email" placeholder="Enter your email address">
                    @error('email')
                        <p class="text-red-700 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="password" class="font-semibold">Password</label>
                    <input type="password" id="password" class="px-4 py-2 rounded-md border border-gray-200 w-full"
                        name="password" placeholder="Enter your password">
                    @error('password')
                        <p class="text-red-700 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="px-4 py-2 rounded-md bg-purple-700 text-white w-full">Sign In</button>
            </div>
        </form>
        <span>
            Don't have an account? <a href="/register"
                class="font-semibold underline underline-offset-8">Register</a>
        </span>
    </div>
</x-layout>
