<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\ContactUs;

class LeadsController extends Controller
{
    /**
     * Constructor Method.
     *
     * Setting Authentication
     *
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($type) {
        
        $model = $this->mapModel($type);
        $model = "App\Models\\".$model;
        $data = $model::orderby('created_at', 'DESC')->get();
        
        $model_obj = new $model;
        $columns = $model_obj->getTableColumns();

        return view('back.leads.index', compact('data', 'columns', 'type'));
    }

    public function mapModel($name) {

        $replaced = str_replace("-"," ", $name);
        $ucwordName = ucwords($replaced);
        $FinalName = str_replace(" ","", $ucwordName);
        
        return $FinalName;
    }

    public function show($type, $id) {
        $model = $this->mapModel($type);
        $model = "App\Models\\".$model;

        $lead = $model::findOrFail($id);

        return view('back.leads.view', compact('lead', 'type'));
    }

    public function destroy($type, $id) {
        $model = $this->mapModel($type);
        $model = "App\Models\\".$model;

        $lead = $model::findOrFail($id);
        $lead->delete();

        return redirect()->back()->withSuccess(__('Lead Deleted Successfully.'));
    }
    
}
