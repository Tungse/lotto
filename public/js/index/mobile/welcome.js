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
    }
    catch(e){ }
};

$(function()
{
    $(document).on('click','.button-to-NEXT_TEMPLATE', function()
    {
        if(setting.userId == '')
        {
            FB.login(function(response)
            {
                if(response && response.authResponse && response.authResponse.userID) window.location.href = setting.dirname+'?a=NEXT_TEMPLATE&mobile=true&userId='+response.authResponse.userID;
            });
        }
        else window.location.href = setting.dirname+'?a=NEXT_TEMPLATE&mobile=true&userId='+setting.userId;
    });
});