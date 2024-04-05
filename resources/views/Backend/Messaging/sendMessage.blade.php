@extends('Backend.app')
@section('title')
  Send Message
@endsection
@section('Dashboard')
    @include('/Message/message')
    <style>
        .shadowStyle {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }
    </style>

    <div>
        <h1 class="text-2xl font-bold my-10 mx-5 text-center">Send Message</h1>
    </div>
    <div class=" mb-3">
        <form action="" class="p-5 shadowStyle rounded-[8px] border border-slate-300 w-3/5 mx-auto space-y-3">
            <div class="grid grid-cols-3 place-items-start  gap-5">
                <label for="class" class="block mb-2 text-sm font-medium whitespace-noWrap ">Instruction
                    :</label>
                    <textarea name="instruction" id="instruction" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="write a message"></textarea>
            </div>
            <div class="">
                <h3 class="text-lg mb-5">
                    All Contact:
                </h3>
                <table class="w-full text-sm rtl:text-right text-black">
                    <thead class="text-center text-white uppercase bg-blue-300 border-b border-blue-200 ">
                        <tr>
                            <th scope="col" class=" text-sm px-6 py-3 bg-blue-500">
                                Name
                            </th>
                            <th scope="col" class=" text-sm px-6 py-3">
                                Contact
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            
            
            <div class="w-full flex justify-end">
                <button type="submit"
                    class="  text-white bg-rose-700 hover:bg-rose-600 focus:ring-0  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Send
                </button>
            </div>
        </form>
    </div>
@endsection















