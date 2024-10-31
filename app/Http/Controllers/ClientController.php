<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\StoreClientRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View as View;

class ClientController extends Controller
{
    public function index(): View
    {
        $clients = Client::all()->toQuery()->simplePaginate(perPage: 12);

        return view('clients.index', [
            'heading' => 'Klienci',
            'clients' => $clients,
            'addClientButton' => true,
            'searchBar' => true
        ]);
    }

    public function create(): View
    {
        return view('clients.create');
    }

    public function store(StoreClientRequest $request): RedirectResponse
    {
        $client = Client::create($request->validated());
        return redirect('/clients')->with('success', 'Dodano nowego klienta.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
