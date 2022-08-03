<?php 
namespace App\Models\Auth;

use App\Models\Auth\Traits\Method\LanguageMethod;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use LanguageMethod;
}
