<?php

namespace App\Http\Controllers;
use App\DataTables\LicensesDataTable;
use Illuminate\Http\Request;

class LicenseDatatables extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(LicensesDataTable $dataTable)
    {
        return $dataTable->render('licenses');
    }
}
