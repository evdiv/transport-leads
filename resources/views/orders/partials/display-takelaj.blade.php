<div class="panel panel-default">

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

            <div class="row">
                <div class="col-sm-6">
                    <!--Display Order Note -->  
                    @if (isset($order->note)) 
                        <p>{{ $order->note }}</p>
                    @endif  
                </div>

                <div class="col-sm-6">

                        @foreach($order->locations as $i => $location)
                            @if ($location->pogruzka) 
                                Loading: <b>{{ $location->name }}</b><br/>
                            
                            @elseif ($i == count($order->locations) - 1)  
                                Unloading: <b>{{ $location->name }}</b><br/> 

                            @else  
                                Transit: <b>{{ $location->name }}</b><br/> 
                            
                            @endif  
                        @endforeach
                </div>    


            </div>

        </div>

        <!-- Display list of cargo -->
          <table class="table">
            <tr>
                <th class="col-md-6">Name / Description</th>
                <th class="col-md-1">Type</th>
                <th class="col-md-1">Weight</th>
                <th class="col-md-1">Length</th>
                <th class="col-md-1">Width</th>
                <th class="col-md-1">Height</th>
                <th class="col-md-1">Qty.</th>
            </tr>

            @foreach($order->cargos as $cargo)
            <tr>
                <td><a href='#'>{{ $cargo->name }}</a><br/>
                    {{ $cargo->description }}
                </td>
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
</div><!--/.col-panel-->