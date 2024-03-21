@extends('Backend.app')
@section('title')
    Student ClassInfo
@endsection
@section('Dashboard')
    @include('Message.message')
    <div>
        <h3>
            Student Class Info
        </h3>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
        <div class="md:flex justify-end  ">
            <a href="{{ route('updateStudentBasicInfo', $school_code) }}">
                <button type="button"
                    class=" text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Basic
                    Info
                </button>
            </a>
            <a href="{{ route('studentClassInfo', $school_code) }}">
                <button type="button"
                    class=" text-white bg-rose-700 hover:bg-rose-600 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-rose-600 dark:hover:bg-rose-700 focus:outline-none dark:focus:ring-rose-800">Class
                    Info
                </button>
            </a>
            <button type="button"
                class=" text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Photo

            </button>
            <button type="button"
                class="  text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                Student
            </button>
        </div>
        <hr>
        <form action="{{ route('getStudentClassData', $school_code) }}" method="GET">
            @csrf

            <div class="grid gap-6 mb-6 md:grid-cols-10 mt-2">
                <div>
                    <select id="class_name" name="class_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a class</option>
                        @foreach ($classData as $data)
                            <option value="{{ $data->class_name }}">{{ $data->class_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <select id="group" name="group"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Group</option>
                        @foreach ($groupData as $group)
                            <option value="{{ $group->group_name }}">{{ $group->group_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select id="section" name="section"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Section</option>
                        @foreach ($sectionData as $section)
                            <option value="{{ $section->section_name }}">{{ $section->section_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select id="category" name="category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Category</option>
                        @foreach ($categoryData as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select id="shift" name="shift"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Shift</option>
                        @foreach ($shiftData as $shift)
                            <option value="{{ $shift->shift_name }}">{{ $shift->shift_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select id="year" name="year"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a year</option>
                        @foreach ($Year as $year)
                            <option value="{{ $year->academic_year_name }}">{{ $year->academic_year_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <select id="" name="session"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a session</option>
                        @foreach ($Session as $session)
                            <option value="{{ $session->academic_session_name }}">{{ $session->academic_session_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select id="" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>

                    </select>
                </div>

                <input type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" />

                <div class="flex justify-end">
                    <button type="submit"
                        class="  text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search
                    </button>
                </div>
            </div>
        </form>
        <form action="{{ route('updateStudentClass', $school_code) }}" method="POST">
            @csrf
            @method('PUT')
            <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
                <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            <input id="select-all-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </th>
                        <th scope="col" class="px-6 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Student ID
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            Roll
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Class
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            Group
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Section
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            Session
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Year
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            Status
                        </th>


                    </tr>


                </thead>
                <tbody>
                    @if ($student !== null)
                        {{-- @dd($student) <!-- Add this line to inspect the value --> --}}
                        @foreach ($student as $key => $data)
                            <tr>
                                <td scope="col" class="px-6 py-3">
                                    <input type="checkbox" value="{{ $data->id }}" name="id[]" class="row-checkbox"
                                        data-row-index="{{ $key }}">

                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->first_name }}
                                </td>
                                <td class="px-6 py-4 ">
                                    {{ $data->last_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->student_id }}
                                </td>
                                <td class="px-6 py-4 ">
                                    {{ $data->student_roll }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="row-data">{{ $data->Class_name }}</span>

                                    <select name="Class_name[{{ $data->id }}]"
                                        class="form-control row-input hidden md:w-[120px] md:h-[30px] px-2">
                                        <option value="{{ $data->Class_name }}">{{ $data->Class_name }}</option>
                                        @foreach ($classData as $class)
                                            <option value="{{ $class->class_name }}">{{ $class->class_name }}</option>
                                        @endforeach
                                    </select>
                                </td>

                                <td class="px-6 py-4 ">
                                    <span class="row-data">{{ $data->group }}</span>

                                    <select name="group[{{ $data->id }}]"
                                        class="form-control row-input hidden md:w-[120px] md:h-[30px] px-2">
                                        <option value="{{ $data->group }}">{{ $data->group }}</option>
                                        @foreach ($groupData as $group)
                                            <option value="{{ $group->group_name }}">{{ $group->group_name }}</option>
                                        @endforeach
                                    </select>

                                </td>
                                <td class="px-6 py-4">
                                    <span class="row-data"> {{ $data->section }}</span>
                                    <select name="section[{{ $data->id }}]"
                                        class="form-control row-input hidden md:w-[120px] md:h-[30px] px-2">
                                        <option value="{{ $data->section }}">{{ $data->section }}</option>
                                        @foreach ($sectionData as $section)
                                            <option value="{{ $section->section_name }}">{{ $section->section_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </td>
                                <td class="px-6 py-4 ">
                                    <span class="row-data"> {{ $data->session }}</span>
                                    <select name="session[{{ $data->id }}]"
                                        class="form-control row-input hidden md:w-[120px] md:h-[30px] px-2">
                                        <option value="{{ $data->session }}">{{ $data->session }}</option>
                                        @foreach ($Session as $session)
                                            <option value="{{ $session->academic_session_name }}">
                                                {{ $session->academic_session_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </td>
                                <td class="px-6 py-4">
                                    <span class="row-data"> {{ $data->year }}</span>
                                    <select name="year[{{ $data->id }}]"
                                        class="form-control row-input hidden md:w-[120px] md:h-[30px] px-2">
                                        <option value="{{ $data->year }}">{{ $data->year }}</option>
                                        @foreach ($Year as $year)
                                            <option value="{{ $year->academic_year_name }}">
                                                {{ $year->academic_year_name }}</option>
                                        @endforeach
                                    </select>

                                </td>
                                <td class="px-6 py-4">
                                    <span class="row-data"> {{ $data->status }}</span>
                                    <select name="status[{{ $data->id }}]"
                                        class="form-control row-input hidden md:w-[120px] md:h-[30px] px-2">
                                        <option value="{{ $data->status }}">{{ $data->status }}</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>

                                </td>





                            </tr>
                        @endforeach
                    @endif



                </tbody>

            </table>


            <div class="flex justify-end mt-5">
                <button type="submit"
                    class="  text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update
                </button>
            </div>


            <div class="flex justify-start mt-5 p-2">
                <button type="button" id="delete-btn"
                    class="text-white bg-rose-700 hover:bg-rose-600 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-3 py-1 me-2 mb-2 dark:bg-rose-600 dark:hover:bg-rose-700 focus:outline-none dark:focus:ring-rose-800"
                    disabled>Delete</button>
            </div>
        </form>


        <script>
            // Function to toggle between displaying text and input fields
            function toggleRowEditing(rowIndex) {
                var row = document.querySelector('tbody').children[rowIndex];
                var inputs = row.querySelectorAll('.row-input');
                var dataFields = row.querySelectorAll('.row-data');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].classList.toggle('hidden');
                    dataFields[i].classList.toggle('hidden');
                }
            }
        
            // Function to update delete button status
            function updateDeleteButtonStatus() {
                var anyChecked = false;
                document.querySelectorAll('.row-checkbox').forEach(function(checkbox) {
                    if (checkbox.checked) {
                        anyChecked = true;
                    }
                });
                var deleteButton = document.getElementById('delete-btn');
                deleteButton.disabled = !anyChecked;
            }
        
            // Event listener for checkbox change
            document.querySelectorAll('.row-checkbox').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    var rowIndex = this.getAttribute('data-row-index');
                    toggleRowEditing(rowIndex);
                    updateDeleteButtonStatus();
                });
            });
        
            // Event listener for select all checkbox
            document.getElementById('select-all-checkbox').addEventListener('change', function() {
                var checkboxes = document.querySelectorAll('.row-checkbox');
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = this.checked;
                });
                updateDeleteButtonStatus();
            });
        
            // Event listener for delete button click
            document.getElementById('delete-btn').addEventListener('click', function() {
                var confirmation = confirm("Are you sure you want to delete?");
                if (confirmation) {
                    var selectedIds = getSelectedStudentIds();
                    var schoolCode = '{{ $school_code }}'; // Get the school code from the Blade template
                    fetch(`/deleteStudent/${schoolCode}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token if CSRF protection is enabled
                        },
                        body: JSON.stringify({ ids: selectedIds })
                    })
                    .then(response => {
                        if (response.ok) {
                            // Reload the page after successful deletion
                            window.location.reload();
                        } else {
                            // Handle errors
                            console.error('Failed to delete students');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                }
            });
        
            // Function to get the IDs of selected students
            function getSelectedStudentIds() {
                const selectedIds = [];
                document.querySelectorAll('.row-checkbox:checked').forEach(function(checkbox) {
                    selectedIds.push(checkbox.value);
                });
                return selectedIds;
            }
        </script>
        




    </div>

@endsection
