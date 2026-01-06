<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $countries = [
            ['name' => 'UNITED STATES', 'code' => '1'],
            ['name' => 'UNITED KINGDOM', 'code' => '44'],
            ['name' => 'SWEDEN', 'code' => '46'],
            ['name' => 'CANADA', 'code' => '1'],
        ];

        return view('register', compact('countries'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name'        => ['required', 'string', 'max:255'],
            'last_name'         => ['required', 'string', 'max:255'],
            'email'             => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password'          => ['required', 'confirmed', Rules\Password::defaults()],
            'phone'             => ['required', 'string', 'max:20'],
            'user_type'         => ['required', 'in:user,organizer'],
            'organization_name' => ['nullable', 'string', 'max:255'],
            'Countrycode'       => ['required', 'string', 'max:10'],
        ]);

        $user = User::create([
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password),
            'phone'             => $request->phone,
            'user_type'         => $request->user_type,
            'organization_name' => $request->organization_name,
            'country_code'      => $request->Countrycode,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
