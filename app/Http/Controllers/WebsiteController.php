<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{   private $websites;
    public function __construct()
    {
        $this->websites = Website::all();

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
        return view('website.create', compact('websites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $websites = Website::create($request->all());
        return redirect(route('website.index', compact('websites')))->with('message', 'سایت ایجاد  شد  ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('website.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $websites = Website::findOrFail($id);
        return view('user.edit', compact('websites'))->with('message', 'سایت با موفقیت ویرایش شد');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $websites = Website::findOrFail($id);
        return redirect(route('website.index',compact('websites')))->with('message', 'سایت با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $websites = Website::findOrFail($id);
        $websites->delete();
        return redirect(route('website.index'))->with('message', 'سایت با موفقیت حذف شد');
    }
}
