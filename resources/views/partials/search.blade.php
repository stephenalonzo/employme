<form action="/">
    @csrf
    <div class="flex flex-col items-start space-y-3 md:flex-row md:items-end md:space-x-3 md:space-y-0">
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="position" class="font-semibold text-sm">Search job position</label>
            <input type="text" class="px-4 py-2 rounded-md border border-gray-200 w-full" name="position" id="position" placeholder="Enter job title, keyword(s), or company">
        </div>
        <div class="flex flex-col items-start space-y-1 w-full">
            <label for="location" class="font-semibold text-sm">Enter location</label>
            <input type="text" class="px-4 py-2 rounded-md border border-gray-200 w-full" name="location" id="location" placeholder="Enter location">
        </div>
        <button type="submit" class="px-4 py-2 rounded-md bg-purple-700 text-white">Search</button>
    </div>
</form>