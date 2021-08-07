<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    private $websites;
    private $employer;
    private $ages;
    private $types;
    private $interests;
    private $jobs;

    public function __construct()
    {
        $this->websites = Website::all();
        $this->employer = User::employers()->get()->pluck('name', 'id');
        $this->ages = Tag::where('parent_id', config('env.age'))->get()->pluck('title', 'id');
        $this->interests = Tag::where('parent_id', config('env.interest'))->get()->pluck('title', 'id');
        $this->types = Tag::where('parent_id', config('env.type'))->get()->pluck('title', 'id');
        $this->jobs = Tag::where('parent_id', config('env.job'))->get()->pluck('title', 'id');
    }

    public function index()
    {
        $websites = $this->websites;
        return view('website.index', compact('websites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $websites = $this->websites;
        $employer = $this->employer;
        $jobs = $this->jobs;
        $interests = $this->interests;
        $types = $this->types;
        $ages = $this->ages;
        return view('website.create', compact('websites', 'employer', 'jobs', 'interests', 'ages', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $websites = Website::create($request->all());
        if ($request->employer_id == 0)
            $request->merge(['employer_id' => null]);
        $websites->tags()->attach($request->ages);
        $websites->tags()->attach($request->interests);
        $websites->tags()->attach($request->types);
        $websites->tags()->attach($request->jobs);
        return redirect(route('website.index'))->with('message', 'سایت ایجاد  شد  ');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('website.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $website= Website::findOrFail($id);
        $employer = User::findOrFail($id);
        $jobs = $this->jobs;
        $interests = $this->interests;
        $types = $this->types;
        $ages = $this->ages;
        return view('user.edit', compact('website','employer','jobs', 'interests', 'types', 'ages'))->with('message', 'سایت با موفقیت ویرایش شد');

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
        $website= Website::findOrFail($id);
        $website->update($request->all());
        return redirect(route('website.index', compact('websites')))->with('message', 'سایت با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $website = Website::findOrFail($id);
        $website->delete();
        return redirect(route('website.index'))->with('message', 'سایت با موفقیت حذف شد');
    }
}
