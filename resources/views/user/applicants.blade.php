<x-layout class="w-2/3">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 text-sm">
            <thead>
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        Name
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        Email
                    </th>
                    <th class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900">
                        Status
                    </th>
                    <th class="px-4 py-2">
                        Action
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @unless(count($applicants) == 0)
                    @foreach ($applicants as $applicant)
                        @if ($applicant->job_id == $job->id)
                            <tr>
                                <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                    {{ $applicant->applicant }}
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    <a href="mailto:{{ $applicant->email }}">{{ $applicant->email }}</a>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                    @if ($applicant->applicant_status == 1)
                                        <span
                                            class="px-2 py-1 bg-green-200 text-green-600 text-xs font-medium uppercase rounded-sm">Hired</span>
                                    @endif
                                </td>
                                @if ($applicant->applicant_status == 1)
                                    <td class="whitespace-nowrap px-4 py-2 flex items-center justify-center space-x-2">
                                        <a href="{{ asset('storage/' . $applicant->resume) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="inline-block rounded-md border bg-indigo-700 px-4 py-2 text-white hover:border-indigo-600 hover:text-indigo-600 hover:bg-transparent duration-200">
                                            View Resume
                                        </a>
                                    </td>
                                @else
                                    <td class="whitespace-nowrap px-4 py-2 flex items-center justify-center space-x-2">
                                        <a href="{{ asset('storage/' . $applicant->resume) }}" target="_blank"
                                            rel="noopener noreferrer"
                                            class="inline-block rounded-md border bg-indigo-700 px-4 py-2 text-white hover:border-indigo-600 hover:text-indigo-600 hover:bg-transparent duration-200">
                                            View Resume
                                        </a>
                                        <form action="/applicants/{{ $applicant->id }}/hired" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="inline-block rounded-md border bg-green-700 px-4 py-2 text-white hover:border-green-600 hover:text-green-600 hover:bg-transparent duration-200">
                                                Hire
                                            </button>
                                        </form>
                                        <form action="/applicants/{{ $applicant->id }}/dismissed" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="inline-block rounded-md border bg-red-700 px-4 py-2 text-white text-sm hover:border-red-700 hover:text-red-700 hover:bg-transparent duration-200">
                                                Dismiss
                                            </button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                @else
                    <tr>
                        <td class="whitespace-nowrap px-4 py-2 flex space-x-2">
                            No applicants yet for this job.
                        </td>
                    </tr>
                @endunless
            </tbody>
        </table>
    </div>
</x-layout>
