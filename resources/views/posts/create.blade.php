@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Criar Notícia</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('noticias.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Titulo</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title"  required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">Texto</label>

                                <div class="col-md-6">
                                    <textarea id="content" class="form-control" name="content"  required>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Postar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
