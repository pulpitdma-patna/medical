<?php

namespace App\Http\Controllers\Backend\Auth\Setting;

use App\Models\Auth\Settings;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Auth\SettingRepository;
use App\Http\Requests\Backend\Auth\Setting\ManageSettingRequest;
use App\Http\Requests\Backend\Auth\Setting\UpdateSettingRequest;

class SettingController extends Controller
{
   /**
     * @var SettingRepository
     */
    protected $settingRepository;
    
    /**
     * UserController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(SettingRepository $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }
    
    /**
     * @param ManageRoleRequest $request
     * @param Role              $role
     *
     * @return mixed
     */
    
    /**
     * @param UpdateRoleRequest $request
     * @param Role              $role
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(UpdateSettingRequest $request, Settings $setting)
    {
        $new_setting = $this->settingRepository->update($setting, $request->only('theme','font','mode_type','data_theme'));

        return redirect()->route('admin.auth.setting.edit',$new_setting)->withFlashSuccess(__('Settings Applied Successfully'));
    
    }
}
