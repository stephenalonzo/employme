<x-layout class="w-1/3">
    <div class="flex flex-col items-start space-y-4">
        <form action="/jobs/{{$job->id}}" method="POST" class="w-full" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col items-start space-y-4">
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="applicant" class="font-semibold">Full Name</label>
                    <input type="text" id="applicant" class="px-4 py-2 rounded-md border border-gray-200 w-full" name="applicant" placeholder="Enter your full name" value="{{ auth()->user()->name }}">
                    @error('name')
                        <p class="text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="email" class="font-semibold">Email address</label>
                    <input type="email" id="email" class="px-4 py-2 rounded-md border border-gray-200 w-full" name="email" placeholder="Enter your email address" value="{{ auth()->user()->email }}">
                    @error('email')
                        <p class="text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="resume" class="font-semibold">Upload your resume</label>
                    <input type="file" id="resume" class="px-4 py-2 rounded-md border border-gray-200 w-full" name="resume">
                    @error('resume')
                        <p class="text-red-700">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="px-4 py-2 rounded-md bg-purple-700 text-white w-full">Submit</button>
            </div>
        </form>
    </div>
</x-layout>