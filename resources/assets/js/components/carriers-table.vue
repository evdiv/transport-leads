<template>
    <section>

        <div style="text-align:center;" v-if="loader">
            <i class="fa fa-refresh fa-spin fa-4x fa-fw"></i><span class="sr-only">Loading...</span>
        </div>


        <div style="text-align:center;" v-if="carriers.length == 0 && !loader">
           <i class="fa fa-exclamation-triangle fa-lg" aria-hidden="true"></i> Carriers are not found
        </div>

        <b-field grouped group-multiline>

            <b-select v-model="perPage" :disabled="!isPaginated">
                <option value="25">25 per page</option>
                <option value="50">50 per page</option>
                <option value="100">100 per page</option>
            </b-select>

        </b-field>

        <b-table
            :data="getCarriers"
            :paginated="isPaginated"
            :per-page="perPage"
            focusable
            detail-key="id">


            <template slot-scope="props">

                <b-table-column label="Carrier #">
                   <a :href="'/carriers/'+ props.row.id" >{{ props.row.id }}</a>
                </b-table-column>


                <b-table-column label="Name">
                   <a :href="'/carriers/'+ props.row.id" >{{ props.row.name }}</a>
                </b-table-column>


                <b-table-column label="City">
                    {{ props.row.city }}
                </b-table-column>


   
                <b-table-column label="Date" centered>
                    {{ new Date(props.row.created_at).toLocaleDateString() }}
                </b-table-column>

            </template>

        </b-table>
    </section>
</template>

<script>

    export default {

        data() {
            return {
                isPaginated: true,
                loader: false,
                defaultSortDirection: 'asc',
                isHoverable: true,
                perPage: 25,
                testProp: 66
            }
        },

        computed: {
            getCarriers() {
                return JSON.parse(this.carriers);
            }
        },

        props: ['carriers']

    }
</script>