<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trainer;

class TrainerContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers=Trainer::all();
        return view('index', compact('trainers'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        //return $request->input('name');
        /**$trainer=new Trainer();
        $trainer->name=$request->input('name');
        $trainer->Apellido=$request->input('Apellido');
        $trainer->Avatar=$request->input('Avatar');
        $trainer->save();
        return 'Guardado';**/
        if($request->hasFile('Avatar')){
            $file=$request->file('Avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
            $trainer=new Trainer();
            $trainer->name=$request->input('name');
            $trainer->Apellido=$request->input('Apellido');
            $trainer->avatar=$name;
            $trainer->save();
            return 'Guardado';
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
        //return view("show");//
        $trainer=Trainer::find($id);
        return view("show", compact("trainer"));
        //return $trainer;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
       //return $trainer; //
       return view('edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //return $trainer;//
        $trainer->fill($request->except("Avatar"));
        if ($request->hasFile("Avatar")){
            $file = $request->file("Avatar");
            $name = time().$file-> getClientOriginalName();

            $trainer->Avatar=$name;
            $file->move(public_path( ).'/images/',$name);
        }
        $trainer->save( );
        return redirect("trainers/");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer=Trainer::find($id);
        if($trainer->delete($id))
        {
            //return redirect('trainers/');
            if(file_exists('images/'.$data->Avatar) AND !empty($data->Avatar))
            {
                unlink('images/'.$data->Avatar);
            }
            try{
                $data->delete();
                $bug=0;
            }
            catch(\Exception $e){
                $bug=$e->errorInfo[1];
            }
            if($bug==0){
                echo "sucess";
            }
            else{
                echo "Error";
            }
        }
        else return "El ".id. "No se pudo borrar";
        $data=Trainer::FindOrFail($id);


    }
}
