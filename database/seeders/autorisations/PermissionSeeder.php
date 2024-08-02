<?php

namespace Database\Seeders\autorisations;

use App\Models\User;
// use Illuminate\Routing\Route;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->generatePermissions() as $permission) {
            if (Permission::where('name', $permission)->doesntExist()) {
                Permission::create(['name' => $permission]);
            }
        }

        // Get the leader role
        $MANAGER = Role::where('name', User::MANAGER)->first();
        $PARTICULIER = Role::where('name', User::PARTICULIER)->first();
        $PROFESSIONNEL = Role::where('name', User::PROFESSIONNEL)->first();

        // Get the Permission instances corresponding to the generated permissions
        $permissions = Permission::whereIn('name', $this->generatePermissions())->get();

        // Give permissions to the PROFESSIONNEL role
        $PROFESSIONNEL->givePermissionTo($permissions);
        $MANAGER->givePermissionTo($permissions);
        $PARTICULIER->givePermissionTo($permissions);
        // $permissions->assignRole($PROFESSIONNEL);
    }

    // protected function generatePermissions(): array
    // {
    //     $controllers = self::extractControllerNames();
    //     $permissions = [];
    //     foreach ($controllers as $controller) {
    //         $permission = str_replace(['Controller', '@'], ['', '-'], $controller);
    //         $permission = implode('-', array_reverse(explode('-', $permission)));
    //         $permissions[] = $permission;
    //     }
    //     return $permissions;
    // }

    protected function generatePermissions(): array
    {
        $controllers = self::extractControllerNames();
        $permissions = [];
        foreach ($controllers as $controller) {
            // Split the controller string by '@' to separate the method
            list($controllerName, $method) = explode('@', $controller);
            // Format the permission as "method-ControllerName"
            $permission = $method . '-' . $controllerName;
            $permissions[] = $permission;
        }
        return $permissions;
    }

    protected function extractControllerNames(): array
    {
        $extractControllerNames = [];
        // Loop through all routes
        foreach (Route::getRoutes() as $route) {
            $action = $route->getAction();
            // Check if the route has a controller key in its action
            if (array_key_exists('controller', $action)) {
                $fullControllerName = $action['controller'];

                // Check if the controller is in the correct namespace and does not belong to Auth namespace
                if (
                    strpos($fullControllerName, 'App\Http\Controllers\\') === 0 &&
                    strpos($fullControllerName, 'App\Http\Controllers\Auth\\') !== 0
                ) {
                    // Extract the controller name without the namespace
                    $extractControllerNames[] = str_replace('App\Http\Controllers\\', '', $fullControllerName);
                }
            }
        }
        return $extractControllerNames;
    }
}
