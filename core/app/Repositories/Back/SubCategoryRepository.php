<?php

namespace App\Repositories\Back;


use App\{
    Models\Subcategory,
    Helpers\ImageHelper
};

class SubCategoryRepository
{

    /**
     * Store category.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return void
     */

    public function store($request)
    {
        $input = $request->all();
        if ($file = $request->file('banner')) {
            $input['banner'] = 'harrison/'.ImageHelper::handleUploadedImage($request->file('banner'),'assets/images/harrison');
        }
        Subcategory::create($input);
    }

    /**
     * Update category.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return void
     */

    public function update($category, $request)
    {
        $input = $request->all();
        if ($file = $request->file('banner')) {
            $input['banner'] = 'harrison/'.ImageHelper::handleUpdatedUploadedImage($file,'/assets/images/harrison/',$category,'/assets/images/harrison','banner');
        }
        $category->update($input);
    }

    /**
     * Delete category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($category)
    {
        $category->delete();
    }

}
