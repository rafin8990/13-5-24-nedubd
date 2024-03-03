@extends('Backend.app')
@section('title')
Student Admin Card
@endsection
@section('Dashboard')
    <div>
        <h3>
            Student Admin Card
        </h3>
    </div>

    <div class="mt-10">
        <div class="md:mx-52 border-2 p-10">
            <form action="">
            <div class="grid md:grid-cols-3 mb-5">
                <div class=" ">
                    <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white ">CLASS :
                    </label>
                </div>
                <div class="">
                    <select id="countries" name="class"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose Class</option>
                    <option >x</option>
                    <option >y</option>
                    <option >z</option>
                </select>
                </div>
            </div>
            <div class="grid md:grid-cols-3 mb-5">
                <div class=" ">
                    <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white ">Group :
                    </label>
                </div>
                <div class="">
                    <select id="countries" name="exam_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Exam Name</option>
                        <option >x</option>
                        <option >y</option>
                        <option >z</option>
                    </select>
                </div>
            </div>
            <div class="grid md:grid-cols-3 mb-5">
                <div class=" ">
                    <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white ">Section :
                    </label>
                </div>
                <div class="">
                    <select id="countries" name="section_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Section Name</option>
                        <option >x</option>
                        <option >y</option>
                        <option >z</option>
                    </select>
                </div>
            </div>
            <div class="grid md:grid-cols-3 mb-5">
                <div class=" ">
                    <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white ">Student ID :
                    </label>
                </div>
                <div class="">
                    <select id="countries" name="id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Student ID</option>
                        <option >x</option>
                        <option >y</option>
                        <option >z</option>
                    </select>
                </div>
            </div>
            <div class="grid md:grid-cols-3 mb-5">
                <div class=" ">
                    <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white ">Exam Name :
                    </label>
                </div>
                <div class="">
                    <select id="countries" name="exam_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Exam Name</option>
                        <option >x</option>
                        <option >y</option>
                        <option >z</option>
                    </select>
                </div>
            </div>
           
            <div class="grid md:grid-cols-3 mb-5">
                <div class=" ">
                    <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white ">YEAR  : 
                    </label>
                </div>
                <div class="">
                    <select id="countries" name="year"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose year</option>
                    <option >x</option>
                    <option >y</option>
                    <option >z</option>
                </select>
                </div>
            </div>
            <div class="grid md:grid-cols-3 mb-5">
                <div class=" ">
                    <label for="last_name" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white ">Print Type:
                    </label>
                </div>
                <div class="">
                    <select id="countries" name="print_type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Print Types</option>
                        <option >With Subject</option>
                        <option >Without Subject </option>
                        
                    </select>
                </div>
            </div>

            <div class=" flex justify-end">
                <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Print</button>
            </div>
        </form>
        </div>
    </div>

@endsection