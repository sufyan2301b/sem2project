<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\reguser;

class mycontroller extends Controller
{
    //
    public function insertdata(Request $req){

        $table =new reguser;
        $table->name=$req->username;
        $table->adress=$req->useradress;
        $table->phonenumber=$req->userphone;
        $table->email=$req->useremail;
        $table->password=$req->userpassword;
        $table->dateofbirth=$req->userdob;
        $table->save();
        return redirect()->back()->with("successmessage","record has been inserted");
    }

    public function getdata()
    {
        $rec = reguser::get();
        return view("fetch",compact('rec'));

    }

    public function delrecord($id)
    {
        $specificuser = reguser::find($id);
        $specificuser->delete();
        return redirect('/fetch');
    }

    public function updrecord($id)
    {
        $specificuser = reguser::find($id);
        return view("update",compact('specificuser'));
    }

    public function update(Request $req)
    {
        $specificid= reguser::find($req->userid);
        $specificid->name=$req->username;
        $specificid->adress=$req->useradress;
        $specificid->phonenumber=$req->userphone;
        $specificid->email=$req->useremail;
        $specificid->password=$req->userpassword;
        $specificid->dateofbirth=$req->userdob;
        $specificid->save();
        return redirect('/fetch');
    }
    public function insertproduct(Request $input){
        // echo $input->username;
        $table = new product();
    
        $table->name = $input->name;
        $table->price = $input->price;
        $table->category = $input->product;
        $image=$input->file('image');
        $ext= rand().".".$image->getClientOriginalName();
        $image->move("Images/",$ext);
        $table->image=$ext;
        $table->save();
        return redirect()->back()->with("successmessage","Record has been inserted");
    }
}


