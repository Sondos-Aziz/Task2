<?php

namespace App\Http\Controllers\Sponsor;

use App\City;
use App\Country;
use App\Governorate;
use App\Nationality;
use App\Neighborhood;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class sponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


        public function index()
    {
        $users = DB::table('users')->Paginate(3);

        return view('index',['users'=>$users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
//        $govs = Governorate::with('country')->get();
        $govs = Governorate::all();
        $cities = City::all();
        $neighs = Neighborhood::all();
        $nationalities = Nationality::all();
        $countries = Country::all();

        return view('sponsor.create' ,compact('users' ,'govs','cities','neighs','nationalities','countries'));
    }

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


        $user = new User();
        if($request->type ==='شخص'){
            $user->type =$request->type;
            $user->firstName= $request->firstNames;
            $user->secondName= $request->secondNames;
            $user->thirdName= $request->thirdNames;
            $user->fourthName= $request->fourthNames;
            $user->email =$request->emails;
            $user->governorate =$request->governorate;
            $user->city =$request->city;
            $user->neighborhood =$request->neighborhood;
            $user->mobile =$request->mobile;
            $user->nationality =$request->nationality;
            $user->address =$request->detailAddress;
            $user->countryOfResidence =$request->countryOfResidence;
            $user->definitionType =$request->definitionType;
            $user->phone1 =$request->phone;
            $user->identificationNum =$request->identificationNum;
            $user->password = $request->passwords;

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
         return redirect()->route('sponsor.index')->with('successMsg','sponsor successfully saved');

    }

    //get search view
    public function search(){
//        $users =DB::table('users')->Paginate(3);'users'=>$users,
        $govs = Governorate::all();
        $cities = City::all();
        $nationalities = Nationality::all();
        $countries = Country::all();
        $allUsers =DB::table('users')->Paginate(3);
        return view('sponsor.search',['allUsers'=>$allUsers ,'govs'=>$govs ,'cities'=>$cities ,'nationalities'=>$nationalities ,'countries'=>$countries]);
    }

    //post search
    public function doSearch(Request $request){
//        $users =DB::table('users')->where('type','=',$request->type)->Paginate(3);
        User::query()
            ->where('firstName', 'LIKE', "%$request->firstName%")
            ->orWhere('secondName', 'LIKE', "%$request->secondName%")
            ->orWhere('thirdName', 'LIKE', "%$request->thirdName%")
            ->orWhere('fourthName', 'LIKE', "%$request->fourthName%")
            ->orWhere('governorate', 'LIKE', "%$request->governorate%")
            ->orWhere('city', 'LIKE', "%$request->city%")
            ->orWhere('nationality', 'LIKE', "%$request->nationality%")
            ->orWhere('countryOfResidence', 'LIKE', "%$request->countryOfResidence%")
            ->orWhere('identificationNum', 'LIKE', "%$request->identificationNum%")
            ->orWhere('contactPerson', 'LIKE', "%$request->contactPerson%")
            ->get();

        return view('sponsor.search');

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
        return view('sponsor.edit',compact('user','countries'));
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
        return redirect()->route('sponsor.index')->with('successMsg','sponsor successfully saved');

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
        return redirect()->route('sponsor.index')->with('successMsg','item  deleted successfully' );
        $user->save();    }
}
