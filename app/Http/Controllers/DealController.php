<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index()
    {
        $deals = Deal::all();
        return view('deals.index', compact('deals'));
    }

    public function create()
    {
        return view('deals.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Create a new deal
        Deal::create($request->all());

        return redirect()->route('deals.index')->with('success', 'Deal created successfully');
    }

    public function show($id)
    {
        $deal = Deal::findOrFail($id);
        return view('deals.show', compact('deal'));
    }

    public function edit($id)
    {
        $deal = Deal::findOrFail($id);
        return view('deals.edit', compact('deal'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            // Add validation rules for your deal fields
        ]);

        // Update the deal
        $deal = Deal::findOrFail($id);
        $deal->update($request->all());

        return redirect()->route('deals.index')->with('success', 'Deal updated successfully');
    }

    public function destroy($id)
    {
        // Delete the deal
        $deal = Deal::findOrFail($id);
        $deal->delete();

        return redirect()->route('deals.index')->with('success', 'Deal deleted successfully');
    }
}
