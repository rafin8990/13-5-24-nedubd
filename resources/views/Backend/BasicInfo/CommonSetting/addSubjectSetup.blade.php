@extends('Backend.app')
@section('title')
Suject Setup
@endsection
@section('Dashboard')

@include('Message.message')

<div>
    <h3>
        Class By Subject Setup
    </h3>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">

    <form id="dataForm" method="POST" action="{{ route('update.subject.setup') }}">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-6 gap-4 my-10 ">
            <div class="mr-5 md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class Name :</label>
            </div>
            <div class="mr-5">
                <select id="class_name" name="class_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <!-- <option disabled selected>Choose a class</option> -->
                    @if($selectedClassName=== null)
                    <option disabled selected>Choose a class</option>
                    @elseif($selectedClassName )
                    <option value="{{ $selectedClassName }}" selected>{{$selectedClassName}}</option>
                    @endif


                    @foreach($classData as $data)
                    <option value="{{ $data->class_name }}">{{ $data->class_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mr-5 md:flex justify-end">
                <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group Name :</label>
            </div>
            <div class="mr-5">
                <select id="group_name" name="group_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @if($selectedGroupName=== null)
                    <option disabled selected>Choose a class</option>
                    @elseif($selectedGroupName )
                    <option value="{{ $selectedGroupName }}" selected>{{$selectedGroupName}}</option>
                    @endif
                    @foreach($groupData as $data)
                    <option value="{{ $data->group_name }}">{{ $data->group_name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button onclick="submitForm()" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">GET DATA</button>
            </div>

        </div>
        <div>
            <div>
                <div class="grid gap-6 mb-6 py-5 md:grid-cols-3 items-center ps-4 border border-gray-200 rounded dark:border-gray-700 mx-20">

                    @foreach($subjectData as $data)
                    <div>
                        <!-- <input id="subject_name" type="checkbox" value="{{ $data->subject_name }}" name="subject_name[]" class="shift-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> -->
                        <input id="subject_name" type="checkbox" value="{{ json_encode(['name' => $data->subject_name, 'type' => 'select']) }}" name="subject_name[]" class="group-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="subject_name" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $data->subject_name }}</label>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>

    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.shift-checkbox');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    document.getElementById('dataForm').submit();
                });
            });
        });
    </script>
    <script>
        function submitForm() {
            // Get the selected values
            var className = document.getElementById('class_name').value;
            var groupName = document.getElementById('group_name').value;
            var subjectNames = [];

            var selectedSubjects = document.querySelectorAll('input[name="subject_name[]"]:checked');
            selectedSubjects.forEach(function(subject) {
                subjectNames.push(subject.value);
            });

            // Send data via AJAX
            var formData = {
                class_name: className,
                group_name: groupName,
                subject_names: subjectNames
            };

            // Send an AJAX request
            axios.post('{{ route("add.subject.setup") }}', formData)
                .then(function(response) {
                    // Handle success response
                    console.log(response.data);
                })
                .catch(function(error) {
                    // Handle error
                    console.error(error);
                });
        }
    </script>




    <div class="flex justify-center text-lg font-bold">
        <h3>
            CLASS WISE SUBJECT SETTING
        </h3>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
        <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    SL
                </th>
                <th scope="col" class="px-6 py-3">
                    Subject Name
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Subject Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Subject Serial
                </th>
                <th scope="col" class="px-6 py-3 bg-blue-500">
                    Subject Marge
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($classWiseSubjectData !== null && $selectedClassName !== null && $selectedGroupName !== null)
            @foreach ($classWiseSubjectData as $data)
            @php
            $subjectNames = ($data->subject_name);
            @endphp
            @if ($subjectNames !== null)
            @foreach ($subjectNames as $key => $subject)
            @php
            $subjectData = json_decode($subject);
            @endphp
            <tr class="border-b capitalize text-lg">
                <th scope="row" class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-blue-100">
                    {{$key + 1}}
                </th>
                <td class="px-6 py-4">
                    {{ $subjectData->name }}
                </td>
                <td class="px-6 py-4">
                    <select name="subject_type[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option class="capitalize" disabled selected>{{ $subjectData->type }}</option>
                        <option value="select">Select</option>
                        <option value="closable">Closable</option>
                        <option value="uncountable">Uncountable</option>
                    </select>
                </td>
                <td class="px-6 py-4">
                    {{$data->subject_serial}}
                </td>
                <td class="px-6 py-4">
                    0
                </td>
                <td class="px-6 py-4 text-xl flex justify-center">
                    <a href="" class="mr-2"><i class="fa fa-edit" style="color:green;"></i></a>
                    <form method="POST" action="{{ url('dashboard/delete_subject_setup', $data->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn">
                            <a href=""><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
            @endforeach
            @endif




        </tbody>
    </table>
    <br><br>
    <div class="grid md:grid-cols-3 ">
        <div class="mr-10 md:flex justify-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
        </div>
        <div class="mr-10">
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Close</button>
        </div>

        <div class="ml-32">
            <h3>Total = <div class="border border-2"></div>
            </h3>
        </div>

    </div>

</div>
@endsection