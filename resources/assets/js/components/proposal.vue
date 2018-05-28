<template>
    <div style='margin: 4px 0;'>
        <article class="message is-link">
            <div class="message-body">

                <div class="columns">

                    <div class="column is-2">
                        <span style="font-size: 42px;">{{ getProposal.amount }}</span>
                        <span style="font-size: 18px;">USD</span>
                        
                        <slot name="acceptProposal"></slot>

                    </div>

                    <div class="column is-10">
                        {{ getProposal.body }} 
                        <br/>
                        <span class="has-text-grey-light" style="font-size: 12px;">
                            Added {{ addedAgo }} by 
                            <a :href="'/carriers/' + getCarrier.id">{{ getCarrier.name }}</a>
                         </span>

                        <slot name="proposalMessages"
                            :messageFormDisplay="messageFormDisplay"
                            :toggleMessageFormDisplay="toggleMessageFormDisplay"></slot>

                    </div>                


                </div>

            </div>
        </article>
    </div>
</template>

<script>

    export default {

        data() {
            return {
                messageFormDisplay: false,
            }
        },

        methods: {
            toggleMessageFormDisplay: function() {
                this.messageFormDisplay = !this.messageFormDisplay; 
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