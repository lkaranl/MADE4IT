<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MensagemController extends Controller
{
    public function mensagemDeErro($msg, $redirect)
    {
      if ($msg != null) {
        if ($redirect != null) {
          echo
          '<script>
          alert("'.$msg.'");
          window.location.href = "'.WEB_ROOT.'/'.$redirect.'";
          </script>';
        } else {
          echo
          '<script>
          alert("'.$msg.'");
          </script>';
        }
      } else {
        if ($redirect != null) {
          echo
          '<script>
          alert("Erro ao tentar executar a ação!");
          window.location.href = "'.WEB_ROOT.'/'.$redirect.'";
          </script>';
        } else {
        echo
          '<script>
          alert("Erro ao tentar executar a ação!");
          </script>';
        }
      }
    }

    public function mensagemDeSucesso($msg, $redirect)
    {
      if ($msg != null) {
        if ($redirect != null) {
          echo
          '<script>
          alert("'.$msg.'");
          window.location.href = "'.WEB_ROOT.'/'.$redirect.'";
          </script>';
        } else {
          echo
          '<script>
          alert("'.$msg.'");
          </script>';
        }
      } else {
        if ($redirect != null) {
          echo
          '<script>
          alert("Sucesso ao tentar executar a ação!");
          window.location.href = "'.WEB_ROOT.'/'.$redirect.'";
          </script>';
        } else {
        echo
          '<script>
          alert("Sucesso ao tentar executar a ação!");
          </script>';
        }
      }
    }

    public function mensagemDeInformacao($msg, $redirect)
    {
      if ($msg != null) {
        if ($redirect != null) {
          echo
          '<script>
          alert("'.$msg.'");
          window.location.href = "'.WEB_ROOT.'/'.$redirect.'";
          </script>';
        } else {
          echo
          '<script>
          alert("'.$msg.'");
          </script>';
        }
      } else {
        if ($redirect != null) {
          echo
          '<script>
          alert("Mensagem de Informação!");
          window.location.href = "'.WEB_ROOT.'/'.$redirect.'";
          </script>';
        } else {
        echo
          '<script>
          alert("Mensagem de Informação!");
          </script>';
        }
      }
    }

}
