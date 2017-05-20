<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class PermissionsController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if ($user->isAdmin() || $user->hasPermission('permissions.index')) {
            $permissions = Permission::all();
            return view('permissions.index', compact('permissions'));
        } else {
            //# code...
            abort(404, 'Unauthorized action.');
        }
    }

    public function create()
    {
        $user = Auth::user();
        if ($user->isAdmin() || $user->hasPermission('permissions.create')) {
            $controllers = [];

            foreach (Route::getRoutes()->getRoutes() as $route) {
                $action = $route->getAction();

                if (array_key_exists('controller', $action)) {
                    // You can also use explode('@', $action['controller']); here
                    // to separate the class name from the method
                    $action = $action['controller'];

                    if ((strpos($action, 'Auth') == '')) {
                        if (strpos($action, 'Laravel') == '') {
                            $string = stripslashes(str_replace("App\\Http\\Controllers", "", $action));
                            $controllers[$string] = $string;
                        }
                    }
                }
            }
            $path = app_path();
            function getModels($path)
            {
                $out = [];
                $results = scandir($path);
                foreach ($results as $result) {
                    if ($result === '.' or $result === '..') continue;
                    $filename = $result;
                    if (is_dir($filename)) {
                        //$out = array_merge($out, getModels($filename));
                    } else {
                        $a = substr($filename, 0, -4);
                        if ($a != '') {
                            $out[$a] = $a;
                        }

                    }
                }
                return $out;
            }

            $models = getModels($path);


            return view('permissions.create', compact('controllers', 'models'));
        } else {
            //# code...
            abort(404, 'Unauthorized action.');
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        if ($user->isAdmin() || $user->hasPermission('permissions.store')) {
            $request = $request->all();
            $request['slug'] = strtolower(str_replace('Controller@', '.', $request['slug']));
            //return $request['slug'];
            $validator = Validator::make($request, [
                'slug' => 'unique:permissions',
            ]);
            if ($validator->fails()) {
                return "This Slug is already in use!";
            } else {
                // adding dentist
                $u = Permission::create([
                    'name' => $request['name'],
                    'slug' => $request['slug'],
                    'model' => $request['model'],
                    'description' => $request['description'],
                ]);
                return "success";
            }
        } else {
            //# code...
            abort(404, 'Unauthorized action.');
        }
    }

    public function saveRole(Request $request)
    {
        $user = Auth::user();
        if ($user->isAdmin() || $user->hasPermission('permissions.saveRole')) {
            $check = DB::table('permission_role')
                ->where('permission_id', '=', $request->pid)
                ->where('role_id', '=', $request->rid)
                ->count();
            if (empty($check)) {
                // adding dentist
                $u = PermissionRole::create([
                    'permission_id' => $request->pid,
                    'role_id' => $request->rid,
                ]);
                return $u->id;
            } else {
                return "Some Error Occured! Please refresh the page.";
            }
        } else {
            //# code...
            abort(404, 'Unauthorized action.');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $controllers = [];

        foreach (Route::getRoutes()->getRoutes() as $route) {
            $action = $route->getAction();

            if (array_key_exists('controller', $action)) {
                // You can also use explode('@', $action['controller']); here
                // to separate the class name from the method
                $action = $action['controller'];

                if ((strpos($action, 'Auth') == '')) {
                    if (strpos($action, 'Laravel') == '') {
                        $string = stripslashes(str_replace("App\\Http\\Controllers", "", $action));
                        $controllers[str_replace('@', '.', strtolower($string))] = str_replace('@', '.', strtolower($string));
                    }
                }
            }
        }
        $path = app_path();
        function getModels($path)
        {
            $out = [];
            $results = scandir($path);
            foreach ($results as $result) {
                if ($result === '.' or $result === '..') continue;
                $filename = $result;
                if (is_dir($filename)) {
                    //$out = array_merge($out, getModels($filename));
                } else {
                    $a = substr($filename, 0, -4);
                    if ($a != '') {
                        $out[$a] = $a;
                    }

                }
            }
            return $out;
        }

        $models = getModels($path);

        $permission = Permission::find($id);
        // getting all roles
        return view('permissions.edit', compact('permission', 'controllers', 'models'));
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::find($id);
        if ($permission->id) {
            $input = $request->all();
            $permission->fill($input)->save();
            return response()->json(['status' => 'success', 'message' => 'Permission Updated']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
        }
    }

    public function destroy($id)
    {
        //
        $user = Auth::user();
        if ($user->isAdmin() || $user->hasPermission('permissions.destroy')) {
            $pr = PermissionRole::findOrFail($id);
            if ($pr->delete()) {
                return response()->json(['status' => 'success', 'message' => 'Permission Deleted!']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Some Error Occured!']);
            }
        } else {
            //# code...
            abort(404, 'Unauthorized action.');
        }
    }

    public function assignPermissions()
    {
        $user = Auth::user();
        if ($user->isAdmin() || $user->hasPermission('permissions.assignPermissions')) {
            $role = Role::all();
            $permissions = DB::table('permissions')
                ->orderBy('name', 'asc')->get();

            $permissionRole = DB::table('permission_role')->get();

            return view('permissions.assignpermissions', compact('role', 'permissions', 'permissionRole'));
        } else {
            //# code...
            abort(404, 'Unauthorized action.');
        }
    }

    public function addPermissions()
    {
        $controllers = [];

        foreach (Route::getRoutes()->getRoutes() as $route) {
            $action = $route->getAction();

            if (array_key_exists('controller', $action)) {
                // You can also use explode('@', $action['controller']); here
                // to separate the class name from the method
                $action = $action['controller'];

                if ((strpos($action, 'Auth') == '')) {
                    if (strpos($action, 'Laravel') == '') {
                        $string = stripslashes(str_replace("App\\Http\\Controllers", "", $action));
                        $controllers[$string] = $string;
                    }
                }
            }
        }
        $path = app_path();
        function getModels($path)
        {
            $out = [];
            $results = scandir($path);
            foreach ($results as $result) {
                if ($result === '.' or $result === '..') continue;
                $filename = $result;
                if (is_dir($filename)) {
                    //$out = array_merge($out, getModels($filename));
                } else {
                    $a = substr($filename, 0, -4);
                    if ($a != '') {
                        $out[$a] = $a;
                    }

                }
            }
            return $out;
        }

        $models = getModels($path);

        // inserting permissions

        foreach ($controllers as $data) {

            $slug = strtolower(str_replace("@", '.', $data));
            print_r($slug);
            print_r("<br>");
        }
        exit;
    }

    public function assign()
    {
        $role = DB::table('roles')->get();

        $path = app_path();
        function getModels($path)
        {
            $out = [];
            $results = scandir($path);
            foreach ($results as $result) {
                if ($result === '.' or $result === '..') continue;
                $filename = $result;
                if (is_dir($filename)) {
                    //$out = array_merge($out, getModels($filename));
                } else {
                    $a = substr($filename, 0, -4);
                    if ($a != '') {
                        $out[$a] = $a;
                    }

                }
            }
            return $out;
        }

        $models = getModels($path);

        $i = 1;
        foreach ($models as $data) {
            $permissions = Permission::where('name', $data)->get();
            $models[$data] = $permissions;
            $i++;
        }

        return view('permissions.assign', compact('role', 'models'));
    }

}
