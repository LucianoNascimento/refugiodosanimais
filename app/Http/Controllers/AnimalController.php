<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AnimalRequest;
use App\Models\Animal;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as Status;

class AnimalController extends Controller
{

    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    /**
     * Display a listing of the resource.
     */
    public function index():void
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnimalRequest $request):JsonResponse
    {
        $animals = $request->validated();
        $this->animal->create($animals);
        return response()->json(['Animal cadastrado com sucesso'], Status::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
