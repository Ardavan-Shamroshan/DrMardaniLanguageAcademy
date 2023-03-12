<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        // create permissions
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        Permission::create(['name' => 'promote students']);

        Permission::create(['name' => 'create notices']);
        Permission::create(['name' => 'view notices']);
        Permission::create(['name' => 'edit notices']);
        Permission::create(['name' => 'delete notices']);

        Permission::create(['name' => 'create events']);
        Permission::create(['name' => 'view events']);
        Permission::create(['name' => 'edit events']);
        Permission::create(['name' => 'delete events']);

        Permission::create(['name' => 'create syllabi']);
        Permission::create(['name' => 'view syllabi']);
        Permission::create(['name' => 'edit syllabi']);
        Permission::create(['name' => 'delete syllabi']);

        Permission::create(['name' => 'create routines']);
        Permission::create(['name' => 'view routines']);
        Permission::create(['name' => 'edit routines']);
        Permission::create(['name' => 'delete routines']);

        Permission::create(['name' => 'create exams']);
        Permission::create(['name' => 'view exams']);
        Permission::create(['name' => 'delete exams']);
        Permission::create(['name' => 'create exams rule']);
        Permission::create(['name' => 'view exams rule']);
        Permission::create(['name' => 'edit exams rule']);
        Permission::create(['name' => 'delete exams rule']);
        Permission::create(['name' => 'view exams history']);

        Permission::create(['name' => 'create grading systems']);
        Permission::create(['name' => 'view grading systems']);
        Permission::create(['name' => 'edit grading systems']);
        Permission::create(['name' => 'delete grading systems']);
        Permission::create(['name' => 'create grading systems rule']);
        Permission::create(['name' => 'view grading systems rule']);
        Permission::create(['name' => 'edit grading systems rule']);
        Permission::create(['name' => 'delete grading systems rule']);

        Permission::create(['name' => 'take attendances']);
        Permission::create(['name' => 'view attendances']);
        Permission::create(['name' => 'update attendances type']);

        Permission::create(['name' => 'submit assignments']);
        Permission::create(['name' => 'create assignments']);
        Permission::create(['name' => 'view assignments']);

        Permission::create(['name' => 'save marks']);
        Permission::create(['name' => 'view marks']);

        Permission::create(['name' => 'create school sessions']);

        Permission::create(['name' => 'create semesters']);
        Permission::create(['name' => 'view semesters']);
        Permission::create(['name' => 'edit semesters']);
        Permission::create(['name' => 'assign teachers']);
        Permission::create(['name' => 'create courses']);
        Permission::create(['name' => 'view courses']);
        Permission::create(['name' => 'edit courses']);

        Permission::create(['name' => 'view academic settings']);
        Permission::create(['name' => 'update marks submission window']);
        Permission::create(['name' => 'update browse by session']);

        Permission::create(['name' => 'create classes']);
        Permission::create(['name' => 'view classes']);
        Permission::create(['name' => 'edit classes']);
        // Permission::create(['name' => 'delete classes']);

        Permission::create(['name' => 'create sections']);
        Permission::create(['name' => 'view sections']);
        Permission::create(['name' => 'edit sections']);
        // Permission::create(['name' => 'delete sections']);

        // create roles and assign created permissions

        // member
        $member = Role::create(['name' => 'member']);

        // super admin has high access level
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(Permission::all());

    }
}
