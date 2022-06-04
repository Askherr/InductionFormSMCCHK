<?php

namespace App\Http\Controllers;

use App\Models\PostUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Builder\Identity;

// use DB;

class DashboardController extends Controller
{
    public function index(){

        return view('user.registeruser');
    }

    public function postUser(Request $request){
        // ddd($request->all());
        $validatedData = $request->validate([
            'CompanyName'=> 'nullable',
            'CompanyPosition' => 'nullable',
            'nameUser' => 'required',
            'birthPlace'=> 'required',
            'birthDate'=> 'required','date',
            'BloodType'=> 'nullable',
            'gender'=> 'required',
            'Address'=> 'nullable',
            'phoneNumber' => 'required',
            'emergencyphoneNumber'=> 'required',
            'email' => 'nullable',
            // FIle Required
            'identity'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'photo'=>'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'antigen'=>'required|file|max:2048',
            'vaccine'=>'required|file|max:2048',
            'health'=>'required|file|max:2048',
            'visa'=>'nullable|file|max:2048',
            'operatorLicense'=>'nullable|file|max:2048',
            'certificate'=>'nullable|file|max:2048',
            'riwayat_penyakit'=>'nullable',
            'schedule'=>'required'       
        ]);

        // Store File Upload to Directory Public

        if($request->file('identity')){
            $validatedData['identity'] = $request->file('identity')->store('identity-images');
        }
        if($request->file('photo')){
            $validatedData['photo'] = $request->file('photo')->store('photo-images');
        }
        if($request->file('antigen')){
            $validatedData['antigen'] = $request->file('antigen')->store('antigen');
        }
        if($request->file('vaccine')){
            $validatedData['vaccine'] = $request->file('vaccine')->store('vaccine');
        }
        if($request->file('health')){
            $validatedData['health'] = $request->file('health')->store('health');
        }
        if($request->file('visa')){
            $validatedData['visa'] = $request->file('visa')->store('visa');
        }
        if($request->file('operatorLicense')){
            $validatedData['operatorLicense'] = $request->file('operatorLicense')->store('operatorLicense');
        }
        if($request->file('certificate')){
            $validatedData['certificate'] = $request->file('certificate')->store('certificate');
        }
        
       PostUser::create($validatedData);
    //    tandai jika sudah berhasil
    // return redirect('/login')->with('success','Registrasi Berhasil, Silahkan Login');

       return redirect('/dashboard')->with('success','Data Berhasil Di Input!');
    }
}
