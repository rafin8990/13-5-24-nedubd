@extends('Backend.app')
@section('title')
Exam Instruction
@endsection
@section('Dashboard')
    <div>
        <h3>
            Exam Instruction
        </h3>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
        <div class="grid gap-6 mb-6 md:grid-cols-4 ">
            <button type="button"
                class=" md:mr-20 text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">List of Instruction
                </button>

           
        </div>
        <div class="p-4 md:p-5">
            <form class="space-y-4" action="#">
                <div>
                    <label for="Code"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exam Instruction:
                        </label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write maximum 125 Character"></textarea>
                    <h3 class="text-rose-600">Please add maximum 4 instruction</h3>
                </div>
               
                

               
                <div class="flex justify-center ">
                    <button type="submit"
                        class=" mr-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Saved</button>

                </div>
            </form>
        </div>
    </div>
@endsection
