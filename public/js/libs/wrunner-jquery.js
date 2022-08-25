!function(e){
    var t={};
    function i(n){
        if(t[n])
            return t[n].exports;
        var o=t[n]={i:n,l:!1,exports:{}};
        return e[n].call(o.exports,o,o.exports,i),o.l=!0,o.exports
    }
    i.m=e,
    i.c=t,
    i.d=function(e,t,n){
        i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},
        i.r=function(e){
            "undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})
        },
        i.t=function(e,t){
            if(1&t&&(e=i(e)),8&t)
                return e;
            if(4&t&&"object"==typeof e&&e&&e.__esModule)
                return e;
            var n=Object.create(null);
            if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)
                for(var o in e)
                    i.d(n,o,function(t){
                        return e[t]
                    }.bind(null,o));
                return n
            },
        i.n=function(e){
            var t=e&&e.__esModule?function(){
                return e.default
            }:function(){
                return e
            };
            return i.d(t,"a",t),t},i.o=function(e,t){
                return Object.prototype.hasOwnProperty.call(e,t)
            }
            ,i.p="",
            i(i.s=2)
        }
([function(e,t,i){
    "use strict";
    function n(e){
        return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})
        (e)
    }
    function o(e,t,i){
        var o=i.value;
        if("function"!=typeof o)throw new TypeError("@boundMethod decorator can only be applied to methods not: ".concat(n(o)));
        var a=!1;
        return{
            configurable:!0,get:function(){
                if(a||this===e.prototype||this.hasOwnProperty(t)||"function"!=typeof o)
                    return o;
                var i=o.bind(this);
                return a=!0,
                Object.defineProperty(this,t,{
                    configurable:!0,get:function(){
                        return i
                    },
                    set:function(e){
                        o=e,delete this[t]
                    }
                }
                ),
                a=!1,i},
                set:function(e){
                    o=e
                }
            }
        }
        function a(e,t){
            for(var i=0;i<t.length;i++){
                var n=t[i];
                n.enumerable=n.enumerable||!1,n.configurable=!0,
                "value"in n&&(n.writable=!0)
                ,Object.defineProperty(e,n.key,n)}
            }
            var s=function(){
                function e(){
                    !function(e,t){
                        if(!(e instanceof t))
                        throw new TypeError("Cannot call a class as a function")
                    }
                    (this,e),
                    this.limits={
                        minLimit:0,maxLimit:100,valuesCount:100
                    }
                    ,this.values={
                        singleValue:50,rangeValueMin:20,rangeValueMax:80
                    }
                    ,this.type={
                        value:"single",constants:{singleValue:"single",rangeValue:"range"}
                    }
                    ,this.valueNotesMode={
                        value:"separate",constants:{separateValue:"separate",commonValue:"common"}
                    }
                    ,this.theme={
                        value:"default",className:"theme",oldValue:null
                    }
                    ,this.direction={
                        value:"horizontal",className:"direction",oldValue:null,constants:{
                            horizontalValue:"horizontal",verticalValue:"vertical"
                        }
                    },this.roots=document.body,this.scaleDivisionsCount=5,this.isValueNotesDisplayed=!0,this.step=1
                }
                var t,i,n;
                return t=e,(i=[{
                    key:"getOptionsPresets",value:function(){
                        return{
                            type:this.type.value,limits:{
                                minLimit:this.limits.minLimit,maxLimit:this.limits.maxLimit
                            }
                            ,step:this.step,singleValue:this.singleValue,rangeValue:{
                                minValue:this.values.rangeValueMin,maxValue:this.values.rangeValueMax
                            }
                            ,roots:this.roots,theme:this.theme.value,direction:this.direction.value,scaleDivisionsCount:this.scaleDivisionsCount,isValueNotesDisplayed:this.isValueNotesDisplayed
                        }
                    }
                }
            ])&&a(t.prototype,i),n&&a(t,n),e}();
            var r=function(){
                var e=[];
                return{
                    addHandler:function(t){
                        if("function"!=typeof t)return!1;
                        for(var i=0;i<e.length;i+=1)if(e[i]===t)return!1;
                        return e.push(t),!0},removeHandler:function(t){
                            for(var i=0;i<e.length;i+=1)if(e[i]===t)
                                return e.splice(i,1),!0;
                            return!1
                        }
                        ,trigger:function(t){
                            if(e.length<1)
                                return!1;
                            for(var i=e.slice(0),n=0;n<i.length;n+=1)
                                i[n](t);return!0}}};
                            function l(e){
                                return (l="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)
                            }
                        function u(e,t){
                            for(var i=0;i<t.length;i++){
                                var n=t[i];
                                n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}
                            }
                            var p,c=function(){
                                function e(){
                                    !function(e,t){
                                        if(!(e instanceof t))
                                            throw new TypeError("Cannot call a class as a function")
                                        }
                                        (this,e)
                                    }
                                    var t,i,n;
                                    return t=e,n=[{
                                        key:"isNumber",value:function(e){
                                            return!("number"!=typeof e&&"string"!=typeof e||!Number.isFinite(Number(e)))
                                        }
                                    }
                                    ,{
                                        key:"isObject",value:function(e){
                                            return"object"===l(e)&&null!==e
                                        }
                                    }
                                    ,{
                                        key:"toNumber",value:function(t){
                                            return!!e.isNumber(t)&&+t
                                        }
                                    }
                                    ,{
                                        key:"isDOMEl",value:function(t){
                                            return!(!e.isObject(t)||t.constructor===Object||!e.isNumber(t.nodeType)||1!==Number(t.nodeType))
                                        }
                                    }
                                    ,{
                                        key:"makeElement",value:function(e){
                                            var t=document.createElement("div");
                                            return e.forEach((function(e){
                                                t.classList.add(e)})),t
                                            }
                                        }
                                    ]
                                    ,(i=null)&&u(t.prototype,i),n&&u(t,n),e}();
                                    function d(e){
                                        for(var t=1;t<arguments.length;t++){
                                            var i=null!=arguments[t]?arguments[t]:{},n=Object.keys(i);
                                            "function"==typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(i).filter((function(e){return Object.getOwnPropertyDescriptor(i,e).enumerable})))),n.forEach((function(t){
                                                v(e,t,i[t])}))}return e
                                            }
                                            function v(e,t,i){
                                                return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0
                                                }
                                                ):e[t]=i,e
                                            }function h(e,t){
                                                for(var i=0;i<t.length;i++){
                                                    var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)
                                                }
                                            }
                                            function y(e,t,i,n,o){
                                                var a={};
                                                return Object.keys(n).forEach((function(e){a[e]=n[e]})),a.enumerable=!!a.enumerable,a.configurable=!!a.configurable,("value"in a||a.initializer)&&(a.writable=!0),a=i.slice().reverse().reduce((function(i,n){
                                                    return n(e,t,i)||i
                                                }),a),o&&void 0!==a.initializer&&(a.value=a.initializer?a.initializer.call(o):void 0,a.initializer=void 0),void 0===a.initializer&&(Object.defineProperty(e,t,a),a=null),a
                                            }
                                            var f,m=(y((p=function(){
                                                function e(){
                                                    !function(e,t){
                                                        if(!(e instanceof t))
                                                            throw new TypeError("Cannot call a class as a function")
                                                    }
                                                    (this,e);
                                                    var t=new s;
                                                    this.limits=t.limits,
                                                    this.values=t.values,
                                                    this.type=t.type,
                                                    this.step=t.step,
                                                    this.roots=t.roots,
                                                    this.scaleDivisionsCount=t.scaleDivisionsCount,
                                                    this.isValueNotesDisplayed=t.isValueNotesDisplayed,
                                                    this.valueNotesMode=t.valueNotesMode,
                                                    this.theme=t.theme,
                                                    this.direction=t.direction,
                                                    this._init()
                                                }
                                                var t,i,n;
                                                return t=e,(i=[{
                                                    key:"recalculateValue",value:function(){
                                                        var e=this.type.value===this.type.constants.singleValue;e&&this.setSingleValue(null),e||this.setRangeValues(null)
                                                    }
                                                }
                                                ,{
                                                    key:"setType",value:function(e){
                                                        Object.values(this.type.constants).includes(e)&&(this.type.value=e,this.typeUpdateEvent.trigger({
                                                            value:this.type.value,constants:d({},this.type.constants)
                                                        }))
                                                    }
                                                },{
                                                    key:"setLimits",value:function(e){
                                                        var t=c.isObject(e)?e:{},i=c.isNumber(t.minLimit)?Number(t.minLimit):this.limits.minLimit,n=c.isNumber(t.maxLimit)?Number(t.maxLimit):this.limits.maxLimit;
                                                        if(i>n){
                                                            var o=[n,i];i=o[0],n=o[1]
                                                        }
                                                        n-i<this.step&&(n+=this.step),
                                                        this.limits.minLimit=Math.round(i/this.step)*this.step,
                                                        this.limits.maxLimit=Math.round(n/this.step)*this.step,
                                                        this.limits.valuesCount=this.limits.maxLimit-this.limits.minLimit,
                                                        this.limitsUpdateEvent.trigger(d({},this.limits))
                                                    }
                                                }
                                                ,{
                                                    key:"setStep",value:function(e){
                                                        !c.isNumber(e)||e<1||(this.step=Number(e),this.stepUpdateEvent.trigger(this.step))
                                                    }
                                                }
                                                ,{
                                                    key:"setSingleValue",value:function(e){
                                                        var t=c.isNumber(e)?Number(e):this.values.singleValue;
                                                        this.values.singleValue=this._cutValueToLimits(this._recalculateValueByStep(t)),
                                                        this.valueUpdateEvent.trigger(d({},this.values))
                                                    }
                                                },
                                                {
                                                    key:"setRangeValues",value:function(e){
                                                        var t=c.isObject(e)?e:{},i=c.isNumber(t.minValue)?Number(t.minValue):this.values.rangeValueMin,n=c.isNumber(t.maxValue)?Number(t.maxValue):this.values.rangeValueMax;
                                                        if(i===n&&(n+=this.step),i>n){
                                                            var o=[n,i];i=o[0],n=o[1]
                                                        }
                                                        this.values.rangeValueMin=this._cutValueToLimits(this._recalculateValueByStep(i)),
                                                        this.values.rangeValueMax=this._cutValueToLimits(this._recalculateValueByStep(n)),
                                                        this.valueUpdateEvent.trigger(d({},this.values))
                                                    }
                                                }
                                                ,{
                                                    key:"setNearestValue",value:function(e,t){
                                                        if(c.isNumber(e)){
                                                            var i=this.type.value===this.type.constants.singleValue,n=!1===t?Math.round(Number(e)):Math.round(this.limits.minLimit+Number(e)/100*this.limits.valuesCount);
                                                            i&&this.setSingleValue(n),i||(n<(this.values.rangeValueMin+this.values.rangeValueMax)/2?this.setRangeValues({minValue:n}):this.setRangeValues({maxValue:n}))
                                                        }
                                                    }
                                                },
                                                {
                                                    key:"setRoots",value:function(e){
                                                        c.isDOMEl(e)&&(this.roots=e,this.rootsUpdateEvent.trigger(this.roots))
                                                    }
                                                }
                                                ,{
                                                    key:"setTheme",value:function(e){
                                                        "string"==typeof e&&(this.theme.oldValue=this.theme.value,this.theme.value=e,this.themeUpdateEvent.trigger(this.theme.value))
                                                    }
                                                },
                                                {
                                                    key:"setDirection",value:function(e){
                                                        Object.values(this.direction.constants).includes(e)&&(this.direction.oldValue=this.direction.value,this.direction.value=e,this.directionUpdateEvent.trigger({
                                                            value:this.direction.value,constants:d({},this.direction.constants)
                                                        }
                                                        ))
                                                    }
                                                }
                                                ,{
                                                    key:"setValueNotesDisplay",value:function(e){
                                                        "boolean"==typeof e&&(this.isValueNotesDisplayed=e,this.valueNotesDisplayUpdateEvent.trigger(this.isValueNotesDisplayed))
                                                    }
                                                }
                                                ,{
                                                    key:"setValueNotesMode",value:function(e){
                                                        Object.values(this.valueNotesMode.constants).includes(e)&&(this.valueNotesMode.value=e)
                                                    }
                                                }
                                                ,{
                                                    key:"setScaleDivisionsCount",value:function(e){
                                                        !c.isNumber(e)||e<0||(this.scaleDivisionsCount=1!==Math.round(Number(e))?Math.round(Number(e)):Math.round(Number(e))+1,this.scaleDivisionsCountUpdateEvent.trigger(this.scaleDivisionsCount))
                                                    }
                                                }
                                                ,{
                                                    key:"getType",value:function(){
                                                        return{
                                                            value:this.type.value,constants:d({},this.type.constants)
                                                        }
                                                    }
                                                }
                                                ,{
                                                    key:"getLimits",value:function(){
                                                        return d({},this.limits)
                                                    }
                                                }
                                                ,{
                                                    key:"getValues",value:function(){
                                                        return d({},this.values)
                                                    }
                                                }
                                                ,{
                                                    key:"getStep",value:function(){
                                                        return this.step
                                                    }
                                                }
                                                ,{
                                                    key:"getRoots",value:function(){
                                                        return this.roots
                                                    }
                                                }
                                                ,{
                                                    key:"getTheme",value:function(){
                                                        return this.theme.value
                                                    }
                                                }
                                                ,{
                                                    key:"getDirection",value:function(){
                                                        return{
                                                            value:this.direction.value,constants:d({},this.direction.constants)
                                                        }
                                                    }
                                                }
                                                ,{
                                                    key:"getValueNotesDisplay",value:function(){
                                                        return this.isValueNotesDisplayed
                                                    }
                                                }
                                                ,{
                                                    key:"getValueNotesMode",value:function(){
                                                        return{
                                                            value:this.valueNotesMode.value,constants:d({},this.valueNotesMode.constants)
                                                        }
                                                    }
                                                }
                                                ,{
                                                    key:"getScaleDivisionsCount",value:function(){
                                                        return this.scaleDivisionsCount
                                                    }
                                                }
                                                ,{
                                                    key:"getPublicMethods",value:function(){
                                                        return{
                                                            setType:this.setType,
                                                            setLimits:this.setLimits,
                                                            setStep:this.setStep,
                                                            setSingleValue:this.setSingleValue,
                                                            setRangeValues:this.setRangeValues,
                                                            setNearestValue:this.setNearestValue,
                                                            setRoots:this.setRoots,
                                                            setTheme:this.setTheme,
                                                            setDirection:this.setDirection,
                                                            setValueNotesDisplay:this.setValueNotesDisplay,
                                                            setScaleDivisionsCount:this.setScaleDivisionsCount,
                                                            getType:this.getType,
                                                            getLimits:this.getLimits,
                                                            getStep:this.getStep,
                                                            getValues:this.getValues,
                                                            getRoots:this.getRoots,
                                                            getTheme:this.getTheme,
                                                            getDirection:this.getDirection,
                                                            getValueNotesDisplay:this.getValueNotesDisplay,
                                                            getScaleDivisionsCount:this.getScaleDivisionsCount,
                                                            onThemeUpdate:this.themeUpdateEvent.addHandler,
                                                            onDirectionUpdate:this.directionUpdateEvent.addHandler,
                                                            onValueNotesDisplayUpdate:this.valueNotesDisplayUpdateEvent.addHandler,
                                                            onRootsUpdate:this.rootsUpdateEvent.addHandler,
                                                            onScaleDivisionsCountUpdate:this.scaleDivisionsCountUpdateEvent.addHandler,
                                                            onValueUpdate:this.valueUpdateEvent.addHandler,
                                                            onStepUpdate:this.stepUpdateEvent.addHandler,
                                                            onLimitsUpdate:this.limitsUpdateEvent.addHandler,
                                                            onTypeUpdate:this.typeUpdateEvent.addHandler}
                                                        }
                                                    }
                                                    ,{
                                                        key:"_cutValueToLimits",
                                                        value:function(e){
                                                            return e<this.limits.minLimit?this.limits.minLimit:e>this.limits.maxLimit?this.limits.maxLimit:e
                                                        }
                                                    }
                                                    ,{
                                                        key:"_recalculateValueByStep",
                                                        value:function(e){
                                                            return Math.round(e/this.step)*this.step
                                                        }
                                                    }
                                                    ,{
                                                        key:"_addEvents",value:function(){
                                                            this.valueUpdateEvent=r(),
                                                            this.limitsUpdateEvent=r(),
                                                            this.stepUpdateEvent=r(),
                                                            this.percentageUpdateEvent=r(),
                                                            this.typeUpdateEvent=r(),
                                                            this.rootsUpdateEvent=r(),
                                                            this.themeUpdateEvent=r(),
                                                            this.directionUpdateEvent=r(),
                                                            this.valueNotesDisplayUpdateEvent=r(),
                                                            this.scaleDivisionsCountUpdateEvent=r()
                                                        }
                                                    }
                                                    ,{
                                                        key:"_init",value:function(){
                                                            this._addEvents()
                                                        }
                                                    }
                                                ]
                                                )&&h(t.prototype,i),n&&h(t,n),e
                                            }
                                            ()).prototype,"setType",[o],
                                            Object.getOwnPropertyDescriptor(p.prototype,"setType"),
                                            p.prototype),
                                            y(p.prototype,
                                                "setLimits",[o],
                                                Object.getOwnPropertyDescriptor(p.prototype,"setLimits")
                                                ,p.prototype)
                                                ,y(p.prototype,"setStep",[o],Object.getOwnPropertyDescriptor(p.prototype,"setStep"),p.prototype)
                                                ,y(p.prototype,"setSingleValue",[o],Object.getOwnPropertyDescriptor(p.prototype,"setSingleValue"),p.prototype)
                                                ,y(p.prototype,"setRangeValues",[o],Object.getOwnPropertyDescriptor(p.prototype,"setRangeValues"),p.prototype)
                                                ,y(p.prototype,"setNearestValue",[o],Object.getOwnPropertyDescriptor(p.prototype,"setNearestValue"),p.prototype)
                                                ,y(p.prototype,"setRoots",[o],Object.getOwnPropertyDescriptor(p.prototype,"setRoots"),p.prototype)
                                                ,y(p.prototype,"setTheme",[o],Object.getOwnPropertyDescriptor(p.prototype,"setTheme"),p.prototype)
                                                ,y(p.prototype,"setDirection",[o],Object.getOwnPropertyDescriptor(p.prototype,"setDirection"),p.prototype)
                                                ,y(p.prototype,"setValueNotesDisplay",[o],Object.getOwnPropertyDescriptor(p.prototype,"setValueNotesDisplay"),p.prototype)
                                                ,y(p.prototype,"setValueNotesMode",[o],Object.getOwnPropertyDescriptor(p.prototype,"setValueNotesMode"),p.prototype)
                                                ,y(p.prototype,"setScaleDivisionsCount",[o],Object.getOwnPropertyDescriptor(p.prototype,"setScaleDivisionsCount"),p.prototype)
                                                ,y(p.prototype,"getType",[o],Object.getOwnPropertyDescriptor(p.prototype,"getType"),p.prototype),y(p.prototype,"getLimits",[o],Object.getOwnPropertyDescriptor(p.prototype,"getLimits"),p.prototype),y(p.prototype,"getValues",[o],Object.getOwnPropertyDescriptor(p.prototype,"getValues"),p.prototype),y(p.prototype,"getStep",[o],Object.getOwnPropertyDescriptor(p.prototype,"getStep"),p.prototype),y(p.prototype,"getRoots",[o],Object.getOwnPropertyDescriptor(p.prototype,"getRoots"),p.prototype),y(p.prototype,"getTheme",[o],Object.getOwnPropertyDescriptor(p.prototype,"getTheme"),p.prototype),y(p.prototype,"getDirection",[o],Object.getOwnPropertyDescriptor(p.prototype,"getDirection"),p.prototype),y(p.prototype,"getValueNotesDisplay",[o],Object.getOwnPropertyDescriptor(p.prototype,"getValueNotesDisplay"),p.prototype),y(p.prototype,"getValueNotesMode",[o],Object.getOwnPropertyDescriptor(p.prototype,"getValueNotesMode"),p.prototype),y(p.prototype,"getScaleDivisionsCount",[o],Object.getOwnPropertyDescriptor(p.prototype,"getScaleDivisionsCount"),p.prototype),p);function g(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function b(e,t,i,n,o){var a={};return Object.keys(n).forEach((function(e){a[e]=n[e]})),a.enumerable=!!a.enumerable,a.configurable=!!a.configurable,("value"in a||a.initializer)&&(a.writable=!0),a=i.slice().reverse().reduce((function(i,n){return n(e,t,i)||i}),a),o&&void 0!==a.initializer&&(a.value=a.initializer?a.initializer.call(o):void 0,a.initializer=void 0),void 0===a.initializer&&(Object.defineProperty(e,t,a),a=null),a}var w=(b((f=function(){function e(t){var i=t.parent;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.parent=i,this._init()}var t,i,n;return t=e,(i=[{key:"handleMouseAction",value:function(e,t,i){var n=this;if(e.preventDefault(),0===e.button){var o=!1,a=function(e){e.preventDefault(),o||(o=!0),n._calculateMouseActionPosition(e,t)};window.addEventListener("mousemove",a),window.addEventListener("mouseup",(function(e){e.preventDefault();var s=e.target;window.removeEventListener("mousemove",a),o||i.includes(s)||n._calculateMouseActionPosition(e,t)}),{once:!0})}}},{key:"setPosition",value:function(e,t,i,n){var o,a=e.minLimit,s=e.valuesCount,r=e.maxLimit,l=t.singleValue,u=t.rangeValueMin,p=t.rangeValueMax,c=i.value===i.constants.horizontalValue,d=n.value===n.constants.singleValue,v=c?"left":"top",h=c?"width":"height";this.progress.style.cssText="",o=d?c?0:100-(l-a)/s*100:c?(u-a)/s*100:(r-p)/s*100;var y=d?(l-a)/s*100:(p-u)/s*100;this.progress.style[h]="".concat(y,"%"),this.progress.style[v]="".concat(o,"%")}},{key:"_calculateMouseActionPosition",value:function(e,t){var i=t.value===t.constants.horizontalValue,n=this.track.getBoundingClientRect()[i?"left":"top"],o=this.track[i?"offsetWidth":"offsetHeight"],a=(e[i?"clientX":"clientY"]-n)/o*100;this.actionPositionCalculatedEvent.trigger(i?a:100-a)}},{key:"_handleMouseDown",value:function(e){this.mousedownEvent.trigger(e)}},{key:"_addEvents",value:function(){this.mousedownEvent=r(),this.actionPositionCalculatedEvent=r()}},{key:"_addListeners",value:function(){this.track.addEventListener("mousedown",this._handleMouseDown)}},{key:"_init",value:function(){this.track=c.makeElement(["wrunner__track"]),this.progress=c.makeElement(["wrunner__progress"]),this.track.appendChild(this.progress),this.parent.appendChild(this.track),this._addEvents(),this._addListeners()}}])&&g(t.prototype,i),n&&g(t,n),e}()).prototype,"_calculateMouseActionPosition",[o],Object.getOwnPropertyDescriptor(f.prototype,"_calculateMouseActionPosition"),f.prototype),b(f.prototype,"_handleMouseDown",[o],Object.getOwnPropertyDescriptor(f.prototype,"_handleMouseDown"),f.prototype),f);function E(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var D=function(){function e(t,i){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.parent=t,this.type=i,this._init()}var t,i,n;return t=e,(i=[{key:"destroy",value:function(){this.handler.remove()}},{key:"setPosition",value:function(e,t,i){var n=t.minLimit,o=t.valuesCount,a=i.value===i.constants.horizontalValue,s=a?"left":"top",r=a?(e-n)/o*100:100-(e-n)/o*100;this.handler.style.cssText="",this.handler.style[s]="".concat(r,"%")}},{key:"_init",value:function(){this.handler=c.makeElement(["wrunner__handle","wrunner__handle_type_".concat(this.type)]),this.parent.appendChild(this.handler)}}])&&E(t.prototype,i),n&&E(t,n),e}();function k(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var i=[],n=!0,o=!1,a=void 0;try{for(var s,r=e[Symbol.iterator]();!(n=(s=r.next()).done)&&(i.push(s.value),!t||i.length!==t);n=!0);}catch(e){o=!0,a=e}finally{try{n||null==r.return||r.return()}finally{if(o)throw a}}return i}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}()}function O(e){return(O="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function V(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var _=function(){function e(t,i){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.parent=t,this.type=i,this._init()}var t,i,n;return t=e,n=[{key:"checkValueNotesMode",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.notes,i=e.limits,n=e.values,o=e.direction,a=e.mode,s=e.track,r=e.event,l=i.minLimit,u=i.valuesCount,p=n.rangeValueMin,c=n.rangeValueMax,d=k(t,2),v=d[0],h=d[1],y=o.value===o.constants.horizontalValue,f=y?"offsetWidth":"offsetHeight",m=function(e,t){return(t-l)/u*s[f]+e.valueNote[f]/2},g=(v.valueNote[f]+h.valueNote[f])/2,b=m(h,c)-m(v,p);b>=g?a.value!==a.constants.separateValue&&r.trigger(a.constants.separateValue):a.value!==a.constants.commonValue&&r.trigger(a.constants.commonValue)}}],(i=[{key:"destroy",value:function(){this.valueNote.remove()}},{key:"update",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.positionValue,i=e.title,n=e.limits,o=e.direction,a=e.track,s=n.minLimit,r=n.valuesCount,l=o.value===o.constants.horizontalValue,u=l?"offsetWidth":"offsetHeight",p=l?"left":"top",c=a[u];if(this.clearTextNodes(),"object"===O(i)){var d=k(i,2),v=d[0],h=d[1];this.addTextNode(v),this.addTextNode(l?" - ":"|"),this.addTextNode(h)}else this.addTextNode(i);var y=this.valueNote[u]/2,f=(t-s)/r*c,m=l?(f-y)/c*100:100-(f+y)/c*100;this.valueNote.style.cssText="",this.valueNote.style[p]="".concat(m,"%")}},{key:"applyDisplay",value:function(e){var t=this.valueNote.classList[0];this.valueNote.classList[e?"add":"remove"]("".concat(t,"_display_visible")),this.valueNote.classList[e?"remove":"add"]("".concat(t,"_display_hidden"))}},{key:"addTextNode",value:function(e){var t=document.createElement("DIV");t.innerHTML=e,this.valueNote.appendChild(t)}},{key:"clearTextNodes",value:function(){this.valueNote.innerHTML=""}},{key:"_init",value:function(){this.valueNote=c.makeElement(["wrunner__value-note","wrunner__value-note_type_".concat(this.type)]),this.parent.appendChild(this.valueNote)}}])&&V(t.prototype,i),n&&V(t,n),e}();function N(e){return function(e){if(Array.isArray(e)){for(var t=0,i=new Array(e.length);t<e.length;t++)i[t]=e[t];return i}}(e)||function(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance")}()}function U(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var P,j=function(){function e(t){var i=t.parent;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.parent=i,this.scaleDivisionsList=[],this._init()}var t,i,n;return t=e,(i=[{key:"updateDivisions",value:function(e){for(this.scaleDivisionsList.forEach((function(e){e.remove()})),this.scaleDivisionsList.length=0;this.scaleDivisionsList.length<e;){var t=c.makeElement(["wrunner__scale-division"]);this.scaleDivisionsList.push(t)}this._appendDivisions()}},{key:"getElements",value:function(){return[this.scaleDivisionsBlock].concat(N(this.scaleDivisionsList))}},{key:"_appendDivisions",value:function(){var e=this;window.requestAnimationFrame((function(){e.scaleDivisionsList.forEach((function(t){e.scaleDivisionsBlock.appendChild(t)}))}))}},{key:"_init",value:function(){this.scaleDivisionsBlock=c.makeElement(["wrunner__scale-divisions-block"]),this.parent.appendChild(this.scaleDivisionsBlock)}}])&&U(t.prototype,i),n&&U(t,n),e}();function L(e){return function(e){if(Array.isArray(e)){for(var t=0,i=new Array(e.length);t<e.length;t++)i[t]=e[t];return i}}(e)||function(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance")}()}function H(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var i=[],n=!0,o=!1,a=void 0;try{for(var s,r=e[Symbol.iterator]();!(n=(s=r.next()).done)&&(i.push(s.value),!t||i.length!==t);n=!0);}catch(e){o=!0,a=e}finally{try{n||null==r.return||r.return()}finally{if(o)throw a}}return i}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}()}function M(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}var S,C,T,z,x,R,A,B=(S=(P=function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.handlersList=[],this.valueNotesList=[],this._init()}var t,i,n;return t=e,(i=[{key:"append",value:function(e){e.appendChild(this.mainNode)}},{key:"handleMouseAction",value:function(e,t){this.track.handleMouseAction(e,t,this.handlersList.map((function(e){return e.handler})))}},{key:"updateScaleDivisions",value:function(e){this.scale.updateDivisions(e)}},{key:"applyValueNotesDisplay",value:function(e,t){if(e){if(1===this.valueNotesList.length&&this.valueNotesList[0].applyDisplay(!0),3===this.valueNotesList.length){var i=[!0,!1,!0],n=t.value===t.constants.separateValue;this.valueNotesList.forEach((function(e,t){e.applyDisplay(n?i[t]:!i[t])}))}}else this.valueNotesList.forEach((function(e){e.applyDisplay(!1)}))}},{key:"updateDOM",value:function(e){this.handlersList.concat(this.valueNotesList).forEach((function(e){e.destroy()})),this.handlersList.length=0,this.valueNotesList.length=0,e.value===e.constants.singleValue&&(this.handlersList.push(new D(this.track.track,"single")),this.valueNotesList.push(new _(this.outer,"single"))),e.value===e.constants.rangeValue&&(this.handlersList.push(new D(this.track.track,"min")),this.handlersList.push(new D(this.track.track,"max")),this.valueNotesList.push(new _(this.outer,"min")),this.valueNotesList.push(new _(this.outer,"common")),this.valueNotesList.push(new _(this.outer,"max")))}},{key:"setPositions",value:function(e){var t=this,i=e.values,n=e.limits,o=e.direction,a=e.type,s=e.valueNotesMode,r=i.singleValue,l=i.rangeValueMin,u=i.rangeValueMax,p=a.value===a.constants.singleValue,c=function(e,i,a){e.update({title:a||i,track:t.track.track,positionValue:i,limits:n,direction:o})};window.requestAnimationFrame((function(){if(t.track.setPosition(n,i,o,a),p&&(t.handlersList[0].setPosition(r,n,o),c(t.valueNotesList[0],r)),!p){var e=H(t.handlersList,2),d=e[0],v=e[1],h=H(t.valueNotesList,3),y=h[0],f=h[1],m=h[2],g=(u+l)/2;d.setPosition(l,n,o),v.setPosition(u,n,o),c(y,l),c(m,u),c(f,g,[l,u]),_.checkValueNotesMode({event:t.valueNotesModeUpdateEvent,notes:[y,m],track:t.track.track,mode:s,direction:o,limits:n,values:i})}}))}},{key:"applyStyles",value:function(e){var t=[this.mainNode,this.outer].concat([this.track.track,this.track.progress],L(this.handlersList.map((function(e){return e.handler}))),L(this.valueNotesList.map((function(e){return e.valueNote}))),L(this.scale.getElements()));window.requestAnimationFrame((function(){t.forEach((function(t){Object.values(e).forEach((function(e){var i=t.classList[0],n=e.oldValue,o=e.value;n&&t.classList.remove("".concat(i,"_").concat(e.className,"_").concat(n)),t.classList.add("".concat(i,"_").concat(e.className,"_").concat(o))}))}))}))}},{key:"_resize",value:function(e){this.windowResizeEvent.trigger(e)}},{key:"_addEvents",value:function(){this.windowResizeEvent=r(),this.valueNotesModeUpdateEvent=r(),this.trackMousedownEvent=this.track.mousedownEvent,this.actionPositionCalculatedEvent=this.track.actionPositionCalculatedEvent}},{key:"_addListeners",value:function(){window.addEventListener("resize",this._resize)}},{key:"_init",value:function(){var e=this;this.mainNode=c.makeElement(["wrunner"]),this.outer=c.makeElement(["wrunner__outer"]),this.track=new w({parent:this.outer}),this.scale=new j({parent:this.outer}),window.requestAnimationFrame((function(){e.mainNode.appendChild(e.outer)})),this._addEvents(),this._addListeners()}}])&&M(t.prototype,i),n&&M(t,n),e}()).prototype,C="_resize",T=[o],z=Object.getOwnPropertyDescriptor(P.prototype,"_resize"),x=P.prototype,R={},Object.keys(z).forEach((function(e){R[e]=z[e]})),R.enumerable=!!R.enumerable,R.configurable=!!R.configurable,("value"in R||R.initializer)&&(R.writable=!0),R=T.slice().reverse().reduce((function(e,t){return t(S,C,e)||e}),R),x&&void 0!==R.initializer&&(R.value=R.initializer?R.initializer.call(x):void 0,R.initializer=void 0),void 0===R.initializer&&(Object.defineProperty(S,C,R),R=null),P);function F(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}function I(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function q(e,t,i,n,o){var a={};return Object.keys(n).forEach((function(e){a[e]=n[e]})),a.enumerable=!!a.enumerable,a.configurable=!!a.configurable,("value"in a||a.initializer)&&(a.writable=!0),a=i.slice().reverse().reduce((function(i,n){return n(e,t,i)||i}),a),o&&void 0!==a.initializer&&(a.value=a.initializer?a.initializer.call(o):void 0,a.initializer=void 0),void 0===a.initializer&&(Object.defineProperty(e,t,a),a=null),a}var W=(q((A=function(){function e(t){var i=t.userOptions,n=t.model,o=t.modelConfigDefaults,a=t.view;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e);var s=function(e){for(var t=1;t<arguments.length;t++){var i=null!=arguments[t]?arguments[t]:{},n=Object.keys(i);"function"==typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(i).filter((function(e){return Object.getOwnPropertyDescriptor(i,e).enumerable})))),n.forEach((function(t){F(e,t,i[t])}))}return e}({},o.getOptionsPresets(),i);this.model=n,this.view=a,this._init(s)}var t,i,n;return t=e,(i=[{key:"getPublicMethods",value:function(){return this.model.getPublicMethods()}},{key:"_updatePositions",value:function(){this.view.setPositions({values:this.model.getValues(),limits:this.model.getLimits(),direction:this.model.getDirection(),type:this.model.getType(),valueNotesMode:this.model.getValueNotesMode()})}},{key:"_valueUpdateEventHandler",value:function(){this._updatePositions()}},{key:"_typeUpdateEventHandler",value:function(){this.view.updateDOM(this.model.getType()),this.view.applyStyles([this.model.theme,this.model.direction]),this.view.applyValueNotesDisplay(this.model.getValueNotesDisplay(),this.model.getValueNotesMode()),this.model.recalculateValue()}},{key:"_limitsUpdateEventHandler",value:function(){this.model.recalculateValue()}},{key:"_stepUpdateEventHandler",value:function(){this.model.setLimits(),this.model.recalculateValue()}},{key:"_rootsUpdateEventHandler",value:function(){this.view.append(this.model.roots),this._updatePositions()}},{key:"_themeUpdateEventHandler",value:function(){this.view.applyStyles([this.model.theme,this.model.direction]),this._updatePositions()}},{key:"_directionUpdateEventHandler",value:function(){this.view.applyStyles([this.model.theme,this.model.direction]),this._updatePositions()}},{key:"_valueNotesDisplayUpdateEventHandler",value:function(){this.view.applyValueNotesDisplay(this.model.getValueNotesDisplay(),this.model.getValueNotesMode()),this._updatePositions()}},{key:"_scaleDivisionsCountUpdateEventHandler",value:function(){this.view.updateScaleDivisions(this.model.getScaleDivisionsCount()),this.view.applyStyles([this.model.theme,this.model.direction])}},{key:"_windowResizeEventHandler",value:function(){this._updatePositions()}},{key:"_trackMousedownEventHandler",value:function(e){this.view.handleMouseAction(e,this.model.getDirection())}},{key:"_actionPositionCalculatedHandler",value:function(e){this.model.setNearestValue(e)}},{key:"_valueNotesModeUpdateEventHandler",value:function(e){this.model.setValueNotesMode(e),this.view.applyValueNotesDisplay(this.model.getValueNotesDisplay(),this.model.getValueNotesMode()),this._updatePositions()}},{key:"_applyDefaultEventHandlers",value:function(){this.model.typeUpdateEvent.addHandler(this._typeUpdateEventHandler),this.model.limitsUpdateEvent.addHandler(this._limitsUpdateEventHandler),this.model.stepUpdateEvent.addHandler(this._stepUpdateEventHandler),this.model.valueUpdateEvent.addHandler(this._valueUpdateEventHandler),this.model.rootsUpdateEvent.addHandler(this._rootsUpdateEventHandler),this.model.themeUpdateEvent.addHandler(this._themeUpdateEventHandler),this.model.directionUpdateEvent.addHandler(this._directionUpdateEventHandler),this.model.valueNotesDisplayUpdateEvent.addHandler(this._valueNotesDisplayUpdateEventHandler),this.model.scaleDivisionsCountUpdateEvent.addHandler(this._scaleDivisionsCountUpdateEventHandler),this.view.valueNotesModeUpdateEvent.addHandler(this._valueNotesModeUpdateEventHandler),this.view.windowResizeEvent.addHandler(this._windowResizeEventHandler),this.view.trackMousedownEvent.addHandler(this._trackMousedownEventHandler),this.view.actionPositionCalculatedEvent.addHandler(this._actionPositionCalculatedHandler)}},{key:"_applyUserEvents",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.onTypeUpdate,i=e.onLimitsUpdate,n=e.onStepUpdate,o=e.onValueUpdate,a=e.onRootsUpdate,s=e.onThemeUpdate,r=e.onDirectionUpdate,l=e.onScaleDivisionsCountUpdate,u=e.onValueNotesDisplayUpdate;this.model.typeUpdateEvent.addHandler(t),this.model.limitsUpdateEvent.addHandler(i),this.model.stepUpdateEvent.addHandler(n),this.model.valueUpdateEvent.addHandler(o),this.model.rootsUpdateEvent.addHandler(a),this.model.themeUpdateEvent.addHandler(s),this.model.directionUpdateEvent.addHandler(r),this.model.scaleDivisionsCountUpdateEvent.addHandler(l),this.model.valueNotesDisplayUpdateEvent.addHandler(u)}},{key:"_applyUserOptions",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=e.type,i=e.limits,n=e.step,o=e.singleValue,a=e.rangeValues,s=e.roots,r=e.theme,l=e.direction,u=e.scaleDivisionsCount,p=e.isValueNotesDisplayed;this.model.setRoots(s),this.model.setValueNotesDisplay(p),this.model.setScaleDivisionsCount(u),this.model.setTheme(r),this.model.setDirection(l),this.model.setLimits(i),this.model.setStep(n),this.model.setType(t),this.model.setSingleValue(o),this.model.setRangeValues(a)}},{key:"_init",value:function(e){this._applyDefaultEventHandlers(),this._applyUserEvents(e),this._applyUserOptions(e)}}])&&I(t.prototype,i),n&&I(t,n),e}()).prototype,"_valueUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_valueUpdateEventHandler"),A.prototype),q(A.prototype,"_typeUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_typeUpdateEventHandler"),A.prototype),q(A.prototype,"_limitsUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_limitsUpdateEventHandler"),A.prototype),q(A.prototype,"_stepUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_stepUpdateEventHandler"),A.prototype),q(A.prototype,"_rootsUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_rootsUpdateEventHandler"),A.prototype),q(A.prototype,"_themeUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_themeUpdateEventHandler"),A.prototype),q(A.prototype,"_directionUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_directionUpdateEventHandler"),A.prototype),q(A.prototype,"_valueNotesDisplayUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_valueNotesDisplayUpdateEventHandler"),A.prototype),q(A.prototype,"_scaleDivisionsCountUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_scaleDivisionsCountUpdateEventHandler"),A.prototype),q(A.prototype,"_windowResizeEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_windowResizeEventHandler"),A.prototype),q(A.prototype,"_trackMousedownEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_trackMousedownEventHandler"),A.prototype),q(A.prototype,"_actionPositionCalculatedHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_actionPositionCalculatedHandler"),A.prototype),q(A.prototype,"_valueNotesModeUpdateEventHandler",[o],Object.getOwnPropertyDescriptor(A.prototype,"_valueNotesModeUpdateEventHandler"),A.prototype),A);t.a=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=new m,i=new s,n=new B,o=new W({model:t,modelConfigDefaults:i,view:n,userOptions:e});return o.getPublicMethods()}},,function(e,t,i){"use strict";i.r(t);var n=i(0);function o(e){for(var t=1;t<arguments.length;t++){var i=null!=arguments[t]?arguments[t]:{},n=Object.keys(i);"function"==typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(i).filter((function(e){return Object.getOwnPropertyDescriptor(i,e).enumerable})))),n.forEach((function(t){a(e,t,i[t])}))}return e}function a(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}function s(e){return(s="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}!function(e){e.fn.wRunner=function(){if("object"===s(arguments.length<=0?void 0:arguments[0])){var t=arguments.length<=0?void 0:arguments[0];return this.each((function(i,a){e(a).data("wRunner")||e(a).data("wRunner",Object(n.a)(o({},t,{roots:a})))}))}if("string"==typeof(arguments.length<=0?void 0:arguments[0])){var i=arguments.length<=0?void 0:arguments[0],a=arguments.length<=1?void 0:arguments[1],r=[],l=!1;if(this.each((function(t,n){var o=e(n).data("wRunner")[i](a);r.push(o),void 0!==o&&(l=!0)})),l.length){if(1===r.length)return r[0];if(r.length>1)return r}}return this}}($)}]);