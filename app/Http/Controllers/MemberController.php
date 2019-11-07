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
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Member::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('member');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('member/edit', ['member' => $member]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $member = Member::find($id);
        $member->nama = $request->nama;
        $member->alamat = $request->alamat;
        $member->save();

        return redirect('member');
    }

    public function delete($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('member');
    }

    public function destroy(Member $member)
    {
        Member::destroy($member->id);
        return redirect('member');
    }
}
