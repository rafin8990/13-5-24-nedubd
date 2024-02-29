@extends('Backend.app')
@section('title')
Exam Mark Setup
@endsection
@section('Dashboard')


<div>
    <h3>
        Exam Mark Setup
    </h3>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
    <form action="{{ url('dashboard/setExamMarks') }}" method="POST" enctype="multipart/form-data" class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
        @csrf
        @method('PUT')
        <div>
            <div class="grid gap-6 mb-6 md:grid-cols-4 mt-2">
                <div>
                    <div class="mr-5">
                        <label for="class_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Name:</label>
                    </div>
                    <select id="class_name" name="class_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">


                        @if($searchClassData=== null)
                        <option disabled selected>Choose a class</option>
                        @elseif($searchClassData )
                        <option value="{{ $searchClassData }}" selected>{{$searchClassData}}</option>
                        @endif

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
                        @if($searchClassExamName=== null)
                        <option selected>Choose a exam</option>
                        @elseif($searchClassExamName )
                        <option value="{{ $searchClassExamName }}" selected>{{$searchClassExamName}}</option>
                        @endif

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
                        @if($searchAcademicYearName=== null)
                        <option selected>Select Year</option>
                        @elseif($searchAcademicYearName )
                        <option value="{{ $searchAcademicYearName }}" selected>{{$searchAcademicYearName}}</option>
                        @endif

                        @foreach($academicYearData as $data)
                        <option value="{{ $data->academic_year_name }}">{{ $data->academic_year_name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="flex justify-end">
                    <!-- <button type="button" class="  text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get Data
                </button> -->
                    <button type="button" onclick="submitForm()" class="text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get Data</button>

                </div>
            </div>
        </div>
        <script>
            // submitForm.js

            function submitForm() {
                // Fetch form data
                const class_name = document.getElementById('class_name').value;
                const class_exam_name = document.getElementById('class_exam_name').value;
                const academic_year_name = document.getElementById('date-academic_year_name').value;

                // Construct form data
                const formData = new FormData();
                formData.append('class_name', class_name);
                formData.append('class_exam_name', class_exam_name);
                formData.append('academic_year_name', academic_year_name);

                // Send form data to the server using fetch
                fetch('/set.exam.marks', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json(); // Assuming server responds with JSON
                    })
                    .then(data => {
                        // Handle success response from server
                        console.log(data);
                    })
                    .catch(error => {
                        // Handle errors
                        console.error('There was a problem with your fetch operation:', error);
                    });
            }
        </script>
        <div>
            <div class="grid gap-6 mb-6 py-5 md:grid-cols-1 items-center ps-4 border border-gray-200 rounded dark:border-gray-700 mx-20">
                <h3>Select subject</h3>
                <div>
                    <input id="bordered-checkbox-1" type="checkbox" value="" name="bordered-checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select All</label>
                </div>
            </div>
        </div>


        <div>
            <div class="flex justify-center text-lg font-bold bg-rose-200">
                <h3>
                    EXAM WISE MARK SETTING
                </h3>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
                <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                    <tr>

                    </tr>
                </thead>
                <tbody>
                    <tr class=" border-b border-blue-400">

                    </tr>



                </tbody>
            </table>
        </div>
        <br><br>
        <div class="md:flex justify-center">
            <div class="mr-10">
                <button type="submit" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mark Config View</button>
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
    </form>
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