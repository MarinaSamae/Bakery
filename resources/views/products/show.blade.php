@extends('products.layout')
@section('content')


<div class="jumbotron text-center">
<section class="menu_area pad_top">
        	<div class="container">
        		<div class="main_title">
        			<h2>MENU DETAIL </h2>
  
            
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
        </div>
    </div>
   
    
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
    </th>
      </tr>
    </tfoot>
@endsection