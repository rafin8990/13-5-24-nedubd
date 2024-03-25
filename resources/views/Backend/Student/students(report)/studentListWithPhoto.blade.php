@extends('Backend.app')
@section('title')
Student Information with Image
@endsection
@section('Dashboard')
    <div>
        <h3>
            Student Information with Image
        </h3>
    </div>
    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10 border-2 md:p-5">


        <div class="grid gap-6 mb-6 md:grid-cols-4 mt-2">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Class
                </label>
                <select id="" name="class"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Choose a class</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Group
                </label>
                <select id="" name="group"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Choose a group</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Section
                </label>
                <select id="" name="section"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Choose a Section</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Category
                </label>
                <select id="" name="category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Choose a Category</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Academic Year
                </label>
                <select id="" name="academic_year"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option selected>Choose a academic year</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

           


           
        </div>

        <div class="grid md:grid-cols-4  grid-cols-2">
            <div class="">
                <input id="" type="checkbox" value="" name="gender" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">With Gender</label>
                
            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="religion" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">With Religion</label>
                
            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="father_name" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500  focus:ring-2 ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">With Father's Name</label>
                
            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="mother_name" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">With Mother's Name</label>
                
            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="dob" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">With Date of Birth</label>
                
            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="photo" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">With Photo</label>
                
            </div>
           
        </div>
        <div class="md:flex justify-end mr-10 mt-10">
            <div class="">
                <button type="button"
                    class="  text-white bg-rose-600 hover:bg-rose-600 focus:ring-4 focus:ring-rose-600 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-rose-600 dark:hover:bg-rose-600 focus:outline-none dark:focus:ring-rose-600">Search
                </button>
            </div>
           
        </div>

        


    </div>

   
@endsection
