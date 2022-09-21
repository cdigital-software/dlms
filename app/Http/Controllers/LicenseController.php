<?php

namespace App\Http\Controllers;

use App\Models\License;
use DB;
use App\Http\Requests\StoreLicenseRequest;
use App\Http\Requests\UpdateLicenseRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Models\license_type;
use App\Http\Requests;
class LicenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$new_licenses = License::query()->where('license_type', '=', 'New')->count();
        //$renew_licenses = License::query()->where('license_type', '=', 'ReNew')->count();
        //$upgradation_licenses = License::query()->where('license_type', '=', 'Upgradation')->count();
        //$total_licenses = License::query()->count();
        $license_types=DB::table('licenses')
            ->select('license_type', DB::raw('count(*) as total'))
            ->groupBy('license_type')
            ->get()
            ->toArray();
        // dd($license_types);
        //$count = $license_types->count();

        //$license_type = license_type::query()->all();
        return view('dash', ['data'=>$license_types]);
    }

    public function data()
    {
        try {
            return Datatables::of(License::query())

                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn= '<a href="update/'.$row->id.'" onclick="return confirm(\'Are you sure to Update\')" class="btn btn-sm">Update</a>';
                    $btn .='<a href="delete/'.$row->id.'" onclick="return confirm(\'Are you sure to delete\')" class="btn btn-sm btn-del">Delete </a>';


                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    public function type()
    {
        try {
            return Datatables::of(license_type::query())->make(true);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLicenseRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicenseRequest $request)
    {

        // dd($request->all());
        $response = License::create($request->all());
        return redirect('/dash')->with('message', 'License Record Added');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\License $license
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $license_type = DB::select("select * from license_type");
        return view('create',["license_type"=>$license_type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\License $license
     * @return \Illuminate\Http\Response
     */
    public function show_edit(License $license)
    {
        $license_type = DB::select("select * from license_type");
        return view('update',["license_type"=>$license_type]);
    }
    public function edit($id)
    {
        $license_type = DB::select("select * from license_type");
        $licenses = DB::select("select * from licenses where id = ?",[$id]);
        return view('update',["licenses"=>$licenses,"license_type"=>$license_type]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenseRequest;
     * @param  \App\Http\Requests;
     * @param  \App\Models\License $license
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicenseRequest $request, $id)
    {
        // dd($request->all());
        //echo "alert('Are you sure you want to Update this record??');";
        $name = $request->input('name');
        $father_name = $request->input('father_name');
        $license_no  = $request->input('license_no');
        $cnic = $request->input('cnic');
        $license_type = $request->input('license_type');
        //dd($license_type);
        $issue_date = $request->input('issue_date');
        $exp_date = $request->input('exp_date');
        DB::update('update licenses set name = ?,father_name=?,license_no=?,cnic=?,license_type=?,issue_date=?,exp_date=? where id = ?',
            [$name,$father_name,$license_no,$cnic,$license_type,$issue_date,$exp_date,$id]);
        //echo alert("Record updated successfully.");
        return redirect()->route('dash')->with('message','Record Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\License $license
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo "alert('Are you sure you want to delete this record??');";
        // echo "<script>";
        // echo "alert('Are you sure you want to delete this record??');";
        // echo "</script>";
        License::find($id)->delete();
        //      return 4;
        return redirect()->route('dash')->with('message','Record deleted successfully');
        //>with('success','Record deleted successfully');
    }
}
