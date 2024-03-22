@extends('Backend.app')
@section('title')
Student Details Information
@endsection
@section('Dashboard')
@include('Message.message')
    <div>
        <h3>
            Student Details Information
        </h3>
    </div>

    <div class="mt-10">
        <div class="md:mx-52 border-2 p-10 bg-blue-950">
            
            <form action="" method="" enctype="multipart/form-data">
                @csrf
            <div class="grid md:grid-cols-3 mb-5 ">
                <div class=" ">
                    <label for="last_name" class="block mb-2 text-lg font-medium text-white ">CLASS :
                    </label>
                </div>
                <div class="">
                    <select id="countries" name="Class_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option >Choose a class</option>
                        <option >one</option>
                        <option >two</option>
                    
                        
                    </select>
                </div>
            </div>
            <div class="grid md:grid-cols-3 mb-5">
                <div class=" ">
                    <label for="last_name" class="block mb-2 text-lg font-medium text-white ">STUDENT ID :
                    </label>
                </div>
                <div class="">
                    <select id="countries" name="id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose student id</option>
                     
                    <option >01</option>
                  
                    </select>
                </div>
            </div>
           
          
           

            <div class=" flex justify-end">
                <button type="submit"
                class="text-white bg-rose-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Print</button>
            </div>
        </form>
        </div>
    </div>

@endsection