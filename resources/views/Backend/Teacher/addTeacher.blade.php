@extends('Backend.app')
@section('title')
Add Teacher
@endsection
@section('Dashboard')
@include('/Message/message')

<div class="mx-10 mt-10">
    <h1 class="text-2xl text-accent">Teacher Information</h1>
    <div class="">
        <form action="{{route('teacher.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- student information --}}
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <label>First Name:</label>
                    <span class="text-red-500">*</span>
                    <input type="text" name="firstname" placeholder="Enter The First Name" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <label>Last Name:</label>
                    <span class="text-red-500">*</span>
                    <input type="text" name="lastname" placeholder="Enter The Last Name" class="input input-bordered w-full " />
                </div>
            </div>


            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <label>Birhdate:</label>
                    <span class="text-red-500">*</span>
                    @include('/Dashboard/student/date')
                </div>
                <div class="mt-5 w-[400px]">
                    <label>Id:</label>
                    <span class="text-red-500">*</span>
                    <input type="text" name="teacher_id" placeholder="Enter The Teacher Id" class="input input-bordered w-full " />
                </div>
            </div>

            <div class="md:flex">
                <div class="mt-5 w-[200px] mr-32">
                    <label>Designation:</label>
                    <span class="text-red-500">*</span>
                    <select id="designation" name="designation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Designation</option>
                        <option>Assistant Teacher </option>
                        <option>Teacher</option>
                    </select>
                </div>
                <div class="mt-5 w-[200px] mr-32">
                    <label>Section:</label>
                    <span class="text-red-500">*</span>
                    <select id="Section" name="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Select Section</option>
                        <option>Permanent</option>
                        <option>Provition</option>
                      </select>
                </div>
                <div class="mt-5 w-[200px]">
                    <div class="relative max-w-sm">
                        <label>Joining date:</label>
                    <span class="text-red-500">*</span>
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide type="text" name="joindate" class="input input-bordered block w-full ps-10 p-2.5 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select joining date">
                      </div>
                </div>
            </div>
            <div class="md:flex mt-5">
                
                <div class="mt-5 w-[400px] ">
                    <label>Gender:</label>
                    <span class="text-red-500">*</span><br>
                    <select name="gender" class="select select-accent w-full max-w-xs">
                        <option >Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="mt-5 w-[400px] ml-20">
                    <label>upload the teacher profile picture</label>
                    <span class="text-red-500">*</span>
                    <input type="file" name="image" class="file-input file-input-bordered file-input-accent w-full " />
                   
                </div>
            </div>
            {{-- Present Address --}}
            <h1 class="text-2xl text-accent mt-10">Present Address <span class="text-red-500">*</span></h1>

            <div class="mt-5">
                <input type="text"  name="present_address" placeholder="Enter Street address" class="input input-bordered w-full " />
            </div>
            
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input type="text" name="present_city" placeholder="Enter The City" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" name="present_state" placeholder="Enter The State" class="input input-bordered w-full " />
                </div>
            </div> 
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input type="text" name="present_country" placeholder="Enter The Country" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" name="present_zip_code" placeholder="Enter The Zip Code" class="input input-bordered w-full " />
                </div>
            </div>

            {{-- Permanent address --}}
            <h1 class="text-2xl text-accent mt-10">Permanent Address <span class="text-red-500">*</span></h1>

            <div class="mt-5">
                <input type="text" name="parmanent_address" placeholder="Enter Street address" class="input input-bordered w-full " />
            </div>
            
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input type="text" name="parmanent_city" placeholder="Enter The City" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" name="parmanent_state" placeholder="Enter The State" class="input input-bordered w-full " />
                </div>
            </div> 
            <div class="md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <input type="text" name="parmanent_country" placeholder="Enter The Country" class="input input-bordered w-full " />
                </div>
                <div class="mt-5 w-[400px]">
                    <input type="text" name="parmanent_zip_code" placeholder="Enter The Zip Code" class="input input-bordered w-full " />
                </div>
            </div>

            <h1 class="text-2xl text-accent mt-10">Contact Information</h1>
            <div class="mt-5 md:flex">
                <div class="mt-5 w-[400px] mr-32">
                    <label>Gmail:</label>
                    <span class="text-red-500">*</span>
                    @include('/Dashboard/student/gmail')
                </div>
                
                <div class="mt-5 w-[400px]">
                    <label>Mobile No:</label>
                    <span class="text-red-500">*</span>
                        <input type="tel" name="mobile" name="phone" id="floating_phone" placeholder="Enter The mobile number" class="input input-bordered w-full " />
                </div>
                

            </div>
            <div class="mt-5 md:flex ">
              <div class="mt-5 w-[400px] mr-32">
                <label>Passworde:</label>
                    <span class="text-red-500">*</span>
                <input type="password" name="password" placeholder="Enter password" class="input input-bordered w-full" />
              </div>
              <div class="mt-5 w-[400px]">
                <label>NID:</label>
                    <span class="text-red-500">*</span>
                <input type="text" name="nid" placeholder="Enter nid" class="input input-bordered w-full" />

              </div>
            </div>
            <div class="hidden mt-5 w-[400px]">

                <input name="school_code" value="{{$schoolCode}}" type="text"
                    class="hidden input input-bordered w-full " />
            </div>
            <div class="my-5 flex justify-end ">
                <button type="submit" class=" btn btn-accent btn-outline text-white ">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

@endsection