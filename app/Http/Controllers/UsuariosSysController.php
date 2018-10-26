<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuariosSys;

class UsuariosSysController extends Controller
{
    //
   public function index(){
      return view('menu.usuariosSys.index');
   }
   public function create(){
      return view('menu.usuariosSys.regForm',['alertType'=>null]);
   }
   public function store(Request $request){
      $usuarioSys = UsuariosSys::where(['nombre_usuario' => $request->nombre_usuario])->get()->count();
      if($usuarioSys>=1){
         return view('menu.usuariosSys.regForm',['alertType'=>'danger','alertTitle'=>'Upss!!','alertMessageStrong'=>'Hubo un error al guardar la información', 'alertMessage'=> 'ya existe un persona con ese nombre de usuario!!','data'=>$request]);
      }
      else{
         $iniciales=strtoupper(substr($request->nombre1,0,1).substr($request->nombre2,0,1).substr($request->apellido1,0,1).substr($request->apellido2,0,1));
         $permisos=$request->adminPermisos.$request->regPersonasPermisos.$request->licenciasPermisos;
         $usuarioSys = UsuariosSys::create(
            [
               'nombre1'=>strtoupper($request->nombre1),
               'nombre2'=>strtoupper($request->nombre2),
               'apellido1'=>strtoupper($request->apellido1),
               'apellido2'=>strtoupper($request->apellido2),
               'cargo'=>strtoupper($request->cargo),
               'nombre_firma'=>strtoupper($request->nombre_firma),
               'iniciales'=>$iniciales,
               'estatus'=>true,
               'nombre_usuario'=>strtolower($request->nombre_usuario),
               'contraseña'=>bcrypt($request->contraseña),
               'email'=>strtolower($request->email),
               'permisos'=>$permisos
            ]
         );
         return view('menu.usuariosSys.regForm',['alertType'=>'success','alertTitle'=>'Muy Bien!!','alertMessageStrong'=>'El usuario se ha guardado con exito!!', 'alertMessage'=> '']);
      }
   }
   public function show($id){
      return 'show';
   }
   public function edit($id){
      $usuarioSys = UsuariosSys::find($id);
      $permisos = str_split($usuarioSys->permisos, 1);
      return view('menu.usuariosSys.editForm',['data'=>$usuarioSys,'permisos'=>$permisos]);
   }
   public function update(Request $request, $id){
     $usuarioSys = UsuariosSys::where('nombre_usuario', '=' ,$request->nombre_usuario)
                              ->whereNotIn('id',[$id])
                              ->get()
                              ->count();
     if($usuarioSys>=1){
        $permisos=$request->adminPermisos.$request->regPersonasPermisos.$request->licenciasPermisos;
        $permisos = str_split($permisos, 1);
        return view('menu.usuariosSys.editForm',['alertType'=>'danger','alertTitle'=>'Upss!!','alertMessageStrong'=>'Hubo un error al guardar la información', 'alertMessage'=> 'ya existe un persona con ese nombre de usuario!!','data'=>$request,'permisos'=>$permisos]);
     }
     else{
        $iniciales=strtoupper(substr($request->nombre1,0,1).substr($request->nombre2,0,1).substr($request->apellido1,0,1).substr($request->apellido2,0,1));
        $permisos=$request->adminPermisos.$request->regPersonasPermisos.$request->licenciasPermisos;
        $usuarioSys = UsuariosSys::find($id);
        $usuarioSys->nombre1=strtoupper($request->nombre1);
        $usuarioSys->nombre2=strtoupper($request->nombre2);
        $usuarioSys->apellido1=strtoupper($request->apellido1);
        $usuarioSys->apellido2=strtoupper($request->apellido2);
        $usuarioSys->cargo=strtoupper($request->cargo);
        $usuarioSys->nombre_firma=strtoupper($request->nombre_firma);
        $usuarioSys->iniciales=$iniciales;
        $usuarioSys->estatus=true;
        $usuarioSys->nombre_usuario=strtolower($request->nombre_usuario);
        $usuarioSys->email=strtolower($request->email);
        $usuarioSys->permisos=$permisos;
        $usuarioSys->save();
        return view('menu.usuariosSys.search',['alertType'=>'success','alertTitle'=>'Muy Bien!!','alertMessageStrong'=>'Los cambios se han guardado con exito!!', 'alertMessage'=> ' para editar algo mas tienes que buscarlo al usuario y hacer click en el boton Editar']);
     }

   }
   public function destroy($id){
      $usuarioSys = UsuariosSys::find($id);
      if($usuarioSys->estatus===0){
         $usuarioSys->estatus=true;
         $usuarioSys->save();
         return view('menu.usuariosSys.search',['alertType'=>'success','alertTitle'=>'Muy Bien!!','alertMessageStrong'=>'El usuario se ha reactivado con exito!!', 'alertMessage'=> ' para volver a desactivarlo tienes que buscarlo y hacer click en el boton Eliminar']);

      }else{
         $usuarioSys->estatus=false;
         $usuarioSys->save();
         return view('menu.usuariosSys.search',['alertType'=>'success','alertTitle'=>'Muy Bien!!','alertMessageStrong'=>'El usuario se ha desactivado con exito!!', 'alertMessage'=> ' para volver a reactivarlo tienes que buscarlo y hacer click en el boton Reactivar']);
      }

   }
   public function getSearch(){
      return view('menu.usuariosSys.search');
   }
   public function postSearch(Request $request){
      $usuarioSys = UsuariosSys::where('nombre1','like', '%'.$request->nombre1.'%')
                                 ->orWhere('apellido1','like', '%'.$request->apellido1.'%')
                                 ->orWhere('nombre_usuario','like', '%'.$request->nombre_usuario.'%')
                                 ->get(['id','nombre1','apellido1','nombre_usuario','estatus']);
      return view('menu.usuariosSys.search',['results'=>$usuarioSys]);
   }
   public function getPassword($id){
      $usuarioSys = UsuariosSys::find($id);
      return view('menu.usuariosSys.changePassword',['id'=>$id,'nombre_usuario'=>$usuarioSys->nombre_usuario]);
   }
   public function postPassword(Request $request, $id){
      $usuarioSys = UsuariosSys::find($id);
      $usuarioSys->contraseña=bcrypt($request->contraseña);
      $usuarioSys->save();
      return view('menu.usuariosSys.search',['alertType'=>'success','alertTitle'=>'Muy Bien!!','alertMessageStrong'=>'la contraseña se ha restablecido con exito!!', 'alertMessage'=> '']);

   }
}
