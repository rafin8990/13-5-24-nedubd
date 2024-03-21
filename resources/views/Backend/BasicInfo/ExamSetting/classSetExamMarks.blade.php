@extends('Backend.app')
@section('title')
    Exam Mark Setup
@endsection
@section('Dashboard')
    <div>
        <h3>
            Exam Mark Setup
        </h3>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
        <form action="{{ route('store.set.exam.marks', $school_code) }}" method="POST"
            enctype="multipart/form-data" class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
            @csrf
          
            <div>
                <div class="grid gap-6 mb-6 md:grid-cols-4 mt-2">
                    <div>
                        <div class="mr-5">
                            <label for="class_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class
                                Name:</label>
                        </div>
                        <select id="class_name" name="class_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">


                            @if ($searchClassData === null)
                                <option disabled selected>Choose a class</option>
                            @elseif($searchClassData)
                                <option value="{{ $searchClassData }}" selected>{{ $searchClassData }}</option>
                            @endif

                            @foreach ($classData as $data)
                                <option value="{{ $data->class_name }}">{{ $data->class_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <div class="mr-5">
                            <label for="class_exam_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exam Name:</label>
                        </div>
                        <select id="class_exam_name" name="class_exam_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if ($searchClassExamName === null)
                                <option selected>Choose a exam</option>
                            @elseif($searchClassExamName)
                                <option value="{{ $searchClassExamName }}" selected>{{ $searchClassExamName }}</option>
                            @endif

                            @foreach ($classExamData as $data)
                                <option value="{{ $data->class_exam_name }}">{{ $data->class_exam_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <div class="mr-5">
                            <label for="academic_year_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year:</label>
                        </div>
                        <select name="academic_year_name" id='date-academic_year_name'
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if ($searchAcademicYearName === null)
                                <option selected>Select Year</option>
                            @elseif($searchAcademicYearName)
                                <option value="{{ $searchAcademicYearName }}" selected>{{ $searchAcademicYearName }}
                                </option>
                            @endif

                            @foreach ($academicYearData as $data)
                                <option value="{{ $data->academic_year_name }}">{{ $data->academic_year_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="hidden">
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">School
                            Code
                        </label>
                        <input type="text" value="{{ $school_code }}" name="school_code" id="last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" />
                    </div>


                    <div class="flex justify-end">
                       
                        <button type="submit+" 
                            class="text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get
                            Data</button>

                    </div>
                </div>
            </div>
        </form>    
        

        <form action="{{route('saveSetExamMarks')}}" method="post">
        @csrf
            <div>
                <div
                    class="grid gap-6 mb-6 py-5 md:grid-cols-1 items-center ps-4 border border-gray-200 rounded dark:border-gray-700 mx-20">
                    <h3>Select subject</h3>

                    <input type="text" class="hidden" value="{{$className}}" name="class_name" id="">
                    <input type="text" class="hidden" value="{{$classExamName}}" name="exam_name" id="">
                    <input type="text" class="hidden" value="{{$academic_year_name}}" name="academic_year_name" id="">
                    <div>
                    @if($searchClassses->count() > 0)
                    @foreach($searchClassses as $key=> $class)
                    <div>
                    <input id="bordered-checkbox-1" type="checkbox" value="{{$class->subject_name}}" name="subject[{{$class->subject_name}}]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="bordered-checkbox-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$class->subject_name}}</label>
                    </div>
                    @endforeach
                     @endif
                        
                    </div>
                </div>
                
            </div>
            <div class="flex justify-center mb-5">
                <div class="text-rose-600">
                    <h3 class="text-lg">Suggestion:</h3>
                    <h3>
                        1. Select the required short code in the STATUS check box along with the subject. <br>

                        2. In the case of subjects that merge, the short code Merge is required, then type 1.<br>

                        3. In all the subjects in which No. 1 and No. 2 are the same, only select them and click on the
                        Save button.
                    </h3>
                </div>
            </div>


            <div>
                <div class="flex justify-center text-lg font-bold bg-rose-200">
                    <h3>
                        EXAM WISE MARK SETTING
                    </h3>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
                    <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                        <th scope="col" class="px-4 py-3 bg-blue-500">
                            SL
                        </th>
                        <th scope="col" class="px-4 py-3">
                            SHORT CODE
                        </th>
                        <th scope="col" class="px-4 py-3 bg-blue-500">
                            TOTAL MARKS
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Countable Mark
                        </th>
                        <th scope="col" class="px-4 py-3 bg-blue-500">
                            Pass Mark
                        </th>
                        <th scope="col" class="px-4 py-3">
                            Acceptance
                        </th>
                        <th scope="col" class="px-4 py-3 bg-blue-500">
                            Merge
                        </th>
                        <th scope="col" class="px-4 py-3 bg-blue-500">
                            Status
                        </th>
                    </thead>
                    <tbody id="shortCodesTableBody">
                            @foreach($shortCodes as $key => $code)
                            <tr class=" border-b border-blue-400">
                                <td class="px-4 py-3">{{$key + 1}}</td>
                                <td class="px-4 py-3">{{$code->short_code}}</td>
                                <input class="hidden" value="{{$code->short_code}}" name="short_code[{{$key}}]" type="text">
                                <input class="hidden" value="{{$key}}" name="key[{{$key}}]" type="text">
                                <td class="px-4 py-3"><input name="total_marks[{{$key}}]" class="border-0 w-[100px] total_marks" type="text"></td>
                                <td class="px-4 py-3"><input name="countable_marks[{{$key}}]" class="border-0 w-[100px] countable_marks" type="text"></td>
                                <td class="px-4 py-3"><input name="pass_marks[{{$key}}]" class="border-0 w-[100px] pass_marks" type="text"></td>
                                <td class="px-4 py-3"><input name="acceptance[{{$key}}]" class="border-0 w-[100px] acceptance" type="text"></td>
                                <td class="px-4 py-3"><input name="marge[{{$key}}]" value="0" class="border-0 w-[100px]" type="text"></td>
                                <td class="px-4 py-3">
                                    <div>
                                        <select class="p-2" name="status[{{$key}}]" id="">
                                            <option selected value="active">Active</option>
                                            <option value="in_active">In Active</option>
                                        </select>
                                    </div>
                                </td>
                                <input class="hidden" value="{{$school_code}}" name="school_code" type="text">
                                <input class="hidden" value="approved" name="action" type="text">
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
            <br><br>
            <div class="md:flex justify-center">
                <div class="mr-10">
                    <a
                        class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mark
                        Config View</a>
                </div>
                <div class="mr-10">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </div>
                <div class="mr-10">
                    <a href="/dashboard"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Close</a>
                </div>
<!-- 
                <div class="ml-32">
                    <h3>Total = <div class=" border-2"></div>
                    </h3>
                </div> -->

            </div>
        </form>





        
    <script>
    // Get all input fields
    const totalMarksInputs = document.querySelectorAll('.total_marks');
    const countableMarksInputs = document.querySelectorAll('.countable_marks');
    const passMarksInputs = document.querySelectorAll('.pass_marks');
    const acceptanceInputs = document.querySelectorAll('.acceptance');

    // Function to calculate pass marks and acceptance
    function calculateMarks() {
        totalMarksInputs.forEach((totalMarksInput, index) => {
            const totalMarks = parseFloat(totalMarksInput.value) || 0;
            const countableMarks = parseFloat(countableMarksInputs[index].value) || 0;

            // Calculate pass marks
            const passMarks = Math.round(totalMarks / 3);
            passMarksInputs[index].value = passMarks;

            // Calculate acceptance
            const acceptance = (totalMarks !== 0) ? (countableMarks / totalMarks).toFixed(2) : 0;
            acceptanceInputs[index].value = acceptance;
        });
    }

    // Attach event listeners to input fields
    totalMarksInputs.forEach(input => {
        input.addEventListener('input', calculateMarks);
    });

    countableMarksInputs.forEach(input => {
        input.addEventListener('input', calculateMarks);
    });

    // Initially calculate marks when the page loads
    calculateMarks();
</script>
    @endsection

 