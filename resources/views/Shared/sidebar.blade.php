<style>
    .scrollbar::-webkit-scrollbar {
    width: 10px;
}

.scrollbar::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px rgb(255, 255, 255);
    border-radius: 10px;
}

.scrollbar::-webkit-scrollbar-thumb {
    background: white;
    border-radius: 10px;
}

.scrollbar::-webkit-scrollbar-thumb:hover {
    background: #cecaca;
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
                    <svg class="w-5 h-5 text-white transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap text-white ">Dashboard</span>

                </a>
            </li>

            <!-- Student route  -->
            <li>
                <p class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-student" data-collapse-toggle="dropdown-student">
                    <svg class="w-5 h-5 text-white transition duration-75 hover:text-black dark:text-gray-400 dark:hover:text-white group-hover:text-gray-900 group-hover:dark:text-white"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
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
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white hover:text-black">Student</span>

                    <svg class="w-3 h-3 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </p>
                <ul id="dropdown-student" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{route('AddStudentForm')}}"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Add
                            New Student </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Update
                            Student Basic Info</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Student
                            Profile Update</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Upload
                            Exel File</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Upload
                            Photo</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Migrate
                            Student</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Upload
                            Photo</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Upload
                            Photo</a>
                    </li>
                </ul>
            </li>
 
            <!-- online Application  -->
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-online-examination" data-collapse-toggle="dropdown-online-examination">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white hover:text-black">Online
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
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">List
                            Of Application</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Report
                            Applicant</a>
                    </li>

                </ul>
            </li>

            <!-- Student Attendence  -->
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-student-Attendence" data-collapse-toggle="dropdown-student-Attendence">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white hover:text-black">Student Attendence </span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-student-Attendence" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Add
                            STD Attendence</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Leave
                            Entry Form </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Add
                            Leave Type </a>
                    </li>


                    <!-- reports of student attendence  -->
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-student-Reports"
                            data-collapse-toggle="dropdown-student-Reports">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white hover:text-black">Reports (STD Attendence) </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-student-Reports" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700"> Attendence Report</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Attendence Blank report </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Date Wise Report</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">List Of Leave Report</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Section Wise Summary</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>




            <!-- Student Accounts  -->
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-student-Accounts" data-collapse-toggle="dropdown-student-Accounts">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                        <path
                            d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                    </svg>
                    <span
                        class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white hover:text-black">Student Accounts</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-student-Accounts" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700"> Pay Slip Collection</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Quick Collection</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Print Unpaid Payslip </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Collect Unpaid PaySlip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Delete Payslip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">New STD Add PaySlip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">New/Old STD Add payslip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Generate Payslip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Edit Generated Payslip</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Generate Multiple Payslip</a>
                    </li>



                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-student-others"
                            data-collapse-toggle="dropdown-student-others">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white hover:text-black">Others </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-student-others" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Form Fee</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Donation </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Fine/Fail/Absent Fess</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Others Fee</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-student-reports"
                            data-collapse-toggle="dropdown-student-reports">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 21">
                                <path
                                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                            </svg>
                            <span
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap text-white hover:text-black">Reports (STD FEES) </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-student-reports" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Form Fee</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Donation </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Fine/Fail/Absent Fess</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center w-full p-2 text-white hover:text-black transition duration-75 rounded-lg pl-11 group hover:bg-gray-100  dark:text-white dark:hover:bg-gray-700">Others Fee</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- General accounts  -->


        </ul>
    </div>

</aside>