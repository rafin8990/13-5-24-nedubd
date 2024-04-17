@extends('Backend.app')
@section('title')
    Generate Multiple Payslip
@endsection


@section('Dashboard')
    <div>
        <h1>Multiple Fees Generate</h1>
    </div>


    <div class="w-full border mx-auto p-5 space-y-10">
        <form action="{{ url('') }}" method="POST">
            @csrf
            <div class="grid grid-cols-11 items-center gap-5">
                <div class="col-span-2">
                    <label for="class" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Month :</label>
                    <select id="class" name="class"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>

                <div class="">
                    <label for="group" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year:</label>
                    <select id="group" name="group"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>

                <div class="col-span-2">
                    <label for="section"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class:</label>
                    <select id="section" name="section"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>

                <div class="">
                    <label for="section"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group:</label>
                    <select id="section" name="section"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>

                <div class="">
                    <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PaySlip
                        :</label>
                    <select id="section" name="section"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>

                <div class="">
                    <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Session
                        :</label>
                    <select id="section" name="section"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>

                <div class="">
                    <label for="section"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status:</label>
                    <select id="section" name="section"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>

                <div class="">
                    <label for="section" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year
                        :</label>
                    <select id="section" name="section"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>

                <div>
                    <button type="submit"
                        class="text-white bg-gradient-to-br from-blue-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center uppercase mt-5">
                        get data
                    </button>
                </div>
            </div>
        </form>

        <div class="space-y-1">
            <div class="bg-blue-200 text-center rounded-lg">
                <h1 class="py-1">Transaction Data</h1>
            </div>
            <div class="">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-blue-600 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    SL
                                </th>
                                <th scope="col" class="px-6 py-3 bg-blue-500">
                                    MONTH.YEAR
                                </th>
                                <th scope="col" class="px-16 py-3">
                                    S. ID
                                </th>
                                <th scope="col" class="px-6 py-3 bg-blue-500">
                                    STUDENT NAME
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    CLASS
                                </th>
                                <th scope="col" class="px-6 py-3 bg-blue-500">
                                    ROLL
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    TYPE
                                </th>
                                <th scope="col" class="px-6 py-3 bg-blue-500">
                                    AMOUNT
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    WAIVER
                                </th>
                                <th scope="col" class="px-6 py-3 bg-blue-500">
                                    PAYABLE
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    a
                                </th>
                                <td class="px-6 py-4">
                                    b
                                </td>
                                <td class="px-6 py-4">
                                    c
                                </td>
                                <td class="px-6 py-4">
                                    d
                                </td>
                                <td class="px-6 py-4">
                                    e
                                </td>
                                <td class="px-6 py-4">
                                    f
                                </td>
                                <td class="px-6 py-4">
                                    g
                                </td>
                                <td class="px-6 py-4">
                                    h
                                </td>
                                <td class="px-6 py-4">
                                    i
                                </td>
                                <td class="px-6 py-4">
                                    j
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-20 flex justify-end space-x-28">
                    <h1>
                        Total =
                        <input readonly type="number" value="" name="student_roll" id="student_roll"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-1"
                            placeholder="" />
                    </h1>

                    <button type="submit"
                        class="text-white bg-gradient-to-br from-blue-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-16 py-2.5 text-center">
                        save
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
