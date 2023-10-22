<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\EventoModel;

class Evento extends BaseController
{
    public function index()
    {
        $modelo = new EventoModel();

        $datos['result'] = $modelo->orderBy('id', 'ASC')->findAll();

        echo view('evento/index', $datos);
    }
    public function ascendente()
    {
        $modelo = new EventoModel();
        $datos['result'] = $modelo->orderBy('nombre', 'ASC')->findAll();

        echo view('evento/index', $datos);
    }
    public function descendente()
    {
        $modelo = new EventoModel();
        $datos['result'] = $modelo->orderBy('nombre', 'DESC')->findAll();

        echo view('evento/index', $datos);
    }
    public function busqueda()
    {
        $busqueda = $_POST['criterio'];
        $model = new EventoModel();
        $datos["result"] = $model->like('nombre', $busqueda)->findAll();

        echo view('evento/index', $datos);
    }
    public function restaurar()
    {
        $modelo = new EventoModel();
        $datos['result'] = $modelo->orderBy('id', 'ASC')->findAll();

        echo view('evento/index', $datos);
    }
    public function registrar()
    {
        echo view('evento/registrar');
    }

    public function insert()
    {
        $modelo = new EventoModel();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'lugar' => $this->request->getVar('lugar'),
            'fecha' => $this->request->getVar('fecha'),
            'horario' => $this->request->getVar('horario'),
            'organizador' => $this->request->getVar('organizador'),

            'objetivo' => $this->request->getVar('objetivo'),
            'academia' => $this->request->getVar('academia'),
            'recursos' => $this->request->getVar('recursos'),
            'numero_participantes' => $this->request->getVar('numero_participantes'),

        ];
        $modelo->insert($data);
        return $this->response->redirect(base_url('/evento/index'));
    }
    public function modificar($id = null)
    {
        $modelo = new EventoModel();
        $datos['result'] = $modelo->asObject()->find($id);
        echo view('evento/modificar', $datos);
    }
    public function update()
    {
        $modelo = new EventoModel();
        $id = $this->request->getVar("id");
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'lugar' => $this->request->getVar('lugar'),
            'fecha' => $this->request->getVar('fecha'),
            'horario' => $this->request->getVar('horario'),

            'organizador' => $this->request->getVar('organizador'),

            'objetivo' => $this->request->getVar('objetivo'),
            'academia' => $this->request->getVar('academia'),
            'recursos' => $this->request->getVar('recursos'),
            'numero_participantes' => $this->request->getVar('numero_participantes'),

        ];
        $modelo->update($id, $data);
        return $this->response->redirect(base_url('/evento/index'));
    }
    public function delete($id = null)
    {
        $model = new EventoModel();
        $model->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/evento/index'));
    }
}
