@extends('Backend.app')
@section('title')
    Add Section
@endsection
@section('Dashboard')
    <div>
        <h3>
            Section/Section Information
        </h3>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
        <div class="grid gap-6 mb-6 md:grid-cols-4 ">
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                class=" md:mr-20 text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                New</button>
                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    NEW SECTION ENTRY FORM
                                </h3>
                                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <form class="space-y-4" action="#">
                                    <div>
                                        <label for="Board" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Section Name :</label>
                                        <input type="text" name="board" id="Board" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="enter exam name" required />
                                    </div>
                                    
                                    
                                    <div class="flex justify-between">
                                        <div class="flex items-start">
                                            <select id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <option selected="">Select status</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">In active</option>
                                                
                                            </select>
                                        </div>
                                        
                                    </div>
                                   <div class="flex justify-center ">
                                    <button type="submit" class=" mr-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                    <button  data-modal-hide="authentication-modal" class="end-2.5  text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 ">Close</button>
                                    
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 

                
                <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search" />

        </div>
        <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
            <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        SL
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Section Name
                    </th>
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 ">
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
                            <a href="" class="mr-2"><i class="fa fa-edit"
                                style="color:green;"></i></a>
                            <a href=""><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
                        </div>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>
@endsection
