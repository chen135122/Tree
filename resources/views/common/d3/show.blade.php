<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {
            overflow-x: hidden;
            overflow-y: auto;
        }

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
            stroke-width: 7px;
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

        #info {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 700px;
            /*height: 150px;*/
            height: 0;
            /*visibility: visible;*/
            visibility: hidden;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ddd;
            cursor: move;
            z-index: 9999;
        }

        #info > .header {
            width: 700px;
            height: 30px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            text-align: center;
            line-height: 30px;
        }

        #info > .title {
            width: 700px;
            height: 30px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        #info > .title > div {
            border-right: 1px solid #ddd;
            float: left;
            width: 174px;
            height: 30px;
            line-height: 30px;
            text-align: center;
        }

        #info > .title > div:last-child {
            border-right: 0;
        }

        #info > .content {
            width: 700px;
            height: 120px;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #info > .content > div {
            width: 700px;
            height: 30px;
            border-bottom: 1px solid #ddd;
        }

        /*#info > .content > div:last-child {*/
        /*border-bottom: 0;*/
        /*}*/

        #info > .content > div > div {
            border-right: 1px solid #ddd;
            float: left;
            width: 174px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            font-size: 12px;
            overflow: hidden;
        }

        #info > .content > div > div:last-child {
            border-right: 0;
        }

    </style>
</head>
<body>
<div style="float: right;font-size: 18px;margin-right: 20px"><a style="text-decoration: none;color: rgb(41, 112, 237)" href="javascript:window.close();">上页</a></div>
<div id="main">
    <svg width="960" height="2400"></svg>
</div>
<div id="info">
    <div class="header">
        交易明细表(可拖动,点击空白处可隐藏该列表)
    </div>
    <div class="title">
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
<script src="/js/d3.min.js"></script>
<script>

    // var dataset = {
    //     name: '',
    //     children: [
    //         {
    //             name: '662020219',
    //             money: '1600000016000000',
    //             children: [
    //                 {
    //                     name: '42108',
    //                     money: '1600000016000000',
    //                     datetime: '2017-6-15 12:00:00',
    //                     children: [
    //                         {
    //                             name: '1233827242',
    //                             money: '600000016000000',
    //                             datetime: '2017-6-15 12:00:00',
    //                         }, {
    //                             name: '831864',
    //                             money: '1000000016000000',
    //                             datetime: '2017-6-15 12:00:00',
    //                         }
    //                     ]
    //                 }
    //             ]
    //         }, {
    //             name: '1233827241',
    //             money: '50000016000000',
    //             children: [
    //                 {
    //                     name: '1197906062',
    //                     money: '50000016000000',
    //                     datetime: '2017-6-15 12:00:00',
    //                     children: [
    //                         {
    //                             name: '1197906063',
    //                             money: '35000016000000',
    //                             datetime: '2017-6-15 12:00:00',
    //                         }, {
    //                             name: '5297462',
    //                             money: '15000016000000',
    //                             datetime: '2017-6-15 12:00:00',
    //                         }
    //                     ]
    //                 }
    //             ]
    //         }
    //     ]
    // };

    // var dataset = {
    //     name: '',
    //     children: [{
    //         name: '662020219',
    //         money: '16000000',
    //         count: [
    //             {
    //                 money: '16000000',
    //             }
    //         ],
    //         children: [{
    //             name: '42108',
    //             count: [
    //                 {
    //                     money: '16000000',
    //                     datetime: '2016/12/14 16:25:57',
    //                 }
    //             ],
    //             children: [{
    //                 name: '831864', count: [
    //                     {
    //                         money: '6000000', datetime: '2016/12/14 14:54:15'
    //                     }, {
    //                         money: '70000', datetime: '2016/12/14 14:58:15'
    //                     }
    //                 ]
    //             }]
    //         },]
    //     }, {
    //         name: '1233827241',
    //         money: '500000',
    //         count: [
    //             {
    //                 money: '16000000',
    //             }
    //         ],
    //         children: [{
    //             name: '42108',
    //             count: [
    //                 {
    //                     money: '16000000',
    //                     datetime: '2016/12/14 16:25:57',
    //                 }
    //             ],
    //             children: [{
    //                 name: '1197906062', money: '350000', datetime: '2016/12/7 11:58:10', count: [
    //                     {
    //                         money: '16000000',
    //                         datetime: '2016/12/14 16:25:57',
    //                     }
    //                 ]
    //             }, {
    //                 name: '5297462',
    //                 money: '150000',
    //                 datetime: '2016/12/8 10:33:08',
    //                 count: [
    //                     {
    //                         money: '6000000', datetime: '2016/12/14 14:54:15'
    //                     }, {
    //                         money: '70000', datetime: '2016/12/14 14:58:15'
    //                     }
    //                 ]
    //             },]
    //         },]
    //     }, {
    //         name: '1091191236',
    //         money: '5000000',
    //         count: [
    //             {
    //                 money: '16000000',
    //             }
    //         ],
    //         children: [{
    //             name: '437202733',
    //             count: [
    //                 {
    //                     money: '16000000',
    //                     datetime: '2016/12/14 16:25:57',
    //                 }
    //             ],
    //             children: [{
    //                 name: '359767521', money: '4500000', datetime: '2016/12/12 16:02:57', count: [
    //                     {
    //                         money: '6000000', datetime: '2016/12/14 14:54:15'
    //                     }, {
    //                         money: '70000', datetime: '2016/12/14 14:58:15'
    //                     }
    //                 ],
    //             }, {
    //                 name: '529100464',
    //                 money: '500000',
    //                 datetime: '2016/12/12 22:51:56',
    //                 count: [
    //                     {
    //                         money: '6000000', datetime: '2016/12/14 14:54:15'
    //                     }, {
    //                         money: '70000', datetime: '2016/12/14 14:58:15'
    //                     }
    //                 ]
    //             },]
    //         },]
    //     }, {
    //         name: '529100464',
    //         money: '500000',
    //         count: [
    //             {
    //                 money: '16000000',
    //             }
    //         ],
    //         children: [{
    //             name: '1091191236',
    //             count: [
    //                 {
    //                     money: '16000000',
    //                     datetime: '2016/12/14 16:25:57',
    //                 }
    //             ],
    //             children: [{
    //                 name: '4268199', money: '270000', datetime: '2016/12/12 12:06:22', count: [
    //                     {
    //                         money: '6000000', datetime: '2016/12/14 14:54:15'
    //                     }, {
    //                         money: '70000', datetime: '2016/12/14 14:58:15'
    //                     }
    //                 ],
    //             }, {
    //                 name: '118418967',
    //                 money: '230000',
    //                 datetime: '2016/12/12 22:45:09',
    //                 count: [
    //                     {
    //                         money: '6000000', datetime: '2016/12/14 14:54:15'
    //                     }, {
    //                         money: '70000', datetime: '2016/12/14 14:58:15'
    //                     }
    //                 ]
    //             },]
    //         },]
    //     },]
    // };

    // var dataset = {
    //     name: '',
    //     children: [{
    //         name: '286016366',
    //         money: '6250000',
    //         count:[],
    //         children: [{
    //             name: '3113061201200200100162',
    //             count: [{money: '1310000', datetime: '2015/8/18 11:27:18'}, {
    //                 money: '3290000',
    //                 datetime: '2015/8/19 11:39:50'
    //             }, {money: '1650000', datetime: '2015/8/28 10:44:13'},],
    //             children: [{
    //                 name: '3613141',
    //                 count: [{money: '100000', datetime: '2015/8/17 11:45:28'},]
    //             }, {
    //                 name: '492761046',
    //                 count: [{money: '30000', datetime: '2015/8/17 13:24:19'}, {
    //                     money: '100000',
    //                     datetime: '2015/8/18 9:40:29'
    //                 },]
    //             }, {name: '3245531', count: [{money: '30000', datetime: '2015/8/17 14:15:19'},]}, {
    //                 name: '3947037',
    //                 count: [{money: '100000', datetime: '2015/8/17 14:37:40'},]
    //             }, {name: '3155656', count: [{money: '70000', datetime: '2015/8/17 15:33:59'},]}, {
    //                 name: '1135575706',
    //                 count: [{money: '30000', datetime: '2015/8/17 14:58:40'},]
    //             }, {name: '1805685', count: [{money: '70000', datetime: '2015/8/17 15:31:08'},]}, {
    //                 name: '755394',
    //                 count: [{money: '100000', datetime: '2015/8/17 15:52:29'},]
    //             }, {name: '1135706903', count: [{money: '30000', datetime: '2015/8/17 15:59:54'},]}, {
    //                 name: '277407050',
    //                 count: [{money: '30000', datetime: '2015/8/17 16:06:56'},]
    //             }, {name: '864345065', count: [{money: '45000', datetime: '2015/8/17 16:16:05'},]}, {
    //                 name: '5208150',
    //                 count: [{money: '100000', datetime: '2015/8/17 17:10:27'},]
    //             }, {name: '2118052', count: [{money: '50000', datetime: '2015/8/17 17:15:48'},]}, {
    //                 name: '1111117914',
    //                 count: [{money: '30000', datetime: '2015/8/17 17:19:35'},]
    //             }, {name: '1135766396', count: [{money: '35000', datetime: '2015/8/17 17:19:45'},]}, {
    //                 name: '6014968',
    //                 count: [{money: '100000', datetime: '2015/8/18 9:23:16'},]
    //             }, {name: '7251801', count: [{money: '80000', datetime: '2015/8/18 10:28:51'},]}, {
    //                 name: '2111477',
    //                 count: [{money: '100000', datetime: '2015/8/18 10:03:55'},]
    //             }, {name: '1136934964', count: [{money: '30000', datetime: '2015/8/18 10:07:00'},]}, {
    //                 name: '1781230',
    //                 count: [{money: '50000', datetime: '2015/8/18 10:38:09'},]
    //             }, {name: '2338563', count: [{money: '100000', datetime: '2015/8/19 10:19:23'},]}, {
    //                 name: '1136827999',
    //                 count: [{money: '70000', datetime: '2015/8/18 11:52:11'},]
    //             }, {name: '7179785', count: [{money: '50000', datetime: '2015/8/18 11:57:37'},]}, {
    //                 name: '11401419',
    //                 count: [{money: '50000', datetime: '2015/8/18 11:58:29'},]
    //             }, {name: '3901420', count: [{money: '30000', datetime: '2015/8/18 12:01:25'},]}, {
    //                 name: '4245533',
    //                 count: [{money: '70000', datetime: '2015/8/18 12:04:29'},]
    //             }, {
    //                 name: '6562040',
    //                 count: [{money: '35000', datetime: '2015/8/18 12:30:18'}, {
    //                     money: '35000',
    //                     datetime: '2015/8/18 12:50:40'
    //                 },]
    //             }, {
    //                 name: '1136829909',
    //                 count: [{money: '30000', datetime: '2015/8/18 13:15:00'},]
    //             }, {
    //                 name: '1136652762',
    //                 count: [{money: '30000', datetime: '2015/8/18 13:39:29'},]
    //             }, {
    //                 name: '1033733515',
    //                 count: [{money: '130000', datetime: '2015/8/18 13:49:49'}, {
    //                     money: '130000',
    //                     datetime: '2015/8/18 13:59:35'
    //                 },]
    //             }, {name: '1101572132', count: [{money: '30000', datetime: '2015/8/18 14:25:49'},]}, {
    //                 name: '468922661',
    //                 count: [{money: '40000', datetime: '2015/8/18 14:16:04'},]
    //             }, {
    //                 name: '460434',
    //                 count: [{money: '30000', datetime: '2015/8/18 14:29:45'}, {
    //                     money: '30000',
    //                     datetime: '2015/8/18 14:38:08'
    //                 },]
    //             }, {name: '1136769099', count: [{money: '60000', datetime: '2015/8/18 14:35:07'},]}, {
    //                 name: '10953104',
    //                 count: [{money: '30000', datetime: '2015/8/18 14:51:58'},]
    //             }, {name: '1136763299', count: [{money: '100000', datetime: '2015/8/18 14:59:27'},]}, {
    //                 name: '4341185',
    //                 count: [{money: '100000', datetime: '2015/8/18 15:04:31'},]
    //             }, {name: '12237518', count: [{money: '30000', datetime: '2015/8/18 15:17:51'},]}, {
    //                 name: '8884429',
    //                 count: [{money: '100000', datetime: '2015/8/18 15:30:24'},]
    //             }, {name: '2642941', count: [{money: '230000', datetime: '2015/8/18 15:48:05'},]}, {
    //                 name: '131497938',
    //                 count: [{money: '70000', datetime: '2015/8/18 16:36:53'},]
    //             }, {name: '8067477', count: [{money: '400000', datetime: '2015/8/18 16:14:59'},]}, {
    //                 name: '9115307',
    //                 count: [{money: '150000', datetime: '2015/8/18 16:09:59'},]
    //             }, {name: '2604508', count: [{money: '100000', datetime: '2015/8/18 16:49:08'},]}, {
    //                 name: '1136858823',
    //                 count: [{money: '100000', datetime: '2015/8/18 16:27:21'},]
    //             }, {name: '7229732', count: [{money: '150000', datetime: '2015/8/18 16:31:03'},]}, {
    //                 name: '1136748471',
    //                 count: [{money: '50000', datetime: '2015/8/18 16:54:42'},]
    //             }, {name: '4934542', count: [{money: '50000', datetime: '2015/8/19 9:21:27'},]}, {
    //                 name: '3244844',
    //                 count: [{money: '30000', datetime: '2015/8/19 10:10:20'},]
    //             }, {name: '5655856', count: [{money: '50000', datetime: '2015/8/19 9:49:58'},]}, {
    //                 name: '981298',
    //                 count: [{money: '600000', datetime: '2015/8/19 10:00:22'},]
    //             }, {name: '738927017', count: [{money: '210000', datetime: '2015/8/27 11:40:31'},]}, {
    //                 name: '4295248',
    //                 count: [{money: '50000', datetime: '2015/8/27 16:25:51'},]
    //             }, {name: '854252', count: [{money: '100000', datetime: '2015/8/28 10:28:36'},]}, {
    //                 name: '790291',
    //                 count: [{money: '50000', datetime: '2015/8/27 11:24:09'},]
    //             }, {name: '2142541', count: [{money: '50000', datetime: '2015/8/27 16:10:42'},]}, {
    //                 name: '6554964',
    //                 count: [{money: '150000', datetime: '2015/8/27 16:28:33'},]
    //             }, {name: '1001700827', count: [{money: '60000', datetime: '2015/8/27 11:25:23'},]}, {
    //                 name: '2655489',
    //                 count: [{money: '50000', datetime: '2015/8/27 11:03:52'},]
    //             }, {name: '7479497', count: [{money: '40000', datetime: '2015/8/27 10:55:01'},]}, {
    //                 name: '1188735',
    //                 count: [{money: '30000', datetime: '2015/8/27 11:05:41'},]
    //             }, {name: '3173960', count: [{money: '100000', datetime: '2015/8/27 11:32:31'},]}, {
    //                 name: '870774510',
    //                 count: [{money: '180000', datetime: '2015/8/27 12:00:24'},]
    //             }, {name: '10891243', count: [{money: '50000', datetime: '2015/8/27 12:35:00'},]}, {
    //                 name: '998599876',
    //                 count: [{money: '50000', datetime: '2015/8/27 12:09:28'},]
    //             }, {name: '2464959', count: [{money: '30000', datetime: '2015/8/27 13:49:55'},]}, {
    //                 name: '11184816',
    //                 count: [{money: '50000', datetime: '2015/8/27 14:14:00'},]
    //             }, {name: '4796377', count: [{money: '300000', datetime: '2015/8/27 14:33:17'},]}, {
    //                 name: '1146465654',
    //                 count: [{money: '100000', datetime: '2015/8/27 14:26:07'},]
    //             },]
    //         }]
    //     }, {
    //         name: '468922661',
    //         money: '40000',
    //         count:[],
    //         children: [{
    //             name: '286016366',
    //             count: [{money: '40000', datetime: '2015/8/18 14:16:04'},],
    //             children: [{
    //                 name: '1136456008',
    //                 count: [{money: '20000', datetime: '2015/8/18 14:12:43'},]
    //             }, {name: '1112080789', count: [{money: '20000', datetime: '2015/8/18 14:10:50'},]},]
    //         }]
    //     }, {
    //         name: '4934542',
    //         money: '50000',
    //         count:[],
    //         children: [{
    //             name: '286016366',
    //             count: [{money: '50000', datetime: '2015/8/19 9:21:27'},],
    //             children: [{
    //                 name: '706961826',
    //                 count: [{money: '20000', datetime: '2015/8/19 9:11:28'},]
    //             }, {name: '636218932', count: [{money: '30000', datetime: '2015/8/19 9:18:39'},]},]
    //         }]
    //     }, {
    //         name: '6554964',
    //         money: '30000',
    //         count:[],
    //         children: [{
    //             name: '3105003100100200100140',
    //             count: [{money: '30000', datetime: '2015/8/25 9:03:51'},],
    //             children: [{
    //                 name: '13586553',
    //                 count: [{money: '15000', datetime: '2015/8/24 15:15:40'},]
    //             }, {name: '13586552', count: [{money: '15000', datetime: '2015/8/24 15:17:50'},]},]
    //         }]
    //     },
    //         {
    //             name: '6554984',
    //             money: '30000',
    //             count:[],
    //             children: [{
    //                 name: '3105003100100200100140',
    //                 count: [{money: '30000', datetime: '2015/8/25 9:03:51'},],
    //                 children: [{
    //                     name: '13586553',
    //                     count: [{money: '15000', datetime: '2015/8/24 15:15:40'},]
    //                 }, {name: '13586552', count: [{money: '15000', datetime: '2015/8/24 15:17:50'},]},]
    //             }]
    //         },{
    //             name: '655222264',
    //             money: '30000',
    //             count:[],
    //             children: [{
    //                 name: '3105003100100200100140',
    //                 count: [{money: '30000', datetime: '2015/8/25 9:03:51'},],
    //                 children: [{
    //                     name: '13586553',
    //                     count: [{money: '15000', datetime: '2015/8/24 15:15:40'},]
    //                 }, {name: '13586552', count: [{money: '15000', datetime: '2015/8/24 15:17:50'},]},]
    //             }]
    //         },]
    // };
    var dataset = {!! $lastTree !!};

    // var dataset = {
    //     name: '',
    //     children: [{
    //         name: '662020219',
    //         money: '16000000',
    //         children: [{
    //             name: '42108',
    //             money: '16000000',
    //             datetime: '2016/12/14 16:25:57',
    //             children: [{name: '1233827241', money: '6000000', datetime: '2016/12/14 14:54:15'}, {
    //                 name: '831864',
    //                 money: '10000000',
    //                 datetime: '2016/12/14 11:02:42'
    //             },]
    //         },]
    //     }, {
    //         name: '1233827241',
    //         money: '500000',
    //         children: [{
    //             name: '1197906062',
    //             money: '500000',
    //             datetime: '2016/12/8 10:34:30',
    //             children: [{name: '1197906062', money: '350000', datetime: '2016/12/7 11:58:10'}, {
    //                 name: '5297462',
    //                 money: '150000',
    //                 datetime: '2016/12/8 10:33:08'
    //             },]
    //         },]
    //     }, {
    //         name: '1091191236',
    //         money: '5000000',
    //         children: [{
    //             name: '437202733',
    //             money: '5000000',
    //             datetime: '2016/12/13 13:42:25',
    //             children: [{name: '359767521', money: '4500000', datetime: '2016/12/12 16:02:57'}, {
    //                 name: '529100464',
    //                 money: '500000',
    //                 datetime: '2016/12/12 22:51:56'
    //             },]
    //         },]
    //     }, {
    //         name: '529100464',
    //         money: '500000',
    //         children: [{
    //             name: '1091191236',
    //             money: '500000',
    //             datetime: '2016/12/12 22:51:56',
    //             children: [{name: '4268199', money: '270000', datetime: '2016/12/12 12:06:22'}, {
    //                 name: '118418967',
    //                 money: '230000',
    //                 datetime: '2016/12/12 22:45:09'
    //             },]
    //         },]
    //     },]
    // };

    // var dataset = {
    //     name: '',
    //     children: [{
    //         name: '00143574',
    //         money: '32204550',
    //         children: [{
    //             name: '00091193',
    //             money: '20000',
    //             datetime: '2016/12/20 14:06:14',
    //             children: [{name: '00104320', money: '10000', datetime: '2016/12/20 10:57:10'}, {
    //                 name: '00104320',
    //                 money: '10000',
    //                 datetime: '2016/12/20 8:01:29'
    //             },]
    //         }, {
    //             name: '00091193',
    //             money: '60000',
    //             datetime: '2016/12/20 10:20:14',
    //             children: [{name: '00104320', money: '10000', datetime: '2016/12/19 11:27:46'}, {
    //                 name: '00104320',
    //                 money: '50000',
    //                 datetime: '2016/12/19 16:36:06'
    //             },]
    //         }, {
    //             name: '00091193',
    //             money: '60000',
    //             datetime: '2016/12/21 14:16:20',
    //             children: [
    //                 {
    //                     name: '00104320',
    //                     money: '10000',
    //                     datetime: '2016/12/20 15:37:35',
    //                 }, {
    //                     name: '00104320',
    //                     money: '50000',
    //                     datetime: '2016/12/20 16:55:02'
    //                 },]
    //         }, {
    //             name: '00091193',
    //             money: '230000',
    //             datetime: '2016/12/21 15:51:45',
    //             children: [{name: '00091193', money: '15000', datetime: '2016/12/21 15:15:25'}, {
    //                 name: '00091193',
    //                 money: '110000',
    //                 datetime: '2016/12/21 11:31:51'
    //             }, {name: '00091193', money: '5000', datetime: '2016/12/21 11:37:16'}, {
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/20 15:57:28'
    //             },]
    //         }, {
    //             name: '00091193',
    //             money: '13000',
    //             datetime: '2016/12/27 15:39:55',
    //             children: [{name: '00100531', money: '10000', datetime: '2016/12/26 16:08:35'}, {
    //                 name: '00100531',
    //                 money: '3000',
    //                 datetime: '2016/12/27 15:08:03'
    //             },]
    //         }, {
    //             name: '00147125',
    //             money: '105000',
    //             datetime: '2016/12/16 10:44:39',
    //             children: [{name: '00104320', money: '100000', datetime: '2016/12/15 17:21:22'}, {
    //                 name: '00104320',
    //                 money: '5000',
    //                 datetime: '2016/12/15 10:58:32'
    //             },]
    //         }, {
    //             name: '00147125',
    //             money: '2700000',
    //             datetime: '2016/12/28 10:27:29',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '30000',
    //                 datetime: '2016/12/27 12:05:08'
    //             }, {name: '000458502565', money: '700000', datetime: '2016/12/27 12:57:14'}, {
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/27 14:42:07'
    //             }, {name: '000458502565', money: '50000', datetime: '2016/12/27 14:47:43'}, {
    //                 name: '000458502565',
    //                 money: '20000',
    //                 datetime: '2016/12/27 10:31:19'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/27 14:44:24'}, {
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/27 14:57:39'
    //             }, {name: '000458502565', money: '1500000', datetime: '2016/12/27 16:45:11'},]
    //         }, {
    //             name: '00147125',
    //             money: '2700000',
    //             datetime: '2016/12/28 10:27:28',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '30000',
    //                 datetime: '2016/12/27 12:05:08'
    //             }, {name: '000458502565', money: '700000', datetime: '2016/12/27 12:57:14'}, {
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/27 14:42:07'
    //             }, {name: '000458502565', money: '50000', datetime: '2016/12/27 14:47:43'}, {
    //                 name: '000458502565',
    //                 money: '20000',
    //                 datetime: '2016/12/27 10:31:19'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/27 14:44:24'}, {
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/27 14:57:39'
    //             }, {name: '000458502565', money: '1500000', datetime: '2016/12/27 16:45:11'},]
    //         }, {
    //             name: '000458502565',
    //             money: '300000',
    //             datetime: '2016/12/23 14:34:23',
    //             children: [{
    //                 name: '000421178480',
    //                 money: '100000',
    //                 datetime: '2016/12/22 16:34:02'
    //             }, {name: '000421178480', money: '200000', datetime: '2016/12/23 13:55:46'},]
    //         }, {
    //             name: '000458502565',
    //             money: '1800000',
    //             datetime: '2016/12/26 14:08:47',
    //             children: [{name: '000458502565', money: '300000', datetime: '2016/12/26 9:10:04'}, {
    //                 name: '00139032',
    //                 money: '1000000',
    //                 datetime: '2016/12/26 10:41:53'
    //             }, {name: '00139032', money: '500000', datetime: '2016/12/26 9:08:45'},]
    //         }, {
    //             name: '000458502565',
    //             money: '17000',
    //             datetime: '2016/12/27 15:32:52',
    //             children: [{
    //                 name: '000421190138',
    //                 money: '10000',
    //                 datetime: '2016/12/26 16:00:31'
    //             }, {name: '000421190138', money: '5000', datetime: '2016/12/26 17:30:16'}, {
    //                 name: '000421190138',
    //                 money: '2000',
    //                 datetime: '2016/12/27 15:09:47'
    //             },]
    //         }, {
    //             name: '000458502565',
    //             money: '300000',
    //             datetime: '2016/12/27 11:20:00',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/26 14:11:07'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/26 16:52:10'},]
    //         }, {
    //             name: '000458502565',
    //             money: '30000',
    //             datetime: '2016/12/29 16:01:24',
    //             children: [{name: '00104320', money: '5000', datetime: '2016/12/28 16:36:35'}, {
    //                 name: '00104320',
    //                 money: '5000',
    //                 datetime: '2016/12/29 12:01:15'
    //             }, {name: '00104320', money: '20000', datetime: '2016/12/29 10:56:05'},]
    //         }, {
    //             name: '01040010263',
    //             money: '10000000',
    //             datetime: '2016/12/2 15:51:57',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '200000',
    //                 datetime: '2016/12/1 16:40:39'
    //             }, {name: '000458502565', money: '500000', datetime: '2016/12/1 16:20:41'}, {
    //                 name: '000458502565',
    //                 money: '600000',
    //                 datetime: '2016/12/2 10:45:47'
    //             }, {name: '000458502565', money: '1300000', datetime: '2016/12/2 11:33:42'}, {
    //                 name: '000458502565',
    //                 money: '1000000',
    //                 datetime: '2016/12/2 9:27:06'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/2 15:16:41'}, {
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/2 8:34:10'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/2 10:33:44'}, {
    //                 name: '000458502565',
    //                 money: '5000000',
    //                 datetime: '2016/12/2 11:06:32'
    //             }, {name: '000458502565', money: '500000', datetime: '2016/12/2 14:39:19'}, {
    //                 name: '000458502565',
    //                 money: '400000',
    //                 datetime: '2016/12/2 14:39:19'
    //             },]
    //         }, {
    //             name: '00104320',
    //             money: '45000',
    //             datetime: '2016/12/5 16:17:54',
    //             children: [{name: '00100531', money: '5000', datetime: '2016/12/5 8:32:13'}, {
    //                 name: '00100531',
    //                 money: '10000',
    //                 datetime: '2016/12/5 10:04:20'
    //             }, {name: '00100531', money: '30000', datetime: '2016/12/5 14:09:07'},]
    //         }, {
    //             name: '00104320',
    //             money: '35000',
    //             datetime: '2016/12/8 15:21:36',
    //             children: [{name: '00100531', money: '15000', datetime: '2016/12/7 17:01:09'}, {
    //                 name: '00100531',
    //                 money: '20000',
    //                 datetime: '2016/12/8 11:53:56'
    //             },]
    //         }, {
    //             name: '00104320',
    //             money: '16000',
    //             datetime: '2016/12/27 15:38:21',
    //             children: [{name: '00100531', money: '10000', datetime: '2016/12/26 16:08:35'}, {
    //                 name: '00100531',
    //                 money: '3000',
    //                 datetime: '2016/12/27 15:08:03'
    //             }, {name: '00100531', money: '3000', datetime: '2016/12/27 10:15:00'},]
    //         }, {
    //             name: '00139032',
    //             money: '500000',
    //             datetime: '2016/12/2 17:26:12',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '200000',
    //                 datetime: '2016/12/2 15:16:41'
    //             }, {name: '000458502565', money: '100000', datetime: '2016/12/2 8:34:10'}, {
    //                 name: '000458502565',
    //                 money: '200000',
    //                 datetime: '2016/12/2 10:33:44'
    //             },]
    //         }, {
    //             name: '00139032',
    //             money: '800000',
    //             datetime: '2016/12/15 16:53:04',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '200000',
    //                 datetime: '2016/12/15 14:41:07'
    //             }, {name: '000458502565', money: '500000', datetime: '2016/12/15 9:47:06'}, {
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/15 15:03:13'
    //             },]
    //         }, {
    //             name: '00139032',
    //             money: '300000',
    //             datetime: '2016/12/19 14:58:23',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '70000',
    //                 datetime: '2016/12/19 9:16:09'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/19 14:31:09'}, {
    //                 name: '000458502565',
    //                 money: '30000',
    //                 datetime: '2016/12/19 11:09:38'
    //             },]
    //         }, {
    //             name: '00139032',
    //             money: '1000000',
    //             datetime: '2016/12/21 14:10:12',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '800000',
    //                 datetime: '2016/12/20 16:22:12'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/20 16:46:14'},]
    //         }, {
    //             name: '00139032',
    //             money: '1200000',
    //             datetime: '2016/12/26 16:55:20',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '200000',
    //                 datetime: '2016/12/26 11:16:31'
    //             }, {name: '000458502565', money: '1000000', datetime: '2016/12/26 11:33:41'},]
    //         }, {
    //             name: '00100531',
    //             money: '180000',
    //             datetime: '2016/12/7 9:54:29',
    //             children: [{
    //                 name: '000421178480',
    //                 money: '100000',
    //                 datetime: '2016/12/6 10:59:41'
    //             }, {name: '000421178480', money: '80000', datetime: '2016/12/6 16:58:44'},]
    //         }, {
    //             name: '00100531',
    //             money: '180000',
    //             datetime: '2016/12/7 9:54:28',
    //             children: [{
    //                 name: '000421178480',
    //                 money: '100000',
    //                 datetime: '2016/12/6 10:59:41'
    //             }, {name: '000421178480', money: '80000', datetime: '2016/12/6 16:58:44'},]
    //         }, {
    //             name: '00100531',
    //             money: '1600000',
    //             datetime: '2016/12/8 14:01:14',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '500000',
    //                 datetime: '2016/12/7 15:58:55'
    //             }, {name: '000458502565', money: '100000', datetime: '2016/12/7 15:06:57'}, {
    //                 name: '000458502565',
    //                 money: '500000',
    //                 datetime: '2016/12/7 16:02:12'
    //             }, {name: '000458502565', money: '500000', datetime: '2016/12/7 14:56:54'},]
    //         }, {
    //             name: '00100531',
    //             money: '1200000',
    //             datetime: '2016/12/12 16:17:09',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '200000',
    //                 datetime: '2016/12/12 11:52:41'
    //             }, {name: '000458502565', money: '1000000', datetime: '2016/12/12 11:58:01'},]
    //         }, {
    //             name: '00100531',
    //             money: '45000',
    //             datetime: '2016/12/14 15:47:38',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '20000',
    //                 datetime: '2016/12/13 21:33:04'
    //             }, {name: '000458502565', money: '25000', datetime: '2016/12/13 17:07:54'},]
    //         }, {
    //             name: '00100531',
    //             money: '1500000',
    //             datetime: '2016/12/15 11:52:27',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '1000000',
    //                 datetime: '2016/12/15 10:34:58'
    //             }, {name: '000458502565', money: '500000', datetime: '2016/12/15 11:15:49'},]
    //         }, {
    //             name: '00100531',
    //             money: '36800',
    //             datetime: '2016/12/15 11:40:42',
    //             children: [{name: '00106902', money: '33300', datetime: '2016/12/15 10:13:07'}, {
    //                 name: '00104558',
    //                 money: '3500',
    //                 datetime: '2016/12/15 10:00:21'
    //             },]
    //         }, {
    //             name: '00100531',
    //             money: '15000',
    //             datetime: '2016/12/20 14:04:22',
    //             children: [{name: '00091193', money: '10000', datetime: '2016/12/20 11:10:56'}, {
    //                 name: '00091193',
    //                 money: '5000',
    //                 datetime: '2016/12/20 11:55:41'
    //             },]
    //         }, {
    //             name: '00100531',
    //             money: '7000',
    //             datetime: '2016/12/21 14:11:54',
    //             children: [{name: '00104320', money: '2000', datetime: '2016/12/20 15:33:42'}, {
    //                 name: '00104320',
    //                 money: '5000',
    //                 datetime: '2016/12/21 10:28:06'
    //             },]
    //         }, {
    //             name: '00100531',
    //             money: '15000',
    //             datetime: '2016/12/21 10:45:13',
    //             children: [{name: '00091193', money: '10000', datetime: '2016/12/20 11:10:56'}, {
    //                 name: '00091193',
    //                 money: '5000',
    //                 datetime: '2016/12/20 11:55:41'
    //             },]
    //         }, {
    //             name: '00100531',
    //             money: '36000',
    //             datetime: '2016/12/22 15:20:12',
    //             children: [{name: '00147125', money: '30000', datetime: '2016/12/22 14:52:45'}, {
    //                 name: '000548891808',
    //                 money: '6000',
    //                 datetime: '2016/12/21 16:37:42'
    //             },]
    //         }, {
    //             name: '00100531',
    //             money: '36000',
    //             datetime: '2016/12/22 15:20:11',
    //             children: [{name: '00147125', money: '30000', datetime: '2016/12/22 14:52:45'}, {
    //                 name: '000548891808',
    //                 money: '6000',
    //                 datetime: '2016/12/21 16:37:42'
    //             },]
    //         }, {
    //             name: '00100531',
    //             money: '13000',
    //             datetime: '2016/12/27 10:55:18',
    //             children: [{name: '00100531', money: '10000', datetime: '2016/12/26 16:08:35'}, {
    //                 name: '00100531',
    //                 money: '3000',
    //                 datetime: '2016/12/27 10:15:00'
    //             },]
    //         }, {
    //             name: '00100531',
    //             money: '15000',
    //             datetime: '2016/12/27 11:52:27',
    //             children: [{
    //                 name: '000421190138',
    //                 money: '10000',
    //                 datetime: '2016/12/26 16:00:31'
    //             }, {name: '000421190138', money: '5000', datetime: '2016/12/26 17:30:16'},]
    //         }, {
    //             name: '00119815',
    //             money: '200000',
    //             datetime: '2016/12/23 16:34:31',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '150000',
    //                 datetime: '2016/12/23 9:25:38'
    //             }, {name: '000458502565', money: '50000', datetime: '2016/12/23 9:57:34'},]
    //         }, {
    //             name: '00119815',
    //             money: '170000',
    //             datetime: '2016/12/23 16:34:50',
    //             children: [{name: '00104320', money: '60000', datetime: '2016/12/22 16:36:39'}, {
    //                 name: '00104320',
    //                 money: '100000',
    //                 datetime: '2016/12/22 16:36:39'
    //             }, {name: '00104320', money: '10000', datetime: '2016/12/22 16:36:40'},]
    //         }, {
    //             name: '00119815',
    //             money: '700000',
    //             datetime: '2016/12/29 12:45:21',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '500000',
    //                 datetime: '2016/12/28 15:45:00'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/28 15:22:20'},]
    //         }, {
    //             name: '000421180938',
    //             money: '700000',
    //             datetime: '2016/12/12 16:15:54',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '500000',
    //                 datetime: '2016/12/12 14:57:59'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/12 10:47:48'},]
    //         }, {
    //             name: '000421180938',
    //             money: '200000',
    //             datetime: '2016/12/15 11:20:09',
    //             children: [{
    //                 name: '000548891808',
    //                 money: '100000',
    //                 datetime: '2016/12/14 15:50:57'
    //             }, {name: '000548891808', money: '100000', datetime: '2016/12/14 11:54:15'},]
    //         }, {
    //             name: '000421180938',
    //             money: '150000',
    //             datetime: '2016/12/20 16:20:44',
    //             children: [{name: '000458502565', money: '100000', datetime: '2016/12/20 11:15:06'}, {
    //                 name: '00104320',
    //                 money: '50000',
    //                 datetime: '2016/12/19 16:36:06'
    //             },]
    //         }, {
    //             name: '000421180938',
    //             money: '20000',
    //             datetime: '2016/12/21 10:35:07',
    //             children: [{name: '00104320', money: '10000', datetime: '2016/12/20 15:37:35'}, {
    //                 name: '00104320',
    //                 money: '10000',
    //                 datetime: '2016/12/20 10:57:10'
    //             },]
    //         }, {
    //             name: '000421180938',
    //             money: '18750',
    //             datetime: '2016/12/21 10:35:58',
    //             children: [{name: '00139032', money: '8750', datetime: '2016/12/20 13:43:15'}, {
    //                 name: '00139032',
    //                 money: '6250',
    //                 datetime: '2016/12/20 14:39:17'
    //             }, {name: '00139032', money: '3750', datetime: '2016/12/20 16:01:49'},]
    //         }, {
    //             name: '000421180938',
    //             money: '1500000',
    //             datetime: '2016/12/21 10:46:59',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '500000',
    //                 datetime: '2016/12/20 12:00:29'
    //             }, {name: '000458502565', money: '1000000', datetime: '2016/12/20 12:03:41'},]
    //         }, {
    //             name: '000421180938',
    //             money: '550000',
    //             datetime: '2016/12/23 9:42:58',
    //             children: [{name: '000458502565', money: '500000', datetime: '2016/12/23 8:58:04'}, {
    //                 name: '00104320',
    //                 money: '50000',
    //                 datetime: '2016/12/22 16:22:46'
    //             },]
    //         }, {
    //             name: '000421180938',
    //             money: '160000',
    //             datetime: '2016/12/23 9:43:14',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '80000',
    //                 datetime: '2016/12/22 16:06:01'
    //             }, {name: '000458502565', money: '80000', datetime: '2016/12/22 16:36:13'},]
    //         }, {
    //             name: '000548891808',
    //             money: '114000',
    //             datetime: '2016/12/22 11:41:07',
    //             children: [{
    //                 name: '000421178480',
    //                 money: '50000',
    //                 datetime: '2016/12/22 9:28:50'
    //             }, {name: '000421178480', money: '50000', datetime: '2016/12/22 10:27:03'}, {
    //                 name: '00100531',
    //                 money: '14000',
    //                 datetime: '2016/12/21 15:05:16'
    //             },]
    //         }, {
    //             name: '00104558',
    //             money: '20000',
    //             datetime: '2016/12/21 10:47:21',
    //             children: [{name: '00104320', money: '10000', datetime: '2016/12/20 15:37:35'}, {
    //                 name: '00104320',
    //                 money: '10000',
    //                 datetime: '2016/12/20 10:57:10'
    //             },]
    //         }, {
    //             name: '00104558',
    //             money: '57000',
    //             datetime: '2016/12/21 14:10:17',
    //             children: [{name: '00104320', money: '50000', datetime: '2016/12/20 16:55:02'}, {
    //                 name: '00104320',
    //                 money: '2000',
    //                 datetime: '2016/12/20 15:33:42'
    //             }, {name: '00104320', money: '5000', datetime: '2016/12/21 10:28:06'},]
    //         }, {
    //             name: '00104558',
    //             money: '20000',
    //             datetime: '2016/12/21 10:47:22',
    //             children: [{name: '00104320', money: '10000', datetime: '2016/12/20 15:37:35'}, {
    //                 name: '00104320',
    //                 money: '10000',
    //                 datetime: '2016/12/20 10:57:10'
    //             },]
    //         }, {
    //             name: '000447370106',
    //             money: '300000',
    //             datetime: '2016/12/26 11:35:43',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/26 10:34:14'
    //             }, {name: '000458502565', money: '200000', datetime: '2016/12/26 11:16:31'},]
    //         }, {
    //             name: '000752887537',
    //             money: '15000',
    //             datetime: '2016/12/21 10:46:25',
    //             children: [{name: '00091193', money: '10000', datetime: '2016/12/20 11:10:56'}, {
    //                 name: '00091193',
    //                 money: '5000',
    //                 datetime: '2016/12/20 11:55:41'
    //             },]
    //         }, {
    //             name: '00142803',
    //             money: '200000',
    //             datetime: '2016/12/19 11:54:50',
    //             children: [{
    //                 name: '000458502565',
    //                 money: '100000',
    //                 datetime: '2016/12/19 8:54:14'
    //             }, {name: '000458502565', money: '70000', datetime: '2016/12/19 9:16:09'}, {
    //                 name: '000458502565',
    //                 money: '30000',
    //                 datetime: '2016/12/19 11:09:38'
    //             },]
    //         },]
    //     }, {
    //         name: '000458502565',
    //         money: '4200000',
    //         children: [{
    //             name: '00143574',
    //             money: '1000000',
    //             datetime: '2016/12/16 14:55:09',
    //             children: [{
    //                 name: '000792993760',
    //                 money: '600000',
    //                 datetime: '2016/12/16 10:44:47'
    //             }, {name: '000792993760', money: '400000', datetime: '2016/12/16 9:43:39'},]
    //         }, {
    //             name: '00143574',
    //             money: '1000000',
    //             datetime: '2016/12/16 14:11:49',
    //             children: [{
    //                 name: '000792993760',
    //                 money: '600000',
    //                 datetime: '2016/12/16 10:44:47'
    //             }, {name: '000792993760', money: '400000', datetime: '2016/12/16 9:43:39'},]
    //         }, {
    //             name: '00143574',
    //             money: '1000000',
    //             datetime: '2016/12/16 14:09:40',
    //             children: [{
    //                 name: '000792993760',
    //                 money: '600000',
    //                 datetime: '2016/12/16 10:44:47'
    //             }, {name: '000792993760', money: '400000', datetime: '2016/12/16 9:43:39'},]
    //         }, {
    //             name: '00143574',
    //             money: '1000000',
    //             datetime: '2016/12/16 16:24:06',
    //             children: [{
    //                 name: '000792993760',
    //                 money: '600000',
    //                 datetime: '2016/12/16 10:44:47'
    //             }, {name: '000792993760', money: '400000', datetime: '2016/12/16 9:43:39'},]
    //         }, {
    //             name: '00143574',
    //             money: '200000',
    //             datetime: '2016/12/27 14:44:24',
    //             children: [{name: '00143574', money: '100000', datetime: '2016/12/27 11:19:55'}, {
    //                 name: '00143574',
    //                 money: '100000',
    //                 datetime: '2016/12/27 11:19:29'
    //             },]
    //         },]
    //     }, {
    //         name: '000548891808',
    //         money: '200000',
    //         children: [{
    //             name: '00143574',
    //             money: '200000',
    //             datetime: '2016/12/13 10:23:10',
    //             children: [{name: '00143574', money: '50000', datetime: '2016/12/12 16:21:16'}, {
    //                 name: '00143574',
    //                 money: '150000',
    //                 datetime: '2016/12/12 16:50:37'
    //             },]
    //         },]
    //     }, {
    //         name: '00119815',
    //         money: '280000',
    //         children: [{
    //             name: '00168681',
    //             money: '80000',
    //             datetime: '2016/12/12 16:25:43',
    //             children: [{name: '00143574', money: '20000', datetime: '2016/12/12 16:14:14'}, {
    //                 name: '00143574',
    //                 money: '20000',
    //                 datetime: '2016/12/12 16:25:31'
    //             }, {name: '00143574', money: '40000', datetime: '2016/12/12 16:25:36'},]
    //         }, {
    //             name: '00018262',
    //             money: '200000',
    //             datetime: '2016/12/13 16:06:07',
    //             children: [{name: '00143574', money: '40000', datetime: '2016/12/12 16:25:36'}, {
    //                 name: '00143574',
    //                 money: '80000',
    //                 datetime: '2016/12/12 16:25:43'
    //             }, {name: '00143574', money: '30000', datetime: '2016/12/12 16:13:58'}, {
    //                 name: '00143574',
    //                 money: '50000',
    //                 datetime: '2016/12/12 16:14:02'
    //             },]
    //         },]
    //     },]
    // };

    // 1000 * dataset.children.length * 2
    var svg = d3.select("svg"),
        width = +svg.attr("width"),
        height = +svg.attr("height"),
        g = svg.append("g").attr("transform", "translate(40,0)");

    var tree = d3.cluster().size([height, width - 160]);
    var root = d3.hierarchy(dataset);
    tree(root);
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

    d3.select(document).on('click', function (d, i) {
        if (d3.event.target.nodeName !== 'path' && d3.event.target.id !== 'info' && d3.event.target.nodeName !== 'DIV') {
            $("#info").css("visibility", "hidden");
            $("#info").css("height", "0");
            $("#info>.content").html("");
        }
    });

    var link = g.selectAll(".link")
        .data(root.descendants().slice(1))
        .enter().append("path")
        .attr("class", "link")
        .attr("class", function (d, i) {
            if (i < dataset.children.length) {
                return "link4";
            }
            // if ((i + 1) === root.descendants().length - 2 || (i + 1) === root.descendants().length - 3) {
            //     return "link3";
            // }
            if (d.parent && !d.children) {

                if (d.parent.data.children.length === 1) {
                    return "link3";
                }

                return "link2";

            }
            // if ((i + 1) === root.descendants().length - 1 || (i + 1) === root.descendants().length - 4) {
            //     return "link2";
            // }
            return "link";
        })
        .style("stroke-width", function (d, i) {
            return d.data.count.length * 3 >= 10 ? 13 : d.data.count.length * 3;
        })
        .style("opacity", function (d, i) {
            var alpha = d.data.count.length * 0.1;
            console.log(d)
            return alpha;
        })
        .attr("d", function (d) {
            return "M" + d.y + "," + d.x
                + "C" + (d.parent.y + 100) + "," + (d.x)
                + " " + (d.parent.y + 100) + "," + (d.parent.x)
                + " " + d.parent.y + "," + d.parent.x;
        }).on('click', function (d, i) {
            $("#info>.content").html("");
            $("#info").css("visibility", "visible");
            $("#info").css("height", "180");
            for (var i = 0; i < d.data.count.length; i++) {
                $("#info>.content").append("<div><div><span>" + d.parent.data.name + "</span></div><div><span>" + d.data.name + "</span></div><div><span>¥" + d.data.count[i].money + "</span></div><div><span>" + d.data.count[i].datetime + "</span></div></div>");
            }
        });

    var node = g.selectAll(".node")
        .data(root.descendants())
        .enter().append("g")
        .attr('id', function (d, i) {
            return 'links' + d.data.name + i;
        })

        // .attr("class", function (d) {
        //     return "node" + (d.children ? " node--internal" : " node--leaf");
        // })
        .attr("transform", function (d) {
            return "translate(" + d.y + "," + d.x + ")";
        });

    node.append("circle")
        .style("display", function (d, i) {
            if (i === 0) {
                return "none";
            }
            return "inline";
        })
        .attr('class', 'circle')
        .attr("r", 8)
        .attr('fill', function (d, i) {
            return color(i);
        });
    //
    // node.append("text")
    //     .attr("dy", 3)
    //     .attr("x", function (d) {
    //         return d.children ? -8 : 8;
    //     })
    //     .style("text-anchor", function (d) {
    //         return d.children ? "end" : "start";
    //     })
    //     .text(function (d) {
    //         return '11';
    //     });


    // var txt = node.append("text")
    //     .attr('x', function (d) {
    //         if (d.parent && !d.children) {
    //             return -20;
    //         }
    //         return -0;
    //     })
    //     .attr('dy', function (d) {
    //         if (d.parent && !d.children) {
    //             return -20;
    //         }
    //         return -35;
    //     }).attr('dx', function (d) {
    //         if (d.parent && !d.children) {
    //             return 5;
    //         }
    //         return 0;
    //     })
    //     .style("text-anchor", function (d) {
    //         return  "end";
    //     })
    //     .attr('xlink:href', function (d, i) {
    //         return '#links' + d.data.name + i;
    //     }).style('font-size', '12px').text(function (d) {
    //         return '¥' + d.data.money;
    //     });

    var txt2 = node.append("text")
        .attr('x', function (d) {
            if (d.parent && !d.children) {
                return -20;
            }
            return -0;
        })
        .attr('dy', function (d) {
            if (d.parent && !d.children) {
                return 5;
            }
            return 0;
        }).attr('dx', function (d) {
            if (d.parent && !d.children) {
                return 15;
            }
            return 0;
        })
        .style("text-anchor", function (d) {
            return "start";
        })
        .style('display', function (d, i) {
            if (i === 0) {
                return 'none';
            }
            return 'inline';
        })
        // .attr('xlink:href', function (d, i) {
        //     return '#links' + d.data.name + i;
        // })
        // .style('font-size', '12px')
        // .html(function (d, i) {
        //     if (d.parent && !d.children) {
        //         return '<tspan x="0" y="0">' + d.data.name + '</tspan><tspan x="-120" y="-15">¥' + d.data.money + '</tspan><tspan x="-120" y="-5">' + d.data.datetime + '</tspan>';
        //     }
        //     if (i <= dataset.children.length) {
        //         return '<tspan x="-110" y="0">' + d.data.name + '</tspan><tspan x="-110" y="10">¥' + d.data.money + '</tspan>';
        //     }
        //     return '<tspan x="-130" y="5">' + d.data.name + '</tspan><tspan x="-130" y="-25">¥' + d.data.money + '</tspan><tspan x="-130" y="-10">' + d.data.datetime + '</tspan>';
        // });
        .style('font-size', '12px')
        .html(function (d, i) {
            if (d.parent && !d.children) {
                return '<tspan x="5" y="0">' + d.data.name + '</tspan>';
            }
            // if (i <= dataset.children.length) {
            //     return '<tspan x="-110" y="0">' + d.data.name + '</tspan><tspan x="-110" y="10">¥' + d.data.money + '</tspan>';
            // }
            return '<tspan x="-8" y="-15">' + d.data.name + '</tspan>';
        });
    // var txt3 = node.append("text")
    //     .attr('x', function (d) {
    //         if (d.parent && !d.children) {
    //             return -20;
    //         }
    //         return -0;
    //     })
    //     .attr('dy', function (d) {
    //         if (d.parent && !d.children) {
    //             return -35;
    //         }
    //         return -55;
    //     }).attr('dx', function (d) {
    //         if (d.parent && !d.children) {
    //             return 5;
    //         }
    //         return 0;
    //     })
    //     .style("text-anchor", function (d) {
    //         return "end";
    //     })
    //     .style('display', function (d, i) {
    //         if (i < dataset.children.length) {
    //             return 'none';
    //         }
    //         return 'inline';
    //     })
    //     .attr('xlink:href', function (d, i) {
    //         return '#links' + d.data.name + i;
    //     }).style('font-size', '12px')
    //     .text(function (d) {
    //         return d.data.datetime;
    //     });

    // var txt = g.data(root.descendants())
    //     .enter().append('text')
    //     .attr('text-anchor', 'start')
    //     .attr('transform', function (d, i) {
    //         return 'rotate(180 ' + (d.y - 50) + ',' + d.x + ')';
    //     })
    //     .attr('x', 0)
    //     .attr('dy', function (d) {
    //         if (d.parent && !d.children) {
    //             return -15;
    //         }
    //         return -30;
    //     }).attr('dx', function (d) {
    //         if (d.parent && !d.children) {
    //             return 5;
    //         }
    //         return 0;
    //     }).append('textPath')
    //     .style('display', function (d, i) {
    //         if (i < dataset.children.length) {
    //             return 'none';
    //         }
    //         return 'inline';
    //     }).attr('xlink:href', function (d, i) {
    //         return '#links' + d.data.name + i;
    //     }).style('font-size', '12px').text(function (d) {
    //         return '¥' + d.data.money;
    //     });
    // var txt2 = g.data(root.descendants().slice(1))
    //     .enter().append('text').attr('text-anchor', 'start')
    //     .attr('transform', function (d, i) {
    //         return 'rotate(180 ' + (d.y - 50) + ',' + d.x + ')';
    //     })
    //     .attr('x', 0)
    //     .attr('dy', function (d) {
    //         if (d.parent && !d.children) {
    //             return 0;
    //         }
    //         return -15;
    //     }).attr('dx', function (d) {
    //         if (d.parent && !d.children) {
    //             return 5;
    //         }
    //         return 0;
    //     })
    //     .append('textPath')
    //     .style('display', function (d, i) {
    //         if (i < dataset.children.length) {
    //             return 'none';
    //         }
    //         return 'inline';
    //     }).style('font-size', '12px').attr('xlink:href', function (d,i){
    //         return '#links' + d.data.name + i;
    //     }).text(function (d) {
    //         return d.data.datetime;
    //     });
    //

    // var path = g.data(root.descendants().slice(1))
    //     .enter().append("path")
    //     .attr('id', function (d, i) {
    //         return 'links' + d.data.name + i;
    //     })
    //     .attr("class", function (d, i) {
    //         if (i < dataset.children.length) {
    //             return "link4";
    //         }
    //         // if ((i + 1) === root.descendants().length - 2 || (i + 1) === root.descendants().length - 3) {
    //         //     return "link3";
    //         // }
    //         if (d.parent && !d.children) {
    //             if (i === root.descendants().length % 2 || i === root.descendants().length % 3) {
    //                 return "link3";
    //             } else {
    //                 return "link2";
    //             }
    //         }
    //         // if ((i + 1) === root.descendants().length - 1 || (i + 1) === root.descendants().length - 4) {
    //         //     return "link2";
    //         // }
    //         return "link";
    //     })
    //     .attr("d", function (d, i) {
    //         return "M" + d.y + "," + d.x
    //             + "C" + (d.parent.y - 100) + "," + (d.x)
    //             + " " + (d.parent.y - 100) + "," + (d.parent.x)
    //             + " " + d.parent.y + "," + d.parent.x;
    //         // var x = d.x - d.parent.x;
    //         // var y = d.y - d.parent.y;
    //         // return "M" + d.x + "," + d.y
    //         //     + "C" + (d.x - 10) + "," + (d.y)
    //         //     + " " + (d.parent.x + 10) + "," + (d.parent.y - 10)
    //         //     + " " + d.parent.x + "," + d.parent.y;
    //     });
    // var txt = g.data(root.descendants().slice(1))
    //     .enter().append('text').attr('text-anchor', 'start')
    //     .attr('transform', function (d, i) {
    //         return 'rotate(180 ' + (d.y - 50) + ',' + d.x + ')';
    //     })
    //     .attr('x', 0)
    //     .attr('dy', function (d) {
    //         if (d.parent && !d.children) {
    //             return -15;
    //         }
    //         return -30;
    //     }).attr('dx', function (d) {
    //         if (d.parent && !d.children) {
    //             return 5;
    //         }
    //         return 0;
    //     }).append('textPath')
    //     .style('display', function (d, i) {
    //         if (i < dataset.children.length) {
    //             return 'none';
    //         }
    //         return 'inline';
    //     }).attr('xlink:href', function (d, i) {
    //         return '#links' + d.data.name + i;
    //     }).style('font-size', '12px').text(function (d) {
    //         return '¥' + d.data.money;
    //     });
    // var txt2 = g.data(root.descendants().slice(1))
    //     .enter().append('text').attr('text-anchor', 'start')
    //     .attr('transform', function (d, i) {
    //         return 'rotate(180 ' + (d.y - 50) + ',' + d.x + ')';
    //     })
    //     .attr('x', 0)
    //     .attr('dy', function (d) {
    //         if (d.parent && !d.children) {
    //             return 0;
    //         }
    //         return -15;
    //     }).attr('dx', function (d) {
    //         if (d.parent && !d.children) {
    //             return 5;
    //         }
    //         return 0;
    //     }).append('textPath')
    //     .style('display', function (d, i) {
    //         if (i < dataset.children.length) {
    //             return 'none';
    //         }
    //         return 'inline';
    //     }).style('font-size', '12px').attr('xlink:href', function (d, i) {
    //         return '#links' + d.data.name + i;
    //     }).text(function (d) {
    //         return d.data.datetime;
    //     });

    //
    // d3.selectAll('.circles').append('circle').attr('fill', function (d, i) {
    //     return color(i);
    // });
    //     .attr('r', '8')
    //     .attr("transform", function (d) {
    //         return "translate(" + (d.y ) + "," + (d.x) + ")";
    //     }).attr('class', 'circle');
    //
    // d3.selectAll('.circles').append('text').attr("dy", 3)
    //     .attr("transform", function (d) {
    //         return "translate(" + d.y + "," + d.x + ")";
    //     })
    //     .attr("x", function (d) {
    //         return d.children ? -8 : 8;
    //     })
    //     .style("text-anchor", function (d) {
    //         return d.children ? "end" : "start";
    //     })
    //     .attr('white-space', 'nowrap')
    //     .style('font-size', '12px')
    //     .html(function (d, i) {
    //         if (d.data.name !== undefined) {
    //             if (d.parent && !d.children) {
    //                 return '<tspan x="0" y="1">' + d.data.name + '</tspan>';
    //             }
    //             if (i < dataset.children.length) {
    //                 return '<tspan x="0" y="-10">' + d.data.name + '</tspan><tspan x="-0" y="10">¥' + d.data.money + '</tspan>';
    //             }
    //             return '<tspan x="0" y="1">' + d.data.name + '</tspan>';
    //         }
    //         return "";
    //         // if ((i + 1) === root.descendants().length - 1 || (i + 1) === root.descendants().length - 2 || (i + 1) === root.descendants().length - 3 || (i + 1) === root.descendants().length - 4) {
    //         //     return '<tspan x="-15" y="1">' + d.data.name + '</tspan>';
    //         // }
    //
    //     });

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

    svg.attr('width', window.innerWidth);
</script>
</body>
</html>
