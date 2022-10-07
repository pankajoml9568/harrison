<?php

namespace App\Repositories\Back;

use App\{
    Models\Service,
    Helpers\ImageHelper
};

class ServiceRepository
{

    /**
     * Store service.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = 'harrison/'.ImageHelper::handleUploadedImage($request->file('photo'),'assets/images/harrison');
        Service::create($input);
    }

    /**
     * Update service.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($service, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = 'harrison/'.ImageHelper::handleUpdatedUploadedImage($file,'/assets/images/harrison',$service,'/assets/images/harrison/','photo');
        }
        $service->update($input);
    }

    /**
     * Delete service.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($service)
    {
        ImageHelper::handleDeletedImage($service,'photo','assets/images/');
        $service->delete();
    }

}
