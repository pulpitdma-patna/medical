<?php

namespace App\Repositories\Backend\Auth;

use App\Models\Auth\Settings;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;

/**
 * Class RoleRepository.
 */
class SettingRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Settings::class;
    }
    
    /**
     * @param Role  $role
     * @param array $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(Settings $setting, array $data)
    {
        return DB::transaction(function () use ($setting, $data) {
           
            if ($setting->update([
                'theme' => strtolower($data['theme']),
                'font'=> $data['font'],
                'mode_type'=> isset($data['mode_type']) && $data['mode_type'] == 'Y' ? 'Y' : 'N',
                'data_theme'=> $data['data_theme'],
            ])) {

                return $setting;
            }

            throw new GeneralException(trans('Settings could not be found.'));
        });
    }

    

    /**
     * @param $name
     *
     * @return bool
     */
    protected function settingExists($id) : bool
    {
        return $this->model
                ->where('id', $id)
                ->count() > 0;
    }
}
