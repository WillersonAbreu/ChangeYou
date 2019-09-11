<?php

use Illuminate\Http\Request;


//Rotas para cadastro
// Route::get('cadastrese', function () {
// 	return view('cadastrese');
// });

Route::put('cadastrese', 'UsuarioController@salvar');

//Rota usuários
Route::put('validarusuario')->middleware('login');
Route::get('logout')->middleware('logout');


//Rotas do Feed
Route::get('feed/{id}','FeedController@Index')->middleware('sessao');
Route::post('feed/postar/{id}','FeedController@postar')->middleware('sessao');
Route::get('feed/deletar/{id_post}','FeedController@deletar')->middleware('sessao');



