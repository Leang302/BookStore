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
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="addCatagoryForm">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="popup fixed inset-0 z-10 w-screen overflow-y-auto scale-0 opacity-0">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                    <form action="">
                        <label for="catagory">Catagory Name</label>
                        <input type="text" name="catagory" id="" class="rounded border-gray-200 ml-2"
                            placeholder="Catagory Name">
                    </form>

                    {{-- add button --}}
                    <div class="flex justify-end gap-2">
                        <div class="mt-5 sm:mt-6">
                            <button type="button"
                                class="inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
                                Add</button>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <button type="button"
                                class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                                id="cancelAddCatagory">
                                Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
