<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Afficher la liste des clients.
     */
    public function index()
    {
        $clients = Client::latest()->get();

        return view('clients.index', compact('clients'));
    }

    /**
     * Afficher le formulaire de création.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Enregistrer un nouveau client.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:particulier,entreprise',
            'nom' => 'nullable|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'raison_sociale' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'telephone' => 'nullable|string|max:30',
            'telephone_secondaire' => 'nullable|string|max:30',
            'adresse' => 'nullable|string',
            'ville' => 'nullable|string|max:255',
            'pays' => 'nullable|string|max:255',
            'numero_identification' => 'nullable|string|max:255',
            'date_naissance' => 'nullable|date',
            'statut' => 'required|in:actif,inactif',
            'notes' => 'nullable|string',
        ]);

        Client::create($validated);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client ajouté avec succès.');
    }

    /**
     * Afficher un client.
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Afficher le formulaire de modification.
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Mettre à jour un client.
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'type' => 'required|in:particulier,entreprise',
            'nom' => 'nullable|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'raison_sociale' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'telephone' => 'nullable|string|max:30',
            'telephone_secondaire' => 'nullable|string|max:30',
            'adresse' => 'nullable|string',
            'ville' => 'nullable|string|max:255',
            'pays' => 'nullable|string|max:255',
            'numero_identification' => 'nullable|string|max:255',
            'date_naissance' => 'nullable|date',
            'statut' => 'required|in:actif,inactif',
            'notes' => 'nullable|string',
        ]);

        $client->update($validated);

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client modifié avec succès.');
    }

    /**
     * Supprimer un client.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()
            ->route('clients.index')
            ->with('success', 'Client supprimé avec succès.');
    }
}