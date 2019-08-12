<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Governorate;
use App\Nationality;
use App\Neighborhood;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $users =DB::table('users')->Paginate(3);
        $users = User::all();
        $govs = Governorate::all();
        $cities = City::all();
        $nationalities = Nationality::all();
        $countries = Country::all();
        $neighs = Neighborhood::all();

        return response()->json([
            'users'=>$users,
            'govs'=>$govs,
            'cities'=>$cities,
            'nationalities'=>$nationalities,
            'countries'=>$countries,
            'neighs'=>$neighs,

        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        $users = User::all();
////        $govs = Governorate::with('country')->get();
//        $govs = Governorate::all();
//        $cities = City::all();
//        $neighs = Neighborhood::all();
//        $nationalities = Nationality::all();
//        $countries = Country::all();
//
//        return response()->json([
//            'users'=>$users,
//            'govs'=>$govs,
//            'cities'=>$cities,
//            'neighs'=>$neighs,
//            'nationalities'=>$nationalities,
//            'countries'=>$countries
//
//        ],200);
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
////dd($request->all());
//        $this->validate($request,[
////            'firstName'=>'required',
////            'secondName'=>'required',
////            'thirdName'=>'required',
////            'fourthName'=>'required',
////            'email'=>'required|email',
//////            'governorate'=>'required',
////            'city'=>'required',
////            'neighborhood'=>'required',
////            'mobile'=>'required',
////            'nationality'=>'required',
//            'countryOfResidence'=>'required',
////            'definitionType'=>'required',
////            'phone1' =>['required','integer', 'min:0'],
////            'phone2' =>['required','integer', 'min:0'],
////            'identificationNum' =>['required','integer', 'min:0'],
////            'address' => ['required', 'string'],
//            'type' =>'required',
////            'contactPerson' =>'required',
//            'password' => ['required','string','min:6',],
//        ]);

//dd('create');
        $user = new User();
        if($request->type ==='شخص'){   //1/2/3/4/pass/address/phone1/country
            $user->type =$request->type;
            $user->firstName= $request->firstName;
            $user->secondName= $request->secondName;
            $user->thirdName= $request->thirdName;
            $user->fourthName= $request->fourthName;
            $user->email =$request->email;
            $user->governorate =$request->governorate;
            $user->city =$request->city;
            $user->neighborhood =$request->neighborhood;
            $user->mobile =$request->mobile;
            $user->nationality =$request->nationality;
            $user->address =$request->address;
            $user->countryOfResidence =$request->countryOfResidence;
            $user->definitionType =$request->definitionType;
            $user->phone1 =$request->phone1;
            $user->identificationNum =$request->identificationNum;
            $user->password = $request->password;

        }elseif ($request->type =='مؤسسة') {
            $user->type =$request->type;
            $user->firstName = $request->firstName;
            $user->secondName = $request->secondName;
            $user->thirdName = $request->thirdName;
            $user->fourthName = $request->fourthName;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->countryOfResidence = $request->countryOfResidence;
            $user->phone1 = $request->phone1;
            $user->phone2 = $request->phone2;
            $user->contactPerson = $request->contactPerson;
            $user->password = $request->password;
        }
        $user->save();

        return response()->json([


        ],200);
//         return redirect()->route('sponsor.index')->with('successMsg','sponsor successfully saved');

    }

    //get search view
//    public function search(){
//
////        $users =DB::table('users')->Paginate(3);'users'=>$users,
//        $govs = Governorate::all();
//        $cities = City::all();
//        $nationalities = Nationality::all();
//        $countries = Country::all();
//        $users =User::all();
//        return response()->json([
//            'users'=>$users,
//            'govs'=>$govs,
//            'cities'=>$cities,
//            'nationalities'=>$nationalities,
//            'countries'=>$countries
//
//        ],200);
//    }

    //post search
    public function doSearch(Request $request){
        $allUsers=new User();
        if($request->type =='شخص') {
            if ( isset($request->firstName)) {
                $allUsers = $allUsers->where('firstName', 'LIKE', '%'.$request->firstName.'%')->where('type','LIKE','%'.$request->type.'%');

            } if (isset($request->secondName)) {
                $allUsers = $allUsers->where('secondName', 'LIKE', '%'.$request->secondName.'%')->where('type','LIKE','%'.$request->type.'%');

            } if (isset($request->thirdName )) {
                $allUsers = $allUsers->where('thirdName', 'LIKE', '%'.$request->thirdName.'%')->where('type','LIKE','%'.$request->type.'%');

            }elseif (isset($request->fourthName)) {
                $allUsers = $allUsers->where('fourthName', 'LIKE', '%'.$request->fourthName.'%')->where('type','LIKE','%'.$request->type.'%');

            }elseif (isset($request->governorate)) {
                $allUsers = $allUsers->where('governorate', 'LIKE', '%'.$request->governorate.'%')->where('type','LIKE','%'.$request->type.'%');

            }elseif (isset($request->city )) {
                $allUsers = $allUsers->where('city', 'LIKE', '%'.$request->city.'%')->where('type','LIKE','%'.$request->type.'%');

            }elseif (isset($request->nationality )) {
                $allUsers = $allUsers->where('nationality', 'LIKE', '%'.$request->nationality.'%')->where('type','LIKE','%'.$request->type.'%');

            }elseif(isset($request->countryOfResidence )) {
                $allUsers = $allUsers->where('countryOfResidence', 'LIKE', '%'.$request->countryOfResidence.'%')->where('type','LIKE','%'.$request->type.'%');

            }elseif(isset($request->identificationNum)) {
                $allUsers = $allUsers->where('identificationNum', 'LIKE', '%'.$request->identificationNum.'%')->where('type','LIKE','%'.$request->type.'%');
            }

        }elseif ($request->type =='مؤسسة') {
            if (isset($request->firstName)) {
                $allUsers = $allUsers->where('firstName', 'LIKE', '%' . $request->firstName .'%')->where('type','LIKE','%'.$request->type.'%');

            }
            if (isset($request->secondName)) {
                $allUsers = $allUsers->where('secondName', 'LIKE', '%' . $request->secondName .'%')->where('type','LIKE','%'.$request->type.'%');

            }
            if (isset($request->thirdName)) {
                $allUsers = $allUsers->where('thirdName', 'LIKE', '%' . $request->thirdName . '%')->where('type','LIKE','%'.$request->type.'%');

            } elseif (isset($request->fourthName)) {
                $allUsers = $allUsers->where('fourthName', 'LIKE', '%'.$request->fourthName.'%')->where('type','LIKE','%'.$request->type.'%');

            } elseif (isset($request->countryOfResidence)) {
                $allUsers = $allUsers->where('countryOfResidence', 'LIKE', '%'.$request->countryOfResidence.'%')->where('type','LIKE','%'.$request->type.'%');

            } elseif (isset($request->contactPerson)) {
                $allUsers = $allUsers->where('contactPerson', 'LIKE', '%'.$request->contactPerson.'%')->where('type','LIKE','%'.$request->type.'%');

            } else{
                return response()->json([
                    'msg' =>'أنت تحتاج إلى الاختيار أولا شخصي أم مؤسسة!!!'
                ],200);
            }


        }$allUsers = $allUsers->get();
        return response()->json([
            'users'=>$allUsers,

        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $countries = Country::all();
//        return view('sponsor.edit',compact('user','countries'));
        return response()->json([
            'user'=>$user,
            'countries'=>$countries

        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user =User::find($id);
        $user->firstName = $request->firstName;
        $user->secondName = $request->secondName;
        $user->thirdName = $request->thirdName;
        $user->fourthName = $request->fourthName;
        $user->address = $request->address;
        $user->countryOfResidence = $request->countryOfResidence;
        $user->phone1 = $request->phone1;

        $user->save();
//        return redirect()->route('sponsor.index')->with('successMsg','sponsor successfully saved');
        return response()->json([
            'user'=>$user,

        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'users'=>$user,

        ],200);
//        return redirect()->route('sponsor.index')->with('successMsg','item  deleted successfully' );
        $user->save();

    }
}
