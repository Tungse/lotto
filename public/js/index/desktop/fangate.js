window.fbAsyncInit = function()
{
    try
    {
        FB.init(
        {
            appId: setting.appId,
            status: true,
            cookie: true,
            xfbml:  true
        });

        FB.Canvas.setSize({width:810, height:900});   
        FB.Event.subscribe('edge.create', function(href, widget) 
        {
            FB.Canvas.setAutoGrow();  
        });
    }
    catch(e){ }
};

$(function()
{

});