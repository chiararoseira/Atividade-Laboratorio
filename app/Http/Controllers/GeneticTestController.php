<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGeneticTestRequest;
use App\Models\GeneticTest;
use Illuminate\Http\Request;

class GeneticTestController extends Controller
{
    public function create()
    {
        return view('laboratorio.create');
    }

    public function store(StoreGeneticTestRequest $request)
    {
        $validatedData = $request->validated();

        GeneticTest::create($validatedData);

        return redirect()->route('genetic-tests.index')->with('success', 'Exame genético registrado com sucesso.');
    }
    
    public function index()
    {
        $geneticTests = \App\Models\GeneticTest::all();
        return view('laboratorio.index', compact('geneticTests'));
    }
}