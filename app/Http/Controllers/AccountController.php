<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        // Menampilkan daftar akun
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat akun baru
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        // Menyimpan akun baru
        $request->validate([
            'username' => 'required|unique:accounts',
            'password' => 'required',
            'name' => 'required',
            'role' => 'required',
        ]);

        Account::create($request->all());

        return redirect()->route('accounts.index')->with('success', 'Account created successfully.');
    }

    public function edit(Account $account)
    {
        // Menampilkan form untuk mengedit akun
        return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, Account $account)
    {
        // Mengupdate akun
        $request->validate([
            'password' => 'required',
            'name' => 'required',
            'role' => 'required',
        ]);

        $account->update($request->all());

        return redirect()->route('accounts.index')->with('success', 'Account updated successfully.');
    }

    public function destroy(Account $account)
    {
        // Menghapus akun
        $account->delete();

        return redirect()->route('accounts.index')->with('success', 'Account deleted successfully.');
    }
}