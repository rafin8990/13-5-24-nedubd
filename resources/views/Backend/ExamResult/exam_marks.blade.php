@extends('Backend.app')
@section('title')
Exam Marks
@endsection
@section('Dashboard')

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
                        <select class="select select-primary text-md w-full max-w-xs">
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
                </div>
                <!-- Group -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Group:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="select select-primary text-md w-full max-w-xs">

                            <option disabled selected value="">Select</option>
                            <option value="1">Bangla Version</option>
                            <option value="2">English Version</option>
                            <option value="3">Science</option>
                            <option value="4">Business Study</option>
                            <option value="5">N/A</option>
                        </select>
                    </div>
                </div>
                <!-- Section -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Section:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="select select-primary text-md w-full max-w-xs">

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
                </div>
                <!-- Shift -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Shift:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="select select-primary text-md w-full max-w-xs">

                            <option disabled selected value="">Select</option>

                        </select>
                    </div>
                </div>
                <!-- Subject -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Subject:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="select select-primary text-md w-full max-w-xs">

                            <option disabled selected value="">Select</option>

                        </select>
                    </div>
                </div>
                <!-- Exam -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Exam:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="select select-primary text-md w-full max-w-xs">

                            <option disabled selected value="">Select</option>
                            <option value="1">1st Semester </option>
                            <option value="2">2nd Semester </option>
                            <option value="3">3rd Semester</option>
                            <option value="4">1st Midterm</option>
                            <option value="5">2nd Midterm</option>
                            <option value="6">3rd Midterm</option>

                        </select>
                    </div>
                </div>
                <!-- Year -->
                <div class="col-span-1">
                    <div class="">
                        <label for="class" class="text-gray-700">Year:</label>
                        <input type="hidden" name="classExcelLoad" id="classExcelLoad" value="">

                        <select class="select select-primary text-md w-full max-w-xs">

                            <option disabled selected value="">Select</option>
                            <option value="2023">2023</option>
                            <option value="2024" selected>2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>
                </div>




                <div class="col-span-1">
                    <div class="">
                        <button class="btn btn-primary mt-5" onclick="exam_marks_input_search()">Find</button>
                    </div>
                </div>
                <div class="col-span-3">
                    <div class="">
                        <input type="file" class="file-input file-input-bordered file-input-primary w-full max-w-xs" />
                        <br>
                        <button class="btn btn-primary mt-1 w-full max-w-xs" onclick="exam_marks_input_search()">Upload</button>
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

                <input class="btn bg-blue-500 text-white w-full" type="submit" value="Save">
                <a class="btn bg-red-500 text-white w-full" href="/dashboard"><i class="fa fa-times"></i> Close</a>
            </div>

        </div>
    </div>



</div>

@endsection