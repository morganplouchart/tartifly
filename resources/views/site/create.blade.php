@extends('layout.tartiflynofooter')
	@section('content')
	<div class="colorlib-loader"></div>
	<div id="page">
                <div class="colorlib-wrap">
                        <div class="container">
                                <div class="row">
                                        <div class="col-md-6">
                                                <h1>Create Voyage</h1>
                                                @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                                <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                        @endforeach
                                                                </ul>
                                                        </div>
                                                @endif
                                                <form method="POST" action="/admin/voyages">
                                                        @csrf
                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">Pays</label>
                                                                <input type="text" class="form-control" name="pays" placeholder="Pays">
        
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">Libelle</label>
                                                                <input type="text" class="form-control" name="libelle" placeholder="Libelle">
                                                        </div>
                                                        <div class="form-check">
                                                                <label for="exampleInputEmail1">Durée</label>
                                                                <input type="date" class="form-control" name="duree" placeholder="Durée">
                                                        </div>
                                                        <div class="form-check">
                                                                <label for="exampleInputEmail1">Prix</label>
                                                                <input type="text" class="form-control" name="cout" placeholder="Prix">
                                                        </div>
                                                        <div class="form-check">
                                                                <label for="exampleInputEmail1">Photo</label>
                                                                <input type="text" class="form-control" name="photo" placeholder="URL de votre photo ex: http://photo.com/photo.jpg">     
                                                        </div>
                                                        <div class="form-check">
                                                                <label for="exampleInputEmail1">Description</label>
                                                                <input type="text" class="form-control" name="description" placeholder="Description">     
                                                        </div>
                                                        <div class="form-check">
                                                                <label for="exampleInputEmail1">Disponibilité</label>
                                                                <input type="text" class="form-control" name="disponibilite">     
                                                        </div>
                                                        <button type="submit" class="btn btn-primary" style="margin-top:20px;">Enregister</button>
                                                </form>
                                        </div>
                                </div>
                        </div>
                </div>
@endsection


