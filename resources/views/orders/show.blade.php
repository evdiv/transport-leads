@extends('layouts.master')

@section ('content')

    @include('layouts.hero')

        <section class="section">
            <div class="container">
                <div class="content">

                    <!-- Order for Takelaj -->
                    @if(isset($order->takelaj)) 
                        @include('orders.partials.display-takelaj')
                    @endif

                    <!-- Order for Gruzchiki -->
                    @if(isset($order->gruzchiki)) 
                        @include('orders.partials.display-gruzchiki')
                    @endif

                    <!-- Order for Auto and Special Equipment -->
                    @if(isset($order->auto)) 
                        @include('orders.partials.display-auto')
                    @endif


                    <!-- Show Comments -->
                    <ul class="list-group">
                        @foreach($order->comments as $comment)
                            @include('orders.partials.display-comment')
                        @endforeach
                    </ul>
                    <!--/ Show Comments -->



                    <!-- Comments Form -->
                    @if($order->commentsAllowed())

                        <form class="form-horizontal" method="POST" action="/orders/{{ $order->id }}/comments">

                            {{ csrf_field() }}

                            <div class="form-group">

                                <textarea name="body" class="form-control" rows="2"></textarea>

                                <div class='text-right'>
                                    <button type="submit" class='btn btn-primary btn-sm'>Add comment</button>
                                </div>
                            </div>
                            
                        </form>
                    @endif
                    <!--/ Comments Form -->



                    <!-- Proposals from Carriers -->
                    <div class="list-group">
                        @foreach($order->proposals as $proposal)
                            @include('orders.partials.preview-proposal')
                        @endforeach
                    </div>
                    <!--/ Proposals from Carriers -->



                    <!-- Add Proposal from Carrier -->
                    @if($order->showProposalForm)
                        <form-add-carrier-proposal></form-add-carrier-proposal>

                        <form class="form-horizontal" method="POST" action="/orders/{{ $order->id }}/proposals">

                            {{ csrf_field() }}

                            <input type='hidden' name='order_id' value='{{ $order->id }}'/>

                            <div class="form-group">
                                <label class="sr-only" for="amout">Amount (in dollars)</label>
                                
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="text" class="form-control" placeholder="Amount" name="amount">
                                    <div class="input-group-addon">.00</div>
                                </div>

                                <textarea name="body" class="form-control" rows="3"></textarea>

                                <div class='text-right'>
                                    <button type="submit" class='btn btn-success btn-sm'>Add your offer</button>
                                </div>
                            </div>
                            
                        </form>

                    @elseif($order->showProposalButton) 

                        <a href="{{ route('carrier.register') }}" class='pull-right btn btn-success'>Register as Carier for making Proposal</a>
                    @endif
                    <!--/ Add Proposal from Carrier -->

                </div><!--/ .content -->
            </div><!--/ .container -->
        </section><!--/ section-->



@endsection


