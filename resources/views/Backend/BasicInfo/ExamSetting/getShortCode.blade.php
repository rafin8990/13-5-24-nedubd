@extends('Backend.app')
@section('title')
Exam Mark

@endsection
@section('Dashboard')
<div>
    <h3>
        Exam Mark Setup

    </h3>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
    <form action="">

        <div class="grid gap-6 mb-6 md:grid-cols-4 mt-2">
            <div>
                <div class="mr-5">
                    <label for="class_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Name:</label>
                </div>
                <select id="class_name" name="class_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a class</option>
                    @foreach($classData as $data)
                    <option value="{{ $data->class_name }}">{{ $data->class_name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <div class="mr-5">
                    <label for="class_exam_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Name:</label>
                </div>
                <select id="class_exam_name" name="class_exam_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a exam</option>
                    @foreach($classExamData as $data)
                    <option value="{{ $data->class_exam_name }}">{{ $data->class_exam_name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <div class="mr-5">
                    <label for="academic_year_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Name:</label>
                </div>
                <select name="academic_year_name" id='date-academic_year_name' class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Select Year</option>
                    @foreach($academicYearData as $data)
                    <option value="{{ $data->academic_year_name }}">{{ $data->academic_year_name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="flex justify-end">
                <button type="button" class="  text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get Data
                </button>
            </div>
        </div>
    </form>
    <div class="flex justify-center text-md font-bold">
        <h2>CLASS WISE SHORT CODE SETTING</h2>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">

        <thead class="text-lg text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    SL
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    SHORT CODE NAME
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>



            </tr>

        </thead>
        <tbody>
            @foreach($shortCodeData as $key=> $data)
            <tr class=" border-b capitalize text-lg">
                <th scope="row" class="px-6 py-4 font-medium  text-black whitespace-nowrap dark:text-blue-100">
                    {{$key + 1}}
                </th>
                <td class="px-6 py-4">
                    {{$data->short_code}}
                </td>

                <td class="px-6 py-4  text-center">

                    <input id="group_{{ $data->group_name }}" type="checkbox" value="{{ $data->group_name }}" name="group_name" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="group_{{ $data->group_name }}" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $data->group_name }}</label>

                </td>
            </tr>
            @endforeach




        </tbody>
    </table>
    <br><br>
    <div class="grid md:grid-cols-3">
        <div class="mr-10 md:flex justify-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
        </div>
        <div class="mr-10 md:flex justify-center">
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Close</button>
        </div>

        <div class="ml-32 md:flex justify-center">
            <h3>Total = <span class="border border-2"></span>
            </h3>
        </div>

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