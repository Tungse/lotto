window.fbAsyncInit = function()
{
    try
    {
        FB.init(
        {
            appId: appId,
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
	//if(redirect) window.top.location.href = appUrl; 

    $(document).on('click','.button-to-NEXT_TEMPLATE', function()
    {
        if(userId == '')
        {
            FB.login(function(response)
            {
                if(response && response.authResponse && response.authResponse.userID) window.location.href = dirname+'?a=NEXT_TEMPLATE&pageId='+pageId;
            });
        }
        else window.location.href = dirname+'?a=NEXT_TEMPLATE&pageId='+pageId;
    });
});