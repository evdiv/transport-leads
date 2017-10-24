<div class="panel-heading">
        <h3 class="panel-title">
        <a href="{{ route('order.show', $order->id) }}">Такелажные работы</a>  {{ $order->created_at }} </h3>
                    
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