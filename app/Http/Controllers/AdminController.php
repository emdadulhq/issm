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

    /**
     * @return Quiz[]|\Illuminate\Database\Eloquent\Collection
     */

    public function run_quiz(){
        return Quiz::all();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function sci(){
        return view('sci');
    }
    public function ict(){
        return view('sci.ict');
    }
    public function kids_coding(){
        return view('sci.kids_coding');
    }
    public function mobile_lab(){
        return view('sci.mobile_lab');
    }
    public function practical(){
        return view('sci.practical');
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function mock(){
        return view('mock');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function ssc(){
        return view('mock.mock_ssc');
    }
    public function ssc_phy(){
        return view('mock.ssc_phy');
    }
    public function ssc_math(){
        return view('mock.ssc_math');
    }
    public function ssc_chem(){
        return view('mock.ssc_chem');
    }
    public function ssc_bio(){
        return view('mock.ssc_bio');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function hsc(){
        return view('mock.mock_hsc');
    }
    public function hsc_phy(){
        return view('mock.hsc_phy');
    }
    public function hsc_math(){
        return view('mock.hsc_math');
    }
    public function hsc_chem(){
        return view('mock.hsc_chem');
    }
    public function hsc_bio(){
        return view('mock.hsc_bio');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function admission(){
        return view('mock.mock_admission');
    }
    public function adm_engg(){
        return view('mock.engineering.engineering');
    }
    public function engg_phy(){
        return view('mock.engineering.engg_phy');
    }
    public function engg_math(){
        return view('mock.engineering.engg_math');
    }
    public function engg_chem(){
        return view('mock.engineering.engg_chem');
    }
    public function engg_bio(){
        return view('mock.engineering.engg_bio');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function adm_med(){
        return view('mock.medical.medical');
    }
    public function med_phy(){
        return view('mock.medical.med_phy');
    }
    public function med_math(){
        return view('mock.medical.med_math');
    }
    public function med_chem(){
        return view('mock.medical.med_chem');
    }
    public function med_bio(){
        return view('mock.medical.med_bio');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function adm_unite(){
        return view('mock.university_A.uni_A');
    }
    public function unite_phy(){
        return view('mock.university_A.uniA_phy');
    }
    public function unite_math(){
        return view('mock.university_A.uniA_math');
    }
    public function unite_chem(){
        return view('mock.university_A.uniA_chem');
    }
    public function unite_bio(){
        return view('mock.university_A.uniA_bio');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function adm_enggunite(){
        return view('mock.enginnering_uni.engg_uni');
    }
    public function enggunite_buet(){
        return view('mock.enginnering_uni.engg_buet');
    }
    public function enggunite_kuet(){
        return view('mock.enginnering_uni.engg_kuet');
    }
    public function enggunite_ruet(){
        return view('mock.enginnering_uni.engg_ruet');
    }
    public function enggunite_sust(){
        return view('mock.enginnering_uni.engg_sust');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function career(){
        return view('carrer_assessment');
    }
    public function career_ielts(){
        return view('Career_Assessment.ielts');
    }
    public function career_gre(){
        return view('Career_Assessment.gre');
    }
    public function career_support(){
        return view('Career_Assessment.support');
    }
    public function career_aptitude(){
        return view('Career_Assessment.aptitude');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contact(){
        return view('contact');
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
