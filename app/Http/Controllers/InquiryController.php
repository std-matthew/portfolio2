<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notifications\InquiryNotification;

use DB;

use App\Inquiry;
use App\InquiryItem;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vars = $request->except([]);

        DB::beginTransaction();

            $inquiry = Inquiry::findOrCreate($vars['email']);

            $inquiry->inquiry_items()->create([
                'name' => $vars['name'],
                'message' => $vars['message'],
            ]);

        DB::commit();

        $inquiry->notify(new InquiryNotification);

        $message = 'Message Sent!';

        return response()->json([
            'message' => $message,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }
}
