@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div>
            <a href="/" class="btn btn-primary"><i class="fa fa-chevron-left"></i></a>
            <h1>Question 2:</h1>
        </div>

    </div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Fibonacci</h1>
            <input type="text" class="form-control" id="fibonacci_number" value="" placeholder="Ingrese un número">
            <div class="pull-right">
                <div id="print" class="text-right"></div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')

    <script>
        $( document ).ready(function() {
            $("#fibonacci_number").change(function(){
                var number = parseInt($(this).val());
                if($.isNumeric(number)){
                    $("#print").empty();
                    fibonacci_series(number);
                } else {
                    $("#print").html("Error, debe de ingresar un número");
                }
            });
        });


        var fibonacci_series = function (n) {
            if (n === 1) {
                var numbers = [0,1]
                $("#print").append("<p><span class='fibo'>["+numbers.toString()+"]</span></p>");
                return numbers;
            } else {
                var numbers = fibonacci_series(n - 1);
                numbers.push(numbers[numbers.length - 1] + numbers[numbers.length - 2]);
                $("#print").append("<p><span  class='fibo'>["+numbers.toString()+"]</span></p>");
                return numbers;
            }
        };
    </script>
@endsection