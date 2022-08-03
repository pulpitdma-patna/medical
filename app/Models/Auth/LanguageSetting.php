<?php 
namespace App\Models\Auth;

use App\Models\Auth\Traits\Method\LanguageSettingMethod;
use Illuminate\Database\Eloquent\Model;

class LanguageSetting extends Model
{
    use LanguageSettingMethod;
}
