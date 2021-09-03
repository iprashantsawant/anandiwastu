<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
                        <label>Name *</label>
                        <input name="name" placeholder="Customer name" required>
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Date Of Birth *</label>
                                <input name="dob" type="date" placeholder="DOB" required>
                            </div>
                            <div style="margin-left:10px">
                                <label>Time Of Birth *</label>
                                <input name="tob" id="tob" placeholder="HH:MM AM/PM" required>
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div >
                                <label>Place Of Birth *</label>
                                <input name="pob" placeholder="Place name"  required>
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Mobile *</label>
                                <input name="mobile" placeholder="Mobile" required>
                            </div>
                            <div style="margin-left:10px">
                                <label>Email *</label>
                                <input name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <br>
                        <div >
                            <label>Address *</label>
                            <textarea name="address" rows="5" placeholder="Address" required></textarea>
                        </div>
                        <br>
                        <div class="mrow mb-4">
                            <div style="margin-right:10px">
                                <label>Photo *</label>
                                <button type="button" data-toggle="modal" data-target="#exampleModal" onClick="startWebCam()">Add now</button>
                                <img class="photo" name="p1_photo" id="p1_photo" src="{{asset('imgs/noimg.jpg')}}"> 
                                <input type="hidden" name="photo" id="photo" required>
                            </div>
                            <div style="margin-left:10px">
                                <label>Finger Print *</label>
                                <button type="button" class="capture">Add now</button>
                                <img class="photo" name="p1_finger" id="p1_finger" src="{{asset('imgs/noimg.jpg')}}"> 
                                <input type="hidden" name="fingerprint" id="fingerprint" required>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div>
                        <h3>Co-Customer 1 details</h3>
                        <label>Name</label>
                        <input name="name2">
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Date Of Birth</label>
                                <input name="dob2">
                            </div>
                            <div style="margin-left:10px">
                                <label>Time Of Birth</label>
                                <input name="tob2" placeholder="HH:MM AM/PM" >
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div >
                                <label>Place Of Birth</label>
                                <input name="pob2" placeholder="Place name" >
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
                        <h3>Co-Customer 2 details</h3>
                        <label>Name</label>
                        <input name="name3">
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Date Of Birth</label>
                                <input name="dob3" type="date">
                            </div>
                            <div style="margin-left:10px">
                                <label>Time Of Birth</label>
                                <input name="tob3" placeholder="HH:MM AM/PM" >
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div >
                                <label>Place Of Birth</label>
                                <input name="pob3" placeholder="Place name" >
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

                    <div>
                        <h3>Co-Customer 3 details</h3>
                        <label>Name</label>
                        <input name="name4">
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Date Of Birth</label>
                                <input name="dob4">
                            </div>
                            <div style="margin-left:10px">
                                <label>Time Of Birth</label>
                                <input name="tob4" placeholder="HH:MM AM/PM" >
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div >
                                <label>Place Of Birth</label>
                                <input name="pob4" placeholder="Place name" >
                            </div>
                        </div>
                        <br>
                        <div class="mrow">
                            <div style="margin-right:10px">
                                <label>Mobile</label>
                                <input name="mobile4">
                            </div>
                            <div style="margin-left:10px">
                                <label>Email</label>
                                <input name="email4">
                            </div>
                        </div>
                        <br>
                        <div >
                            <label>Address</label>
                            <textarea name="address4" rows="5"></textarea>
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
        <script src="{{asset('js/jquery.min.js')}}" ></script>
        <script src="{{asset('js/mask.js')}}" data-autoinit="true"></script>
        <script src="{{asset('js/webcam.min.js')}}"></script>
        <script src="{{asset('js/fingerprint.js')}}"></script>
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
                    document.getElementById("p1_photo").value=img_data;
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
                document.getElementById("photo").value=img_data;
                document.getElementById("fingerprint").value=img_data;
            }

        </script>
        <script type="text/javascript">
         var lastClickedCaptureButtonId;

         $(document).ready(function(){

                 $(this).on('click','.capture',function() {

                         $(".result").html('');
                         lastClickedCaptureButtonId = $(this).attr('for');
                         $("#"+lastClickedCaptureButtonId ).css("background-image","");
                         $("#"+lastClickedCaptureButtonId ).attr("tmpl","");
                         var apiKey = "wrFqwrJywrHDilPDi3vCg8KiU8OSCsKjwqJKEsOBK8KZY8KCGsKTwrpCwonCoVsiwoPDi8K7wqMTwoPDi1pqI8KRwporwoJ6SzNzwrEywptTOsOSw5LCikNDwpMyw4PCqcKhW1sSw4JDw4nCiztzEhJyQzPCmsODwqrCoRt6woEqM1nCicKZwot7ajPCu8OBw4vCi8K6UsOLU8Kja0tzwqtaw4tLK8OBw4M7e8KjC8KKa2LCgcKaGsKieyvCkivCqcOTcsKJE8OKMsKZa1vCqyvCiXpzwrEiWcOSUsKqwpnCg8OCM2saEsOKwqJZMsOKwrrDisKDK8OBCsKhwrnCscKiC8KCCsOTwpvCg8OKQ8KaO8KjwpHCqcKawrnCoVvCgcOTWXM7asOLwpIqwrISw4LCqcKqwoLCicOBQ8K6wprCiQvCs8ODCll5wpLCmiPDkzt6GgozwonDgsKySmLDk8KzwoHCuUN7woHCollbwoLCmmoKamoTwpILWsKqwqPDgQo6e8OKwpnCoTtrWcOBwrNawqPCm1nCq8KJEsKLwop5eUvDiTMyw4LCkToaKxPCqlJiOsKKwrs6wprDgXPDg0NZwoLCqmPCgcK7wonCmTPCssKCw4kSwpPCunvCgVJrwrlLwonCgcK6wpJTecK6akp5IsKJwrHCqcKqWSPCo2pDw5IzO8OCw5JbOhPDkwtLKiM6C8KawrHCoTvCucKhOsKRE8KhSmrDihPCk8K5EiI6QzPCusKSOsOBwrPDisOSwrvDiiPCi8KzwrMTOno6wpPDk8KBw4JZKgrDgsKhw4PCkUorwrFicxtiWSo6W8KbE8KrWiJrwrF6wpLDi8KCw4EiIzsTM8KaEisic0ILM8OLwqsawrJ7wonCmXLDksKaMllawpHDijJKw4tZYsKhW8KrQno6IlPCusKiWmPCisOBwpt6wrNCQnsbC3rDk1NTw5PCqWoiM1obC0tjwoJSeipZwop7wrLCgTp5wqEjwpnCisKqwpkqesKzwqPCs8KywqFia2tbw5PCscKrO8OBwrHCshPCoQvDgcKCE8K5Q8KSwrnCo8KBIsKJCiLCs8OCw5JSIyI6wpvCicOKw4vCgsKqWxLCuTPCmcOTc8KjckrCiTtyOzN5C3szSzPDk8KiwqPDicKxwqoacsK7w6nDqcKrBUFBWTQ=";

                         var returnPNGImage = true; // returns PNG image along with the template. Setting it to false, returns only template
                         alert("Keep your finger on scanner");
                         capture(apiKey, returnPNGImage);

                 });

                 $(this).on('click','.compare',function() {

                         $(".result").html('');
                         var temlate1 = $("#box1").attr('tmpl');
                         var temlate2 = $("#box2").attr('tmpl');
                         var apiKey = $("#apikey").val();
                         compare(apiKey,temlate1,temlate2);

                 });

                 $(this).on('click','.get-servicetagid',function() {
                         $(".result").html('');
                         getServiceTagId();
                 });

                 });

                 function onSuccess(data)
                 {
                 // console.log(data);
                         var plainData = data;
                         //write the program to decrypt if security key is set in API monitor for the scanner

                         var successData = getScannerSuccessData(plainData);
                         console.log(successData);
                         if(successData.operation =="Capture")
                         {
                                alert("Finger Print scanned successfully");
                                var pngImageContent = "data:image/png;base64," + successData.image;
                                 //console.log(pngImageContent);
                                document.getElementById("p1_finger").src=pngImageContent;
                                console.log(document.getElementById("p1_finger").src);
         //                         $("#"+lastClickedCaptureButtonId ).css("background-image", "url('"+ pngImageContent + "')");
         //                         $("#"+lastClickedCaptureButtonId ).attr("tmpl",successData.template);
								 // if(lastClickedCaptureButtonId == 'box1')
								 // {
									// $('#f1score').html("Quality score :"+successData.qualityScore);
								 // }

								 // if(lastClickedCaptureButtonId == 'box2')
								 // {
									// $('#f2score').html("Quality score :"+successData.qualityScore);
								 // }
                         }
                         else if(successData.operation =="Compare")
                         {
                                 $("#score").text("Score: "+successData.matchScore);
                         }
                         else if(successData.operation == "GetServiceTagId")
                         {
                                 $("#servicetagid").html("servicetagid: "+successData.serviceTagId);
                         }

                 }

                 function onFailure(data)
                 {
                         var failureData = getScannerFailureData(data);
                         //console.log(failureData.opeartion);

                         $("#error-text").html("Error </br> ["+failureData.errorCode+"] "+failureData.errorString);
						 $('f1score').html('');
						 $('f2score').html('');

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
