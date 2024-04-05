<?php

namespace App\Http\Controllers\Backend\Message;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ExcelMSGController extends Controller
{
    public function excelMsg(){
        return view ('Backend.Messaging.msgExcelFile');
       }
    public function downloadDemo(){
        $filePath = public_path('contact-demo.xlsx');
        return Response::download($filePath, 'contact-demo.xlsx', [], 'inline');
    }


    public function uploadExcel(Request $request)
    {
// dd($request);
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);
        // dd($request);
        $contacts = [];

        $file = $request->file('file');
        $school_code = $request->input('school_code');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move(storage_path('app/uploads'), $file->getClientOriginalName());
            $filePath = storage_path('app/uploads/') . $file->getClientOriginalName();
            $contacts = $this->readExcel($filePath);
        }
        // dd($contacts);

        foreach ($contacts as $contact) {
            // dd($contact[1]);
            $existingContact = Contact::where('school_code', $request->school_code)
            ->where('action', 'approved')
            ->where('contact', $contact[1])
            ->first(); // Execute the query and get the first result

if ($existingContact) {
return redirect()->back()->with('error', 'Contact already added');
}
            $student = new Contact();
            $student->name = $contact[0];
            $student->contact = $contact[1];
            $student->school_code = $school_code;
            $student->action= "approved";
            $student->save();
        }

            return redirect()->back()->with('success', "contact Uploaded successfully");
      
    }


    private function readExcel($filePath)
    {
        $data = [];
        
       
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load($filePath);
        
    
        $worksheet = $spreadsheet->getActiveSheet();
        
     
        foreach ($worksheet->getRowIterator() as $row) {
            $rowData = [];
            
    
            foreach ($row->getCellIterator() as $cell) {
                $rowData[] = $cell->getValue();
            }
            
           
    
            $data[] = $rowData;
        }
        
        array_shift($data);
        // dd($data);
        return $data;
    }
    
}
