<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users;
    private $gender;
    private $roles;
    private $ages;
    private $types;
    private $interests;
    private $jobs;

    public function __construct()
    {
        $this->users = User::all();
        $this->gender = [
            'male' => 'مرد',
            'female' => 'زن'
        ];
        $this->roles = Role::all()->pluck('title', 'id');
        $this->ages = Tag::where('parent_id', config('env.age'))->get()->pluck('title', 'id');
        $this->interests = Tag::where('parent_id', config('env.interest'))->get()->pluck('title', 'id');
        $this->types = Tag::where('parent_id', config('env.type'))->get()->pluck('title', 'id');
        $this->jobs = Tag::where('parent_id', config('env.job'))->get()->pluck('title', 'id');

    }

    public function testers()
    {

    }

    public function employers()
    {

    }


    public function index()
    {
        $users = $this->users;
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gender = $this->gender;
        $roles = $this->roles;
        $jobs = $this->jobs;
        $interests = $this->interests;
        $types = $this->types;
        $ages = $this->ages;
        return view('user.create', compact('gender', 'roles', 'jobs', 'interests', 'ages', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->roles()->attach($request->roles);
        $user->tags()->attach($request->ages);
        $user->tags()->attach($request->interests);
        $user->tags()->attach($request->types);
        $user->tags()->attach($request->jobs);
        return redirect(route('user.index'))->with('message', 'کاربر با موفقیت ایجاد شد');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with(['roles'])->findOrFail($id);
        $gender = $this->gender;
        $roles = $this->roles;
        $jobs = $this->jobs;
        $interests = $this->interests;
        $types = $this->types;
        $ages = $this->ages;
        return view('user.edit', compact('user', 'gender', 'roles', 'jobs', 'interests', 'types', 'ages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect(route('user.index'))->with('message', 'کاربر با موفقیت ویرایش شد');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('user.index'))->with('message', 'کاربر با موفقیت حذف شد');
    }
}
