@extends('Backend.app')
@section('title')
    Exam Mark Setup Grand Final
@endsection
@section('Dashboard')
@include('/Message/message')
<div>
    <h1 class="ml-5 font font-semibold text-accent  my-10"> Exam Mark Setup Grand Final
    </h1>
</div>

<div class="md:flex mx-10">

<div class="flex border justify-center mr-5 md:mr-32 mb-5 md:mb-0">
  <div class="mx-10 my-10 ">
    <h3 class="mb-5">Select Class</h3>
    <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg   ">
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="select-all-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="select-all-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Select All</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="vue-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Play</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="react-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Nursery</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="angular-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">KG</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">One</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Two</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Three</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Four</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Five</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Six</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Seven</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Eight</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Nine</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Ten</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">all inactive</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 rounded-t-lg ">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
                <label for="laravel-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 ">Pre Play</label>
            </div>
        </li>
    </ul>
    
</div>
</div>

<div class="overflow-x-auto">
    <h1 class="text-xl font-bold">EXAM WISE GRAND FINAL SETTING</h1>
  <table class="table border md:table-lg table-xs">
    <!-- head -->
    <thead>
      <tr>
        <th>Sl</th>
        <th>Exam Name</th>
        <th>Percentage</th>
        <th>Exam Serial</th>
        <th>Status</th>
       
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>1st Midterm</td>
        <td>0</td>
        <td></td>
        <td><div class="flex items-center ps-3">
            <input id="select-all-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
            <label for="select-all-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 "></label>
        </div></td>
      </tr>
      <tr>
        <th>2</th>
        <td>1st Semester</td>
        <td>0</td>
        <td></td>
        <td><div class="flex items-center ps-3">
            <input id="select-all-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
            <label for="select-all-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 "></label>
        </div></td>
      </tr>
      <tr>
        <th>3</th>
        <td>2nd Midterm</td>
        <td>0</td>
        <td></td>
        <td><div class="flex items-center ps-3">
            <input id="select-all-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
            <label for="select-all-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 "></label>
        </div></td>
      </tr>
      <tr>
        <th>4</th>
        <td>2nd Semester</td>
        <td>0</td>
        <td></td>
        <td><div class="flex items-center ps-3">
            <input id="select-all-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
            <label for="select-all-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 "></label>
        </div></td>
      </tr>
      <tr>
        <th>5</th>
        <td>3rd Midterm</td>
        <td>0</td>
        <td></td>
        <td><div class="flex items-center ps-3">
            <input id="select-all-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
            <label for="select-all-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 "></label>
        </div></td>
      </tr>
      <tr>
        <th>6</th>
        <td>3rd Semester</td>
        <td>0</td>
        <td></td>
        <td><div class="flex items-center ps-3">
            <input id="select-all-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2  ">
            <label for="select-all-checkbox" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 "></label>
        </div></td>
      </tr>
    </tbody>
  </table>
</div>

</div>


<div class="flex justify-center mb-10 sticky bottom-3 z-50">

    <div class="flex justify-center mr-20">
        <button class=" btn btn-accent text-white ">
            <i class="fa fa-eye"
                            style="color:white;"></i>
          View
        </button>
      </div>
      <div class="flex justify-center mr-20">
        <button class=" btn btn-accent text-white ">
          Save
        </button>
      </div>
      <div class="flex justify-center mr-20">
        <button class=" btn btn-accent text-white ">
          Print
        </button>
      </div>

</div>


        <div class="ml-32">
            <h3>Total Percent = <div class="border-2"></div>
            </h3>
        </div>

    </div>
</form>
@endsection
