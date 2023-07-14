<template>
  <apexchart width="100%"
             :options="options"
             :series="series" />
</template>

<script>

export default ({
  data: function () {
    return {
      options: {
        chart: {
          height: 50,
          type: 'donut',
          width: '100%',
        },

        legend: {
          show: false,
        },

        labels: ['Team A', 'Team B', 'Team C'],

        plotOptions: {
          pie: {
            donut: {
              size: '79%',
              labels: {
                show: false,
                total: {
                  label: 'Traffic by device',
                  showAlways: true,
                  show: true,
                },
              },
            },
          },
          stroke: {
            colors: undefined,
          },
        },

        dataLabels: {
          enabled: false,
        },

        colors: ['#FACC15', '#2563EB', '#936DFF'],

        stroke: {
          colors: 'transparent',
          lineCap: 'round',
        },
      },

      series: [20, 65, 15],
    }
  }
});
</script>
