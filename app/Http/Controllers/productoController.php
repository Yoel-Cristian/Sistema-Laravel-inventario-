<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;

class productoController extends Controller
{
    //
    public function principal()
    {
        // // para mostror todo sin paginacion
        // $producto = Producto::all(); 
        $producto = Producto::withTrashed()->paginate(5);
        return view('productos.principal', ['prod' => $producto]);
    }

    public function crear()
    {
        return view('productos.crear');
    }

    public function mostrar($variable)
    {
        $producto = Producto::find($variable);

        // return view('productos.mostrar', ['prod'=>$variable]);
        return view("productos.mostrar", compact('producto'));
    }

    public function store(Request $request)
    {
        $pro = new Producto();
        $pro->nombre = $request->nombre;
        $pro->precio = $request->precio;
        $pro->descripcion = $request->descripcion;
        $pro->categoria = $request->categoria;

        // return $request->all();
        $pro->save();

        // return redirect()->route('producto.principal');
        return redirect()->route('producto.mostrar', $pro->id);
    }

    public function editar(Producto $id)
    {

        $categoria_actual = Categoria::find($id->categoria_id);

        $categorias = Categoria::all();
        //se enviaran a la vista EDITAR las variables:
        return view("Productos.editar", compact('id', 'categoria_actual', 'categorias'));
    }
    public function update(Request $request, Producto $producto)
    {

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->categoria = $request->categoria;
        $producto->categoria_id = $request->categoria_id;
        $producto->save(); //guarda los cambios en la base de datos
        return redirect()->route(
            'producto.mostrar',
            $producto
        );
    }



 /*    public function desactivar(Producto $id2)
    {
        $id2->delete(); //usamos el metodo delete para eliminar el objeto
        return redirect()->Route('producto.principal');
        //redireccionamos a la  vista index.
    } */


/*     public function destroy(Producto $id)
    {
        $id->forceDelete(); //usamos el metodo delete para eliminar el objeto
        return redirect()->Route('producto.principal');
        //redireccionamos a la  vista index.
    } */
/*     public function activar(Producto $id2)
    {
        $id2->restore($id2);
        return redirect()->Route('producto.principal');
        //redireccionamos a la  vista index.
    }
 */


    public function destroy($id)
{
    $producto = Producto::withTrashed()->find($id);
    $producto->forceDelete();
    return redirect()->route('producto.principal');
}

public function desactivar($id)
{
    $producto = Producto::find($id);
    $producto->delete();
    return redirect()->route('producto.principal');
}

public function activar($id)
{
    $producto = Producto::withTrashed()->find($id);
    $producto->restore();
    return redirect()->route('producto.principal');
}

}
