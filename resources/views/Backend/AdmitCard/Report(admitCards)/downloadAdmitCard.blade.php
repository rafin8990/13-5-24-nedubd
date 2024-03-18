<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-pdf/0.0.2/dom-to-pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <title>Admit Card</title>
</head>

<body>

    <div class="max-w-[1100px] mx-auto border-4 border-amber-400">
        <div class="flex w-full justify-between items-center p-5  ">
            <div><img src="https://cdn.pixabay.com/photo/2023/01/13/17/44/red-7716610_640.png"
                    class="rounded-full w-28 h-28" alt=""></div>
            <div class="text-center">
                <h3 class="text-xl">Pallabi Mazedul Islam Model High School</h3>
                <p class="text-sm">13/14,Pallabi, Dhaka - 1216. <br>

                    Contact No: 01309108183 <br>

                    Email: mimodelschool1978@gmail.com <br>

                    Website: http://pmimhs.edu.bd/ <br>

                    Print date:14-03-2024</p>
                <p class="text-purple-500 font-bold font-semi-bold text-center">Admit Card</p>
            </div>
            <div><img src="https://cdn.pixabay.com/photo/2023/01/13/17/44/red-7716610_640.png"
                    class="rounded-full w-28 h-28" alt=""></div>
        </div>
        <div class="flex justify-between w-full p-5">
            @foreach ($Data as $Data)
                <div class="text-left ">
                    <div class="grid grid-cols-3 gap-20">
                        <p>Student Name</p>
                        <p>: {{ $Data->first_name }} {{ $Data->last_name }}</p>
                    </div>
                    <div class="grid grid-cols-3 gap-20">
                        <p>Class</p>
                        <p>: {{ $Data->Class_name }}</p>
                    </div>
                    <div class="grid grid-cols-3 gap-20">
                        <p>Roll</p>
                        <p>: {{ $Data->student_roll }}</p>
                    </div>
                    <div class="grid grid-cols-3 gap-20">
                        <p>Group</p>
                        <p>: {{ $Data->group }}</p>
                    </div>
                    <div class="grid grid-cols-3 gap-20">
                        <p>Section</p>
                        <p>: {{ $Data->section }}</p>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="grid grid-cols-3 gap-20">
                            <p>Student ID</p>
                            <p>: {{ $Data->student_id }}</p>
                        </div>
                        <div class="grid grid-cols-3  gap-20">
                            <p>Exam Name </p>
                            <p>: {{ $exam_name }}</p>
                        </div>
                        <div class="grid grid-cols-3  gap-20">
                            <p>Year </p>
                            <p>: {{ $year }} </p>
                        </div>
                        <div class="grid grid-cols-3  gap-20">
                            <p>Father Name </p>
                            <p>: {{ $Data->father_name }}</p>
                        </div>
                        <div class="grid grid-cols-3  gap-20">
                            <p>Mobile No </p>
                            <p>: {{ $Data->father_mobile }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @foreach ($admit as $item)
            <div class="p-5">
                <p class="text-xl px-3 py-1 bg-cyan-400/40 w-fit">Instruction</p>
                <p>
                    <li>{{ $item->instruction }}
                    </li>

                </p>
            </div>
        @endforeach

        <div class="flex justify-between items-center p-5 ">
            <div class="mt-10">
                <div class="border-t border-t-black">Class Teacher</div>
            </div>
            <div>
                <div class="mb-2">
                    @foreach ($headteacher as $sign)
                        <img src="{{ asset($sign->image) }}" class="h-[70px] w-[70px]" alt="sign">
                    @endforeach
                </div>
                <div class="border-t border-t-black">Headmaster</div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-10">
        <div class="mr-10">

            <a href="/dashboard/printAdmitCard/{{ $school_code }}">
                <button type="button"
                    class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</button>
            </a>
        </div>

        <div>

            <button id="downloadButton" type="button"
                class="text-white bg-rose-700 hover:bg-rose-800 focus:ring-4 focus:outline-none focus:ring-rose-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800">Download</button>


        </div>
    </div>

    <script>
     
            const downloadButton = document.getElementById("#downloadButton");

            downloadButton.addEventListener("click", function () {
                // Convert the HTML document to PDF
                domtoimage.toPng(document.body)
                    .then(function (dataUrl) {
                        var pdf = new jsPDF();
                        pdf.addImage(dataUrl, 'PNG', 0, 0);
                        pdf.save("admit_card.pdf");
                    });
            });
       
    </script>

</body>

</html>
