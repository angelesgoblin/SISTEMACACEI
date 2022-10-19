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
        //
        $roleadmin = Role::create(['name'=>'Admin']);
        $roleja = Role::create(['name'=>'Jefe_academico']);
        $roleda = Role::create(['name'=>'Desarrollo_academico']);

       // Permission::create(['name' => 'register'])->assignRole($roleadmin);
       Permission::create(['name' => 'actividadesapoyos.index','descripcion'=>'Ver lista de actividades'])->syncRoles([$roleja, $roleadmin]);
       Permission::create(['name' => 'actividadesapoyos.create','descripcion'=>'Crear actividades'])->assignRole($roleadmin);
       
       Permission::create(['name' => 'organigramas.index','descripcion'=>'Ver lista de organigrama'])->assignRole($roleadmin);
       Permission::create(['name' => 'organigramas.show','descripcion'=>'Mostrar registro de organigrama'])->assignRole($roleadmin);

       Permission::create(['name' => 'usuarios.index','descripcion'=>'Ver lista de usuarios'])->assignRole($roleadmin);
       Permission::create(['name' => 'usuarios.edit','descripcion'=>'Editar usuarios'])->assignRole($roleadmin);
       Permission::create(['name' => 'usuarios.update','descripcion'=>'Actualizar usuarios'])->assignRole($roleadmin);
       
       Permission::create(['name' => 'carreras.index','descripcion'=>'Ver lista de carreras'])->assignRole($roleadmin);
       Permission::create(['name' => 'carreras.show','descripcion'=>'Mostrar registro de carrera'])->assignRole($roleadmin);

       Permission::create(['name' => 'periodos.index','descripcion'=>'Ver lista de periodos'])->syncRoles([$roleja, $roleadmin]);
       Permission::create(['name' => 'periodos.show','descripcion'=>'Mostrar registro de periodo'])->syncRoles([$roleja, $roleadmin]);

       Permission::create(['name' => 'catalogodocentes.index','descripcion'=>'Ver lista de catalogo de docentes'])->syncRoles([$roleja, $roleda, $roleadmin]);
       Permission::create(['name' => 'catalogodocentes.show','descripcion'=>'Mostrar registro de catalogo de docente'])->syncRoles([$roleja, $roleda, $roleadmin]);

       Permission::create(['name' => 'evaluaciondocentes.index','descripcion'=>'Ver lista de evaluación docentes'])->syncRoles([$roleda, $roleadmin]);
       Permission::create(['name' => 'evaluaciondepartamentos.index','descripcion'=>'Ver lista de evaluación departamentos'])->syncRoles([$roleda, $roleadmin]);
       
       Permission::create(['name' => 'cedulaceros.index','descripcion'=>'Ver lista de cedula cero'])->syncRoles([$roleja, $roleadmin]);

       Permission::create(['name' => 'horarios.index','descripcion'=>'Ver lista de horarios'])->syncRoles([$roleja, $roleadmin]);
       Permission::create(['name' => 'horarios.show','descripcion'=>'Mostrar registro de horario'])->syncRoles([$roleja, $roleadmin]);
       Permission::create(['name' => 'horarios.buscar','descripcion'=>'Acceder a pagina de buscar horarios'])->syncRoles([$roleja, $roleadmin]);
       Permission::create(['name' => 'horarios.busqueda','descripcion'=>'Buscar horario de docente en especifico'])->syncRoles([$roleja, $roleadmin]);

       
    }
}
