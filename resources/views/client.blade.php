<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
         <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" ></script>

        <title>Anandi Wastu</title>
        <style>
            @font-face {
            font-family: 'Mangal', sans-serif;
            font-style: normal;
            font-weight: normal;
            src: url('fonts/Mangal.ttf') format('truetype'); 
        }
        body,p {
            font-family: 'Mangal', sans-serif;
            font-style: normal;
            font-weight: normal;
        }
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
        <div class="container">
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-md-12 text-right mb-2 pb-2">
                                <a href="{{url('add')}}" class="btn btn-primary">Add new</a>
                            </div>
                        </div>
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th width="50">No</th>
                                    <th>Name</th>
                                    <th>DOB</th>
                                    <th>Time</th>
                                    <th>Place</th>
                                    <th>Address</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </body>
            <script type="text/javascript">
            $(function () {
                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ url('getBasicData') }}",
                    columns: [
                        {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'dob', name: 'dob'},
                        {data: 'tob', name: 'tob'},
                        {data: 'pob', name: 'pob'},
                        {data: 'address', name: 'address'},
                        {data: 'mobile', name: 'mobile'},
                        {data: 'email', name: 'email'},

                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
            });
            </script>
    </body>
</html>