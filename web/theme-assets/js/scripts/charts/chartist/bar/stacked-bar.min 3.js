$(window).on("load",function(){var e=new Chartist.Bar("#stacked-bar1",{labels:["Q1","Q2","Q3","Q4","Q5","Q6"],series:[[4e3,1e4,7e3,5e3,11e3,12e3],[1e4,4e3,7e3,9e3,3e3,2e3]]},{stackBars:!0,fullWidth:!0,axisX:{showGrid:!1},axisY:{showGrid:!1,showLabel:!1,offset:0}});e.on("draw",function(e){"bar"===e.type?e.element.attr({style:"stroke-width: 30px",x1:e.x1+.001}):"label"===e.type&&e.element.attr({y:20})}),e.on("created",function(e){var t=e.svg.querySelector("defs")||e.svg.elem("defs");return t.elem("linearGradient",{id:"stackedBarGradient",x1:0,y1:0,x2:0,y2:1}).elem("stop",{offset:0,"stop-color":"rgba(253,99,107,1)"}).parent().elem("stop",{offset:1,"stop-color":"rgba(253,99,107, 1)"}),t})});