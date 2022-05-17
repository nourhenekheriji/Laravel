<?php
namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
class PatientController extends Controller
{
    public function index(Request $request)
    {
        $patients = Patient::latest()->paginate(5);
        return view('patients.index',compact('patients'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        //
        return view('patients.create');
    }   
    public function store(Request $request)
    {
        $rules =[
            'nom' => 'required',
            'prenom'=>'required',
            ' CIN'=>'required',
            ' dateNaissance' =>'required',
            ' telephone'=>'required',
            ' email'=>'required',
            ' adresse'=>'required',
            ' sexe'=>'required',
        ];
        //
          $request->validate([
            'nom' => 'required',
            'prenom'=>'required',
            ' CIN'=>'required',
            ' dateNaissance' =>'required',
            ' telephone'=>'required',
            ' email'=>'required',
            ' adresse'=>'required',
            ' sexe'=>'required',
        ]);
        $customMessage = [
            'nom.required' =>'ajouter le nom',
            'prenom.required' =>'ajouter le prenom',
            'CIN.required' =>'ajouter le CIN',
            'dateNaissance.required' =>'ajouter le dateNaissance',
            'telephone.required' =>'ajouter le telephone',
            'email.required' =>'ajouter le email',
            'adresse.required' =>'ajouter le adresse',
            'sexe.required' =>'ajouter le sexe',
        ];
        $this->validate($request,$rules,$customMessage);
        Patient::create($request->all());
        return redirect()->route('patients.index')
        ->with('success','patient created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
        return view('patients.show',compact('patients'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
        return view('patients.edit',compact('patients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
        $request->validate([

        ]);
        $patient->update($request->all());
        return redirect()->route('patients.index')
        ->with('success','student update successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
        $patient->delete();
        return redirect()->route('patients.index')
        ->with('success','student deleted successfully');
        
    }
}