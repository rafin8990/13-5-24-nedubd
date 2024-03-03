@extends('Backend.app')
@section('title')
Instruction List
@endsection
@section('Dashboard')
    <div>
        <h3>
            Instruction List
        </h3>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
        <div class="grid gap-6 mb-6 md:grid-cols-4 ">
            <button type="button"
                class=" md:mr-20 text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add New
                </button>

           
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
            <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        SL
                    </th>
                   
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        Instructions
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class=" border-b border-blue-400">
                    <th scope="row" class="px-6 py-4 font-medium  text-black whitespace-nowrap dark:text-blue-100">

                    </th>
                    <td class="px-6 py-4">

                    </td>
                    <td class="px-6 py-4 ">

                    </td>
                  
                    

                    <td class="px-6 py-4 ">
                        <div class="flex justify-center">
                            <a href="" class="mr-2"><i class="fa fa-edit" style="color:green;"></i></a>
                            <a href=""><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
                        </div>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>
@endsection
