<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function index() {
        $users = $this->user->query()->get();
        return view('users.index', ['users' => $users]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $user = User::create($request->all());

        return redirect('user/list');
    }

    public function edit($id) {
        $user = $this->user->query()->find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('user/list');

    }

    public function delete($id) {
        $user = $this->user->query()->findOrFail($id);
        return view('users.delete', ['user' => $user]);
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect('user/list');
    }
}