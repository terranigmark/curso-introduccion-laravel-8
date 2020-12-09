<div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
    <a href="{{ route('course', $course->slug) }}">
        <img src="{{ $course->image }}" class="rounded-md mb-2">

        <h2 class="text-lg text-gray-600 truncate uppercase font-semibold">{{ $course->name }}</h2>
        <h3 class="text-md text-gray-500">{{ $course->excerpt }}</h3>

        <img src="{{ $course->user->avatar }}" alt="{{ $course->user->name }}" class="rounded-full mx-auto mt-4 h-16 w-16">
    </a>
</div>