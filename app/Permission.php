<?php

namespace App;

use Laratrust\LaratrustPermission;

class Permission extends LaratrustPermission
{
    //


    /**
     * function getPermissionsByModule()
     *
     * @param  void
     * @return array de registros de module
     */
    public static function getModules(){
        return Permission::query()
            ->select('module')
            ->where('is_root', '<>', '1')
            ->groupBy('module')
            ->orderBy('module')
            ->get();
    }


    /**
     * function getPermissionsByModule()
     *
     * @param  string $module
     * @return array de registros segun $module
     */
    public static function getPermissionsByModule($module=""){
        return Permission::query()
            //->select('module')
            ->where('module', $module)
            ->where('is_root', '<>', '1')
            ->orderBy('name')
            ->get();
    }

}
