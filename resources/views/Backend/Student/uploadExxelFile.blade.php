@extends('Backend.app')
@section('title')
    Student Data
@endsection
@section('Dashboard')
    <div>
        <h3>
            Excel Import Student Data
        </h3>
    </div>
    <div class="flex justify-center md:mt-10 text-xl font-bold">
        <h3>Student Information</h3>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10 border border-2 md:p-5">


        <div class="grid gap-6 mb-6 md:grid-cols-4 mt-2">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Class
                </label>
                <select id="" name="class"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a department</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Group
                </label>
                <select id="" name="group"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a designation</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Section
                </label>
                <select id="" name="section"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a Section</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Shift
                </label>
                <select id="" name="shift"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a Shift</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Category
                </label>
                <select id="" name="category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a Category</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Academic Year
                </label>
                <select id="" name="year"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a year</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            <div class="">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Excel
                    File</label>
                <input name="image"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file">

            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Student ID with/without
                </label>
                <select id="" name="stu_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Select</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>


           
        </div>
        <div class="md:flex justify-center">
            <div class="">
                <button type="button"
                    class="  text-white bg-rose-600 hover:bg-rose-600 focus:ring-4 focus:ring-rose-600 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-rose-600 dark:hover:bg-rose-600 focus:outline-none dark:focus:ring-rose-600">Blank Excel Download
                </button>
            </div>
            <div class="">
                <button type="button"
                    class="  text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> Submit
                </button>
            </div>
        </div>

        


    </div>
@endsection
