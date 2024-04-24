@extends('Backend.app')
@section('title')
    Pay Slip Setup
@endsection


@section('Dashboard')

    <!-- Message -->
    @include('/Message/message')

    <div class="mb-5">
        <h1>Pay Slip Setup</h1>
    </div>

    <div class="w-full text-center mb-10">
        <h1 class="text-xl font-semibold">
            Before searching for data here, ensure that you have added data from <span class="text-red-300 font-bold bg-red-50 px-1 rounded">Fees Setting/Fees Setup</span>
        </h1>
    </div>

    <div class="w-full border mx-auto p-5 space-y-10">
        <form action="{{ route('paySlipSetup.getData', $school_code) }}" method="POST">
            @csrf
            <div class="grid grid-cols-5 items-center gap-7">
                <div class="">
                    <label for="class" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CLASS</label>
                    <select id="class" name="class"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        @foreach ($classes as $class)
                            <option value="{{ $class->class_name }}">{{ $class->class_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="">
                    <label for="pay_slip_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PAY SLIP
                        TYPE:</label>
                    <select id="pay_slip_type" name="pay_slip_type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        @foreach ($paySlipTypes as $paySlipType)
                            <option value="{{ $paySlipType->pay_slip_type_name }}">{{ $paySlipType->pay_slip_type_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="">
                    <label for="group" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GROUP
                        :</label>
                    <select id="group" name="group"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group->group_name }}">{{ $group->group_name }}</option>
                        @endforeach
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
                <h1 class="py-1">CLASS WISE PAY SLIP SETUP LIST </h1>
            </div>
            <div class="">
                <form method="POST" action="{{ route('paySlipSetup.store', $school_code) }}">
                    @csrf
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-white uppercase bg-blue-600 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 bg-blue-500">
                                        SL
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        TYPE NAME
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-blue-500">
                                        AMOUNT
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center justify-center space-x-2">
                                            <span>STATUS</span>
                                            {{-- <input id="default-checkbox" type="checkbox" value=""
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> --}}
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($feesSetupData)
                                    @foreach ($feesSetupData as $key => $feesData)
                                        <tr
                                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                            <td class="px-6 py-4">
                                                {{ $key + 1 }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $feesData->fee_type }}
                                                <input type="text" class="hidden" name="fee_type_name[]"
                                                    value="{{ $feesData->fee_type }}">
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $feesData->fee_amount }}
                                                <input type="text" class="hidden" name="fees_amount[]"
                                                    value="{{ $feesData->fee_amount }}">
                                            </td>
                                            <td class="px-6 py-4">
                                                <input id="status" name="status[{{ $feesData->fee_type }}]"
                                                    {{-- {{ $feesData->status === 'checked' && $paySlipTypeName ? 'disabled' : '' }} --}}
                                                    {{-- {{ $feesData->status === 'checked' ? 'checked' : '' }}  --}}
                                                    type="checkbox"
                                                    value="{{ $feesData->fee_type }}"
                                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>


                    <input type="text" class="hidden" name="fees_data_class" value="{{ $classData }}">
                    <input type="text" class="hidden" name="fees_data_group" value="{{ $groupData }}">
                    <input type="text" class="hidden" name="pay_slip_type_name" value="{{ $paySlipTypeName }}">
                    <div class="w-full flex justify-center items-center gap-10 mt-20">
                        <button type="submit"
                            class="text-white bg-gradient-to-br from-blue-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-20 py-2.5 text-center">
                            Save
                        </button>
                        <button
                            class="text-white bg-gradient-to-br from-red-600 to-red-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-20 py-2.5 text-center">
                            Close
                        </button>
                        <h1>
                            Total =

                        </h1>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
