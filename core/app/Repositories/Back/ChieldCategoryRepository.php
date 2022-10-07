<?php

namespace App\Repositories\Back;

use App\{
    Models\ChieldCategory,
    Helpers\ImageHelper
};

class ChieldCategoryRepository
{

    /**
     * Store category.
     *
     * @param  \App\Http\Requests\ChieldCategoryRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        if ($file = $request->file('banner')) {
            $input['banner'] = 'harrison/'.ImageHelper::handleUploadedImage($request->file('banner'),'assets/images/harrison');
        }
        ChieldCategory::create($input);
    }

    /**
     * Update category.
     *
     * @param  \App\Http\Requests\ChieldCategoryRequest  $request
     * @return void
     */

    public function update($fcategory, $request)
    {
        $input = $request->all();
        if ($file = $request->file('banner')) {
            $input['banner'] = 'harrison/'.ImageHelper::handleUpdatedUploadedImage($file,'/assets/images/harrison/',$fcategory,'/assets/images/harrison/','banner');
        }
        $fcategory->update($input);
    }

    /**
     * Delete category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($fcategory)
    {
        $fcategory->delete();
    }

}
