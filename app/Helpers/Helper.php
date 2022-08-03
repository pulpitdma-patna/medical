<?php

// This class file to define all general functions

namespace App\Helpers;

use App;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Auth;
use GeoIP;
use App\Models\Auth\DltEntity;
class Helper
{

    // Get Entity ID
    static function getEntityID($entityId)
    {
        $entity =  DltEntity::where('id', $entityId)->first();



        if($entity){
            return $entity->entity_id;
        }else{
            return '';
        }
    }
}

?>
