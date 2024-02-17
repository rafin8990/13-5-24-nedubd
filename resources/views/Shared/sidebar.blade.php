


<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="logo-sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto gradient-bg">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg text-white   group">

                    <span class="ms-3 text-white">Dashboard</span>
                </a>
            </li>
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
            <li>
                <p class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-content" data-collapse-toggle="dropdown-content">
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
                <ul id="dropdown-content" class="hidden py-2 space-y-2">
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
        </ul>
    </div>

</aside>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var dropdownItems = document.querySelectorAll('.dropdown-content a');
        dropdownItems.forEach(function(item) {
            item.addEventListener('click', function() {
                localStorage.setItem('selectedItem', item.innerText);
            });
        });

        var selectedItem = localStorage.getItem('selectedItem');
        if (selectedItem) {
            var dropdownButton = document.querySelector('.dropbtn');
            dropdownButton.innerText = selectedItem;
        }
    });
</script>