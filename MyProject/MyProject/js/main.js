/**
 * Created by Vivek on 8/3/2016.
 */

console.log("loadrd");
function navigate(url)
{
    console.log("navigate called");
    window.location.assign(url);
}

function showHintPost(element) {
    hint = '';
    box =$('#contest-id');
    box.attr('class', 'hidden');
    switch (parseInt(element.value))
    {
        case 'contest' : {hint ='Share with people participating or attending Specified contest id';
                    box.attr('class', 'form-control');
                    break;}
        case 'followers' : hint='Share with your followers'; break;
        case 'fans' : hint = 'Your Fans will See this post with notification'; break;
        case 'audience' : hint='Shared with Followers and fans'; break;
        default: hint='';
    }
    $('#post-hint-text').html(hint);
}