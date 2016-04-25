<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Will_information;
use App\Will_questionare;
use App\Will_testator_s_personal_details;
use App\Will_testatrix_s_personal_details;
use App\Wills_details_of_marriage;
use App;
use PDF;

class WillController extends Controller
{


    public function __construct() 
        {
            $this->middleware('auth');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $will_info_type_lang=new Will_questionare;
        // $will_info_type_lang->type_of_will=Input::get('type_of_will');

        $data['willquestionare']= Will_questionare::where('user_id',$request->user()->id)
                                                   ->get();
        $data['Testator']= Will_testator_s_personal_details::where('user_id',$request->user()->id) 
                                                     ->get();            
        return view('pages/will_1', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_stage1(Request $request)
    {
        //

         $will_info_type_lang=new Will_questionare;
         $will_info_type_lang->type_of_will=Input::get('type_of_will');
         $will_info_type_lang->language=Input::get('language');
         $will_info_type_lang->user_id=$request->user()->id;
         $will_info_type_lang->save();

         $will_testator_s_personal_details=new Will_testator_s_personal_details;
         $will_testator_s_personal_details->user_id=$request->user()->id;
         $will_testator_s_personal_details->fullname=Input::get('first_name');
         $will_testator_s_personal_details->surname=Input::get('second_name');
         $will_testator_s_personal_details->id_number=Input::get('id_number');
         $will_testator_s_personal_details->street_address=Input::get('street_address')."  ".Input::get('street_address_line_two');
         $will_testator_s_personal_details->city=Input::get('city');
         $will_testator_s_personal_details->province=Input::get('province');
         $will_testator_s_personal_details->postal_code=Input::get('postal_code');
         $will_testator_s_personal_details->country=Input::get('language');
         $will_testator_s_personal_details->mobile_number=Input::get('mobile_number');
         $will_testator_s_personal_details->email=Input::get('email_number');
         $will_testator_s_personal_details->name_of_employer=Input::get('employer');
         $will_testator_s_personal_details->occupation=Input::get('occupation');
         $will_testator_s_personal_details->save();
         //$myquest_id = Input::get('quest_id');
         //$myquestion = Input::get('question');
        return view('pages/will_2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

   public function create_stage2(Request $request)
    {
        //

         $will_testator_s_personal_details=new Will_testatrix_s_personal_details;
         $will_testator_s_personal_details->user_id=$request->user()->id;
         $will_testator_s_personal_details->fullname=Input::get('first_name');
         $will_testator_s_personal_details->surname=Input::get('second_name');
         $will_testator_s_personal_details->id_number=Input::get('id_number');
         $will_testator_s_personal_details->street_address=Input::get('street_address')."  ".Input::get('street_address_line_two');
         $will_testator_s_personal_details->city=Input::get('city');
         $will_testator_s_personal_details->province=Input::get('province');
         $will_testator_s_personal_details->postal_code=Input::get('postal_code');
         $will_testator_s_personal_details->country=Input::get('language');
         $will_testator_s_personal_details->mobile_number=Input::get('mobile_number');
         $will_testator_s_personal_details->email=Input::get('email_number');
         $will_testator_s_personal_details->name_of_employer=Input::get('employer');
         $will_testator_s_personal_details->occupation=Input::get('occupation');
         $will_testator_s_personal_details->save();

         $mariage_type=new Wills_details_of_marriage;
         $mariage_type->user_id=$request->user()->id;
         $mariage_type->marriage_date=Input::get('datetimepicker');
         $mariage_type->marriage_type=Input::get('mariage_type');
         $mariage_type->save();
        return view('pages/will_3');
    }

    public function create_stage3(Request $request){
       
         $will_testator_s_personal_details=new Will_information;
         $will_testator_s_personal_details->user_id=$request->user()->id;
         $will_testator_s_personal_details->stipulation_in_case_of_death_of_testator=Input::get('stipulation_in_case_of_death_of_testator');
         $will_testator_s_personal_details->stipulation_in_case_of_death_of_testatrix=Input::get('stipulation_in_case_of_death_of_testatrix');
         $will_testator_s_personal_details->simultaneous_death=Input::get('simultaneous_death');
         $will_testator_s_personal_details->will_in_event_of_family_obliteration=Input::get('street_address')."  ".Input::get('will_in_event_of_family_obliteration');
         $will_testator_s_personal_details->in_case_of_minor_beneficiaries_we_need_the_following_information=Input::get('in_case_of_minor_beneficiaries_we_need_the_following_information');
         $will_testator_s_personal_details->name_identity_date_of_birth=Input::get('name_identity_date_of_birth');
         $will_testator_s_personal_details->guardians=Input::get('guardians');
         $will_testator_s_personal_details->maintenance_amount_to_be_paid_to_each_minor_child=Input::get('maintenance_amount_to_be_paid_to_each_minor_child');
         $will_testator_s_personal_details->trust_trustee_full_names_id_numbers=Input::get('trust_trustee_full_names_id_numbers');
         $will_testator_s_personal_details->executor_full_names_and_and_id_numbers=Input::get('executor_full_names_and_and_id_numbers');
         $will_testator_s_personal_details->other_matters=Input::get('other_matters');
         //$will_testator_s_personal_details->occupation=Input::get('occupation');
         $will_testator_s_personal_details->save();

         return view('pages/thank_you');

    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function will_apply_pdf(){
        // $pdf = App::make('dompdf.wrapper');
        // $pdf->loadHTML('<h1>Test</h1>');
        // return $pdf->stream();
       //  $data["steve"]="";
       //  //$pdf = PDF::loadView('will_pdf_preview', $data);
       //  $pdf = PDF::loadView('will_pdf_preview', $data);
       // return $pdf->download('invoice.pdf');
        //$pdf = App::make('dompdf.wrapper');
        $pdf = PDF::loadView('will_pdf_preview');
        return $pdf->stream();

   //      Mail::queue('emails.factuur', array('factuur' => $factuur), function($message)
   // {
   //     $pdf = PDF::loadView('layouts.factuur', array('factuur' => $factuur));
   //     $message->to(Input::get('email'), Input::get('naam'))->subject('Onderwerp');
   //     $message->attach($pdf->output());
   //  });



    }
} 
