<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase;
use Kreait\Firebase\Database;
use Google\Cloud\Firestore\FirestoreClient;
use Kreait\Firebase\Configuration;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //
      // var $firebaseConfig = {
      //   apiKey: "api-key",
      //   authDomain: "project-id.firebaseapp.com",
      //   databaseURL: "https://project-id.firebaseio.com",
      //   projectId: "project-id",
      //   storageBucket: "project-id.appspot.com",
      //   messagingSenderId: "sender-id",
      //   appID: "app-id",
      // };
      //
      // $firebase.auth().createUserWithEmailAndPassword("office@gamil.com", "123456").catch(function(error) {
      //   Handle Errors here.
      //   var errorCode = error.code;
      //   var errorMessage = error.message;
      //   ...
      // });

      // $firebaseConfig = {
      //   apiKey: "AIzaSyDHnpWBQQosYTAv5Y3MhpiQDh9Wc223Lis",
      //   authDomain: "karigarfyp.firebaseapp.com",
      //   databaseURL: "https://karigarfyp.firebaseio.com",
      //   projectId: "karigarfyp",
      //   storageBucket: "karigarfyp.appspot.com",
      //   messagingSenderId: "76314532764",
      //   appId: "1:76314532764:web:053e5477350a8046"
      // };
      // $firebase.initializeApp($firebaseConfig);

      // $firebase.auth().createUserWithEmailAndPassword("office@gamil.com", "123456").then(function(success){
      //   //$console.log('success',$success);
      // });
      //$firebase.auth().createUserWithEmailAndPassword("office@gamil.com", "123456");


    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/karigarfyp-firebase-adminsdk-2zra3-c909476c1f.json');
    $firebase = (new Factory)->withServiceAccount($serviceAccount)->withDatabaseUri('https://karigarfyp.firebaseio.com/')->create();
    $database = $firebase->getDatabase();

    $reference = $database->getReference('user');
    $data = $reference->getValue();




        return view('customerpages.show_customer',compact('data'));
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
        //
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
