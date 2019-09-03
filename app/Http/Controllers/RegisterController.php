<?php

namespace App\Http\Controllers;

use App\Campus;
use App\Http\Requests\Registro;
use App\Meeting;
use App\Person;
use App\Register;
use App\Staff;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index']]);
    }

    public function ExportPdf($id){
        //return $request->except('_token');
        $datosPerson = DB::table('person')
            ->join('campuses', 'person.campus_id', '=', 'campuses.id')
            ->join('staff', 'person.staff_id', '=', 'staff.id')
            ->join('registers', 'person.id', '=', 'registers.person_id')
            ->where('registers.id', '=', $id)
            ->select('person.full_name', 'campuses.official_name', 'staff.name', 'person.job_email', 'person.personal_email', 'registers.check_in', 'registers.check_out', 'registers.is_loading', 'registers.is_food', 'registers.food_description', 'registers.notes', 'campuses.code as campus')
            ->get();
        $datosRegisters = DB::table('registers')
            ->join('meetings', 'registers.event_id', '=', 'meetings.id')
            ->select('meetings.name')
            ->get();
        //$pdf = PDF::loadView('cartaPorte/cartaPortePDF', ['cartaPorte'=> $cartaPorte, 'fecha'=>$fecha, 'tipo'=>$tipo, 'letra'=>$letra]);
        $pdf = PDF::loadView('principal/createPdf', ['datosPerson'=>$datosPerson, 'datosRegisters'=>$datosRegisters]);
        return $pdf->download('algo.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosPerson = DB::table('person')
            ->join('campuses', 'person.campus_id', '=', 'campuses.id')
            ->join('staff', 'person.staff_id', '=', 'staff.id')
            ->join('registers', 'person.id', '=', 'registers.person_id')
            ->select('person.id','person.full_name', 'campuses.official_name', 'staff.name', 'person.job_email', 'person.personal_email', 'registers.check_in', 'registers.check_out', 'registers.is_loading', 'registers.is_food', 'registers.food_description', 'registers.notes')
            ->get();
        $datosRegisters = DB::table('registers')
            ->join('meetings', 'registers.event_id', '=', 'meetings.id')
            ->select('meetings.name')
            ->get();
        $datos = [$datosPerson, $datosRegisters];
        //dd($datos);
        return view('principal/gestion')
            ->with('datos', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campuses = Campus::all();
        $staffs = Staff::all();
        return view('principal/registro')
            ->with('staffs', $staffs)
            ->with('campuses', $campuses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Registro $request)
    {
        $personaIngresada = Person::create($request->all());
        $id_person = $personaIngresada->id;
        $register = new Register();
        $meeting = Meeting::find(1);
        $register->event_id = $meeting->id;
        $register->person_id = $id_person;
        $register->check_in = $request->check_in;
        $register->check_out = $request->check_out;
        $register->is_loading = $request->is_loading;
        $register->is_food = $request->is_food;
        $register->food_description = $request->food_description;
        $register->notes = $request->notes;
        $register->save();
        return redirect()->route('registro.create')->with(['message' => 'Transacción éxistosa']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
