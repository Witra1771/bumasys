(()=>{function e(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function t(e){if(null!==document.getElementById(e)){var t=document.getElementById(e).getAttribute("data-colors");return(t=JSON.parse(t)).map((function(e){var t=e.replace(" ","");if(-1===t.indexOf(",")){var r=getComputedStyle(document.documentElement).getPropertyValue(t);return r||t}var a=e.split(",");if(2==a.length){var o=getComputedStyle(document.documentElement).getPropertyValue(a[0]);return o="rgba("+o+","+a[1]+")"}return t}))}}var r=t("simple_pie_chart");if(r){var a={series:[44,55,13,43,22],chart:{height:300,type:"pie"},labels:["Team A","Team B","Team C","Team D","Team E"],legend:{position:"bottom"},dataLabels:{dropShadow:{enabled:!1}},colors:r};new ApexCharts(document.querySelector("#simple_pie_chart"),a).render()}var o=t("simple_dount_chart");if(o){a={series:[44,55,41,17,15],chart:{height:300,type:"donut"},legend:{position:"bottom"},dataLabels:{dropShadow:{enabled:!1}},colors:o};new ApexCharts(document.querySelector("#simple_dount_chart"),a).render()}var n=t("updating_donut_chart");if(n){a={series:[44,55,13,33],chart:{height:280,type:"donut"},dataLabels:{enabled:!1},legend:{position:"bottom"},colors:n};var i=new ApexCharts(document.querySelector("#updating_donut_chart"),a);i.render(),document.querySelector("#randomize").addEventListener("click",(function(){i.updateSeries(i.w.globals.series.map((function(){return Math.floor(100*Math.random())+1})))})),document.querySelector("#add").addEventListener("click",(function(){var e;i.updateSeries(((e=i.w.globals.series.slice()).push(Math.floor(100*Math.random())+1),e))})),document.querySelector("#remove").addEventListener("click",(function(){var e;i.updateSeries(((e=i.w.globals.series.slice()).pop(),e))})),document.querySelector("#reset").addEventListener("click",(function(){i.updateSeries(a.series)}))}var l=t("gradient_chart");if(l){var s;a=(e(s={series:[44,55,41,17,15],chart:{height:300,type:"donut"},plotOptions:{pie:{startAngle:-90,endAngle:270}},dataLabels:{enabled:!1},fill:{type:"gradient"},legend:{formatter:function(e,t){return e+" - "+t.w.globals.series[t.seriesIndex]}},title:{text:"Gradient Donut with custom Start-angle",style:{fontWeight:500}}},"legend",{position:"bottom"}),e(s,"colors",l),s);new ApexCharts(document.querySelector("#gradient_chart"),a).render()}var d=t("pattern_chart");if(d){a={series:[44,55,41,17,15],chart:{height:300,type:"donut",dropShadow:{enabled:!0,color:"#111",top:-1,left:3,blur:3,opacity:.2}},stroke:{width:0},plotOptions:{pie:{donut:{labels:{show:!0,total:{showAlways:!0,show:!0}}}}},labels:["Comedy","Action","SciFi","Drama","Horror"],dataLabels:{dropShadow:{blur:3,opacity:.8}},fill:{type:"pattern",opacity:1,pattern:{enabled:!0,style:["verticalLines","squares","horizontalLines","circles","slantedLines"]}},states:{hover:{filter:"none"}},theme:{palette:"palette2"},title:{text:"Favourite Movie Type",style:{fontWeight:500}},legend:{position:"bottom"},colors:d};new ApexCharts(document.querySelector("#pattern_chart"),a).render()}if(t("image_pie_chart")){a={series:[44,33,54,45],chart:{height:300,type:"pie"},colors:["#93C3EE","#E5C6A0","#669DB5","#94A74A"],fill:{type:"image",opacity:.85,image:{src:["./assets/images/small/img-1.jpg","./assets/images/small/img-2.jpg","./assets/images/small/img-3.jpg","./assets/images/small/img-4.jpg"],width:25,imagedHeight:25}},stroke:{width:4},dataLabels:{enabled:!0,style:{colors:["#111"]},background:{enabled:!0,foreColor:"#fff",borderWidth:0}},legend:{position:"bottom"}};new ApexCharts(document.querySelector("#image_pie_chart"),a).render()}a={series:[25,15,44,55,41,17],chart:{height:300,type:"pie"},labels:["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],theme:{monochrome:{enabled:!0,color:"#405189",shadeTo:"light",shadeIntensity:.6}},plotOptions:{pie:{dataLabels:{offset:-5}}},title:{text:"Monochrome Pie",style:{fontWeight:500}},dataLabels:{formatter:function(e,t){return[t.w.globals.labels[t.seriesIndex],e.toFixed(1)+"%"]},dropShadow:{enabled:!1}},legend:{show:!1}};document.querySelector("#monochrome_pie_chart")&&new ApexCharts(document.querySelector("#monochrome_pie_chart"),a).render()})();