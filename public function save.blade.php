public function save()
    {
        Request()->validate([
            'nik' => 'required|numeric|unique:users,nik|min:16',
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
        ],[
           
            'nik.required' => 'Wajib Diisi',
            'nik.unique' => 'Data NIK sudah Terdaftar',
            'nik.min' => 'Nik Minimal 16 Karakter',
            'nik.max' => 'Nik Maximal 17 Karakter',
            'nik.numeric' => 'Nik Wajib Angka',
            'nama.required' => 'Nama Wajib Diisi',
            'alamat.required' => 'Alamat Wajib Diisi',
            'no_hp.required' => 'Nomor HP wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'tgl_lahir.required' => 'Tanggal Lahir Wajib Diisi',
            'username.required' => 'Username Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Password Minimal 8 Karakter',

        ]);

        $data = [
            'nik' => Request()->nik,
            'nama' => Request()->nama,
            'alamat' => Request()->alamat,
            'no_hp' => Request()->no_hp,
            'email' => Request()->email,
            'tgl_lahir' => Request()->tgl_lahir,
            'username' => Request()->username,
            'password' => Hash::make(Request()->password), 
            'level' => 1,
        ];

        $this->UserModel->addData($data);
        return redirect()->route('register')->with('pesan','Akun Telah Terdaftar,Silahkan Login');