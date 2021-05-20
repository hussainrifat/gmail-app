<html lang="en">
<head>

    <title>Gmail Style Inbox page  - coderglass</title>
    <link href="{{ asset('gmail/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('gmail/css/tab.css') }}" rel="stylesheet" id="bootstrap-css">
    <script src="{{ asset('gmail/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('gmail/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $( document ).ready(function() {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage( iframe_height, 'https://coderglass.com');
        });
    </script>


<style>
    .dropdown-menu {
    width: 450px !important;
    height: 200px !important;
}
</style>
</head>
<body>

<div class="container">
    <div class="row">
       
        
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <a href="#" class="btn btn-danger btn-sm btn-block" role="button">COMPOSE</a>
            <hr />
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="{{url('/messages')}}"><span class="badge pull-right">{{$count}}</span> Inbox </a>
                </li>
                <li><a style='color:black;' href="http://www.coderglass.com">Starred</a></li>
                <li><a style='color:black;' href="http://www.coderglass.com">Important</a></li>
                <li><a style='color:black;' href="http://www.coderglass.com">Sent Mail</a></li>
                <li><a style='color:black;' href="http://www.coderglass.com">
                        <span class="badge pull-right">445</span>Drafts</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10 mr-auto">
     
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
   
                            <span style="font-size: 22px; font-family: sans-serif; font-weight:400px" class="glyphicon ">{{$mail->getSubject()}}</span>
                            <span class="name" style="min-width: 120px; display: inline-block;"></span>
                            <span class="badge">{{$mail->getFromName()}}</span>
               
                    </div>
                    <div class="container">
                        <span style="font-size: 15px;font-family:sans-serif" class="badge">{{$mail->getFromName()}}</span>
                        <span style="font-size: 12px;font-family:roboto; font=weight:100px" class="badge"> < {{$mail->getFromEmail()}} > </span>
                        <a hef="" style="font-size: 12px;font-family:roboto; font=weight:100px"><u>Unsubscribe</u></a>
         
                </div>

                <div class="container">
                    <span style="font-size: 12px;font-family:roboto" class="badge">To me</span>   
                    <div class="btn-group">
                     
                        <button type="button" class="btn btn-default dropdown-toggle col-md-10" data-toggle="dropdown">
                            <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" style="padding-left: 20px; padding-top:20px;font-size:14px" role="menu">
                            <li><span>from    <b>{{$mail->getFromName()}}</b> < {{$mail->getFromEmail()}} ></span></li>
                            <li><span>reply-to    {{$mail->getFromName()}} < {{$mail->getFromEmail()}} ></span></li>
                            <li><span>to    {{$mail->getDeliveredTo()}} </span></li>
                            <li><span>date    {{$mail->getDate()}} </span></li>
                            <li><span>subject    {{$mail->getSubject()}} </span></li>


                        </ul>
                    </div>  
            </div>

                <div class="col-lg-8 col-md-8">
                    <div class="product-dt-right">
                      
                    
                        <p class="pp-descp">{!!$mail->getHtmlBody()!!}</p>
                
                    </div>
                </div>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
