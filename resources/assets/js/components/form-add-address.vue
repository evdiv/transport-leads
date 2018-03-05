<template>
    <div class="box">

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">City and Address</label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" type="text" name="City" v-model=$store.state.newOrder.city placeholder="City">
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" type="text" name="Address" v-model=$store.state.newOrder.address placeholder="Address">
                    </p>
                </div>
            </div>
        </div>


        <div class="field is-horizontal">

          <div class="field-label is-normal">
            <label class="label">Date and Time</label>
          </div>

          <div class="field-body">

            <b-field>
                <b-datepicker
                    v-model = $store.state.newOrder.date 
                    placeholder="Click to select..."
                    icon="calendar-today">
                </b-datepicker>
            </b-field>


            <div class="field">
              <p class="control has-icons-left">
                <span class="select">
                  <select v-model = $store.state.newOrder.time>
                    <option selected>Select time...</option>
                    <option>all day</option>
                    <option>06.00</option>
                    <option>07.00</option>
                    <option>08.00</option>
                    <option>09.00</option>
                    <option>10.00</option>
                    <option>11.00</option>
                    <option>12.00</option>
                    <option>13.00</option>
                    <option>14.00</option>
                    <option>15.00</option>
                    <option>16.00</option>
                    <option>17.00</option>
                    <option>18.00</option>
                    <option>19.00y</option>
                    <option>20.00</option>
                    <option>22.00</option>
                    <option>23.00</option>
                    <option>after 24.00</option>
                  </select>
                </span>
                <span class="icon is-small is-left">
                  <i class="fa fa-clock-o fa-lg"></i>
                </span>
              </p>
            </div>

          </div>
        </div>
        <hr />


        <div v-if="showDestinations" class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Billing Address</label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" name="billingCity[]" v-model=$store.state.newOrder.destinationCity type="text" placeholder="City">
                    </p>
                </div>

                <div class="field is-grouped">
                    <p class="control is-expanded">
                        <input class="input" name="billingAddress[]" v-model=$store.state.newOrder.destinationAddress type="text" placeholder="Street">
                    </p>

                    <p class="control">
                        <a href="#" @click.prevent="removeDestination(index)" class="delete is-large"></a>
                    </p>
                </div>
            </div>
        </div>


        <div class="level-right">
            <div class="button is-success" @click="addDestination" v-if="!showDestinations"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Builling Address</div>
        </div>

    </div>
</template>

<script>
    export default {
        data () {
            return {
                showDestinations: false
            }
        },

        methods: {
           addDestination: function() {
                this.showDestinations = true;
            },

            removeDestination: function(index) {

                this.$store.state.newOrder.destinationCity = "";
                this.$store.state.newOrder.destinationAddress = "";
                this.showDestinations = false;;
            }
        }
    }    
</script>   
