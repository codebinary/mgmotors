jQuery.fn.simpleLoadingModal = function (options) {
  var settings = {
    delay: 1000,
    background: '#ffffff',
    image: './assets/img/ajax-loader.gif',
    zIndex: 999,
    preload: true,
    preloadFn: function(){}
  };
  thisOb = this;
  return this.each(function () {
    if (options) {
      $.extend(settings, options);
    }

    function centerToBox(cur, box) {
      var posTopOffset = ($(box).height()) / 2-24;
      var posLeftOffset = ($(box).width()) / 2-24;
      $(cur)
          .css({
              'position': 'absolute',
              'left': posLeftOffset,
              'top': posTopOffset,
              "z-index": 1000
          });
      return this;
    }

    function ajaxLoadList() {
      if(settings.preload){
        var a = $(thisOb).height();
        var b = $(thisOb).width();
        $(thisOb).append("<div id=\"dvGlobalMask\"></div><div id=\"loader\"><img src=\"" + settings.image + "\"></div>");
        $("#dvGlobalMask")
            .css({
                width: b,
                height: a,
                'background-color': settings.background,
                'position': 'absolute',
                'left': 0,
                'top': 0,
                'display': 'inline-block',
                "z-index": settings.zIndex
            }).fadeTo("fast", 0.7);
        centerToBox($("#loader"), $(thisOb));
      }else{
        $("#loader").show().delay(settings.delay).fadeOut(function(){
          $(this).remove();
        });
        $("#dvGlobalMask").delay(settings.delay).fadeOut(function(){
          if($.isFunction(settings.preloadFn)){
            settings.preloadFn.call(this);
          }
          $(this).remove();
        });
      }
    }
    $(function () {
      ajaxLoadList();
    });
    return this;
  });
}