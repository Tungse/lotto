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
	//if(setting.redirect) window.top.location.href = setting.tabAppUrl; 

    $(document).on('click','.button-to-NEXT_TEMPLATE', function()
    {
        if(setting.userId == '')
        {
            FB.login(function(response)
            {
                if(response && response.authResponse && response.authResponse.userID) window.location.href = setting.dirname+'?a=NEXT_TEMPLATE&pageId='+pageId+'&userId='+response.authResponse.userID;
            });
        }
        else window.location.href = setting.dirname+'?a=NEXT_TEMPLATE&pageId='+pageId+'&userId'+setting.userId;
    });
});