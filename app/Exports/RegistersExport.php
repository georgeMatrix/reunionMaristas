<?php

namespace App\Exports;

use App\Register;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class RegistersExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('principal/excel', [
            'datosPerson' => DB::table('person')
                ->join('campuses', 'person.campus_id', '=', 'campuses.id')
                ->join('staff', 'person.staff_id', '=', 'staff.id')
                ->join('registers', 'person.id', '=', 'registers.person_id')
                ->select('person.id','person.full_name', 'campuses.official_name', 'staff.name', 'person.job_email', 'person.personal_email', 'registers.check_in', 'registers.check_out', 'registers.is_loading', 'registers.is_food', 'registers.food_description', 'registers.notes')
                ->where('registers.status', '=', 'active')->orderBy('name', 'ASC')
                ->where('registers.created_at', '<=', '2019-09-13 15:00:00')
                ->get()
        ]);
    }
}
