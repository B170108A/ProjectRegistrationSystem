<?php

namespace App\Http\Controllers;

use App\Models\RegistrationPublic;
use Illuminate\Http\Request;

class RegistrationPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RegistrationPublic $registrationPublic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegistrationPublic $registrationPublic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegistrationPublic $registrationPublic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegistrationPublic $registrationPublic)
    {
        //
    }

    public function showRegistrationForm()
    {
        return view('registrationPublic');
    }

    public function handleRegistration(Request $request)
    {
        // Validate input data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:registration_publics,email',
            'phone' => 'required|string|max:15',
            'employee_number' => 'required|string|max:255',
        ]);

        // Generate a unique lucky draw number
        $luckyDrawNumber = 'LD' . str_pad(RegistrationPublic::count() + 1, 6, '0', STR_PAD_LEFT);

        // Create the registration
        $registration = RegistrationPublic::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'employee_number' => $request->employee_number,
            'lucky_draw_number' => $luckyDrawNumber,
        ]);

        // Redirect with a success message and the lucky draw number
        return redirect()->route('registrationPublic.success', ['luckyDrawNumber' => $registration->lucky_draw_number]);
    }

    public function registrationSuccess($luckyDrawNumber)
    {
        return view('registrationPublic-success', compact('luckyDrawNumber'));
    }
}
