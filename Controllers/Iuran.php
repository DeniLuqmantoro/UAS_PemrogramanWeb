<?php
 
namespace App\Controllers;
 
use App\Models\KasModels;
 
class Iuran extends BaseController
{
    protected $iuran;
 
    function __construct()
    {
        $this->iuran = new KasModels();
    }
 
    public function index()
    {
        $data['iuran'] = $this->iuran->findAll();
        return view('kas/iuran', $data);
    }
	
	    public function create()
    {
        return view('kas/create');
    }
 
    public function store()
    {
        if (!$this->validate([
			'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
				]
			],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'bulan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun' => [
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
			'warga_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
 
        $this->iuran->insert([
            'keterangan' => $this->request->getVar('keterangan'),
			'tanggal' => $this->request->getVar('tanggal'),
            'bulan' => $this->request->getVar('bulan'),
            'tahun' => $this->request->getVar('tahun'),
			'jumlah' => $this->request->getVar('jumlah'),
			'warga_id' => $this->request->getVar('warga_id')
        ]);
        session()->setFlashdata('message', 'Tambah Kas Warga Berhasil');
        return redirect()->to('/iuran');
    }
	
	function edit($id)
    {
        $dataIuran = $this->iuran->find($id);
        if (empty($dataIuran)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kas Tidak ditemukan !');
        }
        $data['iuran'] = $dataIuran;
        return view('kas/edit', $data);
    }
 
    public function update($id)
    {
        if (!$this->validate([
			'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
				]
			],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'bulan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tahun' => [
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
			'warga_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
 
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
 
        $this->iuran->update($id, [
           'keterangan' => $this->request->getVar('keterangan'),
			'tanggal' => $this->request->getVar('tanggal'),
            'bulan' => $this->request->getVar('bulan'),
            'tahun' => $this->request->getVar('tahun'),
			'jumlah' => $this->request->getVar('jumlah'),
			'warga_id' => $this->request->getVar('warga_id')
        ]);
        session()->setFlashdata('message', 'Update Data Warga Berhasil');
        return redirect()->to('/iuran');
    }
	
	function delete($id)
    {
        $data Iuran = $this->iuran->find($id);
        if (empty($dataIuran)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kas Tidak ditemukan !');
        }
        $this->iuran->delete($id);
        session()->setFlashdata('message', 'Delete Data Kas Berhasil');
        return redirect()->to('/iuran');
    }
 
}