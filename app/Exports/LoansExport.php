<?php

namespace App\Exports;

use App\Loan;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
//use Maatwebsite\Excel\Concerns\FromCollection;

class LoansExport implements FromView
{
    public function view(): View
    {
        return view('partials.view_loan_export', [
            'loanDetails' => Loan::where('id',request('id'))->get()
        ]);
    }
}
