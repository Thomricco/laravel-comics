@extends('layouts.app')

@section('pageTitle', 'Comics')

@section('main-content')
    <div class="container-immagini-box-comics">
        <div class="box-immagini-box-comics">
            <div class="button-immagini-box"></div>
            <img class="immagine-immagini-box-comics" src="{{ $comic["thumb"] }}" alt="">
            <div class="info-box">
                
                <h2 class="title-h2">{{ $comic["title"] }}</h2>
                <div class="green-box">
                    <div class="green-box-left">
                        <div class="">U.S. Price: {{ $comic["price"] }}</div>
                    </div>
                    <div class="green-box-center"> AVAILABLE </div>
                    
                    <div class="green-box-right">Check Avaibility</div>
                </div>
                <p class="descrizione">{{ $comic["description"] }}</p>
                
                
            </div>


            <div class="img-box-left">
                <img src="{{ asset('img/adv.jpg')}}" alt="">
            </div>

            
            
            
            
        </div>

        
        
    </div>
@endsection