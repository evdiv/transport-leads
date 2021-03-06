

        <h1 class="title"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Takelajnie Raboty 
            <span class="tag is-white">
                Created: {{ $order->created_at->diffForHumans() }}
                by &nbsp;<a href="/customers/{{ $order->user_id }}">{{ $order->user->name }}</a>
            </span>
        </h1>


       <p>Required Services: 

            @if (isset($order->takelaj->demontaj)) 
                <span class="tag is-dark"><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;Demontaj</span> 
            @endif

             @if (isset($order->takelaj->montaj)) 
                <span class="tag is-dark"><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;Montaj</span> 
            @endif

            @if (isset($order->takelaj->peremeshenie)) 
                <span class="tag is-dark"><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;Peremeshenie</span> 
            @endif

            @if (isset($order->takelaj->razbor)) 
                <span class="tag is-dark"><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;&nbsp;Razbor Perekritiy</span> 
            @endif  
        </p>


        @if (isset($order->note)) 
            <div class="notification">{{ $order->note }}</div>
        @endif  



        <!-- Display list of cargo -->
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name / Description</th>
                    <th>Length</th>
                    <th>Width</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Qty</th>
                </tr>
            </thead>
            <tbody>

                @php ($cargoCounter = 0)
                @foreach($order->cargos as $cargo)

                    <tr>
                        <td>{{++$cargoCounter }}</td>
                        <td><p>{{ $cargo->name }}<br/>
                            {{ $cargo->description }}</p>
                        </td>

                        <td>{{ $cargo->length }} {{ $cargo->size }}</td>
                        <td>{{ $cargo->width }} {{ $cargo->size }}</td>
                        <td>{{ $cargo->height }} {{ $cargo->size }}</td>
                        <td>{{ $cargo->weight }} {{ $cargo->dimention }}</td>
                        <td>{{ $cargo->quantity }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>  



 