@extends('Backend.app')
@section('title')
    Individual Waiver
@endsection
@section('Dashboard')
    @include('/Message/message')
    <style>
        .shadowStyle {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }
    </style>
    <div class=" mt-10">
        <form method="GET" action="{{ route('individualWaiverReport.getData', $school_code) }}"
            class="p-5 shadowStyle rounded-[8px] border border-slate-300 w-2/5 mx-auto space-y-3">
            @csrf
            <div class="space-y-3">
                <div class="grid grid-cols-4 place-items-start  gap-5">
                    <label for="class" class="block mb-2 text-sm font-medium whitespace-noWrap ">Class
                        :</label>
                    <select id="class" name="class"
                        class="col-span-3 bg-gray-50  text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                        <option disabled selected>Select Class</option>
                        @foreach ($classes as $key => $class)
                            <option value="{{ $class }}">{{ $class }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid grid-cols-4 place-items-start  gap-5">
                    <label for="student_id" class="block mb-2 text-sm font-medium whitespace-noWrap ">Student ID: </label>
                    <select id="student_id" name="student_id"
                        class="col-span-3 bg-gray-50  text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                        <option disabled selected>Select</option>
                        @foreach ($students_id as $primaryKey => $student_id)
                            <option value="{{ $primaryKey }}">{{ $student_id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid grid-cols-4 place-items-start  gap-5">
                    <label for="waiver_type" class="block mb-2 text-sm font-medium whitespace-noWrap ">Waiver Type :</label>
                    <select id="waiver_type" name="waiver_type"
                        class="col-span-3 bg-gray-50  text-gray-900 text-sm rounded-lg  block w-full p-2.5">
                        <option disabled selected>Select</option>
                        @foreach ($waiver_types as $waiver_type)
                            <option value="{{ $waiver_type }}">{{ $waiver_type }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="w-full flex justify-end">
                <button type="submit"
                    class="w-1/3  text-white bg-blue-700 hover:bg-blue-600 focus:ring-0  font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 focus:outline-none">Print
                </button>
            </div>
        </form>
    </div>
@endsection
