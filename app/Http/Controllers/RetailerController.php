<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Models\retailers;

class RetailerController extends Controller
{

    public function getAllRetailers(){
       
        $fetchedData = DB::select('select * from retailers');

      return view('retailers',['fetchedData'=>$fetchedData]);
    }




    public function saveRetailer(Request $req){
  $messages=
         [
             'email.unique'  =>   "The :attribute :input is taken. Please use another email",
         ];
         $rules = [
      
            'name' => 'required | max:255',
            'email' => 'required | max:255',
            'phone' => 'required',
            'address' => 'required',
            ];

        $validate =  Validator::make($req->all(),$rules,$messages);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate->messages())->withInput();
        }else{

            $retailers = new retailers;
                    $retailers->name = $req->input('name');
                    $retailers->email = $req->input('email');
                    $retailers->phone = $req->input('phone');
                    $retailers->address = $req->input('address');
                   
                    $retailers->save();
                   
                return redirect('/retailers')->with('alert','data submitted Successfully.');
            
        }

    }

     //*********************For update retailer Only******************************* */
     public function updateRetailer(Request $req, $id){
       
        $fetchedDatas =DB::select('select * from retailers where id = ?',[$id]);
                   
          return view('updateRetailer',['fetchedDatas'=> $fetchedDatas, 'id'=>$id]);
        }

        //*********************For update retailer save Only******************************* */
    public function updateRetailerSubmit(Request $req, $id){
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $address = $req->input('address');
        
DB::update('update retailers set name = ?,email = ?,phone = ?,address = ? where id = ?',[$name,$email,$phone,$address,$id]);     

return redirect('/retailers')->with('alert','data updated Successfully.');
}

//*********************For Delete retailers details ******************************* */
public function deleteRetailer(Request $req, $id){

    $retailers =DB::table('retailers') ->where('id', $id)->delete();                           


   return redirect('/retailers')->with('alert','data deleted Successfully.');
}

}
