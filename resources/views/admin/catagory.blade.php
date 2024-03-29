@extends('admin.layout.dashboard')
@section('content')
    <div class="flex justify-end w-full">
        <button type="button" id="AddCatagoryBtn"
            class="inline-flex items-center gap-x-1.5 rounded-md bg-green-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Add
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z"
                    clip-rule="evenodd" />
            </svg>

        </button>
    </div>



    {{-- form --}}
    @include('admin.components.catagory.catagoryForm')

    {{-- table --}}
    @include('admin.components.catagory.catagoryTable')

    @if ($errors->any())
        {{ $errors }}
    @endif
@endsection
