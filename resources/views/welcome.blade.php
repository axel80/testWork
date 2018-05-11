@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div  style="margin-top: 15px">

            <!-- Menú Principal decide what user can see -->

            <div class="col-md-3 text-center">
                <div class="box box-primary" >
                    <div class="header" style="magin-top:5px">
                        <b>HTML & CSS</b>
                    </div>
                    <div class="body">
                        <a href="{!! route('divColors') !!}" data-toggle="tooltip" title="HTML & CSS" class="btn btn-app" >
                            <i class="fa fa-html5"></i>


                        </a>
                    </div>

                </div>
            </div>


            <div class="col-md-3 text-center">
                <div class="box box-primary" >
                    <div class="header" style="magin-top:5px">
                        <b>Fibonacci Recursive function</b>
                    </div>
                    <div class="body">
                        <a href="{!! route('fibo') !!}" data-toggle="tooltip" title="Fibonacci" class="btn btn-app" >
                            <i class="fa  fa-stack-overflow"></i>


                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-3 text-center">
                <div class="box box-primary" >
                    <div class="header" style="magin-top:5px">
                        <b>Enviar correo usuarios</b>
                    </div>
                    <div class="body">
                        <a href="{!! route('send') !!}" data-toggle="tooltip" title="Enviar correo usuarios" class="btn btn-app" >
                            <i class="fa fa-users"></i>


                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection