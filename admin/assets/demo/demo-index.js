jQuery(document).ready(function() {

    try {
    //Easy Pie Chart
    $('.easypiechart#newvisits').easyPieChart({
        barColor: "#85c744",
        trackColor: '#edeef0',
        scaleColor: 'transparent',
        scaleLength: 5,
        lineCap: 'square',
        lineWidth: 2,
        size: 90,
        onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });

    $('.easypiechart#bouncerate').easyPieChart({
        barColor: "#f39c12",
        trackColor: '#edeef0',
        scaleColor: 'transparent',
        scaleLength: 5,
        lineCap: 'square',
        lineWidth: 2,
        size: 90,
        onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });

    $('.easypiechart#clickrate').easyPieChart({
        barColor: "#e73c3c",
        trackColor: '#edeef0',
        scaleColor: 'transparent',
        scaleLength: 5,
        lineCap: 'square',
        lineWidth: 2,
        size: 90,
        onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        }
    });


    $('#updatePieCharts').on('click', function() {
        $('.easypiechart#newvisits').data('easyPieChart').update(Math.random()*100);
        $('.easypiechart#bouncerate').data('easyPieChart').update(Math.random()*100);
        $('.easypiechart#clickrate').data('easyPieChart').update(Math.random()*100);
        return false;
    });
    }
    catch(error) {}


    $('#quickpost').wysihtml5();



    //Date Range Picker
    $('#daterangepicker2').daterangepicker(
        {
          ranges: {
             'Today': [moment(), moment()],
             'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
             'Last 7 Days': [moment().subtract('days', 6), moment()],
             'Last 30 Days': [moment().subtract('days', 29), moment()],
             'This Month': [moment().startOf('month'), moment().endOf('month')],
             'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
          },
          opens: 'left',
          startDate: moment().subtract('days', 29),
          endDate: moment()
        },
        function(start, end) {
            $('#daterangepicker2 span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );



    //Sparklines

    // $("#indexprofit").sparkline([12 + randValue(),8 + randValue(),10 + randValue(), 21 + randValue(), 15 + randValue() ,14 + randValue(),19 + randValue()], {
    // lineWidth: 1.5,
    // type: 'line',
    // width: '90px',
    // height: '45px',
    // lineColor: '#ffffff',
    // fillColor: false,
    // spotColor: false,
    // minSpotColor: false,
    // highlightLineColor: 'rgba(255,255,255,0.6)',
    // highlightSpotColor: '#ffffff',
    // spotRadius: 3,
    // maxSpotColor: false});


    // $("#indexavgvisit").sparkline([12 + randValue(),8 + randValue(),10 + randValue(), 21 + randValue(), 15 + randValue() ,14 + randValue(),19 + randValue()], {
    // lineWidth: 1.5,
    // type: 'line',
    // width: '90px',
    // height: '45px',
    // lineColor: '#2bbce0',
    // fillColor: false,
    // spotColor: false,
    // minSpotColor: false,
    // highlightLineColor: '#d2d3d6',
    // highlightSpotColor: '#2bbce0',
    // spotRadius: 3,
    // maxSpotColor: false});

    // $("#indexpagesvisit").sparkline([12 + randValue(),8 + randValue(),10 + randValue(), 21 + randValue(), 15 + randValue() ,14 + randValue(),19 + randValue()], {
    // lineWidth: 1.5,
    // type: 'line',
    // width: '90px',
    // height: '45px',
    // lineColor: '#4187df',
    // fillColor: false,
    // spotColor: false,
    // minSpotColor: false,
    // highlightLineColor: '#cdced1',
    // highlightSpotColor: '#4187df',
    // spotRadius: 3,
    // maxSpotColor: false});

    // $("#indexpageviews").sparkline([12 + randValue(),8 + randValue(),10 + randValue(), 21 + randValue(), 15 + randValue() ,14 + randValue(),19 + randValue()], {
    // type: 'bar',
    // barColor: '#2c3e50',
    // height: '45',
    // barWidth: 13});

    // $("#indextotalvisits").sparkline([12 + randValue(),8 + randValue(),10 + randValue(), 21 + randValue(), 15 + randValue() ,14 + randValue(),19 + randValue()], {
    // type: 'bar',
    // barColor: '#4f5259',
    // height: '45',
    // barWidth: 13});



    //Flot

    function randValue() {
        return (Math.floor(Math.random() * (2)));
    }

    var viewcount = [
        [1, 787 + randValue()],
        [2, 740 + randValue()],
        [3, 560 + randValue()],
        [4, 860 + randValue()],
        [5, 750 + randValue()],
        [6, 910 + randValue()],
        [7, 730 + randValue()]
    ];

    var uniqueviews = [
        [1, 179 + randValue()],
        [2, 320 + randValue()],
        [3, 120 + randValue()],
        [4, 400 + randValue()],
        [5, 573 + randValue()],
        [6, 255 + randValue()],
        [7, 366 + randValue()]
    ];

    
    var usercount = [
        [1, 70 + randValue()],
        [2, 260 + randValue()],
        [3, 30 + randValue()],
        [4, 147 + randValue()],
        [5, 333 + randValue()],
        [6, 155 + randValue()],
        [7, 166 + randValue()]
    ];

    var plot_statistics = $.plot($("#site-statistics"), [{
        data: viewcount,
        label: "View Count"
    }, {
        data: uniqueviews,
        label: "Unique Views"
    }, {
        data: usercount,
        label: "User Count"
    }], {
        series: {
            lines: {
                show: true,
                lineWidth: 1.5,
                fill: false
            },
            points: {
                show: true
            },
            shadowSize: 0
        },
        grid: {
            hoverable: true,
            clickable: true,
            borderWidth: 0
        },
        colors: ["#2bbce0", "#458adf", "#8e44ad"],
        xaxis: {
            tickColor: "transparent",
            ticks: [[1, "S"], [2, "M"], [3, "T"], [4, "W"], [5, "T"], [6, "F"], [7, "S"]],
            tickDecimals: 0,
            autoscaleMargin: 0,
            font: {
                family: "'Source Sans Pro',Arial",
                color: '#8c8c8c',
                size: 12
            }
        },
        yaxis: {
            ticks: 4,
            tickDecimals: 0,
            tickColor: "#e3e4e6",
            font: {
                color: '#8c8c8c',
                size: 12
            },
            tickFormatter: function (val, axis) {
                if (val>999) {return (val/1000) + "K";} else {return val;}
            }
        },
        legend : {
            labelBoxBorderColor: 'transparent'
        }
    });

    var d1 = [];
    var d2 = [];

    for (var i = 1; i < 5; i++) {
        d1.push([i, parseInt(Math.random() * 99)]);
        d2.push([i, parseInt(Math.random() * 99)]);
    }
 
    var ds = new Array();

    ds.push({
    data:d1,
    label: "Budget",
    bars: {
        show: true,
        barWidth: 0.2,
        order: 1
    }
    });
    ds.push({
        data:d2,
        label: "Actual",
        bars: {
            show: true,
            barWidth: 0.2,
            order: 2,
        }
    });

    var variance = $.plot($("#budget-variance"), ds, {
        series: {
            bars: {
                show: true,
                fill: 1,
            }
        },
        grid: {
            hoverable: true,
            clickable: true,
            tickColor: "#e6e7e8",
            borderWidth: 0
        },
        colors: ["#9f9f9f", "#4f5259"],
        xaxis: {
            autoscaleMargin: 0.05,
            tickColor: "transparent",
            ticks: [[1, "Q1"], [2, "Q2"], [3, "Q3"], [4, "Q4"]],
            tickDecimals: 0,
            font: {
                color: '#8c8c8c',
                size: 12
            }
        },
        yaxis: {
            ticks: [0, 25, 50, 75, 100],
            font: {
                color: '#8c8c8c',
                size: 12
            },
            tickFormatter: function (val, axis) {
                return "$" + val + "K";
            }
        },
        legend : {
            labelBoxBorderColor: 'transparent'
        }
    });



    var previousPoint = null;
        $("#site-statistics,#budget-variance").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));
        if (item) {
            if (previousPoint != item.dataIndex) {
                previousPoint = item.dataIndex;

                $("#tooltip").remove();
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                showTooltip(item.pageX, item.pageY, item.series.label + ": " + Math.round(y));

            }
        } else {
            $("#tooltip").remove();
            previousPoint = null;
        }
    });

    var previousPointBar = null;
        $("#budget-variance").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));
        if (item) {
            if (previousPointBar != item.dataIndex) {
                previousPointBar = item.dataIndex;

                $("#tooltip").remove();
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                showTooltip(item.pageX+30, item.pageY, item.series.label + ": $" + Math.round(y)+"K");

            }
        } else {
            $("#tooltip").remove();
            previousPointBar = null;
        }
    });



    function showTooltip(x, y, contents) {
        $('<div id="tooltip" class="tooltip top in"><div class="tooltip-inner">' + contents + '<\/div><\/div>').css({
            display: 'none',
            top: y - 40,
            left: x - 55,
        }).appendTo("body").fadeIn(200);
    }



    var container = $("#server-load");

    // Determine how many data points to keep based on the placeholder's initial size;
    // this gives us a nice high-res plot while avoiding more than one point per pixel.

    var maximum = container.outerWidth() / 2 || 300;
    var data = [];

    function getRandomData() {

        if (data.length) {
            data = data.slice(1);
        }

        while (data.length < maximum) {
            var previous = data.length ? data[data.length - 1] : 50;
            var y = previous + Math.random() * 10 - 5;
            data.push(y < 0 ? 0 : y > 100 ? 100 : y);
        }

        // zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]])
        }
        return res;
    }

    //

    series = [{
        data: getRandomData()
    }];

    //

    var plot = $.plot(container, series, {
        series: {
            lines: {
                show: true,
                lineWidth: 1.5,
                fill: 0.15
            },
            shadowSize: 0
        },
        grid: {
            
            labelMargin: 10,
            tickColor: "#e3e4e6",
            borderWidth: 0
        },
        colors: ["#f39e17"],
        xaxis: {
            tickFormatter: function() {
                return "";
            },
            tickColor: "transparent"
        },
        yaxis: {
            min: 0,
            max: 100,
            font: {
                color: '#8c8c8c',
                size: 12
            }
        },
        legend: {
            show: true
        }
    });

    // Update the random dataset at 25FPS for a smoothly-animating chart

    setInterval(function updateRandom() {
        series[0].data = getRandomData();
        plot.setData(series);
        plot.draw();
    }, 40);









});



// If screensize > 1200, render with m/w/d view, if not by default render with just title

renderCalendar({left: 'title',right: 'prev,next'});
try {
    enquire.register("screen and (min-width: 1200px)", {
        match : function() {
            $('#calendar-drag').removeData('fullCalendar').empty();
            renderCalendar({left: 'prev,next',center: 'title',right: 'month,basicWeek,basicDay'});
        },
        unmatch : function() {
            $('#calendar-drag').removeData('fullCalendar').empty();
            renderCalendar({left: 'title',right: 'prev,next'});
        }
    });
}
catch(e) {
    //ignore errors
}

function renderCalendar(headertype) {

    // Demo for FullCalendar with Drag/Drop internal

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    var calendar = $('#calendar-drag').fullCalendar({
        header: headertype,
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                calendar.fullCalendar('renderEvent',
                    {
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay
                    },
                    true // make the event "stick"
                );
            }
            calendar.fullCalendar('unselect');
        },
        editable: true,
        events: [
            {
                title: 'All Day Event',
                start: new Date(y, m, 1),
                backgroundColor: '#F39C12'
            },
            {
                title: 'Long Event',
                start: new Date(y, m, d-5),
                end: new Date(y, m, d-2),
                backgroundColor: '#16A085'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d-3, 16, 0),
                allDay: false,
                backgroundColor: '#E73C3C'
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d+4, 16, 0),
                allDay: false,
                backgroundColor: '#E73C3C'
            },
            {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false,
                backgroundColor: '#76C4ED'
            },
            {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
                backgroundColor: '#2C3E50'
            },
            {
                title: 'Birthday Party',
                start: new Date(y, m, d+1, 19, 0),
                end: new Date(y, m, d+1, 22, 30),
                allDay: false,
                backgroundColor: '#2BBCE0'
            },
            {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/',
                backgroundColor: '#F1C40F'
            }
        ],
        buttonText: {
            prev: '<i class="icon-angle-left"></i>',
            next: '<i class="icon-angle-right"></i>',
            prevYear: '<i class="icon-double-angle-left"></i>',  // <<
            nextYear: '<i class="icon-double-angle-right"></i>',  // >>
            today:    'Today',
            month:    'Month',
            week:     'Week',
            day:      'Day'
        }
    });

    // Listen for click on toggle checkbox
    $('#select-all').click(function(event) {
        if(this.checked) {
            $('.selects :checkbox').each(function() {
                this.checked = true;
            });
        } else {
            $('.selects :checkbox').each(function() {
                this.checked = false;
            });
        }
    });

}


// CKEditor smaller toolbar
// CKEDITOR.config.toolbar = [
//    ['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-'],['Format','Font','FontSize'],['NumberedList','BulletedList','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Image','-','Link','Flash','Smiley','TextColor','BGColor']
// ] ;