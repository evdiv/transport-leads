<template>  
<div class="box">

    <div class="field is-horizontal">

        <div class="field-label is-normal">
            <label class="label">Lesson Name</label>
        </div>

        <div class="field-body">

            <div class="field">
                <div class="control">
                    <input class="input" type="text" v-model="cargo.name" placeholder="Lesson Name">
                </div>
            </div>

        </div>
    </div>


<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Details</label>
    </div>

    <div class="field-body">

        <div class="field is-expanded">
            <div class="field has-addons"> 

                <p class="control">
                    <a class="button is-static">
                        Length
                    </a>
                </p>

                  <div class="control">
                    <div class="select">
                      <select v-model="cargo.size">
                        <option>meters</option>
                        <option>sm</option>
                      </select>
                    </div>
                  </div>
            </div>
        </div>


        <div class="field is-expanded">
            <div class="field has-addons">

                <p class="control">
                    <a class="button is-static">
                        Length
                    </a>
                </p>

                <p class="control is-expanded">
                    <input class="input" type="number" placeholder="Length" v-model="cargo.length">
                </p>

            </div>
        </div>


        <div class="field is-expanded">
            <div class="field has-addons">

                <p class="control">
                    <a class="button is-static">
                        Length
                    </a>
                </p>

                <p class="control is-expanded">
                    <input class="input" type="number" placeholder="Length" v-model="cargo.height">
                </p>

            </div>
        </div>


        <div class="field is-expanded">
            <div class="field has-addons">

                <p class="control">
                    <a class="button is-static">
                        Length
                    </a>
                </p>

                <p class="control is-expanded">
                    <input class="input" type="number" placeholder="Length" v-model="cargo.width">
                </p>

            </div>
        </div>        

  </div>
</div>



<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Number of lessons</label>
    </div>

    <div class="field-body">

        <div class="field is-expanded">
            <div class="field has-addons"> 

                  <div class="control">
                    <div class="select">
                      <select v-model="cargo.dimention">
                        <option>tonns</option>
                        <option>kg</option>
                      </select>
                    </div>
                  </div>

                <p class="control is-expanded">
                    <input class="input" type="number"  v-model="cargo.weight" placeholder="Weight">
                </p>
    
            </div>
        </div>


        <div class="field is-expanded">
            <div class="field has-addons">
                  <p class="control">
                    <a class="button is-link" @click="reduceQty"><i class="fa fa-minus" aria-hidden="true"></i></a>
                  </p>

                  <p class="control">
                    <input class="input" type="text" placeholder="Number" v-model="cargo.quantity">
                  </p>

                  <p class="control">
                    <a class="button is-link" @click="cargo.quantity += 1"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  </p>
            </div>
        </div>


    </div>
</div>


<div class="field is-horizontal">
    <div class="field-label is-normal"></div>

    <div class="field-body" v-if="!this.showDescriptionField">
        <a class="button is-success is-outlined is-small" @click="showDescriptionField = true">
            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Lesson Description</a>
    </div>

    <div class="field-body" v-if="this.showDescriptionField">
        <a class="button is-danger is-outlined is-small" @click="showDescriptionField = false">
            <i class="fa fa-minus" aria-hidden="true"></i>&nbsp; Remove Lesson Description</a>
    </div>

</div>


<div class="field is-horizontal">
    <div class="field-label is-normal"></div>

    <div class="field-body" v-if="this.showDescriptionField">
        
        <div class="field is-expanded">
            <div class="field"> 

                <textarea class="textarea" placeholder="Description of the required Lesson" v-model="cargo.description"></textarea>
    
            </div>
        </div>
    </div>
</div>


    <div class="level-right">
        <a class="button is-success " @click="saveCargo" :disabled="saveBtnDisabled">
            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Save Lesson</a>
    </div>


</div>
</template>     

<script>

    export default {
        data: function () { 
            return {
                cargo: {
                    name: '',
                    quantity: 1,
                    weight: '',
                    size: "meters",
                    dimention: "tonns"
                },

                showDescriptionField: false,
            }
        },

        computed: {
            saveBtnDisabled() {
                if(this.cargo.name != "" && this.cargo.weight != "") {
                    return false;
                }
                return true;
            }
        },

        methods: {
            saveCargo: function() {

                this.$store.commit('addCargo', this.cargo);

                this.cargo = {};
                this.cargo.quantity = 1;
                this.cargo.size = "meters";
                this.cargo.dimention = "tonns";

            },

            reduceQty: function() {
                this.cargo.quantity = (this.cargo.quantity - 1 > 0)  ? this.cargo.quantity - 1 : 1;
            },
        }
    }    
</script>               