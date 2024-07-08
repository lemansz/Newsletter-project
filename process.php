<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Complete!</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        body{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(22, 29, 54, 0.899);
            padding-top: 10em;
        }
        .parent{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: none;
            border-radius: 18px;
            padding-right: 2em;
            padding-left: 2em;
            height: 23em;
            width: 22em;
        }

        .tick{
            /* border: 1px solid yellow; */
            height: 16%;
            min-width: 100%;
            background: url(icon-success.svg);
            background-repeat: no-repeat;
            align-self: flex-start;
            position: relative;
            /* margin-top: 1em; */
        }

        .text-area{
            min-height: 70%;
            /* margin-top: 1em; */
        }
        .btn{
            padding: 1.3em;
            min-width: 100%;
            border: none;
            border-radius: 6px;
            color: white;
            background-color: hsla(227, 42%, 11%, 0.899);
            font-family: "Roboto", sans-serif;
            font-style:normal;
            font-weight: 500;
            
            
        }
        .btn:hover{
            cursor: pointer;
            cursor: pointer;
            background: linear-gradient(to right , hsl(340, 75%, 63%), hsl(370, 100%, 65%));
            box-shadow: 1px 8px 18px hsl(370, 100%, 85%);
        }
        .appreciation{
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style:normal;
           
           
        }
        .message{
            font-size: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;
            font-family: 'Times New Roman', Times, serif;
        }
        @media screen and (max-width: 40rem){
            body{
                padding: 0;
                margin: 0;
                overflow: hidden;
               
            }
            .parent{
                height: 100vh;
                border-radius: 0;
                padding-bottom: 5em;
                width: 100%;
                /* padding-top: 2em; */
                
            }
            .tick{
                margin-top: 8em; 
            }
            .appreciation{
                margin-bottom: 0rem;
                margin-top: 0;
            }
            .text-area{
                margin-top: 0rem;
            }
            .message{
                max-height: 3.43rem;
                margin-bottom: 14rem;
            }
        }
    </style>
</head>
<body>
    <div class="parent">
        <div class="tick"></div>
        <div class="text-area">
            <h1 class="appreciation">Thanks for <br> subcribing!</h1>

            <p class="message">A confirmation email as been sent to <b>leke@gmail.com</b>. 
            Please open it and click the button inside to confirm your subscription</p>
            <button class="btn" onclick="history.back()">Dismiss message</button>
        </div>
    </div>
</body>
</html>

