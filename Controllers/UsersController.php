<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
  public function index()
  {
      return Users::all();
  }

  public function show($id)
  {
      return Users::find($id);
  }

  public function store(Request $request)
  {
  
      return Users::create($request->all());
  }

  public function update(Request $request, $id)
  {
      $users = Users::findOrFail($id);
      $users->update($request->all());

      return $users;
  }

  public function delete(Request $request, $id)
  {
      $users = Users::findOrFail($id);
      $users->delete();

      return 204;
  }
}
