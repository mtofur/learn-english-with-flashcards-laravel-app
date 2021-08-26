<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Words;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      if ($_POST){
        $AddWord = new Words();
        $AddWord->englishword       = $request->englishword;
        $AddWord->englishsentence   = $request->englishsentence;
        $AddWord->turkishword       = $request->turkishword;

        // get the word image
        $imageName = $request->file('image')->getClientOriginalName();
        $moveFile = $request->file('image')->move(public_path('uploads/words'), $imageName);
        $AddWord->image = $imageName;

        $AddWord->save();

        return back()->with('success', 'The word successfully added.');

      }
        $data['title'] = 'Admin Panel';
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function words()
    {
        $data['GetWord'] = Words::all();

        return view('admin.words', $data);


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
        $findWord = Words::find($id);

        $data['id']                  = $findWord->id;
        $data['englishword']         = $findWord->englishword;
        $data['englishsentence']     = $findWord->englishsentence;
        $data['turkishword']         = $findWord->turkishword;
        $data['image']               = $findWord->image;

        return view('admin.edit', $data);
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

      $findWord = Words::find($id);

      $findWord->englishword         = $request->englishword;
      $findWord->englishsentence     = $request->englishsentence;
      $findWord->turkishword         = $request->turkishword;

      if ($request->file('image')) {
        if ($request->file('image')->getClientOriginalName() == $findWord->image) {
          $findWord->image;
        } else {
          $imageName = $request->file('image')->getClientOriginalName();
          $deleteOldImagePath = public_path().'/uploads/words/'.$findWord->image;
          unlink($deleteOldImagePath);
          $request->file('image')->move(public_path('uploads/words'), $imageName);
          $findWord->image = $request->file('image')->getClientOriginalName();
        }

      }

      $findWord->save();
      return back()->with('success', 'The word was successfuly updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Words::find($id)->delete();
        return back()->with('success','The word was successfully deleted.');
    }
}
