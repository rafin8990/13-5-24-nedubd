@extends('Backend.app')
@section('title')
    Exam Marks
@endsection
@section('Dashboard')
    <!-- Message -->
    @include('/Message/message')

    <div>
        <h1 class="">Exam Marks</h1>
    </div>



    <div class="mx-10 mt-5">
        <div class=" mb-3">
            <div class="md:flex  ">
                <form action="{{route('generateExcel',$school_code)}}" method="POST" class="grid md:grid-cols-6 lg:grid-cols-8 gap-8">
                @csrf
                    <!-- Class Name -->
                    <div class="col-span-1">

                        <div class="">
                            <label for="class" class="text-gray-700">Class:</label>
                            <select
                                name="class"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option disabled selected value="">Select</option>
                                @foreach ($classData as $data)
                                    <option value="{{ $data->class_name }}">{{ $data->class_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-span-1">

                        <div class="">
                            <label for="group" class="text-gray-700">Group:</label>
                            <select
                            name="group"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option disabled selected value="">Select</option>
                                @foreach ($groupData as $data)
                                    <option value="{{ $data->group_name }}">{{ $data->group_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-span-1">

                        <div class="">
                            <label for="section" class="text-gray-700">Section:</label>
                           
                            <select
                            name="section"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option disabled selected value="">Select</option>
                                @foreach ($sectionData as $data)
                                    <option value="{{ $data->section_name }}">{{ $data->section_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <!-- Shift -->
                    <div class="col-span-1">
                        <div class="">
                            <label for="class" class="text-gray-700">Shift:</label>
                            <select
                            name="shift"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option disabled selected value="">Select</option>
                                @foreach ($shiftData as $data)
                                    <option value="{{ $data->shift_name }}">{{ $data->shift_name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <!-- Subject -->
                    <div class="col-span-1">
                        <div class=""> 
                        <label for="class" class="text-gray-700">Subject:</label>
                            <select
                            name="subject"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option disabled selected value="">Select</option>
                                @foreach ($subjectData as $data)
                                    <option value="{{ $data->subject_name }}">{{ $data->subject_name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <!-- Exam -->
                    <div class="col-span-1">
                        <div class="">
                            <label for="class" class="text-gray-700">Exam:</label>
                            <select
                            name="exam"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option disabled selected value="">Select</option>
                                @foreach ($classExamData as $data)
                                    <option value="{{ $data->class_exam_name }}">{{ $data->class_exam_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- Year -->
                    <div class="col-span-1">
                        <div class="">
                            <label for="class" class="text-gray-700">Year:</label>

                            <select
                            name="year"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option disabled selected value="">Select</option>
                                @foreach ($academicYearData as $data)
                                    <option value="{{ $data->academic_year_name }}">{{ $data->academic_year_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>




                    <div class="col-span-1">
                        <div class="">
                            <button type="submit"
                                class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-800 mt-5">Find</button>
                        </div>
                    </div>

</form>

                <div>
                    <div class="col-span-3">
                        <div class="md:mt-5">
                            <input type="file" class="file-input border file-input-primary w-full max-w-xs" />
                            <br>
                            <button
                                class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-800 mt-3">Upload</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>


    <hr>


    <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
        <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    SL
                </th>
                <th scope="col" class="px-6 py-3">
                    Student Name
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Student ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Class
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Roll
                </th>
                <th scope="col" class="px-6 py-3">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    T-1 = 25/00
                </th>
                <th scope="col" class="px-6 py-3">
                    CQ = 100/00
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    T. Marks
                </th>
                <th scope="col" class="px-6 py-3">
                    Grade
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    GPA
                </th>
            </tr>
        </thead>
        <tbody>




        </tbody>
    </table>

    <div class="mt-5">

        <div class="w-full ">
            <div class="flex justify-around">
                <div class=" flex justify-between gap-5 ">
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Blank
                        Page</button>
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Print
                        Mark Page</button>

                </div>

                <div class=" flex justify-between gap-5">
                    <input
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        type="submit" value="Save">
                    <a class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                        href="/dashboard/{{$school_code}}"><i class="fa fa-times"></i> Close</a>
                </div>

            </div>
        </div>
    </div>
   
@endsection