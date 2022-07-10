<?php
 
namespace App\Controllers;
 
use App\Models\LaporanModel;
 
class Laporan extends BaseController
{
    protected $bayar;
	
    protected $total;
 
    function __construct()
    {
        $this->bayar = new LaporanModel();
    }
 
    public function index()
    {
        $data['bayar'] = $this->bayar->findAll();
        return view('laporan/bayar', $data);
    }
	
	 public function create()
    {
        return view('laporan/create');
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
			'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
			'jumlah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->bayar->insert([
            'nik' => $this->request->getVar('nik'),
			'nama' => $this->request->getVar('nama'),
            'kelamin' => $this->request->getVar('kelamin'),
			'status' => $this->request->getVar('status'),
			'jumlah' => $this->request->getVar('jumlah')
			
        ]);
        session()->setFlashdata('message', 'Tambah Data Warga Berhasil');
        return redirect()->to('/laporan');
    }
 
	
}