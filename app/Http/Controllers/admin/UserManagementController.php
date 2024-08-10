<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function index()
    {
        $UsersCount = User::count();
        $PrivateUsersCount = User::role(User::PARTICULIER)->count();
        $ProUsersCount = User::role(User::PROFESSIONNEL)->count();
        $ManagerUsersCount = User::role(User::MANAGER)->count();
        $users = User::whereNotNull('sellerType')->paginate(20);
        return view('dashboard.Users.List', compact('UsersCount', 'PrivateUsersCount', 'ProUsersCount', 'ManagerUsersCount', 'users'));
    }

    public function getRoles()
    {
        $roles = Role::all();
        return response()->json($roles);
    }
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email|max:255',
                'phone' => 'required|string|max:15|min:9',
                'role' => 'required|string|in:admin,manager,particulier,professionnel',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $sellerType = null;
            if (in_array($validatedData['role'], [User::PARTICULIER, User::PROFESSIONNEL])) {
                $sellerType = $validatedData['role'];
            }

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'password' => Hash::make($validatedData['password']),
                'sellerType' => $sellerType,
            ]);

            $user->assignRole($validatedData['role']);

            return response()->json(['success' => 'User created successfully.']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(
                [
                    'errors' => $e->errors(),
                ],
                422,
            );
        } catch (\Exception $e) {
            return response()->json(['errors' => ['An unexpected error occurred.']], 500);
        }
    }
}
