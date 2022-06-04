<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostUser;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function graph(){
        $data = PostUser::select(DB::raw('count(*) as total, created_at'))
            ->groupBy(DB::raw('DATE(created_at)'))
            ->orderBy('created_at', 'desc')
            ->get();


        $labels = [];
        $data_set = [];
        foreach ($data as $key => $value) {
            $labels[] = $value->created_at;
            $data_set[] = $value->total;
        }

        $data = [
            'labels' => $labels,
            'dataset' => $data_set
        ];
        // dd($data);

        return view('grafik', compact('data'));
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $data_user=PostUser::where('CompanyPosition','LIKE',"%".$search."%")
        ->orWhere('CompanyName','LIKE',"%".$search."%")
        ->orWhere('gender','LIKE',"%".$search."%")
        ->Simplepaginate(5);

        $data_user->appends($request->all());

        return view('data-post', compact('data_user','search'));
    }

    public function view($id)
    {   
        $data_user=PostUser::find($id);
        return view('view-post', compact('data_user'));
        // $data =  DB::table('post_user')->where('id', $id)->get();
        // return view('view',['data' => $data]);
    }
    public function detail($id)
    {   
        
        $data =  DB::table('post_user')->where('id', $id)->get();
        return view('detail',['data' => $data]);
    }

    public function edit($id)
    {
        // Mengambil data user berdasarkan ID 
        $data =  DB::table('post_user')->where('id', $id)->get();
        // Passing data
        return view('edit',['data' => $data]);

    }
    public function update(Request $request)
    {
        DB::table('post_user')->where('id',$request->id)->update([
            'CompanyName' => $request->CompanyName,
            'CompanyPosition' => $request->CompanyPosition,
            'nameUser' => $request->nameUser,
            'birthPlace' => $request->birthPlace,
            'birthDate' => $request->birthDate,
            'BloodType' => $request->BloodType,
            'gender' => $request->gender,
            'Address' => $request->Address,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'emergencyphoneNumber' => $request->emergencyphoneNumber,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            'schedule' => $request->schedule
        ]);
        return redirect('admin/data-post')->with('success','Edit Berhasil');;
    }


    public function destroy($id)
    {
        // Melihat table Post_user kemudian mendelete index dengan id
        $user = PostUser::find($id);
        $destination = '/storage/'.$user->photo;
        
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $user->delete();
        return redirect()->back();
    }
}
