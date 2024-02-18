@extends('Backend.app')
@section('title')
Dashboard
@endsection
@section('Dashboard')

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="bg-gradient-to-r  from-cyan-500 to-blue-500 p-5 rounded lg:w-[250px] mx-2 lg:mx-0">
        <h1 class="text-2xl font-bold text-white">Balance</h1>
        <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 mt-2 dark:bg-gray-700">
            <div class="bg-yellow-400 h-2.5 rounded-full" style="width: 45%"></div>
        </div>
        <div class="flex justify-between text-white">
            <p>Cash In Hand</p>
            <p>0</p>
        </div>
        <div class="flex justify-between text-white">
            <p>Cash In Bank</p>
            <p>0</p>
        </div>
    </div>

    <div class="bg-gradient-to-r  from-black to-gray-600 p-5 rounded lg:w-[250px] mx-2 lg:mx-0">
        <h1 class="text-2xl font-bold text-white">Todays Fee</h1>
        <div class="w-full bg-white rounded-full h-2.5 mb-4 mt-2 dark:bg-gray-700">
            <div class="bg-green-500 h-2.5 rounded-full" style="width: 45%"></div>
        </div>
        <div class="flex justify-between text-white">
            <p>Amount</p>
            <p>0</p>
        </div>

    </div>
    <div class="bg-gradient-to-r  from-blue-500 to-blue-950 p-5 rounded lg:w-[250px] mx-2 lg:mx-0">
        <h1 class="text-xl font-bold text-white">Todays Acc received</h1>
        <div class="w-full bg-gray-400 rounded-full h-2.5 mb-4 mt-2 dark:bg-gray-700">
            <div class="bg-white h-2.5 rounded-full" style="width: 45%"></div>
        </div>
        <div class="flex justify-between text-white">
            <p>Amount</p>
            <p>0</p>
        </div>

    </div>
    <div class="bg-gradient-to-r  from-emerald-500 to-emerald-900 p-5 rounded lg:w-[250px] mx-2 lg:mx-0">
        <h1 class="text-xl font-bold text-white">Todays Acc Payment</h1>
        <div class="w-full bg-white rounded-full h-2.5 mb-4 mt-2 dark:bg-gray-700">
            <div class="bg-red-500 h-2.5 rounded-full" style="width: 45%"></div>
        </div>
        <div class="flex justify-between text-white">
            <p>Amount</p>
            <p>0</p>
        </div>

    </div>
</div>
 
<div  class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-3 mt-3">
    <div class="bg-gradient-to-r  from-blue-500 to-blue-950 p-5 rounded lg:w-[250px] mx-2 lg:mx-0">
        <h1 class="text-xl font-bold text-white">Student</h1>
        <div class="w-full bg-gray-400 rounded-full h-2.5 mb-4 mt-2 dark:bg-gray-700">
            <div class="bg-white h-2.5 rounded-full" style="width: 45%"></div>
        </div>
        <div class="flex justify-between text-white">
            <p>Current Year Student</p>
            <p>100</p>
        </div>
        <div class="flex justify-between text-white">
            <p>Previous Year Student</p>
            <p>100</p>
        </div>
        <div class="flex justify-between text-white">
            <p>Migrate Student</p>
            <p>100</p>
        </div>

    </div>
    <div class="bg-gradient-to-r  from-green-500 to-green-950 p-5 rounded lg:w-[250px] mx-2 lg:mx-0">
        <h1 class="text-xl font-bold text-white">Class</h1>
        <div class="w-full bg-gray-400 rounded-full h-2.5 mb-4 mt-2 dark:bg-gray-700">
            <div class="bg-green-500 h-2.5 rounded-full" style="width: 45%"></div>
        </div>
        <div class="flex justify-between text-white">
            <p>Total Class</p>
            <p>15</p>
        </div>
    </div>

    <div class="bg-gradient-to-r  from-orange-500 to-orange-950 p-5 rounded lg:w-[250px] mx-2 lg:mx-0">
        <h1 class="text-xl font-bold text-white">Section</h1>
        <div class="w-full bg-gray-400 rounded-full h-2.5 mb-4 mt-2 dark:bg-gray-700">
            <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 45%"></div>
        </div>
        <div class="flex justify-between text-white">
            <p>Total Section</p>
            <p>15</p>
        </div>
    </div>
    <div class="bg-gradient-to-r  from-green-500 to-green-950 p-5 rounded lg:w-[250px] mx-2 lg:mx-0">
        <h1 class="text-xl font-bold text-white">Group</h1>
        <div class="w-full bg-white rounded-full h-2.5 mb-4 mt-2 dark:bg-gray-700">
            <div class="bg-blue-500 h-2.5 rounded-full" style="width: 45%"></div>
        </div>
        <div class="flex justify-between text-white">
            <p>Total Group</p>
            <p>15</p>
        </div>
    </div>
    
</div>


@endsection