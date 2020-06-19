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
              :css="datatableCss"
            />
        </div>
    </div>
</template>

<style>
    /* Datatable CSS */
    #v-datatable-light .header-item {
      cursor: pointer;
      color: #337ab7;
      transition: color 0.15s ease-in-out;
    }

    #v-datatable-light .header-item:hover {
      color: #ed9b19;
    }

    #v-datatable-light .header-item.no-sortable {
      cursor: default;
    }
    #v-datatable-light .header-item.no-sortable:hover {
      color: #337ab7;
    }

    #v-datatable-light .header-item .th-wrapper {
      display: flex;
      width: 100%;
      height: 100%;
      font-weight: bold;
    }

    #v-datatable-light .header-item .th-wrapper.checkboxes {
      justify-content: center;
    }

    #v-datatable-light .header-item .th-wrapper .arrows-wrapper {
      display: flex;
      flex-direction: column;
      margin-left: 10px;
      justify-content: space-between;
    }

    #v-datatable-light .header-item .th-wrapper .arrows-wrapper.centralized {
      justify-content: center;
    }

    #v-datatable-light .arrow {
      transition: color 0.15s ease-in-out;
      width: 0;
      height: 0;
      border-left: 8px solid transparent;
      border-right: 8px solid transparent;
    }

    #v-datatable-light .arrow.up {
      border-bottom: 8px solid #337ab7;
    }

    #v-datatable-light .arrow.up:hover {
      border-bottom: 8px solid #ed9b19;
    }

    #v-datatable-light .arrow.down {
      border-top: 8px solid #337ab7;
    }

    #v-datatable-light .arrow.down:hover {
      border-top: 8px solid #ed9b19;
    }

    #v-datatable-light .footer {
      display: flex;
      justify-content: space-between;
      width: 500px;
    }
    /* End Datatable CSS */
</style>

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
                }],
                datatableCss: {
                    table: "table table-bordered table-hover table-striped table-center",
                    th: "header-item",
                    thWrapper: "th-wrapper",
                    thWrapperCheckboxes: "th-wrapper checkboxes",
                    arrowsWrapper: "arrows-wrapper",
                    arrowUp: "arrow up",
                    arrowDown: "arrow down",
                    footer: "footer"
                },
            }
        }
    }
</script>
