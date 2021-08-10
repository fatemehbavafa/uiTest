<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Tag;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    private $questions;
    private $types;



    public function __construct()
    {
        $this->questions = Question::all();
        $this->types = Tag::where('parent_id', config('env.type'))->get()->pluck('title', 'id');

    }


    public function index()
    {
        $questions = $this->questions;
        return view('question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $questions = $this->questions;
        $types = $this->types;
        return view('question.create', compact(    'types','questions'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $questions = Question::create($request->all());
        $questions->tags()->attach($request->types);
        return redirect(route('question.index', compact('questions')))->with('message', 'سوال ایجاد  شد  ');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('question.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question= Question::findOrFail($id);
        $types = $this->types;
        return view('question.edit', compact('question', 'types'))->with('message', 'سوال با موفقیت ویرایش شد');;
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
        $questions = Question::findOrFail($id);
        $questions->update($request->all());
        return redirect(route('question.index', compact('questions')))->with('message', 'سوال با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questions = Question::findOrFail($id);
        $questions->delete();
        return redirect(route('question.index'))->with('message', 'سوال با موفقیت حذف شد');
    }
}
