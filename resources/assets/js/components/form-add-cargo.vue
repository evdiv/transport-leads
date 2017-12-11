<template>  
<div class="box">


    <div class="field">
        <label class="label">Lesson Name</label>
        <div class="control">
            <input class="input" type="text" v-model="cargo.name" placeholder="Lesson Name">
        </div>
    </div>

    <label class="label">Details</label>
    <div class="field is-horizontal">
        <div class="field-body">
            <div class="field has-addons">
                <p class="control">
                    <span class="select">
                        <select>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </span>
                </p>
                <p class="control">
                    <input class="input" type="number" v-model="cargo.length" placeholder="Day 1">
                </p>
            </div>

            <div class="field has-addons">
                <p class="control">
                    <span class="select">
                        <select>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </span>
                </p>
                <p class="control">
                    <input class="input" type="number" v-model="cargo.width" placeholder="Day 1">
                </p>
            </div>

            <div class="field has-addons">
                <p class="control">
                    <span class="select">
                        <select>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </span>
                </p>
                <p class="control">
                    <input class="input" type="number" v-model="cargo.height" placeholder="Day 1">
                </p>
            </div>

            <div class="field has-addons">
                <p class="control">
                    <span class="select">
                        <select>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </span>
                </p>
                <p class="control">
                    <input class="input" type="text" v-model="cargo.weight" placeholder="Day 1">
                </p>
            </div>

            <div class="field has-addons has-addons-right">
                  <p class="control">
                    <a class="button is-link"><i class="fa fa-minus" aria-hidden="true"></i></a>
                  </p>

                  <p class="control">
                    <input class="input" type="text" placeholder="Number">
                  </p>

                  <p class="control">
                    <a class="button is-link"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  </p>
            </div>

        </div>
    </div>


    <div class="field">
        <a class="button is-success is-outlined is-small"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Lesson Description</a>
    </div>


    <div class="level-right">
        <button class="button is-success " @click="addCargo">Save Info</button>
    </div>



</div>
</template>     

<script>
    export default {
        data: function () {
            return {
                cargo: {},
            }
        },

        methods: {
            addCargo: function() {
                this.$emit("addCargo", this.cargo);
            },

            closeFrom: function() {
                this.$emit("closeFrom"); 
            }
        }
    }    
</script>               