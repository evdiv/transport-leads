<template>    
    <div>

        <!-- List of all Added Lessons -->
        <div class="columns">
            <div v-for="(cargo, index) in cargos"  class="column">
                <article class="message is-primary">
                    <div class="message-header">
                        {{ cargo.name }}
                        <span class="delete" @click="removeCargo(index)"></span>
                    </div>
                    <div class="message-body">
                        {{ cargo.weight }} {{ cargo.dimention }}, 
                        {{ cargo.length }} {{ cargo.size }}, {{ cargo.width }}, 
                        {{ cargo.height }}, {{ cargo.description }}
                    </div>
                </article>
            </div>
        </div>


        <form-add-cargo v-if="this.$store.state.isCargoFormShown"></form-add-cargo>

    </div>

</template>     


<script>

    export default {
        data: function () {
            return {}
        },

        computed: {
            cargos() {
                return this.$store.state.newOrder.cargos
            }

        },

        methods: {
            showCargoForm() {
                this.$store.state.isCargoFormShown = true;
            },

            removeCargo(index) {
                this.$store.commit('removeCargo', index);
            }
        }
    }    
</script>                