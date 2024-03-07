@extends('Backend.app')
@section('title')
Grade
@endsection
@section('Dashboard')

@include('Message.message')
<div>
    <h3>
Exam Grade Setup View List
    </h3>
</div>

    <div class="md:flex my-10 ">
                <div class="mr-5">
                    <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exam Name :</label>
                </div>
                <div class="mr-5">
                    <select id="class_exam_name" name="class_exam_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Choose a exam</option>
                        
                    </select>
                </div>
                <div class="mr-5">
                    <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year :</label>
                </div>
                <div class="mr-5">
                    <select id="academic_year_name" name="academic_year_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Choose year</option>
                     
                    </select>
                </div>
                <div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">GET DATA</button>
                </div>

            </div>

   

@endsection
