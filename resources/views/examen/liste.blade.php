@extends('gentelella-master2.production.template')
@section('content')
@section('script')

<head>   

<!--<script src="{{asset('js/bootstrap.min.js')}}"></script>-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/datatables.min.js')}}"></script>
    <!--<script type="text/javascript" src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>-->
    <!--<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>-->

    <!--<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">-->
    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">



</head> 

@endsection

<body>
    <div class="" style="">
        <h3 class="titreform">Liste des Examens</h3>
        <div class="titrebarform col-sm-6" ></div>
    </div>
    <br>
    <div class="">
        <a href="{{route('examen.create')}}" class="btn btn-primary" style="border: 1px solid #FFFFFF; background-color: #2a6496; border-radius: 0px;"><i class="glyphicon glyphicon-plus"></i> Nouveau </a>
    </div>
    <div class="" style="">
        <div class="col-sm-10 col-xs-12" >
            <div class=" table-responsive ">
                <table class="table table-striped table-condensed display responsive nowrap" id="table">
                    <thead>
                        <tr style="background-color:#2a6496;color: #FFFFFF;">
                            <th>libelle</th>
                            <th>type</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($examen as $exam)
                        <tr>
                            <td>{{ $exam->libelle }}</td>
                            <td>{{ $exam->type }}</td>

                            <td title="Modifier">
                                <form method="GET" action="{{ route('examen.edit', [$exam->idexamen]) }}">
                                    {{method_field('EDITER') }}
                                    {{ csrf_field() }}
                                    <button style="border: 0px;background-color:" class="text-info" type="submit" ><i class="glyphicon glyphicon-edit"></i></button>
                                </form>
                            </td>
                            <td title="Supprimer">
                                <form method="POST" action="{{ route('examen.destroy', [$exam->idexamen]) }}">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <a ></a>
                                    <button style="border: 0px;background-color:" class="text-danger" type="submit" onclick="return confirm('Confirmer la Suppression')"><i class="glyphicon glyphicon-remove"></i></button>
                                </form>                    
                            </td>

                        </tr>
                        @endforeach      

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
<!--  fin de la liste-->

<div class="modal" id="confirmationta">
    <div class="modal-dialog modal-xs">
        <div class="modal-content" style="background-color :">
            <div class="modal-body">
                <span class="glyphicon glyphicon-exclamation-sign" style="color: #f0ad4e"><label > Supprimer cet &eacutelement ? </label></span>
            </div>
            <div class="modal-footer">
                <a href="#"  class="btn btn-success" data-di  xsiss="modal"><span class="glyphicon glyphicon-ok-sign"></span> OUI</a>
                <a href="#"  class="btn btn-danger" data-di  xsiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> NON</a>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
    $('#table').DataTable();
    });
</script>

@endsection 