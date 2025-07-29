<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

use App\Traits\SettingTrait;




class UserManagementController extends Controller{

  use SettingTrait; // Import the trait


  /**
   * Redirect to user-management view.
   *
   */
  public function index(Request $request){
    // dd('UserManagement');
    $users1 = User::all();
    $userCount = $users1->count();
    $verified = User::whereNotNull('email_verified_at')->get()->count();
    $notVerified = User::whereNull('email_verified_at')->get()->count();
    $usersUnique = $users1->unique(['email']);
    $userDuplicates = $users1->diff($usersUnique)->count();



    // Total records without filtering
    $totalData = User::count();
    $totalFiltered = $totalData;

    // DataTables params
    $limit = $request->input('length', 10); // default fallback
    $start = $request->input('start', 0);
    $orderColumnIndex = $request->input('order.0.column');
    $order = $columns[$orderColumnIndex] ?? 'id';
    $dir = $request->input('order.0.dir', 'desc');

    $query = User::query();

    // Handle search
    if (!empty($request->input('search.value'))) {
        $search = $request->input('search.value');

        $query->where(function ($q) use ($search) {
            $q->where('id', 'LIKE', "%{$search}%")
              ->orWhere('name', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%");
        });

        $totalFiltered = $query->count();
    }

    // Pagination, Ordering, and Fetch



    $users = User::with([
        'userGender:gender_id,gender',
        'userStatus:id,status',
        'userRole:role_id,role_name,role',
    ])
    ->select('users.*')
    ->where('id', '>',0)
    ->offset(0)
    ->limit(10)
    ->get()
    ->map(function ($user) {
        $user->dp_name = getInitials($user->first_name, $user->last_name);
        $user->dp_name_first = getFirstLetter($user->first_name);

        $user->dob = sortDateFormate1($user->date_of_birth);

        $user->created_date_str = sortDateFormate1($user->created_at);
        $user->updated_date_str = sortDateFormate1($user->updated_at);
        return $user;
    });


    //dd($users);


    return view('admin.users.users', [
      'totalUser' => $userCount,
      'verified' => $verified,
      'notVerified' => $notVerified,
      'userDuplicates' => $userDuplicates,
      'draw' => intval($request->input('draw')),
      'recordsTotal' => intval($totalData),
      'recordsFiltered' => intval($totalFiltered),
      'data' => $users,
    ]);

    // Return DataTables-compatible JSON
   /* return response()->json([
        'draw' => intval($request->input('draw')),
        'recordsTotal' => intval($totalData),
        'recordsFiltered' => intval($totalFiltered),
        'data' => $data,
    ]);*/


    


    /*return view('admin.users.users', [
      'totalUser' => $userCount,
      'verified' => $verified,
      'notVerified' => $notVerified,
      'userDuplicates' => $userDuplicates,
    ]);*/
  }

  public function userData(){

    $users = User::with([
        'status:id,status',
        'role:id,name'
    ])
    ->select('users.*') // Must include 'status' and 'role' foreign keys
    ->where('id', '>', 100)
    ->offset(0)
    ->limit(10)
    ->get();



    print_r($users);

    echo "userData";
  }

  


  public function addUser(){
    $prefixes =  $this->getPrefixes();
    $genders =  $this->getGender();
    $status =  $this->getStatus();

     return view('admin.users.add-user', 
      [
        'prefixes'=>$prefixes,
        'genders'=>$genders,
        'status'=>$status
      ]);
  }

  public function addUserChild(){
    $prefixes =  $this->getPrefixes();
    $genders =  $this->getGender();
    $status =  $this->getStatus();

     return view('admin.users.add-user-child', 
      [
        'prefixes'=>$prefixes,
        'genders'=>$genders,
        'status'=>$status
      ]);
  }


  



  public function addUserPost(Request $request){

    $this->validator($request->all())->validate();



    $otp =  randomOTP();

    

    $userData = [
        'prefix' => $request->post('prefix'),
        'first_name' => $request->post('first_name'),
        'last_name' => $request->post('last_name'),
        'phone' => $request->post('phone'),
        'email' => $request->post('email'),
        'gender' => $request->post('gender'),
        'date_of_birth' => $request->post('date_of_birth'),
        'status' => $request->post('status'),
        'password' => $otp,
        
    ];


    $user = $this->createUser($userData);
    $this->updateUserId($user->id);

     return redirect()->back()
            ->withErrors([
            'otp_error' => ['Incorrect OTP. Please try again' .$otp ],
          ]);


    


    /*
    return redirect()->route('add-user');
     "_token" => "F2BnnvXBIl0BurEHsnriyxKAhqY6vScL2kE6Qi28"
      "first_name" => "dfds"
      "last_name" => "fdfd"
      "phone" => null
      "email" => null
      "gender" => "2"
      "date_of_birth" => null
      "status" => "2"

      */

  }



  protected function validator(array $data){

        $isPrimary = $data['isPrimary'];

        if($isPrimary==1){
            return Validator::make($data, [
              'first_name' => ['required', 'string', 'min:2', 'max:30'],
              'last_name' => ['required', 'string', 'min:2', 'max:30'],
              'gender' => ['required'],
              'status' => ['required'],
              'phone' => ['required','digits:10','unique:users'],
              'email' => ['nullable','string', 'email']
          ]);
        }else{
          return Validator::make($data, [
              'first_name' => ['required', 'string', 'min:2', 'max:30'],
              'last_name' => ['required', 'string', 'min:2', 'max:30'],
              'gender' => ['required'],
              'status' => ['required'],
              'phone' => ['nullable','digits:10'],
              'email' => ['nullable','string', 'email']
          ]);
        }

  }

  protected function createUser(array $data){

        return User::create([
            'is_primary' => 1,
            'prefix' => $data['prefix'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            /*'phone_verified_at' => now(), */
            'password' => Hash::make($data['password']),
            'steps' => 0,
            'role' => 1,
            'status' => $data['status']
        ]);
  }

  protected function updateUserId($id){
        $saveData = ["username" => $id];
        User::updateOrCreate(['id' => $id], $saveData);
  }





















  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index11(Request $request): JsonResponse
  {
    $columns = [
      1 => 'id',
      2 => 'name',
      3 => 'email',
      4 => 'email_verified_at',
    ];

    $totalData = User::count(); // Total records without filtering
    $totalFiltered = $totalData;

      $limit = $request->input('length');
      $start = $request->input('start');
      $order = $columns[$request->input('order.0.column')] ?? 'id';
      $dir = $request->input('order.0.dir') ?? 'desc';

      $query = User::query();

      // Search handling
    if (!empty($request->input('search.value'))) {
      $search = $request->input('search.value');

      $query->where(function ($q) use ($search) {
        $q->where('id', 'LIKE', "%{$search}%")
          ->orWhere('name', 'LIKE', "%{$search}%")
          ->orWhere('email', 'LIKE', "%{$search}%");
      });

      $totalFiltered = $query->count();
    }

    $users = $query->offset($start)
      ->limit($limit)
      ->orderBy($order, $dir)
      ->get();

    $data = [];
    $ids = $start;

    foreach ($users as $user) {
      $data[] = [
        'id' => $user->id,
        'fake_id' => ++$ids,
        'name' => $user->name,
        'email' => $user->email,
        'email_verified_at' => $user->email_verified_at,
      ];
    }

    // ✅ Always return full DataTables structure, even if no results
   /* return response()->json([
      'draw' => intval($request->input('draw')),
      'recordsTotal' => intval($totalData),
      'recordsFiltered' => intval($totalFiltered),
      'data' => $data,
    ]);*/
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $userID = $request->id;

    if ($userID) {
      // update the value
      $users = User::updateOrCreate(
        ['id' => $userID],
        ['name' => $request->name, 'email' => $request->email]
      );

      // user updated
      return response()->json('Updated');
    } else {
      // create new one if email is unique
      $userEmail = User::where('email', $request->email)->first();

      if (empty($userEmail)) {
        $users = User::updateOrCreate(
          ['id' => $userID],
          ['name' => $request->name, 'email' => $request->email, 'password' => bcrypt(Str::random(10))]
        );

        // user created
        return response()->json('Created');
      } else {
        // user already exist
        return response()->json(['message' => "already exits"], 422);
      }
    }
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
  public function edit($id): JsonResponse
  {
    $user = User::findOrFail($id);
    return response()->json($user);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {}

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $users = User::where('id', $id)->delete();
  }
}