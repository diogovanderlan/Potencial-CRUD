<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Dev;

class DevController extends Controlle
{
  

  public function index(ServerRequestInterface $request, ResponseInterface $response)
  {
    $modelo = Dev::all();

    $this->modelo = $modelo;

    return $this->view('desenvolvedor/index',$response);
  }

  public function detalhe(ServerRequestInterface $request, ResponseInterface $response)
  {
    $id = $request->getAttribute('id');
    $modelo = Dev::find($id);
    $this->modelo = $modelo;

    return $this->view('desenvolvedor/show',$response);
  }

  public function adicionar(ServerRequestInterface $request, ResponseInterface $response)
  {
    return $this->view('desenvolvedor/create',$response);
  }

  public function salvar(ServerRequestInterface $request, ResponseInterface $response)
  {
    $dados = $request->getParsedBody();
    $modelo = new Dev;

    $modelo->nome = $dados['nome'];
    $modelo->sexo = $dados['sexo'];
    $modelo->idade = $dados['idade'];
    $modelo->hobby = $dados['hobby'];
    $modelo->datanascimento = $dados['datanascimento'];
    $objModelo = $modelo->save();

    if($objModelo){
      //sucesso
    }else{
      //erro
    }
    
    return $response->withRedirect('/desenvolvedor');
  }

  public function editar(ServerRequestInterface $request, ResponseInterface $response)
  {
    $id = $request->getAttribute('id');
    $modelo = Dev::find($id);
    $this->modelo = $modelo;
    return $this->view('desenvolvedor/edit',$response);
  }

  public function atualizar(ServerRequestInterface $request, ResponseInterface $response)
  {
    $dados = $request->getParsedBody();
    $id = $request->getAttribute('id');
    $modelo = Dev::find($id);
  

    $modelo->nome = $dados['nome'];
    $modelo->sexo = $dados['sexo'];
    $modelo->idade = $dados['idade'];
    $modelo->hobby = $dados['hobby'];

    $modelo->datanascimento = $dados['datanascimento'];
    $objModelo = $modelo->save();

    return $response->withRedirect('/desenvolvedor');
  }

  public function deletar(ServerRequestInterface $request, ResponseInterface $response)
  {

    $id = $request->getAttribute('id');
    $modelo = Dev::find($id);


    $ok = $modelo->delete();

    return $response->withRedirect('/desenvolvedor');
  }


}
