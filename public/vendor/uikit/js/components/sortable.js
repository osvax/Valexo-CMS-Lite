/*
 * @project   Автор проекта - Valexo CMS LIte
 * @author    Valentin Alexo
 * @email     osvax@yandex.com
 * @phone    +7(909)057-22-69
 *
 * Создание сайтов и интернет магазинов, посадочных страниц
 * Разработка проектов на Laravel. SEO и SMM продвижение.
 * Copyright (C) 2020 - 2021, Inc - Все права защищены
 */

/*! UIkit 2.27.5 | http://www.getuikit.com | (c) 2014 YOOtheme | MIT License */
(function(addon) {

    var component;

    if (window.UIkit2) {
        component = addon(UIkit2);
    }

    if (typeof define == 'function' && define.amd) {
        define('uikit-sortable', ['uikit'], function(){
            return component || addon(UIkit2);
        });
    }

})(function(UI){

    "use strict";

    var supportsTouch       = ('ontouchstart' in window || 'MSGesture' in window) || (window.DocumentTouch && document instanceof DocumentTouch),
        draggingPlaceholder, currentlyDraggingElement, currentlyDraggingTarget, dragging, moving, clickedlink, delayIdle, touchedlists, moved, overElement, startEvent;

    var POINTER_DOWN = supportsTouch ? ('MSGesture' in window || window.PointerEvent ? 'pointerdown':'touchstart') : 'mousedown',
        POINTER_MOVE = supportsTouch ? ('MSGesture' in window || window.PointerEvent ? 'pointermove':'touchmove') : 'mousemove',
        POINTER_UP   = supportsTouch ? ('MSGesture' in window || window.PointerEvent ? 'pointerup':'touchend') : 'mouseup';


    function closestSortable(ele) {

        ele = UI.$(ele);

        do {
            if (ele.data('sortable')) {
                return ele;
            }
            ele = UI.$(ele).parent();
        } while(ele.length);

        return ele;
    }

    UI.component('sortable', {

        defaults: {

            animation        : 150,
            threshold        : 10,

            childClass       : 'uk-sortable-item',
            placeholderClass : 'uk-sortable-placeholder',
            overClass        : 'uk-sortable-over',
            draggingClass    : 'uk-sortable-dragged',
            dragMovingClass  : 'uk-sortable-moving',
            baseClass        : 'uk-sortable',
            noDragClass      : 'uk-sortable-nodrag',
            emptyClass       : 'uk-sortable-empty',
            dragCustomClass  : '',
            handleClass      : false,
            group            : false,

            stop             : function() {},
            start            : function() {},
            change           : function() {}
        },

        boot: function() {

            // auto init
            UI.ready(function(context) {

                UI.$('[data-uk-sortable]', context).each(function(){

                    var ele = UI.$(this);

                    if(!ele.data('sortable')) {
                        UI.sortable(ele, UI.Utils.options(ele.attr('data-uk-sortable')));
                    }
                });
            });

            UI.$html.on(POINTER_MOVE, function(e) {

                if (delayIdle) {

                    var src = e.originalEvent.targetTouches ? e.originalEvent.targetTouches[0] : e;

                    if (Math.abs(src.pageX - delayIdle.pos.x) > delayIdle.threshold || Math.abs(src.pageY - delayIdle.pos.y) > delayIdle.threshold) {
                        delayIdle.apply(src);
                    }
                }

                if (draggingPlaceholder) {

                    if (!moving) {
                        moving = true;
                        draggingPlaceholder.show();

                        draggingPlaceholder.$current.addClass(draggingPlaceholder.$sortable.options.placeholderClass);
                        draggingPlaceholder.$sortable.element.children().addClass(draggingPlaceholder.$sortable.options.childClass);

                        UI.$html.addClass(draggingPlaceholder.$sortable.options.dragMovingClass);
                    }

                    var offset = draggingPlaceholder.data('mouse-offset'),
                        ev     = e.originalEvent.touches && e.originalEvent.touches[0] || e.originalEvent,
                        left   = parseInt(ev.pageX, 10) + offset.left,
                        top    = parseInt(ev.pageY, 10) + offset.top;

                    draggingPlaceholder.css({left: left, top: top });

                    // adjust document scrolling

                    if (top + (draggingPlaceholder.height()/3) > document.body.offsetHeight) {
                        return;
                    }

                    if (top < UI.$win.scrollTop()) {
                        UI.$win.scrollTop(UI.$win.scrollTop() - Math.ceil(draggingPlaceholder.height()/3));
                    } else if ( (top + (draggingPlaceholder.height()/3)) > (window.innerHeight + UI.$win.scrollTop()) ) {
                        UI.$win.scrollTop(UI.$win.scrollTop() + Math.ceil(draggingPlaceholder.height()/3));
                    }
                }
            });

            UI.$html.on(POINTER_UP, function(e) {

                delayIdle = clickedlink = false;

                // dragging?
                if (!currentlyDraggingElement || !draggingPlaceholder) {
                    // completely reset dragging attempt. will cause weird delay behavior elsewise
                    currentlyDraggingElement = draggingPlaceholder = null;
                    return;
                }

                // inside or outside of sortable?
                var sortable  = closestSortable(currentlyDraggingElement),
                    component = draggingPlaceholder.$sortable,
                    ev        = { type: e.type };

                if (sortable[0]) {
                    component.dragDrop(ev, component.element);
                }
                component.dragEnd(ev, component.element);
            });
        },

        init: function() {

            var $this   = this,
                element = this.element[0];

            touchedlists = [];

            this.checkEmptyList();

            this.element.data('sortable-group', this.options.group ? this.options.group : UI.Utils.uid('sortable-group'));

            var handleDragStart = delegate(function(e) {

                if (e.data && e.data.sortable) {
                    return;
                }

                var $target = UI.$(e.target),
                    $link   = $target.is('a[href]') ? $target:$target.parents('a[href]');

                if ($target.is(':input')) {
                    return;
                }

                if ($this.options.handleClass) {
                    var handle = $target.hasClass($this.options.handleClass) ? $target : $target.closest('.'+$this.options.handleClass, $this.element);
                    if (!handle.length) return;
                }

                e.preventDefault();

                if ($link.length) {

                    $link.one('click', function(e){
                        e.preventDefault();
                    }).one(POINTER_UP, function(){

                        if (!moved) {
                            $link.trigger('click');
                            if (supportsTouch && $link.attr('href').trim()) {
                                location.href = $link.attr('href');
                            }
                        }
                    });
                }

                e.data = e.data || {};

                e.data.sortable = element;

                return $this.dragStart(e, this);
            });

            var handleDragEnter = delegate(UI.Utils.debounce(function(e) {
                return $this.dragEnter(e, this);
            }), 40);

            var handleDragLeave = delegate(function(e) {

                // Prevent dragenter on a child from allowing a dragleave on the container
                var previousCounter = $this.dragenterData(this);
                $this.dragenterData(this, previousCounter - 1);

                // This is a fix for child elements firing dragenter before the parent fires dragleave
                if (!$this.dragenterData(this)) {
                    UI.$(this).removeClass($this.options.overClass);
                    $this.dragenterData(this, false);
                }
            });

            var handleTouchMove = delegate(function(e) {

                if (!currentlyDraggingElement ||
                    currentlyDraggingElement === this ||
                    currentlyDraggingTarget === this) {
                    return true;
                }

                $this.element.children().removeClass($this.options.overClass);
                currentlyDraggingTarget = this;

                $this.moveElementNextTo(currentlyDraggingElement, this);

                return prevent(e);
            });

            // Bind/unbind standard mouse/touch events as a polyfill.
            function addDragHandlers() {

                if (supportsTouch && startEvent.touches && startEvent.touches.length) {
                    element.addEventListener(POINTER_MOVE, handleTouchMove, false);
                } else {
                    element.addEventListener('mouseover', handleDragEnter, false);
                    element.addEventListener('mouseout', handleDragLeave, false);
                }

                // document.addEventListener("selectstart", prevent, false);
            }

            function removeDragHandlers() {
                if (supportsTouch && startEvent.touches && startEvent.touches.length) {
                    element.removeEventListener(POINTER_MOVE, handleTouchMove, false);
                } else {
                    element.removeEventListener('mouseover', handleDragEnter, false);
                    element.removeEventListener('mouseout', handleDragLeave, false);
                }

                // document.removeEventListener("selectstart", prevent, false);
            }

            this.addDragHandlers    = addDragHandlers;
            this.removeDragHandlers = removeDragHandlers;

            function handleDragMove(e) {

                if (!currentlyDraggingElement) {
                    return;
                }

                $this.dragMove(e, $this);
            }

            function delegate(fn) {

                return function(e) {

                    var touch, target, context;

                    startEvent = e;

                    if (e) {
                        touch  = e.touches && e.touches[0] || e;
                        target = touch.target || e.target;

                        // Fix event.target for a touch event
                        if (supportsTouch && document.elementFromPoint) {
                            
                            var _target = document.elementFromPoint(touch.pageX - document.body.scrollLeft, touch.pageY - document.body.scrollTop);

                            if (_target) {
                                target = _target;
                            }
                        }

                        overElement = UI.$(target);
                    }

                    if (UI.$(target).hasClass('.'+$this.options.childClass)) {
                        fn.apply(target, [e]);
                    } else if (target !== element) {

                        // If a child is initiating the event or ending it, then use the container as context for the callback.
                        context = moveUpToChildNode(element, target);

                        if (context) {
                            fn.apply(context, [e]);
                        }
                    }
                };
            }

            window.addEventListener(POINTER_MOVE, handleDragMove, false);
            element.addEventListener(POINTER_DOWN, handleDragStart, false);
        },

        dragStart: function(e, elem) {

            moved    = false;
            moving   = false;
            dragging = false;

            var $this    = this,
                target   = UI.$(e.target);

            if (!supportsTouch && e.button==2) {
                return;
            }

            if (target.is('.'+$this.options.noDragClass)) {
                return;
            }

            var noDragParent = target.closest('.'+$this.options.noDragClass);

            if (noDragParent.length && this.element.find(noDragParent[0]).length) {
                return;
            }

            // prevent dragging if taget is a form field
            if (target.is(':input')) {
                return;
            }

            currentlyDraggingElement = elem;

            // init drag placeholder
            if (draggingPlaceholder) {
                draggingPlaceholder.remove();
            }

            var $current = UI.$(currentlyDraggingElement), offset = $current.offset(), ev = e.touches && e.touches[0] || e;

            delayIdle = {

                pos       : { x:ev.pageX, y:ev.pageY },
                threshold : $this.options.handleClass ? 1 : $this.options.threshold,
                apply     : function(evt) {

                    draggingPlaceholder = UI.$('<div class="'+([$this.options.draggingClass, $this.options.dragCustomClass].join(' '))+'"></div>').css({
                        display : 'none',
                        top     : offset.top,
                        left    : offset.left,
                        width   : $current.width(),
                        height  : $current.height(),
                        padding : $current.css('padding')
                    }).data({
                        'mouse-offset': {
                            left : offset.left - parseInt(ev.pageX, 10),
                            top  : offset.top  - parseInt(ev.pageY, 10)
                        },
                        origin : $this.element,
                        index  : $current.index()
                    }).append($current.html()).appendTo('body');

                    draggingPlaceholder.$current  = $current;
                    draggingPlaceholder.$sortable = $this;

                    $current.data({
                        'start-list': $current.parent(),
                        'start-index': $current.index(),
                        'sortable-group': $this.options.group
                    });

                    $this.addDragHandlers();

                    $this.options.start(this, currentlyDraggingElement);
                    $this.trigger('start.uk.sortable', [$this, currentlyDraggingElement, draggingPlaceholder]);

                    moved     = true;
                    delayIdle = false;
                }
            };
        },

        dragMove: function(e, elem) {

            overElement = UI.$(document.elementFromPoint(e.pageX - (document.body.scrollLeft || document.scrollLeft || 0), e.pageY - (document.body.scrollTop || document.documentElement.scrollTop || 0)));

            var overRoot     = overElement.closest('.'+this.options.baseClass),
                groupOver    = overRoot.data('sortable-group'),
                $current     = UI.$(currentlyDraggingElement),
                currentRoot  = $current.parent(),
                groupCurrent = $current.data('sortable-group'),
                overChild;

            if (overRoot[0] !== currentRoot[0] && groupCurrent !== undefined && groupOver === groupCurrent) {

                overRoot.data('sortable').addDragHandlers();

                touchedlists.push(overRoot);
                overRoot.children().addClass(this.options.childClass);

                // swap root
                if (overRoot.children().length > 0) {
                    overChild = overElement.closest('.'+this.options.childClass);

                    if (overChild.length) {
                        overChild.before($current);
                    } else {
                        overRoot.append($current);
                    }

                } else { // empty list
                    overElement.append($current);
                }

                UI.$doc.trigger('mouseover');
            }

            this.checkEmptyList();
            this.checkEmptyList(currentRoot);
        },

        dragEnter: function(e, elem) {

            if (!currentlyDraggingElement || currentlyDraggingElement === elem) {
                return true;
            }

            var previousCounter = this.dragenterData(elem);

            this.dragenterData(elem, previousCounter + 1);

            // Prevent dragenter on a child from allowing a dragleave on the container
            if (previousCounter === 0) {

                var currentlist = UI.$(elem).parent(),
                    startlist   = UI.$(currentlyDraggingElement).data('start-list');

                if (currentlist[0] !== startlist[0]) {

                    var groupOver    = currentlist.data('sortable-group'),
                        groupCurrent = UI.$(currentlyDraggingElement).data('sortable-group');

                    if ((groupOver ||  groupCurrent) && (groupOver != groupCurrent)) {
                        return false;
                    }
                }

                UI.$(elem).addClass(this.options.overClass);
                this.moveElementNextTo(currentlyDraggingElement, elem);
            }

            return false;
        },

        dragEnd: function(e, elem) {

            var $this = this;

            // avoid triggering event twice
            if (currentlyDraggingElement) {
                // TODO: trigger on right element?
                this.options.stop(elem);
                this.trigger('stop.uk.sortable', [this]);
            }

            currentlyDraggingElement = null;
            currentlyDraggingTarget  = null;

            touchedlists.push(this.element);
            touchedlists.forEach(function(el, i) {
                UI.$(el).children().each(function() {
                    if (this.nodeType === 1) {
                        UI.$(this).removeClass($this.options.overClass)
                            .removeClass($this.options.placeholderClass)
                            .removeClass($this.options.childClass);
                        $this.dragenterData(this, false);
                    }
                });
            });

            touchedlists = [];

            UI.$html.removeClass(this.options.dragMovingClass);

            this.removeDragHandlers();

            if (draggingPlaceholder) {
                draggingPlaceholder.remove();
                draggingPlaceholder = null;
            }
        },

        dragDrop: function(e, elem) {

            if (e.type === 'drop') {

                if (e.stopPropagation) {
                    e.stopPropagation();
                }

                if (e.preventDefault) {
                    e.preventDefault();
                }
            }

            this.triggerChangeEvents();
        },

        triggerChangeEvents: function() {

            // trigger events once
            if (!currentlyDraggingElement) return;

            var $current = UI.$(currentlyDraggingElement),
                oldRoot  = draggingPlaceholder.data('origin'),
                newRoot  = $current.closest('.'+this.options.baseClass),
                triggers = [],
                el       = UI.$(currentlyDraggingElement);

            // events depending on move inside lists or across lists
            if (oldRoot[0] === newRoot[0] && draggingPlaceholder.data('index') != $current.index() ) {
                triggers.push({sortable: this, mode: 'moved'});
            } else if (oldRoot[0] != newRoot[0]) {
                triggers.push({sortable: UI.$(newRoot).data('sortable'), mode: 'added'}, {sortable: UI.$(oldRoot).data('sortable'), mode: 'removed'});
            }

            triggers.forEach(function (trigger, i) {
                if (trigger.sortable) {
                    trigger.sortable.element.trigger('change.uk.sortable', [trigger.sortable, el, trigger.mode]);
                }
            });
        },

        dragenterData: function(element, val) {

            element = UI.$(element);

            if (arguments.length == 1) {
                return parseInt(element.data('child-dragenter'), 10) || 0;
            } else if (!val) {
                element.removeData('child-dragenter');
            } else {
                element.data('child-dragenter', Math.max(0, val));
            }
        },

        moveElementNextTo: function(element, elementToMoveNextTo) {

            dragging = true;

            var $this    = this,
                list     = UI.$(element).parent().css('min-height', ''),
                next     = isBelow(element, elementToMoveNextTo) ? elementToMoveNextTo : elementToMoveNextTo.nextSibling,
                children = list.children(),
                count    = children.length;

            if (!$this.options.animation) {
                elementToMoveNextTo.parentNode.insertBefore(element, next);
                UI.Utils.checkDisplay($this.element.parent());
                return;
            }

            list.css('min-height', list.height());

            children.stop().each(function(){
                var ele = UI.$(this),
                    offset = ele.position();

                    offset.width = ele.width();

                ele.data('offset-before', offset);
            });

            elementToMoveNextTo.parentNode.insertBefore(element, next);

            UI.Utils.checkDisplay($this.element.parent());

            children = list.children().each(function() {
                var ele    = UI.$(this);
                ele.data('offset-after', ele.position());
            }).each(function() {
                var ele    = UI.$(this),
                    before = ele.data('offset-before');
                ele.css({position:'absolute', top:before.top, left:before.left, minWidth:before.width });
            });

            children.each(function(){

                var ele    = UI.$(this),
                    before = ele.data('offset-before'),
                    offset = ele.data('offset-after');

                    ele.css('pointer-events', 'none').width();

                    setTimeout(function(){
                        ele.animate({'top':offset.top, 'left':offset.left}, $this.options.animation, function() {
                            ele.css({position:'',top:'', left:'', minWidth: '', 'pointer-events':''}).removeClass($this.options.overClass).removeData('child-dragenter');
                            count--;
                            if (!count) {
                                list.css('min-height', '');
                                UI.Utils.checkDisplay($this.element.parent());
                            }
                        });
                    }, 0);
            });
        },

        serialize: function() {

            var data = [], item, attribute;

            this.element.children().each(function(j, child) {
                item = {};
                for (var i = 0, attr, val; i < child.attributes.length; i++) {
                    attribute = child.attributes[i];
                    if (attribute.name.indexOf('data-') === 0) {
                        attr       = attribute.name.substr(5);
                        val        =  UI.Utils.str2json(attribute.value);
                        item[attr] = (val || attribute.value=='false' || attribute.value=='0') ? val:attribute.value;
                    }
                }
                data.push(item);
            });

            return data;
        },

        checkEmptyList: function(list) {

            list  = list ? UI.$(list) : this.element;

            if (this.options.emptyClass) {
                list[!list.children().length ? 'addClass':'removeClass'](this.options.emptyClass);
            }
        }
    });

    // helpers

    function isBelow(el1, el2) {

        var parent = el1.parentNode;

        if (el2.parentNode != parent) {
            return false;
        }

        var cur = el1.previousSibling;

        while (cur && cur.nodeType !== 9) {
            if (cur === el2) {
                return true;
            }
            cur = cur.previousSibling;
        }

        return false;
    }

    function moveUpToChildNode(parent, child) {
        var cur = child;
        if (cur == parent) { return null; }

        while (cur) {
            if (cur.parentNode === parent) {
                return cur;
            }

            cur = cur.parentNode;
            if ( !cur || !cur.ownerDocument || cur.nodeType === 11 ) {
                break;
            }
        }
        return null;
    }

    function prevent(e) {
        if (e.stopPropagation) {
            e.stopPropagation();
        }
        if (e.preventDefault) {
            e.preventDefault();
        }
        e.returnValue = false;
    }

    return UI.sortable;
});
