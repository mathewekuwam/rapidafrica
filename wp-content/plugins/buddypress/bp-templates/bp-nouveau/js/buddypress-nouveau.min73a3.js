window.wp=window.wp||{},window.bp=window.bp||{},function(s,c){"undefined"!=typeof BP_Nouveau&&(s.Nouveau={start:function(){this.setupGlobals(),this.prepareDocument(),this.initObjects(),this.setHeartBeat(),this.addListeners()},setupGlobals:function(){this.ajax_request=null,this.objects=c.map(BP_Nouveau.objects,function(e){return e}),this.objectNavParent=BP_Nouveau.object_nav_parent,this.heartbeat=wp.heartbeat||{},this.querystring=this.getLinkParams()},prepareDocument:function(){var a;c("body").hasClass("no-js")&&c("body").removeClass("no-js").addClass("js"),BP_Nouveau.warnings&&"undefined"!=typeof console&&console.warn&&c.each(BP_Nouveau.warnings,function(e,t){console.warn(t)}),c(".buddypress_object_nav .widget-title").length&&(a=c(".buddypress_object_nav .widget-title").html(),c("body").find('*:contains("'+a+'")').each(function(e,t){c(t).hasClass("widget-title")||a!==c(t).html()||c(t).is("a")||c(t).remove()}))},getStorage:function(e,t){e=(e=sessionStorage.getItem(e))?JSON.parse(e):{};return void 0!==t?e[t]||!1:e},setStorage:function(e,t,a){var s=this.getStorage(e);return void 0===a&&void 0!==s[t]?delete s[t]:s[t]=a,sessionStorage.setItem(e,JSON.stringify(s)),null!==sessionStorage.getItem(e)},getLinkParams:function(e,t){e=e?-1!==e.indexOf("?")?"?"+e.split("?")[1]:"":document.location.search;if(!e)return null;e=e.replace(/(^\?)/,"").split("&").map(function(e){return this[(e=e.split("="))[0]]=e[1],this}.bind({}))[0];return t?e[t]:e},urlDecode:function(e,t){var a=t||{amp:"&",lt:"<",gt:">",quot:'"',"#039":"'"};return decodeURIComponent(e.replace(/\+/g," ")).replace(/&([^;]+);/g,function(e,t){return a[t]||""})},ajax:function(e,t){this.ajax_request&&this.ajax_request.abort();e=c.extend({},s.Nouveau.getStorage("bp-"+t),{nonce:BP_Nouveau.nonces[t]},e);return void 0!==BP_Nouveau.customizer_settings&&(e.customized=BP_Nouveau.customizer_settings),this.ajax_request=c.post(BP_Nouveau.ajaxurl,e,"json"),this.ajax_request},inject:function(e,t,a){c(e).length&&t&&("append"===(a=a||"reset")?c(e).append(t):"prepend"===a?c(e).prepend(t):c(e).html(t),"undefined"==typeof bp_mentions&&void 0===s.mentions||c(".bp-suggestions").bp_mentions(s.mentions.users))},objectRequest:function(a){var e,s=this;if((a=c.extend({object:"",scope:null,filter:null,target:"#buddypress [data-bp-list]",search_terms:"",page:1,extras:null,caller:null,template:null,method:"reset"},a)).object&&a.target)return a.search_terms&&(a.search_terms=a.search_terms.replace(/</g,"&lt;").replace(/>/g,"&gt;")),null!==a.scope&&this.setStorage("bp-"+a.object,"scope",a.scope),null!==a.filter&&this.setStorage("bp-"+a.object,"filter",a.filter),null!==a.extras&&this.setStorage("bp-"+a.object,"extras",a.extras),c(this.objectNavParent+" [data-bp-object]").each(function(){c(this).removeClass("selected loading")}),c(this.objectNavParent+' [data-bp-scope="'+a.scope+'"], #object-nav li.current').addClass("selected loading"),c('#buddypress [data-bp-filter="'+a.object+'"] option[value="'+a.filter+'"]').prop("selected",!0),"friends"===a.object||"friend_requests"===a.object||"group_members"===a.object?(a.template=a.object,a.object="members"):"group_requests"===a.object?(a.object="groups",a.template="group_requests"):"notifications"===a.object&&(a.object="members",a.template="member_notifications"),e=c.extend({action:a.object+"_filter"},a),this.ajax(e,a.object).done(function(e){var t;!1!==e.success&&((t=c(s.objectNavParent+' [data-bp-scope="'+a.scope+'"]')).removeClass("loading"),e.data&&e.data.totalItems&&e.data.navLabel&&t.find("a").first().html(e.data.navLabel+"&nbsp;").append(c("<span></span>").addClass("count").html(e.data.totalItems)),"reset"!==a.method?(s.inject(a.target,e.data.contents,a.method),c(a.target).trigger("bp_ajax_"+a.method,c.extend(a,{response:e.data}))):"pag-bottom"===a.caller&&c("#subnav").length?(t=c("#subnav").parent(),c("html,body").animate({scrollTop:t.offset().top},"slow",function(){c(a.target).fadeOut(100,function(){s.inject(this,e.data.contents,a.method),c(this).fadeIn(100,"swing",function(){c(a.target).trigger("bp_ajax_request",c.extend(a,{response:e.data}))})})})):c(a.target).fadeOut(100,function(){s.inject(this,e.data.contents,a.method),c(this).fadeIn(100,"swing",function(){c(a.target).trigger("bp_ajax_request",c.extend(a,{response:e.data}))})}))})},initObjects:function(){var a,s,r=this,n="all",o="",i=null,d=null;c.each(this.objects,function(e,t){void 0!==(a=r.getStorage("bp-"+t)).scope&&(n=a.scope),void 0!==a.extras&&"notifications"!==t&&(i=a.extras),c('#buddypress [data-bp-filter="'+t+'"]').length&&("-1"!==c('#buddypress [data-bp-filter="'+t+'"]').val()&&"0"!==c('#buddypress [data-bp-filter="'+t+'"]').val()?d=c('#buddypress [data-bp-filter="'+t+'"]').val():void 0!==a.filter&&(d=a.filter,c('#buddypress [data-bp-filter="'+t+'"] option[value="'+d+'"]').prop("selected",!0))),c(this.objectNavParent+' [data-bp-object="'+t+'"]').length&&(c(this.objectNavParent+' [data-bp-object="'+t+'"]').each(function(){c(this).removeClass("selected")}),c(this.objectNavParent+' [data-bp-scope="'+t+'"], #object-nav li.current').addClass("selected")),null!==r.querystring&&(void 0!==r.querystring[t+"_search"]?o=r.querystring[t+"_search"]:void 0!==r.querystring.s&&(o=r.querystring.s),o&&(o=r.urlDecode(o),c('#buddypress [data-bp-search="'+t+'"] input[type=search]').val(o))),c('#buddypress [data-bp-list="'+t+'"]').length&&(s={object:t,scope:n,filter:d,search_terms:o,extras:i},r.objectRequest(s))})},setHeartBeat:function(){void 0!==BP_Nouveau.pulse&&this.heartbeat&&(this.heartbeat.interval(Number(BP_Nouveau.pulse)),c.fn.extend({"heartbeat-send":function(){return this.bind("heartbeat-send.buddypress")}}),c.fn.extend({"heartbeat-tick":function(){return this.bind("heartbeat-tick.buddypress")}}))},addListeners:function(){c("[data-bp-disable-input]").on("change",this.toggleDisabledInput),c(document).on("heartbeat-send.buddypress",this.heartbeatSend),c(document).on("heartbeat-tick.buddypress",this.heartbeatTick),c(this.objectNavParent+" .bp-navs").on("click","a",this,this.scopeQuery),c("#buddypress [data-bp-filter]").on("change",this,this.filterQuery),c("#buddypress [data-bp-search]").on("submit","form",this,this.searchQuery),c("#buddypress [data-bp-search] form").on("search","input[type=search]",this.resetSearch),c("#buddypress [data-bp-list], #buddypress #item-header").on("click","[data-bp-btn-action]",this,this.buttonAction),c("#buddypress [data-bp-close]").on("click",this,this.closeNotice),c("#buddypress [data-bp-list]").on("click","[data-bp-pagination] a",this,this.paginateAction),BP_Nouveau.bpPasswordVerify&&BP_Nouveau.bpPasswordVerify.requiredPassStrength&&c("#pass1").on("input pwupdate",this.checkPassStrength)},toggleDisabledInput:function(e){var t=c(e.currentTarget),a="#"+t.data("bp-disable-input"),e=t.prop("checked");t.removeClass("enabled disabled"),e?(t.addClass("enabled"),c(a).prop("disabled",!1)):(c(a).prop("disabled",!0),t.addClass("disabled"))},heartbeatSend:function(e,t){c("#buddypress").trigger("bp_heartbeat_send",t)},heartbeatTick:function(e,t){c("#buddypress").trigger("bp_heartbeat_tick",t)},scopeQuery:function(e){var t,a,s,r=e.data,n=c(e.currentTarget).parent(),o="";return n.hasClass("no-ajax")||c(e.currentTarget).hasClass("no-ajax")||!n.attr("data-bp-scope")?e:(t=n.data("bp-scope"),a=n.data("bp-object"),t&&a?(e.preventDefault(),s=c("#buddypress").find('[data-bp-filter="'+a+'"]').first().val(),c('#buddypress [data-bp-search="'+a+'"] input[type=search]').length&&(o=c('#buddypress [data-bp-search="'+a+'"] input[type=search]').val()),n.hasClass("dynamic")&&n.find("a span").html(""),void r.objectRequest({object:a,scope:t,filter:s,search_terms:o,page:1})):e)},filterQuery:function(e){var t=e.data,a=c(e.target).data("bp-filter"),s="all",r=c(e.target).val(),n="";if(!a)return e;c(t.objectNavParent+" [data-bp-object].selected").length&&(s=c(t.objectNavParent+" [data-bp-object].selected").data("bp-scope")),c('#buddypress [data-bp-search="'+a+'"] input[type=search]').length&&(n=c('#buddypress [data-bp-search="'+a+'"] input[type=search]').val()),t.objectRequest({object:a,scope:s,filter:r,search_terms:n,page:1,template:null})},searchQuery:function(e){var t,a,s,r=e.data,n="all";if(c(e.delegateTarget).hasClass("no-ajax")||void 0===c(e.delegateTarget).data("bp-search"))return e;e.preventDefault(),t=c(e.delegateTarget).data("bp-search"),a=c("#buddypress").find('[data-bp-filter="'+t+'"]').first().val(),s=c(e.delegateTarget).find("input[type=search]").first().val(),c(r.objectNavParent+" [data-bp-object]").length&&(n=c(r.objectNavParent+' [data-bp-object="'+t+'"].selected').data("bp-scope")),r.objectRequest({object:t,scope:n,filter:a,search_terms:s,page:1,template:null})},showSearchSubmit:function(e){c(e.delegateTarget).find("[type=submit]").addClass("bp-show"),c("[type=submit]").hasClass("bp-hide")&&c("[type=submit]").removeClass("bp-hide")},resetSearch:function(e){c(e.target).val()?c(e.delegateTarget).find("[type=submit]").show():c(e.delegateTarget).submit()},buttonAction:function(e){var a=e.data,s=c(e.currentTarget),r=s.data("bp-btn-action"),t=s.data("bp-nonce"),n=s.closest("[data-bp-item-id]"),o=n.data("bp-item-id"),i=s.closest(".list-wrap"),d=n.data("bp-item-component");if(!r||!o||!d)return e;if(e.preventDefault(),void 0!==BP_Nouveau[r+"_confirm"]&&!1===window.confirm(BP_Nouveau[r+"_confirm"])||s.hasClass("pending"))return!1;var t=t||s.prop("href"),p=a.getLinkParams(t,"_wpnonce"),t={is_friend:"remove_friend",not_friends:"add_friend",pending:"withdraw_friendship",accept_friendship:"accept_friendship",reject_friendship:"reject_friendship"};"members"===d&&void 0!==t[r]&&(r=t[r],d="friends"),s.addClass("pending loading"),a.ajax({action:d+"_"+r,item_id:o,_wpnonce:p},d).done(function(e){var t;{if(!1!==e.success)return"groups"===d&&void 0!==e.data.is_group&&e.data.is_group?window.location.reload():void 0!==e.data.is_user&&e.data.is_user?(s.parent().html(e.data.feedback),void n.fadeOut(1500)):(c(a.objectNavParent+' [data-bp-scope="personal"]').length&&(t=Number(c(a.objectNavParent+' [data-bp-scope="personal"] span').html())||0,-1!==c.inArray(r,["leave_group","remove_friend"])?--t:-1!==c.inArray(r,["join_group"])&&(t+=1),t<0&&(t=0),c(a.objectNavParent+' [data-bp-scope="personal"] span').html(t)),void s.parent().replaceWith(e.data.contents));i.prepend(e.data.feedback),s.removeClass("pending loading"),n.find(".bp-feedback").fadeOut(6e3)}})},closeNotice:function(e){var t=c(e.currentTarget);e.preventDefault(),"clear"===t.data("bp-close")&&(void 0!==c.cookie("bp-message")&&c.removeCookie("bp-message"),void 0!==c.cookie("bp-message-type")&&c.removeCookie("bp-message-type")),t.closest(".bp-feedback").hasClass("bp-sitewide-notice")&&s.Nouveau.ajax({action:"messages_dismiss_sitewide_notice"},"messages"),t.closest(".bp-feedback").remove()},paginateAction:function(e){var t,a=e.data,s=c(e.currentTarget),r=null,n=null,o=null,i=null,d=s.closest("[data-bp-pagination]").data("bp-pagination")||null;if(null===d)return e;e.preventDefault(),null!==(t=c(e.delegateTarget).data("bp-list")||null)&&(void 0!==(e=a.getStorage("bp-"+t)).scope&&(r=e.scope),void 0!==e.filter&&(n=e.filter),void 0!==e.extras&&(i=e.extras));d={object:t,scope:r,filter:n,search_terms:o=c('#buddypress [data-bp-search="'+t+'"] input[type=search]').length?c('#buddypress [data-bp-search="'+t+'"] input[type=search]').val():o,extras:i,page:a.getLinkParams(s.prop("href"),d)||1};a.objectRequest(d)},checkPassStrength:function(e){var t=BP_Nouveau.bpPasswordVerify,a=parseInt(t.requiredPassStrength,10),s=c(e.currentTarget).val(),r=c("#pass2").val(),n=c(e.currentTarget).closest("form"),s="function"==typeof wp.passwordStrength.userInputDisallowedList?wp.passwordStrength.meter(s,wp.passwordStrength.userInputDisallowedList(),r):wp.passwordStrength.meter(s,wp.passwordStrength.userInputBlacklist(),r);a&&a<=4&&(r=c(n).find("#password-warning"),s<a?(c(r).length||c(e.currentTarget).before(c("<p></p>").prop("id","password-warning").addClass("description")),c(r).html(t.tooWeakPasswordWarning)):c(r).length&&c(r).remove(),c(n).find("#password-strength-score").length||c(n).prepend(c("<input></input>").prop({id:"password-strength-score",type:"hidden",name:"_password_strength_score"})),c("#password-strength-score").val(s),s<a&&c(".pw-weak").remove())}},s.Nouveau.start())}(window.bp,jQuery);