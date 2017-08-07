<template>  
<div>

    <div class="row">
        <div class="col-sm-12">

            <div class="input-group">
                <div class="input-group-addon">Название Груза</div>
                <input type="text" v-model="cargo.name" class="form-control">
            </div>

        </div>
    </div>        

    <div class="row">
        <div class="col-sm-4">
    
            <div class="input-group">
                <div class="input-group-addon">Длина</div>
                <input type="number" v-model="cargo.length" class="form-control">
            </div>

        </div>
       

        <div class="col-sm-4">

                <div class="input-group">
                    <div class="input-group-addon">Ширина</div>
                    <input type="number" v-model="cargo.width"  class="form-control">
                </div>

        </div>    

        <div class="col-sm-4">
   
            <div class="input-group">
                <div class="input-group-addon">Высота</div>
                <input type="number" v-model="cargo.height"  class="form-control">
            </div>
   
        </div>    
    </div>        


    <div class="row">
        <div class="col-sm-6">

                <div class="input-group">
                    <div class="input-group-addon">Вес еденицы груза</div>
                    <input type="text" v-model="cargo.weight"  class="form-control">
                    <div class="input-group-addon">тонн</div>
                </div>

        </div>  

        <div class="col-sm-6">

                <div class="input-group">
                    <div class="input-group-addon">Количество едениц груза</div>
                    <input type="number" v-model="cargo.quantity"  class="form-control">
                </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">

            <!-- Прикрепить Схему строповки -->

            <!-- Прикрепить упаковочный лист -->
            
            <!-- Прикрепить Фото оборудования -->

            <!-- Прикрепить Фото места проведения работ -->
            Описание груза
            <textarea class="form-control" v-model="cargo.description" rows="3"></textarea>
        </div>

        <div class="col-sm-6 col-sm-offset-3 ">
             <button class="btn btn-success btn-block" @click="addCargo">Сохранить груз</button>
        </div>
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
            addCargo: function () {
                this.$emit("addCargo", this.cargo);
            }
        }
    }    
</script>               