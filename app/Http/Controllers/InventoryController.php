<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\inventories;

class InventoryController extends Controller
{
    //************************fetch all inventories ******************** */
    public function getInventories(){
       
        $fetchedData = DB::select('select * from inventories');

      return view('inventory',['fetchedData'=>$fetchedData]);
    }

//*************************** save inventories ************************ */
    public function saveInventories(Request $req){
        $messages=
               [
                   'product_code.unique'  =>   "The :attribute :input is taken. Please use another code",
               ];
               $rules = [
                'product_code' => 'required | max:8',
                  'product_name' => 'required | max:255',
                  'product_model' => 'required | max:255',
                  'product_selling_price' => 'required',
                  
                  ];
      
              $validate =  Validator::make($req->all(),$rules,$messages);
              if($validate->fails()){
                  return redirect()->back()->withErrors($validate->messages())->withInput();
              }else{
      
                  $inventories = new inventories;
                          $inventories->product_code = $req->input('product_code');
                          $inventories->product_name = $req->input('product_name');
                          $inventories->product_model = $req->input('product_model');
                          $inventories->product_selling_price = $req->input('product_selling_price');
                          $inventories->product_description = $req->input('product_description');
                         
                          $inventories->save();
                         
                      return redirect('/mainInventory')->with('alert','data submitted Successfully.');
                  
              }
      
          }

            //*********************For update inventory Only******************************* */
     public function updateInventory(Request $req, $id){
       
        $fetchedDatas =DB::select('select * from inventories where id = ?',[$id]);
                   
          return view('updateInventory',['fetchedDatas'=> $fetchedDatas, 'id'=>$id]);
        }

        //*********************For update inventory save Only******************************* */
    public function updateInventorySubmit(Request $req, $id){
        $product_code = $req->input('product_code');
        $product_name = $req->input('product_name');
        $product_model = $req->input('product_model');
        $product_selling_price = $req->input('product_selling_price');
        $product_description = $req->input('product_description');
        
DB::update('update inventories set product_code = ?,product_name = ?,product_model = ?,product_selling_price = ?,product_description = ? where id = ?',[$product_code,$product_name,$product_model,$product_selling_price,$product_description,$id]);     

return redirect('/mainInventory')->with('alert','data updated Successfully.');
}

//*********************For Delete inventory details ******************************* */
public function deleteInventory(Request $req, $id){

    $retailers =DB::table('inventories') ->where('id', $id)->delete();                           


   return redirect('/mainInventory')->with('alert','data deleted Successfully.');
}

}
