@extends('Backend.app')
@section('title')
    Exam Progress Report
@endsection
@section('Dashboard')
@include('/Message/message')
<div>
    <h1 class="text-4xl font font-bold my-5 mx-5 text-accent">Exam Progress Report</h1>
</div>
<div class=" mb-3 card">
    <div class="card-body min-h-500 border rounded w-4/6 mx-auto">
        <div class="w-4/6 mx-auto p-5">
            <div class="flex justify-between items-center mb-5">
                <label for="class" class="text-gray-700 text-xl w-[150px] mr-2">CLASS:</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                    <option disabled selected value="">Select</option>
                    <option value="1">Play</option>
                    <option value="2">Nursery</option>
                    <option value="3">KG</option>
                    <option value="4">One</option>
                    <option value="5">Two</option>
                    <option value="6">Three</option>
                    <option value="7">Four</option>
                    <option value="8">Five</option>
                    <option value="9">Six</option>
                    <option value="10">Seven</option>
                    <option value="11">Eight</option>
                    <option value="12">Nine</option>
                    <option value="13">Ten</option>
                    <option value="14">all inactive</option>
                    <option value="15">Pre Play</option>
                </select>
            </div>

            <div class="flex justify-between items-center mb-5">
                <label for="class" class="text-gray-700 text-xl w-[150px] mr-2">GROUP:</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                    <option disabled selected value="">Select</option>
                    <option value="1">Bangla Version</option>
                    <option value="2">English Version</option>
                    <option value="3">Science</option>
                    <option value="4">Business Study</option>
                    <option value="5">N/A</option>

                </select>
            </div>
            <div class="flex justify-between items-center mb-5">
                <label for="class" class="text-gray-700 text-xl w-[150px] mr-2">SECTION:</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                    <option disabled selected value="">Select</option>
                    <option value="1">N/A</option>
                    <option value="2">Morning</option>
                    <option value="3">Day</option>
                    <option value="4">Lotus Play Mor</option>
                    <option value="5">Lotus Play Day</option>
                    <option value="6">Rose Play Day</option>
                    <option value="7">Rose Play Mor</option>
                    <option value="8">Maloti Mor Nur</option>
                    <option value="9">Sunflower Day Nur</option>
                    <option value="10">Lily KG Mor</option>
                    <option value="11">Bela Day KG</option>
                    <option value="12">Bokul One</option>
                    <option value="13">Day Daffodil</option>
                    <option value="14"> Day Crimson</option>
                    <option value="15">Morning Crimson</option>

                </select>
            </div>

            <div class="flex justify-between items-center mb-5">
                <label for="class" class="text-gray-700 text-xl w-[150px] mr-2">STUDENT ROLL:</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                    <option disabled selected value="">Select</option>
                    <option value="1193">20240006</option>
                    <option value="913">20220645</option>
                    <option value="1264">20240075</option>
                    <option value="1199">20240012</option>
                    <option value="937">20220669</option>
                    <option value="966">20230004</option>
                    <option value="1260">20240071</option>
                    <option value="1257">20240068</option>
                    <option value="1228">20240039</option>
                    <option value="884">20220618</option>
                    <option value="1191">20240004</option>
                    <option value="1187">20230217</option>
                    <option value="961">20220693</option>
                    <option value="912">20220644</option>
                    <option value="1248">20240059</option>
                    <option value="1200">20240013</option>
                    <option value="1223">20240035</option>

                </select>

            </div>
            <div class="flex justify-between items-center mb-5">
                <label for="class" class="text-gray-700 text-xl w-[150px] mr-2">EXAM NAME:</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                    <option disabled selected value="">Select</option>
                    <option value="1">1st Semester </option>
                    <option value="2">2nd Semester </option>
                    <option value="3">3rd Semester</option>
                    <option value="4">1st Midterm</option>
                    <option value="5">2nd Midterm</option>
                    <option value="6">3rd Midterm</option>

                </select>
            </div>
            <div class="flex justify-between items-center mb-5">
                <label for="class" class="text-gray-700 text-xl w-[150px] mr-2">MERIT STATUS:</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                    <option disabled selected value="">Select</option>
                    <option value="1">Section Wise</option>
                    <option value="2">Class Wise</option>

                </select>
            </div>
            <div class="flex justify-between items-center mb-5">
                <label for="class" class="text-gray-700 text-xl w-[150px] mr-2">YEAR:</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5      ">
                    <option value="2023">2023</option>
                    <option value="2024" selected="">2024</option>
                    <option value="2025">2025</option>

                </select>
            </div>
            <div class="row form-group">
                <div class="offset-md-8 col-md-2" style="">
                    <button style="width: 100%;" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 " id="feesCollectSaved">Print</button>

                </div>

                <div class="flex justify-between items-center mb-5">
                    <label for="class" class="text-gray-700 font-bold w-[150px] mr-2">GROUP:</label>
                    <select id="group-select"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                        <option disabled selected value="">Select</option>
                        @foreach ($groupData as $data)
                            <option value="{{ $data->group_name }}">{{ $data->group_name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="flex justify-between items-center mb-5">
                    <label for="class" class="text-gray-700 font-bold w-[150px] mr-2">SECTION:</label>
                    <select id="section-select"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                        <option disabled selected value="">Select</option>
                        @foreach ($sectionData as $data)
                            <option value="{{ $data->section_name }}">{{ $data->section_name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="flex justify-between items-center mb-5">
                    <label for="student" class="text-gray-700 font-bold w-[150px] mr-2">STUDENT ROLL:</label>
                    <select id="student-select"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                        <option disabled selected value="">Select</option>
                    </select>
                </div>
                <div class="flex justify-between items-center mb-5">
                    <label for="class" class="text-gray-700 font-bold w-[150px] mr-2">EXAM NAME:</label>
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                        <option disabled selected value="">Select</option>
                        @foreach ($classExamData as $data)
                            <option value="{{ $data->class_exam_name }}">{{ $data->class_exam_name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="flex justify-between items-center mb-5">
                    <label for="class" class="text-gray-700 font-bold w-[150px] mr-2">MERIT STATUS:</label>
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                        <option disabled selected value="">Select</option>
                        <option value="1">Section Wise</option>
                        <option value="2">Class Wise</option>

                    </select>
                </div>
                <div class="flex justify-between items-center mb-5">
                    <label for="class" class="text-gray-700 font-bold w-[150px] mr-2">YEAR:</label>
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                        <option disabled selected value="">Select</option>
                        @foreach ($academicYearData as $data)
                            <option value="{{ $data->academic_year_name }}">{{ $data->academic_year_name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="hidden">

                    <input type="text" value="{{ $school_code }}" id="schoolCode">
                </div>
                <div class="row form-group">
                    <div class="offset-md-8 col-md-2" style="">
                        <button style="width: 100%;"
                            class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            id="feesCollectSaved">Print</button>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to fetch students based on selected class, group, and section
            function fetchStudents() {
                // Get the selected values of class, group, and section
                var className = $('#class-select').val();
                var groupName = $('#group-select').val();
                var sectionName = $('#section-select').val();


                var schoolCode = $('#schoolCode').val();
                console.log(schoolCode);
                // Make an AJAX request to fetch students
                $.ajax({
                    url: '/dashboard/getStudents/' + schoolCode + '/' + className + '/' + groupName + '/' +
                        sectionName,
                    type: 'GET',
                    success: function(data) {
                        // Clear existing options in the student select field
                        $('#student-select').empty();

                        // Populate student options
                        $.each(data, function(key, value) {
                            $('#student-select').append('<option value="' + key + '">' + value +
                                '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            // Event listeners for class, group, and section select fields
            $('#class-select, #group-select, #section-select').on('change', function() {
                // When any of these fields change, fetch students
                fetchStudents();
            });

            // Initially fetch students based on default selected values
            fetchStudents();
        });
    </script>
@endsection
