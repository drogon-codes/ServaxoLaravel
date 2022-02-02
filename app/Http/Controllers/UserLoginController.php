<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\user1;
use Mail;
use App\Http\Requests;

class UserLoginController extends Controller
{
    public function Loginpage()
    {
        return view('Users.Login.Login');
    }
     public function Registerpage()
    {
        return view('Users.Login.Register');
    }
    public function EmailVerify()
    {
        $otp2 = rand(000000,999999);
        return view('/Users/Login/EmailVerify',compact('otp2','name'));

    }
    public function logout()
    {
        Session::flush();
        return redirect('/Users/Home')->with("success","Successfully Logout");
    }
     public function registeruser(Request $request)
    {
        $otp = rand(000000,999999);
        $fname=$request->txtfirstname;
        $lname=$request->txtlastname;
        $name="$fname $lname";
        $email = $request->txtemail;
        
            $obj = new user1;
            $obj->name = $name;
            $obj->contact = $request->txtcontactno;
            $obj->email = $request->txtemail;
            $obj->password = $request->txtpassword;
            $obj->otp=$otp;
            $obj->save();
            Session::put('user',$obj->user_id);
              $data1 = [
                'otp' => $otp,
                'name' => $name
              ];   

            $data = array('email'=>$request->txtemail,'name'=>$request->txtfirstname, 'otp'=>$otp);
             Mail::send('/Users/Login/otpmail', $data, function($message) use($email,$name,$otp) {
             $message->to($email,$name)->subject
             ('One Time Password of register into SERVAXO is '.$otp);
             $message->from('kansaradeep1820@gmail.com','Team Servaxo');
             });

            return view('/Users/Login/EmailVerify',compact('otp','name'));

        // echo $otp1;
        // echo "\n";
        // echo $otp2;
    }
    //  //insert
    //  $obj = new user1;
    //  $obj->name = $name;
    //  $obj->contact = $request->txtcontactno;
    //  $obj->email = $request->txtemail;
    //  $obj->password = $request->txtpassword;
    //  // $obj->otp = $request->txtotp;
    //  $obj->isverify = $request->txtisverify;
    //  $obj->save();
    //  //insert
    //  return redirect('/Users/Login')->with("success","User Registered Successfully...!"."   "."Please Login To Continue...");
    //     // echo $otp1;
    //     // echo $otp2;
    // }
    public function useremail(Request $request)
     {
        $uid = Session::get('user');
        $otp1=$request->txtotp;
        $otp2=$request->txtotp2;
        // $obj->city_name = $cityname;
        // $obj->city_code = $citycode;
        // $obj->state_id = $stateid;
        // $obj->save();

        if($otp1==$otp2)
        {
            $obj = user1::where("user_id","=",$uid)->first();
            $obj->otp = $otp2;
            return redirect('/Users/Login')->with("success","User Registered Successfully...!"."   "."Please Login To Continue...");
        }
        else
        {   

            return redirect('/Users/Login/EmailVerify',compact('otp2'))->with("message","Inorrect OTP");
        }
        
      //echo $data['email'];
    }
     public function checkuserlogin(Request $request)
    {
        $email=$request->txtemail;
        $password=$request->txtpassword;
        $data = user1::where("email","=",$email)->where("password","=",$password)->get();
        $count = $data->count();
        if($count<=0)
        {
            
            return redirect('/Users/Login')->with("message","Username or password not found");
        }
        else
        {
            foreach($data as $row)
            {
                Session::put('id', $row->user_id);
                Session::put('name', $row->name);
                Session::put('email', $row->email);
                Session::put('contact', $row->contact);
                //echo $row->name;
            }
             return redirect('/Users/Home')->with("success","Login Successfully...");
        }
    }
    public function show1(Request $request)
   {
    $name=$request->txtname;
    $otp2 = rand(000000,999999);
    return view('/Users/Login/otpmail',compact('otp2','name'));
   }

   public function forgetpass()
   {
        return view('Users.Login.forgotpassword');
   }

   public function checkOTP(Request $request)
   {
        $uid = Session::get('user');
        $otp1=$request->txtotp;
        $email = Session::get('fpemail');
        // $obj->city_name = $cityname;
        // $obj->city_code = $citycode;
        // $obj->state_id = $stateid;
        // $obj->save();
        $obj = user1::where("email","=",$email)->first();
        $otp = $obj->otp;
        $obj->save();
        if($otp==$otp1)
        {
            return view('Users.Login.conformpass');
        }
        else
        {   

            return redirect('/Users/Login/FPEmailVerify')->with("message","Inorrect OTP");
        }
        
   }

    public function userverifyemail(Request $request)
     {
        $otp = rand(000000,999999);
        $uid = Session::get('user');
        $email=$request->txtemail;
        $obj = user1::where("email",'=',$email)->get();
        $count = $obj->count();
        if($count<=0)
        {
            
            return redirect('/Users/Login/forgotpassword')->with("message","Email Address not found..");

        }
        else
        {   
            Session::put('fpemail',$email);
            $obj = user1::where("email","=",$email)->first();
            $obj->otp = $otp;
            $obj->save();
            $data1 = [
                'otp' => $otp,
                'name' => $email
              ];   

            $data = array('email'=>$request->txtemail,'name'=>$email, 'otp'=>$otp);
             Mail::send('/Users/Login/otpmail', $data, function($message) use($email,$otp) {
             $message->to($email)->subject
             ('One Time Password of register into SERVAXO is '.$otp);
             $message->from('kansaradeep1820@gmail.com','Team Servaxo');
             });

            return view('Users.Login.FPEmailVerify',compact('otp'));

        }
    }
    public function forpassemail()
   {
        return view('Users.Login.FPEmailVerify');
   }
    public function confpasswd()
   {
        return view('Users.Login.conformpass');
   }
   public function passwordCheck(Request $request)
   {
        $pass = $request->txtpassword;
        $confpass = $request->txtconfirmpassword;
        $email = Session::get('fpemail');
        if(strcmp($pass,$confpass)==0)
        {
            $obj = user1::where("email","=",$email)->first();
            $obj->password = $confpass;
            $obj->save();
            return redirect('/Users/Login')->with("success","Password Updated. Kindly Login with your updated credentials...");

        }
        else
        {
            return redirect('/Users/Login/conformpass')->with('message','New Password and Confirm Passsword does not match..');
           
            
        }
        
   }

   
}
