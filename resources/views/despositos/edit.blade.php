@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Desposito
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($desposito, ['route' => ['despositos.update', $desposito->id], 'method' => 'patch']) !!}

                        @include('despositos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection