<script>
export default ({
  data() {
    return {
      options: {
        chart: {
          height: 15,
          type: 'bar',
          toolbar: {
            show: false,
          },
        },

        xaxis: {
          type: 'integer',
          categories: [
            'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun',
          ],
          labels: {
            show: true,
            hideOverlappingLabels: false,
            showDuplicates: true,
            trim: false,
          },
        },

        yaxis: {
          opposite: true,
          labels: {
            show: true,
            align: 'right',
          },
        },

        plotOptions: {
          bar: {
            // horizontal: false,
            borderRadius: 5,
            columnWidth: '30%',
            dataLabels: {
              enabled: false,
            },
          },
        },

        grid: {
          show: false,
        },

        dataLabels: {
          enabled: false,
        },

        colors: ['#2E93fA', '#66DA26', '#546E7A', '#E91E63', '#FF9800'],
      },
      // series: [{
      //   data: [
      //     10, 5, 8, 9, 5, 8, 10
      //   ],
      // }],

      series: [
        { name: 'Unique visitors', data: [70, 65, 70, 65, 72, 90, 84] },
        { name: 'Total visitors', data: [92, 92, 90, 97, 90, 112, 98] },
        { name: 'Total visitors', data: [112, 100, 112, 112, 86, 101, 92] },
      ],
    }
  },
})
</script>

<template>
  <apexchart
    width="100%"
    :options="options"
    :series="series"
  />
</template>
