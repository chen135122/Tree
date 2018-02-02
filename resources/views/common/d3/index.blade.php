<!DOCname html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>

        body {
            overflow: hidden;
        }

        path.link {
            fill: none;
            stroke-width: 1px;
        }

        #count {
            float: left;
            font-weight: bold;
            font-size: 18px;
            margin-left: 10px;
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

        #slider {
            position: fixed;
            left: 20px;
            bottom: 50%;
            margin-bottom: -200px;
            width: 20px;
            height: 400px;
            z-index: 100;
        }

        /*.slider-segment {*/
        /*background-color: #d6dbe0;*/
        /*border-radius: 50%;*/
        /*height: 6px;*/
        /*margin: 120px 7px 0 7px;*/
        /*width: 6px;*/
        /*}*/

        /*.slider-handle {*/
        /*position: absolute;*/
        /*left: 0;*/
        /*bottom: 0;*/
        /*width: 20px;*/
        /*height: 50%;*/
        /*background: rgb(100, 149, 237);*/
        /*border-radius: 10px;*/
        /*}*/

        #slider a {
            /*position: absolute;*/
            /*display: inline-block;*/
            /*bottom: 50%;*/
            /*margin-bottom: -15px;*/
            /*left: -5px;*/
            /*width: 30px;*/
            /*height: 30px;*/
            transition: all 0.1s;
            background: rgb(41, 112, 237);
            /*border-radius: 50%;*/
            /*z-index: 220;*/
        }

        #slider a:hover {
            background: rgb(12, 84, 237);
        }

        #slider .ui-slider-range {
            background: rgb(100, 149, 237);
        }

        #ring {
            position: fixed;
            width: 150px;
            height: 500px;
            top: 30px;
            right: 10px;
            z-index: 999;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #ring > ul {
            width: 150px;
            height: 100%;
            margin: 0;
            padding: 20px 0;
            list-style-type: none;
        }

        #ring > ul > li {
            float: left;
            width: 100%;
            height: 30px;
            text-align: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

        #ring > ul > li:last-child {
            margin-bottom: 0;
        }

        #info {
            position: fixed;
            bottom: 60px;
            right: 150px;
            width: 745px;
            /*height: 150px;*/
            height: 0;
            visibility: hidden;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ddd;
            cursor: move;
            z-index: 9999;
        }

        #info > .header {
            width: 745px;
            height: 30px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            text-align: center;
            line-height: 30px;
        }

        #info > .title {
            width: 745px;
            height: 30px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        #info > .title > div {
            border-right: 1px solid #ddd;
            float: left;
            width: 123px;
            height: 30px;
            line-height: 30px;
            text-align: center;
        }

        #info > .title > div:last-child {
            border-right: 0;
        }

        #info > .content {
            width: 744px;
            height: 120px;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #info > .content > div {
            width: 744px;
            height: 30px;
            border-bottom: 1px solid #ddd;
        }

        /*#info > .content > div:last-child {*/
        /*border-bottom: 0;*/
        /*}*/

        #info > .content > div > div {
            border-right: 1px solid #ddd;
            float: left;
            width: 123px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            font-size: 12px;
            overflow: hidden;
        }

        #info > .content > div > div:last-child {
            border-right: 0;
        }

        .line1 {
            stroke: red;
        }

        .circle {
            fill: rgb(100, 149, 237);
        }

        .circle1 {
            fill: rgb(105, 139, 34);
        }

        .circle2 {
            fill: red;
        }

        /*path.link.resolved {*/
        /*stroke-dasharray: 0,2 1;*/
        /*}*/

        #slider-h {
            position: fixed;
            bottom: 30px;
            left: 50%;
            margin-left: -600px;
            width: 1150px;
            height: 12px;
            padding: 0 20px;
        }

        #slider-h a {
            /*position: absolute;*/
            /*display: inline-block;*/
            /*bottom: 50%;*/
            /*margin-bottom: -15px;*/
            /*left: -5px;*/
            /*width: 30px;*/
            /*height: 30px;*/
            transition: all 0.1s;
            background: rgb(41, 112, 237);
            /*border-radius: 50%;*/
            /*z-index: 220;*/
        }

        #slider-h a:hover {
            background: rgb(12, 84, 237);
        }

        #slider-h .ui-slider-range {
            background: rgb(100, 149, 237);
        }

        #prev {
            position: absolute;
            top: -12px;
            left: -50px;
            cursor: pointer;
        }

        #next {
            position: absolute;
            top: -12px;
            right: -50px;
            cursor: pointer;
        }

        .ui-slider-value.first {
            position: absolute;
            left: 18px;
            top: -10px;
        }

        .ui-slider-value.last {
            position: absolute;
            left: 18px;
            bottom: 0;
        }

    </style>
    <link rel="stylesheet" href="/css/flat-ui.css"/>
</head>
<body>
<div id="main">
    <div id="count"></div>
    <div id="menu">
        <a href="javascript:window.close();">回到上一页</a>
        <a href="javascript:window.location.reload();">静态图</a>
        <a href="javascript:void(0)" id="start">开始动画</a>
        <a href="javascript:void(0)" id="save">保存位置</a>
    </div>
</div>

<div id="slider">
    <!--<div class="slider-segment"></div>-->
    <!--<div class="slider-segment"></div>-->
    <!--<div class="slider-segment"></div>-->
    <!--<div class="slider-handle"></div>-->
    <!--<a href="javascript:void(0)"></a>-->
    <div id="vertical-slider" style="height: 400px;">
        <span class="ui-slider-value first">5</span>
        <span class="ui-slider-value last">1</span>
    </div>
</div>
<div id="slider-h">
    <a href="javascript:void(0)" class="btn btn-primary" id="prev">
        <i class="fui-arrow-left"></i>
    </a>
    <div id="horizontal-slider" style="height: 12px;">
        <span class="ui-slider-value first"></span>
        <span class="ui-slider-value last"></span>
    </div>
    <a href="javascript:void(0)" class="btn btn-primary" id="next">
        <i class="fui-arrow-right"></i>
    </a>
</div>
<div id="container">

</div>
<div id="ring">

</div>
<div id="info">
    <div class="header">
        交易明细表
    </div>
    <div class="title">
        <div>group</div>
        <div>flow</div>
        <div>发起账户</div>
        <div>接收账号</div>
        <div>交易金额</div>
        <div>时间</div>
    </div>
    <div class="content">

        <!--<div>-->
        <!--<div>-->
        <!--<span>2005000005</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>11111111111111</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>¥1000000</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>2017-6-16 19:00:00</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div>-->
        <!--<div>-->
        <!--<span>2005000005</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>11111111111111</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>¥1000000</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>2017-6-16 19:00:00</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div>-->
        <!--<div>-->
        <!--<span>2005000005</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>11111111111111</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>¥1000000</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>2017-6-16 19:00:00</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div>-->
        <!--<div>-->
        <!--<span>2005000005</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>11111111111111</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>¥1000000</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>2017-6-16 19:00:00</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div>-->
        <!--<div>-->
        <!--<span>2005000005</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>11111111111111</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>¥1000000</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>2017-6-16 19:00:00</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div>-->
        <!--<div>-->
        <!--<span>2005000005</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>11111111111111</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>¥1000000</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>2017-6-16 19:00:00</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div>-->
        <!--<div>-->
        <!--<span>2005000005</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>11111111111111</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>¥1000000</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>2017-6-16 19:00:00</span>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div>-->
        <!--<div>-->
        <!--<span>2005000005</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>11111111111111</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>¥1000000</span>-->
        <!--</div>-->
        <!--<div>-->
        <!--<span>2017-6-16 19:00:00</span>-->
        <!--</div>-->
        <!--</div>-->
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/flat-ui.min.js"></script>
<script src="/js/d3.min.js"></script>

<script>

    var dataset = {!! $dataset !!};
    
    var size = dataset.links.length;

    var array = [];
    var arrayID = {};
    var index = 0;
    var w = window.innerWidth,
        h = window.innerHeight;
    var color = d3.scaleOrdinal(d3.schemeCategory20);
    var force = d3.forceSimulation()
        .nodes(dataset.nodes)
        .force("link", d3.forceLink(dataset.links).distance(100))
        .force("charge", d3.forceManyBody(-1500).strength(-1550).distanceMin(-100).distanceMax(-500))
        .force("center", d3.forceCenter(w / 2, h / 2));


    var zoom = d3.zoom().scaleExtent([1, 10])
        .on('zoom', zoomed);


    var op = 0;

    // for (var i = 0; i < dataset.links.length; i++) {
    //     for (var j = i + 1; j < dataset.links.length; j++) {
    //         console.log("dataset.links[i].source.name "+dataset.links[i].source.name);
    //         console.log("dataset.links[j].source.name "+dataset.links[j].source.name);
    //         console.log("dataset.links[i].target.name "+dataset.links[i].target.name);
    //         console.log("dataset.links[j].target.name "+dataset.links[j].target.name);
    //         if (dataset.links[i].source.name === dataset.links[j].source.name && dataset.links[i].target.name === dataset.links[j].target.name) {
    //             arrayID[i] = true;
    //         } else {
    //             arrayID[i] = false;
    //         }
    //     }
    // }

    // for (var i = 0; i < dataset.links.length; i++) {
    //     arrayID[0] = false;
    //     for (var j = i + 1; j < dataset.links.length; j++) {
    //         console.log("dataset.links[i].source.name "+dataset.links[i].source.name);
    //         console.log("dataset.links[j].source.name "+dataset.links[j].source.name);
    //         console.log("dataset.links[i].name "+dataset.links[i].name);
    //         console.log("dataset.links[j].name "+dataset.links[j].name);
    //         console.log("dataset.links[i].target.name "+dataset.links[i].target.name);
    //         console.log("dataset.links[j].target.name "+dataset.links[j].target.name);
    //         if (dataset.links[i].source.name === dataset.links[j].name && dataset.links[i].target.name === dataset.links[j].target.name) {
    //             arrayID[i] = true;
    //             op++;
    //         } else {
    //             arrayID[i] = false;
    //         }
    //     }
    //     op = i;
    // }


    // var arrayID = {};

    for (var i = 0; i < dataset.links.length; i++) {
        for (var j = i + 1; j < dataset.links.length; j++) {
            // console.log("dataset.links[i].source.name " + dataset.links[i].source.name);
            // console.log("dataset.links[j].source.name " + dataset.links[j].source.name);
            // console.log("dataset.links[i].name " + dataset.links[i].name);
            // console.log("dataset.links[j].name " + dataset.links[j].name);
            // console.log("dataset.links[i].target.name " + dataset.links[i].target.name);
            // console.log("dataset.links[j].target.name " + dataset.links[j].target.name);
            if (dataset.links[i].source.name === dataset.links[j].source.name && dataset.links[i].target.name === dataset.links[j].target.name) {
                //  arrayID[i] = true;
                if (!arrayID[j] && (j - 1) !== i) {
                    arrayID[j] = true;
                }

                // op++;
            }
            // else {
            //     arrayID[i] = false;
            //     arrayID[i] = false;
            // }
        }
        // op = i;
    }

    console.log(arrayID);


    force.on('tick', tick);


    // var force = d3.forceSimulation()
    //     .dataset.nodes(d3.values(dataset.nodes))
    //     .dataset.links(dataset.links)
    //     .size([w, h])
    //     .linkDistance(360)
    //     .charge(-300)
    //     .on("tick", tick)
    //     .start();

    var svg = d3.select("#container").append("svg")
        .attr("width", w)
        .attr("height", h)
        .attr("preserveAspectRatio", "xMidYMid meet")
        .append('g')
        .attr('transform', 'translate(0,0)')
        .call(zoom);

    document.getElementById("count").innerHTML = "资金运转交易链(共计" + dataset.circuit.length + "个环路,涉及账户" + dataset.account + "个,交易" + dataset.transaction + "笔)";

    svg.append("defs").selectAll("marker")
        .data([0])
        .enter()
        .append("marker")
        .attr("id", 'arrow')
        .attr("viewBox", "0 -5 10 10")
        .attr('preserveAspectRatio', 'xMidYMid meet')
        .attr('markerUnits', 'userSpaceOnUse')
        .attr("refX", 15.5)
        .attr("refY", -1.8)
        .attr("markerWidth", 10)
        .attr("markerHeight", 10)
        .attr("orient", "auto")
        .append("path")
        .attr("d", "M0,-5L10,0L0,5");

    // svg.append("defs").selectAll("marker")
    //     .data([0])
    //     .enter()
    //     .append("marker")
    //     .attr("id", "arrow")
    //     .attr("preserveAspectRatio", "xMidYMid meet")
    //     .attr('markerUnits', 'userSpaceOnUse')
    //     .attr("markerWidth", "20")
    //     .attr("markerHeight", "20")
    //     .attr("viewBox", "0 0 15 15")
    //     .attr("refX", "32.4")
    //     .attr("refY", "2.95")
    //     .attr("orient", "auto")
    //     .append("path")
    //     .attr("d", "M2,2 L10,6 L2,10 L6,6 L2,2");
    var t = svg.append("g").selectAll("path");


    var ts = false;
    // var txt = t.data(dataset.links).enter().append('text').attr('dx', 35).style('font-size', '12px').append('textPath').attr('class', function (d, i) {
    //     return 'link' + d.name;
    // }).attr('xlink:href', function (d, i) {
    //     return '#link' + d.name + i;
    // }).text(function (d) {
    //     return d.info;
    // });
    // txt.style('display', 'none');
    console.log(dataset.links);

    function dragstarted(d) {
        if (!d3.event.active) force.alphaTarget(0.3).restart();
        d.fx = d.x;
        d.fy = d.y;
    }

    function dragged(d) {
        d.fx = d3.event.x;
        d.fy = d3.event.y;
    }

    function dragended(d) {
        if (!d3.event.active) force.alphaTarget(0).restart();
        d.fx = null;
        d.fy = null;
    }

    var gc = false;
    var textgroup = svg.append("g").selectAll("circle")
        .data(force.nodes())
        .enter()
        .append('g');

    var circle = textgroup.append("circle")
        .attr('id', function (d) {
            return 'circle-' + d.name;
        })
        .attr('class', function (d, i) {
            return 'circle';
        })
        .attr("r", 7.5)
        .call(d3.drag()
            .on("start", dragstarted)
            .on("drag", dragged)
            .on("end", dragended)).on('click', function (d, i) {
            if (animation === false) {
                if (op) {
                    var id = d3.select(".circle2").attr('class').indexOf('circle2');
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                    console.log(1);
                    op = false;
                    //  gs = false;
                }
                $("#info").css("visibility", "hidden");
                $("#info").css("height", "0");
                $("#info>.content").html("");
                d3.selectAll('path').style('stroke-width', 1).style('display', 'none');
                d3.selectAll('defs path').style('stroke-width', 1).style('display', 'inline');
                d3.selectAll('.link' + d.name).style('stroke-width', '1px').style('display', 'inline');
                console.log(d);
                var o = d3.selectAll('.link')._groups[0];
                //
                for (var i = 0; i < o.length; i++) {
                    for (var j = 0; j < d.source.length; j++) {
                        console.log(o[i].className.baseVal)
                        if (o[i].className.baseVal.indexOf('link1-' + d.source[j].name + '-' + d.name) !== -1) {
                            $(o[i]).css({
                                'stroke-width': '1px',
                                'display': 'inline'
                            })
                        }
                    }
                }
            }


            // console.log(dataset.nodes)

//             var name = d.name;
// // 获取
//             var temp;
//             for (var j = 0; j < dataset.links.length; j++) {
//                 if (name === dataset.links[j].name) {
//                     for (var i = 0; i < d.target.length; i++) {
//                         if (i === 0) {
//                             d3.selectAll('.link-' + name + '-' + d.target[i].name).style('stroke-width', '3px').style('display', 'inline');
//                             temp = d.target[i].name;
//                         } else {
//                             d3.selectAll('.link-' + temp + '-' + d.target[i].name).style('stroke-width', '3px').style('display', 'inline');
//                             temp = d.target[i].name;
//                         }
//                     }
//                 }
//             }

            //d3.selectAll('marker').attr("markerWidth", 2).attr("markerHeight", 2).attr('refX',30).attr('refY',-1);
        });
    var tmp = null;
    var ids = 0;
    console.log("-------->");
    var text = textgroup.append("text")
        .attr('id', function (d, i) {
            return 'text' + '-' + d.name;
        })
        .style('font-size', '12px')
        .attr('text-decoration', 'none')
        .attr('text-anchor', 'middle')
        .attr('pointer-events', 'none')
        .attr('white-space', 'nowrap')
        .attr('dy', '.4em')
        .style('fill', '#000000')
        .html(function (d) {
            // if (d.title.length > 5) {
            //  //   return '<tspan x="0" y="' + (-15) + '">' + d.title.substring(0, 5) + '</tspan><tspan x="0" y="' + -20 + '">' + d.title.substr(5) + '</tspan>';
            // }
            return '<tspan x="0" y="-20">' + d.title + '</tspan>';
        });
    var path = t.data(dataset.links)
        .enter().append("path")
        .attr('id', function (d, i) {
            return 'link' + d.name + i;
        })
        .attr("class", function (d, i) {
            /*if (tmp === null) {
             return 'link link' + d.name + ' link-' + d.name + '-' + d.target.name + ' link-' + d.name + '-' + d.target.name + '-' + i + ' link1-' + d.name + '-' + d.target.name;
             tmp = d.target.name;
             } else {
             return 'link link' + d.name + ' link-' + tmp + '-' + d.name + ' link-' + d.name + '-' + d.target.name + '-' + i + ' link1-' + d.name + '-' + d.target.name;
             tmp = null;
             }*/
            // console.log(' link2-' + d.name + '-' + d.target.name + '-' + i)
            return 'link link' + d.name + ' link-' + d.name + '-' + d.target.name + ' link2-' + d.name + '-' + d.target.name + '-' + i + ' link1-' + d.name + '-' + d.target.name;
        })
        .attr("marker-end", function (d) {
            return "url(#arrow)";
        });


    var tems;
    for (var g = 0; g < dataset.circuit.length; g++) {
        var u = dataset.circuit[g].target;
        var f = d3.select('.link' + dataset.circuit[g].name)._groups[0];
        // var os = {
        //     obj: f[0],
        //     name: dataset.circuit[g].name,
        //     sub: null,
        //     money: null,
        //     datetime: null,
        //     count: g
        // };
        // //  console.log(os);
        // array.push(os);

        for (var h = 0; h < u.length; h++) {
            if (h === 0) {

                var b = d3.selectAll('.link2-' + dataset.circuit[g].name + '-' + u[h].name + '-' + ids)._groups[0];
                var txts = d3.select('#text-' + dataset.circuit[g].name)._groups[0];
                // for (var y = 0; y < b.length; y++) {
                //
                //     var os = {
                //         obj: b[y],
                //         name: null,
                //         sub: u[h].name,
                //         money: u[h].money,
                //         datetime: u[h].datetime,
                //         count: null
                //     };
                //     //console.log(os);
                //     array.push(os);
                // }
                // var os = {
                //     obj: b[0],
                //     name: null,
                //     sub: u[h].name,
                //     money: u[h].money,
                //     datetime: u[h].datetime,
                //     count: null
                // };

                var os = {
                    obj: b[0],
                    name: dataset.circuit[g].name,
                    sub: u[h].name,
                    money: u[h].money,
                    datetime: u[h].datetime,
                    count: g,
                    trigger: false,
                    text: txts
                };

                array.push(os);
                tems = u[h].name;
            }
            else {
                var b = d3.selectAll('.link2-' + tems + '-' + u[h].name + '-' + ids)._groups[0];
                var txts = d3.select('#text-' + tems)._groups[0];
                tems = u[h].name;
                // for (var y = 0; y < b.length; y++) {
                //     console.log('.link-' + dataset.circuit[g].name + '-' + u[h].name)
                //     var os = {
                //         obj: b[y],
                //         name: null,
                //         sub: u[h].name,
                //         money: u[h].money,
                //         datetime: u[h].datetime,
                //         count: null
                //     };
                //     array.push(os);
                // }
                var os = {
                    obj: b[0],
                    name: null,
                    sub: u[h].name,
                    money: u[h].money,
                    datetime: u[h].datetime,
                    count: g,
                    trigger: true,
                    text: txts
                };

                array.push(os);
            }
            ids++;
        }
        // ids++;
    }

    path.attr('stroke', function (d, i) {
        return color(array[i].count);
    });


    var animation = false;
    var gs = false;
    d3.select(document).on('click', function (d, i) {

        if (animation === false) {
            if (d3.event.target.nodeName !== 'circle' && d3.event.target.nodeName !== 'path' && d3.event.target.nodeName !== 'text' && d3.event.target.nodeName !== 'LI' && d3.event.target.nodeName !== 'DIV' && d3.event.target.nodeName !== 'A' && d3.event.target.nodeName !== 'SPAN' && d3.event.target.id !== 'vertical-slider') {
                $("path").removeClass("line1");
                $("text").css('display', 'inline');
                if (animation === false) {
                    d3.selectAll('path').style('stroke-width', 1).style('display', 'inline');
                    $("#info").css("visibility", "hidden");
                    $("#info").css("height", "0");
                    $("#info>.content").html("");
                }
                if (op) {
                    var id = d3.select(".circle2").attr('class').indexOf('circle2');
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                    op = false;
                    //  gs = false;
                }

                // d3.select("#circle-" + name).classed(d3.select("#circle-" + name).attr('class').substring(0,-8), true);
                // if (!ts) {
                //     txt.style('display', 'none');
                // }
            }
        }

    });
    console.log("-------->");


    var index2 = 0;
    var gf = 0;
    var bi = 0;
    var op = false;
    var ss = false;
    var gid = 0;
    var move = 0;
    var svg2 = d3.select("#ring").append('ul');
    var g = svg2.selectAll('ul').data(dataset.circuit).enter().append('li');


    g.append('span').style('color', function (d, i) {
        return color(i);
    }).text(function (d, i) {
        return 'flow' + (i + 1);
    }).on('click', function (d, k) {


        if (animation === false) {
            // save = true;
            // animation = true;
            d3.selectAll('path').style('stroke-width', 1).style('display', 'none');
            d3.selectAll('defs path').style('stroke-width', 1).style('display', 'inline');
            $("text").css('display', 'none');

            $("#info>.content").html("");
            if (op) {

                $("#info").css("visibility", "hidden");
                $("#info").css("height", "0");
                $("#info>.content").html("");
                var id = d3.select(".circle2").attr('class').indexOf('circle2');
                d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                op = false;

            }
            if (op === false) {
                $("#info>.content").html("");
                $("#info").css("visibility", "visible");
                $("#info").css("height", "180px");

                //   var index3 = 0;
                // var len = 0;
                var name = d.name;
                // var tst = d.target.length - 1;
                d3.select("#circle-" + name).classed("circle2", true);

                var temp;
                for (var j = 0; j < array.length; j++) {
                    if (name === array[j].name && k === array[j].count) {
                        // index3 = j;
                        // index = j;
                        var count = 0;

                        var i = j + 1;
                        try {
                            while (array[i].trigger !== false) {

                                op = true;
                                if (count === 0) {
                                    $(array[i - 1].obj).css('stroke-width', '1px').css('display', 'inline');
                                    $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');

                                    $(array[i - 1].text).css('display', 'inline');
                                    $(array[i].text).css('display', 'inline');
                                    // $(array[i].obj).css('stroke-width', '3px').css('display', 'inline');
                                    // temp = (array[i].name === null ? array[i].sub : array[i].name);
//                                    if (array[index].name === null) {
//                                        console.log(array[index].sub);
//
//                                    } else {
//                                        var id = index + 1;
//                                        if (id < array.length) {
//                                            $("#info>.content").append("<div><div><span>" + array[index].name + "</span></div><div><span>" + array[id].sub + "</span></div><div><span>¥" + array[id].money + "</span></div><div><span>" + array[id].datetime + "</span></div></div>");
//                                            tiw = array[id].sub;
//                                        }
//                                    }
                                    $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + name + "</span></div><div><span>" + array[i - 1].sub + "</span></div><div><span>¥" + array[i - 1].money + "</span></div><div><span>" + array[i - 1].datetime + "</span></div></div>")
                                    $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + array[i - 1].sub + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
                                    temp = array[i].sub;
                                } else {
                                    $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');
                                    $(array[i].text).css('display', 'inline');

                                    // if (temp !== (array[i].name === null ? array[i].sub : array[i].name)) {
                                    //     $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + (array[i].name === null ? array[i].sub : array[i].name) + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
                                    //     temp = (array[i].name === null ? array[i].sub : array[i].name);
                                    // }
                                    if (array[i].name === null) {
                                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + temp + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
                                        // $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                                        temp = array[i].sub;

                                    } else {
                                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
                                        // $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                                        temp = array[i].sub;
                                    }
                                }
                                count++;
                                i++;
                            }
                        } catch (e) {

                        }

                        // len = count;

                        count = 0;

                        break;
                    }
                }


            }
        }
        //  txt.style('display', 'none');

        // d3.selectAll('.link-' + d.name).style('stroke-width', 3).style('display', 'inline');
    });

    var opens = 0;
    var childrens = false;
    var timer = null;
    var tr = false;
    g.append('a').text('播放动画').style('margin-left', '10px').on('click', function (d, k) {
        var self = this;
        childrens = true;
        // start.innerText = '开始动画';
        console.log($("#start").text())
        if (timer) {
            clearTimeout(timer);
            timer = setTimeout(function () {

                if (animation === false && $("#start").text() !== "停止动画") {
                    $(self).text('停止动画');
                    if ($("#start").text() === "开始动画" && $(self).text() === "停止动画") {
                        tr = false;
                    }
                    save = true;
                    d3.selectAll('path').style('stroke-width', 1).style('display', 'none');
                    d3.selectAll('defs path').style('stroke-width', 1).style('display', 'inline');

                    $("#info>.content").html("");
                    if (op) {

                        $("#info").css("visibility", "hidden");
                        $("#info").css("height", "0");
                        $("#info>.content").html("");
                        var id = d3.select(".circle2").attr('class').indexOf('circle2');
                        d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                        op = false;

                    }
                    if (op === false) {

                        $("#info>.content").html("");
                        $("#info").css("visibility", "visible");
                        $("#info").css("height", "180px");

                        var index3 = 0;
                        var len = 0;
                        var name = d.name;
                        var tst = d.target.length - 1;
                        d3.select("#circle-" + name).classed("circle2", true);
                        var temp;
                        for (var j = 0; j < array.length; j++) {
                            if (name === array[j].name && k === array[j].count) {
                                index3 = j;
                                index = j;
                                var count = 0;

                                var i = j + 1;
                                try {
                                    while (array[i].trigger !== false) {

                                        op = true;
//                                 if (count === 0) {
//                                     $(array[i - 1].obj).css('stroke-width', '1px').css('display', 'inline');
//                                     $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');
//                                     // $(array[i].obj).css('stroke-width', '3px').css('display', 'inline');
//                                     // temp = (array[i].name === null ? array[i].sub : array[i].name);
// //                                    if (array[index].name === null) {
// //                                        console.log(array[index].sub);
// //
// //                                    } else {
// //                                        var id = index + 1;
// //                                        if (id < array.length) {
// //                                            $("#info>.content").append("<div><div><span>" + array[index].name + "</span></div><div><span>" + array[id].sub + "</span></div><div><span>¥" + array[id].money + "</span></div><div><span>" + array[id].datetime + "</span></div></div>");
// //                                            tiw = array[id].sub;
// //                                        }
// //                                    }
//                                     $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + name + "</span></div><div><span>" + array[i - 1].sub + "</span></div><div><span>¥" + array[i - 1].money + "</span></div><div><span>" + array[i - 1].datetime + "</span></div></div>")
//                                     $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + array[i - 1].sub + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
//                                     temp = array[i].sub;
//                                 } else {
//                                     $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');
//
//                                     // if (temp !== (array[i].name === null ? array[i].sub : array[i].name)) {
//                                     //     $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + (array[i].name === null ? array[i].sub : array[i].name) + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
//                                     //     temp = (array[i].name === null ? array[i].sub : array[i].name);
//                                     // }
//                                     if (array[i].name === null) {
//                                         $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + temp + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
//                                         // $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
//                                         temp = array[i].sub;
//
//                                     } else {
//                                         $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
//                                         // $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
//                                         temp = array[i].sub;
//                                     }
//                                 }
                                        count++;
                                        i++;
                                    }
                                } catch (e) {

                                }

                                len = count;

                                count = 0;

                                // break;
                            }
                        }

                        opens = k;
                        $("text").css('display', 'none');
                        startAnimation(speed, true, index3 + len + 1, self);

                    }

                }

                if (animation === true && opens === k && $("#start").text() !== "停止动画") {
                    clearInterval(time);
                    time = null;
                    index = 0;
                    $("#info").css("visibility", "hidden");
                    $("#info").css("height", "0");
                    $("#info>.content").html("");
                    d3.selectAll('path').style('stroke-width', 1).style('display', 'inline');
                    d3.selectAll('text').style('stroke-width', 1).style('display', 'inline');
                    op = false;
                    var id = d3.select(".circle2").attr('class').indexOf('circle2');
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                    t1 = false;
                    tr = true;
                    $(self).text('播放动画');
                    animation = false;
                    childrens = true;
                }
            }, 300);
        } else {
            timer = setTimeout(function () {

                if (animation === false && $("#start").text() !== "停止动画") {
                    $(self).text('停止动画');
                    if ($("#start").text() === "开始动画" && $(self).text() === "停止动画") {
                        tr = false;
                    }
                    save = true;
                    d3.selectAll('path').style('stroke-width', 1).style('display', 'none');
                    d3.selectAll('defs path').style('stroke-width', 1).style('display', 'inline');

                    $("#info>.content").html("");
                    if (op) {

                        $("#info").css("visibility", "hidden");
                        $("#info").css("height", "0");
                        $("#info>.content").html("");
                        var id = d3.select(".circle2").attr('class').indexOf('circle2');
                        d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                        op = false;

                    }
                    if (op === false) {

                        $("#info>.content").html("");
                        $("#info").css("visibility", "visible");
                        $("#info").css("height", "180px");

                        var index3 = 0;
                        var len = 0;
                        var name = d.name;
                        var tst = d.target.length - 1;
                        d3.select("#circle-" + name).classed("circle2", true);
                        var temp;
                        for (var j = 0; j < array.length; j++) {
                            if (name === array[j].name && k === array[j].count) {
                                index3 = j;
                                index = j;
                                var count = 0;

                                var i = j + 1;
                                try {
                                    while (array[i].trigger !== false) {

                                        op = true;
//                                 if (count === 0) {
//                                     $(array[i - 1].obj).css('stroke-width', '1px').css('display', 'inline');
//                                     $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');
//                                     // $(array[i].obj).css('stroke-width', '3px').css('display', 'inline');
//                                     // temp = (array[i].name === null ? array[i].sub : array[i].name);
// //                                    if (array[index].name === null) {
// //                                        console.log(array[index].sub);
// //
// //                                    } else {
// //                                        var id = index + 1;
// //                                        if (id < array.length) {
// //                                            $("#info>.content").append("<div><div><span>" + array[index].name + "</span></div><div><span>" + array[id].sub + "</span></div><div><span>¥" + array[id].money + "</span></div><div><span>" + array[id].datetime + "</span></div></div>");
// //                                            tiw = array[id].sub;
// //                                        }
// //                                    }
//                                     $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + name + "</span></div><div><span>" + array[i - 1].sub + "</span></div><div><span>¥" + array[i - 1].money + "</span></div><div><span>" + array[i - 1].datetime + "</span></div></div>")
//                                     $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + array[i - 1].sub + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
//                                     temp = array[i].sub;
//                                 } else {
//                                     $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');
//
//                                     // if (temp !== (array[i].name === null ? array[i].sub : array[i].name)) {
//                                     //     $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + (array[i].name === null ? array[i].sub : array[i].name) + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
//                                     //     temp = (array[i].name === null ? array[i].sub : array[i].name);
//                                     // }
//                                     if (array[i].name === null) {
//                                         $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + temp + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
//                                         // $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
//                                         temp = array[i].sub;
//
//                                     } else {
//                                         $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (k + 1) + "</span></div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
//                                         // $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
//                                         temp = array[i].sub;
//                                     }
//                                 }
                                        count++;
                                        i++;
                                    }
                                } catch (e) {

                                }

                                len = count;

                                count = 0;

                                // break;
                            }
                        }

                        opens = k;
                        $("text").css('display', 'none');
                        startAnimation(speed, true, index3 + len + 1, self);
                    }

                }

                if (animation === true && opens === k && $("#start").text() !== "停止动画") {
                    clearInterval(time);
                    time = null;
                    index = 0;
                    $("#info").css("visibility", "hidden");
                    $("#info").css("height", "0");
                    $("#info>.content").html("");
                    d3.selectAll('path').style('stroke-width', 1).style('display', 'inline');
                    d3.selectAll('text').style('stroke-width', 1).style('display', 'inline');
                    op = false;
                    var id = d3.select(".circle2").attr('class').indexOf('circle2');
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                    t1 = false;
                    tr = true;
                    $(self).text('播放动画');
                    animation = false;
                    childrens = true;
                }
            }, 300);
        }

    });

    var t1 = false;
    var start = document.getElementById('start');
    var k = 1;
    var sx = 0;
    var sy = 0;

    $("#info").mousedown(function (event) {
        var old_left = event.pageX;
        var old_top = event.pageY;
        var old_position_left = $(this).position().left;
        var old_position_top = $(this).position().top;
        $(document).mousemove(function (e) {
            var top = old_position_top + (e.pageY - old_top);
            var left = old_position_left + (e.pageX - old_left);
            if (top < 0) {
                top = 0;
            }
            if (top > $(document).height() - $("#info").height()) {
                top = $(document).height() - $("#info").height();
            }
            if (left > $(document).width() - $("#info").width()) {
                left = $(document).width() - $("#info").width();
            }
            if (left < 0) {
                left = 0;
            }
            $("#info").css({
                top: top,
                left: left
            });
        });
    });
    $("#info").mouseup(function () {
        $(document).off("mousemove");
    });
    // function opens() {
    //     var transform = d3.zoomTransform(svg.node());
    //     var x = 0;
    //     var y = 0;
    //     if (sx === 0 && sy === 0) {
    //         sx = w;
    //         sy = h;
    //         x = 0;
    //         y = 0;
    //     } else {
    //         x = sx/2;
    //         y = sy/2;
    //         sx = x;
    //         sy = y;
    //     }
    //
    //
    //     var direction = -1;
    //     k = k >= 10 ? 10 : k;
    //     zoomed(x * direction, y * direction, k);
    //     ++k;
    // }
    //
    // function closes() {
    //
    // }
    var speed = 500;
    var start1 = false;

    var kk = false;
    var startTimers = null;
    $("#start").click(function () {
        var len = $("#ring>ul>li>a").length;
        for (var p = 0; p < len; p++) {


            // if ($("#start").text() === "开始动画" && $(self).text() === "停止动画") {
            //
            //     tr = false;
            // }

            if ($("#ring>ul>li>a").eq(p).text() === "停止动画" && $(this).text() === "开始动画") {
                tr = false;
                break;
            }

            if ($("#ring>ul>li>a").eq(p).text() !== "停止动画") {
                tr = true;
            }


        }
        if (tr) {
            if (!childrens) {
                start.innerText = '停止动画';
                childrens = false;
                if (startTimers) {
                    clearTimeout(startTimers);
                    startTimers = setTimeout(function () {
                        start1 = true;
                        startAnimation(speed, gs = false, array.length);
                        // animation = false;
                    }, 300);

                } else {
                    startTimers = setTimeout(function () {
                        start1 = true;
                        startAnimation(speed, gs = false, array.length);
                        //  animation = false;
                    }, 300);
                }
            } else {
                start.innerText = '停止动画';
                childrens = false;
                $("#info>.content").html("");
                $("#info").css("visibility", "visible");
                $("#info").css("height", "180px");
                path.style('display', 'none');
                if (startTimers) {
                    clearTimeout(startTimers);
                    startTimers = setTimeout(function () {
                        start1 = true;
                        startAnimation(speed, gs = false, array.length);
                        //   animation = false;
                    }, 300);

                } else {
                    startTimers = setTimeout(function () {
                        start1 = true;
                        startAnimation(speed, gs = false, array.length);
                        //  animation = false;
                    }, 300);
                }
            }

        }

    });

    // var sum = 100;
    $.fn.addSliderSegments = function (amount, orientation) {
        return this.each(function () {
            if (orientation == "vertical") {
                var output = '',
                    i;
                for (i = 1; i <= amount - 2; i++) {
                    if (amount === 1) {
                        output += "<div class=\"ui-slider-segment\" style=top:" + 100 / (amount - 1) * i + "%><span style=margin-right:-20px;padding-left:15px;position:relative;bottom:9px;font-size:14px;>" + (5 - amount) + "</span></div>";
                    }
                    else {
                        //sum += 200;
                        output += "<div class=\"ui-slider-segment\" style=top:" + 100 / (amount - 1) * i + "%><span style=margin-right:-20px;padding-left:15px;position:relative;bottom:9px;font-size:14px;>" + (5 - i) + "</span></div>";
                    }
                }
                $(this).prepend(output);
            } else {
                var segmentGap = 100 / (amount - 0.5) + "%"
                    , segment = '<div class="ui-slider-segment" style="margin-left: ' + segmentGap + ';"></div>';
                $(this).prepend(segment.repeat(amount - 2));
            }
        });
    };
    var ftime = true;
    var time = null;
    var sliderTiw;
    var $verticalSlider = $("#vertical-slider");
    var $horizontalSlider = $("#horizontal-slider");

    var sliderIndex = 0;
    var sliders;

    if ($verticalSlider.length) {
        $verticalSlider.slider({
            min: 1,
            max: 5,
            value: 3,
            orientation: "vertical",
            range: "min",
            slide: function (event, ui) {
                if (time !== null || ftime === false) {
                    if (ui.value === 5) {
                        t1 = false;
                        gs = true;
                        start1 = false;
                        startAnimation(speed = 100, true, array.length);
                    }
                    if (ui.value === 4) {
                        t1 = false;
                        gs = true;
                        start1 = false;
                        startAnimation(speed = 300, true, array.length);
                    }
                    if (ui.value === 3) {
                        t1 = false;
                        gs = true;
                        start1 = false;
                        startAnimation(speed = 500, true, array.length);
                    }
                    if (ui.value === 2) {
                        t1 = false;
                        gs = true;
                        start1 = false;
                        startAnimation(speed = 800, true, array.length);
                    }
                    if (ui.value === 1) {
                        t1 = false;
                        gs = true;
                        start1 = false;
                        startAnimation(speed = 1000, true, array.length);
                    }
                    ftime = false;
                }
            }
        }).addSliderSegments($verticalSlider.slider("option").max, "vertical");
    }
    if ($horizontalSlider.length) {
        sliders = $horizontalSlider.slider({
            min: 0,
            max: array.length,
            value: 0,
            orientation: "horizontal",
            range: "min",
            slide: function (e, ui) {
                e.stopPropagation();
                sliderIndex = ui.value;
                if (animation === false && sliderIndex >= 1) {
                    if (op) {
                        var id = d3.select(".circle2").attr('class').indexOf('circle2');
                        d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                        op = false;
                    }
                    $("#info>.content").html("");
                    $("#info").css("visibility", "visible");
                    $("#info").css("height", "180px");
                    path.style('display', 'none');
                    for (var i = 0; i < sliderIndex; i++) {
                        console.log(array[i])
                        $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');


                        // if (array[i].name === null) {
                        //     $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                        //    sliderTiw = array[i + 1].sub;
                        // } else {
                        //     $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                        //     sliderTiw = array[i + 1].sub;
                        // }

                        if (array[i].name === null) {
                            $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")

                            //   $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                            sliderTiw = array[i].sub;

                        } else {

                            $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
                            //  $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                            sliderTiw = array[i].sub;
                        }
                    }
                } else if (animation === false && sliderIndex === 0) {
                    path.style('stroke-width', '1px').style('display', 'inline');
                    $("#info>.content").html("");
                    $("#info").css("visibility", "hidden");
                    $("#info").css("height", "0");
                }
            }
        });
        sliders.addSliderSegments($horizontalSlider.slider("option").max, "horizontal");
    }


    //    $("#slider").click(function (e) {
    //        e.preventDefault();
    //        e.stopPropagation();
    //        var y = e.offsetY;
    //
    //    });

    $("#prev").click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        --sliderIndex;
        if (sliderIndex <= 0) {
            sliderIndex = 0;
            $horizontalSlider.slider("value", 0);
            if (animation === false && sliderIndex >= 1) {
                if (op) {
                    var id = d3.select(".circle2").attr('class').indexOf('circle2');
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                    op = false;
                }
                $("#info>.content").html("");
                $("#info").css("visibility", "visible");
                $("#info").css("height", "180px");
                path.style('display', 'none');
                for (var i = 0; i < sliderIndex; i++) {
                    console.log(array[i])
                    $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');


                    // if (array[i].name === null) {
                    //     $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                    //    sliderTiw = array[i + 1].sub;
                    // } else {
                    //     $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                    //     sliderTiw = array[i + 1].sub;
                    // }

                    if (array[i].name === null) {
                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")

                        //   $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                        sliderTiw = array[i].sub;

                    } else {

                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
                        //  $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                        sliderTiw = array[i].sub;
                    }
                }
            } else if (animation === false && sliderIndex === 0) {
                path.style('stroke-width', '1px').style('display', 'inline');
                $("#info>.content").html("");
                $("#info").css("visibility", "hidden");
                $("#info").css("height", "0");
            }
        } else {
            $horizontalSlider.slider("value", sliderIndex);
            if (animation === false && sliderIndex >= 1) {
                if (op) {
                    var id = d3.select(".circle2").attr('class').indexOf('circle2');
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                    op = false;
                }
                $("#info>.content").html("");
                $("#info").css("visibility", "visible");
                $("#info").css("height", "180px");
                path.style('display', 'none');
                for (var i = 0; i < sliderIndex; i++) {
                    console.log(array[i])
                    $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');


                    // if (array[i].name === null) {
                    //     $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                    //    sliderTiw = array[i + 1].sub;
                    // } else {
                    //     $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                    //     sliderTiw = array[i + 1].sub;
                    // }

                    if (array[i].name === null) {
                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")

                        //   $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                        sliderTiw = array[i].sub;

                    } else {

                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
                        //  $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                        sliderTiw = array[i].sub;
                    }
                }
            } else if (animation === false && sliderIndex === 0) {
                path.style('stroke-width', '1px').style('display', 'inline');
                $("#info>.content").html("");
                $("#info").css("visibility", "hidden");
                $("#info").css("height", "0");
            }
        }
    });


    $("#next").click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        ++sliderIndex;
        if (sliderIndex >= array.length) {
            sliderIndex = array.length;
            $horizontalSlider.slider("value", array.length);
            if (animation === false && sliderIndex >= 1) {
                if (op) {
                    var id = d3.select(".circle2").attr('class').indexOf('circle2');
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                    op = false;
                }
                $("#info>.content").html("");
                $("#info").css("visibility", "visible");
                $("#info").css("height", "180px");
                path.style('display', 'none');
                for (var i = 0; i < sliderIndex; i++) {
                    console.log(array[i])
                    $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');


                    // if (array[i].name === null) {
                    //     $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                    //    sliderTiw = array[i + 1].sub;
                    // } else {
                    //     $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                    //     sliderTiw = array[i + 1].sub;
                    // }

                    if (array[i].name === null) {
                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")

                        //   $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                        sliderTiw = array[i].sub;

                    } else {

                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
                        //  $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                        sliderTiw = array[i].sub;
                    }
                }
            } else if (animation === false && sliderIndex === 0) {
                path.style('stroke-width', '1px').style('display', 'inline');
                $("#info>.content").html("");
                $("#info").css("visibility", "hidden");
                $("#info").css("height", "0");
            }
        } else {
            $horizontalSlider.slider("value", sliderIndex);
            if (animation === false && sliderIndex >= 1) {
                if (op) {
                    var id = d3.select(".circle2").attr('class').indexOf('circle2');
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                    op = false;
                }
                $("#info>.content").html("");
                $("#info").css("visibility", "visible");
                $("#info").css("height", "180px");
                path.style('display', 'none');
                for (var i = 0; i < sliderIndex; i++) {
                    console.log(array[i])
                    $(array[i].obj).css('stroke-width', '1px').css('display', 'inline');


                    // if (array[i].name === null) {
                    //     $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                    //    sliderTiw = array[i + 1].sub;
                    // } else {
                    //     $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i + 1].sub + "</span></div><div><span>¥" + array[i + 1].money + "</span></div><div><span>" + array[i + 1].datetime + "</span></div></div>");
                    //     sliderTiw = array[i + 1].sub;
                    // }

                    if (array[i].name === null) {
                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")

                        //   $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                        sliderTiw = array[i].sub;

                    } else {

                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[i].count + 1) + "</span></div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")
                        //  $("#info>.content").append("<div><div><span>" + array[i].name + "</span></div><div><span>" + array[i].sub + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>");
                        sliderTiw = array[i].sub;
                    }
                }
            } else if (animation === false && sliderIndex === 0) {
                path.style('stroke-width', '1px').style('display', 'inline');
                $("#info>.content").html("");
                $("#info").css("visibility", "hidden");
                $("#info").css("height", "0");
            }
        }
    });


    var it = 0;
    var sets;
    var temp;
    var counts = 0;
    var n = 0;

    var nsn;

    //    function out(obj, count) {
    //        //console.log(counts);
    //        if (counts < count) {
    //            if (obj.name === dataset.links[counts].name) {
    //                console.log(d3.selectAll('.link-' + obj.name + '-' + obj.target + counts));
    //                d3.select('.link-' + obj.name + '-' + obj.target + counts).style('stroke-width', '3px').style('display', 'inline');
    //                counts++;
    //                out(obj, count);
    //            }
    //            //$(obj[counts]).css('stroke-width', '3px').css('display', 'inline');
    //
    //        } else {
    //            counts = 0;
    //        }
    //    }
    //
    //    function outs(cir, count) {
    //        if (n < count) {
    //
    //            if (n === 0) {
    //                // for (var i = 0; i < dataset.links.length; i++) {
    //                //     if (cir.name === dataset.links[i].name) {
    //                //         d3.selectAll('.link-' + cir.name + '-' + cir.target[n].name + i).style('stroke-width', '3px').style('display', 'inline');
    //                //     }
    //                // }
    //                out({
    //                    name: cir.name,
    //                    target: cir.target[n].name,
    //                }, dataset.links.length);
    //                // var c = d3.selectAll('.link-' + cir.name + '-' + cir.target[n].name)._groups[0];
    //                // out(c, c.length);
    //                temp = cir.target[n].name;
    //                $("#info>.content").append("<div><div><span>" + cir.name + "</span></div><div><span>" + cir.target[n].name + "</span></div><div><span>¥" + cir.target[n].money + "</span></div><div><span>" + cir.target[n].datetime + "</span></div></div>");
    //
    //            } else {
    //                // for (var i = 0; i < dataset.links.length; i++) {
    //                //     if (cir.name === dataset.links[i].name) {
    //                //         d3.selectAll('.link-' + temp + '-' + cir.target[n].name + i).style('stroke-width', '3px').style('display', 'inline');
    //                //     }
    //                // }
    //                out({
    //                    name: temp,
    //                    target: cir.target[n].name,
    //                }, dataset.links.length);
    //                // var c = d3.selectAll('.link-' + temp + '-' + cir.target[n].name)._groups[0];
    //                // out(c, c.length);
    //                $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + cir.target[n].name + "</span></div><div><span>¥" + cir.target[n].money + "</span></div><div><span>" + cir.target[n].datetime + "</span></div></div>");
    //                temp = cir.target[n].name;
    //            }
    //            n++;
    //            outs(cir, count);
    //        } else {
    //            n = 0;
    //        }
    //
    //    }


    var tiw;

    var trigger = false;

    var str = array[0].name;


    var save = false;

    $("#save").click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        if (animation && !save) {
            clearInterval(time);
            index = index2;
            // animation = false;
            start.innerText = '开始动画';
            start1 = true;
            trigger = true;
            t1 = false;
        }
    });

    function startAnimation(speed, target, len, self) {


        if (op) {
            var id = d3.select(".circle2").attr('class').indexOf('circle2');
            d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
            op = false;
            //  gs = false;
        }
        if (start1 === false) {
            clearInterval(time);

            //$("#info>.content").html("");
            start1 = true;
        }

        var pathSize = dataset.circuit.length;


        if (t1 === false && start1 === true) {

//            if (gs) {
//                clearInterval(time);
//            }


            time = setInterval(function () {

                if (target === false && trigger === false) {
                    path.style('display', 'none');
                    $("#info>.content").html("");
                }
                childrens = true;
                t1 = true;
                ts = true;
                ftime = false;
                if (index < len) {
                    $("#info").css("visibility", "visible");
                    $("#info").css("height", "180px");

                    for (var i = 0; i < dataset.circuit.length; i++) {
                        if (dataset.circuit[i].name === array[index].name) {
                            d3.select("#circle-" + array[index].name).classed("circle2", true);
                            if (str !== array[index].name) {
                                var id = d3.select(".circle2").attr('class').indexOf('circle2');
                                if (id !== -1) {
                                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                                }

                                ss = false;
                            }
                            str = array[index].name;
                        }
                    }

                    $(array[index].text).css('display', 'inline');
                    if (array[index].name === null) {
                        //  $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + (array[i].name === null ? array[i].sub : array[i].name) + "</span></div><div><span>¥" + array[i].money + "</span></div><div><span>" + array[i].datetime + "</span></div></div>")

                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[index].count + 1) + "</span></div><div><span>" + sliderTiw + "</span></div><div><span>" + array[index].sub + "</span></div><div><span>¥" + array[index].money + "</span></div><div><span>" + array[index].datetime + "</span></div></div>")

                        //   $("#info>.content").append("<div><div><span>" + sliderTiw + "</span></div><div><span>" + array[index].sub + "</span></div><div><span>¥" + array[index].money + "</span></div><div><span>" + array[index].datetime + "</span></div></div>");
                        sliderTiw = array[index].sub;

                    } else {

                        $("#info>.content").append("<div><div><span>" + dataset.group + "</span></div><div><span>flow" + (array[index].count + 1) + "</span></div><div><span>" + array[index].name + "</span></div><div><span>" + array[index].sub + "</span></div><div><span>¥" + array[index].money + "</span></div><div><span>" + array[index].datetime + "</span></div></div>")

                        // $("#info>.content").append("<div><div><span>" + array[index].name + "</span></div><div><span>" + array[index].sub + "</span></div><div><span>¥" + array[index].money + "</span></div><div><span>" + array[index].datetime + "</span></div></div>");
                        sliderTiw = array[index].sub;
                    }

                    // if (array[index].name === null) {
                    //     console.log(array[index].sub);
                    //     if (tiw !== array[index].sub) {
                    //         $("#info>.content").append("<div><div><span>" + tiw + "</span></div><div><span>" + array[index].sub + "</span></div><div><span>¥" + array[index].money + "</span></div><div><span>" + array[index].datetime + "</span></div></div>");
                    //         tiw = array[index].sub;
                    //     }
                    // } else {
                    //     var id = index + 1;
                    //     if (id < array.length) {
                    //         $("#info>.content").append("<div><div><span>" + array[index].name + "</span></div><div><span>" + array[id].sub + "</span></div><div><span>¥" + array[id].money + "</span></div><div><span>" + array[id].datetime + "</span></div></div>");
                    //         tiw = array[id].sub;
                    //     }
                    // }
                    $("#info>.content")[0].scrollTop = $("#info>.content")[0].scrollHeight;

                    //  console.log($("#info>.content>div").length);

                    trigger = true;
                    animation = true;
                    // var cir = dataset.circuit[index];

                    gs = false;
                    $(array[index].obj).css('stroke-width', '1px').css('display', 'inline');
                    //  $(array[index].obj).css('stroke-width', '1px').css('display', 'inline').addClass("line1");
                    //   gc = true;
                    // if (array[index].count === array[index + 1].count) {
                    //     $(array[index].obj).css('stroke-width', '1px').css('display', 'inline').addClass("line1");
                    // } else {
                    //     $(array[index + 1].obj).css('stroke-width', '1px').css('display', 'inline').addClass("line1");
                    //     if (len === array.length) {
                    //         $("path").removeClass("line1");
                    //     }
                    // }

                    // var sets = setInterval(function () {
                    //     // outs(cir, cir.target.length);
                    //
                    //     if (it < cir.target.length) {
                    //         if (it === 0) {
                    //             d3.selectAll('.link-' + cir.name + '-' + cir.target[it].name).style('stroke-width', '3px').style('display', 'inline');
                    //             temp = cir.target[it].name;
                    //             $("#info>.content").append("<div><div><span>" + cir.name + "</span></div><div><span>" + cir.target[it].name + "</span></div><div><span>¥" + cir.target[it].money + "</span></div><div><span>" + cir.target[it].datetime + "</span></div></div>")
                    //
                    //         } else if (it > 0) {
                    //             d3.selectAll('.link-' + temp + '-' + cir.target[it].name).style('stroke-width', '3px').style('display', 'inline');
                    //             temp = cir.target[it].name;
                    //             $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + cir.target[it].name + "</span></div><div><span>¥" + cir.target[it].money + "</span></div><div><span>" + cir.target[it].datetime + "</span></div></div>")
                    //         }
                    //         it++;
                    //     } else {
                    //         clearInterval(sets);
                    //         it = 0;
                    //     }
                    //     it++;
                    // }, speed);

                    //  clearInterval(sets);


                    index++;
                    index2 = index;

                } else {
                    childrens = false;
                    ftime = true;
                    gs = true;
                    start.innerText = '开始动画';
                    animation = false;
                    t1 = false;
                    trigger = false;
                    tr = true;
                    save = false;
                    $("path").removeClass("line1");
                    index = 0;
                    it = 0;
                    ts = false;
                    start1 = false;
                    clearInterval(time);
                    if (self) {
                        $(self).text('播放动画');
                    }
                    time = null;
                    ss = true;
//                    $("#info").css("visibility", "hidden");
//                    $("#info").css("height", "0");
//                    path.style('stroke-width', '1px');
                    var id = d3.select(".circle2").attr('class').indexOf('circle2');
                    if (id !== -1) {
                        d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                    }
                }
            }, speed);

        } else {
            clearInterval(time);
            $("path").removeClass("line1");
            ftime = true;
            time = null;
            animation = false;
            save = false;
            childrens = false;
//            path.style('stroke-width', '1px');
            if (gs) {
                $("#info>.content").html("");
                path.style('stroke-width', '1px');
                $("#info").css("visibility", "hidden");
                $("#info").css("height", "0");
                var id = d3.select(".circle2").attr('class').indexOf('circle2');
                if (id !== -1) {
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                }
                gs = false;
                ss = true;
            }

            if (t1) {
                trigger = false;
                start.innerText = '开始动画';
                t1 = false;
                ts = false;
                start1 = false;
                //  index2 = index;
                index = 0;
                path.style('display', 'inline').style('stroke-width', '1px');
                $("#info>.content").html("");
                $("#info").css("visibility", "hidden");
                $("#info").css("height", "0");
                var id = d3.select(".circle2").attr('class').indexOf('circle2');
                if (id !== -1) {
                    d3.select(".circle2").attr('class', d3.select(".circle2").attr('class').substring(0, id));
                }
                ss = true;
                t1 = false;
            }


            // txt.style('display', 'none');
        }

    }

    var tmps = {};

    var cgs = 1;
    console.log(arrayID)

    function tick() {

        circle.attr("cx", function (d) {
            return d.x;
        }).attr("cy", function (d) {
            return d.y;
        });

        path.attr("d", function (d, i) {
            // tems.target = {};
            // tems.source = {};
            //
            // if (tems.target.x === d.target.x && tems.target.y === d.target.y && tems.source.x === d.source.x && tems.source.y === d.source.y) {
            //     var dx = d.target.x - d.source.x,
            //         dy = d.target.y - d.source.y,
            //         dr = Math.sqrt((dx + i * 5) * (dx + i * 5) + (dy + i * 5) * (dy + i * 5));
            //     tems = {};
            //     return "M" + d.source.x + i * 5 + ","
            //         + d.source.y + i * 5 + "A" + dr + ","
            //         + dr + " 0 0,1 " + d.target.x + i * 5 + ","
            //         + d.target.y + i * 5;
            // } else {
            //
            //     tems.target.x = d.target.x;
            //     tems.target.y = d.target.y;
            //     tems.source.x = d.source.x;
            //     tems.source.y = d.source.y;
            // }
            // console.log("---->d.target.x" + d.target.x);
            // console.log("---->d.target.y" + d.target.y);
            // console.log("---->d.source.x" + d.source.x);
            // console.log("---->d.source.y" + d.source.y);
            // console.log("----->copy " + arrayID[i]);
            if (arrayID[i]) {
//                console.log(i);
                return "M" + d.source.x + ","
                    + d.source.y + "A" + 15 * (i + 1) + ","
                    + 15 * (i + 1) + " 0 0,1 " + d.target.x + ","
                    + d.target.y;
            }
            var dx = d.target.x - d.source.x,
                dy = d.target.y - d.source.y,
                dr = Math.sqrt((dx + i * 15) * (dx + i * 15) + (dy + i * 15) * (dy + i * 15));
            return "M" + d.source.x + i * 5 + ","
                + d.source.y + i * 5 + "A" + dr + ","
                + dr + " 0 0,1 " + d.target.x + i * 5 + ","
                + d.target.y + i * 5;
        });


        text.attr("transform", function (d) {
            return "translate(" + d.x + "," + d.y + ")";
        });
    }

    function zoomed(x, y, k) {
        svg.attr("transform",
            "translate(" + d3.event.transform.x + "," + d3.event.transform.y + ")" +
            "scale(" + d3.event.transform.k + ")"
        );
    }


</script>
</body>
</html>
