<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class TeacherController extends Controller
{

    public function insertTeacher(Request $request){
        $result = NULL;
        try{
            DB::table('teacher')->insert(
                [
                    'name' => $request->input('name'),
                    'school' => $request->input('school'),
                    'phone' => $request->input('phone'),
                ]
            );

            $result = Array(200 => 'Success');
        } catch(Exception $e){
            $result = Array($e->getCode() => $e->getMessage());
        }

        return Response()->json($result);
    }

    // insert Location
    public function insertLocation(Request $request) {
        $result = NULL;
        try{
            DB::table('teacher_live_location')->insert(
                [
                    'lat' => $request->input('lat'),
                    'lon' => $request->input('lon'),
                    'teacher_phone' => $request->input('teacher_phone'),
                ]
            );

            $result = Array(200 => 'Success');
        } catch (Exception $e){
            $result = Array($e->getCode() => $e->getMessage());
        }

        return Response()->json($result);

    }

    public function selectTeacherList(Request $request){
        $teacher_id_ar = [];
        $teacher_id_ob =  DB::table('teacher')->select('phone')->where('school' , '=' , $request->input('school'))->get();
        if( count($teacher_id_ob) == 0 ){
            return Response()->json($teacher_id_ar);
        }
        foreach ($teacher_id_ob as $row){
            $teacher_id_ar[] = $row->phone;
        }

        $teacher_location_list = DB::table('teacher_live_location')
            ->join('teacher','teacher_live_location.teacher_phone' , '=' , 'teacher.phone')
            ->select('teacher.*','teacher_live_location.lat','teacher_live_location.lon','teacher_live_location.created')
            ->whereIn('teacher_phone' ,$teacher_id_ar)
            ->orderBy('teacher_live_location.created','DESC')
            ->orderBy('teacher_live_location.id','desc')
            ->limit(count($teacher_id_ob) -1)
            ->get();

        return Response()->json($teacher_location_list);
    }

    public function selectTeacher(Request $request){
        $teacher = DB::table('teacher_live_location')
            ->join('teacher','teacher_live_location.teacher_phone' , '=' , 'teacher.phone')
            ->select('teacher.*','teacher_live_location.lat','teacher_live_location.lon')
            ->where('teacher_phone' , '=' , $request->input('teacher_phone'))
            ->orderBy('teacher_live_location.created','desc')
            ->limit(1)
            ->get();

        return Response()->json($teacher);
    }
}
