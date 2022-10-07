<?php

namespace App\Repositories\Back;

use App\{
    Models\Slider,
    Helpers\ImageHelper
};

class SliderRepository
{

    /**
     * Store slider.
     *
     * @param  \App\Http\Requests\ImageStoreRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        $input['photo'] = 'harrison/'.ImageHelper::handleUploadedImage($request->file('photo'),'assets/images/harrison');
        $input['logo'] = 'harrison/'.ImageHelper::handleUploadedImage($request->file('logo'),'assets/images/harrison');
        Slider::create($input);
    }

    /**
     * Update slider.
     *
     * @param  \App\Http\Requests\ImageUpdateRequest  $request
     * @return void
     */

    public function update($slider, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = 'harrison/'.ImageHelper::handleUpdatedUploadedImage($file,'/assets/images/harrison/',$slider,'/assets/images/harrison/','photo');
        }
        if ($file = $request->file('logo')) {
            $input['logo'] = 'harrison/'.ImageHelper::handleUpdatedUploadedImage($file,'/assets/images/harrison/',$slider,'/assets/images/harrison/','logo');
        }
        $slider->update($input);
    }

    /**
     * Delete slider.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($slider)
    {
        ImageHelper::handleDeletedImage($slider,'photo','assets/images/');
        ImageHelper::handleDeletedImage($slider,'logo','assets/images/');
        $slider->delete();
    }

}
