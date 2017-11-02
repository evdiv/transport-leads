    <div class="panel-heading">

        <h3 class="panel-title">
        <a href="{{ route('order.show', $order->id) }}">Такелажные работы</a></h3>

    </div>

    <div class="panel-body">
                    
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
    

        <br/> Order added at {{ $order->created_at }}
        <br/> Proposals: <span class="badge">{{ count($order->proposals) }}</span>

        @if($order->in_process)
            <div class="pull-right">
                <i class="fa fa-chevron-circle-down fa-2x text-success" aria-hidden="true"></i>
            </div>

        @endif
    </div>   