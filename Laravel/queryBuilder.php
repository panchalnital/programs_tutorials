<?php

use illuminate\Support\Facades\DB;

DB::table('student')->where('name','shive')
                    ->orWhere(function($query){
                        $query->where('name','ram')
                              ->where('id','<',1);
                    })->get();

//-------------------------------------------

DB::table('student')->where('name','shive')
                    ->orWhere('id',1)->get();

            //----------------
DB::table('student')->whereBetween('name',[1,3])->get();

DB::table('student')->whereNotBetween('name',[1,3])->get();
//----------------------------------------
    
$data=array(
    'name'=>$request->name
);
DB::table('student')->insertGetId($data);

//--------------------------------------
/***************ORM query builder **********************/
//1 make model give protecte table ,primary key
    class Fight extends model{ 
    protected $table='my_fights';
    protected $guarded=['id']; // use the mass insertation data in table 
    protected $fillable=['name','email'];// use the mass insertion dat table 
    
    protected $primaryKey="flight_id";
    public $incerementinf=false;//use the auto incerment flase 
    public $timetamp=false;//use the create and update dateflase 
    protected $hidden = [
        'attribute_name',
        // Add other attributes you want to hide here
    ];

   // <input type="hidden" name="attribute_name" value="{{ $model->attribute_name }}">

//2 insert data

    public function store(Request $request){
        $student=new Student;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->save();
        return redirect()->route('student.add');
    

    //creater are used mass data save in table that time use create nethoda 
    $data=array(
        'name'=>$request->name,
        'email'=>$request->email
    );
    Student::create($data);

//3 reterive
    $students=Student::all();
    $students=Student::where('name','shive')->get();
    return view('students',compact('students'));

//find 
//4 delete
//5 update
//6 update & create
//7 chund and cursor


}