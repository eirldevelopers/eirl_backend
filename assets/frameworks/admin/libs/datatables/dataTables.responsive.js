(function(window,document,undefined){var factory=function($,DataTable){"use strict";var Responsive=function(settings,opts){if(!DataTable.versionCheck||!DataTable.versionCheck('1.10.1')){throw'DataTables Responsive requires DataTables 1.10.1 or newer';}
this.s={dt:new DataTable.Api(settings),columns:[]};if(this.s.dt.settings()[0].responsive){return;}
if(opts&&typeof opts.details==='string'){opts.details={type:opts.details};}
this.c=$.extend(true,{},Responsive.defaults,DataTable.defaults.responsive,opts);settings.responsive=this;this._constructor();};Responsive.prototype={_constructor:function()
{var that=this;var dt=this.s.dt;dt.settings()[0]._responsive=this;$(window).on('resize.dtr orientationchange.dtr',dt.settings()[0].oApi._fnThrottle(function(){that._resize();}));dt.on('destroy.dtr',function(){$(window).off('resize.dtr orientationchange.dtr draw.dtr');});this.c.breakpoints.sort(function(a,b){return a.width<b.width?1:a.width>b.width?-1:0;});this._classLogic();this._resizeAuto();var details=this.c.details;if(details.type){that._detailsInit();this._detailsVis();dt.on('column-visibility.dtr',function(){that._detailsVis();});dt.on('draw.dtr',function(){dt.rows({page:'current'}).iterator('row',function(settings,idx){var row=dt.row(idx);if(row.child.isShown()){var info=that.c.details.renderer(dt,idx);row.child(info,'child').show();}});});$(dt.table().node()).addClass('dtr-'+details.type);}
this._resize();},_columnsVisiblity:function(breakpoint)
{var dt=this.s.dt;var columns=this.s.columns;var i,ien;var display=$.map(columns,function(col){return col.auto&&col.minWidth===null?false:col.auto===true?'-':$.inArray(breakpoint,col.includeIn)!==-1;});var requiredWidth=0;for(i=0,ien=display.length;i<ien;i++){if(display[i]===true){requiredWidth+=columns[i].minWidth;}}
var scrolling=dt.settings()[0].oScroll;var bar=scrolling.sY||scrolling.sX?scrolling.iBarWidth:0;var widthAvailable=dt.table().container().offsetWidth- bar;var usedWidth=widthAvailable- requiredWidth;for(i=0,ien=display.length;i<ien;i++){if(columns[i].control){usedWidth-=columns[i].minWidth;}}
var empty=false;for(i=0,ien=display.length;i<ien;i++){if(display[i]==='-'&&!columns[i].control){if(empty||usedWidth- columns[i].minWidth<0){empty=true;display[i]=false;}
else{display[i]=true;}
usedWidth-=columns[i].minWidth;}}
var showControl=false;for(i=0,ien=columns.length;i<ien;i++){if(!columns[i].control&&!columns[i].never&&!display[i]){showControl=true;break;}}
for(i=0,ien=columns.length;i<ien;i++){if(columns[i].control){display[i]=showControl;}}
if($.inArray(true,display)===-1){display[0]=true;}
return display;},_classLogic:function()
{var that=this;var calc={};var breakpoints=this.c.breakpoints;var columns=this.s.dt.columns().eq(0).map(function(i){var className=this.column(i).header().className;return{className:className,includeIn:[],auto:false,control:false,never:className.match(/\bnever\b/)?true:false};});var add=function(colIdx,name){var includeIn=columns[colIdx].includeIn;if($.inArray(name,includeIn)===-1){includeIn.push(name);}};var column=function(colIdx,name,operator,matched){var size,i,ien;if(!operator){columns[colIdx].includeIn.push(name);}
else if(operator==='max-'){size=that._find(name).width;for(i=0,ien=breakpoints.length;i<ien;i++){if(breakpoints[i].width<=size){add(colIdx,breakpoints[i].name);}}}
else if(operator==='min-'){size=that._find(name).width;for(i=0,ien=breakpoints.length;i<ien;i++){if(breakpoints[i].width>=size){add(colIdx,breakpoints[i].name);}}}
else if(operator==='not-'){for(i=0,ien=breakpoints.length;i<ien;i++){if(breakpoints[i].name.indexOf(matched)===-1){add(colIdx,breakpoints[i].name);}}}};columns.each(function(col,i){var classNames=col.className.split(' ');var hasClass=false;for(var k=0,ken=classNames.length;k<ken;k++){var className=$.trim(classNames[k]);if(className==='all'){hasClass=true;col.includeIn=$.map(breakpoints,function(a){return a.name;});return;}
else if(className==='none'||className==='never'){hasClass=true;return;}
else if(className==='control'){hasClass=true;col.control=true;return;}
$.each(breakpoints,function(j,breakpoint){var brokenPoint=breakpoint.name.split('-');var re=new RegExp('(min\\-|max\\-|not\\-)?('+brokenPoint[0]+')(\\-[_a-zA-Z0-9])?');var match=className.match(re);if(match){hasClass=true;if(match[2]===brokenPoint[0]&&match[3]==='-'+brokenPoint[1]){column(i,breakpoint.name,match[1],match[2]+match[3]);}
else if(match[2]===brokenPoint[0]&&!match[3]){column(i,breakpoint.name,match[1],match[2]);}}});}
if(!hasClass){col.auto=true;}});this.s.columns=columns;},_detailsInit:function()
{var that=this;var dt=this.s.dt;var details=this.c.details;if(details.type==='inline'){details.target='td:first-child';}
var target=details.target;var selector=typeof target==='string'?target:'td';$(dt.table().body()).on('click',selector,function(e){if(!$(dt.table().node()).hasClass('collapsed')){return;}
if(!dt.row($(this).closest('tr')).length){return;}
if(typeof target==='number'){var targetIdx=target<0?dt.columns().eq(0).length+ target:target;if(dt.cell(this).index().column!==targetIdx){return;}}
var row=dt.row($(this).closest('tr'));if(row.child.isShown()){row.child(false);$(row.node()).removeClass('parent');}
else{var info=that.c.details.renderer(dt,row[0]);row.child(info,'child').show();$(row.node()).addClass('parent');}});},_detailsVis:function()
{var that=this;var dt=this.s.dt;var hiddenColumns=dt.columns().indexes().filter(function(idx){var col=dt.column(idx);if(col.visible()){return null;}
return $(col.header()).hasClass('never')?null:idx;});var haveHidden=true;if(hiddenColumns.length===0||(hiddenColumns.length===1&&this.s.columns[hiddenColumns[0]].control)){haveHidden=false;}
if(haveHidden){dt.rows({page:'current'}).eq(0).each(function(idx){var row=dt.row(idx);if(row.child()){var info=that.c.details.renderer(dt,row[0]);if(info===false){row.child.hide();}
else{row.child(info,'child').show();}}});}
else{dt.rows({page:'current'}).eq(0).each(function(idx){dt.row(idx).child.hide();});}},_find:function(name)
{var breakpoints=this.c.breakpoints;for(var i=0,ien=breakpoints.length;i<ien;i++){if(breakpoints[i].name===name){return breakpoints[i];}}},_resize:function()
{var dt=this.s.dt;var width=$(window).width();var breakpoints=this.c.breakpoints;var breakpoint=breakpoints[0].name;var columns=this.s.columns;var i,ien;for(i=breakpoints.length-1;i>=0;i--){if(width<=breakpoints[i].width){breakpoint=breakpoints[i].name;break;}}
var columnsVis=this._columnsVisiblity(breakpoint);var collapsedClass=false;for(i=0,ien=columns.length;i<ien;i++){if(columnsVis[i]===false&&!columns[i].never){collapsedClass=true;break;}}
$(dt.table().node()).toggleClass('collapsed',collapsedClass);dt.columns().eq(0).each(function(colIdx,i){dt.column(colIdx).visible(columnsVis[i]);});},_resizeAuto:function()
{var dt=this.s.dt;var columns=this.s.columns;if(!this.c.auto){return;}
if($.inArray(true,$.map(columns,function(c){return c.auto;}))===-1){return;}
var tableWidth=dt.table().node().offsetWidth;var columnWidths=dt.columns;var clonedTable=dt.table().node().cloneNode(false);var clonedHeader=$(dt.table().header().cloneNode(false)).appendTo(clonedTable);var clonedBody=$(dt.table().body().cloneNode(false)).appendTo(clonedTable);$(dt.table().footer()).clone(false).appendTo(clonedTable);dt.rows({page:'current'}).indexes().flatten().each(function(idx){var clone=dt.row(idx).node().cloneNode(true);if(dt.columns(':hidden').flatten().length){$(clone).append(dt.cells(idx,':hidden').nodes().to$().clone());}
$(clone).appendTo(clonedBody);});var cells=dt.columns().header().to$().clone(false);$('<tr/>').append(cells).appendTo(clonedHeader);if(this.c.details.type==='inline'){$(clonedTable).addClass('dtr-inline collapsed');}
var inserted=$('<div/>').css({width:1,height:1,overflow:'hidden'}).append(clonedTable);inserted.find('th.never, td.never').remove();inserted.insertBefore(dt.table().node());dt.columns().eq(0).each(function(idx){columns[idx].minWidth=cells[idx].offsetWidth||0;});inserted.remove();}};Responsive.breakpoints=[{name:'desktop',width:Infinity},{name:'tablet-l',width:1024},{name:'tablet-p',width:768},{name:'mobile-l',width:480},{name:'mobile-p',width:320}];Responsive.defaults={breakpoints:Responsive.breakpoints,auto:true,details:{renderer:function(api,rowIdx){var data=api.cells(rowIdx,':hidden').eq(0).map(function(cell){var header=$(api.column(cell.column).header());var idx=api.cell(cell).index();if(header.hasClass('control')||header.hasClass('never')){return'';}
var dtPrivate=api.settings()[0];var cellData=dtPrivate.oApi._fnGetCellData(dtPrivate,idx.row,idx.column,'display');var title=header.text();if(title){title=title+':';}
return'<li data-dtr-index="'+idx.column+'">'+'<span class="dtr-title">'+
title+'</span> '+'<span class="dtr-data">'+
cellData+'</span>'+'</li>';}).toArray().join('');return data?$('<ul data-dtr-index="'+rowIdx+'"/>').append(data):false;},target:0,type:'inline'}};var Api=$.fn.dataTable.Api;Api.register('responsive()',function(){return this;});Api.register('responsive.index()',function(li){li=$(li);return{column:li.data('dtr-index'),row:li.parent().data('dtr-index')};});Api.register('responsive.rebuild()',function(){return this.iterator('table',function(ctx){if(ctx._responsive){ctx._responsive._classLogic();}});});Api.register('responsive.recalc()',function(){return this.iterator('table',function(ctx){if(ctx._responsive){ctx._responsive._resizeAuto();ctx._responsive._resize();}});});Responsive.version='1.0.6';$.fn.dataTable.Responsive=Responsive;$.fn.DataTable.Responsive=Responsive;$(document).on('init.dt.dtr',function(e,settings,json){if(e.namespace!=='dt'){return;}
if($(settings.nTable).hasClass('responsive')||$(settings.nTable).hasClass('dt-responsive')||settings.oInit.responsive||DataTable.defaults.responsive){var init=settings.oInit.responsive;if(init!==false){new Responsive(settings,$.isPlainObject(init)?init:{});}}});return Responsive;};if(typeof define==='function'&&define.amd){define(['jquery','datatables'],factory);}
else if(typeof exports==='object'){factory(require('jquery'),require('datatables'));}
else if(jQuery&&!jQuery.fn.dataTable.Responsive){factory(jQuery,jQuery.fn.dataTable);}})(window,document);