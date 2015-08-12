$(function () {
                $('#container').highcharts({
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Browser market shares January, 2015 to May, 2015'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                            name: "Brands",
                            colorByPoint: true,
                            data: [{
                                    name: "Microsoft Internet Explorer",
                                    y: 56.33
                                }, {
                                    name: "Chrome",
                                    y: 24.03,
                                    sliced: true,
                                    selected: true
                                }, {
                                    name: "Firefox",
                                    y: 10.38
                                }, {
                                    name: "Safari",
                                    y: 4.77
                                }, {
                                    name: "Opera",
                                    y: 0.91
                                }, {
                                    name: "Proprietary or Undetectable",
                                    y: 0.2
                                }]
                        }]
                });
            });
            Highcharts.createElement('link', {
                href: '//fonts.googleapis.com/css?family=Dosis:400,600',
                rel: 'stylesheet',
                type: 'text/css'
            }, null, document.getElementsByTagName('head')[0]);

            Highcharts.theme = {
                colors: ["#7cb5ec", "#f7a35c", "#90ee7e", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
                    "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
                chart: {
                    backgroundColor: null,
                    style: {
                        fontFamily: "Dosis, sans-serif"
                    }
                },
                title: {
                    style: {
                        fontSize: '16px',
                        fontWeight: 'bold',
                        textTransform: 'uppercase'
                    }
                },
                tooltip: {
                    borderWidth: 0,
                    backgroundColor: 'rgba(219,219,216,0.8)',
                    shadow: false
                },
                legend: {
                    itemStyle: {
                        fontWeight: 'bold',
                        fontSize: '13px'
                    }
                },
                xAxis: {
                    gridLineWidth: 1,
                    labels: {
                        style: {
                            fontSize: '12px'
                        }
                    }
                },
                yAxis: {
                    minorTickInterval: 'auto',
                    title: {
                        style: {
                            textTransform: 'uppercase'
                        }
                    },
                    labels: {
                        style: {
                            fontSize: '12px'
                        }
                    }
                },
                plotOptions: {
                    candlestick: {
                        lineColor: '#404048'
                    }
                },
                // General
                background2: '#F0F0EA'

            };

// Apply the theme
            Highcharts.setOptions(Highcharts.theme);