@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-600">
            {{ $job->employer->name }}
        </a>

        <a href="{{ $job->url }}" target="_blank" class="group-hover:text-blue-600 text-xl font-bold mt-3 transition-colors duration-300">
            {{ $job->title }}
        </a>

        <p class="text-sm text-gray-600 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag size='small' :tag="$tag" />
        @endforeach
    </div>
</x-panel>
