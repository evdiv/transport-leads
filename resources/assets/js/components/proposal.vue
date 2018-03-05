<template>
    <div>
        <article class="message is-success">
            <div class="message-body">

                <div class="columns">

                    <div class="column is-2">
                        <span style="font-size: 42px;">{{ getProposal.amount }}</span>
                        <span style="font-size: 18px;">USD</span>

                        <div v-if="getProposal.accepted === 1" class="tag is-rounded is-success">           Proposal accepted
                        </div>

                    </div>

                    <div class="column is-7">
                        <strong><a :href="'/carriers/' + getCarrier.id">
                                {{ getCarrier.name }}</a></strong>
                        
                        <br/>{{ getProposal.body }}
                        <br/>
                        <small><span class="tag">Proposal added on {{ addedAgo }}</span></small>
                    </div>

                    <div class="column is-4">

                        <button class="button is-info">
                            <i class="fa fa-envelope fa-lg"></i> &nbsp;&nbsp;&nbsp;
                            <div class="tag is-rounded is-white"> {{ numberMessages }} </div>
                        </button>

                        <button class="button is-success"
                                @click="">
                           <i class="fa fa-plus"></i> &nbsp;&nbsp;&nbsp;Show details
                        </button>

                    </div>
                </div>

                <hr/>

                <slot name="full-details"></slot>

            </div>
        </article>
    </div>
</template>

<script>

    import ProposalPreview from './proposal-preview.vue'

    export default {

        data() {
            return {
                displayProposalDetails: false
            }
        },

        methods: {
            toggleProposalDetails: function() {
                this.displayProposalDetails = true; 
            }
        },

        computed: {
            getProposal() {
                return JSON.parse(this.proposal);
            },
            getCarrier() {
                return JSON.parse(this.carrier);    
            }
        },        

        props: ['proposal', 'carrier', 'added-ago', 'number-messages']
    }
</script>