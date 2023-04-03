<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use DB;
use App\Models\orders;
use App\Models\products;

class OrderController extends Controller
{
   
  
   
    public function save_data(Request $req){
        // $messages=
        //  [
        //      'customer_email.unique'  =>   "The :attribute :input is taken. Please use another emp_id",
        //  ];
        //  $rules = [
      
        //     'customer_name' => 'required | max:255',
        //     'customer_email' => 'required | max:255',
        //     'total_sales' => 'required',
        //     'shipping_charges' => 'required',
        //     'tax_percent' =>'required',
        //     'net_profit' => 'required',
        //     'amout_paid' => 'required ',
        //     'amount_status' => 'required | string | max:255',
        //     ];

        // $validate =  Validator::make($req->all(),$rules,$messages);
        // if($validate->fails()){
        //     return redirect()->back()->withErrors($validate->messages())->withInput();
        // }else{
                
                $data = array([
                    'customer_name' => $req->input('custname'),
                    'customer_email' => $req->input('custemail'),
                    'total_sales' => $req->input('totalsales'),
                    'shipping_charges' => $req->input('shippingcharges'),
                    'tax_percent' => $req->input('taxpercent'),
                    'net_total' => $req->input('nettotal'),
                    'amout_paid' => $req->input('amountpaid'),
                    'amount_status' => $req->input('amountstatus'),
                ]);
              
                $orders = new orders;
                $products = new products;
                    $orders->customer_name = $req->input('custname');
                    $orders->customer_email = $req->input('custemail');
                    $orders->order_status = $req->input('orderstatus');

                    $products->product_name = $req->input('product_name');
                    $products->product_quantity = $req->input('product_quantity');
                    $products->delivered_quantity = $req->input('delivered_quantity');
                    $products->selling_price = $req->input('selling_price');
                    $products->order_id = $req->input('custemail');

                    $orders->total_sales = $req->input('totalsales');
                    $orders->shipping_charges = $req->input('shippingcharges');
                    $orders->tax_percent = $req->input('taxpercent');
                    $orders->net_total = $req->input('nettotal');
                    $orders->amout_paid = $req->input('amoutpaid');
                    $orders->payment_status = $req->input('paymentstatus');
                   
                    $products->save();
                    $orders->save();
                return redirect('/all-orders')->with('alert','data submitted Successfully.');
            // }
          
    }

    public function getAlldata(){
        // $query = DB::table('orders as t1')->leftjoin('products as t2', 't2.order_id', '=', 't1.id')
        // $fetchedData = orders::join('products', 'orders.customer_email', '=', 'products.order_id')
              //  ->get(['orders.*', 'products.*']);    
        // $fetchedData = $query->select(['t1.*','t2.*'])->get();

        $fetchedData = DB::select('select * from orders');
      return view('orderManagement',['fetchedData'=>$fetchedData]);
    }

//*********************For pending orders ******************************* */
    public function getPendingdata(){
        
        // $fetchedData = orders::join('products', 'orders.customer_email', '=', 'products.order_id')
        //        ->get(['orders.*', 'products.*']);    
       
               $fetchedData = DB::select('select * from orders');
      return view('pendingOrders',['fetchedData'=>$fetchedData]);
    }


//*********************For returned orders ******************************* */
    public function getReturneddata(){
       
        // $fetchedData = orders::join('products', 'orders.customer_email', '=', 'products.order_id')
        //        ->get(['orders.*', 'products.*']);    
        $fetchedData = DB::select('select * from orders');
      return view('returnedOrders',['fetchedData'=>$fetchedData]);
    }

    //*********************For Sold orders ******************************* */
    public function getSolddata(){
       
        // $fetchedData = orders::join('products', 'orders.customer_email', '=', 'products.order_id')
        //        ->get(['orders.*', 'products.*']);    
        $fetchedData = DB::select('select * from orders');
      return view('soldOrders',['fetchedData'=>$fetchedData]);
    }

    //*********************For Canceled orders ******************************* */
    public function getCanceleddata(){
       
        // $fetchedData = orders::join('products', 'orders.customer_email', '=', 'products.order_id')
        //        ->get(['orders.*', 'products.*']);    
        $fetchedData = DB::select('select * from orders');
      return view('canceledOrders',['fetchedData'=>$fetchedData]);
    }


//*********************For getting order details ******************************* */
    public function getorderdetail(Request $req, $id){
        
            $orders = DB::select('select * from orders where id = ?',[$id]);
            
            $products = DB::select('select * from products');
    //    return $orders;
      return view('viewOrderDetails',['orders'=>$orders,'products'=>$products,'id'=>$id]);
    }


      //*********************For update order Status Only******************************* */
      public function updateStatusView(Request $req, $id){
        $fetchedDatas =DB::select('select * from orders where id = ?',[$id]);
                   
        $products = DB::select('select * from products');
          return view('updateOrder',['fetchedDatas'=> $fetchedDatas,'products'=>$products, 'id'=>$id]);
        }

    //*********************For update order Status Only******************************* */
    public function updateStatus(Request $req, $id){
                     $customer_name = $req->input('custname');
                     $customer_email = $req->input('custemail');
                     $total_sales = $req->input('totalsales');
                     $shipping_charges = $req->input('shippingcharges');
                     $tax_percent = $req->input('taxpercent');
                     $net_total = $req->input('nettotal');
                     $amount_paid = $req->input('amoutpaid');
                     $payment_status = $req->input('paymentstatus');
                     $order_status = $req->input('orderstatus');

                     $product_name = $req->input('product_name');
                    $product_quantity = $req->input('product_quantity');
                    $delivered_quantity = $req->input('delivered_quantity');
                    $selling_price = $req->input('selling_price');
                    $order_id = $req->input('custemail');
DB::update('update orders set customer_name = ?,customer_email = ?,total_sales = ?,shipping_charges = ?,tax_percent = ?,net_total = ?,amout_paid = ?,payment_status = ?, order_status = ? where id = ?',[$customer_name,$customer_email,$total_sales,$shipping_charges,$tax_percent,$net_total,$amount_paid,$payment_status,$order_status,$id]);     
 DB::update('update products set  product_name = ?,product_quantity = ?,delivered_quantity = ?,selling_price = ? where order_id = ?',[$product_name,$product_quantity,$delivered_quantity,$selling_price,$order_id]);
return redirect('/all-orders')->with('alert','data updated Successfully.');
}


 //*********************For Delete order details ******************************* */
 public function deleteOrder(Request $req, $id){

                $orders =DB::table('orders')
                    ->leftJoin('products','orders.customer_email', '=','products.order_id')
                    ->where('orders.id', $id); 
        DB::table('products')->where('id', $id)->delete();                           
        $orders->delete();

               return redirect('/all-orders')->with('alert','data deleted Successfully.');
}


}
