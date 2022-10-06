<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BecomeDealer;
use App\Models\ArchitectDesigner;
use App\Models\BecomeAssociate;
use App\Models\ContactUs;
use App\Models\Career;
use App\Models\Setting;
use App\Helpers\EmailHelper;

class FormController extends Controller
{
    public function becomeDealerForm() {
        return view('front.forms.become-a-dealer');
    }
    public function becomeDealer(Request $request) {
        
        $this->validate($request,[
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'phone'=>'required|numeric|digits:10',
            'state'=>'required|max:50',
            'city'=>'required|max:50',
            'address'=>'max:500',
            'message'=>'max:1000',
        ]);

        BecomeDealer::create([
            'first_name'=> $request->first_name,
            'last_name' => $request->last_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'state'     => $request->state,
            'city'      => $request->city,
            'address'   => $request->address,
            'message'   => $request->message,
        ]);
        
        return redirect()->back()->with('success',__('Thank you for submit your details, we will get back to you shortly.'));
    }

    public function architectDesignerConnectForm() {
        return view('front.forms.architect-designer-connect');
    }
    public function architectDesignerConnect(Request $request) {
        $this->validate($request,[
            'name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'state'=>'required|max:50',
            'city'=>'required|max:50',
            'design_plans'=>'required|max:50',
        ]);

        ArchitectDesigner::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'state'=> $request->state,
            'city'=> $request->city,
            'design_plans'=> $request->design_plans
        ]);
        
        return redirect()->back()->with('success',__('Thank you for submit your details, we will get back to you shortly.'));
    }

    public function becomeAssociateForm() {
        return view('front.forms.become-a-associate');
    }
    public function becomeAssociate(Request $request) {
        
        $this->validate($request,[
            'first_name'=>'required|max:50',
            'last_name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'phone'=>'required|numeric|digits:10',
            'state'=>'required|max:50',
            'city'=>'required|max:50',
            'i_am_a' => 'required|max:50',
        ]);

        BecomeAssociate::create([
            'first_name'=> $request->first_name,
            'last_name' => $request->last_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'state'     => $request->state,
            'city'      => $request->city,
            'i_am_a'    => $request->i_am_a,
        ]);
        
        return redirect()->back()->with('success',__('Thank you for submit your details, we will get back to you shortly.'));
    }

    public function contactForm()
    {
        return view('front.forms.contact-us');
    }

    public function contactSave(Request $request) {
        
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'phone' => 'required|max:50',
            'message' => 'max:1000',
        ]);

        ContactUs::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'message'   => $request->message,
        ]);

        // return redirect()->back()->with('success',__('Thank you for contacting with us, we will get back to you shortly.'));
        // Email alert
        $input = $request->all();

        $setting = Setting::first();
        $name  = $input['name'];
        $subject = "Email From ".$name;
        $to = $setting->contact_email;
        $phone = $request->phone;
        $from = $request->email;
        $msg = "Name: ".$name."<br/>Email: ".$from."<br/>Phone: ".$phone."<br/>Message: ".$request->message;

        $emailData = [
            'to' => $to,
            'subject' => $subject,
            'body' => $msg,
        ];

        $email = new EmailHelper();
        $email->sendCustomMail($emailData);

        return redirect()->back()->with('success',__('Thank you for contacting with us, we will get back to you shortly.'));
    }

    public function careerForm()
    {
        return view('front.forms.career');
    }

    public function careerSave(Request $request) {
        
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'mobile' => 'required|max:50',
            'dob' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'apply_for' => 'required',
            'highest_education' => 'required',
            'total_experince' => 'required',
            'prefered_location' => 'required',
            'current_designation' => 'required',
            'current_employer' => 'required',
            'current_annual_ctc' => 'required',
            'resume' => 'required|max:2048|mimes:pdf,doc,docx',
        ]);

        $filename = time().'_'.substr($request->file('resume')->getClientOriginalName(), -50);  

        $request->file('resume')->move('assets/resumes',$filename);
        $resume = 'assets/resumes/'.$filename;

        Career::create([
            'name'                      =>  $request->name,
            'email'                     =>  $request->email,
            'phone'                     =>  $request->mobile,
            'dob'                       =>  $request->dob,
            'gender'                    =>  $request->gender,
            'country'                   =>  $request->country,
            'state'                     =>  $request->state,
            'city'                      =>  $request->city,
            'apply_for'                 =>  $request->apply_for,
            'highest_education'         =>  $request->highest_education,
            'total_experince'           =>  $request->total_experince,
            'prefered_location'         =>  $request->prefered_location,
            'current_designation'       =>  $request->current_designation,
            'current_employer'          =>  $request->current_employer,
            'current_annual_ctc'        =>  $request->current_annual_ctc,
            'resume'                    =>  $resume,
        ]);

        return redirect()->back()->with('success',__('Thank you for contacting with us, we will get back to you shortly.'));
    }
}