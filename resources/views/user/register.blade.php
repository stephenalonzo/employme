<x-layout class="w-1/3">
    <div class="flex flex-col items-start space-y-4">
        <form action="/user/register" method="POST" class="w-full">
            @csrf
            <div class="flex flex-col items-start space-y-4">
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="name" class="font-semibold">Full Name</label>
                    <input type="text" id="name" class="px-4 py-2 rounded-md border border-gray-200 w-full" name="name" placeholder="Enter your full name" value="{{old('name')}}">
                    @error('name')
                        <p class="text-red-700 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="email" class="font-semibold">Email address</label>
                    <input type="email" id="email" class="px-4 py-2 rounded-md border border-gray-200 w-full"
                        name="email" placeholder="Enter your email address" value="{{old('email')}}">
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
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="password_confirmation" class="font-semibold">Password</label>
                    <input type="password" id="password_confirmation"
                        class="px-4 py-2 rounded-md border border-gray-200 w-full" name="password_confirmation"
                        placeholder="Confirm your password">
                    @error('password_confirmation')
                        <p class="text-red-700 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="purpose" class="font-semibold">What are you using Employme for?</label>
                    <select name="purpose" id="purpose" class="px-1 py-2 rounded-md border border-gray-200 w-full">
                        <option value="1" {{old('purpose') == 1 ? 'selected' : ''}}>I'm looking for a job</option>
                        <option value="2" {{old('purpose') == 2 ? 'selected': ''}}>I'm looking to post a job</option>
                    </select>
                    @error('purpose')
                        <p class="text-red-700 text-xs">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="px-4 py-2 rounded-md bg-purple-700 text-white w-full">Register</button>
            </div>
        </form>
        <span>
            Already have an account? <a href="/login"
                class="font-semibold underline underline-offset-8">Login</a>
        </span>
    </div>
</x-layout>
