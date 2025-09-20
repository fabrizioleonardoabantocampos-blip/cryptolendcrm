<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemporalController extends Controller
{
    public function widget()
    {
        return view('temporal.widget');
    }
    public function index()
    {
        return view('temporal.index');
    }
    public function form_layout()
    {
        return view('temporal.form_layout');
    }
    public function form_validate()
    {
        return view('temporal.form_validate');
    }
    public function form_edit()
    {
        return view('temporal.form_edit');
    }
    public function form_dropzone()
    {
        return view('temporal.form_dropzone');
    }
    public function table_bootstrap()
    {
        return view('temporal.table_bootstrap');
    }

}
