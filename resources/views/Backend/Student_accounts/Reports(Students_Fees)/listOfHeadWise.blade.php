@extends('Backend.app')
@section('title')
Income Details Report
@endsection
@section('Dashboard')
    @include('/Message/message')
    <style>
        .shadowStyle {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }
    </style>

    <div>
        <h1 class="">Income Details Report</h1>
    </div>
    <div class=" mt-10">
        <form action="" class="p-5 shadowStyle rounded-[8px] border border-slate-300 w-2/5 mx-auto space-y-3">
            <div class="grid grid-cols-4 place-items-start  gap-5">
                <label for="class" class="block mb-2 text-sm font-medium whitespace-noWrap ">Month
                    :</label>
                    <select id="class" name="month"
                    class="bg-gray-50  text-gray-900 text-sm rounded-lg  block w-full p-2.5 ">
                    <option disabled selected>Select</option>
                    <option value="">x</option>
                    <option value="">y</option>
                </select>
                <label for="class" class="block mb-2 text-sm font-medium whitespace-noWrap ml-10">Year
                    :</label>
                    <select id="class" name="year"
                    class="bg-gray-50  text-gray-900 text-sm rounded-lg  block w-full p-2.5 ">
                    <option disabled selected>Select </option>
                    <option value="">x</option>
                    <option value="">y</option>
                </select>
            </div>
            <div class="grid grid-cols-4 place-items-start  gap-5">
                <label for="class" class="block mb-2 text-sm font-medium whitespace-noWrap ">Class
                    :</label>
                <select id="class" name="class"
                    class="bg-gray-50  text-gray-900 text-sm rounded-lg  block w-full p-2.5 col-span-3">
                    <option disabled selected>Select Class</option>
                    <option value="">x</option>
                    <option value="">y</option>
                </select>
            </div>
         
            
            <div class="grid grid-cols-4 place-items-start  gap-5">
                <label for="section" class="block mb-2 text-sm font-medium whitespace-noWrap ">Head ID :
                    </label>
                <select id="section" name="headID"
                    class="bg-gray-50  text-gray-900 text-sm rounded-lg  block w-full p-2.5 col-span-3">
                    <option disabled selected>Select </option>
                    <option value="">x</option>
                    <option value="">y</option>
                </select>
            </div>
           
            <div class="w-full flex justify-end">
                <button type="submit"
                    class="w-1/3  text-white bg-blue-700 hover:bg-blue-600 focus:ring-0  font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 focus:outline-none">Print
                </button>
            </div>
        </form>
    </div>
@endsection











