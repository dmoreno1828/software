<?php

namespace App;

use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    //


    public function SetNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }


    /**
     * function test()   todos estos metodos son de prueba - al terminar eliminar la sno uadas y comentar las otras
     *
     *                   las estaba usando para generar la grafica con geralquia de roles
     * @param
     * @return
     */
    public static function getBaseRole(){
        return Role::query()->where('level', 0)->first();
    }

    public static function getChildren( $parent="", $level=0 ){
        return Role::query()
            ->where('level', $level)
            //->where('parent', 'like', $parent.'::%')
            ->where('parent', 'like', $parent.'::%')
            ->get();
    }


}
