@props(['job'])

<x-card>
    <h1 class="text-lg font-semibold">{{$job->job}}</h1>
    <span class="flex flex-col item-start text-sm">
        <h3>{{$job->company}}</h3>
        <ul class="flex flex-row items-center space-x-1">
            <li>{{$job->location}}</li>
            <li>&bullet; (Remote)</li>
        </ul>
    </span>
    <hr class="w-full">
    <div class="flex flex-col items-start text-sm space-y-3">
        <ul class="list-disc pl-4 flex flex-col items-start space-y-1">
            <li>Full-Time</li>
            <li>{{$job->benefits}}</li>
            <li>{{$job->salary}} / yr</li>
        </ul>
        <a href="/jobs/{{$job->id}}" class="px-4 py-2 rounded-md bg-purple-700 text-white w-full text-center">Apply Now</a>
    </div>
</x-card>