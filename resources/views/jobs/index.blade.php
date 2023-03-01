<x-layout>
    <div class="grid grid-cols-3 gap-5 items-center">
        @unless(count($jobs) == 0)
        @foreach ($jobs as $job)
            <x-job-card :job="$job" />
        @endforeach
        @else
            <p>No jobs found.</p>
        @endunless
    </div>
</x-layout>