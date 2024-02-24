@extends('Backend.app')
@section('title')
Grade
@endsection
@section('Dashboard')
<div>
    <h3>
        Grade/Grade Setup
    </h3>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
    <form id="myForm" action="">
        <div class="md:flex my-10 ">
            <div class="mr-5">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exam Name :</label>
            </div>
            <div class="mr-5">
                <select id="class_exam_name" name="class_exam_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled selected>Choose a class</option>
                    @foreach($classExamData as $data)
                    <option value="{{ $data->class_exam_name }}">{{ $data->class_exam_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mr-5">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year :</label>
            </div>
            <div class="mr-5">
                <select id="academic_year_name" name="academic_year_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled selected>Choose a class</option>
                    @foreach($academicYearData as $data)
                    <option value="{{ $data->academic_year_name }}">{{ $data->academic_year_name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">GET DATA</button>
            </div>

        </div>


    </form>
    <div class="flex">

        <div class="mr-20">
            <div class="grid gap-6 mb-6  md:grid-cols-1 items-center ps-4 border border-blue-200 rounded dark:border-gray-700 mx-20 px-20 py-10">
                <h3>
                    Select Class
                </h3>
                @foreach($classData as $data)
                <div>
                    <input id="group_{{ $data->class_name }}" type="checkbox" value="{{ $data->class_name }}" name="class_name" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="group_{{ $data->class_name }}" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $data->class_name }}</label>
                </div>
                @endforeach
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get the select elements
                var classExamSelect = document.getElementById('class_exam_name');
                var academicYearSelect = document.getElementById('academic_year_name');
                var checkboxes = document.querySelectorAll('input[type="checkbox"][name="class_name"]');

                // Add event listeners for change events on the select elements
                classExamSelect.addEventListener('change', function() {
                    saveToLocalStorage();
                });

                academicYearSelect.addEventListener('change', function() {
                    saveToLocalStorage();
                });

                // Function to save selected values to localStorage
                function saveToLocalStorage() {
                    var classExamName = classExamSelect.value;
                    var academicYearName = academicYearSelect.value;

                    localStorage.setItem('classExamName', classExamName);
                    localStorage.setItem('academicYearName', academicYearName);
                }
                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener('change', function() {
                        // Array to store selected class names
                        var selectedClasses = [];

                        // Iterate over checkboxes to find checked ones
                        checkboxes.forEach(function(cb) {
                            if (cb.checked) {
                                selectedClasses.push(cb.value);
                            }
                        });

                        // Save selected class names to localStorage
                        localStorage.setItem('selectedClasses', JSON.stringify(selectedClasses));
                    });
                });
            });
        </script>

        <div class=" text-lg font-bold">
            <div class="flex justify-center">
                <h3>
                    Exam Wise Grade Setting
                </h3>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
                <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            SL
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Letter
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            Grade
                        </th>
                        <th scope="col" class="px-6 py-3">
                            1st Range
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            2nd Range
                        </th>
                        <th scope="col" class="px-6 py-3">
                            STATUS
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gradePointData as $key=> $data)
                    <tr class=" border-b capitalize text-lg">
                        <th scope="row" class="px-6 py-4 font-medium  text-black whitespace-nowrap dark:text-blue-100">
                            {{$key + 1}}
                        </th>
                        <td class="px-6 py-4">
                            {{$data->letter_grade}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->grade_point}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->mark_point_1st}}
                        </td>
                        <td class="px-6 py-4 ">
                            {{$data->mark_point_2nd}}
                        </td>
                        <td class="px-6 py-4 ">
                            <div>
                                <input id="active" type="checkbox" value="active" name="status" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="active" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br> <br>

    <div class="md:flex justify-center">
        <div class="mr-10">
            <button type="submit" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">GET Config View</button>
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