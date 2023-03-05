<x-layout class="w-2/3">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 text-sm">
          <thead>
            <tr>
              <th
                class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900"
              >
                Name
              </th>
              <th
                class="whitespace-nowrap px-4 py-2 text-left font-medium text-gray-900"
              >
                Email
              </th>
              <th class="px-4 py-2">
                Action
              </th>
            </tr>
          </thead>
      
          <tbody class="divide-y divide-gray-200">
            @foreach ($applicants as $applicant)
            <tr>
              <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                {{ $applicant->applicant }}
              </td>
              <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                <a href="mailto:{{ $applicant->email }}">{{ $applicant->email }}</a>
              </td>
              @if ($applicant->applicant_status == 1)
              <td class="whitespace-nowrap px-4 py-2 flex items-center justify-center space-x-2">
                <a
                  href="{{asset('storage/' . $applicant->resume)}}"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="inline-block rounded border border-indigo-600 px-4 py-2 text-xs font-medium text-indigo-700 hover:bg-indigo-600 hover:text-white"
                >
                  View Resume
                </a>
              </td>
              @else
              <td class="whitespace-nowrap px-4 py-2 flex items-center justify-center space-x-2">
                <a
                  href="{{asset('storage/' . $applicant->resume)}}"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="inline-block rounded border border-indigo-600 px-4 py-2 text-xs font-medium text-indigo-700 hover:bg-indigo-600 hover:text-white"
                >
                  View Resume
                </a>
                <form action="/applicants/{{ $applicant->id }}/hired" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white">
                        Hire
                    </button>
                </form>
                <form action="/applicants/{{ $applicant->id }}/dismissed" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit"  class="inline-block rounded bg-red-700 px-4 py-2 text-xs font-medium text-white hover:bg-red-700">
                        Dismiss
                    </button>
                </form>
              </td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
</x-layout>