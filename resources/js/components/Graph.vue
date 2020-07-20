<template>
  <div>
    <canvas width="400" height="400" ref="canvas"></canvas>
    <div v-html="legend"></div>
  </div>
</template>

<script>
import Chart from 'chart.js';

export default {
    props: ['url', 'color'],

    data() {
      return { legend: ''};
    }, // end data

    // methods: {
    //     render() {
    //       // alert('inside render chart!');
    //     } // end renderChart
    // }, // end methods

    mounted() {
        console.log('Graph component mounted.');

        axios.get(this.url).then(response => {
          // const data = response.data;
          const labels = response.data['labels'];
          const chartdata = response.data['chartdata'];
          // console.log(chartdata);

          var myChart = new Chart(this.$refs, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Revenue',
                    data: chartdata,
                    borderColor: [this.color],
                    borderWidth: 1
                }]
            }, // end data
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            } // end options
          }); // end new chart
          this.legend = myChart.generateLegend();

            // this.render()
            // console.log(response.data);
          }); // end axios


    } // end mounted
  } // end export default
</script>
