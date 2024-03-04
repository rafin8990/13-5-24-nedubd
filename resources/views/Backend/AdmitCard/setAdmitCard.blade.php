@extends('Backend.app')
@section('title')
Admit Setup
@endsection
@section('Dashboard')
<div>
    <h3>
        Admit Setup
    </h3>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
    <form action="{{ url('dashboard/setShortCode') }}" method="POST" enctype="multipart/form-data" class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-9 gap-4 my-10 ">
            <div class=" md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class :</label>
            </div>
            <div class="">
                <select id="class_name" name="class_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a class</option>
                    @foreach($classData as $data)
                    <option value="{{ $data->class_name }}">{{ $data->class_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class=" md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group :</label>
            </div>
            <div class="">
                <select id="group_name" name="group_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a group</option>
                    @foreach($groupData as $data)
                    <option value="{{ $data->group_name }}">{{ $data->group_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class=" md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exam :</label>
            </div>
            <div class="">
                <select id="class_exam_name" name="class_exam_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a exam</option>
                    @foreach($classExamData as $data)
                    <option value="{{ $data->class_exam_name }}">{{ $data->class_exam_name }}</option>
                    @endforeach

                </select>
            </div>

            <div class=" md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year :</label>
            </div>
            <div class="">
                <select id="academic_year_name" name="academic_year_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Select Year</option>
                    @foreach($yearData as $data)
                    <option value="{{ $data->academic_year_name }}">{{ $data->academic_year_name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button type="submit" onclick="submitForm()"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">GET DATA</button>
            </div>
        </div>
    </form>
    <script>
        function submitForm() {
            // Get the selected values
            var className = document.getElementById('class_name').value;
            var classExamName = document.getElementById('class_exam_name').value;
            var academicYearName = document.getElementById('academic_year_name').value;
            // var shortCodes = document.querySelectorAll('input[name="short_code[]"]:checked');

            // Create a form element
            var form = document.createElement('form');
            form.setAttribute('method', 'POST');
            form.setAttribute('action', '{{ route("add.admit.card") }}');
            form.setAttribute('enctype', 'multipart/form-data');

            // Add CSRF token input
            var csrfTokenInput = document.createElement('input');
            csrfTokenInput.setAttribute('type', 'hidden');
            csrfTokenInput.setAttribute('name', '_token');
            csrfTokenInput.setAttribute('value', '{{ csrf_token() }}');
            form.appendChild(csrfTokenInput);

            // Add other inputs
            var classNameInput = document.createElement('input');
            classNameInput.setAttribute('type', 'hidden');
            classNameInput.setAttribute('name', 'class_name');
            classNameInput.setAttribute('value', className);
            form.appendChild(classNameInput);

            var classExamNameInput = document.createElement('input');
            classExamNameInput.setAttribute('type', 'hidden');
            classExamNameInput.setAttribute('name', 'class_exam_name');
            classExamNameInput.setAttribute('value', classExamName);
            form.appendChild(classExamNameInput);

            var academicYearNameInput = document.createElement('input');
            academicYearNameInput.setAttribute('type', 'hidden');
            academicYearNameInput.setAttribute('name', 'academic_year_name');
            academicYearNameInput.setAttribute('value', academicYearName);
            form.appendChild(academicYearNameInput);

            // Append the form to the document body and submit it
            document.body.appendChild(form);
            form.submit();
        }
    </script>



    <div class=" text-lg font-bold">
        <div class="flex justify-center">
            <h3>
                ADMIT SETTING
            </h3>
        </div>

        <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
            <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        SL
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SUBJECT NAME
                    </th>
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time
                    </th>
                    <th scope="col" class="px-6 py-3 bg-blue-500">
                        STATUS
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
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
        </div>
        <div class="mr-10">
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Close</button>
        </div>

        <div class="ml-32">
            <h3>Total = <div class="border-2"></div>
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