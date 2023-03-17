
// ################################### Monthly income graph

var xValues = ["jan", "feb", "mar", "apr", "may","jun", "jul", "aug", "sep", "oct", "nov", "dec"];
var yValues = [155, 249, 344, 124, 415,255, 249, 144,600];

// var myChart = new Chart("myChart", {
//   type: "bar",
//   data: {
//     labels: xValues,
//     datasets: [{
//       backgroundColor: barColors,
//       data: yValues
//     }]
//   },
//   options: {
//     legend: {display: false},
//     title: {
//       display: true,
//       text: "Monthly Income"
//     }
//   }
// });



new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(62, 255, 62, 1))",
      borderColor: "rgba(62, 255, 62, 0.538)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 10, max:1000}}],
    },
        title: {
      display: true,
      text: "Monthly Income"
    }
  }
});

// ##################################### Deleveries by warehouses

var xValues1 = ["jan", "feb", "mar", "apr", "may","jun", "jul", "aug", "sep", "oct", "nov", "dec"];
var yValues1 = [155, 249, 344, 224, 415,255, 249, 144,500];
var barColors = ["red", "green","orange","blue","brown","grey", "purple", "peru", "yellow", "black", "pink", "aqua"];

var myChart = new Chart("myChart2", {
  type: "bar",
  data: {
    labels: xValues1,
    datasets: [{
      backgroundColor: 'rgba(107, 201, 255, 0.836)',
      data: yValues1
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Deliveries by Warehouse"
    }
  }
});

// ########################### gauge meter

    var newVal = 40;
  
    $('.gauge--1 .semi-circle--mask').attr({
      style: '-webkit-transform: rotate(' + newVal + 'deg);' +
      '-moz-transform: rotate(' + newVal + 'deg);' +
      'transform: rotate(' + newVal + 'deg);'
     });				
