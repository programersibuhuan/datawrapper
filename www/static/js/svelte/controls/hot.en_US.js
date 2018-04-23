!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e(require("Handsontable")):"function"==typeof define&&define.amd?define(["Handsontable"],e):t["controls/hot"]=e(t.HOT)}(this,function(t){"use strict";function e(){}function n(t,e){for(var n in e)t[n]=e[n];return t}function r(t){this.destroy=e,this.fire("destroy"),this.set=this.get=e,!1!==t&&this._fragment.u(),this._fragment.d(),this._fragment=this._state=null}function s(t,e){t._handlers=Object.create(null),t._bind=e._bind,t.options=e,t.root=e.root||t,t.store=t.root.store||e.store}function o(t){for(;t&&t.length;)t.shift()()}t=t&&t.hasOwnProperty("default")?t.default:t;var a={destroy:r,get:function(t){return t?this._state[t]:this._state},fire:function(t,e){var n=t in this._handlers&&this._handlers[t].slice();if(n)for(var r=0;r<n.length;r+=1){var s=n[r];s.__calling||(s.__calling=!0,s.call(this,e),s.__calling=!1)}},observe:function(t,e,n){var r=e.bind(this);return n&&!1===n.init||r(this.get()[t],void 0),this.on(n&&n.defer?"update":"state",function(e){e.changed[t]&&r(e.current[t],e.previous&&e.previous[t])})},on:function(t,e){if("teardown"===t)return this.on("destroy",e);var n=this._handlers[t]||(this._handlers[t]=[]);return n.push(e),{cancel:function(){var t=n.indexOf(e);~t&&n.splice(t,1)}}},set:function(t){this._set(n({},t)),this.root._lock||(this.root._lock=!0,o(this.root._beforecreate),o(this.root._oncreate),o(this.root._aftercreate),this.root._lock=!1)},teardown:r,_recompute:e,_set:function(t){var e=this._state,r={},s=!1;for(var o in t)this._differs(t[o],e[o])&&(r[o]=s=!0);s&&(this._state=n(n({},e),t),this._recompute(r,this._state),this._bind&&this._bind(r,this._state),this._fragment&&(this.fire("state",{changed:r,current:this._state,previous:e}),this._fragment.p(r,this._state),this.fire("update",{changed:r,current:this._state,previous:e})))},_mount:function(t,e){this._fragment[this._fragment.i?"i":"m"](t,e||null)},_unmount:function(){this._fragment&&this._fragment.u()},_differs:function(t,e){return t!=t?e==e:t!==e||t&&"object"==typeof t||"function"==typeof t}},i=null;var u={render:function(){this.get().hot.render()},update:function(){var e=this,n=this.get(),r=n.data,s=n.transpose,o=n.firstRowIsHeader,a=n.skipRows,i=n.hot;if(r){var u=this.store.get("dw_chart"),l=u.dataset(dw.datasource.delimited({csv:r,transpose:s,firstRowIsHeader:o,skipRows:a}).parse()).dataset();this.set({columnOrder:l.columnOrder()});var h=[[]];l.eachColumn(function(t){return h[0].push(t.title())}),l.eachRow(function(t){var e=[];l.eachColumn(function(n){return e.push(n.raw(t))}),h.push(e)}),i.loadData(h);var d=c(this,l,t);i.updateSettings({cells:function(t,n){return{readOnly:e.get().readonly||l.hasColumn(n)&&l.column(n).isComputed&&0===t,renderer:d}},manualColumnMove:[]}),this.set({ds:l}),this.set({has_changes:u.get("metadata.data.changes",[]).length>0}),t.hooks.once("afterRender",function(){return e.initCustomEvents()}),i.render()}},dataChanged:function(t){var e=this,n=this.get().hot,r=!1;t.forEach(function(t){var s=t[0],o=t[1],a=t[2],i=t[3];if(a!=i){var u=e.store.get("dw_chart"),c=e.get().transpose,l=u.get("metadata.data.changes",[]);if(s=n.toPhysicalRow(s),o=u.dataset().columnOrder()[o],c){var h=s;s=o,o=h}l.push({column:o,row:s,value:i,time:(new Date).getTime()}),u.set("metadata.data.changes",l),r=!0}}),r&&setTimeout(function(){e.update(),chart.save()},100)},columnMoved:function(e,n){var r=this,s=this.get().hot;if(e.length){var o=this.get().columnOrder,a=o.slice(0),i=o[n],u=a.splice(e[0],e.length),c=void 0===i?a.length:i?a.indexOf(i):0;a.splice.apply(a,[c,0].concat(u)),this.store.get("dw_chart").set("metadata.data.column-order",a.slice(0)),this.set({columnOrder:a}),t.hooks.once("afterRender",function(){setTimeout(function(){r.fire("resetSort"),s.selectCell(0,c,s.countRows()-1,c+u.length-1)},10)}),this.update()}},updateHeight:function(){var t=document.querySelector(".ht_master.handsontable .wtHolder .wtHider").getBoundingClientRect().height;this.refs.hot.style.height=Math.min(500,t+10)+"px"},checkRange:function(t,e,n,r){var s=this.get().hot,o=this.get().ds;this.refs;if(e!=r||0!==t||n!=s.countRows()-1)if(e==r||0!==t||n!=s.countRows()-1)this.set({activeColumn:null,multiSelection:!1});else{for(var a=[],i=Math.min(e,r);i<=Math.max(e,r);i++)a.push(+document.querySelector("#data-preview .htCore tbody tr:first-child td:nth-child("+(i+2)+")").dataset.column);this.set({multiSelection:a.map(function(t){return o.column(t)}),activeColumn:null})}},initCustomEvents:function(){var t=this;setTimeout(function(){t.refs.hot.querySelectorAll(".htCore thead th:first-child").forEach(function(t){t.removeEventListener("click",l),t.addEventListener("click",l)}),t.refs.hot.querySelectorAll(".htCore thead th+th").forEach(function(t){t.removeEventListener("click",h),t.addEventListener("click",h)})},500)},getColumnFormat:function(t){return this.store.get("dw_chart").get("metadata.data.column-format",{})[t]||{type:"auto",ignore:!1}}};function c(t,e,n){var r={date:"fa fa-clock-o"};return function(s,o,a,i,u,c,l){if(!(e.numColumns()<=i)&&e.hasColumn(i)){var h=e.column(i),d=t.get(),f=d.searchResults,m=d.currentResult,g=d.activeColumn,v=t.getColumnFormat(h.name());if((a=s.toPhysicalRow(a))>0)c=chart.columnFormatter(h)(h.val(a-1),!0);parseInt(c)<0&&o.classList.add("negative"),o.classList.add(h.type()+"Type"),o.dataset.column=i,"text"==h.type()&&c&&c.length>70&&(c=c.substr(0,60)+"…"),0===a?(o.classList.add("firstRow"),r[h.type()]&&(c='<i class="'+r[h.type()]+'"></i> '+c)):o.classList.add(a%2?"oddRow":"evenRow"),v.ignore&&o.classList.add("ignored"),g&&g.name()==h.name()&&o.classList.add("active");var p=s.getPlugin("columnSorting").untranslateRow(a);f.forEach(function(t){t.row==p&&t.col==i&&o.classList.add("htSearchResult")}),m&&m.row==p&&m.col==i&&o.classList.add("htCurrentSearchResult"),a>0&&!h.type(!0).isValid(h.val(a-1))&&o.classList.add("parsingError"),l.readOnly&&o.classList.add("readOnly"),chart.dataCellChanged(i,a)&&o.classList.add("changed"),function(t,e,r,s,o,a,i){var u=dw.utils.purifyHtml(n.helper.stringify(a));e.innerHTML=u}(0,o,0,0,0,c)}}}function l(t){t.preventDefault();var e=i.get().transpose;i.set({transpose:!e}),i.update()}function h(t){for(var e=this.parentNode.children.length,n=-1,r=0;r<e;r++)if(this.parentNode.children.item(r)==this){n=r;break}var s=+i.refs.hot.querySelector(".htCore tbody tr:first-child td:nth-child("+(n+1)+")").dataset.column,o=i.store.get("dw_chart"),a=i.get(),u=a.activeColumn,c=a.hot;if(o.dataset().hasColumn(s)){var l=o.dataset().column(+s);u&&u.name()==l.name()?(t.target.parentNode.classList.remove("selected"),i.set({activeColumn:!1}),c.deselectCell()):(t.target.parentNode.classList.add("selected"),i.set({activeColumn:l}))}}function d(t,n){var r;return{c:function(){var t;t="div",r=document.createElement(t),this.h()},h:function(){r.id="data-preview"},m:function(e,n){!function(t,e,n){e.insertBefore(t,n)}(r,e,n),t.refs.hot=r},p:e,u:function(){var t;(t=r).parentNode.removeChild(t)},d:function(){t.refs.hot===r&&(t.refs.hot=null)}}}function f(e){s(this,e),this.refs={},this._state=n({data:"",readonly:!1,skipRows:0,firstRowIsHeader:!0,searchIndex:0,sortBy:"-",transpose:!1,activeColumn:null,search:"",searchResults:[]},e.data),this._recompute({searchResults:1,searchIndex:1},this._state);var r=this;e.root||(this._oncreate=[]),this._fragment=d(this,this._state),this.root._oncreate.push(function(){(function(){var e=this;i=this,t.hooks.once("afterRender",function(){return e.initCustomEvents()}),window.addEventListener("keyup",function(t){var n=e.get(),r=n.activeColumn,s=n.ds;if(r&&("ArrowRight"==t.key||"ArrowLeft"==t.key)){t.preventDefault(),t.stopPropagation();var o=s.indexOf(r.name());"ArrowRight"==t.key?e.set({activeColumn:s.column((o+1)%s.numColumns())}):e.set({activeColumn:s.column((o-1+s.numColumns())%s.numColumns())})}});var n=this.store.get("dw_chart"),r=new t(this.refs.hot,{data:[],rowHeaders:function(t){return r.getPlugin("ColumnSorting").translateRow(t)+1},colHeaders:!0,fixedRowsTop:1,filters:!0,dropdownMenu:!0,startRows:13,startCols:8,fillHandle:!1,stretchH:"all",height:500,manualColumnMove:!0,selectionMode:"range",autoColumnSize:{useHeaders:!0,syncLimit:5},columnSorting:!0,sortIndicator:!0,sortFunction:function(t,e){if(e.col>-1){var s=n.dataset().column(e.col),o=s.type(),a=r.getPlugin("columnSorting");return function(n,r){var i;if(0===n[0])return-1;switch(n[1]=s.val(n[0]-1),r[1]=s.val(r[0]-1),"number"==o&&(isNaN(n[1])&&(n[1]=t?Number.POSITIVE_INFINITY:Number.NEGATIVE_INFINITY),isNaN(r[1])&&(r[1]=t?Number.POSITIVE_INFINITY:Number.NEGATIVE_INFINITY)),"date"==o&&("string"==typeof n[1]&&(n[1]=new Date(110,0,1)),"string"==typeof r[1]&&(r[1]=new Date(110,0,1))),o){case"date":i=a.dateSort;break;case"number":i=a.numericSort;break;default:i=a.defaultSort}return i(t,e)(n,r)}}return function(t,e){return t[0]-e[0]}},afterGetColHeader:function(t,n){var r=e.get(),s=r.activeColumn,o=r.ds;o&&o.hasColumn(t)&&((0===t||t)&&s&&o.column(t).name()==s.name()&&n.classList.add("selected"),(0===t||t)&&(e.getColumnFormat(o.column(t).name()).ignore?n.classList.add("ignored"):n.classList.remove("ignored")))},search:"search"});window.HT=r,this.set({hot:r}),t.hooks.add("afterSetDataAtCell",function(t){return e.dataChanged(t)}),t.hooks.add("afterColumnMove",function(t,n){return e.columnMoved(t,n)}),t.hooks.add("afterRender",function(){return e.updateHeight()}),t.hooks.add("afterSelection",function(t,n,r,s){return e.checkRange(t,n,r,s)}),this.observe("data",function(){return e.update()}),this.observe("firstRowIsHeader",function(t,n){t!=n&&void 0!==n&&e.update()}),this.observe("search",function(t,n){t!=n&&e.set({searchIndex:0});var s=r.search.query(t);e.set({searchResults:s}),r.render()}),this.observe("currentResult",function(t){t&&r&&(r.render(),r.scrollViewportTo(t.row,t.col),setTimeout(function(){r.scrollViewportTo(t.row,t.col)},100))}),this.observe("activeColumn",function(){setTimeout(function(){return r.render()},10)}),this.observe("sorting",function(t){r.sort(n.dataset().indexOf(t.sortBy),t.sortDir)})}).call(r),r.fire("update",{changed:{searchResults:1,searchIndex:1},current:r._state})}),e.target&&(this._fragment.c(),this._mount(e.target,e.anchor),o(this._oncreate))}return n(f.prototype,a),n(f.prototype,u),f.prototype._recompute=function(t,e){(t.searchResults||t.searchIndex)&&this._differs(e.currentResult,e.currentResult=function(t){var e=t.searchResults,n=t.searchIndex;if(!e||!e.length)return null;var r=e.length;if(n<0||n>=r){for(;n<0;)n+=r;n>r&&(n%=r)}return e[n]}(e))&&(t.currentResult=!0)},{Handsontable:f}});
