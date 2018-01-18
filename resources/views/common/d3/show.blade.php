<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        .link {
            fill: none;
            stroke: #666;
            stroke-width: 13px;
        }

        .link3 {
            fill: none;
            stroke: #666;
            stroke-width: 11px;
        }

        .link2 {
            fill: none;
            stroke: #666;
            stroke-width: 8px;
        }

        .link4 {
            display: none;
            fill: none;
            stroke: #666;
            stroke-width: 0;
        }

        .link4 text {
            display: none;
        }

        .circle {
            stroke: #333;
            stroke-width: 2px;
        }

        text {
            display: inline;

        }
    </style>
</head>
<body>
<div id="main">

</div>
<script src="/js/d3.min.js"></script>
<script>
    var width = window.innerWidth,
        height = window.innerHeight;
    var dataset = {
        name: '',
        children: [
            {
                name: '662020219',
                money: '1600000016000000',
                children: [
                    {
                        name: '42108',
                        money: '1600000016000000',
                        datetime: '2017-6-15 12:00:00',
                        children: [
                            {
                                name: '1233827242',
                                money: '600000016000000',
                                datetime: '2017-6-15 12:00:00',
                            }, {
                                name: '831864',
                                money: '1000000016000000',
                                datetime: '2017-6-15 12:00:00',
                            }
                        ]
                    }
                ]
            }, {
                name: '1233827241',
                money: '50000016000000',
                children: [
                    {
                        name: '1197906062',
                        money: '50000016000000',
                        datetime: '2017-6-15 12:00:00',
                        children: [
                            {
                                name: '1197906063',
                                money: '35000016000000',
                                datetime: '2017-6-15 12:00:00',
                            }, {
                                name: '5297462',
                                money: '15000016000000',
                                datetime: '2017-6-15 12:00:00',
                            }
                        ]
                    }
                ]
            }
        ]
    };

    var tree = d3.tree().size([height / 2, width / 2 + 300]);
    var root = d3.hierarchy(dataset);
    tree(root);
    var svg = d3.select('#main').append('svg').attr("width", width).attr("height", height);
    var color = d3.scaleOrdinal(d3.schemeCategory20);
    var g = svg.selectAll('g')
        .append('g')
        .attr("transform", "translate(40,0)");
    // var links = g.data(root.descendants().slice(1))
    //     .enter().append('g').attr("class", function (d,i) {
    //         if(i===0||i===1){
    //             return "paths link4";
    //         }
    //         return "paths"
    //     });


    var path = g.data(root.descendants().slice(1))
        .enter().append("path")
        .attr('id', function (d, i) {
            return 'links' + d.data.name+i;
        })
        .attr("class", function (d, i) {
            if (i === 0 || i === 1) {
                return "link4";
            }
            if ((i + 1) === root.descendants().length - 2 || (i + 1) === root.descendants().length - 3) {
                return "link3";
            }
            if ((i + 1) === root.descendants().length - 1 || (i + 1) === root.descendants().length - 4) {
                return "link2";
            }
            return "link";
        })
        .attr("d", function (d) {
            return "M" + d.y + "," + d.x
                + "C" + (d.parent.y + 100) + "," + (d.x)
                + " " + (d.parent.y + 100) + "," + d.parent.x
                + " " + d.parent.y + "," + d.parent.x;
        });
    var txt = g.data(root.descendants().slice(1))
        .enter().append('text').attr('text-anchor', 'start')
        .attr('transform', function (d, i) {
            return 'rotate(180 ' + (d.y-50) + ',' + d.x + ')';
        })
        .attr('x',0)
        .attr('dy', -30).attr('dx', 0).append('textPath')
        .style('display', function (d, i) {
            if (i === 0 || i === 1) {
                return 'none';
            }
            return 'inline';
        }).attr('xlink:href', function (d, i) {
            return '#links' + d.data.name+i;
        }).style('font-size','12px').text(function (d) {
            return '¥' + d.data.money;
        });
    var txt2 = g.data(root.descendants().slice(1))
        .enter().append('text').attr('text-anchor', 'start')
        .attr('transform', function (d, i) {
            return 'rotate(180 ' + (d.y-50) + ',' + d.x + ')';
        })
        .attr('x',0)
        .attr('dy', -15).attr('dx', 0).append('textPath')
        .style('display', function (d, i) {
            if (i === 0 || i === 1) {
                return 'none';
            }
            return 'inline';
        }).style('font-size','12px').attr('xlink:href', function (d, i) {
            return '#links' + d.data.name+i;
        }).text(function (d) {
            return d.data.datetime;
        });
    var nodes = g.data(root.descendants().slice(1))
        .enter().append('g').attr('class', 'circles');

    d3.selectAll('.circles').append('circle').attr('fill', function (d, i) {
        return color(i);
    })
        .attr('r', '8')
        .attr("transform", function (d) {
            return "translate(" + d.y + "," + d.x + ")";
        }).attr('class', 'circle');

    d3.selectAll('.circles').append('text').attr("dy", 3)
        .attr("transform", function (d) {
            return "translate(" + d.y + "," + d.x + ")";
        })
        .attr("x", function (d) {
            return d.children ? -8 : 8;
        })
        .style("text-anchor", function (d) {
            return d.children ? "end" : "start";
        })
        .attr('white-space', 'nowrap')
        .style('font-size', '12px')
        .html(function (d, i) {
            if ((i + 1) === root.descendants().length - 1 || (i + 1) === root.descendants().length - 2 || (i + 1) === root.descendants().length - 3 || (i + 1) === root.descendants().length - 4) {
                return '<tspan x="15" y="1">' + d.data.name + '</tspan>';
            }
            if(i===0||i===1){
                return '<tspan x="-15" y="-10">' + d.data.name + '</tspan><tspan x="-15" y="10">¥' + d.data.money + '</tspan>';
            }
            return '<tspan x="-15" y="1">' + d.data.name + '</tspan>';
        });
</script>
</body>
</html>