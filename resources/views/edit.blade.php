@extends('layouts/master')
@section('content')
    @include('components/navigation')
      <section id="contact" class="section-bg wow fadeInUp py-5 ">
        <div class="text-center my-5">
            <h3>Formulaire Livres Edit</h3>
        </div>
        <div class="container">   
            {{-- <section class="form py-5 mt-5 container"> --}}
            <form action="{{route('update', $livres->id)}}" method="POST" class="contactForm ">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6 mx-auto">
                        <input type="text" class="form-control" name="livre" id="livre" placeholder="livre"
                            data-rule="livre" data-msg="" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group col-md-6 mx-auto">
                        <input type="date" class="form-control" name="annee" id="annee" placeholder="annee"
                            data-rule="annee" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 mx-auto">
                        <input type="text" class="form-control" name="auteur" id="auteur" placeholder="auteur"
                            data-rule="auteur" data-msg="" />
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="text-center ">
                    <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
                </div>
            </form>
        </div>
    </section>