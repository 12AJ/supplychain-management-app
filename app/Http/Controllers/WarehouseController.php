<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\warehouses;

class WarehouseController extends Controller
{
    public function getWarehouse(){
       
        $fetchedData = DB::select('select * from warehouses');

      return view('warehouse',['fetchedData'=>$fetchedData]);
    }


    public function saveWarehouse(Request $req){
        $messages=
               [
                   'warehouse_email.unique'  =>   "The :attribute :input is taken. Please use another email",
               ];
               $rules = [
            
                  'warehouse_name' => 'required | max:255',
                  'warehouse_email' => 'required | max:255',
                  'warehouse_phone' => 'required',
                  'warehouse_address' => 'required',
                  ];
      
              $validate =  Validator::make($req->all(),$rules,$messages);
              if($validate->fails()){
                  return redirect()->back()->withErrors($validate->messages())->withInput();
              }else{
      
                  $warehouses = new warehouses;
                          $warehouses->warehouse_name = $req->input('warehouse_name');
                          $warehouses->warehouse_email = $req->input('warehouse_email');
                          $warehouses->warehouse_phone = $req->input('warehouse_phone');
                          $warehouses->warehouse_address = $req->input('warehouse_address');
                         
                          $warehouses->save();
                         
                      return redirect('/warehouse')->with('alert','data submitted Successfully.');
                  
              }
      
          }


           //*********************For update warehouse Only******************************* */
     public function updateWarehouse(Request $req, $id){
       
        $fetchedDatas =DB::select('select * from warehouses where id = ?',[$id]);
                   
          return view('updateWarehouse',['fetchedDatas'=> $fetchedDatas, 'id'=>$id]);
        }

        //*********************For update warehouse save Only******************************* */
    public function updateWarehouseSubmit(Request $req, $id){
        $warehouse_name = $req->input('warehouse_name');
        $warehouse_email = $req->input('warehouse_email');
        $warehouse_phone = $req->input('warehouse_phone');
        $warehouse_address = $req->input('warehouse_address');
        
DB::update('update warehouses set warehouse_name = ?,warehouse_email = ?,warehouse_phone = ?,warehouse_address = ? where id = ?',[$warehouse_name,$warehouse_email,$warehouse_phone,$warehouse_address,$id]);     

return redirect('/warehouse')->with('alert','data updated Successfully.');
}


//*********************For Delete warehouse details ******************************* */
public function deleteWarehouse(Request $req, $id){

    $retailers =DB::table('warehouses') ->where('id', $id)->delete();                           


   return redirect('/warehouse')->with('alert','data deleted Successfully.');
}

}
