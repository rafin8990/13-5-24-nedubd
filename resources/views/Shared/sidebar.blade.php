<style>
    .scrollbar::-webkit-scrollbar {
        width: 1px;
    }

    .scrollbar::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px rgb(255, 255, 255);
        border-radius: 10px;
    }

    .scrollbar::-webkit-scrollbar-thumb {
        background: #0000FF;
        border-radius: 10px;
    }

    .scrollbar::-webkit-scrollbar-thumb:hover {
        background: white;
    }

    .clicked {
    --b: 0.1em; /* the thickness of the line */
    --c: #ffffff; /* the color */
    color: #ffffff;
    padding-block: var(--b);
    background:
        linear-gradient(var(--c) 100%, #000 0) 0% calc(100% - var(--_p, 0%))/100% 200%,
        linear-gradient(var(--c) 0 0) 0% var(--_p, 0%)/var(--_p, 0%) var(--b) no-repeat;
    -webkit-background-clip: text, padding-box;
    background-clip: text, padding-box;
    transition: .3s var(--_s, 0s) linear, background-size .3s calc(.3s - var(--_s, 0s));
      --_p: 100%; /* Set underline width to 100% */
    --_s: .3s;
}

.clicked:hover {
   /* Set transition duration */
}

    
</style>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0 duration-1000"
    aria-label="logo-sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto scrollbar gradient-bg">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg text-white   group">
                    <span class="ms-3 text-white">Dashboard</span>
                </a>
            </li>

            <!-- dashboard  -->
            <li>
                <a href="/dashboard" class="flex items-center p-2 text-white  group">
                    <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap text-white ">Dashboard</span>

                </a>
            </li>

            <!-- online Application  -->
            <li class="dropdown">
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-nedubd" data-collapse-toggle="dropdown-nedubd">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">NEDUBD</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>

                </button>
                <ul id="dropdown-nedubd" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/dashboard/addAdmin"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Create
                            New Member</a>
                    </li>
                    <li>
                        <a href="/dashboard/addSchoolInfo"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                            School Info</a>
                    </li>
                    <li>
                        <a href="/dashboard/addSchoolAdmin"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                            School Admin</a>
                    </li>


                </ul>
            </li>



            <!-- online Application  -->
            <li class="dropdown">
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-online-examination" data-collapse-toggle="dropdown-online-examination">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Online
                        Application </span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>

                </button>
                <ul id="dropdown-online-examination" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List
                            Of Application</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Report
                            Applicant</a>
                    </li>

                </ul>
            </li>


            <!-- Student route  -->
            <li class="dropdown">
                    <p class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                        aria-controls="dropdown-student" data-collapse-toggle="dropdown-student">
                        <svg class="w-5 h-5 text-white transition duration-75 " xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 256 256">
                            <rect fill="none" />
                            <line x1="32" y1="64" x2="32" y2="144" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="8" />
                            <path d="M54.2,216a88.1,88.1,0,0,1,147.6,0" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                            <polygon points="224 64 128 96 32 64 128 32 224 64" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                            <path d="M169.3,82.2a56,56,0,1,1-82.6,0" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                        </svg>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Student</span>

                        <svg class="w-3 h-3 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </p>


                    <ul id="dropdown-student" class="hidden py-2 space-y-2">

                        <li>
                            <a href="{{route('AddStudentForm')}}"
                                class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                New Student </a>
                        </li>
                        <li>
                            <a href="{{route('updateStudentBasicInfo')}}"
                                class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Update
                                Student Basic Info</a>
                        </li>
                        <li>
                            <a href="{{route('studentProfileUpdate')}}"
                                class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Student
                                Profile Update</a>
                        </li>
                        <li>
                            <a href="{{route('uploadExelFile')}}"
                                class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                                Exel File</a>
                        </li>
                        <li>
                            <a href="{{route('uploadStudentPhoto')}}"
                                class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                                Photo</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Migrate
                                Student</a>
                        </li>
                        <li class="dropdown">
                            <p class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                            aria-controls="dropdown-student_report" data-collapse-toggle="dropdown-student_report">
                            <svg class="w-5 h-5 text-white transition duration-75 " xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 256 256">
                                <rect fill="none" />
                                <line x1="32" y1="64" x2="32" y2="144" fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="8" />
                                <path d="M54.2,216a88.1,88.1,0,0,1,147.6,0" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                                <polygon points="224 64 128 96 32 64 128 32 224 64" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                                <path d="M169.3,82.2a56,56,0,1,1-82.6,0" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Reports Students</span>

                            <svg class="w-3 h-3 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg>

                            </p>
                                <ul id="dropdown-student_report" class="hidden py-2 space-y-2">
                                    <li>
                                        <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">
                                    Student Details</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">
                                        Student Short List </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">
                                        E-SIF List </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Student List With photo</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Student Profile</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">religion_wise_std_summary</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Student ID Card</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List of Migrate Student</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Admission Summary</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Class Section Std Total</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Prottoyon Potro</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Transfer Certificate</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Testimonial</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Transfer Certificate List</a>
                                </li>
                        </ul>
                </li>
                </ul>
            </li>


            <li class="dropdown">
                <p class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-exam" data-collapse-toggle="dropdown-exam">
                    <svg class="w-5 h-5 text-white transition duration-75 " xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 256">
                        <rect fill="none" />
                        <line x1="32" y1="64" x2="32" y2="144" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="8" />
                        <path d="M54.2,216a88.1,88.1,0,0,1,147.6,0" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                        <polygon points="224 64 128 96 32 64 128 32 224 64" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                        <path d="M169.3,82.2a56,56,0,1,1-82.6,0" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Exam
                        & Result</span>

                    <svg class="w-3 h-3 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>

                </p>
                <ul id="dropdown-exam" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/dashboard/exam_marks"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">
                            Marks Input </a>
                    </li>
                    <li>
                        <a href="/dashboard/exam_process"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">
                            Exam Process </a>
                    </li>
                    <li>
                        <a href="/dashboard/exam_excel"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">
                            Exam Excel </a>
                    </li>
                    <li>
                        <a href="/dashboard/update_exam_process"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Update
                            Exam Process</a>
                    </li>
                    <li>
                        <a href="/dashboard/student_exam_excel"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Student
                            Exam Excel</a>
                    </li>
                    <li>
                        <a href="/dashboard/exam_marks_delete"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Student
                            exam Marks Delete</a>
                    </li>
                    <li>
                        <a href="/dashboard/exam_sms"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Exam SMS</a>
                    </li>
                </ul>
            </li>
            <!-- student accounts  -->

            <li class="dropdown">

                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-student-Accounts" data-collapse-toggle="dropdown-student-Accounts">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Student
                        Accounts</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>

                </button>

                <ul id="dropdown-student-Accounts" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">
                            Pay Slip Collection</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Quick
                            Collection</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Print
                            Unpaid Payslip </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Collect
                            Unpaid PaySlip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Delete
                            Payslip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">New
                            STD Add PaySlip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">New/Old
                            STD Add payslip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Generate
                            Payslip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Edit
                            Generated Payslip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Generate
                            Multiple Payslip</a>
                    </li>
                    <!-- others  -->
                    <li class="dropdown">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                            aria-controls="dropdown-student-others" data-collapse-toggle="dropdown-student-others">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Others
                            </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-student-others" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Form
                                    Fee</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Donation
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Fine/Fail/Absent
                                    Fess</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Others
                                    Fee</a>
                            </li>
                        </ul>
                    </li>


                    <!-- reports student fees  -->

                    <li class="dropdown">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                            aria-controls="dropdown-student-reports" data-collapse-toggle="dropdown-student-reports">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Reports
                                (STD FEES) </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-student-reports" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Daily
                                    Collection reports</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Gene.
                                    Transfer Inquiry </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Duw/Pay
                                    Summary</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Head
                                    wise Summary</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Oth.
                                    Trans Inquiry</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Transfer
                                    to Accounts</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Paid
                                    Invoice</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List
                                    Of Due/Pay</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List
                                    of Head wise </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List
                                    Of Special Discount</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List
                                    Of Month wise Fees</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List
                                    Of Fine / Fail/Absent</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List
                                    Of Donation</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List
                                    Of Form Fees</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Monthly
                                    Paid Details</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </li>

            <!-- Student Attendence  -->
            <li class="dropdown">
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-student-Attendence" data-collapse-toggle="dropdown-student-Attendence">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Student
                        Attendence </span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>

                </button>
                <ul id="dropdown-student-Attendence" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                            STD Attendence</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Leave
                            Entry Form </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                            Leave Type </a>
                    </li>


                    <!-- reports of student attendence  -->
                    <li class="dropdown">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                            aria-controls="dropdown-student-Reports" data-collapse-toggle="dropdown-student-Reports">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Reports
                                (STD Attendence) </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-student-Reports" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">
                                    Attendence Report</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Attendence
                                    Blank report </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Date
                                    Wise Report</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">List
                                    Of Leave Report</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Section
                                    Wise Summary</a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </li>

            <!-- grand final  -->
            <li class="dropdown">
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-grand" data-collapse-toggle="dropdown-grand">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Grand
                        Final</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>

                </button>
                <ul id="dropdown-grand" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/dashboard/grand_exam_setup"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                            Setup Grand </a>
                    </li>
                    <li>
                        <a href="/dashboard/grand_exam_final_process"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Update
                            Grand Final Process</a>
                    </li>
                    <li>
                        <a href="/dashboard/grand_exam_progress_report"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Student
                            Grand Progress Report</a>
                    </li>
                    <li>
                        <a href="/dashboard/grand_merit_list"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Grand Merit List</a>
                    </li>
                    <li>
                        <a href="/dashboard/grand_fail_list"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Grand Fail List</a>
                    </li>
                    <li>
                        <a href="/dashboard/grand_result_pass_fail_percentage"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Grand Pass/Fail Percentage</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <p class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-report" data-collapse-toggle="dropdown-report">
                    <svg class="w-5 h-5 text-white transition duration-75 " xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 256">
                        <rect fill="none" />
                        <line x1="32" y1="64" x2="32" y2="144" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="8" />
                        <path d="M54.2,216a88.1,88.1,0,0,1,147.6,0" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                        <polygon points="224 64 128 96 32 64 128 32 224 64" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                        <path d="M169.3,82.2a56,56,0,1,1-82.6,0" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Reports(Exams
                        & Result)</span>

                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </p>

                <ul id="dropdown-report" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/dashboard/progressReport"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                            Single Mark Sheet </a>
                    </li>
                    <li>
                        <a href="/dashboard/grandFinal"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Update
                            Grand Final</a>
                    </li>
                    <li>
                        <a href="/dashboard/tebular-format1"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Student
                            Tabulation [Format-1]</a>
                    </li>
                    <li>
                        <a href="/dashboard/tebular-format2"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Tabulation [Format-2]</a>
                    </li>
                    <li>
                        <a href="/dashboard/tebular-format3"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Tabulation [Format-3]</a>
                    </li>
                    <li>
                        <a href="/dashboard/meritList"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Merit List</a>
                    </li>
                    <li>
                        <a href="/dashboard/meritClass"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Merit List</a>
                    </li>
                    <li>
                        <a href="/dashboard/exam-failList"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Fail List Summary</a>
                    </li>
                    <li>
                        <a href="/dashboard/unassignedSubject"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            List of Unassigned Subject</a>
                    </li>
                    <li>
                        <a href="/dashboard/passFailPercentage"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            List of Pass/Fail Percentage</a>
                    </li>
                    <li>
                        <a href="/dashboard/gradeInfo"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            List of Grade Info</a>
                    </li>
                </ul>


            </li>
            <li class="dropdown">
                <p class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-teacher" data-collapse-toggle="dropdown-teacher">
                    <svg class="w-5 h-5 text-white transition duration-75 " xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 256">
                        <rect fill="none" />
                        <line x1="32" y1="64" x2="32" y2="144" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="8" />
                        <path d="M54.2,216a88.1,88.1,0,0,1,147.6,0" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                        <polygon points="224 64 128 96 32 64 128 32 224 64" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                        <path d="M169.3,82.2a56,56,0,1,1-82.6,0" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Teachers</span>

                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </p>

                <ul id="dropdown-teacher" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/dashboard/add-teacher"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                            Teacher </a>
                    </li>
                    <li>
                        <a href="/dashboard/grandFinal"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Teacher
                            List</a>
                    </li>
                    <li>
                        <a href="/dashboard/tebular-format1"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Student
                            Tabulation [Format-1]</a>
                    </li>
                    <li>
                        <a href="/dashboard/tebular-format2"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Tabulation [Format-2]</a>
                    </li>
                    <li>
                        <a href="/dashboard/tebular-format3"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Tabulation [Format-3]</a>
                    </li>
                    <li>
                        <a href="/dashboard/meritList"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Merit List</a>
                    </li>
                    <li>
                        <a href="/dashboard/meritClass"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Merit List</a>
                    </li>
                    <li>
                        <a href="/dashboard/exam-failList"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            Fail List Summary</a>
                    </li>
                    <li>
                        <a href="/dashboard/unassignedSubject"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            List of Unassigned Subject</a>
                    </li>
                    <li>
                        <a href="/dashboard/passFailPercentage"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            List of Pass/Fail Percentage</a>
                    </li>
                    <li>
                        <a href="/dashboard/gradeInfo"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Upload
                            List of Grade Info</a>
                    </li>
                </ul>
            </li>
            <!-- Basic Setting -->

            <li class="dropdown">
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-basic-setting" data-collapse-toggle="dropdown-basic-setting">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Basic
                        Setting </span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>

                </button>
                <ul id="dropdown-basic-setting" class="hidden py-2 space-y-2">
                    <li class="dropdown">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                            aria-controls="dropdown-common-setting" data-collapse-toggle="dropdown-common-setting">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Common
                                Settings</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>

                        </button>
                        <ul id="dropdown-common-setting" class="hidden py-2 space-y-2">
                            <li>
                                <a href="/dashboard/addInstituteInfo"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Institute Info</a>
                            </li>
                            <li>
                                <a href="/dashboard/addSubjectSetup"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Class Subject Setting</a>
                            </li>
                            <li>
                                <a href="/dashboard/addClass"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Class</a>
                            </li>
                            <li>
                                <a href="/dashboard/addSection"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Section</a>
                            </li>
                            <li>
                                <a href="/dashboard/addShift"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    shift</a>
                            </li>
                            <li>
                                <a href="/dashboard/addGroup"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Group</a>
                            </li>
                            <li>
                                <a href="/dashboard/addSubject"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Subject</a>
                            </li>
                            <li>
                                <a href="/dashboard/addAcademicSession"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Academic Session</a>
                            </li>
                            <li>
                                <a href="/dashboard/addAcademicYear"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Academic Year</a>
                            </li>
                            <li>
                                <a href="/dashboard/addBoardExam"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Board Exam</a>
                            </li>
                            <li>
                                <a href="/dashboard/addCategory"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Category</a>
                            </li>
                            <li>
                                <a href="/dashboard/addClassExam"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Class Exam</a>
                            </li>
                            <li>
                                <a href="/dashboard/addClassWiseGroup"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Class wise Group</a>
                            </li>
                            <li>
                                <a href="/dashboard/addClassWiseSection"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Class wise Section</a>
                            </li>
                            <li>
                                <a href="/dashboard/addClassWiseShift"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Class wise Shift</a>
                            </li>
                            <li>
                                <a href="/dashboard/addPeriod"
                                    class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                                    Period</a>
                            </li>


                        </ul>
                    </li>

                </ul>

            </li>

            <!-- Exam Setting -->
            <li class="dropdown">
                <p class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group "
                    aria-controls="dropdown-exam-setting" data-collapse-toggle="dropdown-exam-setting">
                    <svg class="w-5 h-5 text-white transition duration-75 " xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 256 256">
                        <rect fill="none" />
                        <line x1="32" y1="64" x2="32" y2="144" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="8" />
                        <path d="M54.2,216a88.1,88.1,0,0,1,147.6,0" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                        <polygon points="224 64 128 96 32 64 128 32 224 64" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                        <path d="M169.3,82.2a56,56,0,1,1-82.6,0" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="8" />
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white ">Exam Setting</span>

                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </p>

                <ul id="dropdown-exam-setting" class="hidden py-2 space-y-2">
                    <li>
                        <a href="/dashboard/addGradePoint"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                            Grade Point</a>
                    </li>
                    <li>
                        <a href="/dashboard/addShortCode"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Add
                            Short Code</a>
                    </li>
                    <li>
                        <a href="/dashboard/setShortCode"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Set
                            Short Code</a>
                    </li>
                    <li>
                        <a href="/dashboard/setExamMarks"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Set
                            Exam Marks</a>
                    </li>
                    <li>
                        <a href="/dashboard/setForthSubject"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Set
                            4th Subject</a>
                    </li>
                    <li>
                        <a href="/dashboard/setGradeSetup"
                            class="flex items-center w-full p-2 text-white  transition duration-75 rounded-lg pl-11 group ">Grade
                            Setup</a>
                    </li>
                </ul>
            </li>
            <!-- collapsible submenus -->


    </div>
</aside>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const clickedLink = localStorage.getItem("clickedLink");
        if (clickedLink) {
            const clickedElement = document.querySelector(`a[href="${clickedLink}"]`);
            if (clickedElement) {
                clickedElement.classList.add("clicked");
                const parentDropdown = clickedElement.closest(".dropdown");
                if (parentDropdown) {
                    parentDropdown.querySelector("ul").classList.remove("hidden");
                }
            }
        }
        const dropdownLinks = document.querySelectorAll("#logo-sidebar .dropdown a");
        dropdownLinks.forEach(function (link) {
            link.addEventListener("click", function (event) {
                dropdownLinks.forEach(function (link) {
                    link.classList.remove("clicked");
                });
                event.target.classList.add("clicked");
                localStorage.setItem("clickedLink", event.target.getAttribute("href"));
            });
        });
    });
</script>