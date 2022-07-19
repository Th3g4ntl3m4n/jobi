<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'user']);
        $role3 = Role::create(['name' => 'companie']);

        Permission::create(['name' => 'dashboard'])->syncRoles([$role1,$role2,$role3]);


        Permission::create(['name' => 'dashboard.resume.index'])->syncRoles([$role1,$role2,]);
        Permission::create(['name' => 'dashboard.resume.create'])->syncRoles([$role1,$role2,]);
        Permission::create(['name' => 'dashboard.resume.edit'])->syncRoles([$role1,$role2,]);
        Permission::create(['name' => 'dashboard.resume.destroy'])->syncRoles([$role1,$role2,]);

        Permission::create(['name' => 'dashboard.publis_jobs.index'])->syncRoles([$role1,$role3,]);
        Permission::create(['name' => 'dashboard.publis_jobs.create'])->syncRoles([$role1,$role3,]);
        Permission::create(['name' => 'dashboard.publis_jobs.edit'])->syncRoles([$role1,$role3,]);
        Permission::create(['name' => 'dashboard.publis_jobs.destroy'])->syncRoles([$role1,$role3,]);
    }
}
