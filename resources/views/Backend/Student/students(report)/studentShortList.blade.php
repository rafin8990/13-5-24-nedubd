@extends('Backend.app')
@section('title')
    Student Short List Information
@endsection
@section('Dashboard')
    <div>
        <h3>
            Student Short List Information
        </h3>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10 border-2 md:p-5">


        <div class="grid gap-6 mb-6 md:grid-cols-4 mt-2">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Class
                </label>
                <select id="" name="class"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Choose a class</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Group
                </label>
                <select id="" name="group"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Choose a group</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Section
                </label>
                <select id="" name="section"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Choose a Section</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>


            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Category
                </label>
                <select id="" name="category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Choose a Category</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Hall Name
                </label>
                <select id="" name="hall_name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Choose a Hall Name</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Blood Group
                </label>
                <select id="" name="blood_group"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Choose a Blood Group</option>
                    <option value="">x</option>
                    <option value="">y</option>
                    <option value="">z</option>
                </select>
            </div>


            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Gender
                </label>
                <select id="" name="gender"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Select gender</option>
                    <option value="">Male</option>
                    <option value="">Female</option>

                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Religion
                </label>
                <select id="" name="religion"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Select Religion</option>
                    <option value="">Islam</option>
                    <option value="">Hindhu</option>

                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Students Status
                </label>
                <select id="" name="student_status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Select student status</option>
                    <option value="">active</option>
                    <option value="">In active</option>

                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Academic Year
                </label>
                <select id="" name="academic_year"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Select Academic Year</option>
                    <option value="">x</option>
                    <option value="">y</option>

                </select>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar"> Status
                </label>
                <select id="" name="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     ">
                    <option selected>Select status</option>
                    <option value="">active</option>
                    <option value="">In active</option>

                </select>
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar"> From Date
                </label>
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input datepicker datepicker-autohide type="text" name="from_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5      "
                        placeholder="Select date">
                </div>

            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar"> To Date
                </label>
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input datepicker datepicker-autohide type="text" name="to_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5      "
                        placeholder="Select date">
                </div>

            </div>




        </div>

        <div class="grid md:grid-cols-4  grid-cols-2">
            <div class="">
                <input id="" type="checkbox" value="" name="class_name"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Student ID</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="name"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Name</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="roll"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Roll</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="class"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Class</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="section"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Section</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="group"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Group</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="category"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Category</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="gender"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Gender</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="religion"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Religion</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="mobile"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Mobile</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="Father_name"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">father's Name</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="father_nid"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Father NID</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="father_Birthdate"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Father Birth
                    Date</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="mother_name"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Mother's Name</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="mother_nid"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Mother NID</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="mother_birthdate"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Mother Birth
                    Date</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="dob"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Date of Birth</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="admission_date"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Admission Date</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="blood_group"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Blood Group</label>

            </div>
            <div class="">
                <input id="" type="checkbox" value="" name="status"
                    class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 ">Status</label>

            </div>
        </div>
        <div class="md:flex justify-end mr-10 mt-10">
            <div class="">
                <button type="button"
                    class="  text-white bg-rose-600 hover:bg-rose-600 focus:ring-4 focus:ring-rose-600 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2   focus:outline-none ">PDF
                    Download
                </button>
            </div>
            <div class="">
                <button type="button"
                    class="  text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none ">
                    View Report
                </button>
            </div>
        </div>




    </div>

    <div class="md:flex justify-start ml-10 mt-10">
        <div class="">
            <button type="button"
                class="  text-white bg-rose-600 hover:bg-rose-600 focus:ring-4 focus:ring-rose-600 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2   focus:outline-none ">
                Download excel
            </button>
        </div>
        <div class="">
            <button type="button"
                class="  text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none ">
                Report Print
            </button>
        </div>
    </div>
@endsection
