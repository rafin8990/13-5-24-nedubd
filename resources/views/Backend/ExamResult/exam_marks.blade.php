@extends('Backend.app')
@section('title')
Exam Marks
@endsection
@section('Dashboard')

<!-- Message -->
@include('/Message/message')

<div>
    <h1 class="text-4xl font font-bold my-5 mx-5 text-accent">Exam Marks</h1>
</div>



<div>
    <div class=" mb-3">
        <div class="card-body p-2">
            <div class="grid grid-cols-11 gap-4">
                <!-- Class Name -->
                <div class="col-span-1">

                    <div class="">
                        <label for="class" class="text-gray-700">Class Name:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled selected value="">Select</option>
                            @foreach($classData as $data)
                            <option value="{{ $data->class_name }}">{{ $data->class_name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <!-- Group -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Group:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option disabled selected value="">Select</option>
                            @foreach($groupData as $data)
                            <option value="{{ $data->group_name }}">{{ $data->group_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Section -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Section:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option disabled selected value="">Select</option>
                            @foreach($sectionData as $data)
                            <option value="{{ $data->section_name }}">{{ $data->section_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Shift -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Shift:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option disabled selected value="">Select</option>
                            @foreach($shiftData as $data)
                            <option value="{{ $data->shift_name }}">{{ $data->shift_name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <!-- Subject -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Subject:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option disabled selected value="">Select</option>
                            @foreach($subjectData as $data)
                            <option value="{{ $data->subject_name }}">{{ $data->subject_name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <!-- Exam -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Exam:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option disabled selected value="">Select</option>
                            @foreach($classExamData as $data)
                            <option value="{{ $data->class_exam_name }}">{{ $data->class_exam_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Year -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Year:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            <option disabled selected value="">Select</option>
                            @foreach($academicYearData as $data)
                            <option value="{{ $data->academic_year_name }}">{{ $data->academic_year_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>




                <div class="col-span-1">
                    <div class="">
                        <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-5" onclick="exam_marks_input_search()">Find</button>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="">
                        <input type="file" class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
                        <br>
                        <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-3" onclick="exam_marks_input_search()">Upload</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


<hr>

<div class="mt-5">

    <div class="w-full ">
        <div class="flex justify-around">
            <div class=" flex justify-between gap-5 ">
                <button class="btn btn-info text-white w-full mb-2 md:mb-0" target="_blank">Blank Page</button>
                <button class="btn btn-info text-white w-full print" target="_blank">Print Mark Page</button>
            </div>
            <div class=" flex justify-between gap-5">

                <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit" value="Save">
                <a class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" href="/dashboard"><i class="fa fa-times"></i> Close</a>
            </div>

        </div>
    </div>



</div>

@endsection