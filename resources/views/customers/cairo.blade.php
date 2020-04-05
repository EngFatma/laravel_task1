
<h1> customers from cairo </h1>
<hr>
@foreach($customers as $customer)


<h2 style="display:inline">  customer Name :    </h2>  <span>{{$customer->customerName}}</span>
<h2 style="display:inline">  customer Email :   </h2> <span>{{$customer->customerEmail}}</span>
<h2 style="display:inline">  customer Phone :   </h2> <span>{{$customer->customerPhone}}</span>
<h2 style="display:inline">  customer City :    </h2>  <span>{{$customer->customerCity}}</span>
<hr>

@endforeach 