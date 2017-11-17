@extends('layouts.base')
@section('title','Detalles de paciente')
@section('panel_title')
<h5><a class="btn btn-sm btn-primary" href="{{route('patients_index')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Volver a Lista de Pacientes</a></h5>
@endsection
@section('content')
<div class="container">

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#datos">Datos personales</a></li>
  <li><a data-toggle="tab" href="#historial">Historial</a></li>
  <li><a data-toggle="tab" href="#fotografias">Fotografías</a></li>
  <li><a data-toggle="tab" href="#docs">Documentos</a></li>
</ul>

<div class="tab-content">
  <div id="datos" class="tab-pane fade in active">
    <p>
    <h3>Datos personales</h3>
@can('modificar_pacientes')
    <a href="{{route('edit_patient_form',$patient->id)}}" class="btn btn-xs btn-warning">Modificar Datos Personales</a>
@endcan    
    </p>

<div class="col-md-8">

    <table class="table">
    	<tbody>
    		<tr>
    			<th class="col-md-3">Nombre</th>
    			<td>{!!$patient->name!!}</td>
    		</tr>
        <tr>
          <th>Apellido</th>
          <td>{!!$patient->lastname!!}</td>
        </tr>
        <tr>
          <th>Género</th>
          <td style="text-transform: capitalize;">{!!$patient->gender?$patient->gender:"<span style='color:gray'>- no especificado -</span>"!!}</td>
        </tr>
    		<tr>
    			<th>Fecha de nacimiento (d/m/y)</th>
    			<td>{!!$patient->birthday?Carbon\Carbon::parse($patient->birthday)->format('d/m/Y'):"<span style='color:gray'>- no especificado -</span>"!!}</td>
    		</tr>
    		<tr>
    			<th>Edad (años)</th>
    			<td>{!!$patient->age()?$patient->age():"N/D"!!}</td>
    		</tr>
    		<tr>
    			<th>RUT</th>
    			<td>{!!$patient->rut!!}</td>
    		</tr>
    		<tr>
    			<th>Teléfono</th>
    			<td>{!!$patient->phone?$patient->phone:"<span style='color:gray'>- no especificado -</span>"!!}</td>
    		</tr>
    		<tr>
    			<th>E-mail</th>
    			<td>{!!$patient->email?$patient->email:"<span style='color:gray'>- no especificado -</span>"!!}</td>
    		</tr>
    		<tr>
    			<th>Dirección</th>
    			<td style="text-transform: capitalize;">{!!$patient->address?$patient->address:"<span style='color:gray'>- no especificado -</span>"!!}</td>
    		</tr>

    	</tbody>
    </table>
</div>
<div class="col-md-4">
	<img id="patient_picture" style="border:black 2px solid;border-radius: 10px;" alt="avatar" width="200" height="200" src="{{asset('patient_pictures/'.$patient->picture)}}" >
</div>    

  </div>
  <div id="historial" class="tab-pane fade">
    <h3>Historial</h3>
    <p>Proximamente...</p>
  </div>
  <div id="fotografias" class="tab-pane fade">
    <h3>Fotografías</h3>
    <p>Proximamente...</p>
  </div>
  <div id="docs" class="tab-pane fade">
    <h3>Documentos</h3>
    <p>Proximamente...</p>
  </div>
</div>	

</div>
@endsection