@props(['job'])

<x-card>
    <h1 class="text-lg font-semibold">{{ $job->job }}</h1>
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
    <hr class="w-full">
    <div class="flex flex-col items-start text-sm space-y-3">
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
        <a href="/jobs/{{ $job->id }}" class="px-4 py-2 rounded-md bg-purple-700 text-white w-full text-center">Apply
            Now</a>
    </div>
</x-card>
