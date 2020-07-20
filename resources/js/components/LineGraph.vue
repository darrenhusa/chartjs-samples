<template>
  <div>
    <canvas width="400" height="400" ref="canvas"></canvas>
    <div v-html="legend"></div>
  </div>
</template>

<script>
import Chart from 'chart.js';

export default {
    props: ['labels', 'chartdata', 'color'],

    data() {
      return { legend: ''};
    },

    mounted() {
        console.log('LineGraph component mounted.');

        // var ctx = document.getElementById('myChart');
        // var ctx = this.$el;

        var myChart = new Chart(this.$refs, {
        type: 'line',
        // type: 'bar',
        data: {
            // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            labels: this.labels,
            datasets: [{
                label: '# of Votes',
                data: this.chartdata,
                // backgroundColor: [
                //     'rgba(255, 99, 132, 0.2)',
                //     'rgba(54, 162, 235, 0.2)',
                //     'rgba(255, 206, 86, 0.2)',
                //     'rgba(75, 192, 192, 0.2)',
                //     'rgba(153, 102, 255, 0.2)',
                //     'rgba(255, 159, 64, 0.2)'
                // ],
                borderColor: [
                    this.color
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
        });
        this.legend = myChart.generateLegend();
        console.log(this.legend);
        // console.log(myChart.generateLegend());

    }
}
// import Chart from 'chart.js';
//
</script>
