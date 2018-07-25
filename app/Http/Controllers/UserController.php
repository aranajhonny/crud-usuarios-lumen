<?php
namespace App\Http\Controllers;
session_start();

use App\User;
use Illuminate\Http\Request;
use Illuminate\Hashing\BcryptHasher;

class UserController extends Controller
{

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function index() {
        if (!isset($_SESSION['login_user'])) {
           return redirect('/login');
        }
        $users = $this->user->query()->get();
        return view('users.index', ['users' => $users]);
    }

    public function create() {
        if (!isset($_SESSION['login_user'])) {
           return redirect('/login');
        }
        return view('users.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['password'] =  app('hash')->make($request->input('password'));
        $user = User::create($data);

        return redirect('user/list');
    }

    public function edit($id) {
        if (!isset($_SESSION['login_user'])) {
           return redirect('/login');
        }
        $user = $this->user->query()->find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $data = $request->all();
        $data['password'] =  app('hash')->make($request->input('password'));
        $user->update($data);
        return redirect('user/list');

    }

    public function delete($id) {
        if (!isset($_SESSION['login_user'])) {
           return redirect('/login');
        }
        $user = $this->user->query()->findOrFail($id);
        return view('users.delete', ['user' => $user]);
    }

    public function destroy($id) {
        User::findOrFail($id)->delete();
        return redirect('user/list');
    }
}