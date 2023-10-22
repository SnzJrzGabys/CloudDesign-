<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class EventoModel extends Model
{
    protected $table = "evento";
    protected $primarykey = "id";
    protected $allowedFields =
    [
        "id", "nombre", "lugar", "fecha", "horario", "organizador", "objetivo",
        "academia", "numero_participantes"
    ];
}
