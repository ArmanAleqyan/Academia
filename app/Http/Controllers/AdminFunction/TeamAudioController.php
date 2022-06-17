<?php

namespace App\Http\Controllers\AdminFunction;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamAudioContentRequest;
use App\Models\TeamAudioContent;
use Illuminate\Http\Request;

class TeamAudioController extends Controller
{
    public  function index(){
        $team = TeamAudioContent::orderBy('id', 'Desc')->limit(4)->get();

        return view('admin.TeamAudio.TeamAudioIndex', compact('team'));
    }

    public function newteamview(){
        return view('admin.TeamAudio.NewTeamView');
    }

    public function createNewTeam(TeamAudioContentRequest $request){

        $photo = $request->photo;
        $audio = $request->audio;

        $destinationPath = 'team/audio';
        $originalFile = time() . $audio->getClientOriginalName();
        $audio->move($destinationPath, $originalFile);
        $audio = $originalFile;

        $destinationPath = 'team/photo';
        $originalFile = time() . $photo->getClientOriginalName();
        $photo->move($destinationPath, $originalFile);
        $photo = $originalFile;

        $data = TeamAudioContent::create([
           'name' => $request->name,
            'photo' => $photo,
            'audio' => $audio
        ]);
        if($data){
            return redirect()->route('team')->with('succses', 'Вы удачно добавили новый контент');
        }else{
            return redirect()->back();
        }
    }


    public function deleteaudio($id){

        $delete = TeamAudioContent::where('id',$id)->delete();

        if($delete){
            return redirect()->back();
        }

    }

    public function updateAudioview($id){
        $team = TeamAudioContent::where('id',$id)->get();
        return view('admin.TeamAudio.UpdateTeamView', compact('team'));
    }

    public function updateAudio(Request $request, $id){
        $team = TeamAudioContent::where('id',$id)->get();

        if($request->name != $team[0]->name){
            $update = TeamAudioContent::where('id',$id)->update([
               'name' => $request->name
            ]);
        }
        if($request->photo == null || $request->photo == $team[0]->photo){

        }else{
            $photo = $request->photo;

            $destinationPath = 'team/photo';
            $originalFile = time() . $photo->getClientOriginalName();
            $photo->move($destinationPath, $originalFile);
            $photo = $originalFile;

            $update = TeamAudioContent::where('id',$id)->update([
                'photo' => $photo
            ]);
        }

        if($request->audio == null || $request->audio == $team[0]->audio){

        }else{
            $audio = $request->audio;

            $destinationPath = 'team/audio';
            $originalFile = time() . $audio->getClientOriginalName();
            $audio->move($destinationPath, $originalFile);
            $audio = $originalFile;

            $update = TeamAudioContent::where('id',$id)->update([
                'audio' => $audio
            ]);
        }


   return redirect()->back()->with('succses', 'Вы удачно добавили новый контент');



    }
}
