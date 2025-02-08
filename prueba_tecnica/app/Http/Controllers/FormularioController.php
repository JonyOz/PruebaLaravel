<?php


namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    // Método para mostrar el formulario (vista)
    public function mostrarFormulario()
    {
        return view('formulario');
    }

    // Método para manejar la lógica del envío del formulario
    public function enviarFormulario(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'ciudad' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'mensaje' => 'required|string|max:1000',
        ]);

        // Guardar los datos en la base de datos
        Formulario::create($validated);

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Formulario enviado exitosamente');
    }

     // Mostrar todos los registros en una tabla
     public function index()
     {
         $formularios = Formulario::all(); // Obtener todos los registros
         return view('formularios.index', compact('formularios'));
     }
 
     // Mostrar el formulario de edición
     public function edit($id)
     {
         $formulario = Formulario::findOrFail($id);
         return view('formularios.edit', compact('formulario'));
     }
 
     // Actualizar los datos en la base de datos
     public function update(Request $request, $id)
     {
         $request->validate([
             'nombre' => 'required|string|max:255',
             'telefono' => 'required|string|max:15',
             'ciudad' => 'required|string|max:255',
             'correo' => 'required|email|max:255',
             'mensaje' => 'required|string|max:1000',
         ]);
 
         $formulario = Formulario::findOrFail($id);
         $formulario->update($request->all());
 
         return redirect()->route('formularios.index')->with('success', 'Registro actualizado correctamente');
     }
 
     // Eliminar un registro
     public function destroy($id)
     {
         $formulario = Formulario::findOrFail($id);
         $formulario->delete();
 
         return redirect()->route('formularios.index')->with('success', 'Registro eliminado correctamente');
     }
}
