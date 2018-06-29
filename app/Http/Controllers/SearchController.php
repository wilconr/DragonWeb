<?php

namespace DragonWeb\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.search');
    }

    public function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('attendants')
         ->where('nombres', 'like', '%'.$query.'%')
         ->orWhere('apellidos', 'like', '%'.$query.'%')
         ->orWhere('telefono', 'like', '%'.$query.'%')
         ->orWhere('direccion', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('attendants')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->nombres.'</td>
         <td>'.$row->apellidos.'</td>
         <td>'.$row->telefono.'</td>
         <td>'.$row->direccion.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
