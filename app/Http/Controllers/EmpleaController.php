<?php

namespace App\Http\Controllers;
use App\Models\Emp;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmpleaController extends Controller
{
    public function listaEmp(Request $request)
    {
        $emp = DB::table('registro_de_empleados')
            ->join('users','registro_de_empleados.users_id', '=', 'users.id')
            ->select('registro_de_empleados.*','users.name')
            ->paginate(5);//el numero de filas


        return view('empleados.listaEmp', compact('emp'));
    }

    public function formEmp()
    {
        $Users=User::all();

        return view('empleados.emp', compact('Users'));

    }

    public function saveEmp(Request $request)
    {
        $validator_l = $this->validate($request, [
            'codigo_empleado' => 'required',
            'nombre_empleado' => 'required',
            'numero_telefono' => 'required',
            'correo' => 'required',
            'direccion' => 'required',
            'departamento' => 'required',
            'users_id' => 'required',

        ]);

        emp::create([
            'codigo_empleado' => $validator_l['codigo_empleado'],
            'nombre_empleado' => $validator_l['nombre_empleado'],
            'numero_telefono' => $validator_l['numero_telefono'],
            'correo' => $validator_l['correo'],
            'direccion' => $validator_l['direccion'],
            'departamento' => $validator_l['departamento'],
            'users_id' => $validator_l ['users_id'],
        ]);


        return redirect('listaEmp')->with('RegistroGuardado', 'Guardado');

    }

    public function editformEmp($codigo_empleado)
    {

        $emp = emp::findOrFail($codigo_empleado);

        return view('empleados.editEmp', compact('emp'));
    }

    public function editEmp(Request $request, $codigo_empleado)
    {
        $datoEmp = request()->except((['_token', '_method']));
        emp::where('codigo_empleado', '=', $codigo_empleado)->update($datoEmp);

        return redirect('/listaEmp')->with('RegistroModificado', 'Modificado');
    }

    public function destroy($codigo_empleado)
    {
        try {
            Emp::destroy($codigo_empleado);

            return redirect('/listaEmp')->with('RegistroEliminado', 'Eliminado');

        } catch (\Exception $exception) {

            Log::debug($exception->getMessage());

            return redirect('/listaEmp')->with('alerta', 'ok');
        }
    }

}
