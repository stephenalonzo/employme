<x-layout>
    <form action="/jobs" method="POST" class="w-full">
        @csrf
        <div class="grid grid-flow-row-dense gap-4 items-end">
            <div class="flex flex-col items-start space-y-2 w-full">
                <label for="job" class="font-semibold">Job Title</label>
                <input type="text" id="job" class="px-4 py-2 rounded-md border border-gray-200 w-full"
                    name="job" placeholder="Example: Junior Web Developer" value="{{old('job')}}">
                @error('job')
                    <p class="text-red-700 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row items-start space-x-4 w-full">
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="location" class="font-semibold">Location</label>
                    <input type="text" id="location" class="px-4 py-2 rounded-md border border-gray-200 w-full"
                        name="location" placeholder="Example: Los Angeles, CA" value="{{old('location')}}">
                    @error('location')
                        <p class="text-red-700 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="job_type" class="font-semibold">Job Type</label>
                    <select name="job_type" id="job_type" class="px-1 py-2 rounded-md border border-gray-200 w-full">
                        <option value="1" {{old('job_type') == 1 ? 'selected' : ''}}>On-site</option>
                        <option value="2" {{old('job_type') == 2 ? 'selected' : ''}}>Remote</option>
                    </select>
                    @error('job_type')
                        <p class="text-red-700 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col items-start space-y-2 w-full">
                <label for="benefits" class="font-semibold">Benefits</label>
                <input type="text" id="benefits" class="px-4 py-2 rounded-md border border-gray-200 w-full"
                    name="benefits" placeholder="Example: 401K, Dental, Medical" value="{{old('benefits')}}">
                @error('benefits')
                    <p class="text-red-700 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row items-center space-x-4 w-full">
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="salary" class="font-semibold">Estimated Salary</label>
                    <select name="salary" id="salary" class="px-1 py-2 rounded-md border border-gray-200 w-full">
                        <option value="1" {{old('salary') == 1 ? 'selected' : ''}}>$25K-$45K</option>
                        <option value="2" {{old('salary') == 2 ? 'selected' : ''}}>$50K-$75K</option>
                        <option value="3" {{old('salary') == 3 ? 'selected' : ''}}>$80K-$105K</option>
                        <option value="4" {{old('salary') == 4 ? 'selected' : ''}}>$110K-$125K</option>
                    </select>
                    @error('salary')
                        <p class="text-red-700 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col items-start space-y-2 w-full">
                    <label for="emp_type" class="font-semibold">Employment Type</label>
                    <select name="emp_type" id="emp_type" class="px-1 py-2 rounded-md border border-gray-200 w-full">
                        <option value="1" {{old('emp_type') == 1 ? 'selected' : ''}}>Full-Time</option>
                        <option value="2" {{old('emp_type') == 2 ? 'selected' : ''}}>Part-Time</option>
                        <option value="3" {{old('emp_type') == 2 ? 'selected' : ''}}>Contract</option>
                    </select>
                    @error('emp_type')
                        <p class="text-red-700 text-sm">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-col items-start space-y-2 w-full">
                <label for="company" class="font-semibold">Company Name</label>
                <input type="text" id="company" class="px-4 py-2 rounded-md border border-gray-200 w-full"
                    name="company" placeholder="Example: Stark Industries" value="{{old('company')}}">
                @error('company')
                    <p class="text-red-700 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col items-start space-y-2 w-full">
                <label for="website" class="font-semibold">Company Website</label>
                <input type="text" id="website" class="px-4 py-2 rounded-md border border-gray-200 w-full"
                    name="website" placeholder="Example: https://marvel.com" value="{{old('website')}}">
                @error('website')
                    <p class="text-red-700 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col items-start space-y-2 w-full col-span-2">
                <label for="description" class="font-semibold">Job Description</label>
                <textarea id="description" class="px-4 py-2 rounded-md border border-gray-200 w-full h-48" name="description"
                    placeholder="Enter the job description">{{old('description')}}</textarea>
                @error('description')
                    <p class="text-red-700 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="px-4 py-2 rounded-md bg-purple-700 text-white w-full col-span-2">Post
                Job</button>
        </div>
    </form>
</x-layout>
