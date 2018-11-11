@extends('layouts.master')

@section ('content')

        <section class="section">
            <div class="container">
                <div class="content">

                    <div class="columns">
                        <div class="column is-8">

                            @include('flash::message')
                            @include('layouts.errors')

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

                
                            <!-- List of Comments  -->
                            @include('orders.partials.display-comment')
                            <!--/ List of the Comments -->


                            <!-- Add Comment Form -->
                            @if($order->areCommentsAllowed()) 
                                @include('orders.partials.add-comment')
                            @endif
                            <!--/ Add Comment Form -->

                        </div><!--/ .column is-8-->



                        <div class="column is-4" style='background-color: #edfbfc;'>

                            <!-- Display Loading and Destination Locations -->
                            <p style="font-size: 12px;">
                                @foreach($order->locations as $location )
                                    
                                    @if ($location->pogruzka > 0) 
                                        <i class="fa fa-map-marker has-text-danger" aria-hidden="true"></i> 
                                            Loading at: {{ $location->city }}, {{ $location->address }} 
                                    @else
                                            <br/><i class="fa fa-map-marker has-text-danger" aria-hidden="true"></i> 
                                            Move to:  {{ $location->city }}, {{ $location->address }} 
                                    @endif  

                                @endforeach
                            </p>
                        </div>

                    </div><!--/ .columns-->


                    <!-- List of Proposals -->
                        @foreach($order->proposals as $proposal)
                            @include('orders.partials.preview-proposal')
                        @endforeach
                    <!--/ List of Proposals -->



                    <!-- Add Proposal from Carrier -->
                    @if($order->showProposalForm)
                        @include('orders.partials.add-proposal')
                    
                    @elseif($order->showProposalButton) 
                        <a href="/carriers/register" class='pull-right button is-success'>
                            Register as Carier for making Proposal
                        </a>
                    @endif
                    <!--/ Add Proposal from Carrier -->

                </div><!--/ .content -->
            </div><!--/ .container -->
        </section><!--/ section-->



@endsection


