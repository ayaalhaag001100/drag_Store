<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use  App\Models\category;

class Products extends Controller
{
    public function ShowProducts(Request $request){
        $idcategory=$request->id;
        $products=json_decode(product::all());
        $showProduct=[];
       foreach($products as $productBYid){
      // $c= $productBYid->category_id;
        if($productBYid->category_id==$idcategory)
         {
           $showProduct[]=$productBYid;
    }
 }
 return response()->json([
            'category_id'=>$idcategory,
            'proo'=>$productBYid->category_id,
            'show'=>$showProduct,
        ]);


}
}
