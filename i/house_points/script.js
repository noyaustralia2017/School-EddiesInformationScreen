var colors = [
      '#FEDD00',
      '#DA291C',
      '#59CBE8',
       '#C1C6C8',
      '#007A33',
      '#001489',
    ] // House colours css code according to identity guidelines

var options = {
          series: [{
          data: [542, 483, 611, 718, 565, 609] //Enter the total house points in. This should be entered in alphabetical house order starting with Clancy, Haydon, Mulrooney, O'Brien, Rice and Treacy
        }],
          chart: {
          height: 350,
          type: 'bar',
          events: {
            click: function(chart, w, e) {
              // console.log(chart, w, e)
            }
          }
        },
        colors: colors,
        plotOptions: {
          bar: {
            columnWidth: '45%',
            distributed: true
          }
        },
        dataLabels: {
          enabled: true // allowing for the total number to be shown
        },
        legend: {
          show: false
        },
        xaxis: {
          categories: [
            ['Clancy'],
            ['Haydon'],
            ['Mulrooney'],
            ["O'Brien"],
            ['Rice'], 
            ['Treacy'],
          ], // this is the labels of the houses. this is the order the house points above should be entered
          labels: {
            style: {
              fontSize: '15px'
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();