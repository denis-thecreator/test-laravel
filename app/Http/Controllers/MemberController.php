<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::paginate(10);
        
        return view('member/index', ['member' => $member]);
    }

    public function tambah()
    {
        return view('member/tambah');
    }

    public function store(Request $request)
    {
        
    }
}
