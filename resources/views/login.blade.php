<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS-Sikhi</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{ asset("js/jquery-3.6.0.min.js") }}"></script>
    <style>
        body{
            background-color: #EDEDFB;
            font-family:sans-serif;
        }
        .main{
            height: 40rem; 
            width: 75%;
            display: flex;
            margin: 1.4rem auto;
        }
        .info {
            position: relative;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px ;
            height: 40rem; 
            width: 58%; 
            background-image: url("{{asset('sikhi/sikhi.avif')}}"); 
            background-size: cover; 
            background-repeat: no-repeat; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* align-items: center; */
            padding: 5rem;
            box-sizing: border-box;
        }

        .info::before {
            content: "";
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px ;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .info h1 {
            position: relative; 
            z-index: 1; 
            color: white;
            font-size: 3rem;
        }

        .info p {
            position: relative; 
            z-index: 2; 
            color: gray; 
        }
        .info .image-container { 
            position: relative;
            z-index: 1; 
        }  
        .info .image-container img {
            position: relative;
            left: 1rem;
            z-index: 3; 
            height: 2.5rem;
            width: 2.5rem;
            border-radius: 50%;
        } 
        .info .bottom{
            display: flex;
            gap: 3rem;
        }
        .signin{
            height: 40rem;
            width: 42%;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px ;
            background-color: white;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .text-danger{
            font-weight: 600;
            font-size: medium;
            color: white;
            margin-bottom: 0;
            margin-top: 1.1rem;
        }
        .signin .logo img{
            /* margin-top: 3rem; */
            width: 6.5rem;
            height: 6.5rem;
        }
        .signin form{
            display: flex;
            flex-direction: column;
            gap: 2rem;
            width: 70%;
            position: relative;
        }
        .signin form .input{
            display: flex;
            flex-direction: column;
            gap: 0.7rem;
        }
        .signin form .input input{
            padding: 0.7rem 0.9rem;
            border-radius: 5px;
            border: 0.5px solid #C0C0C0;
            outline: none;
        }
        .signin form .checkbox{
            display: flex;
            justify-content: space-between;
        }
        .signin form .checkbox a{
            color: blue;
            text-decoration: none;
        }
        .button{
            padding: 0.9rem 1rem;
            border-radius: 20px;
            border: none;
            outline: none;
            color: white;
            background-color:#0000CD;
            cursor: pointer;
            font-size: 1rem;
        }
        .button:hover{
            transition: all 0.5s;
            background-color:#D3D3D3;
        }
        #loader {
                width: 36px;
                height: 36px;
                border: 5px solid gray;
                border-bottom-color: transparent;
                border-radius: 50%;
                display: inline-block;
                box-sizing: border-box;
                animation: rotation 1s linear infinite;
                position: absolute;
                bottom: 0.4rem;
                left: 9.4rem;
                display: none;
                }

                @keyframes rotation {
                0% {
                    transform: rotate(0deg);
                }
                100% {
                    transform: rotate(360deg);
                }
            }
        .signin p{
            margin-top: 2rem;
        }
    </style>

        
    </head>
    <body>
        <div>
           <div class="main">
            <div class="info">
                <h1>Welcome to Sikhi SMS</h1>
                <p>SMS assists all the members of Sikhi to do a variety of academic
                     and co-curricular tasks with well-designed dashboards packed with gorgeous and in-depth modules.
                     Making this school paperless is our key objective. Enjoy your journey with Sikhi.
                </p>
                <div class="bottom">
                    <div class="image-container">
                        <img src="{{asset('sikhi/sikhi1.jpeg')}}" alt="Sikhi Image 1">
                        <img src="{{asset('sikhi/sikhi2.jpg')}}" alt="Sikhi Image 2">
                    </div>
                    <div class="join">
                        <p>More than 12k students joined us, it's your turn</p>
                    </div>
                </div>
            </div>
            <div class="signin">
                <h5 class="text-danger">
                    {{ session('error') }}
                    .
                </h5>
                <div class="logo">
                    <img src="{{asset('sikhi/logo.png')}}"/>
                    <h1>Sign in</h1>
                </div>
                <form action="{{ route('login.process')}}" method="post">
                    @csrf
                    <div class="input">
                        <label>Email*</label>
                        <input type="email" name="email"/>
                    </div>
                    <div class="input">
                        <label>Password*</label>
                        <input type="password" name="password"/>
                    </div>
                    <div class="checkbox">
                        <div>
                            <input type="checkbox" id="myCheckbox">
                            <label for="myCheckbox" class="checkbox-label">Remember me</label>
                        </div>
                            <a href="" >Forgot Password?</a>
                    </div>
                    <button type="submit" class="button">Sign in</button>
                    <span id="loader"></span>
                </form>
                <p>Web App Version: 2.1.88</p>
            </div>
           </div>
        </div>
        <script>
            $(document).ready(function(){
                $('.button').click(function(){
                    $(this).css({
                        'padding': '0.9rem 1rem',
                        'border-radius': '20px',
                        'border': 'none', 
                        'outline': 'none', 
                        'color': '#D3D3D3',
                        'background-color': '#D3D3D3', 
                        'cursor': 'pointer',
                        'font-size': '1rem'
                    })
                    $('#loader').css({
                        'display': "block"
                    });
                })
                var session="{{ session('error') }}";
                if(session){
                    $('.text-danger').css({
                        'color':'red'
                    })
                }
            })
        </script>
    </body>
</html>
