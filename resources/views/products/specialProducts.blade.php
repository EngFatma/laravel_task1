
<h1> products which their price more than 100 $</h1>
<hr>

@foreach($products as $product)

<h2 style="display:inline">product Name : </h2><span>{{$product->name}}</span>
<h2 style="">product description </h2>
<p>{{$product->desc}}</p>
<h2 style="display:inline">product Price :</h2><span>{{$product->price}}</span>

<hr>
@endforeach 
