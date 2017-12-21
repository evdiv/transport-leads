<template>
    <section>

        <div class="field">
            <b-switch v-model="isSwitched" @input="isNewUser">
                <span v-if="isSwitched">
                    Register
                </span>
                <span v-else>
                    Already Registered
                </span>
            </b-switch>
        </div>
        

        <div class="box">
            <div v-if="isSwitched">
                <slot name="first"></slot>
            </div>

            <div v-if="!isSwitched">
                <slot name="second"></slot>
            </div>
        </div>

    </section>
</template>

<script>

    export default {
        data() {
            return {
                isSwitched: false
            }
        },
        methods: {
            isNewUser() {
                if(this.isSwitched) {
                    this.$store.state.newOrder.registered = true;
                }
            }
        }
    }
</script>