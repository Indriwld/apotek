[08.20, 27/11/2021] Indri: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('backend/css/metisMenu.min.css')}}" rel="stylesheet">


    <!-- Timeline CSS -->
    <link href="{{asset('backend/css/timeline.css')}}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{asset('backend/css/startmin.css')}}" rel="stylesheet">


    <!-- Morris Charts CSS -->
    <link href="{{asset('backend/css/morris.css')}}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{asset('backend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            {{--NAVBAR--}}
            @include('layouts.bagian.navbar')
            {{--/NAVBAR--}}

            {{-- SIDEBAR --}}
            @include('layouts.bagian.sidebar')
            {{-- /SIDEBAR --}}






        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Obat</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                {{-- table --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tambah Data
                            </div>
                            <form Action="{{ route('obat.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                 <div class="panel-body">
                                     <label>Nama Supplier</label>
                                     <select name="id_supplier" class="form-control">
                                        @foreach($supplier as $data)
                                            <option value="{{$data->id}}">{{$data->nama}}</option>
                                        @endforeach
                                        </select>
                                 </div>
                                 <div class="panel-body">
                                    <label>Jenis Obat</label>
                                    <input type="text" class="form-control" name="jenis_obat">
                                </div>
                                  <div class="panel-body">
                                      <label>Nama Obat</label>
                                      <input type="text" class="form-control" name="nama_obat">
                                  </div>
                                   <div class="panel-body">
                                       <label>Stok</label>
                                       <input type="text" class="form-control" name="stok">
                                   </div>
                                <div class="panel-body">
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                        {{-- /.panel --}}
                    </div>
                    {{-- /.col-lg-12 --}}
                </div>
                {{-- /table --}}



            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('backend/js/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('backend/js/raphael.min.js')}}"></script>

    <script src="{{asset('backend/js/morris.min.js')}}"></script>

    <script src="{{asset('backend/js/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('backend/js/startmin.js')}}"></script>



</body>
</html>
