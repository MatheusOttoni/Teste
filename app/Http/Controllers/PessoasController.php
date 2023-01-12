<?php
 
namespace App\Http\Controllers;
 
use App\Models\Pessoas;
use App\Models\Profissoes;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Mostrar todas as mulheres.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pessoas = Pessoas::where('sexo', 'feminino')
        ->where('nascimento', '<=', '2003-01-01')
        ->get();
    
        return view('welcome', ['pessoas' => $pessoas]);
    }
     /**
     * Ver pessoas.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id = null)
    {   
 
      if ($id){
        return view('show', [
            'pessoa' => Pessoas::findOrFail($id),
            'profissoes' => Profissoes::all(),
        ]);
      }{
        return view('show', [
            'profissoes' => Profissoes::all(),
        ]);
      }
     
    }

   /**
     * Salvar a new pessoa.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function editar(Request $request)
    {   

  
        
        if ($request->input('id')){
            $pessoa = Pessoas::findOrFail($request->input('id'));
            $pessoa->update([
                'nome'=> $request->input('nome'),
                'sexo'=> $request->input('sexo'),
                'cpf'=> $request->input('cpf'),
                'nascimento'=> $request->input('nascimento'),
                'email'=> $request->input('email'),
                'celular'=> $request->input('celular'),
                'profissao_id'=> $request->input('profissao'),
            ]);
        }else{
            $pessoa = new Pessoas();
            $pessoa->nome = $request->input('nome');
            $pessoa->sexo = $request->input('sexo');
            $pessoa->cpf = $request->input('cpf');
            $pessoa->nascimento = $request->input('nascimento');
            $pessoa->email = $request->input('email');
            $pessoa->celular = $request->input('celular');
            $pessoa->profissao_id = $request->input('profissao');
        
            $saved = $pessoa->save();
        }
        return redirect()->route('home');
    
    }

    /**
     * Ver pessoas.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function excluir($id)
    {   
 
        $excluir = Pessoas::where('id',$id)->delete();
        return redirect()->route('home');
     
    }
}