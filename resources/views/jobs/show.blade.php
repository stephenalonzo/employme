<x-layout>
    <div class="flex flex-row items-start">
        <div class="p-4 w-full">
            <div class="space-y-3">
                <div class="flex flex-row items-center justify-between">
                    <h1 class="text-lg font-semibold">{{ $job->job }}</h1>
                    <a href="apply.html" class="px-4 py-2 rounded-md bg-purple-700 text-sm text-white">Apply</a>
                    <a href="/jobs/{{ $job->id }}/edit"
                        class="px-4 py-2 rounded-md bg-purple-700 text-sm text-white">Edit</a>
                </div>
                <span class="flex flex-col item-start text-sm">
                    <h3>{{ $job->company }}</h3>
                    <ul class="flex flex-row items-center space-x-1">
                        <li>{{ $job->location }}</li>
                        @unless ($job->job_type != 2)
                        <li>&bullet; (Remote)</li>
                        @else
                        
                        @endunless
                    </ul>
                </span>
                <hr>
                <div class="flex flex-col items-start text-sm space-y-6">
                    <ul class="list-disc pl-4 flex flex-col items-start space-y-1">
                        <li>
                            @switch($job->emp_type)
                            @case(1)
                                <span>Full-Time</span>
                            @break
        
                            @case(2)
                                <span>Part-Time</span>
                            @break
        
                            @case(3)
                                <span>Contract</span>
                            @break
        
                            @default
                        @endswitch
                        </li>
                        <li>{{ $job->benefits }}</li>
                        <li>
                            @switch($job->salary)
                                @case(1)
                                    <span>$25K-$45K / yr</span>
                                @break

                                @case(2)
                                    <span>$50K-$75K / yr</span>
                                @break

                                @case(3)
                                    <span>$80K-$105K / yr</span>
                                @break

                                @case(4)
                                    <span>$110K-$125K / yr</span>
                                @break

                                @default
                            @endswitch
                        </li>
                    </ul>
                    <p>{{ $job->description }}</p>
                </div>
                <hr>
                <ul class="flex flex-col items-start space-y-2 text-sm">
                    <li class="text-gray-400">
                        Company website: <a href="{{ $job->website }}"
                            class="font-semibold text-purple-700">{{ $job->website }}</a>
                    </li>
                    <li class="text-gray-400">
                        Posted date: <span class="text-black">{{ $job->created_at }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-layout>
