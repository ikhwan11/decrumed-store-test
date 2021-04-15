<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MakananController extends Controller
{
    public function index()
    {
        $makanan = Makanan::all();
        return view('home', ['makanan' => $makanan]);
    }

    public function admin()
    {
        $makanan = Makanan::all();
        if (session()->has('LoggedUser')) {
            $user = User::where('id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user,
                'makanan' => $makanan
            ];
        }
        return view('admin', $data);
    }
    // auth
    // login cek

    public function login_aksi(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', '=', $request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->Session()->put('LoggedUser', $user->id);
                return redirect('admin');
            } else {
                return back()->with('gagal', 'Password salah!');
            }
        } else {
            return back()->with('gagal', 'akun tidak ada');
        }
    }

    public function logout_aksi()
    {
        Auth::logout();
        return redirect()->route('/');
    }

    // end of auth

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (session()->has('LoggedUser')) {
            $user = User::where('id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user,
            ];
        }

        return view('form_tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_makanan' => 'required',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);

        makanan::create([
            'nama_makanan' => $request->nama_makanan,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('admin')->with('pesan', 'menu ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(makanan $makanan)
    {

        return view('detail_menu', compact('makanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit(makanan $makanan)
    {

        if (session()->has('LoggedUser')) {
            $user = User::where('id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $user,
                'makanan' => $makanan
            ];
        }
        return view('form_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, makanan $makanan)
    {

        $request->validate([
            'nama_makanan' => 'required',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);

        makanan::where('id', $makanan->id)
            ->update([
                'nama_makanan' => $request->nama_makanan,
                'harga' => $request->harga,
                'keterangan' => $request->keterangan,
            ]);

        return redirect('admin')->with('pesan', 'menu diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(makanan $makanan)
    {
        makanan::destroy($makanan->id);
        return redirect('admin')->with('pesan', 'menu dihapus');
    }
}
