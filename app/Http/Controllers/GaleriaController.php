<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Presente;

class GaleriaController extends Controller
{


    //tela namoro
    public function namoro (){
        $titulo = "NAMORO";
        $corpo = "Desde que você começou a fazer parte de minha vida tudo ficou mais belo e simples, e todo no meu mundo gira em volta de você. Sou feliz se você for feliz, e da sua tristeza eu faço minha.";

    return view('Namoro',['titulo'=>$titulo,'corpo'=>$corpo]);
    }
    //fim da tela


    //tela namoro de 1ano
    public function namoro1ano ($categoria_id = 0) {
        $titulo = "UM ANO";
        $presentes = Presente::where('categoria_id',$categoria_id)->get();
        return view('namoro1ano',['presentes' => $presentes,'titulo'=>$titulo]);
    }
    //fim da tela


    //tela namoro de 2anos
    public function namoro2anos ($categoria_id = 0) {
        $titulo = "DOIS ANOS";
        $presentes = Presente::where('categoria_id',$categoria_id)->get();
        return view('namoro2anos',['presentes' => $presentes,'titulo'=>$titulo]);
    }
    //fim da tela


    //tela namoro de 3anos
    public function namoro3anos ($categoria_id = 0) {
        $titulo = "TRÊS ANOS";
        $presentes = Presente::where('categoria_id',$categoria_id)->get();
        return view('namoro3anos',['presentes' => $presentes,'titulo'=>$titulo]);
    }
    //fim da tela


    //tela viagens
    public function viagens ($categoria_id = 0) {
        $presentes = Presente::where('categoria_id',$categoria_id)->get();
        $titulo = "VIAGENS";
        $corpo = "Os melhores momentos e recordações da vida são os que se passa ao lado da pessoa amada.";

    return view('Viagens',['titulo'=>$titulo,'corpo'=>$corpo,'presentes' => $presentes,]);
    }
    //fim da tela


    //tela videos
    public function videos ($categoria_id = 0) {
        $presentes = Presente::where('categoria_id',$categoria_id)->get();
        $titulo = "VIDEOS";

    return view('Videos',['presentes' => $presentes,'titulo'=>$titulo]);
    }
    //fim da tela

    // tela de melhorias
    public function anotacao ($categoria_id = 0) {
        $presentes = Presente::where('categoria_id',$categoria_id)->get();
        $titulo = "Oque precisamos melhorar";

    return view('Anotacao',['presentes' => $presentes,'titulo'=>$titulo]);
    }
    //fum da tela

    //função de adção de fotos
    public function create(){


         return view('fotos.create');
    }

    public function store(Request $request){


        $salvar = new Presente;

        $salvar->mes = $request->mes;
        $salvar->descricao = $request->descricao;
        $salvar->dia = $request->dia;
        $salvar->categoria_id = $request->categoria_id;


        //upload de foto
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            //pef do banco
            $imageName = md5($requestImage->getclientOriginalName() . strtotime("now")) . "." . $extension;
            //pasta de diretorio
            $requestImage->move(public_path('img/album'), $imageName);
            //atera a propriedade da imagem
            $salvar->image = $imageName;


        }


        $salvar->save();


        return redirect('/');

    }
    //tela de edição das fotos
    public function show($id) {

        $salvar = Presente::findOrfail($id);

        return view('fotos.show', ['salvar'=> $salvar]);

    }

    public function update(Request $request){

        $data = $request->all();

           //upload de foto
        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            //pef do banco
            $imageName = md5($requestImage->getclientOriginalName() . strtotime("now")) . "." . $extension;
            //pasta de diretorio
            $requestImage->move(public_path('img/album'), $imageName);
            //atera a propriedade da imagem
            $data['image'] = $imageName;


        }

        Presente::findOrFail($request->id)->update($data);

        return redirect('/namoro1ano');

    }
    //tela de delet
    public function destroy($id) {

        Presente::findOrFail($id)->delete();

        return redirect('/');
    }




}


