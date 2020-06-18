<template>
    <div class="card">
        <div class="card-header">
            <i class="fas fa-code"></i> Example Vue Component
        </div>
        <div class="card-body">
            I'm an example lightweight vue datatable component.
            <DataTable
              :header-fields="headerFields"
              :data="data"
            />
        </div>
    </div>
</template>

<script>
    import { DataTable } from 'v-datatable-light'

    export default {
        components: {
            DataTable
        },
        mounted() {
            console.log('Component mounted.')
        },
        data: function() {
            return {
                headerFields: [{label: "Package", name: "name"},
                               {label: "Version", name: "version", sortable: false}],
                data: [{
                    id: 1,
                    name: "pooch",
                    version: "1.1.0"
                },
                {
                    id: 2,
                    name: "numpy",
                    version: "1.17.3"
                }]
            }
        }
    }
</script>
