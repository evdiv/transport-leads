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
                        {{ getProposal.body }} 
                        <br/>
                        <span class="has-text-grey-light">Added {{ addedAgo }} by </span>
                        <strong><a :href="'/carriers/' + getCarrier.id">
                                {{ getCarrier.name }}</a></strong>
                    </div>

                    <div class="column is-4">

                        <button class="button is-small is-info"
                                @click="toggleProposalDetails()">
                            <i class="fa fa-envelope fa-lg"></i> &nbsp;&nbsp;&nbsp;
                            {{ numberMessages }} Messages
                        </button>

                        <button class="button is-small is-success"
                                @click="toggleProposalDetails()">
                           <i v-if="!displayProposalFullDetails" class="fa fa-plus"></i> 
                           <i v-if="displayProposalFullDetails" class="fa fa-minus"></i> 
                           &nbsp;&nbsp;&nbsp;Show details
                        </button>

                    </div>
                </div>

                <slot v-if="displayProposalFullDetails" name="full-details"></slot>

            </div>
        </article>
    </div>
</template>

<script>

    import ProposalPreview from './proposal-preview.vue'

    export default {

        data() {
            return {
                displayProposalFullDetails: false
            }
        },

        methods: {
            toggleProposalDetails: function() {
                this.displayProposalFullDetails = !this.displayProposalFullDetails; 
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