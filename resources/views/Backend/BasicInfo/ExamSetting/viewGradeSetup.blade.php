@extends('Backend.app')
@section('title')
Grade
@endsection
@section('Dashboard')

@include('Message.message')
<div>
    <h3>
Exam Grade Setup View List
    </h3>
</div>

    <form action="{{route('getGradeSetup')}}" method="POST">
    @csrf
            <div class="md:flex my-10 ">
                <div class="mr-5">
                    <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exam Name :</label>
                </div>
                <div class="mr-5">
                    <select id="class_exam_name" name="class_exam_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Choose a exam</option>
                        @foreach($classExamData as $data)
                    <option value="{{ $data->class_exam_name }}">{{ $data->class_exam_name }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mr-5">
                    <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year :</label>
                </div>
                <div class="mr-5">
                    <select id="academic_year_name" name="academic_year_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected>Choose year</option>
                        @foreach($academicYearData as $data)
                    <option value="{{ $data->academic_year_name }}">{{ $data->academic_year_name}}</option>
                    @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">GET DATA</button>
                </div>

            </div>
    </form>

    @if($gradeSetupData)
    <table class="text-sm text-left rtl:text-right text-black dark:text-blue-100 w-full">
    <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
        <tr>
            <th scope="col" class="px-6 py-3">
                Letter
            </th>
            <th scope="col" class="px-6 py-3 bg-blue-500">
                Grade
            </th>
            <th scope="col" class="px-6 py-3">
                Range
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach($gradeSetupData as $data)
    @php
        $letterGrades = json_decode($data->latter_grade);
    @endphp
     <tr class="border-b capitalize text-lg">
            <td>
                <div>
                    <h1>Class Name</h1>
                    <h1>{{$data->class_name}}</h1>
                </div>
            </td>
            @for ($i = 0; $i < count($letterGrades); $i++)
                    <td class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-blue-100">
                        {{ $letterGrades[$i] }}
                    </td>
            @endfor
        
            
           
        </tr>
    
@endforeach
    </tbody>
</table>
    @endif

   

@endsection
