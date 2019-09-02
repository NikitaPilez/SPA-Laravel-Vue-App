<template>
    <pie-chart :chart-data="data" :height="100" :options="{responsive: true, maintainAspectRatio: true}"></pie-chart>
</template>

<script>
    import PieChart from './PieChart.js'
    export default {
        components: {
            PieChart
        },
        data:function() {
            return {
                data: [],
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                axios.get('chart-data-pie').then((response) => {
                    this.data = response.data;
                });
            }
        }
    }
</script>
