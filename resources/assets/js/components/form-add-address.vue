<template>
    <div class="box">

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Address</label>
            </div>

            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" type="text" name="City" placeholder="City">
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" type="text" name="Street" placeholder="Street">
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
                    placeholder="Click to select..."
                    icon="calendar-today">
                </b-datepicker>
            </b-field>


            <b-field>
                <b-timepicker
                    placeholder="Type or select time..."
                    icon="clock"
                    :readonly="false">
                </b-timepicker>
            </b-field>

          </div>
        </div>
        <hr />



        <div v-for="location in locations" class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Billing Address</label>
          </div>

          <div class="field-body">
            <div class="field">
              <p class="control is-expanded">
                <input class="input" name="billingCity[]" type="text" placeholder="City">
              </p>
            </div>

            <div class="field is-grouped">
                <p class="control is-expanded">
                    <input class="input" name="billingAddress[]" type="text" placeholder="Street">
                </p>

                <p class="control">
                    <a href="#" @click.prevent="deleteLocation" class="delete is-large"></a>
                </p>

            </div>

          </div>
        </div>


        <div class="level-right">
            <div class="button is-success" @click="addLocation"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Builling Address</div>
        </div>

    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                locations: 0
            }
        },

        methods: {
           addLocation: function() {
                this.locations++;
            },

            deleteLocation: function() {
                this.locations--;
            }
        }
    }    
</script>   
