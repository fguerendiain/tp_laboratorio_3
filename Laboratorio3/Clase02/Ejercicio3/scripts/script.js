window.onload = function()
{
/*
    var lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores libero odit? Deleniti accusamus, neque aut dignissimos ut, saepe nobis pariatur dolorum vero iure similique voluptates quisquam, atque perferendis dolor!";
    var parrafos = document.getElementsByClassName("medio");

    for(var i = 0 ; i < parrafos.length ; i++)
    {
        parrafos[i].innerHTML = lorem
    }
*/
    var lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores libero odit? Deleniti accusamus, neque aut dignissimos ut, saepe nobis pariatur dolorum vero iure similique voluptates quisquam, atque perferendis dolor!";
    var parrafos = document.getElementsByTagName("p");

    for(var i = 0 ; i < parrafos.length ; i++)
    {
        parrafos[i].innerHTML = lorem
    }
}

