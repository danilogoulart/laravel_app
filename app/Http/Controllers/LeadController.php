<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

class LeadController extends Controller
{
    public function create(Request $request)
    {
        $lead = new Lead();
        $data = $this->validate($request, [
            'name_lead'=>'required',
            'email_lead'=> 'required'
        ]);

       $test = $lead->saveLead($data);

        return redirect('/')->with('success', 'Salvo com sucesso! Em breve entraremos em contato!');
    }
}
