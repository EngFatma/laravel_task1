
<h1>All products</h1>

    @foreach($products as $product)
   
    <h2>product Name : <span>{{$product->name}}</span></h2>
    <h2>product description </h2>
    <p>{{$product->desc}}</p>
    <h2>product Price :{{$product->price}}</h2>
    
    <hr>
@endforeach 

