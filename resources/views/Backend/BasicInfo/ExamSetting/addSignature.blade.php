@extends('Backend.app')
@section('title')
Signature Name
@endsection
@section('Dashboard')
    <div>
        <h3>
            Signature Name
        </h3>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
        <div class="grid gap-6 mb-6 md:grid-cols-4 ">
            <button type="button"
                class=" md:mr-20 text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">List
                </button>

           
        </div>
        <div class="p-4 md:p-5">
            <form class="space-y-4" action="#">
                <div>
                    <label for="Code"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Signature Name :
                        </label>
                    <input type="text" name="sign" id="Code"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="enter Exam Signature Name" required />
                </div>
                <div>
                    <label for="position"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Signature :
                        </label>
                        <input name="image"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">

                </div>
                

               
                <div class="flex justify-center ">
                    <button type="submit"
                        class=" mr-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

                </div>
            </form>
        </div>
    </div>
@endsection
