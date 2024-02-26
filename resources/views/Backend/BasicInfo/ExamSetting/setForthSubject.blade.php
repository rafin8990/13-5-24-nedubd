@extends('Backend.app')
@section('title')
Class
@endsection
@section('Dashboard')
<div>
    <h3>
        Class By Subject Setup
    </h3>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
    <form action="">
        <div class="grid md:grid-cols-9 gap-4 my-10 ">
            <div class="mr-2 md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class :</label>
            </div>
            <div class="mr-2">
                <select id="countries" name="class_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a class</option>
                    <option value="">Class One</option>
                    <option value="">Class Two</option>
                    <option value="">Class Three</option>
                    <option value="">Class Four</option>
                </select>
            </div>
            <div class="mr-2 md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group :</label>
            </div>
            <div class="mr-2">
                <select id="countries" name="group_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a group</option>
                    <option value="">One</option>
                    <option value="">Two</option>
                    <option value="">Three</option>
                    <option value="">Four</option>
                </select>
            </div>
            <div class="mr-2 md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Section :</label>
            </div>
            <div class="mr-2">
                <select id="countries" name="section_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a section</option>
                    <option value="">X</option>
                    <option value="">Y</option>
                    <option value="">Z</option>

                </select>
            </div>

            <div class="mr-2 md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year :</label>
            </div>
            <div class="mr-2">
                <select name="year" id='date-dropdown' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Select Year</option>
                </select>
            </div>
            <div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">GET DATA</button>
            </div>

        </div>


    </form>
    <div class=" text-lg font-bold">
        <div class="flex justify-center">
            <h3>
                FOURTH SUBJECT SETTING
            </h3>
        </div>

        <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
            <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SL
                    </th>
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        STUDENT ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        STUDENT NAME
                    </th>
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        ROLL
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr class=" border-b border-blue-400">
                    <th scope="row" class="px-6 py-4 font-medium  text-black whitespace-nowrap dark:text-blue-100">

                    </th>
                    <td class="px-6 py-4">

                    </td>
                    <td class="px-6 py-4">

                    </td>
                    <td class="px-6 py-4">

                    </td>
                    <td class="px-6 py-4 ">

                    </td>


                </tr>



            </tbody>
        </table>
    </div>
    <br><br>
    <div class="md:flex justify-center">
        <div class="mr-10">
            <button type="submit" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View And Delete</button>
        </div>
        <div class="mr-10">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
        </div>
        <div class="mr-10">
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Close</button>
        </div>

        <div class="ml-32">
            <h3>Total = <div class="border border-2"></div>
            </h3>
        </div>

    </div>
    @endsection

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            let $dateDropdown = $('#date-dropdown');

            let currentYear = new Date().getFullYear();
            let earliestYear = 1970;

            while (currentYear >= earliestYear) {
                let $dateOption = $('<option>');
                $dateOption.text(currentYear);
                $dateOption.val(currentYear);
                $dateDropdown.append($dateOption);
                currentYear -= 1;
            }
        });
    </script>