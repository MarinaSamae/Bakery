@extends('products.layout')

@section('content')
<header class="header_area">
            <div class="main_menu">
           
<p>
<a class="" href="/"><img src="img/logo.png" alt="">
</a>
</p>
            </div>

</header>

<div class="main_title">
        			<h2></h2>
    </div>

    <div class="pull-right">
    
<a class="button3" href="{{ route('products.create') }}"> Create New Product</a>

    </div>
           

	<div class="main_title">
        			<h2>Our Menu</h2>
    </div>
    

   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <main>
    <table>
    <thead>
      <tr>
       
       
   
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
      </tr>
        @foreach ($products as $product)
       
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>

            
           
  
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <td class='select'>
                    <a class="button" href="{{ route('products.show',$product->id) }}">Show</a>
               
                    <a class="button1" href="{{ route('products.edit',$product->id) }}">Edit</a>
             
                    @csrf
                    @method('DELETE')
                  
                    <button type="submit" class="button2">Delete</button>
                    </a>
        </td>
                </form>
           
        </tr>
      
      </tr>
    
 
        @endforeach
        </thead>
    <tfoot>
    </table>
  
    {!! $products->links() !!}
      
@endsection