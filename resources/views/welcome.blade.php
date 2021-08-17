<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{asset('js/jquery.min.js')}}" ></script>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        
        <title>Anandi Wastu</title>
        <style>
            .logo{
                height:60px;
                margin:4px 8px 4px 8px;
            }
            .header{
                background:#e6e6e6 ;
                width:100%;
                display: flex;
                flex-direction:row;
                align-items:center;
            }
            .centerFlex{
                display: flex;
                flex-direction:row;
                justify-content: center;
            }
            .centerFlexCol{
                display: flex;
                flex-direction:column;
                justify-content: center;
                align-items: center;
            }
            .mrow{
                display: flex;
                flex-direction:row;
                justify-content: space-between;
                width:100%;
            }
            .mrow > div{
                    width:100%;
                }
            body{
                margin:0;
                
            }
            h3{
                text-align:center;
                width:100%
            }
            .middle{
                width:100%;
            }
            .card{
                width:50%;
                padding:20px;
                margin-top:20px;
                background: #E8E8E8;
            }
            label,input,textarea{
                display: block;
                width:100%;
                padding:4px;
            }
            button,img{
                display: block;
            }
            .photo{
                margin:8px;
                height:100px;
            }
            .mb-4{
                margin-bottom:40px;
            }


                .shell {
                position: relative;
                line-height: 1; }
                .shell span {
                    position: absolute;
                    left: 3px;
                    top: 1px;
                    color: #ccc;
                    pointer-events: none;
                    z-index: -1; }
                    .shell span i {
                    font-style: normal;
                    /* any of these 3 will work */
                    color: transparent;
                    opacity: 0;
                    visibility: hidden; }

                input.masked,
                .shell span {
                font-size: 16px;
                font-family: monospace;
                padding-right: 10px;
                background-color: transparent;
                text-transform: uppercase; }
        </style>
    </head>
    <body >
        <div class="header">
            <div>
                <img class="logo" src="{{asset('imgs/logo.png')}}"> 
            </div>
            <div class='middle'>
                <h3 >Client Registration Portal<h3>
            </div>
            <div style=" margin-left: auto;order: 2;">
                <img class="logo" src="{{asset('imgs/logo.png')}}"> 
            </div>

        </div>
        <div class="centerFlex">
            <div class="card">
                <form action="submitClient" method="post" >
                    {{csrf_field()}}
                    <div>
                        <h3>Customer details</h3>
                        <label>Name</label>
                        <input name="name">
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Date Of Birth</label>
                                <input name="dob" type="date">
                            </div>
                            <div style="margin-left:10px">
                                <label>Time Of Birth</label>
                                <input name="tob" id="tob" placeholder="HH:MM AM/PM" >
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Mobile</label>
                                <input name="mobile">
                            </div>
                            <div style="margin-left:10px">
                                <label>Email</label>
                                <input name="email">
                            </div>
                        </div>
                        <br>
                        <div >
                            <label>Address</label>
                            <textarea name="address" rows="5"></textarea>
                        </div>
                        <br>
                        <div class="mrow mb-4">
                            <div style="margin-right:10px">
                                <label>Photo</label>
                                <button type="button" data-toggle="modal" data-target="#exampleModal" onClick="startWebCam()">Add now</button>
                                <img class="photo" id="p1_photo" src="{{asset('imgs/noimg.jpg')}}"> 
                                <input type="hidden" name="photo">
                            </div>
                            <div style="margin-left:10px">
                                <label>Finger Print</label>
                                <button>Add now</button>
                                <img class="photo" name="p1_finger" src="{{asset('imgs/noimg.jpg')}}"> 

                                <input type="hidden" name="fingerprint">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div>
                        <h3>Co-Customer 1 details</h3>
                        <label>Name</label>
                        <input name="name1">
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Date Of Birth</label>
                                <input name="dob1">
                            </div>
                            <div style="margin-left:10px">
                                <label>Time Of Birth</label>
                                <input name="tob1" placeholder="HH:MM AM/PM" >
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Mobile</label>
                                <input name="mobile1">
                            </div>
                            <div style="margin-left:10px">
                                <label>Email</label>
                                <input name="email1">
                            </div>
                        </div>
                        <br>
                        <div >
                            <label>Address</label>
                            <textarea name="address1" rows="5"></textarea>
                        </div>
                        <br>
                        
                    </div>
                    <hr>

                    <div>
                        <h3>Co-Customer 2 details</h3>
                        <label>Name</label>
                        <input name="name2">
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Date Of Birth</label>
                                <input name="dob2" type="date">
                            </div>
                            <div style="margin-left:10px">
                                <label>Time Of Birth</label>
                                <input name="tob2" placeholder="HH:MM AM/PM" >
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Mobile</label>
                                <input name="mobile2">
                            </div>
                            <div style="margin-left:10px">
                                <label>Email</label>
                                <input name="email2">
                            </div>
                        </div>
                        <br>
                        <div >
                            <label>Address</label>
                            <textarea name="address2" rows="5"></textarea>
                        </div>
                        <br>
                        
                    </div>
                    <hr>

                    <div>
                        <h3>Co-Customer 3 details</h3>
                        <label>Name</label>
                        <input name="name3">
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Date Of Birth</label>
                                <input name="dob3">
                            </div>
                            <div style="margin-left:10px">
                                <label>Time Of Birth</label>
                                <input name="tob3" placeholder="HH:MM AM/PM" >
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Mobile</label>
                                <input name="mobile3">
                            </div>
                            <div style="margin-left:10px">
                                <label>Email</label>
                                <input name="email3">
                            </div>
                        </div>
                        <br>
                        <div >
                            <label>Address</label>
                            <textarea name="address3" rows="5"></textarea>
                        </div>
                        <br>
                        
                    </div>
                    <hr>
                    <div class="text-center">
                        <button class="btn btn-primary">Submit & Generate form</button>
                    </div>
                    
                </form>
            </div>
        </div>
        
        <script src="{{asset('js/mask.js')}}" data-autoinit="true"></script>
        <script src="{{asset('js/webcam.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}" ></script>
        

        <!-- Code to handle taking the snapshot and displaying it locally -->
        <script language="JavaScript">
            var img_data="";
            function take_snapshot() {
                // take snapshot and get image data
                Webcam.snap( function(data_uri) {
                    $('#camblock').hide();
                    $('#camblockret').show();
                    img_data=data_uri;
                    $('#p1_photo').value(img_data);
                    // display results in page
                    document.getElementById('results').innerHTML = 
                        '<h2>Captured image</h2>' + 
                        '<img src="'+data_uri+'"/>';
                } );
            }
           
            function startWebCam() {
                $('#camblockret').hide();
                $('#camblock').show();
                Webcam.set({
                            width: 320,
                            height: 240,
                            image_format: 'jpeg',
                            jpeg_quality: 90
                });
                Webcam.attach( '#my_camera' );
               
            }

            function saveImg() {
                $("#p1_photo").attr("src",img_data);
            }

        </script>
        
       

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Webcam Capture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="centerFlexCol mb-2" id="camblock">
                       
                        <div id="my_camera"></div>
                        <button class="btn btn-primary mt-2" value="Take Snapshot" onClick="take_snapshot()">Take Snapshot</button>
                    </div>
                   
                    <div class="centerFlexCol mb-2" id="camblockret">
                        <div id="results"></div>
                       <button class="btn btn-primary mt-2" onClick="startWebCam()">Retake</button>
                   </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="saveImg()">Save changes</button>
            </div>
            </div>
        </div>
    </div>
        
        

    </body>
</html>
