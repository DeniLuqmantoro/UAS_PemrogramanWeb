<?php
 
namespace App\Controllers;
 
use App\Models\WargaModel;
 
class Warga extends BaseController
{
    protected $warga;
 
    function __construct()
    {
        $this->warga = new WargaModel();
    }
	
    public function index()
    {
        $data['warga'] = $this->warga->findAll();
        return view('data_warga/warga', $data);
    }
 
    public function create()
    {
        return view('data_warga/create');
    }
 
    public function store()
    {
        if (!$this->validate([
			'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
				]
			],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
			'no_rumah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
			'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->warga->insert([
            'nik' => $this->request->getVar('nik'),
			'nama' => $this->request->getVar('nama'),
            'kelamin' => $this->request->getVar('kelamin'),
            'alamat' => $this->request->getVar('alamat'),
			'no_rumah' => $this->request->getVar('no_rumah'),
			'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('message', 'Tambah Data Warga Berhasil');
        return redirect()->to('/warga');
    }
 
    function edit($id)
    {
        $dataWarga = $this->warga->find($id);
        if (empty($dataWarga)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Warga Tidak ditemukan !');
        }
        $data['warga'] = $dataWarga;
        return view('data_warga/edit', $data);
    }
 
    public function update($id)
    {
        if (!$this->validate([
			'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
			],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
			'no_rumah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
			'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->warga->update($id, [
            'nik' => $this->request->getVar('nik'),
			'nama' => $this->request->getVar('nama'),
            'kelamin' => $this->request->getVar('kelamin'),
            'alamat' => $this->request->getVar('alamat'),
			'no_rumah' => $this->request->getVar('no_rumah'),
			'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('message', 'Update Data Warga Berhasil');
        return redirect()->to('/warga');
    }
 
    function delete($id)
    {
        $dataWarga = $this->warga->find($id);
        if (empty($dataWarga)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pegawai Tidak ditemukan !');
        }
        $this->warga->delete($id);
        session()->setFlashdata('message', 'Delete Data Warga Berhasil');
        return redirect()->to('/warga');
    }
}