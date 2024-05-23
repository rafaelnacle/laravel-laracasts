<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{$job['title']}}:</strong>
                    <span class="text-blue-500 hover:underline">Pays
                        {{$job['salary']}}
                        per year
                    </span>
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>