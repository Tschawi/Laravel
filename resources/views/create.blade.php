@extends('layouts.default')

@section('title', 'Events')

@section('content')
<form method="POST" action="/create" class="mt-10">
    @csrf

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
               for="title"
        >
            Title
        </label>

        <input class="border border-gray-400 p-2 w-full"
               type="text"
               name="title"
               id="title"
               required
        >
    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
               for="description"
        >
            description
        </label>

        <input class="border border-gray-400 p-2 w-full"
               type="text"
               name="description"
               id="description"
               required
        >
    </div>

    <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
               for="date"
        >
            date
        </label>

        <input class="border border-gray-400 p-2 w-full"
               type="text"
               name="date"
               id="date"
               required
        >
    </div>

    <div class="mb-6">
        <button type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
        >
            Submit
        </button>
    </div>
</form>
@endsection