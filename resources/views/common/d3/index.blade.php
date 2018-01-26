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

        #container {

        }

        #slider {
            position: fixed;
            left: 20px;
            bottom: 50%;
            margin-bottom: -205px;
            width: 40px;
            height: 420px;
            z-index: 100;
            overflow: hidden;

        }

        .slider {
            position: relative;
            margin-top:20px;
            bottom: 0;
            width: 20px;
            height: 400px;
            left: 10px;
            background: #e8edf2;
            border-radius: 10px;

            overflow: hidden;
        }

        .slider > .slider-segment {
            top:10px;
            background-color: #d6dbe0;
            border-radius: 50%;
            float: left;
            height: 6px;
            margin: 100px 7px 0 7px;
            width: 6px;
        }

        .slider-handle {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 20px;
            height: 200px;
            background: rgb(100, 149, 237);
            border-radius: 10px;
            z-index: 120;

        }

        #slider > a {
            position: absolute;
            display: inline-block;
            bottom: 180px;
            left: 5px;
            width: 30px;
            height: 30px;
            transition: all 0.1s;
            background: rgb(41, 112, 237);
            border-radius: 50%;
            z-index: 220;
        }

        #slider > a:hover {
            background: rgb(12, 84, 237);
        }

        #ring {
            position: fixed;
            width: 100px;
            height: 100%;
            top: 30px;
            right: 30px;
            z-index: 999;
        }

        #ring > ul {
            width: 100px;
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

        #info {
            position: fixed;
            bottom: 30px;
            right: 150px;
            width: 500px;
            /*height: 150px;*/
            height: 0;
            visibility: hidden;
            background: white;
            border: 1px solid #ddd;
            cursor: move;
            z-index: 9999;
        }

        #info > .title {
            width: 500px;
            height: 30px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        #info > .title > div {
            border-right: 1px solid #ddd;
            float: left;
            width: 124px;
            height: 30px;
            line-height: 30px;
            text-align: center;
        }

        #info > .title > div:last-child {
            border-right: 0;
        }

        #info > .content {
            width: 500px;
            height: 120px;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #info > .content > div {
            width: 500px;
            height: 30px;
        }

        #info > .content > div > div {
            border-right: 1px solid #ddd;
            float: left;
            width: 124px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 12px;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #info > .content > div > div:last-child {
            border-right: 0;
        }

        .circle {
            fill:rgb(100, 149, 237);
        }
        .circle1 {
            fill:rgb(105, 139, 34);
        }
        .circle2 {
            fill:red;
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
        <a href="javascript:parent.history.go(-1)">向上一步</a>
        <a href="./d3_v4.html">首页</a>
        <a href="javascript:void(0)" id="start">开始动画</a>
    </div>
</div>

<div id="slider">
    <a href="javascript:void(0)"></a>
    <div class="slider">
        <div class="slider-handle"></div>
        <div class="slider-segment"></div>
        <div class="slider-segment"></div>
        <div class="slider-segment"></div>
    </div>
</div>
<div id="container">

</div>
<div id="ring">

</div>
<div id="info">
    <div class="title">
        <div>发起账户</div>
        <div>结束账户</div>
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

<script src="/js/d3.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>

    var dataset = {!! $dataset !!};

    // var dataset = {
    //     links: [{source: 0, target: 1, info: '2016/12/5 15:20:30交易2500000', name: "1"}, {
    //         source: 1,
    //         target: 2,
    //         info: '2016/12/5 15:25:42交易2500000',
    //         name: "2"
    //     }, {source: 2, target: 1, info: '2016/12/5 15:27:40交易2500000', name: "3"}, {
    //         source: 1,
    //         target: 2,
    //         info: '2016/12/5 15:32:02交易2500000',
    //         name: "2"
    //     }, {source: 2, target: 1, info: '2016/12/5 15:33:59交易2500000', name: "3"}, {
    //         source: 1,
    //         target: 0,
    //         info: '2016/12/5 15:38:49交易2500000',
    //         name: "2"
    //     }, {source: 0, target: 3, info: '2016/12/6 15:00:11交易2500000', name: "1"}, {
    //         source: 3,
    //         target: 2,
    //         info: '2016/12/6 15:05:01交易2500000',
    //         name: "4"
    //     }, {source: 2, target: 3, info: '2016/12/6 15:06:51交易2500000', name: "3"}, {
    //         source: 3,
    //         target: 2,
    //         info: '2016/12/6 15:10:41交易2500000',
    //         name: "4"
    //     }, {source: 2, target: 3, info: '2016/12/6 15:11:52交易2500000', name: "3"}, {
    //         source: 3,
    //         target: 0,
    //         info: '2016/12/6 15:15:49交易2500000',
    //         name: "4"
    //     }, {source: 0, target: 4, info: '2016/12/7 15:29:35交易2500000', name: "1"}, {
    //         source: 4,
    //         target: 2,
    //         info: '2016/12/7 15:33:37交易2500000',
    //         name: "5"
    //     }, {source: 2, target: 4, info: '2016/12/7 15:34:29交易2500000', name: "3"}, {
    //         source: 4,
    //         target: 2,
    //         info: '2016/12/7 15:38:57交易2500000',
    //         name: "5"
    //     }, {source: 2, target: 4, info: '2016/12/7 15:39:45交易2500000', name: "3"}, {
    //         source: 4,
    //         target: 0,
    //         info: '2016/12/7 15:47:42交易2500000',
    //         name: "5"
    //     }, {source: 0, target: 5, info: '2016/12/8 15:20:12交易2500000', name: "1"}, {
    //         source: 5,
    //         target: 2,
    //         info: '2016/12/8 15:39:25交易2500000',
    //         name: "6"
    //     }, {source: 2, target: 5, info: '2016/12/8 15:40:26交易2500000', name: "3"}, {
    //         source: 5,
    //         target: 2,
    //         info: '2016/12/8 15:43:59交易2500000',
    //         name: "6"
    //     }, {source: 2, target: 5, info: '2016/12/8 15:44:40交易2500000', name: "3"}, {
    //         source: 5,
    //         target: 0,
    //         info: '2016/12/8 15:48:40交易2500000',
    //         name: "6"
    //     }, {source: 0, target: 6, info: '2016/12/9 15:34:08交易2500000', name: "1"}, {
    //         source: 6,
    //         target: 2,
    //         info: '2016/12/9 15:37:56交易2500000',
    //         name: "7"
    //     }, {source: 2, target: 6, info: '2016/12/9 15:39:06交易2500000', name: "3"}, {
    //         source: 6,
    //         target: 2,
    //         info: '2016/12/9 15:45:28交易2500000',
    //         name: "7"
    //     }, {source: 2, target: 6, info: '2016/12/9 15:47:05交易2500000', name: "3"}, {
    //         source: 6,
    //         target: 0,
    //         info: '2016/12/9 15:52:45交易2500000',
    //         name: "7"
    //     }, {source: 2, target: 7, info: '2016/12/5 15:05:58交易2500000', name: "3"}, {
    //         source: 7,
    //         target: 0,
    //         info: '2016/12/5 15:16:31交易2500000',
    //         name: "8"
    //     }, {source: 0, target: 1, info: '2016/12/5 15:20:30交易2500000', name: "1"}, {
    //         source: 1,
    //         target: 2,
    //         info: '2016/12/5 15:25:42交易2500000',
    //         name: "2"
    //     }, {source: 2, target: 8, info: '2016/12/6 14:53:43交易2500000', name: "3"}, {
    //         source: 8,
    //         target: 0,
    //         info: '2016/12/6 14:57:50交易2500000',
    //         name: "9"
    //     }, {source: 0, target: 3, info: '2016/12/6 15:00:11交易2500000', name: "1"}, {
    //         source: 3,
    //         target: 2,
    //         info: '2016/12/6 15:05:01交易2500000',
    //         name: "4"
    //     }, {source: 2, target: 9, info: '2016/12/7 15:22:27交易2500000', name: "3"}, {
    //         source: 9,
    //         target: 0,
    //         info: '2016/12/7 15:27:03交易2500000',
    //         name: "10"
    //     }, {source: 0, target: 4, info: '2016/12/7 15:29:35交易2500000', name: "1"}, {
    //         source: 4,
    //         target: 2,
    //         info: '2016/12/7 15:33:37交易2500000',
    //         name: "5"
    //     }, {source: 2, target: 10, info: '2016/12/8 15:12:16交易2500000', name: "3"}, {
    //         source: 10,
    //         target: 0,
    //         info: '2016/12/8 15:16:56交易2500000',
    //         name: "11"
    //     }, {source: 0, target: 5, info: '2016/12/8 15:20:12交易2500000', name: "1"}, {
    //         source: 5,
    //         target: 2,
    //         info: '2016/12/8 15:39:25交易2500000',
    //         name: "6"
    //     }, {source: 11, target: 12, info: '2016/12/12 12:37:26交易3500000', name: "12"}, {
    //         source: 12,
    //         target: 2,
    //         info: '2016/12/12 15:28:31交易3500000',
    //         name: "13"
    //     }, {source: 2, target: 12, info: '2016/12/12 15:53:08交易3500000', name: "3"}, {
    //         source: 12,
    //         target: 11,
    //         info: '2016/12/12 15:59:58交易3500000',
    //         name: "13"
    //     }, {source: 13, target: 14, info: '2016/12/3 13:35:54交易27161', name: "14"}, {
    //         source: 14,
    //         target: 15,
    //         info: '2016/12/3 13:39:13交易27159.5',
    //         name: "15"
    //     }, {source: 15, target: 13, info: '2016/12/3 13:42:16交易27159.5', name: "16"}, {
    //         source: 13,
    //         target: 14,
    //         info: '2016/12/6 19:50:29交易36683.5',
    //         name: "14"
    //     }, {source: 14, target: 15, info: '2016/12/6 19:51:55交易36680.5', name: "15"}, {
    //         source: 15,
    //         target: 13,
    //         info: '2016/12/6 19:53:05交易36680.5',
    //         name: "16"
    //     }, {source: 13, target: 14, info: '2016/12/8 7:51:02交易20220.5', name: "14"}, {
    //         source: 14,
    //         target: 15,
    //         info: '2016/12/8 7:52:54交易20197.5',
    //         name: "15"
    //     }, {source: 15, target: 13, info: '2016/12/8 8:00:21交易20197.5', name: "16"}, {
    //         source: 13,
    //         target: 14,
    //         info: '2016/12/9 10:05:45交易9339.5',
    //         name: "14"
    //     }, {source: 14, target: 15, info: '2016/12/9 10:06:53交易9316.5', name: "15"}, {
    //         source: 15,
    //         target: 13,
    //         info: '2016/12/9 10:09:49交易9316.5',
    //         name: "16"
    //     }, {source: 13, target: 14, info: '2016/12/11 8:22:59交易21160.5', name: "14"}, {
    //         source: 14,
    //         target: 15,
    //         info: '2016/12/11 8:24:20交易21157.5',
    //         name: "15"
    //     }, {source: 15, target: 13, info: '2016/12/11 8:25:38交易21157.5', name: "16"}, {
    //         source: 13,
    //         target: 14,
    //         info: '2016/12/13 8:10:44交易10311.5',
    //         name: "14"
    //     }, {source: 14, target: 15, info: '2016/12/13 8:12:11交易10300.5', name: "15"}, {
    //         source: 15,
    //         target: 13,
    //         info: '2016/12/13 8:13:25交易10300.5',
    //         name: "16"
    //     }, {source: 15, target: 13, info: '2016/12/9 8:44:45交易9443', name: "16"}, {
    //         source: 13,
    //         target: 14,
    //         info: '2016/12/9 10:05:45交易9339.5',
    //         name: "14"
    //     }, {source: 14, target: 15, info: '2016/12/9 10:06:53交易9316.5', name: "15"}, {
    //         source: 14,
    //         target: 15,
    //         info: '2016/12/9 8:43:42交易9443',
    //         name: "15"
    //     }, {source: 15, target: 13, info: '2016/12/9 8:44:45交易9443', name: "16"}, {
    //         source: 13,
    //         target: 14,
    //         info: '2016/12/9 10:05:45交易9339.5',
    //         name: "14"
    //     },],
    //     nodes: [{name: "1", title: '1467615008',}, {name: "2", title: '455849016',}, {
    //         name: "3",
    //         title: '229383403',
    //     }, {name: "4", title: '455664117',}, {name: "5", title: '868996948',}, {
    //         name: "6",
    //         title: '455870454',
    //     }, {name: "7", title: '455947695',}, {name: "8", title: '455805368',}, {
    //         name: "9",
    //         title: '1272504903',
    //     }, {name: "10", title: '455757123',}, {name: "11", title: '455741250',}, {
    //         name: "12",
    //         title: '828159124',
    //     }, {name: "13", title: '72729',}, {name: "14", title: '9771103',}, {name: "15", title: '6751989',}, {
    //         name: "16",
    //         title: '285146751',
    //     },],
    //     circuit: 18,
    //     account: 16,
    //     transaction: 74
    // };
    var size = dataset.links.length;


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
    console.log(dataset.links);

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
        .attr("refX", 38)
        .attr("refY", -5.4)
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

    var textgroup = svg.append("g").selectAll("circle")
        .data(force.nodes())
        .enter()
        .append('g');

    var circle = textgroup.append("circle")
        .attr('id', function (d) {
            return 'circle-' + d.name;
        })
        .attr('class',function (d,i) {
            return 'circle';
        })
        .attr("r", 30)
        .call(d3.drag()
            .on("start", dragstarted)
            .on("drag", dragged)
            .on("end", dragended)).on('click', function (d, i) {
            d3.selectAll('path').style('stroke-width', 1).style('display', 'none');
            d3.selectAll('defs path').style('stroke-width', 1).style('display', 'inline');
            d3.selectAll('.link' + d.name).style('stroke-width', '3px').style('display', 'inline');
            var name = d.name;

            var temp;
            for (var j = 0; j < dataset.links.length; j++) {
                if (name === dataset.links[j].name) {
                    for (var i = 0; i < d.target.length; i++) {
                        if (i === 0) {
                            d3.selectAll('.link-' + name + '-' + d.target[i].name).style('stroke-width', '3px').style('display', 'inline');
                            temp = d.target[i].name;
                        } else {
                            d3.selectAll('.link-' + temp + '-' + d.target[i].name).style('stroke-width', '3px').style('display', 'inline');
                            temp = d.target[i].name;
                        }
                    }
                }
            }
            //d3.selectAll('marker').attr("markerWidth", 2).attr("markerHeight", 2).attr('refX',30).attr('refY',-1);
        });

    var path = t.data(dataset.links)
        .enter().append("path")
        .attr('id', function (d, i) {
            return 'link' + d.name + i;
        })
        .attr("class", function (d, i) {
            return 'link link' + d.name + ' link-' + d.name + '-' + d.target.name;
        })
        .attr('stroke', function (d, i) {
            return color(i);
        })
        .attr("marker-end", function (d) {
            return "url(#arrow)";
        });

    var gs = false;
    d3.select(document).on('click', function (d, i) {

        if (d3.event.target.nodeName !== 'circle' && d3.event.target.nodeName !== 'path' && d3.event.target.nodeName !== 'text' && d3.event.target.nodeName !== 'LI' && d3.event.target.nodeName !== 'DIV' && d3.event.target.nodeName !== 'A') {
            d3.selectAll('path').style('stroke-width', 1).style('display', 'inline');
            $("#info").css("visibility", "hidden");
            $("#info").css("height", "0");
            $("#info>.content").html("");
            if(gs){
                var id = d3.select(".circle2").attr('class').indexOf('circle2');
                d3.select(".circle2").attr('class',d3.select(".circle2").attr('class').substring(0,id));
                gs = false;
            }

            // d3.select("#circle-" + name).classed(d3.select("#circle-" + name).attr('class').substring(0,-8), true);
            // if (!ts) {
            //     txt.style('display', 'none');
            // }
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
                return '<tspan x="0" y="' + (-7) + '">' + d.title.substring(0, 4) + '</tspan><tspan x="0" y="' + 10 + '">' + d.title.substr(4) + '</tspan>';
            }
            return '<tspan>' + d.title + '</tspan>';
        });

    var svg2 = d3.select("#ring").append('ul');
    var g = svg2.selectAll('ul').data(dataset.circuit).enter().append('li').style('color', function (d, i) {
        return color(i);
    }).text(function (d, i) {
        return 'ring' + (i + 1);
    }).on('click', function (d, j) {
        d3.selectAll('path').style('stroke-width', '1px');
        $("#info>.content").html("");
        $("#info").css("visibility", "visible");
        $("#info").css("height", "150px");
        var name = d.name;
        var temp;
        for (var j = 0; j < dataset.links.length; j++) {
            if (name === dataset.links[j].name) {

                d3.select("#circle-" + name).classed("circle2", true);
                gs = true;
                for (var i = 0; i < d.target.length; i++) {
                    if (i === 0) {
                        d3.selectAll('.link-' + name + '-' + d.target[i].name).style('stroke-width', '3px').style('display', 'inline');
                        temp = d.target[i].name;
                        $("#info>.content").append("<div><div><span>" + name + "</span></div><div><span>" + d.target[i].name + "</span></div><div><span>¥" + d.target[i].money + "</span></div><div><span>" + d.target[i].datetime + "</span></div></div>")
                    } else {
                        d3.selectAll('.link-' + temp + '-' + d.target[i].name).style('stroke-width', '3px').style('display', 'inline');
                        $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + d.target[i].name + "</span></div><div><span>¥" + d.target[i].money + "</span></div><div><span>" + d.target[i].datetime + "</span></div></div>")
                        temp = d.target[i].name;
                    }

                }
            }
        }

        //  txt.style('display', 'none');

        // d3.selectAll('.link-' + d.name).style('stroke-width', 3).style('display', 'inline');
    });

    var t1 = false;
    var time;
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
    var speed = 100;
    var start1 = false;
    $("#start").click(function () {
        start1 = true;
        startAnimation(speed, false);
    });

    $("#slider>.slider").mousedown(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var y = e.offsetY;

        if (y > 0 && y < 50) {
            t1 = false;
            startAnimation(speed = 100, true);
            $("#slider>a").css("bottom", 380);
            $(".slider-handle ").css("height", 400);
        }
        if (y > 50 && y < 100) {
            t1 = false;
            startAnimation(speed = 300, true);
            $("#slider>a").css("bottom", 280);
            $(".slider-handle ").css("height", 300);
        }
        if (y > 100 && y < 150) {
            t1 = false;
            startAnimation(speed = 300, true);
            $("#slider>a").css("bottom", 280);
            $(".slider-handle ").css("height", 300);
        }
        if (y > 150 && y < 200) {
            t1 = false;
            startAnimation(speed = 500, true);
            $("#slider>a").css("bottom", 180);
            $(".slider-handle ").css("height", 200);
        }
        if (y > 200 && y < 250) {
            t1 = false;
            startAnimation(speed = 500, true);
            $("#slider>a").css("bottom", 180);
            $(".slider-handle ").css("height", 200);
        }
        if (y > 250 && y < 300) {
            t1 = false;
            startAnimation(speed = 800, true);
            $("#slider>a").css("bottom", 80);
            $(".slider-handle ").css("height", 100);
        }
        if (y > 300 && y < 350) {
            t1 = false;
            startAnimation(speed = 800, true);
            $("#slider>a").css("bottom", 80);
            $(".slider-handle ").css("height", 100);
        }
        if (y > 350 && y < 400) {
            t1 = false;
            startAnimation(speed = 1000, true);
            $("#slider>a").css("bottom", 0);
            $(".slider-handle ").css("height", 0);
        }

    });

    function startAnimation(speed, target, self) {
        if(start1===true){
            $("#info>.content").html("");
        }

        var pathSize = dataset.circuit.length;
        var index = 0;
        var it = 0;

        if (t1 === false && start1) {
            clearInterval(time);
            if (target === false) {
                path.style('display', 'none');
                //txt.style('display', 'none');
            }
            start.innerText = '停止动画';
            t1 = true;
            ts = true;
            start1 = false;
            time = setInterval(function () {
                if (index < pathSize) {
                    //  path._groups[0][index].style.display = 'inline';
                    $("#info").css("visibility", "visible");
                    $("#info").css("height", "150px");
                    var cir = dataset.circuit[index];

                    d3.select("#circle-" + cir.name).classed("circle2", true);
                    gs = true;
                    var temp;
                    var sets = setInterval(function () {
                        if (it < cir.target.length) {
                            if (it === 0) {
                                d3.selectAll('.link-' + cir.name + '-' + cir.target[it].name).style('stroke-width','3px').style('display', 'inline');
                                temp = cir.target[it].name;
                                $("#info>.content").append("<div><div><span>" + cir.name + "</span></div><div><span>" + cir.target[it].name + "</span></div><div><span>¥" + cir.target[it].money + "</span></div><div><span>" + cir.target[it].datetime + "</span></div></div>")
                            } else {
                                d3.selectAll('.link-' + temp + '-' + cir.target[it].name).style('stroke-width','3px').style('display', 'inline');
                                $("#info>.content").append("<div><div><span>" + temp + "</span></div><div><span>" + cir.target[it].name + "</span></div><div><span>¥" + cir.target[it].money + "</span></div><div><span>" + cir.target[it].datetime + "</span></div></div>")
                                temp = cir.target[it].name;
                            }

                            it++;
                        } else {
                            clearInterval(sets);
                        }


                    }, speed);


                    index++;
                } else {
                    clearInterval(time);
                    start.innerText = '开始动画';
                    t1 = false;
                    index = 0;
                    ts = false;
                    start1 = false;
                }
            }, speed);

        } else {
            clearInterval(time);
            start.innerText = '开始动画';
            t1 = false;
            ts = false;
            start1 = false;
            index = 0;
            path.style('display', 'inline');
            // txt.style('display', 'none');
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

        circle.attr("cx", function (d) {
            return d.x;
        })
            .attr("cy", function (d) {
                return d.y;
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
