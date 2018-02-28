@extends ('layouts.app')

@section('content')

    <div class="container" style="text-align: center;">
        <div class="row" style="height: 10%;">
            <div class="col-sm-4">
                <div class="box same-height" style="height: 100%;">
                    <img src="{{ asset('img/worldwide.png') }}"/>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="box same-height" style="height: 100%;">
                    <h1>Kimple news</h1>
                    <p>A simple way to get in touch with actuality</p>
                </div>
            </div>
        </div>
        <br/>
        <div class="box">

            <h3>Mot du développeur</h3>
            <hr/>
            <h4>Bonjour cher ami de Kimple,</h4>
            <p>Voici mon premier travail sur PHP Laravel.</p>
            <p>Je m'excuse d'avance pour le design <strong>très</strong> simpliste.</p>
            <p>En effet, je n'ai pas eu le temps de faire mieux ayant été occupé par la formation Laravel ainsi que mon stage.</p>
            <p>J'ai donc préféré me concentrer sur les fonctionnalitées.</p>
            <p>J'espere que cela ne vous rebutera pas trop à utiliser ce site web</p>
            <br/>
            <p>N'hésitez pas a revenir vers moi au <strong>06.59.78.93.24</strong>.</p>
            <br/>
            <p>Cordialement,</p>
            <br/>
            <p>Clément PROBOLA</p>

        </div>

    </div>


@endsection