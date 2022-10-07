<?php
namespace App\Helpers;
use App\{
        Models\Item,
    };

class CategoryHelper {

    public static function categoryByItem($item_id = Null) {
        if($item_id) {
            $item = Item::find($item_id);
            if($item) {
                if($item->category) {
                    $category_info = $item->category;
        
                } else if($item->subcategory) {
                    $category_info = $item->subcategory;
        
                } else if($item->childcategory) {
                    $category_info = $item->childcategory;
        
                } else {
                    $category_info = null;
                }

                return $category_info;
            }
        }

        return null;
    }
}