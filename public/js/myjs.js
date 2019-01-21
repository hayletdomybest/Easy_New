function focusOn()
{
    var CurrSelected = null;
    var oNews = document.getElementById('mainNew');
    var oNew = oNews.getElementsByTagName('ul');
    var oSelectedNew = document.getElementById('SelectNew');
    var oSelectedTitle = document.getElementById('text_main');

    this.init = function(){
        for(var i = 0 ; i<oNew.length ; i++)
        {
            var oImg = oNew[i].getElementsByTagName('img')[0];
            oImg.index = i;
            oImg.onmouseover = UlChild_Method;
            oNew[i].onmouseover = UlClick_Method;
        }
        oNew[0].onmouseover();
    };;
    var UlChild_Method = function(){
        oNew[this.index].onmouseover();
    }
    var UlClick_Method = function()
    {
        UlDisplaySelected_Method(this);
        UlClear_Method(this);
        this.style.background = 'yellow';
        
    }
    var UlClear_Method = function(Curr)
    {
        if(CurrSelected)
            CurrSelected.style.background = '';
        CurrSelected = Curr;
    }
    var UlDisplaySelected_Method = function(obt)
    {
        var oImg = obt.getElementsByTagName('img')[0];
        var oTitle = obt.getElementsByTagName('p')[0];
        oSelectedNew.style.background = 'url(' + oImg.src +')';
        oSelectedNew.style.backgroundRepeat = 'no-repeat';
        oSelectedNew.style.backgroundSize = '100%';
        oSelectedTitle.innerHTML = oTitle.innerHTML;
    }


    this.init();


}



