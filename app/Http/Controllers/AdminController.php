<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function quiz()
    {
        $quizlist= Quiz::latest()->get();
        return view('admin.60minquiz',[
            'quizlist' => $quizlist
        ]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function course()
    {
        return view('admin.courses');
    }



    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function mailbox()
    {
        return view('admin.mailbox');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function compose()
    {
        return view('admin.mailbox-compose');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function readmail()
    {
        return view('admin.mailbox-read');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function bcalender()
    {
        return view('admin.basic-calendar');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function lcalender()
    {
        return view('admin.list-view-calendar');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function bookmark()
    {
        return view('admin.bookmark');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function review()
    {
        return view('admin.review');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function listing()
    {
        return view('admin.add-listing');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function profile()
    {
        return view('admin.user-profile');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function permission()
    {
        $users= User::latest()->get();
        return view('admin.user-permission',[
            'users' => $users
        ]);

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function minquiz()
    {

        return view('60minutesQuiz.index');


    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function startquiz()
    {

        return view('60minutesQuiz.questions');


    }



    public function run_quiz(){
        return Quiz::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $this -> validate($request,[
            'subject'   => 'required',
            'question'  => 'required',
            'choice1'   => 'required',
            'choice2'   => 'required',
            'choice3'   => 'required',
            'choice4'   => 'required',
            'answer'    => 'required',

        ]);
        Quiz::create([
            'subject'   => $request->subject,
            'question'  => $request->question,
            'choice1'   => $request->choice1,
            'choice2'   => $request->choice2,
            'choice3'   => $request->choice3,
            'choice4'   => $request->choice4,
            'answer'    => $request->answer,

        ]);
        return redirect()-> back()->with('success','Quiz Added Successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data = Quiz::find($id);
            return [
            'subject'     => $data->subject,
            'question'    => $data->question,
            'choice1'     => $data->choice1,
            'choice2'     => $data->choice2,
            'choice3'     => $data->choice3,
            'choice4'     => $data->choice4,

        ];

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
