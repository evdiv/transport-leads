<div class="panel-heading">
        <h3 class="panel-title">
        Takelajnie Raboty was created at {{ $order->created_at }} </h3>
                    
        <!-- Display required services -->
        @if (isset($order->takelaj->demontaj)) 
            <span class="label label-info">Demontaj</span>
        @endif

         @if (isset($order->takelaj->montaj)) 
            <span class="label label-info">Montaj</span>
        @endif

        @if (isset($order->takelaj->peremeshenie)) 
            <span class="label label-info">Peremeshenie</span>
        @endif

        @if (isset($order->takelaj->razbor)) 
            <span class="label label-info">Razbor Perekritiy</span>
        @endif  

    </div>   

    <div class="panel-body">

        <div class="alert">

        <!--Display Order Note -->  
        @if (isset($order->note)) 
            <p>{{ $order->note }}</p>
        @endif  

        </div>

        <!-- Display list of cargo -->
          <table class="table">
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Weight</th>
                <th>Length</th>
                <th>Width</th>
                <th>Height</th>
                <th>Qty.</th>
            </tr>

            @foreach($order->cargos as $cargo)
            <tr>
                <td>{{ $cargo->name }}</td>
                <td>Type</td>
                <td>{{ $cargo->weight }}</td>
                <td>{{ $cargo->length }}</td>
                <td>{{ $cargo->width }}</td>
                <td>{{ $cargo->height }}</td>
                <td>{{ $cargo->quantity }}</td>
            @endforeach
            </tr>
          </table>
    </div>