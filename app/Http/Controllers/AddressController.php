<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\address;
use DB;
use Session;
use Redirect;
use View;
use compact;
use Exception;

class AddressController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     
    }

    public function index()
    {
        if(session()->has('uid'))
        {
            $cid= Session::get('uid');
            $aid= 2;
            $data = session()->all();
            // print_r($data);
            // die;
            $alladdress = DB::table('address')
            ->where('aid','=',$aid)
            ->where('cid','=',$cid)
            ->where('status','=','A')
            ->where('default_add','=','N')
            ->select('*')
            ->get();
            $defaultaddress = DB::table('address')
            ->where('aid','=',$aid)
            ->where('cid','=',$cid)
            ->where('status','=','A')
            ->where('default_add','=','Y')
            ->select('*')
            ->get();
            $cot = count($alladdress);
            // echo"<pre>";
            // print_r($alladdress);
            // echo"</pre>";
            // print_r($cot);
            // die;
            return View::make('addAddress',compact('alladdress','defaultaddress'));
        }
        else{

            return View::make('login');
        }
    }

    public function save_address(Request $req)
    {	
        
        $newaddress = new address;
        $newaddress->aid =  '2';
        $newaddress->cid = Session::get('uid');
        $newaddress->name = $_POST['name'];
        $newaddress->add_details = $_POST['address'];
        $newaddress->landmark = $_POST['landmark'];
        $newaddress->state = $_POST['state'];
        $newaddress->city = $_POST['city'];
        $newaddress->pincode = $_POST['pin'];
        $newaddress->phone_no = $_POST['mobile'];
        $newaddress->phone_no = $_POST['addtype'];
        $isChecked = $req->has('default');
        if($req->has('default')) {
            $newaddress->default_add = 'Y';
       }
       else {
            $newaddress->default_add = 'N';
       }
       echo"<pre>";
       print_r($newaddress);
       echo"</pre>";
       // print_r($cot);
       die;
        $newaddress->save();
         
      	Session::flash('message', 'This is a message!'); 
      	return redirect()->back()->with('message','New Address registered Successfully!!');
      
    }         
    
    public function remove_address()
    {
        $id = $_POST['id'];
        $delete=address::find($id);
        $delete->delete();
         
        if($delete) {
            $msg = "Successfully Deleted";
            return $msg;
        }
        else {
            $msg ="not deleted";
        }
    }

    public function default_address(Request $req)
    {
        if(session()->has('uid'))
        {
            $cid= Session::get('uid');
            $aid= 2;
            $data = session()->all();
            // print_r($data);
            // die;
            $result=address::where([['aid','=',$aid],['status','=','A'],['cid','=',$cid],['id','!=',$req->id]])
            ->update(array('default_add'=>'N'));
            $updatedefaultadd = address::where('id', $req->id)
            			->update(['default_add' => "Y"]);
            return redirect('addAddress');
            echo"<pre>";
            print_r($updatedefaultadd);
            echo"</pre>";
            // print_r($cot);
            die;
        }
        else{

            return View::make('login');
        }
    }



}
