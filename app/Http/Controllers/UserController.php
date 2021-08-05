<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $useres;
    private $gender;
    private $roles;
    private $ages;
    private $types;
    private $interests;
    private $jobs;

    public function __construct()
    {
        $this->useres = User::all();
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
        $useres = $this->useres;
        return view('user.index', compact('useres'));
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
        $user->tags()->attach($request->ages, $request->types, $request->interests, $request->jobs);
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
        $useres = User::with(['roles'])->findOrFail($id);
        $gender = $this->gender;
        $roles = $this->roles;
        return view('user.edit', compact('useres', 'gender', 'roles'))->with('message', ';کاربر با موفقیت ویرایش شد');
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

        $useres = User::findOrFail($id);
        $useres->update($request->all());
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
        return redirect(route('user.index'))->with('message', ';کاربر با موفقیت حذف شد');
    }
}
