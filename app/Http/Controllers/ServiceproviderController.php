<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase;
use Kreait\Firebase\Database;
use Google\Cloud\Firestore\FirestoreClient;
use Kreait\Firebase\Configuration;


class ServiceproviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/karigarfyp-firebase-adminsdk-2zra3-c909476c1f.json');
          $firebase = (new Factory)->withServiceAccount($serviceAccount)->withDatabaseUri('https://karigarfyp.firebaseio.com/')->create();
          $database = $firebase->getDatabase();


          $reference = $database->getReference('serviceprovider');
          $data = $reference->getValue();

           return view('sppages.show_sp',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sppages.add_sp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

      //return $request;

      $this->validate($request,[
      // 'name '=> 'required',
      'phon_number' =>'required',
      'cnic' => 'required',
      'email' => 'required',
      // 'conferm_password' => 'required',
      'password' => 'required'

    ]);

      $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/karigarfyp-firebase-adminsdk-2zra3-c909476c1f.json');
      $firebase = (new Factory)->withServiceAccount($serviceAccount)->withDatabaseUri('https://karigarfyp.firebaseio.com/')->create();
      $database = $firebase->getDatabase();
      $auth = $firebase->getAuth();

      $userProperties = [
          'email' => $request->input('email'),
          'password' => $request->input('password'),
      ];

      //yahan try catch lgna ha
      $createdUser = $auth->createUser($userProperties);
      $database->getReference('serviceprovider/'.$createdUser->uid)
      ->set(['name' => $request->input('name'),
      'phone' => $request->input('phon_number'),
      'eamil' => $request->input('email'),
      'cnic' => $request->input('cnic'),
      'lan' => '',
      'lon' => '']);

      //print_r($createdUser->uid);
      return redirect('/serviceprovider');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
