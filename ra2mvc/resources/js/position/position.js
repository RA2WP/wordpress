
function capsulescallback() {

    //find whose background is blue//
    strArray1 = ['A', 'B', 'C', 'D', 'E'];
    strArray2 = ['1', '2', '3', '4', '5'];
    for (i = 0; i < 5; i++)
    {
        for (j = 0; j < 5; j++)
        {

            PosId = 'list'.concat(strArray1[i]).concat(strArray2[j]);
            //alert(document.getElementById(PosId).style.backgroundColor);
            if (document.getElementById(PosId).style.backgroundColor == 'rgb(51, 170, 255)')
            {
                poschosen = document.getElementById(PosId).innerHTML;
            }
        }
    }

    //end find whose background is blue//

    tempstr = '';
    /* with capsules 
     for (i = 0; i < 5; i++)
     {
     alert(document.getElementById('form_caps').caps[0]);
     if (document.getElementById('form_caps').caps[i].checked === true)
     {
     alert(i);
     capschosen = document.getElementById('form_caps').caps[i].value;
     tempstr = tempstr.concat(poschosen).concat(capschosen);
     }
     }*/
    tempstr = poschosen;
    if (document.getElementById("IdPositionToKey").value === 1)
    {
        document.getElementById('Id_Reactor_Pos_To').value = tempstr;
    }
    else
    {
        document.getElementById('Id_Reactor_Pos').value = tempstr;
    }

}

function positioncallback(posid) {
    poschosen = posid.innerHTML.replace(/<.+?>/gim, '');

    tempstr = '';
    /* with capsules 
     for (i = 0; i < 5; i++)
     {
     if (document.getElementById('form_caps').caps[i].checked == true)
     {
     capschosen = document.getElementById('form_caps').caps[i].value;
     tempstr = tempstr.concat(poschosen).concat(capschosen);
     }
     }*/
    tempstr = poschosen;


    //document.getElementById('Id_Reactor_Pos').value = tempstr;

    if (document.getElementById("IdPositionToKey").value == 1)
    {
        document.getElementById('Id_Reactor_Pos_To').value = tempstr;
    }
    else
    {
        document.getElementById('Id_Reactor_Pos').value = tempstr;
    }
    //document.getElementById('Id_Reactor_Pos').value = tempstr;
//alert(tempstr);
    document.getElementById('PosforCaps').innerHTML = poschosen;


    //set all the background to gray//
    strArray1 = ['A', 'B', 'C', 'D', 'E'];
    strArray2 = ['1', '2', '3', '4', '5'];
    //alert(strArray1[0].concat('list'));

    for (i = 0; i < 5; i++)
    {
        for (j = 0; j < 5; j++)
        {

            PosId = 'list'.concat(strArray1[i]).concat(strArray2[j]);
            //alert(PosId)
            document.getElementById(PosId).style.backgroundColor = '#f5f5f5';
        }
    }
    //end set all the background to gray//

    posid.style.backgroundColor = '#33aaff'; //blue
    oldcolor = posid.style.backgroundColor;
}

function positioncallbackover(posid) {
    oldcolor = posid.style.backgroundColor;
    newcolor = '#ff8000'; //orange
    posid.style.backgroundColor = newcolor; //orange
    posid.style.color = '#ffffff';
}

function positioncallbackout(posid) {
    //oldcolor = posid.style.backgroundColor;
    //newcolor = '#ff8000'; //orange
    posid.style.backgroundColor = oldcolor; //orange
    posid.style.color = '#000000';
}

function closeboxforpos() {
    /* with capsules capsulescallback();*/
    document.getElementById("info").style.display = "none";
    document.getElementById('form_checkbox').style.marginLeft = '0px';
}




////////////////////////////////backup position with capsules//////////////
/*
 function capsulescallback() {
 
 //find whose background is blue//
 strArray1 = ['A', 'B', 'C', 'D', 'E'];
 strArray2 = ['1', '2', '3', '4', '5'];
 for (i = 0; i < 5; i++)
 {
 for (j = 0; j < 5; j++)
 {
 
 PosId = 'list'.concat(strArray1[i]).concat(strArray2[j]);
 //alert(document.getElementById(PosId).style.backgroundColor);
 if (document.getElementById(PosId).style.backgroundColor == 'rgb(51, 170, 255)')
 {
 poschosen = document.getElementById(PosId).innerHTML;
 }
 }
 }
 
 //end find whose background is blue//
 
 tempstr = '';
 for (i = 0; i < 5; i++)
 {
 alert(document.getElementById('form_caps').caps[0]);
 if (document.getElementById('form_caps').caps[i].checked === true)
 {
 alert(i);
 capschosen = document.getElementById('form_caps').caps[i].value;
 tempstr = tempstr.concat(poschosen).concat(capschosen);
 }
 }
 if (document.getElementById("IdPositionToKey").value === 1)
 {
 document.getElementById('Id_Reactor_Pos_To').value = tempstr;
 }
 else
 {
 document.getElementById('Id_Reactor_Pos').value = tempstr;
 }
 
 }
 
 function positioncallback(posid) {
 poschosen = posid.innerHTML.replace(/<.+?>/gim, '');
 
 tempstr = '';
 for (i = 0; i < 5; i++)
 {
 if (document.getElementById('form_caps').caps[i].checked == true)
 {
 capschosen = document.getElementById('form_caps').caps[i].value;
 tempstr = tempstr.concat(poschosen).concat(capschosen);
 }
 }
 
 //document.getElementById('Id_Reactor_Pos').value = tempstr;
 if (document.getElementById("IdPositionToKey").value == 1)
 {
 document.getElementById('Id_Reactor_Pos_To').value = tempstr;
 }
 else
 {
 document.getElementById('Id_Reactor_Pos').value = tempstr;
 }
 
 document.getElementById('PosforCaps').innerHTML = poschosen;
 
 
 //set all the background to gray//
 strArray1 = ['A', 'B', 'C', 'D', 'E'];
 strArray2 = ['1', '2', '3', '4', '5'];
 //alert(strArray1[0].concat('list'));
 for (i = 0; i < 5; i++)
 {
 for (j = 0; j < 5; j++)
 {
 
 PosId = 'list'.concat(strArray1[i]).concat(strArray2[j]);
 //alert(PosId)
 document.getElementById(PosId).style.backgroundColor = '#f5f5f5';
 }
 }
 //end set all the background to gray//
 
 posid.style.backgroundColor = '#33aaff'; //blue
 oldcolor = posid.style.backgroundColor;
 }
 
 function positioncallbackover(posid) {
 oldcolor = posid.style.backgroundColor;
 newcolor = '#ff8000'; //orange
 posid.style.backgroundColor = newcolor; //orange
 posid.style.color = '#ffffff';
 }
 
 function positioncallbackout(posid) {
 //oldcolor = posid.style.backgroundColor;
 //newcolor = '#ff8000'; //orange
 posid.style.backgroundColor = oldcolor; //orange
 posid.style.color = '#000000';
 }
 
 function closeboxforpos() {
 capsulescallback();
 document.getElementById("info").style.display = "none";
 document.getElementById('form_checkbox').style.marginLeft = '0px';
 }
 
 */