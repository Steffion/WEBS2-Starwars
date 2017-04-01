<?php
/**
 * Created by PhpStorm.
 * User: Nutellie
 * Date: 4/1/2017
 * Time: 9:17 PM
 */
?>

@extends('layouts.master')

@section('content')


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/Figure.png" alt="First slide" width="500" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h3>all figures 50% off!</h3>
                    <button>
                        Buy Now!
                    </button>
                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/Plushie.jpg" alt="Second slide" width="500" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h3> Limited time only! Yoda plushie now for $10! </h3>
                    <button>
                        Buy Now!
                    </button>
                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="img/Shirt.png" alt="Third slide" width="500" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h3>All womens shirts 20% off!</h3>
                    <p>Sizes xs / m / xl</p>
                    <button>
                        Buy Now!
                    </button>
                </div>

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


@endsection
