<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>US Quiz</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                // event listeners
                $("button").on( "click", gradeQuiz);
                
                // functions
                function isFormValid(){
                    let isValid = true;
                    if($("#q1").val() == ""){
                        isValid = false;
                        $("#validationFdbk").html("Question 1 not answered");
                    }
                    return isValid;
                }
                
                function gradeQuiz(){
                    $("#validationFdbk").html(""); // reset validation feedback
                    if (!isFormValid()){
                        return;
                    }
                }
            })
        </script>
    </head>
    <body class="text-center">
        <h1 class="jumbotron">US Geography Quiz</h1>
        
        <h3>What is the capital of California?</h3>
        <input type="text" id="q1">
        <br/><br/>
        <button class="btn btn-info">Submit Quiz</button>
    </body>
</html>