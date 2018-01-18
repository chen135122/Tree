<!DOCname html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        path.link {
            fill: none;
            stroke-width: 1px;
        }

        #count {
            float: left;
            font-weight: bold;
            font-size: 18px;
        }

        #menu {
            float: right;
        }

        #menu > a {
            float: left;
            font-size: 18px;
            margin-left: 5px;
        }

        text {
            cursor: pointer;
            font-size: 14px;
        }

        /*path.link.resolved {*/
        /*stroke-dasharray: 0,2 1;*/
        /*}*/
    </style>
</head>
<body>
<div id="main">
    <div id="count"></div>
    <div id="menu">
        <a href="./d3_v4.html">首页</a>
        <a href="javascript:void(0)" id="start" onclick="startAnimation()">开始动画</a>
        <a href="javascript:void(0)" id="save">保存位置</a>
        <a href="javascript:void(0)" id="init">初始启动</a>
        <a href="javascript:void(0)" id="group">交易分组</a>
    </div>
</div>
<script src="/js/d3.min.js"></script>
<script>

    var dataset = {!! $dataset !!};

    var size = dataset.links.length;


    var w = window.innerWidth,
        h = window.innerHeight;
    var color = d3.scaleOrdinal(d3.schemeCategory20);
    var force = d3.forceSimulation()
        .nodes(dataset.nodes)
        .force("link", d3.forceLink(dataset.links).distance(150))
        .force("charge", d3.forceManyBody(-1500).strength(-1550))
        .force("center", d3.forceCenter(w / 2, h / 2));



    force.on('tick', tick);
    // var force = d3.forceSimulation()
    //     .dataset.nodes(d3.values(dataset.nodes))
    //     .dataset.links(dataset.links)
    //     .size([w, h])
    //     .linkDistance(360)
    //     .charge(-300)
    //     .on("tick", tick)
    //     .start();

    var svg = d3.select("body").append("svg")
        .attr("width", w)
        .attr("height", h);

    document.getElementById("count").innerHTML = "资金运转交易链(共计" + dataset.circuit + "个环路,涉及账户" + dataset.account + "个,交易" + dataset.transaction + "笔)";

    svg.append("defs").selectAll("marker")
        .data([0])
        .enter()
        .append("marker")
        .attr("id", 'arrow')
        .attr("viewBox", "0 -5 10 10")
        .attr('preserveAspectRatio', 'xMidYMid meet')
        .attr('markerUnits', 'userSpaceOnUse')
        .attr("refX", 30)
        .attr("refY", -1.4)
        .attr("markerWidth", 15)
        .attr("markerHeight", 15)
        .attr("orient", "auto")
        .append("path")
        .attr("d", "M0,-5L10,0L0,5");


    var t = svg.append("g").selectAll("path");


    var path = t.data(dataset.links)
        .enter().append("path")
        .attr('id', function (d, i) {
            return 'link' + d.name + i;
        })
        .attr("class", function (d, i) {
            return 'link link' + d.name;
        })
        .attr('stroke', function (d, i) {
            return color(i);
        })
        .attr("marker-end", function (d) {
            return "url(#arrow)";
        });

    var txt = t.data(dataset.links).enter().append('text').attr('dx', 35).style('font-size', '12px').append('textPath').attr('class',function (d,i) {
        return 'link'+d.name;
    }).attr('xlink:href', function (d, i) {
        return '#link' + d.name + i;
    }).text(function (d) {
        return d.info;
    });
    txt.style('display', 'none');
    function dragstarted(d) {
        if (!d3.event.active) force.alphaTarget(5.3).restart();
        d.fx = d.x;
        d.fy = d.y;
        console.log(d);
    }

    function dragged(d) {
        d.fx = d3.event.x;
        d.fy = d3.event.y;
        console.log(d3.event.x);
    }

    function dragended(d) {
        if (!d3.event.active) force.alphaTarget(0).restart();
        d.fx = null;
        d.fy = null;
        console.log(d);
    }

    var textgroup = svg.append("g").selectAll("circle")
        .data(force.nodes())
        .enter()
        .append('g');

    var circle = textgroup.append("circle")
        .attr("r", 30)
        .attr('fill', function (d, i) {
            if (i === textgroup.size() - 1) {
                return 'rgb(105, 139, 34)';
            }
            return 'rgb(100, 149, 237)';
        })
        .call(d3.drag()
            .on("start", dragstarted)
            .on("drag", dragged)
            .on("end", dragended)).on('click', function (d, i) {
            d3.selectAll('path').style('stroke-width', 1);
            d3.selectAll('.link' + d.name).style('stroke-width', 3);
            //d3.selectAll('marker').attr("markerWidth", 2).attr("markerHeight", 2).attr('refX',30).attr('refY',-1);
        });
    d3.select(document).on('click', function (d, i) {
        if (d3.event.target.nodeName !== 'circle' && d3.event.target.nodeName !== 'path' && d3.event.target.nodeName !== 'text') {
            d3.selectAll('path').style('stroke-width', 1);
            txt.style('display', 'none');
        }
    });

    var text = textgroup.append("text")
        .style('font-size', '12px')
        .attr('text-decoration', 'none')
        .attr('text-anchor', 'middle')
        .attr('pointer-events', 'none')
        .attr('white-space', 'nowrap')
        .attr('dy', '.4em')
        .style('fill', 'white')
        .html(function (d) {
            if (d.title.length > 4) {
                return '<tspan x="0" y="' + (-7) + '">' + d.title.substring(0, 3) + '</tspan><tspan x="0" y="' + 10 + '">' + d.title.substr(4) + '</tspan>';
            }
            return '<tspan>' + d.title + '</tspan>';
        });

    var g = svg.selectAll('.group').data(force.nodes()).enter().append('g').attr('class', 'group').append('text').attr('x', w - 80).attr('y', function (d, i) {
        return (i + 1) * 20;
    }).attr('fill', function (d, i) {
        return color(i);
    }).text(function (d, i) {
        return 'group' + (i + 1);
    }).on('click', function (d, j) {
        txt.style('display', 'none');
        d3.selectAll('path').style('stroke-width', 1);
        d3.selectAll('.link' + d.name).style('stroke-width', 3).style('display', 'inline');
    });

    var t = false;
    var time;
    var start = document.getElementById('start');

    function startAnimation() {

        var pathSize = path.size();
        var index = 0;


        if (t === false) {
            path.style('display', 'none');
            txt.style('display', 'none');
            start.innerText = '停止动画';
            t = true;
            time = setInterval(function () {
                if (index < pathSize) {
                    path._groups[0][index].style.display = 'inline';
                    txt._groups[0][index].style.display = 'inline';
                    index++;
                } else {
                    clearInterval(time);
                    start.innerText = '开始动画';
                    t = false;
                    index = 0;

                }
            }, 1000);

        } else {
            clearInterval(time);
            start.innerText = '开始动画';
            t = false;
            index = 0;
            path.style('display', 'inline');
            txt.style('display', 'none');
        }

    }

    function tick() {

        path.attr("d", function (d, i) {
            var dx = d.target.x - d.source.x,
                dy = d.target.y - d.source.y,
                dr = Math.sqrt((dx + i * 5) * (dx + i * 5) + (dy + i * 5) * (dy + i * 5));
            return "M" + d.source.x + i * 5 + ","
                + d.source.y + i * 5 + "A" + dr + ","
                + dr + " 0 0,1 " + d.target.x + i * 5 + ","
                + d.target.y + i * 5;
        });

        circle.attr("cx",function(d){return d.x;})
            .attr("cy",function(d){return d.y;});

        text.attr("transform", function (d) {
            return "translate(" + d.x + "," + d.y + ")";
        });
    }
</script>
</body>
</html>
