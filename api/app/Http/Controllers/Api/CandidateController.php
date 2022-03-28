<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function saveCandidato(Request $request){
        try{
            $data = $request->all();
            Candidato::create($data);
            return response()->json(['data' => 'Candidato salvo com sucesso', 'status' => 200]);

        }catch(\Exception $e){
            return response()->json('Erro ao salvar candidato: '.$e->getMessage(), 500);
        }
    }

    public function getCandidatos(){
        try{
            $candidatos = Candidato::all();

            return response()->json(['data' => $candidatos, 'status' => 200]);
        }catch(\Exception $e){
            return response()->json('Erro ao consultar Candidatos: '.$e->getMessage(), 500);
        }
    }

    public function deleteCandidato($id){
        try{
            $candidatos = Candidato::find($id);
            $candidatos->delete();

            return response()->json(['data' => 'Candidato excluido com sucesso', 'status' => 200]);
        }catch(\Exception $e){
            return response()->json('Erro ao deletar candidatos: '.$e->getMessage(), 500);
        }
    }

    public function editCandidato($id){
        try{
            $candidatos = Candidato::find($id);
            return response()->json(['data' => $candidatos, 'status' => 200]);
        }catch(\Exception $e){
            return response()->json('Erro ao deletar candidatos: '.$e->getMessage(), 500);
        }
    }

    public function updateCandidato(Request $request){
        try{
            $data = $request->all();
            $candidato = Candidato::where('id', $data['id'])->first();
            $candidato->update($data);

            return response()->json(['data' => 'Candidato atualizado com sucesso!', 'status' => 200]);
        }catch(\Exception $e){
            return response()->json('Erro ao atualizar candidato: '.$e->getMessage(), 500);
        }
    }
}
