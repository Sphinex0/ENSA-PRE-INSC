<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Strings;

class EtudiantC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::simplePaginate(3);
        return view('admin.index', compact('etudiants'));


    }
    public function exportEtudiantsToExcel()
    {
        $etudiants = Etudiant::all();

        return Excel::download(function($excel) use ($etudiants) {
            $excel->sheet('Etudiants', function($sheet) use ($etudiants) {
                $sheet->fromArray($etudiants);
            });
        }, 'etudiants.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulaire');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            // Validate the form data
        //      $request->validate([
        //         'nom' => 'required',
        //         'prenom' => 'required',
        //         'nom_ar' => 'required',
        //         'prenom_ar' => 'required',
        //         'date_naissance' => 'required|date',
        //         'lieu_naissance' => 'required',
        //         'lieu_naissance_ar' => 'required',
        //         'provance_naissance' => 'required',
        //         'sexe' => 'required',
        //         'nationnalite' => 'required',
        //         'situation_familiale' => 'required',
        //         'situation_handicap' => 'required',
        //         'enseignement_superieur' => 'required',
        //         'universite_nom' => 'required',
        //         'serie_bac' => 'required',
        //         'type_etablissement' => 'required',
        //         'mention_bac' => 'required',
        //         'province_etablissement' => 'required',
                
                
        // 'scan_bac' => 'required|mimes:pdf',
        // 'relvi_note' => 'required|mimes:pdf',
        //         'a_obtention_bac' => 'required',
        //         'adresse1' => 'required',
        //         'adresse2' => 'required',
        //         'province' => 'required',
        //         'pays' => 'required',
        //         'email' => 'required',
        //         'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
        //         'cin_et' => 'required',
        //         'cm_ou_cne' => 'required',
        //         'code_postal' => 'required',
        //         'profession_pere' => 'required',
        //         'profession_mere' => 'required',
        //         'telephone' => 'required',
        //         'telephone_mere' => 'required',
        //         'telephone_pere' => 'required',
        //         'cin_pere' => 'required',
        //         'cin_mere' => 'required',
        //         'vivre_pere' => 'required',
        //         'vivre_mere' => 'required',
        //         'pdf_et' => 'required',
        //         'sport_individuels' => 'required',
        //         'sports_collectifs' => 'required',
        //         'culturelles_arts_plastiques' => 'required',
        //         'culturelles_theatre' => 'required',
        //         'culturelles_audiovisuel' => 'required',
        //         'culturelles_echecs' => 'required',
        //         'culturelles_ecriture' => 'required',
        //     ]);
            $etudiant = new Etudiant();
            $etudiant->nom = $request->nom;
            $etudiant->prenom = $request->prenom;
            $etudiant->nom_ar = $request->nom_ar;
            $etudiant->prenom_ar = $request->prenom_ar;
            $etudiant->date_naissance = $request->date_naissance;
            $etudiant->lieu_naissance = $request->lieu_naissance;
            $etudiant->lieu_naissance_ar = $request->lieu_naissance_ar;
            $etudiant->province_naissance = $request->provance_naissance;
            $etudiant->sexe = $request->sexe;
            $etudiant->nationnalite = $request->nationnalite;
            $etudiant->situation_familiale = $request->situation_familiale;
            $etudiant->situation_handicap = $request->situation_handicap;
            $etudiant->enseignement_superieur = $request->enseignement_superieur;
            $etudiant->universite_nom = $request->universite_nom;
            $etudiant->serie_bac = $request->serie_bac;
            $etudiant->type_etablissement = $request->type_etablissement;
            $etudiant->mention_bac = $request->mention_bac;
            $etudiant->province_etablissement = $request->province_etablissement;
            
            // Store scan_bac
            $pathScanBac = $request->file('scan_bac')->store('bac');
            $etudiant->scan_bac = $pathScanBac;
            
            // Store relvi_note
            $pathRelviNote = $request->file('relvi_note')->store('note');
            $etudiant->relvi_note = $pathRelviNote;
            
            // Store photo
            if ($request->hasFile('photo')) {
                // Store photo
                $pathPhoto = $request->file('photo')->store('public');
                $etudiant->photo = $pathPhoto;
            }
            
            // Set other attributes
            $etudiant->a_obtention_bac = $request->a_obtention_bac;
            $etudiant->adresse1 = $request->adresse1;
            $etudiant->adresse2 = $request->adresse2;
            $etudiant->province = $request->province;
            $etudiant->pays = $request->pays;
            $etudiant->email = $request->email;
            $etudiant->cin_et = $request->cin_et;
            $etudiant->cm_ou_cne = $request->cm_ou_cne;
            $etudiant->code_postal = $request->code_postal;
            $etudiant->profession_pere = $request->profession_pere;
            $etudiant->profession_mere = $request->profession_mere;
            $etudiant->telephone = $request->telephone;
            $etudiant->telephone_mere = $request->telephone_mere;
            $etudiant->telephone_pere = $request->telephone_pere;
            $etudiant->cin_pere = $request->cin_pere;
            $etudiant->cin_mere = $request->cin_mere;
            $etudiant->vivre_pere = $request->vivre_pere;
            $etudiant->vivre_mere = $request->vivre_mere;
            $etudiant->sport_individuels = $request->sport_individuels;
            $etudiant->sports_collectifs = $request->sports_collectifs;
            $etudiant->culturelles_arts_plastiques = $request->culturelles_arts_plastiques;
            $etudiant->culturelles_theatre = $request->culturelles_theatre;
            $etudiant->culturelles_audiovisuel = $request->culturelles_audiovisuel;
            $etudiant->culturelles_echecs = $request->culturelles_echecs;
            $etudiant->culturelles_ecriture = $request->culturelles_ecriture;
            
            $etudiant->save();
            return redirect('/admin');
            

    }

    /**
     * Display the specified resource.
     */
    public function show( )
    {
    
        return view('formulaire1');
       
    }
      
    
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
