@extends('layouts/master')

@include('components/navigation')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
        <div class="col-md-12">
            <h3 class="section-title">Livres Show</h3>
            <div class="section-title-divider"></div>
        </div>
    </div>
</div>
<section id="myMessages" class="wow fadeInRight py-5">
    <div class="container text-center">
        <div class="mb-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Livres</th>
                        <th scope="col">Année</th>
                        <th scope="col">Auteur</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$livres->id}}</td>
                        <td>{{$livres->livre}}</td>
                        <td>{{$livres->annee}}</td>
                        <td>{{$livres->auteur}}</td>
                    <td>
                        <a href='{{route('edit', $livres->id)}}' class='btn btn-warning'>Edit</a>
                        <a href='{{route('delete', $livres->id)}}' class='btn btn-danger'>Delete</a>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>