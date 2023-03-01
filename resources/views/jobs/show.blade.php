<x-layout>
    <div class="flex flex-row items-start">
        <div class="p-4 w-full">
            <div class="space-y-3">
                <div class="flex flex-row items-center justify-between">
                    <h1 class="text-lg font-semibold">{{$job->job}}</h1>
                    <a href="apply.html" class="px-4 py-2 rounded-md bg-purple-700 text-sm text-white">Apply</a>
                </div>
                <span class="flex flex-col item-start text-sm">
                    <h3>{{$job->company}}</h3>
                    <ul class="flex flex-row items-center space-x-1">
                        <li>{{$job->location}}</li>
                        <li>&bullet; (Remote)</li>
                    </ul>
                </span>
                <hr>
                <div class="flex flex-col items-start text-sm space-y-6">
                    <ul class="list-disc pl-4 flex flex-col items-start space-y-1">
                        <li>Full-Time</li>
                        <li>{{$job->benefits}}</li>
                        <li>{{$job->salary}} / yr</li>
                    </ul>
                    <p>{{$job->description}}</p>
                </div>
                <hr>
                <ul class="flex flex-col items-start space-y-2 text-sm">
                    <li class="text-gray-400">
                        Company website: <a href="{{$job->website}}" class="font-semibold text-purple-700">{{$job->website}}</a>
                    </li>
                    <li class="text-gray-400">
                        Posted date: <span class="text-black">{{$job->created_at}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>