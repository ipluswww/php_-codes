jscolor.dir="/js/dist/",$(document).ready(function(a){!function(a,b,c,d,e,f,g,h){function i(a){s.removeClass("show_sign").removeClass("show_donate").removeClass("show_embed_this").removeClass("show_tell"),s.addClass("show_"+a)}function j(b){a("#petition, #privacy_policy, #embed_this_left").hide(),a("#"+b).show(),P()}function k(){j("petition"),i("sign")}function l(){j("petition"),i("donate")}function m(){j(a("#embed_this_left").length?"embed_this_left":"petition"),i("embed_this")}function n(){i("tell")}function o(){j("privacy_policy"),!D&&E.length&&E.data("jsp").reinitialise(),i(T?"tell":"sign")}var p=a("#policat_widget"),q=a("#body_policat_widget"),r=a("#policat_widget_left"),s=a("#policat_widget_right"),t=a("#content_right"),u=a(".stage_right "),v=a("#down_button"),w=a("#pledges"),x=1,y=c.navigator.userAgent.match(/AppleWebKit\/([0-9]+)/),z=y&&y[1],A=y&&z>=534,B=c.navigator.userAgent.match(/Android ([0-9]+)/)&&RegExp.$1<=2,C=c.navigator.userAgent.match(/iPhone/i)||c.navigator.userAgent.match(/iPod/i),D=A&&!B,E=a("#privacy_policy_text"),F=a("#petition_text"),G=a("img",F),H=a("#background_text"),I=a("#scroll_pledges"),J=[E,F,H];I&&J.push(I);var K=a(J),L=!1,M=null,N=function(a){return a.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")},O=function(){var b=a("#pet_title").outerHeight(!0),c=a("#pet_subtitle").outerHeight(!0),d=a("#petition_tabs").outerHeight(!0),e=a("#target_selector").outerHeight(!0);e||(e=0),u.addClass("stage_calc"),u.css("height",u.height()),u.removeClass("stage_calc");var f=t.height();(400>f||L)&&(f=400),a("#petition_text").css("height",f-(b+c+d)),a("#petition_signing_email_body_copy").css("height",f-(61+e+b+c+d)),a("#right_tab,.right_tab_content").css("height",f-(b+d)),a("#embed_this_left").css("height",f),a("#privacy_policy_text").css("height",f-40),I.css("height",f-(e+b+c+d))},P=function(){var b=a(c).width();440>b?(q.addClass("small"),L=!0):(q.removeClass("small"),L=!1);var d=p.height();M&&d===M||"postMessage"in c&&c.parent.postMessage("policat_height;"+X+";"+d,"*"),M=d,O(),p.css("background-color",r.height()>s.height()?s.css("background-color"):r.css("background-color")),D||x||(x=setTimeout(function(){K.each(function(){var b=a(this);b.length&&(F.length&&G.css("max-width",F.width()-10),b.data("jsp").reinitialise())}),x=null},50))};v.click(function(){return c.parent.postMessage("policat_scroll;"+X+";"+r.height(),"*"),!1}),"postMessage"in c||a("#content_right .stage_right").css("max-height","500px");for(var Q=32,R=a("#btn_sign");Q>12;)Q--,R.width()>=170?R.css("font-size",Q+"px"):Q=0;for(R.css("line-height","49px"),Q=33,R=a("#pet_title");Q>12;)Q--,20===Q&&R.css("font-weight","normal"),R.height()>72?R.css("font-size",Q+"px"):Q=0;for(Q=16,R=a("#policat_widget_right div.sign h2:first");Q>11;)Q--,R.height()>20?R.css("font-size",Q+"px"):Q=0;a("#widget_styling_type").each(function(){var b=a("label",a(this).parent());b.after(a("#embed_this_help_type")),b.html(b.html()+" (?)")}),a("#widget_styling_width").each(function(){var b=a("label",a(this).parent());b.after(a("#embed_this_help_width")),b.html(b.html()+" (?)")}),a("select").wrap('<div class="div_select"/>');var S=c.location.hash.substring(1).split("!"),T="1"==S[0],U=S[1].length>0;if(U)var V=S[1];var W=decodeURIComponent(S[2]),X=S[3],Y=S[4];if(W){var Z=W.split("-",3);if(3==Z.length){var $=parseInt(Z[0]),_=parseInt(Z[1]),aa=Z[2],ba=d.ceil($/_*100);a("div#count").before(a('<div id="count_target"></div>').text(aa).append("<span>"+N(_)+"</span>")),ba>30?a("div#count span").css({color:"white",width:ba+"%","margin-left":"-4px"}):a("div#count span").css({"text-align":"left","margin-left":ba+"%"}),a("div#count div").animate({width:ba+"%"},2500,"swing",function(){a("div#count span").html(N($))})}}else a("div#count").hide();a("a.facebook, a.twitter, a.gplus").each(function(){a(this).hasClass("twitter")&&a(this).attr("href",a(this).attr("href")+Y+"&amp;source="),a(this).attr("href",a(this).attr("href")+encodeURIComponent(Y))});var ca=a("#readmore").attr("href");if(ca||(ca=Y),a("a.mailto").each(function(){var b=a(this).attr("href").replace("UURRLLMMOORREE",encodeURIComponent(ca)).replace("UURRLLRREEFF",encodeURIComponent(Y));b.length>2040&&(b=b.substring(0,2040)),a(this).attr("href",b)}),e){var da=a("#target_selector"),ea=null;f?ea=f:(ea=new Array,a("#petition_signing_country option").each(function(){ea[a(this).val()]=a(this).text()}));var fa=function(b,c,d,e,f,g,h,i){var j,k,l,m,n;if(void 0!=e&&e)for(j in c)void 0!=ea[j]&&(c[j]=ea[j]);do{k=null;for(j in c)null==k?k=j:c[j]<c[k]&&(k=j);if(null!=k){if("object"==typeof f){m=a(g.data),a("input",m).attr("id","pledge_contact_"+k).val(k),a(".pledge_contact_name",m).attr("for","pledge_contact_"+k);var o=a(".pledge_contact_name",m).text(c[k]);if("object"==typeof h&&h[k]&&o.append(a("<span></span>").text(" ("+h[k]+")")),b.append(m),f[k]){var p=0;for(n in f[k])a(".pledge_item_"+n,m).addClass("pledge_status_"+f[k][n]),1==f[k][n]&&p++;p==i&&(a("input",m).attr("disabled","disabled").hide(),a(".pledge_done",m).css("display","inline-block"))}}else l=a("<option></option>"),b.append(l),l.text(c[k]).attr("value",k),d&&l.addClass(d);delete c[k]}}while(null!=k)},ga={},ha=function(a,b){if(void 0!=b&&b)for(var c in a)void 0!=ea[c]&&(a[c]=ea[c]);for(var c in a)ga[a[c].toLowerCase()]=c},ia=!0;a.each(e,function(b,d){var f=void 0==d.pledges?!1:d.pledges;if("object"==typeof f)fa(w,d.choices,null,null,f,w.data("template"),d.infos,w.data("pledge-count"));else{var i=void 0==d.country?!1:d.country,j=a("<div></div>");da.append(j.addClass("ts")),ia&&j.addClass("ts_first");var k=a("<label></label>");j.append(k),k.text(d.name);var l=a("<select></select>"),m=a("<div></div>");j.append(m.addClass("div_select")),m.append(l),i&&(l.addClass("country"),a("#petition_signing_country").change(function(){l.val()||(l.val(a(this).val()),l.val()&&l.change())}));var n=a("<option></option>");if(l.append(n),n.text(ia?"--"+g+"--":h).attr("value",ia&&1==!e.length?"":"all"),void 0!=d.choices){var o=void 0!=d.typfield&&d.typfield,p=void 0!=d.id&&"contact"===d.id;if(p&&n.text(h),l.attr("id","petition_signing_ts_1_copy"),l.attr("name","petition_signing_[ts_1]"),o){ha(d.choices,i);var q=a('<input type="hidden" />');l.before(q);var r=l.attr("id");q.attr("name",l.attr("name")),l.remove(),l=q,l.attr("id",r)}else fa(l,d.choices,null,i);if(p||l.change(function(){var b=a("#petition_signing_ts_2_copy"),d=l.val();d?(b.attr("disabled","disabled"),w.length&&w.empty(),a.ajax({type:"POST",dataType:"json",url:c.location.href.split("#",1)[0],data:{target_selector:d},success:function(c){"object"==typeof c.pledges?(w.empty(),fa(w,c.choices,null,null,c.pledges,w.data("template"),c.infos,w.data("pledge-count")),!D&&I.length&&I.data("jsp").reinitialise()):(a("option.x",b).remove(),fa(b,c.choices,"x",b.hasClass("country"))),b.attr("disabled",null)}})):a("option.x",b).remove()}),o){var s=a('<input type="text" class="search" value="" />');l.after(s),l.hide();var t=a("<div>&#10003;</div>").addClass("correct");m.append(t),t.hide();var u=function(){var a=l.val(),b=s.val(),c=b.toLowerCase();b=c in ga?ga[c]:"",l.val(b),a!==l.val()&&l.change(),l.val()?t.show():t.hide()};s.click(u).keyup(u)}}else l.attr("id","petition_signing_ts_2_copy").attr("disabled","disabled"),l.attr("name","petition_signing_[ts_2]"),w.length&&l.change(function(){var b=a("#petition_signing_ts_1_copy"),d=l.val();d?(b.attr("disabled","disabled"),l.attr("disabled","disabled"),w.length&&w.empty(),a.ajax({type:"POST",dataType:"json",url:c.location.href.split("#",1)[0],data:{target_selector1:b.val(),target_selector2:d},success:function(a){w.empty(),fa(w,a.choices,null,null,a.pledges,w.data("template"),a.infos,w.data("pledge-count")),b.attr("disabled",null),l.attr("disabled",null),!D&&I.length&&I.data("jsp").reinitialise()}})):w.empty()});ia=!1}}),1==a("div.ts",da).length&&(da.addClass("single"),a("#petition_signing_ts_2").remove())}if(O(),K.each(function(){var b=a(this);b.length&&(D?(b.addClass("wkScroll"),C&&b.addClass("wkScroll_iPhone")):b.jScrollPane({mouseWheelSpeed:30}))}),a("#right_tab").hide(),a("#privacy_policy").hide(),T&&(a(".tell .back").remove(),n()),U?(a("#petition, #policat_widget_footer, a.back").hide(),a("#widget_edit_code").val(V),a("#widget_id").val(b),a("#widget_email, #widget_organisation").parent().remove(),a("#h_widget_reg, #p_widget_reg").remove(),a("#p_widget_reg_alt").show(),m()):a("#embed_this_left").hide(),a("#policat_widget_loading").hide(),T&&a("#petition_signing_email_subject_copy, #petition_signing_email_body_copy, #petition_signing_ts_1_copy").attr("disabled","disabled"),a("#policat_widget_right input[type=hidden],textarea.original").each(function(){var b=a(this).attr("id")+"_copy",c=a("#"+b);""==c.val()&&""!=a(this).val()&&c.val(a(this).val())}),a("form#embed2 textarea, form#embed2 input[type=text]").focus(function(){a(this).select()}),a("#widget_petition_text_id_copy").change(function(){a.getJSON("/text/"+a(this).val(),null,function(b,c){for(var d in b)a("#embed2 #widget_"+d+"_copy, #embed2 #widget_"+d).val(b[d])})}),a("#policat_widget_right form").each(function(){var b=a(this),d=!1;a(".submit",b).click(function(){if(d)return!1;d=!0;var e=!1,f=b.attr("id");a(".form_error").removeClass("form_error"),"sign"===f&&(a("#petition_tabs .left").click(),k()),a("input[type=hidden],textarea.original",b).each(function(){var b=a(this).attr("id")+"_copy",c=a("#"+b);c.length&&a(this).val(c.val())});var g=a("#petition_signing_pledges",b);if(g.length){var h=[];a("#pledges input[type=checkbox]:checked").each(function(){h.push(a(this).val())}),g.val(h.join(",")),h.length?I.removeClass("error"):(e=!0,I.addClass("error"))}if(a("input[type=text],input[type=hidden]:not([id=petition_signing_id]):not([id=widget_id]):not([id=widget_ref]):not([id=widget_edit_code])",b).each(function(){var b=a(this),c=a.trim(b.val());""!==c||b.hasClass("not_required")||("text"===b.attr("type")?b.parent().addClass("form_error"):"hidden"===b.attr("type")&&a("#"+b.attr("id")+"_copy").parent().addClass("form_error"),e=!0)}),a("select",b).each(function(){if(""==a("option:selected",this).val()){var b=a(this).parent();b.addClass("form_error");var c=b.prev();c.is("label")&&c.addClass("form_error"),e=!0}}),a("#petition_signing_email, #widget_email",b).each(function(){var b=a(this),c=a.trim(b.val());b.val(c);var d=c.match(/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i);d||(b.parent().addClass("form_error"),e=!0)}),a("input.color",b).each(function(){var b=a(this).val().match(/#[0-9abcdefABCDEF]{6}/);b||(a(this).parent().addClass("form_error"),e=!0)}),a("input.url",b).each(function(){var b=a(this).val(),c=""==b||b.match(/^https?:\/\/[^\"\s]+\.[^\"\s]+$/);c||(a(this).parent().addClass("form_error"),e=!0)}),a("#paypal_amount",b).each(function(){var b=a(this).val().match(/^\d+(\.\d\d?)?$/);b||(a(this).parent().addClass("form_error"),e=!0)}),a("textarea:not(#widget_intro):not(#widget_footer):not(#petition_signing_comment)",b).each(function(){var b=a(this);if(""!==b.val()||b.hasClass("not_required")){if("tellyour_emails"===b.attr("id"))for(var c=b.val().split(/[,\s\n\r]+/),d=0;d<c.length;d++){var f=c[d].match(/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i);if(!f){b.parent().addClass("form_error"),e=!0;break}}}else b.hasClass("original")?a("#"+b.attr("id")+"_copy").parent().addClass("form_error"):b.parent().addClass("form_error"),e=!0}),a("#petition_signing_privacy:not(:checked)",b).each(function(){a(this).parent().is("span")||a(this).wrap('<span class="checkbox"></span>'),a(this).parent().parent().addClass("form_error"),e=!0}),e)d=!1;else if("paypal"==f)c.open(b.attr("action")+"?"+b.serialize(),"_blank"),d=!1;else{var i="ref";switch(f){case"sign":i="petition_signing[ref]",a("#petition_signing_email_subject_copy, #petition_signing_email_body_copy").attr("disabled","disabled");break;case"tell":i="tellyour[ref]";break;case"embed":i="widget[ref]"}a.post(c.location.href.split("#",1)[0],b.serialize()+"&"+i+"="+Y,function(b){var c="";for(var e in b.errors)c+="<p>"+b.errors[e]+"</p>";switch(f){case"sign":n(),a("#policat_widget_right .tell .error").html(c),a(".tell .back").remove(),T=!0;break;case"tell":a("#tellyour_emails").val(""),a("#policat_widget_right .error").html(c);break;case"embed":b.isValid?a("#embed_markup").val(b.extra.markup):"landing_url"in b.errors&&a("#widget_landing_url_copy").parent().addClass("form_error")}d=!1},"json")}return!1})}),a("#footer_ot").length&&a("#petition input, #petition select, #petition textarea").attr("disabled","disabled"),a("#petition_tabs").each(function(){var b=a(this);a(".left",this).click(function(){b.removeClass("right").addClass("left"),a("#right_tab").hide(),a("#left_tab").show(),!D&&F.length&&F.data("jsp").reinitialise()}),a(".right",this).click(function(){b.removeClass("left").addClass("right"),a("#right_tab").show(),a("#left_tab").hide(),!D&&H.length&&H.data("jsp").reinitialise()})}),a("#a_embed_this").click(function(){m()}),a("#a_donate, #a_donate2").click(function(){l()}),a("#a_share, #a_share2").click(function(){a("#policat_widget_right div.tell .thankyou").hide(),n()}),a("div.privacy label").attr("for","useless").click(function(){o()}),a("a.newwin, div#policat_widget_left a:not(.back):not(.nonewwin)").click(function(){var b=a(this).attr("href");return b&&c.open(b,"_blank"),!1}),a("a.back").click(function(){return T?(n(),j("petition")):k(),a(this).parent().is(".tell")&&a(".thankyou").show(),!1}),w.length){var ja="";w.on("click","a.pledge_item",function(){var b=a(this),c=b.parents(".pledge_icons"),d=b.data("for"),e=a(d),f=!b.hasClass("pledge_item_active");return c.after(e),f?e.show():e.hide(),a(".pledge_item_active",w).removeClass("pledge_item_active"),f&&b.addClass("pledge_item_active"),ja&&ja!=d&&a(ja).hide(),ja=d,!D&&I.length&&I.data("jsp").reinitialise(),!1})}P(),x=0,a(c).resize(P),a("img:not(.no_load)",p).each(function(){var b=a(this).attr("src");if(b){var c=new Image;c.onload=function(){setTimeout(P,100),setTimeout(P,1e3),setTimeout(P,2e3)},c.src=b}}),a(".external_links a").attr("target","_blank")}(a,widget_id,window,Math,target_selectors,CT_extra,t_sel,t_sel_all)});
//# sourceMappingURL=policat_widget.js.map