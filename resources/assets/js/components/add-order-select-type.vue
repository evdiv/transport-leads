<template>
    <div class="container">
        <div class="field">
            <a class="button is-primary" @click="select('lessons')">
                <span class="icon">
                    <i class="mdi mdi-forklift"></i>
                </span>
                <span>Lessons</span>
            </a>

            <a class="button is-primary" @click="select('teachers')">
                <span class="icon">
                    <i class="fa fa-twitter"></i>
                </span>
                <span>Teachers</span>
            </a>

            <a class="button is-primary" @click="select('equipment')">
                <span class="icon">
                    <i class="fa fa-twitter"></i>
                </span>
                <span>Equipment</span>
            </a>
        </div>
    </div>
</template>

<script>
   import store from '../store';

    export default {
        methods: {
            select(service) {
               store.commit('selectService', service);
            }
        }
    }

</script>

