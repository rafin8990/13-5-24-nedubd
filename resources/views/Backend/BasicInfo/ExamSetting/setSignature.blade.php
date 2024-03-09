@extends('Backend.app')
@section('title')
    Signature
@endsection
@section('Dashboard')
    <div>
        <h3>
            Exam Report Name By Signature Setup
        </h3>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-10 md:my-10">
        <form action="">
            <div class="md:flex my-10 ">
                <div class="mr-5">
                    <label for="session" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Report NAME
                        :</label>
                </div>
                <div class="mr-10">
                    <select id="countries" name="report_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Report</option>
                        @foreach($reports as $report)
                        <option >{{$report->report_name}}</option>
                        @endforeach
                    </select>
                </div>


                <div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">GET
                        DATA</button>
                </div>

            </div>

        </form>


        <div class=" text-lg font-bold">
            <div class="flex justify-center">
                <h3>
                    REPORT NAME WISE SIGNATURE SETTING
                </h3>
            </div>

            <table class="w-full text-sm text-left rtl:text-right text-black dark:text-blue-100">
                <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            SL
                        </th>
                        <th scope="col" class="px-6 py-3">
                            SIGNATURE NAME
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-500">
                            POSITION
                        </th>
                        <th scope="col" class="px-6 py-3">
                            STATUS
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr class=" border-b border-blue-400">
                        <th scope="row" class="px-6 py-4 font-medium  text-black whitespace-nowrap dark:text-blue-100">

                        </th>
                        <td class="px-6 py-4">

                        </td>
                        <td class="px-6 py-4">

                        </td>
                        <td class="px-6 py-4">

                        </td>
                    
                    </tr>



                </tbody>
            </table>

        </div>
        <br> <br>

        <div class="md:flex justify-center">
           
            <div class="mr-10">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
            </div>
            <div class="mr-10">
                <button type="submit"
                    class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Close</button>
            </div>

            <div class="ml-32">
                <h3>Total = <div class=" border-2"></div>
                </h3>
            </div>

        </div>

    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        let $dateDropdown = $('#date-dropdown');

        let currentYear = new Date().getFullYear();
        let earliestYear = 1970;

        while (currentYear >= earliestYear) {
            let $dateOption = $('<option>');
            $dateOption.text(currentYear);
            $dateOption.val(currentYear);
            $dateDropdown.append($dateOption);
            currentYear -= 1;
        }
    });
</script>
