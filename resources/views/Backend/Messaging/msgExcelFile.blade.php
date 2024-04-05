@extends('Backend.app')
@section('title')
  Send Message Excel
@endsection
@section('Dashboard')
    @include('/Message/message')
    <style>
        .shadowStyle {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }
    </style>

    <div>
        <h1 class="text-2xl font-bold my-10 mx-5 text-center">Excel File</h1>
    </div>
    <div class="p-5 shadowStyle rounded-[8px] border border-slate-300 w-2/5 mx-auto space-y-3">

        <div class="">
            <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Excel
                File</label>
            <input name="file"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none  "
                aria-describedby="user_avatar_help" id="user_avatar" type="file">
        </div>
        <div class="w-full flex justify-end">
            
            <button type="submit"
                class="w-1/3  text-white bg-blue-700 hover:bg-blue-600 focus:ring-0  font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 focus:outline-none">Submit
            </button>
        </div>
    </div>



@endsection