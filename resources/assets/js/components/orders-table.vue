<template>
    <section>
        

        <div style="text-align:center;" v-if="loader">
            <i class="fa fa-refresh fa-spin fa-4x fa-fw"></i><span class="sr-only">Loading...</span>
        </div>

        <b-field grouped group-multiline>

            <b-select v-model="perPage" :disabled="!isPaginated">
                <option value="25">25 per page</option>
                <option value="50">50 per page</option>
                <option value="100">100 per page</option>
            </b-select>

        </b-field>

        <b-table
            :data="lessons"
            :paginated="isPaginated"
            :per-page="perPage"
            detailed
            detail-key="id">


            <template slot-scope="props">

                <b-table-column label="Cargo">
                   
                    <div v-for="cargo in props.row.cargos">

                       <i class="mdi mdi-forklift"></i>  {{ cargo.name }}, {{ cargo.weight }} {{ cargo.dimention }}<br/>

                        <span class="tag is-info" v-if="cargo.length > 0">
                            length: {{ cargo.length }} {{ cargo.size }}</span>

                        <span class="tag is-info" v-if="cargo.width > 0" >
                            width: {{ cargo.width }} {{ cargo.size }}</span>

                        <span class="tag is-info" v-if="cargo.height > 0">
                            height: {{ cargo.height }} {{ cargo.size }}</span>
                    </div>
                </b-table-column>


                <b-table-column label="Total Weight">
                    <template v-for="cargo in props.row.cargos">
                        {{ cargo.weight }} {{ cargo.dimention }}
                    </template>
                </b-table-column>


                <b-table-column label="Location">
                    <b-icon icon="map-marker" type="is-danger" size="is-small"></b-icon> {{ props.row.last_name }}
                </b-table-column>

                <b-table-column label="Bids">
                   0
                </b-table-column>       

                <b-table-column label="Date" centered>
                    {{ new Date(props.row.date).toLocaleDateString() }}
                </b-table-column>

            </template>


            <template slot="detail" slot-scope="props">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <b-icon
                                icon="forklift"
                                size="is-large"
                                type="is-info">
                            </b-icon>
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>{{ props.row.id }} {{ props.row.first_name }} {{ props.row.last_name }}</strong>
                                <small>@{{ props.row.first_name }}</small>
                                <small>31m</small>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Proin ornare magna eros, eu pellentesque tortor vestibulum ut.
                                Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                            </p>
                        </div>
                    </div>
                </article>
            </template>
        </b-table>
    </section>
</template>

<script>

    export default {
        mounted() {
            this.getLessons();
        },

        data() {
            return {
                lessons: [],
                isPaginated: true,
                loader: true,
                defaultSortDirection: 'asc',
                isHoverable: true,
                perPage: 25,
                testProp: 66
            }
        },

        methods: {
            getLessons() {
                this.$store.dispatch('getOrders')
                    .then((response) => {
                       this.lessons = response.data;
                       this.loader = false;

                       console.log(this.lessons);
                    })
                    .catch((error) => {
                        console.log(error);
                    });
            }
        },
    }
</script>